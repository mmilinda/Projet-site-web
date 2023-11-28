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
<<<<<<<< HEAD:database/migrations/2023_11_22_172152_contact.php
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->string('un');
            $table->string('nom');
            $table->string('email')->unique();
            $table->string('tel');
            $table->string('message');
            $table->string('created_at');
            $table->string('updated_at');
========
        Schema::create('criteres', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('email');
            $table->integer('numero_tel');// Utiliser 'integer' pour un nombre entier
            $table->integer('nombre_chambre');
            $table->timestamps();
>>>>>>>> 39945241939c011d9996139068b2e7bec38286ad:database/migrations/2023_11_23_121222_create_criteres_table.php
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:database/migrations/2023_11_22_172152_contact.php
        //
========
        Schema::dropIfExists('criteres');
>>>>>>>> 39945241939c011d9996139068b2e7bec38286ad:database/migrations/2023_11_23_121222_create_criteres_table.php
    }
};
