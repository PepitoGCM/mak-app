<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lenceria extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    /*
        Datos de la tabla Accesorio: id, nombre, descripcion, lenceria, talle, genero, foto, creation_at, updated_at
        $table->id();
        $table->string('nombre', 50);
        $table->text('descripcion')->nullable();
        $table->string('lenceria', 30);  // select... poder agregar items
        $table->double('talle', 5, 3)->nullable()->default(0);
        $table->string('genero', 8); // select: hombre, mujer, unisex
        $table->string('foto');
        $table->timestamps(); //marca de tiempo de creación y eliminación
        $table->softDeletes(); //borrado lógico
    */

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    /*
    protected $fillable = [
        'nombre', 
        'descripcion', 
        'lenceria', 
        'talle', 
        'genero',  
        'foto', 
        'creation_date', 
        'updated_date', 
        'deleted_at',
    ];/*

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'talle' => 0,
    ];

    /**
     * Guardar en la BD el atributo 'nombre' en minusculas (siempre), sin importar como lo ingrese el usuario.
     */
    protected function nombre(): Attribute
    {
        return new Attribute(
            get: fn($value) => ucwords($value), //Muestra la primer letra de cada palabra en mayuscula sin modificar la BD.
            set: fn($value) => strtolower($value) //Cambia todas las letras a minusculas para almacenarlo en la BD
        );
    }


    //uno a muchos
    public function fotos(){
        return $this->hasMany('App\Models\Foto');
    }
}
