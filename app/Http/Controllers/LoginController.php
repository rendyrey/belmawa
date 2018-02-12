<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\LoginModel;
use DB;

class LoginController extends Controller
{
    //
    public function index(){
      if(session('logged_in')==TRUE){
        return redirect()->route('dashboard');
      }else{
        return view('index');
      }
    }

    public function login(Request $request){
      $data['username'] = $request->input('username');
      $data['password'] = md5($request->input('password'));
      if(LoginModel::where([
        ['username','=',$data['username']],
        ['password','=',$data['password']]
        ])->first()){
          session(['logged_in'=>TRUE,'username'=>$data['username']]);
          return redirect()->route('dashboard');
      }else{
        return redirect()->route('index')->with('message','Username atau Password Salah');
      }
    }

    public function logout(){
      session()->flush();
      return redirect()->route('index');
    }
}
