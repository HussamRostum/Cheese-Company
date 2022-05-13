<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    public $timestamps=false;
    protected $fillable =     [
        'about_AR',
        'about_EN',
        'about_FR',
        'about_DU',
        'about_GR',  ];
}
