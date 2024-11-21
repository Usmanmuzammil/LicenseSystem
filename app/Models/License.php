<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'father_or_husband',
        'license_no',
        'category',
        'dob',
        'issue_date',
        'valid_upto',
        'cnic',
        'address',
        'blood_group',
        'identification_mark',
        'old_dl',
        'status',
        'remarks',
        'image',
    ];
}
