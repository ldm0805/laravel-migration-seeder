<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train as Train;

class TrainController extends Controller
{
    public function show(){
        $trainsData = Train::all();
        return view('/partials/main-content', compact('trainsData'));
    }
}
