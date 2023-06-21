<?php

namespace App\Http\Controllers;

use App\Models\Buyer;

use Illuminate\Http\Request;

class BuyerController extends Controller
{
    //

    public function viewBuyer(){
        // krn nanti bakal passing variabel
        // ambil semua data di tabel buyer yaitu id sama name dan dimasukan kedalam variabel buyers
        $buyers = Buyer::all();
        return view('viewBuyer', compact('buyers'));
        // compact sesuain sama variabel barusan
    }
}
