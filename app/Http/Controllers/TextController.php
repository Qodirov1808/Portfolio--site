<?php

namespace App\Http\Controllers;

use App\Models\Text;
use App\Models\Menu;
use App\Models\Item;
use Illuminate\Http\Request;
use File;

class TextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $texts = Text::paginate(8);
        return view('dashboart.text.index', compact( 'texts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::all();
        return view('dashboart.text.creat', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'item_id' => 'required', 
            'for.*' => 'required' 
        ]);
        foreach ($request->for as $item) {
            Text::create([
                'item_id' => $request->item_id,
                'text' => $item
            ]);
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $text = Text::find($id);
        return view('dashboart.text.show', compact('text'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $text = Text::find($id);
        return view('dashboart.text.edit', compact('text'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $text = Text::find($id);
        $request->validate([
            // 'item_id' => 'required|exists:menus,id', 
            'for.*' => 'required|string|max:255', 
        ]);
        foreach ($request->for as $item) {
            $text->update([
                // 'item_id' => $request->item_id,
                'text' => $item
            ]);
        }
        return redirect(route('text.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $text = Text::find($id);
      $text->delete();
        return redirect()->back();
    }
    
}
