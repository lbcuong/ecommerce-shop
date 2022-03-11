<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'phone_number', 'address', 'email', 'content', 'payment_method'];
    protected $table = 'orders';
}
