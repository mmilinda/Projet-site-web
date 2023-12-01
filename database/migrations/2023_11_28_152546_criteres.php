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
    //     Schema::create('contact', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('un');
    //         $table->string('nom');
    //         $table->string('email')->unique();
    //         $table->string('tel');
    //         $table->string('message');
    //         $table->string('created_at');
    //         $table->string('updated_at');

       
    // });
    Schema::create('criteres', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->string('email');
        $table->integer('numero_tel');// Utiliser 'integer' pour un nombre entier
        $table->integer('nombre_chambre');
        $table->string('photo');
        $table->string('type_property');
        $table->float('price');
        $table->integer('bath');
        $table->string('wifi');
        $table->string('city_view');
        $table->string('elevator');
        $table->string('parking');
        $table->string('level');
        $table->string('date_of_availability');
        $table->timestamps();


        
    });
   
}
public function down(): void
{
    //
    Schema::dropIfExists('criteres');
}

 };

