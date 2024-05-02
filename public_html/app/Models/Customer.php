<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tbl_customers';
    
    CONST ALLOWED_EXTENSIONS = [
        'jpg',
        'jpeg',
        'png',
    ];

    public function province()
    {
        return $this->hasOne(Province::class, 'code', 'province_id');
    }

    public function municipality()
    {
        return $this->hasOne(Municipality::class, 'code', 'municipality_id');
    }

    public function barangay()
    {
        return $this->hasOne(Barangay::class, 'code', 'barangay_id');
    }
}
