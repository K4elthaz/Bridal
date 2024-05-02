<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductPhoto extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tbl_product_photos';

    CONST ACTIVE = 1;
    CONST INACTIVE = 0;

    CONST ALLOWED_EXTENSIONS = [
        'jpg',
        'jpeg',
        'png',
    ];
}
