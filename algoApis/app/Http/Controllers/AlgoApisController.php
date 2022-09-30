<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlgoApisController extends Controller
{
    function sortMixedString(Request $request){
        $unsortedString = $request->unsortedString;
        //split the string into an array
        $arr = str_split($unsortedString);
        
        sort($arr);
        print_r($arr);

        echo "<br>";

        $sortedReversed = array_reverse($arr, true);
        print_r($sortedReversed);

        echo "<br>";

        print_r(ord($arr[0]));

        echo "<br>";

        return response() -> json([
            "entered string " => $unsortedString
        ]);
    }
}





