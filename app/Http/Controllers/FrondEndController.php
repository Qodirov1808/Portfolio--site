<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Models\Text;
use App\Models\Section;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrondEndController extends Controller
{
    public function index(){
        //menu start
        $home = Menu::skip(0)->take(1)->first();
        $about = Menu::skip(1)->take(1)->first();
        $work = Menu::skip(2)->take(1)->first();
        $price = Menu::skip(3)->take(1)->first();
        $team = Menu::skip(4)->take(1)->first();
        $contact = Menu::skip(5)->take(1)->first();
        // $ourprograms = Menu::skip(6)->take(1)->first();
        //menu end
        //home start
       $menu = Menu::skip(0)->first();
       $section = $menu->sections;
      //home end
      //about start
       $menu1 = Menu::skip(1)->first();          
       $section1 = $menu1->sections;
       //about end
       //work start
       $menu2 = Menu::skip(2)->first();
       $section2 = $menu2->sections;
       //work end
       //price start
       $menu3 = Menu::skip(3)->first();
       $section3 = $menu3->sections;
       //price end
       //team start
       $menu4 = Menu::skip(4)->first();
       $section4 = $menu4->sections;
       //team end
       //contact start
       $menu5 = Menu::skip(5)->first();
       $section5 = $menu5->sections;
       //contact end 
       $settings = Setting::orderBy('created_at', 'desc')->take(1)->get();   
        return view('frondend.software', compact('home','about','work','price','team','contact','section','section1', 'section2','section3','section4','section5','settings'));
  
    }
}
