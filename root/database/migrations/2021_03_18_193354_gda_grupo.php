<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GdaGrupo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gda_grupo', function (Blueprint $table) {
            $table->bigIncrements('id_grupo')->unique(); 
            $table->string('nombre');
            $table->string('rp'); // Routing Point (Genesys), destino telefonico del grupo.
            $table->boolean('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gda_grupo');
    }
}
