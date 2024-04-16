<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::all();
        return view('dashboart.settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('dashboart.settings.create');
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
        'logo' => 'nullable|mimes:png,jpg,jpeg,svg'
       ]);
       $file = $request->file('logo');
       if ($file !== null) {
        $path = md5(rand(1111,9999).microtime()). '.' .$request->logo->extension();
        $request->logo->storeAs('public/images/' , $path);
        Setting::create([
            'logo' => $path,
            'social_media' => ['telegram'=>$request->telegram,'instagram'=>$request->instagram,'facebook'=>$request->facebook],
        
        ]); 
       
    }elseif ($file === null){
        Setting::create([
            'social_media' => ['telegram'=>$request->telegram,'instagram'=>$request->instagram,'facebook'=>$request->facebook],
        ]);
    }
    return redirect(route('setting.index'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $setting = Setting::find($id);
        return view('dashboart.settings.show', compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('dashboart.settings.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $setting = Setting::find($id);
        $file = $request->file('logo');
     
        if ($file !== null) { 
            // dd($request);
   $imagePath = public_path('storage/images/') . $setting->logo;
   if (file_exists($imagePath) && is_file($imagePath)) {
       unlink($imagePath);
   }
   
   $path = md5(rand(1111,9999).microtime()). '.'.$request->logo->extension();
   $request->logo->storeAs('public/images/', $path);

   Setting::where('id', $id)->update([
    'social_media' => ['instagram'=>$request->instagram,'telegram'=>$request->telegram,'facebook'=>$request->facebook],       
       'logo' => $path,
   ]);
    //   dd($request);
    }else {
        Setting::where('id', $id)->update([
   
    'social_media' => ['telegram'=>$request->telegram,'instagram'=>$request->instagram,'facebook'=>$request->facebook],
        
    ]);
   }
     return redirect(route('setting.index'));   
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setting = Setting::find($id);
        
        if (!$setting) {
            return redirect()->route('setting.index');
        }
    
        $imagePath = public_path('storage/images/' . $setting->logo);
    
        if (file_exists($imagePath) && is_file($imagePath)) {
            unlink($imagePath);
        }
    
        $setting->delete();
    
        return redirect()->back();
    }
    }


