<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public $table = 'assignments';

    public $timestamps = true;

    public $fillable = [
        'driver_id',
        'owner_id',
        'type_id',
        'status',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'driver_id' => 'integer',
        'owner_id'  => 'integer',
        'type_id'   => 'integer',
        'status'    => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre'    => 'required|min:2|max:11',
        'apellidos' => 'required|min:2|max:11',
        'direccion' => 'required|min:2|max:11',
        'telefono'  => 'required|min:2|max:11',
    ];

}
