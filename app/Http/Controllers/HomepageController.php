<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class HomepageController extends Controller
{   
    //fungsi untuk menampilkan halaman homepage
    public function index()
    {
        $categories = Categories::all();
        $title = "Homepage";

        return view('web.homepage',[
            'title'=> $title,
            'categories' => $categories,
        ]);  

    }

    public function products()
    {
        return view('web.products');
    }

    public function product($slug){
        return view('web.single_product', ['slug' => $slug]);
    }

    public function categories(){
        return view('web.categories');
    }   

    public function category($slug){
        $title = "categories";
        $category = Categories::find($slug);
        return view('web.single_category', ['slug' => $slug, 'title' => $title, 'category' => $category]);
    }

    public function cart(){
        return view('web.cart');
    }
 
    public function checkout(){
        return view('web.checkout');
    }
}
