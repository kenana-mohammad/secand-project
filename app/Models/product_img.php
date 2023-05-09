<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_img extends Model
{
    use HasFactory;
    protected $fillable=['id', 'created_at', 'updated_at', 'product_color_size_id'];
    protected $table='product_imgs';
    public function product_color_size(){
        return $this->beLongsTo(product_color_size::class);
    }
}
