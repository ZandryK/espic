<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursVgNiveauEtudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours_vg_niveau_etudes', function (Blueprint $table) {
            $table->id();
            $table->foreignId("cour_id")->constrained('cours')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId("vg_niveau_etude_id")->constrained('vague_filiere_niveau_etudes')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cours_vg_niveau_etudes');
    }
}
