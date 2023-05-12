<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function home() {

        $partenzaTreni = Train::where('data_partenza', '>=', '2023-05-11')->get();
       
        return view('home', compact('partenzaTreni'));
    }
}
