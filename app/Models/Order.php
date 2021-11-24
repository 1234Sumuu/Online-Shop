<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Traits\Timestamp;

class Order extends Model
{
    use HasFactory;
    public $timestamps = false;
}
