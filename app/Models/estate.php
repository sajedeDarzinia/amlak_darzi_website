<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'img',
        'phone_number',
        'properties',
        'status'
    ];
}
