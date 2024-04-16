<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use App\Models\Section;
class Text extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function items(){
        return $this->hasMany(Item::class);
    }
    public function item(){
        return $this->belongsTo(Item::class);
    }
}
