<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buat_tabel_produk', function(Blueprint $tb){
            $tb->increments('id_produk');
            $tb->string('nama_produk');
            $tb->integer('harga_beli');
            $tb->integer('harga_jual');
            $tb->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('produk');
    }
};
