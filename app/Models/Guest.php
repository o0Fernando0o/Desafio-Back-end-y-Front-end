<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Guest
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $birthday
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Guest extends Model
{
    
    static $rules = [
      'name' => 'required|string',
      'email' => 'required|email',
      'birthday' => 'required|date',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','birthday'];



}
