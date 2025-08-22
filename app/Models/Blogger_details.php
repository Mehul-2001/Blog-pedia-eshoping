<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogger_details extends Model
{
    use HasFactory;

    protected $fillable = [ 'name' ,'email', 'phone', 'address',  'description', 'profile_picture','aadhar'];

    
  
}
