<?php

namespace App\Http\Controllers;

// tmbhin manual krn suka error
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function createCategory(){
        return view('createCategory');
    }

    // logic ketika klik submit di form category
    public function storeCategory(Request $request){
        // yg mau kita store datanya kan cm category name
        // dan itu ada di model category
        // create itu function untuk menambahkan data
        Category::create([
            // sistem request inputan user
            'CategoryName' => $request->CategoryName
            // atribut => $request->nama input user
        ]);

        return redirect('/show-product');
    }
}
