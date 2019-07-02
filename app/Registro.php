<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registro extends Model
{
    //
    use SoftDeletes;
    protected $table = "registros";
    protected $primaryKey = "id_registro";
    protected $fillable = ['nombre', 'apellido', 'fecha_nacimiento', 'dni', 'calle', 'numero', 'ciudad', 'provincia', 'pais', 'nacionalidad', 'email', 'telefono', 'info_evento', 'comentarios', 'equipo_rojo'];

    protected $casts = [
        'fecha_nacimiento' => 'date',
        'deleted_at' => 'date',
    ];

    public static $rules = [
        'nombre' => 'required|min:3',
        'apellido' => 'required|min:3',
        'fecha_nacimiento' => 'required|date',
        'dni' => 'required|integer|min:7',
        'calle' => 'required|min:3',
        'numero' => 'required|integer',
        'ciudad' => 'required|min:3',
        'provincia' => 'required|min:3',
        'pais' => 'required|min:3',
        'nacionalidad' => 'required|min:4',
        'email' => 'required|email',
        'telefono' => 'required|min:11|numeric',
        'info_evento' => 'required|min:6',
        'comentarios' => 'required|min:6',
        'equipo_rojo' => 'required',
    ];
}
