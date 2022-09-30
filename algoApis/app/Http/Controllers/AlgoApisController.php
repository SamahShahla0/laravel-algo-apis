<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlgoApisController extends Controller
{
    function sortMixedString(Request $request){
        $name = $request->name;
        return response() -> json([
            "entered string" => $name
        ]);
    }
}
