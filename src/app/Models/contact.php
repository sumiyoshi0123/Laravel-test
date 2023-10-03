<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'familyname',
        'name',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'option'
    ];

    static $genders = [
        '男性', '女性'
    ];
}
