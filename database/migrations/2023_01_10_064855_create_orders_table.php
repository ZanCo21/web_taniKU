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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name');
            $table->string('email');
            $table->integer('phone');
            $table->text('address');
            $table->string('nama_provinsi');
            $table->string('nama_kota');
            $table->string('kurir');
            $table->string('nama_layanan');
            $table->integer('kode_pos');
            $table->string('barang');
            $table->integer('ongkos_kirim');
            $table->integer('weight');
            $table->integer('subtotal_produk');
            $table->bigInteger('total_harga');
            $table->enum('status', ['Unpaid', 'Paid']);
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
        Schema::dropIfExists('orders');
    }
};
