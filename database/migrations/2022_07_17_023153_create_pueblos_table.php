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
        Schema::create('pueblos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('completo');
            $table->text('descripcion');
            $table->string('fiesta');
            $table->string('poblacion');
            $table->string('latitud');
            $table->string('longitud');
            $table->string('clima');
            $table->string('img');
            $table->text('historia');
            $table->text('ubicacionText');
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
        Schema::dropIfExists('pueblos');
    }
};
