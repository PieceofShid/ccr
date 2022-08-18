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
        Schema::create('heads', function (Blueprint $table) {
            $table->id();
            $table->string('tipe');
            $table->string('waktu');
            $table->string('total_produksi')->nullable();
            $table->string('ratio_1tr')->nullable();
            $table->string('ratio_2tr')->nullable();
            $table->string('satu_tr_kai_lai')->nullable();
            $table->string('satu_tr_kai_wai')->nullable();
            $table->string('satu_tr_less_pipe')->nullable();
            $table->string('satu_tr_reguler_lai')->nullable();
            $table->string('satu_tr_reguler_wai')->nullable();
            $table->string('dua_tr_kai_lai')->nullable();
            $table->string('dua_tr_kai_wai')->nullable();
            $table->string('dua_tr_less_pipe')->nullable();
            $table->string('dua_tr_reguler_lai')->nullable();
            $table->string('dua_tr_reguler_wai')->nullable();
            $table->string('dua_tr_ethanol')->nullable();
            $table->string('overtime')->nullable();
            $table->string('tack_time')->nullable();
            $table->date('tanggal');
            $table->string('jam');
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
        Schema::dropIfExists('heads');
    }
};
