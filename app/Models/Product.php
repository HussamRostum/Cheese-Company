<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =     [
        'pro_name_AR',
        'pro_name_EN',
        'pro_name_FR',
        'pro_name_DU',
        'pro_name_GR',
        'pro_description_AR',
        'pro_description_EN',
        'pro_description_FR',
        'pro_description_DU',
        'pro_description_GR',
        'pro_Price',
        'pro_image',];
}
