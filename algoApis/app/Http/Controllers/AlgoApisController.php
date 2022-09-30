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
        //$sortedReversed = array_reverse($arr, true);
        //print_r($sortedReversed);
        //echo "<br>";
        for($i = 0; $i < count($arr); $i++){
            echo $i . "   ". $arr[$i];
            echo "<br>";
            echo gettype($arr[$i]) . "<br>";
            if(is_int($arr[$i])){
                $j = $i;
                echo "<br>";
                echo $j;
            }
        }
        //print_r(ord($arr[0]));

        echo "<br>";

        return response() -> json([
            "entered string " => $unsortedString
        ]);
    }
}
// array length php ?








