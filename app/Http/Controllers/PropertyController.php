<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function filterProperty()
    {
        $property = [[
            'bedroom' => 2,
            'bathroom' => 1,
            'floor' => 2,
            'qty' => 1
        ],
        [
            'bedroom' => 3,
            'bathroom' => 1,
            'floor' => 1,
            'qty' => 1
        ]];

        return response()->json($property, 200);
    }
}
