<?php

namespace App\Http\Controllers;

use view;
use index;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        $data =Product::all();

        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        $data =Product::find($id);
       return view('detail',['product'=>$data]);
    }
}
