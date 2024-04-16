<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Section;
use App\Models\Item;
class Menu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function sections(){
        return $this->hasMany(Section::class);
    }
    public function items(){
        return $this->hasMany(Item::class);
    }
    public function section(){
        return $this->belongsTo(Section::class);
        // , 'items', 'section_id'
    }
 
}
