<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public $table = 'persons';

    public $timestamps = true;

    public $fillable = [
        'first_name',
        'second_name',
        'last_names',
        'address',
        'phone',
        'city_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'first_name'           => 'string',
        'second_name'          => 'integer',
        'last_names'           => 'string',
        'address'              => 'integer',
        'phone'                => 'string',
        'city_id'              => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name'           => 'required|min:2|max:11',
        'first_name'           => 'required|min:2|max:11',
        'second_name'          => 'required|min:2|max:11',
        'last_names'           => 'required|min:2|max:11',
        'address'              => 'required|min:2|max:11',
        'phone'                => 'required|min:2|max:11',
        'city_id'              => 'required',
    ];
}
