<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function main(Request $request){
        $data['title'] = 'Dashboard';

		return view('contents.test.main', $data);
	}
}
