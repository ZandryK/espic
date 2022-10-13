<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantVaguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiant_vagues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etudiant_id')->constrained("etudiants")->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId('vgflnv_id')->constrained("vague_filiere_niveau_etudes")->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('etudiant_vagues');
    }
}
