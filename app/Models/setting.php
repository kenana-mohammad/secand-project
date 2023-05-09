<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;  
  protected $fillable=['id', 'created_at', 'updated_at', 'title', 'decsrption', 'adddress', 'logo', 'favicon', 'email', 'phone', 'facebook', 'instagram'];
  protected $table='settings';
}
