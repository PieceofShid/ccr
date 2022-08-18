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
        Schema::create('cranks', function (Blueprint $table) {
            $table->id();
            $table->string('tipe');
            $table->string('waktu');
            $table->string('total_produksi')->nullable();
            $table->string('ratio_1tr')->nullable();
            $table->string('ratio_2tr')->nullable();
            $table->string('satu_tr')->nullable();
            $table->string('dua_tr')->nullable();
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
        Schema::dropIfExists('cranks');
    }
};
