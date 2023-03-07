<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bijouterie extends Model
{
    use HasFactory;
    use SoftDeletes;

    #protected $table = "bijouterie"; //Por si quiero usar un nombre de table diferente a la convención (se le agrega una "s" al final, dejandolo, en este caso, "bijouteries")
    #protected $primaryKey = 'id'; //Por si quiero usar un nombre diferente para la primeryKey (por defecto es "id")
    
    #public $timestamps = true; //marcas de tiempo para mantener las fechas de creación y última actualización
    
    /*
        Datos de la tabla Bijouterie: id, nombre, descripcion, acero, bijouterie, largo, diametro, talle, foto, creation_at, updated_at, deleted_at
        $table->id();
        $table->string('nombre', 50);
        $table->text('descripcion')->nullable();
        $table->string('acero', 15); // select: quirurgico, blanco
        $table->string('bijouterie', 30);  // select... poder agregar items
        $table->double('largo', 5, 3)->nullable();
        $table->double('diametro', 5, 3)->nullable();
        $table->double('talle', 5, 3)->nullable();
        $table->string('foto');
        $table->timestamps(); //marca de tiempo
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
        'acero', 
        'bijouterie', 
        'largo', 
        'diametro', 
        'talle', 
        'foto', 
        'creation_date', 
        'updated_date', 
        'deleted_at',
    ];*/

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'largo' => 0,
        'diametro' => 0,
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
