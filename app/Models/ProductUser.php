<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductUser extends Model
{
    use HasFactory;

    protected $guarded = [];

    // $resultado = "SELECT products.name, product_users.quantity 
    // FROM products JOIN product_users ON products.id = product_users.product_id");
}
