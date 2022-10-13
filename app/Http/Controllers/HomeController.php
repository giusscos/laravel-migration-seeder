<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $trains = Train::where('orario_di_partenza', 'LIKE','%2022-10-12%')->where('cancellato', 0)->get();
        // $trains = Train::all();

        return view('home', compact('trains'));
    }
}
