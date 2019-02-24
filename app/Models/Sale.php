<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public $timestamps = false;
    protected $fillable = ['id_company', 'id_client', 'id_user', 'total_price'];
    //public $rules = [''];
}
