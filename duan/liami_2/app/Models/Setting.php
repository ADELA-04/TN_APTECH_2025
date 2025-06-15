<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';
    protected $primaryKey = 'SettingID';

    protected $fillable = [
        'Logo',
        'Favicon',
        'NavigationLink',
        'LinkFB',
        'LinkIN',
        'BusinessName',
        'BossName',
        'Phone',
        'Address',
        'Email',
        'DefaultWeight'
    ];
}
