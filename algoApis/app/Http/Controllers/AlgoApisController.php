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
        return response() -> json([
            "entered string " => $unsortedString
        ]);
    }
}
