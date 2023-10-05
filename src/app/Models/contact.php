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

    public function scopeNameSearch($query,$keyword)
    {
        if (!empty($keyword)) {
            $query->where('familyname', 'like','%' . $keyword.'%')
            ->orWhere('name', 'like', '%'.$keyword.'%');
        }
    }

    public function scopeEmailSearch($query,$email)
    {
        if(!empty($email)) {
            $query->where('email','like','%' .$email . '%');
        }
    }
}
