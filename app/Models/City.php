<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $table = 'cities';

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
