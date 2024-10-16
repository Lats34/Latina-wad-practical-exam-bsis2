<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    protected $fillable = [
        'id',
        'transaction',
        'description',
        'status [unsuccessful, declined]',
        'total_amount',
        'transaction_number',
        'timestamps',
        ];
        use HasFactory;
}
