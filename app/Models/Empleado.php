<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['cargo_id','nombre_Cargo'];
    use HasFactory;

    public function cargo()
    {
        return $this->hasOne('App\Models\Cargo','id','cargo_id');
    }
 
}
