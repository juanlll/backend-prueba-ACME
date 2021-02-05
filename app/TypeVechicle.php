<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeVechicle extends Model
{
    public $table = 'type_vehicles';

    public $timestamps = true;

    public $fillable = [
        'name',
        'status',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name'           => 'string',
        'status'         => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name'            => 'required|min:2|max:11',
        'status'          => 'required',
    ];
}
