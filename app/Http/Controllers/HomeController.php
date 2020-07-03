<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CarModel;
use App\Models\Product;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    // $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $cats = Category::take(10)->get();
    $cars = CarModel::take(8)->get();
    $featured = Product::inRandomOrder()->get();
    return view('landing', [
      'categories' => $cats,
      'cars' => $cars,
      'featured' => $featured
    ]);
  }

  public function search(Request $request)
  {
    $search = $request->get('search');
    $products=DB::table('products')->where('product_name','like', '%' .$search . '%')->paginate(20);
    return view('search',['products'=>$products]);
  }
}
