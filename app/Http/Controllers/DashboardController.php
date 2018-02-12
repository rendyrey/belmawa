<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use URL;

class DashboardController extends Controller
{
    //
    public function __construct(){
      // parent::__construct();

      $this->login();

    }

    public function login(){
      if(session('logged_in')==FALSE){
        return redirect()->action('LoginController@index');
      }

    }

    public function index(){
      return view('dashboard');
    }
}
