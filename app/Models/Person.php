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
        'status',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'first_name'           => 'string',
        'second_name'          => 'string',
        'last_names'           => 'string',
        'address'              => 'string',
        'phone'                => 'integer',
        'city_id'              => 'integer',
        'status'              =>  'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name'           => 'required|min:2|max:50',
        'second_name'          => 'required|min:2|max:50',
        'last_names'           => 'required|min:2|max:100',
        'address'              => 'required|min:2|max:200',
        'phone'                => 'required|numeric|min:2|max:10',
        'city_id'              => 'required',
        'status'              =>   'required',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function city()
    {
        return $this->belongsTo(\App\Models\City::class, 'city_id', 'id');
    }

}
