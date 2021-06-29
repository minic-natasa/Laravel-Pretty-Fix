<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Ovde možemo da vršimo izmene u posts tabeli. Možemo promeniti npr. table name, primary key, timestamps...
    //public $timestamps = false;
}
