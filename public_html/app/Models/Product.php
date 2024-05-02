<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tbl_products';

    CONST MEN = 1;
    CONST WOMEN = 2;
    CONST KID = 3;

    CONST CATEGORIES = [
        "MEN'S" => self::MEN,
        "WOMEN'S" => self::WOMEN,
        "KID'S" => self::KID
    ];

    public function activePhoto()
    {
        return $this->hasOne(ProductPhoto::class)->where('status', 1);
    }
}
