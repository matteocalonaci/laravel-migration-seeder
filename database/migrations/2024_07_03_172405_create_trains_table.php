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
            $table->string('company', 30);
            $table->string('departure_station', 30);
            $table->string('arrival_station',30);
            $table->time('departure_time', 4);
            $table->time('arrival_time', 4);
            $table->string('train_code', 30);
            $table->decimal('number_carriager', 4);
            $table->boolean('in_time',);
            $table->boolean('delited',);

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
