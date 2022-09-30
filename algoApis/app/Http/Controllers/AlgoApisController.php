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
        
        $arrOfInt = [];
        $arrOfLowerChars = [];
        $arrOfUpperChars = [];
        $arrOfOthers = [];
        for($i = 0; $i < count($arr); $i++){
            if (in_array(ord($arr[$i]), range(48,57))) {
                array_push($arrOfInt, $arr[$i]);
            }
            elseif (in_array(ord($arr[$i]), range(97,122))) {
                array_push($arrOfLowerChars, $arr[$i]);
            }
            elseif (in_array(ord($arr[$i]), range(65,90))) {
                array_push($arrOfUpperChars, $arr[$i]);
            }
            else {
                array_push($arrOfOthers, $arr[$i]);
            }
        }
        print_r($arrOfOthers);
        echo "<br>";

        return response() -> json([
            "entered string " => $unsortedString
        ]);
    }
}
// array length php ?








