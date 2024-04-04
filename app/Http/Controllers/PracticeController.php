<?php

namespace App\Http\Controllers;

use App\Practice;

class PracticeController extends Controller
{
    public function getPractice()
    {
        $practice = Practice::all();
        return response()->json($practice);
    }
}
