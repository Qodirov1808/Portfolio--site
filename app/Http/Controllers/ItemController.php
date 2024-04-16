<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Menu;
use App\Models\Section;
use Illuminate\Http\Request;
use File;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Item::all();
         $items = Item::paginate(8);
        return view('dashboart.item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::all();
        return view('dashboart.item.create', compact('sections'));
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
            'title' => 'required|string',
            'text' => 'nullable|string',
            'link' => 'nullable|string',
            'count' => 'nullable|numeric',
            'description' => 'nullable|string',
            'image' => 'nullable|mimes:jpg,png,jpeg,svg,webp,'
        ]);
             
        $file = $request->file('image');

        if ($file !== null) {                     
            $path = md5(rand(1111,9999).microtime()). '.'.$request->image->extension();
            $request->image->storeAs('public/images/' , $path);       
            Item::create([
                'title' => $request->title,
                'text' => $request->text,
                'count' => $request->count,
                'link' => $request->link,
                'description' => $request->description,
                'section_id' => $request->section_id,
                'image' => $path
            ]);
        } else if ($file == null) {           
            Item::create([
               'title' => $request->title,
               'text' => $request->text,
               'link' => $request->link,
               'count' => $request->count,
               'section_id' => $request->section_id,        
               'description' => $request->description,
            ]);
        }

        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $item = Item::find($id);
       return view('dashboart.item.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
      $item = Item::find($id);
      return view('dashboart.item.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $item = Item::find($id);

        $file = $request->file('image');

        if ($file !== null) { 

   $imagePath = public_path('storage/images/') . $item->image;
   if (file_exists($imagePath) && is_file($imagePath)) {
       unlink($imagePath);
   }
   
   $path = md5(rand(1111,9999).microtime()). '.'.$request->image->extension();
   $request->image->storeAs('public/images/', $path);

   Item::where('id', $id)->update([
       'title' => $request->title,
       'link' => $request->link,
       'text' => $request->text,
       'count' => $request->count,
       'description' => $request->description,
       'image' => $path,
   ]);
    }else{
   Item::where('id' , $id)->update([
    'title' => $request->title,
    'text' => $request->text,
    'link' => $request->link,
    'count' => $request->count,
    'description' => $request->description,
    
    ]);
   }

     return redirect(route('item.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {

      
            $item = Item::find($id);
        
            if (!$item) {
                return redirect()->route('item.index')->with('error', 'Obyekt topilmadi');
            }
        
            $imagePath = public_path('storage/images/' . $item->image);
        
            if (file_exists($imagePath) && is_file($imagePath)) {
                unlink($imagePath);
            }
        
            $item->delete();
        
            return redirect()->route('item.index')->with('success', 'Obyekt muvaffaqiyatli o\'chirildi');
        }

   
}
