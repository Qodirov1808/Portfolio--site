<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Section;
use App\Models\Menu;
use App\Models\Text;
class Item extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function texts(){
        return $this->hasMany(Text::class);
    }
    public function text(){
        return $this->belongsTo(Text::class);
    }
    public function section(){
        return $this->belongsTo(Section::class);
    }
    public function sections(){
        return $this->hasMany(Section::class);
    }
}
