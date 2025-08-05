<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Tugas;
use App\Models\Pengumpulan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class WaliKelasController extends Controller
{
    public function index()
{
    $guru = Guru::where('user_id', Auth::id())->first();

    if (!$guru) {
        abort(403, 'Data guru tidak ditemukan.');
    }

    $kelas = Kelas::where('guru_id', $guru->id)->with('siswa')->first();

    if (!$kelas) {
        return view('wali_kelas.dashboard', [
            'guru' => $guru,
            'kelas' => null,
            'siswa' => [],
            'tugas' => [],
            'pengumpulan' => []
        ]);
    }

    $siswa = $kelas->siswa;
    $tugas = Tugas::where('kelas_id', $kelas->id)->get();
    $pengumpulan = Pengumpulan::whereIn('siswa_id', $siswa->pluck('id'))->get();

    return view('wali_kelas.dashboard', compact('guru', 'kelas', 'siswa', 'tugas', 'pengumpulan'));
}

}
