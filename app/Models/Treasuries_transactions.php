<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treasuries_transactions extends Model
{
    use HasFactory;

    protected $table = 'treasuries_transactions';
    protected $guarded = [];
}
