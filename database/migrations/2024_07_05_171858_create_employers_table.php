<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->String("nom");
            $table->String("prenom");
            $table->String("email",255);
            $table->String("contact");
            $table->unsignedBigInteger("departement_id");
            $table->foreign("departement_id")->references("id")->on("departements");  
            $table->integer("montant_journalier")->nullable();

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
        Schema::dropIfExists('employers');
    }
};
