<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Models\Tugas;
use App\Models\Pengumpulan;
use App\Models\Jadwal;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function dashboard()
    {
        $siswa = Siswa::where('user_id', Auth::id())->first();

        $tugas = Tugas::where('kelas_id', $siswa->kelas_id)->get();

        $tugasAktif = $tugas->where('deadline', '>=', now())->count();

        $tugasTerkumpul = Pengumpulan::where('siswa_id', $siswa->id)->count();

        $rataNilai = Pengumpulan::where('siswa_id', $siswa->id)
                        ->whereNotNull('nilai')
                        ->avg('nilai');

        $tugasBaru = $tugas->sortByDesc('created_at')->take(5);

        return view('siswa.dashboard', compact(
            'tugasAktif', 'tugasTerkumpul', 'rataNilai', 'tugasBaru'
        ));
    }


    public function daftarPengumpulan()
    {
        $pengumpulan = Pengumpulan::with('tugas', 'siswa')->where('siswa_id', Auth::user()->siswa->id)->get();

        return view('siswa.pengumpulan.index', compact('pengumpulan'));
    }

    public function formPengumpulan()
    {
        $siswa = Siswa::where('user_id', Auth::id())->first();

        if (!$siswa) {
            return back()->with('error', 'Data siswa tidak ditemukan.');
        }

        $tugas = Tugas::where('kelas_id', $siswa->kelas_id)->get();

        return view('siswa.pengumpulan.create', compact('tugas'));
    }

    public function simpanPengumpulan(Request $request)
    {
        $request->validate([
            'tugas_id' => 'required|exists:tugas,id',
            'file' => 'required|file|max:2048',
        ]);

        $path = $request->file('file')->store('pengumpulan', 'public');

        $siswa = Siswa::where('user_id', Auth::id())->first();

        if (!$siswa) {
            return back()->with('error', 'Data siswa tidak ditemukan.');
        }

        Pengumpulan::create([
            'tugas_id' => $request->tugas_id,
            'siswa_id' => $siswa->id,
            'file' => $path,
        ]);

        return redirect()->route('siswa.pengumpulan.index')->with('success', 'Tugas berhasil dikumpulkan!');
    }
    public function riwayatNilai()
    {
        $siswa = Siswa::where('user_id', Auth::id())->first();

        if (!$siswa) {
            abort(404, 'Siswa tidak ditemukan');
        }

        $riwayat = Pengumpulan::with('tugas')
            ->where('siswa_id', $siswa->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('siswa.pengumpulan.riwayat', compact('riwayat'));
    }
        public function profil()
    {
        $user = Auth::user();
        return view('siswa.profil', [
            'user' => $user,
            'siswa' => $user->siswa,
        ]);
    }

}
