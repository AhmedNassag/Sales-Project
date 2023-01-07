<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services_with_orders extends Model
{
    use HasFactory;

    protected $table = 'services_with_orders';
    protected $guarded = [];
}
