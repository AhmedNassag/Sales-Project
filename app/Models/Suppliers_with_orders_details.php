<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers_with_orders_details extends Model
{
    use HasFactory;

    protected $table = 'suppliers_with_orders_details';
    protected $guarded = [];
}
