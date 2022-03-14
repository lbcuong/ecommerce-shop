<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['rowId', 'name', 'phone_number', 'address', 'email', 'content', 'payment_method'];
    protected $casts = [
        "content" => "array"
   ];
    protected $table = 'orders';
}
