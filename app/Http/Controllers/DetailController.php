<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($slug) {
        $travel = TravelPackage::with(['galleries'])->where('slug', $slug)->firstOrFail();
        return view('pages.detail')->with([
            'travel' => $travel
        ]);
    }
}
