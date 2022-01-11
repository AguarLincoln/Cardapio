<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cofiguration extends Model
{
    use HasFactory;


    protected $fillable = [
        'owner_id',
        'logo',
        'type',
        'delivery',
        'delivery_fee',
    ];
    
}
