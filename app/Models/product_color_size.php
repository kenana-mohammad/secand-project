<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_color_size extends Model
{
    use HasFactory;
    protected $fillable=['id', 'created_at', 'updated_at', 'size_id', 'product_color_id', 'quantily', 'price_two', 'discount', 'status'];
    protected $table='roduct_color_sizes';
    public function product_color(){
        return $this->beLongsTo(product_color::class);
    }
    public function product_size(){
        return $this->beLongsTo(product_size::class);
    }
}
