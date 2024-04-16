<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Menu;
use Illuminate\Http\Request;
use File;
class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::all();
        return view('dashboart.section.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $menus = Menu::where('name'); 
        $menus = Menu::all();
        return view('dashboart.section.create',compact('menus'));
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
            'title' =>'required|string',
            'text' =>'nullable|string',
            'button_link' =>'nullable|string',
            'description' =>'nullable|string',         
            'image' => 'nullable|mimes:jpg,png,jpeg,svg,webp'
        ]);
        $file = $request->file('image');

        if ($file !== null) {
        $path = md5(rand(1111,9999).microtime()). '.'.$request->image->extension();
            $request->image->storeAs('public/images/' , $path);
        Section::create([
            'title' => $request->title,
            'text' => $request->text,
            'button_link' => $request->button_link,
            'menu_id' => $request->menu_id,            
            'description' => $request->description,
            'image' => $path,               
        ]);
        } else if ($file == null) {
     Section::create([
        'title' => $request->title,
        'text' => $request->text,
        'button_link' => $request->button_link,
        'menu_id' => $request->menu_id,            
        'description' => $request->description,
       
        ]);
    }
                            
        return redirect(route('section.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $section = Section::find($id);
     return view('dashboart.section.show', compact('section'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $section = Section::find($id);
        return view('dashboart.section.edit', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $section = Section::find($id);
        $file = $request->file('image');

        if ($file !== null) { 

   $imagePath = public_path('storage/images/') . $section->image;
   if (file_exists($imagePath) && is_file($imagePath)) {
       unlink($imagePath);
   }
   
   $path = md5(rand(1111,9999).microtime()). '.'.$request->image->extension();
   $request->image->storeAs('public/images/', $path);

   Section::where('id', $id)->update([
       'title' => $request->title,
       'button_link' => $request->button_link,
       'text' => $request->text,
       'description' => $request->description,
       'image' => $path,
   ]);
    }else{
   Section::where('id' , $id)->update([
    'title' => $request->title,
    'text' => $request->text,
    'button_link' => $request->button_link,
    'description' => $request->description,
    
    ]);
   }
     return redirect(route('section.index'));   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $section = Section::find($id);
        
        if (!$section) {
            return redirect()->route('item.index');
        }
    
        $imagePath = public_path('storage/images/' . $section->image);
    
        if (file_exists($imagePath) && is_file($imagePath)) {
            unlink($imagePath);
        }
    
        $section->delete();
    
        return redirect()->back();
    }
}
