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
        //print_r($arr);
        //echo "<br>";
        
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
        
        $sortedString = "";
        for ($i = 0; $i < count($arrOfLowerChars); $i++){
            $sortedString = $sortedString . $arrOfLowerChars[$i];
            //echo $sortedString . "<br>";
            for ($j = 0; $j < count($arrOfUpperChars);$j++){
                if (strtolower($arrOfUpperChars[$j]) == $arrOfLowerChars[$i]){
                    $sortedString .= $arrOfUpperChars[$j];
                    array_splice($arrOfUpperChars, $j, 1);
                    $j = $j -1;
                    //echo $sortedString . "<br>";
                }
            }
        }

        if (count($arrOfUpperChars) > 0){
            for ($i = 0; $i < count($arrOfUpperChars); $i++){
                $sortedString .= $arrOfUpperChars[$i];
            }
        }

        for ($i = 0; $i < count($arrOfInt); $i++){
            $sortedString .= $arrOfInt[$i];
        }

        for ($i = 0; $i < count($arrOfOthers); $i++){
            $sortedString .= $arrOfOthers[$i];
        }
        //echo $sortedString . "<br>";
        //echo "<br>";

        return response() -> json([
            $unsortedString => $sortedString
        ]);
    }

    /////////////////////////////////////////////////////////////////////

    function arrayOfPlaceValues(Request $request){
        $num = $request->num;

        if (is_numeric($num)){
            echo "correct";
            $num = intval($num);
            
            return response() -> json([
                "num" => $num
            ]);
        }
        else {
            echo "error, the value entered is not numeric";
        }
        
    }
}









