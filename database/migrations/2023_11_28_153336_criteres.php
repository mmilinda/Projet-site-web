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
        Schema::table('criteres', function (Blueprint $table) {
            $table->unsignedBigInteger('area_id')->nullable();
            $table->foreign('area_id')->references('id')->on('areas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('criteres', function (Blueprint $table) {
            $table->dropForeign(['area_id']); // Supprimer la clé étrangère
            $table->dropColumn('area_id'); // Supprimer la colonne video_id
        });
    }
};
