<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable=['id', 'created_at', 'updated_at', 'user_id', 'statues', 'payment_statues', 'payment_id', 'total_price', 'address', 'phone', 'email', 'name', 'city', 'postal_code', 'country'];
    protected $table='orders';
    public function user(){
        return $this->beLongsTo(user::class);
    }
}
