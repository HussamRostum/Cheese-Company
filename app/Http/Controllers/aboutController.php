<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Socialmedia;
use Illuminate\Http\Request;
use App\Models\Product;

class aboutController extends Controller
{


    
   public function AboutUs() {
          $about   =  About::all();
          $social   =  Socialmedia::all();
          $data = Product::latest()->paginate();
        return view('About.About-Us',compact('about','social','data'));
    }

    public function add()
    {
        $about   =  About::all();
        $social   =  Socialmedia::all();
        return view('About.addnewabout',compact('about' ,'social'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        $form_data = array(
            'about_AR'=>$request->aboutinput_ar,
            'about_EN'=>$request->aboutinput_en,
            'about_FR'=>$request->aboutinput_fr,
            'about_DU'=>$request->aboutinput_du,
            'about_GR'=>$request->aboutinput_gr,
           );
           About::create($form_data);
        return redirect()->back()->with('success', $form_data['about_EN'] .'  added successfuly to the database');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
        $about= About::find($id);
        $social=Socialmedia::all();
        return view('About/Editabout', compact('about','social'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $about= About::find($request->id);
        
        $about->update([
            
            'about_AR'=>$request->aboutinput_ar,
            'about_EN'=>$request->aboutinput_en,
            'about_FR'=>$request->aboutinput_fr,
            'about_DU'=>$request->aboutinput_du,
            'about_GR'=>$request->aboutinput_gr,
         
        ]);
       
        $about->save();
        return redirect('/addnewabout')->with('success', $about['about_EN'] .'  Updated successfuly');
    }

  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $about=About::find($id);
            $about->delete();
            return redirect('/addnewabout');
        }
    }

};
