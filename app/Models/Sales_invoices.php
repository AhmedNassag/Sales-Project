<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales_invoices extends Model
{
    use HasFactory;

    protected $table = "sales_invoices";
    protected $guarded = [];
}
