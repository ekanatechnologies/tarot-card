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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->text('path');
            $table->string('reference',512)->nullable()->comment('For what this file is stored');
            $table->string('reference_id',512)->nullable()->comment('Relation ID');
            $table->text('additional')->nullable();
            $table->tinyInteger('is_local')->default('1')->comment('1= File stored on local 0= File is a url');
            $table->string('created_by',5)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
