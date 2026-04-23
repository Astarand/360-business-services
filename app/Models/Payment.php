<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //use HasFactory;
    protected $fillable = ['company_name',
    'contact_number',
    'email',
    'purposes',
    'amount',
    'transaction_id',
    'payment_status',
    'comments'];

}
