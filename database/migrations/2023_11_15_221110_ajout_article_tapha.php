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
        Schema::create('ajout_article_tapha', function (Blueprint $table){ 
            $table->bigIncrements('id');
            $table->string('photo');
            $table->string('titre');
            $table->string('contenu');
            $table->string('created_at');
            $table->string('update_at'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
