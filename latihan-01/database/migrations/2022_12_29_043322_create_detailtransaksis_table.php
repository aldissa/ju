<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailtransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailtransaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('produk_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('transaksi_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->integer('totalharga');
            $table->integer('qty');
            $table->enum('status', ['keranjang','checkout']);
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
        Schema::dropIfExists('detailtransaksis');
    }
}
