<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['category_id', 'item_name', 'qty', 'price'];

    // An Item belongs to one Category.
    public function category()
    {
         return $this->belongsTo(Category::class);
    }
}