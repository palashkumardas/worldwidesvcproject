<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PayoutPartner;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class PayoutPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Payout Partners';
        $payout_partners = PayoutPartner::orderBy('id', 'DESC')->get();
        return view('backend.pages.payout_partner.index',compact('title','payout_partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'mimes:jpeg,png,jpg|max:2048',
        ],
        [
            'image.required' => 'Please Enter Your Title',
            'image.required' => 'Choose Payout Partner Image',
            'image.max' => 'Payout Partner Image maximum size 2MB',
            'image.mimes' => 'Payout Partner Image jpeg,png,jpg',
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = $request->title.mt_rand(10, 99).'.'.$image->getClientOriginalExtension();
            $path = public_path('backend/partner/'.$name_gen);
            Image::make($image)->resize(350,100)->save($path);
            $save_url = 'backend/partner/'.$name_gen;
        }

         PayoutPartner::insert([
            'title' => $request->title,
            'description' => $request->description,
            'picture' => $save_url,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PayoutPartner  $payoutPartner
     * @return \Illuminate\Http\Response
     */
    public function show(PayoutPartner $payoutPartner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PayoutPartner  $payoutPartner
     * @return \Illuminate\Http\Response
     */
    public function edit(PayoutPartner $payoutPartner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PayoutPartner  $payoutPartner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $payoutPartner)
    {

        if ($request->file('image')) {
            
            $old_img =PayoutPartner::findOrFail($payoutPartner);
            $img = public_path($old_img->picture);
            if (File::exists($img)) {
                unlink($img);
            }
            
            $image = $request->file('image');
            $name_gen = $request->title.mt_rand(10, 99).'.'.$image->getClientOriginalExtension();
            $path = public_path('backend/partner/'.$name_gen);
            Image::make($image)->resize(350,100)->save($path);
            $save_url = 'backend/partner/'.$name_gen;

            PayoutPartner::findOrFail($payoutPartner)->update([
                'title' => $request->title,
                'description' => $request->description,
                'picture' => $save_url,
                'updated_at' => Carbon::now(),
            ]);


        }
        else
        {
            PayoutPartner::findOrFail($payoutPartner)->update([
                'title' => $request->title,
                'description' => $request->description,
                'updated_at' => Carbon::now(),
            ]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PayoutPartner  $payoutPartner
     * @return \Illuminate\Http\Response
     */
    public function destroy($payoutPartner)
    {
        $payoutPartner =PayoutPartner::findOrFail($payoutPartner);
        $img = public_path($payoutPartner->picture);
        if (File::exists($img)) {
            unlink($img);
        }

        $payoutPartner->delete();
        
        return redirect()->back();
    }
}
