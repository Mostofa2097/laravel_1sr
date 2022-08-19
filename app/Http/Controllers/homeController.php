<?php

namespace App\Http\Controllers;

use App\Models\person;
use Illuminate\Http\Request;

class homeController extends Controller
{
     public function index()
     {
      return view('admin.home.index');
     }
     public function products()
     {
      return view('admin.home.product_list');
     }

     public function About()
     {
      return view('home.About');
     }
     public function contact()
     {
      return view('home.contact');
     }
}
