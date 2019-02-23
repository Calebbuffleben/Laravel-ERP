<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    use Notifiable;

    public $timestamps = false;
    protected $fillable = ['id_company', 'name', 'email', 'password',];
    protected $hidden = ['password', 'remember_token',];
    public $rules = ['name' => 'min:3|max:100', 'password' => 'min:8'];
    
    public function company() {
        return $this->hasOne('App\User');
    }

}
