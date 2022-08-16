<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('guru_id');
            $table->bigInteger('matapelajaran_id');
            $table->string('materipelajaran');
            $table->bigInteger('kelas_id');
            $table->enum('jenispembelajaran', ['ptm', 'pjj']);
            $table->string('linkpembelajaran')->nullable();
            $table->string('absensi');
            $table->string('keterangan')->nullable();
            $table->string('dokumentasi');
            $table->time('mulai');
            $table->time('selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda');
    }
};
