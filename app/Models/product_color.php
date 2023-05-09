<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_color extends Model
{

    use HasFactory;
    protected $fillable=[ 'id', 'created_at', 'updated_at', 'product_id', 'color'];
    protected $table='product_colors';
    public function product(){
        return $this->beLongsTo(product::class);
    }
    public function product_color_size(){
        return $this->hasMany(product_color_size::class);
    }
}
