<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionProduct extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tbl_transaction_products';

    CONST ONGOING = 'Ongoing';
    CONST RETURNED = 'Returned';
    CONST RETURNEDWITHDAMAGE = 'Returned with damage';
    CONST PAID = 'Paid';

    CONST TYPES = [
        self::ONGOING,
        self::RETURNED,
        self::RETURNEDWITHDAMAGE,
        self::PAID
    ];

    CONST RENT = 'rent';
    CONST SALE = 'sale';

    CONST ADDITIONAL = 500;

}
