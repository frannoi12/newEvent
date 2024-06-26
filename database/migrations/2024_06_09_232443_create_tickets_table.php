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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->string('nombre_place');
            $table->string('type');
            $table->integer('evenements_id');
            $table->foreign('evenements_id')->references('id')->on('evenements');
            $table->integer("templates_id");
            $table->foreign("templates_id")->references("id")->on("templates");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
