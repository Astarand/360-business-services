<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'phone',
        'city',
        'page_name',
        'whatsapp_update',
        'topic',
        'other_topic',
        'remember_token'
    ];
}
