<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\Product;
use PhpOption\Option;
use Illuminate\Support\Facades\DB as FacadesDB;
use Image;
use Response;
use App\Http\Requests\ProductsRequest;
use Illuminate\Support\Facades\DB;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;
use Illuminate\Support\Facades\Storage;
use App\Models\Slider;
use App\Models\Socialmedia;

class ProductController extends Controller
{
    ///////////////////////////////////////////////////////////////////////////////
    public function create(Request $request)
    {
        $products   =   Product::all();
        $social   =  Socialmedia::all();
        return view('new_product',compact('social'));
    }
    ////////////////////////////////////////////////////////////////////////////////////////
    public function store(Request $request)
    {
        $image_file = $request->image;
        $image = Image::make($image_file);
        Response::make($image->encode('jpeg'));
        $form_data = array(
         'pro_name_AR'                   => $request->product_name_ar,
         'pro_name_EN'                   => $request->product_name_en,
         'pro_name_DU'                   => $request->product_name_du, 
         'pro_name_GR'                   => $request->product_name_gr,
         'pro_name_FR'                   => $request->product_name_fr,
         'pro_description_AR'            => $request->productdescription_ar,
         'pro_description_EN'            => $request->productdescription_en,
         'pro_description_fr'            => $request->productdescription_fr,
         'pro_description_GR'            => $request->productdescription_gr,
         'pro_description_DU'            => $request->productdescription_du,
         'pro_Price'                  => $request->Product_Price,
         'pro_image'                  => $image,
          
        );
        Product::create($form_data);
        return redirect()->back()->with('success', $form_data['pro_name_EN'] .'  added successfuly to the database');
    }
    ////////////////////////////////////////////////////////////////////////////////////////
    public function show($id){
        $image = Product::findOrFail($id);
        $image_file = Image::make($image -> pro_image);
        $response = Response::make($image_file->encode('jpeg'));
        $response->header('Content-Type', 'image/jpeg');
        return $response;
    }
    ////////////////////////////////////////////////////////////////////////////////////////

    ////////////////////////////////////////////////////////////////////////////////////////
    public function edit($id)
    {
        //
    }
    ////////////////////////////////////////////////////////////////////////////////////////
    public function update(Request $request, $id)
    {
        //
    }
    ////////////////////////////////////////////////////////////////////////////////////////
    public function destroy($id)
    {
        //
    }
    ///////////////////////////////////////////////////////////////////////////////
    public function search(Request $request)
    {
        $search_val =  $request -> input('search_in_page');
        $data = Product::where('pro_name', 'LIKE', '%'.$search_val.'%')
                       ->orwhere('pro_description', 'LikE', '%'.$search_val.'%')
                       ->orwhere('pro_Price', 'LIKE', '%'.$search_val.'%')
                       ->orwhere('pro_number', 'LIKE', '%'.$search_val.'%')
                       ->orwhere('pro_brand', 'LikE', '%'.$search_val.'%')
                       ->orwhere('pro_category', 'LikE', '%'.$search_val.'%')
                       ->latest()->paginate(10);
        return view('result_search', compact('data'));
    }
    
    ////////////////////////////////////////////////////////////////////////////////////////
    public function index()
    {
        $data = Product::latest()->paginate();
        $slider   =  Slider::all();
     $social   =  Socialmedia::all();
     
        return view('welcome', compact('data','slider','social'));
    }
    ///////////////////////////////////////////////////////////////////////////////
    public function show_details($id)
    {
        $details_id = Product::findOrFail($id);
        $data = Product::where('id', '=', $id)->latest()->paginate(1);
     
        return view('show_details', compact('data'));
    }
    ////////////////////////////////////admin//////////////////////////////////////////
    public function admin()
    {
        $social   =  Socialmedia::all();
        return view('Admin/admin',compact('social'));
    }



}
