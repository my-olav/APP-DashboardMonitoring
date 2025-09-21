<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('pages.product.index');
    }
}

// class ClockController extends Controller
// {
//     public function index(){
//         $serverTime = Carbon::now()->toDateTimeString();
//         return view('pages.product.index', ['serverTime' => $serverTime]);
//     }
// }
