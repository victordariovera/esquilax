<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GdaGrupoPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gda_grupo_persona', function (Blueprint $table) {

            $table->bigInteger('id_grupo')->nullable(false);
            $table->string('legajo')->nullable(false);
            $table->bigInteger('id_role')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gda_grupo_persona');
    }
}
