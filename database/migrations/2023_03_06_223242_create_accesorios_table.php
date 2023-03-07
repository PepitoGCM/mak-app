<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccesoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesorios', function (Blueprint $table) {
            $table->id();
            
            $table->string('nombre', 50);
            $table->text('descripcion')->nullable();
            $table->string('accesorio', 50);  // select... poder agregar items
            $table->double('alto', 5, 3)->default(0);
            $table->double('largo', 5, 3)->default(0);
            $table->double('profundidad', 5, 3)->default(0);
            $table->string('foto');

            $table->timestamps(); //marca de tiempo de creación (create_at) y actualizacion (update_at)
            $table->softDeletes(); //borrado lógico
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accesorios');
    }
}
