<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;
use App\Models\Item;
class Section extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function menu(){
        return $this->belongsTo(Menu::class);
    }
    public function menus(){
        return $this->hasMany(Menu::class);
    }
    public function items(){
        return $this->hasMany(Item::class);
    }
    public function item(){
        return $this->belongsTo(Item::class);
    }
}
