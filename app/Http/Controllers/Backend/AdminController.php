<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\About;
use App\Models\Contact;
use App\Models\PrivacyPolicy;
use App\Models\TermsConditions;
use App\Models\CookiesPolicy;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function about()
    {
        $title = 'About';
        $data = About::get()->first();
        return view('backend.pages.about_us',compact('title','data'));
    }

    public function aboutUpdate(Request $request)
    {
        $id = $request->id;
        About::find($id)->update([
            'description' => $request->description,
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function contact()
    {
        $title = 'Contact';
        $data = Contact::get()->first();
        return view('backend.pages.contact_us',compact('title','data'));
    }

    public function contactUpdate(Request $request)
    {
        $id = $request->id;
        Contact::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'address' => $request->address,
            'office_hours' => $request->office_hours,
            'phone_one' => $request->phone_one,
            'phone_two' => $request->phone_two,
            'phone_three' => $request->phone_three,
            'email_one' => $request->email_one,
            'email_two' => $request->email_two,
            'email_three' => $request->email_three,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram,
            'map_location' => $request->map_location,
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function policy(){
        $title = 'policy';
        $data = PrivacyPolicy::get()->first();
        return view('backend.pages.privacy_policy',compact('title','data'));
    }
    
    public function policyUpdate(Request $request)
    {

        $id = $request->id;
        PrivacyPolicy::find($id)->update([
            'description' => $request->description,
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }
    
    public function terms(){
        $title = 'terms';
        $data = TermsConditions::get()->first();
        return view('backend.pages.terms_and_condition',compact('title','data'));
    } 

    public function termsUpdate(Request $request)
    {

        $id = $request->id;
        TermsConditions::find($id)->update([
            'description' => $request->description,
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }
    
    public function coockies(){
        $title = 'Cookies';
        $data = CookiesPolicy::get()->first();
        return view('backend.pages.cookies_policy',compact('title','data'));
    }
    
    public function cookiesUpdate(Request $request)
    {

        $id = $request->id;
        CookiesPolicy::find($id)->update([
            'description' => $request->description,
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }
    

    public function usertList(){
        $title = 'User';
        $contact = User::get();
        return view('backend.contact',compact('title','contact'));
    }

    public function userInactive($id){
        Log::info($id);
        User::findOrFail($id)->update(['status' => false]);
        return redirect()->back();
    }

    public function userActive($id){
       
           Log::info($id);
        User::findOrFail($id)->update(['status' => true]);
        return redirect()->back();
       
    }
}
