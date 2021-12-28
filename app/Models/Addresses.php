<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    use HasFactory;

    protected $fillable = [
        'zipcode',
        'address',
        'number',
        'neighborhood',
        'city',
        'state',
        'complement',
    ];

    public function owner(){
        return $this->morphTo();
    }
}
