<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function subcategory(){
        return $this->belongsTo(SubCategory::class,'subcategory_id','id');
    }

    
}
