<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Our Partner';
        $partners = Partner::orderBy('id', 'DESC')->get();
        return view('backend.pages.partner.index',compact('title','partners'));
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
        // Log::info($request->all());
        
        $request->validate([
            'title' => 'required',
            'image' => 'mimes:jpeg,png,jpg|max:2048',
        ],
        [
            'image.required' => 'Please Enter Your Title',
            'image.required' => 'Choose Partner Image',
            'image.max' => 'Partner Image maximum size 2MB',
            'image.mimes' => 'Partner Image jpeg,png,jpg',
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = $request->title.mt_rand(10, 99).'.'.$image->getClientOriginalExtension();
            $path = public_path('backend/partner/'.$name_gen);
            Image::make($image)->resize(350,100)->save($path);
            $save_url = 'backend/partner/'.$name_gen;
        }

         Partner::insert([
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
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $partner)
    {
        if ($request->file('image')) {
            
            $old_img =Partner::findOrFail($partner);
            $img = public_path($old_img->picture);
            if (File::exists($img)) {
                unlink($img);
            }
            
            $image = $request->file('image');
            $name_gen = $request->title.mt_rand(10, 99).'.'.$image->getClientOriginalExtension();
            $path = public_path('backend/partner/'.$name_gen);
            Image::make($image)->resize(350,100)->save($path);
            $save_url = 'backend/partner/'.$name_gen;

            Partner::findOrFail($partner)->update([
                'title' => $request->title,
                'description' => $request->description,
                'picture' => $save_url,
                'updated_at' => Carbon::now(),
            ]);


        }
        else
        {
            Partner::findOrFail($partner)->update([
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
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($partner)
    {
        $partner =Partner::findOrFail($partner);
        $img = public_path($partner->picture);
        if (File::exists($img)) {
            unlink($img);
        }

        $partner->delete();
        
        return redirect()->back();
    }
}
