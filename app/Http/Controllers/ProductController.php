<?php

namespace App\Http\Controllers;

// import
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function createProduct(){
        // isi dr var categories adalah semua data yg kita input kek hobi, olahraga
        $categories = Category::all();
        // tmbhin compact untuk pass data
        return view('createProduct', compact('categories'));
    }

    // stlh user klik submit untuk create, maka akan di store di db. data tsb akan di request oleh db
    public function storeProduct(Request $request){
        // bakal ambil extension dr file imagge
        // file sama getClientOriginal.. itu function dr laravel
        $extension = $request->file('Image')->getClientOriginalExtension();
        // standardize input image filename
        // bs di format jdi ky booktitle_author.ext
        $fileName = $request->Name.'_'.$request->Category_Id.'.'.$extension;
        // mau simpen dmn
        $request->file('Image')->storeAs('/public/image', $fileName);

        Product::create([
            'Name' => $request->Name,
            'Description' => $request->Description,
            'Price' => $request->Price,
            'Quantity' => $request->Quantity,
            'Category_Id' => $request->CategoryName,
            'Image' => $fileName
        ]);
        return redirect('/show-product');
    }

    public function show(){
        $products = Product::all();
        return view('showProduct', compact('products'));
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        return view('editProduct', compact('product'));
    }

    public function update(Request $request, $id){
        // image storage
        $extension = $request->file('Image')->getClientOriginalExtension();
        $fileName = $request->Name.'_'.$request->CategoryId.'.'.$extension;
        $request->file('Image')->storeAs('/public/image', $fileName);

        Product::findOrFail($id)->update([ // cari id yg mau di update. jdi cari id, kalo ktmu, di update
            'Name' => $request->Name, // assign value 'Name' yg diambil dr inputan user yg di Name di form
            'Description' => $request->Description,
            'Price' => $request->Price,
            'Quantity' => $request->Quantity,
            'Image' => $fileName
        ]);

        return redirect('/show-product');
    }

    public function delete($id){
        Product::destroy($id);
        return redirect('/show-product');
    }

    public function viewProduct(){
        $products = Product::all();
        return view('viewProduct', compact('products'));
    }


}
