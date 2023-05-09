<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable=['id', 'created_at', 'updated_at', 'name', 'image', 'price', 'discount_price', 'category_id', 'description'];
    protected $table='products';
    public function category(){
        return $this->beLongsTo(category::class);
    }
    //one to many
    public function product_color(){
        return $this->hasMany(product_color::class);
    }
    public function product_color_size(){
        return $this->hasMany(product_color_size::class);
    }
    public function size(){
        return $this->hasMany(size::class);
    }
    
}
