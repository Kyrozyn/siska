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
        Schema::create('temuans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class);
            $table->foreignIdFor(\App\Models\MenuTemuan::class);
            $table->enum('status', ['Menunggu Konfirmasi KTT', 'Menunggu Konfirmasi Manager','Diterima,Menunggu Follow Up Supervisor','Ditolak','Follow up Ditolak, Upload Ulang','Selesai']);
            $table->string('catatan')->nullable();
            $table->date('followup_sebelum_tanggal')->nullable();
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
        Schema::dropIfExists('temuans');
    }
};
