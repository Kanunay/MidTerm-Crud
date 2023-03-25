<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // resposible for sending to the mysql
    protected $fillable = [
        'name',
        'detail'
    ];
}