<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'phone_number', 'address', 'address_type', 'email', 'content', 'payment_method_id'];
    protected $casts = [
        "content" => "array"
   ];
    protected $table = 'orders';

    public function paymentMethods()
    {
        return $this->belongsTo(PaymentMethod::class);
    }
}
