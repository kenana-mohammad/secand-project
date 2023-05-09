<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use HasFactory;
    protected $fillable=['id', 'created_at', 'updated_at', 'user_id', 'adrress', 'name', 'city', 'state', 'phone', 'email', 'postal_code', 'deleted_at'];

    protected $table='categories';
    public function user(){
        return $this->beLongsTo(user::class);
    }
}
