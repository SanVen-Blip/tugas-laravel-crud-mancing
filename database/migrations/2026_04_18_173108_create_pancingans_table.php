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
    Schema::create('pancingans', function (Blueprint $table) {
        $table->id();
        $table->string('spesies_ikan');
        $table->decimal('berat_kg', 8, 2); 
        $table->string('lokasi_mancing');
        $table->string('umpan');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pancingans');
    }
};
