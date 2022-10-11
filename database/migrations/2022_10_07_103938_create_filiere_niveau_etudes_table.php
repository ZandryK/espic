<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiliereNiveauEtudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filiere_niveau_etudes', function (Blueprint $table) {
            $table->id();
            $table->foreignId("filiere_id")->constrained()->onDelete("cascade")->onUpdate('cascade');
            $table->foreignId('niveau_etude_id')->constrained()->onDelete('cascade')->onUpdate("cascade");
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
        Schema::dropIfExists('filiere_niveau_etudes');
    }
}
