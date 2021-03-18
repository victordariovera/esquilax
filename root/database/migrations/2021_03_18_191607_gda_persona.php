<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GdaPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gda_persona', function (Blueprint $table) {
            $table->string('legajo')->unique(); // Este campo se solicita al alta de un usuario que usa el modulo guardias
            $table->bigInteger('user_id'); // Vincula el id de la tabla users de auth con la persona de guardia
            $table->string('nombre');
            $table->string('apellido');
            $table->string('ani', 11); // Este campo se solicita al alta de un usuario que usa el modulo guardias
            $table->boolean('guardia')->default(0); 
            $table->boolean('status')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('last_password_change')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gda_persona');
    }
}
