<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chariot extends Model
{
    use HasFactory;
    protected $fillable = [
        'pid', 'name','desc', 'price','image','uid'
    ];
}
