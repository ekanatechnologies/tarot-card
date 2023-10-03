<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('consultant_infos', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->smallInteger('experience')->nullable();
            $table->string('about',512)->nullable();
            $table->string('specialization',2048)->nullable();
            $table->string('qualification',512)->nullable();
            $table->decimal('vid_consult_charge',7,2)->comment('Video Call Charge Per Second')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultant_infos');
    }
};
