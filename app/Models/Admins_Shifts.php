<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins_Shifts extends Model
{
    use HasFactory;

    protected $table = "admins_shifts";
    protected $guarded = [];
}
