<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{

    use HasFactory;
    protected $fillable=['image', 'parent_id', 'name'];
    protected $table='categories';

    public function child(){
        return $this->hasMany(category::class);
    }
    public function product(){
        return $this->hasMany(product::class);
    }
}
