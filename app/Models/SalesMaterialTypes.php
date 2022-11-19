<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesMaterialTypes extends Model
{
    use HasFactory;
    
    protected $table = 'sales_material_types';
    protected $guarded = [];
}
