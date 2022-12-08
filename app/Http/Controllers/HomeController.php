<?php

namespace App\Http\Controllers;
use App\Models\TravelPackage;
use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $travel_package = TravelPackage::with(['galleries'])->limit(4)->get();
        return view('pages.home')->with([
            'travel_package' => $travel_package
        ]);
    }
}
