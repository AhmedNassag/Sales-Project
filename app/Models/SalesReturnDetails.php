<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesReturnDetails extends Model
{
    use HasFactory;

    protected $table = 'sales_invoices_return_details';
    protected $guarded = [];
}
