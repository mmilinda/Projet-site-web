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
<<<<<<<< HEAD:database/migrations/2023_11_23_195438_contacts.php
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('un');
            $table->string('nom');
            $table->string('email')->unique();
            $table->string('tel');
            $table->string('created_at');
            $table->string('updated_at');

========
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('nomcity');
            $table->timestamps();
>>>>>>>> 39945241939c011d9996139068b2e7bec38286ad:database/migrations/2023_11_23_101625_create_cities_table.php
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
