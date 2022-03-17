<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $connection ='mysql_console';

    protected $fillable = ['domain', 'tenant_id'];
    protected $table = 'domains';
}
