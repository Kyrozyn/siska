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
        Schema::create('temuan_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Temuan::class);
            $table->foreignIdFor(\App\Models\PertanyaanTemuan::class);
            $table->text('jawaban');
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
        Schema::dropIfExists('temuan_details');
    }
};
