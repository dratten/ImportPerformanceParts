<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CarModel;
use App\Models\Product;

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
}
