<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GrafikController extends Controller
{
    //
    public function index(){
      return view('berita.grafik');
    }
}
