<?php

namespace App\Http\Controllers;

use App\Models\Socialmedia;
use Illuminate\Http\Request;
use App\Models\Product;

class ContactController extends Controller
{

    
    public function contactus() 
    {
        $social   =  Socialmedia::all();
        $data = Product::latest()->paginate();
        $social_media = Socialmedia::all();
        return view('Contact-Us',compact('social','data','social_media'));
    }


};
