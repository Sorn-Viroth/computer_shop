<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MonitorController extends Controller
{
    public function index(){
        return view('frontend.monitor.index');
    }
}
