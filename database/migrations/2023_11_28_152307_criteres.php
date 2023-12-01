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
        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('prenom');
        //     $table->string('nom');
        //     $table->integer('telephone');
        //     $table->string('email')->unique();
        //     $table->string('type_profil')->nullable();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->rememberToken();

       
           
        // });
        Schema::create('criteres', function (Blueprint $table) {
            $table->string('email');
            $table->integer('numero_tel');// Utiliser 'integer' pour un nombre entier
            $table->integer('nombre_chambre');
            $table->timestamps();
            
            });
    }
       
        
           
        
    
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('criteres');
    }
};