<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPanelSetting extends Model
{
    use HasFactory;

    protected $table = 'admin_panel_settings';
    protected $guarded = [];
}
