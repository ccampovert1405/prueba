<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Position
 *
 * @property $id
 * @property $name
 * @property $status
 * @property $user_create
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @property UsersBackoffice[] $usersBackoffices
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Position extends Model
{
    
    static $rules = [
		'name' => 'required',
		'status' => 'required',
		'user_create' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','status','user_create'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_create');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usersBackoffices()
    {
        return $this->hasMany('App\Models\UsersBackoffice', 'position', 'id');
    }
    

}
