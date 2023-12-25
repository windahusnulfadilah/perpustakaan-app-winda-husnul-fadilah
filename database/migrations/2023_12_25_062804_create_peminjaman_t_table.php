<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman_t', function (Blueprint $table) {
            $table->id();
            $table->string('no_peminjaman')->unique();
            $table->foreignId('books_id')->constrained('books');
            $table->foreignId('pengunjung_id')->constrained('pengunjung');
            $table->foreignId('pegawai_id')->constrained('pegawai');
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('peminjaman_t');
    }
}
