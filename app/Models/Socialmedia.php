<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socialmedia extends Model
{
    public $timestamps=false;
    protected $fillable =     [
 
     'facebook',
     'twetter',
     'whatsapp',
     'youtube',
];
}
