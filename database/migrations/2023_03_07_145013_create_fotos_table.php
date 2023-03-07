<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');

            #Claves foraneas
            $table->foreignId('id_a')->nullable()->constrained('accesorios')->onUpdate('cascade');
            $table->foreignId('id_b')->nullable()->constrained('bijouteries')->onUpdate('cascade');
            $table->foreignId('id_l')->nullable()->constrained('lencerias')->onUpdate('cascade');

            /*
            $table->unsignedBigInteger('id_b')->nullable();
            $table->unsignedBigInteger('id_l')->nullable();

            $table->foreign('id_a')->references('id')->on('bijouteries');
            $table->foreign('id_b')->references('id')->on('accesorios');
            $table->foreign('id_l')->references('id')->on('lencerias');
            */
            $table->timestamps(); //marca de tiempo de creación (create_at) y actualizacion (update_at)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fotos');
    }
}
