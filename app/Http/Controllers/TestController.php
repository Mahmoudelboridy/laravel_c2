<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function mnx(){
   return view('tests');
    }
    public function display(Request $request,$id){
       // مش لازم بارميتير ممكن احط عملية حسابية فى كومباكت او اى حاجة يعنى  $x=5+5;
        return view('test',compact('id'));
    }
}