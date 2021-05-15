<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->integer('id_siswa');
            $table->integer('id_kelas');
            $table->integer('id_priode');
            $table->string('status');
            $table->string('total_pembayaran');
            $table->boolean('januari');
            $table->boolean('februari');
            $table->boolean('maret');
            $table->boolean('april');
            $table->boolean('mei');
            $table->boolean('juni');
            $table->boolean('juli');
            $table->boolean('agustus');
            $table->boolean('september');
            $table->boolean('oktober');
            $table->boolean('november');
            $table->boolean('desember');
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
        Schema::dropIfExists('pembayarans');
    }
}
