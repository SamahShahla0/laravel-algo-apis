<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlgoApisController extends Controller
{
    function sortMixedString(Request $request){
        $unsortedString = $request->unsortedString;
        //split the string into an array
        $arr = str_split($unsortedString);
        print_r($arr);

        sort($arr);
        
        print_r($arr);

        print_r(ord($arr[0]));
        return response() -> json([
            "entered string " => $unsortedString
        ]);
    }
}

// ascii place in php?
