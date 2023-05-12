<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function home() {

        //$PartenzaTreni = Train::where('data_partenza', '>=', '2023-05-11')->get();
        $trains = Train::all();
        
        return view('home', compact('trains'));
    }
}
