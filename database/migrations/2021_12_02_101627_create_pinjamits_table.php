<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreatePinjamitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjamits', function (Blueprint $table) {
            $table->id();
            $table->string("nip_peminjam");
            $table->string("id_barang");
            $table->datetime("tanggal_pinjam");
            $table->datetime("tanggal_kembali");
            $table->string("nip_petugas");
            $table->string("status_peminjaman");
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
        Schema::dropIfExists('pinjamits');
    }
}
