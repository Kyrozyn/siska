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
        Schema::create('followup_temuan_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\FollowupTemuan::class);
            $table->foreignIdFor(\App\Models\PertanyaanFollowupTemuan::class);
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
        Schema::dropIfExists('followup_temuan_details');
    }
};
