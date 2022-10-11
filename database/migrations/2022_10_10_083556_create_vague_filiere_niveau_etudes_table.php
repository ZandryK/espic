<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVagueFiliereNiveauEtudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vague_filiere_niveau_etudes', function (Blueprint $table) {
            $table->id();
            $table->foreignId("filiere_niveau_etude_id")->constrained()->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("vague_id")->constrained()->onDelete('cascade')->onUpdate("cascade");
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
        Schema::dropIfExists('vague_filiere_niveau_etudes');
    }
}
