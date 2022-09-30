<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlgoApisController extends Controller
{
    function sortMixedString($unsortedString){
        return response() -> json([
            "entered string" => $unsortedString
        ]);
    }
}
