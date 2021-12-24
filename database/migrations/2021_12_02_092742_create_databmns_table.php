<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabmnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('databmns', function (Blueprint $table) {
            $table->id();
            $table->string("nomorbmn");
            $table->string("jenisbarang");
            $table->string("merk");
            $table->string("tipe");
            $table->string("tahun_perolehan");
            $table->string("harga_perolehan");
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
        Schema::dropIfExists('databmns');
    }
}
