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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->integer('telephone');
            $table->string('email')->unique();
            $table->string('type_user')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('created_at');
            $table->string('updated_at');
            $table->rememberToken();

       
           
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
