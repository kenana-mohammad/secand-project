<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class size extends Model
{
    use HasFactory;
    protected $fillable=['id', 'created_at', 'updated_at', 'product_id', 'size'];
    protected $table='sizes';
    public function product_color_size(){
        return $this->hasMany(product_color_size::class);
    }
    public function product(){
        return $this->beLongsTo(product::class);
    }
}
