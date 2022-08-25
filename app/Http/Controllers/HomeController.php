<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* use Auth;
use App\Models\Contact;
use App\Models\About;
use App\Models\PrivacyPolicy;
use App\Models\TermsConditions;
use App\Models\CookiesPolicy;
use App\Models\Partner;
use App\Models\PayoutPartner;
 */
class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // home page
    public function index(){
        return view('home');
    }

    // about page
    public function about(){
        return view('about');
    }
    // services page
    public function service(){
        return view('service');
    }
    // contact page 
    public function contact(){
        return view('contact');
    }
    // career page
    public function career(){
        return view('career');
    }
    // career detail page
    public function careerdetails(){
        return view('details');
    }
    // cookies page 
    public function cookie(){
        return view('cookies');
    }
    // login page
    public function login(){
        return view('user');
    }
    // register page
    public function register(){
        return view('register');
    }
    // policy page
    public function privacy(){
        return view('privacy');
    }
    // terms page 
    public function terms(){
        return view('terms');
    }
    // reset password page 
    public function reset(){
        return view('reset');
    }

}
