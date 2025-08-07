<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    function index()
    {
        return view('calculate');
    }

    function addCal(Request $request)
    {
        //lay du lieu tu form dua len
        $number1 = $request->num1;
        $number2 = $request->num2;
        $sum = $number1 + $number2;

        return view('calculate', compact('sum'));
    }
}
