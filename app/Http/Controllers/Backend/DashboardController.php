<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        $data['title'] = 'Dashboard';
        $contact = User::get();
        return view('backend.dashboard',compact('contact'), $data);
    }

}
