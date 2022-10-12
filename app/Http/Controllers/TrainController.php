<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrainTable;
class TrainController extends Controller


{
    

    public function trains()
    {
        $trains = TrainTable::all();
        $data = compact('trains');
        // dd($movies);
        return view('home', $data);
    }
}
