<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PunjabLicense extends Model
{
    protected $table ='punjab_licenses';

    protected $fillable = [
        'license_no',
        'name',
        'son_daughter_wife',
        'address',
        'issue_date',
        'valid_till',
        'cnic',
        'category_id',
        'dob',
        'emergency_contact',
        'blood_group',
        'previous_license_number',
        'passport_number',
        'nationality',
        'status',
        'image',
        'remarks',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    
}
