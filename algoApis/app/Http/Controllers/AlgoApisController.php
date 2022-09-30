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
        $arrOfInt = [];
        for($i = 0; $i < count($arr); $i++){
            //echo $i . "   ". $arr[$i];
            //echo "<br>";
           //echo gettype($arr[$i]) . "<br>";
            //range(48, 57);
            //in_array(2, range(1,7)
            //echo ord($arr[$i]). "<br>";
            //if(ord($arr[$i]) >= 48 && ord($arr[$i]) <= 57){
            if(in_array(ord($arr[$i]), range(48,57))){
                
                $j = $i;
                echo "j= " .$i;
                echo "<br>";
                array_push($arrOfInt, $arr[$i]);
                //$arrOfInt = array_slice($arr,$i);
                
            }
        }
        print_r($arrOfInt);
        echo "<br>";
       // $arrOfInt=array_diff($arr,$arrOfInt);
        //print_r($arrOfInt);
        //print_r(ord($arr[0]));

        echo "<br>";

        return response() -> json([
            "entered string " => $unsortedString
        ]);
    }
}
// array length php ?








