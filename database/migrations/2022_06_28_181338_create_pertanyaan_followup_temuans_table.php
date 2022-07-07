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
        Schema::create('pertanyaan_followup_temuans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pertanyaan_followup_temuan');
            $table->string('satuan')->nullable();
            $table->enum('type',['text','number','optionc','option1']);
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
        Schema::dropIfExists('pertanyaan_followup_temuans');
    }
};
