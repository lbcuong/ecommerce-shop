<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $connection ='mysql_console';

    protected $fillable = ['name', 'email'];
    protected $table = 'tenants';
}
