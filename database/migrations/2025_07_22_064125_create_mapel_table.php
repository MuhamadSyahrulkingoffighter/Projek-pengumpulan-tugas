<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapelTable extends Migration
{
    public function up()
    {
        Schema::create('mapel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mapel');
            $table->unsignedBigInteger('guru_id')->nullable(); 
            $table->timestamps();

            $table->foreign('guru_id')->references('id')->on('guru')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('mapel');
    }
}
