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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 30);
            $table->string('Stazione_partenza', 30);
            $table->string('Stazione_arrivo',30);
            $table->time('Orario_partenza');
            $table->time('Orario_arrivo');
            $table->string('Codice_treno', 30);
            $table->decimal('Numero_carreggiate', 4,0);
            $table->boolean('In_orario');
            $table->boolean('Cancellato');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
