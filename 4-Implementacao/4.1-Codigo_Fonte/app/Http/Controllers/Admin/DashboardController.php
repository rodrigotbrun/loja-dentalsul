<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Routing\Controller;

class DashboardController extends Controller {

    public function home(){
        return view('admin.dashboard.home');
    }

}
