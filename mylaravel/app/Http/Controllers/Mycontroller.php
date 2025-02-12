<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 class Mycontroller extends Controller
{
    private function myprivite(){
        return 1;
    }
    function myfunction(Request $req, $varl=""){
        $data['myinput'] = $req->input('myinput');
        $data['myvalue'] = $varl;


        $data['number'] = $req->input('number');
        $data['multiplicationTable'] = [];
        $number = $data['number'];

        for($i = 1; $i <= 12; $i++){
            $data['multiplicationTable'][] = "$number * $i = ".($number * $i);
        }
        return view('myviews', $data);
    }
}
