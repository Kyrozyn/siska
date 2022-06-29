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
        Schema::create('menu_temuans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_menu_temuan');
            $table->foreignIdFor(\App\Models\MenuTemuan::class)->nullable();
            $table->boolean('punya_submenu')->default(false);
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
        Schema::dropIfExists('menu_temuans');
    }
};
