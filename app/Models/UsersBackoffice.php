<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsersBackoffice
 *
 * @property $id
 * @property $first_name
 * @property $second_name
 * @property $first_lastname
 * @property $second_lastname
 * @property $user_create
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UsersBackoffice extends Model
{
    
    static $rules = [
		'first_name' => 'required',
		'second_name' => 'required',
		'first_lastname' => 'required',
		'second_lastname' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name','second_name','first_lastname','second_lastname','position','department','user_create'];


    

}
