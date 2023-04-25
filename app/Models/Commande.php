<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'idcommande', 'uid','pid','name','desc', 'price','image','etatdecommande','datedecommande'
    ];

}
