<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "product_name_ar"        => "required",
            "product_name_gr"        => "required",
            "product_name_en"        => "required",
            "product_name_du"        => "required",
            "product_name_fr"        => "required",
            "productdescription_ar"  => "required",
            "productdescription_fr"  => "required",
            "productdescription_en"  => "required",
            "productdescription_gr"  => "required",
            "productdescription_du"  => "required",
            "Product_Price"        => "required | numeric ",
            "image"                => " required | image ",  
        ];
    }
}
