<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TravelPackage;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $travel_packages = TravelPackage::count();;
        $transaction = Transaction::count();
        $transaction_pending = Transaction::where('transaction_status', 'SUCCESS')->count();
        $transaction_success = Transaction::where('transaction_status', 'PENDING')->count();
        return view('pages.admin.dashboard')->with([
            'travel_packages' => $travel_packages,
            'transaction' => $transaction,
            'transaction_pending' => $transaction_pending,
            'transaction_success' => $transaction_success,
         ]);;
    }
}
