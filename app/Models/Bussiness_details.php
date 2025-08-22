<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bussiness_details extends Model
{
    use HasFactory;
   

    protected $fillable = [ 'bussiness_category' ,'bussiness_name', 'bussiness_phone', 'bussiness_state', 'bussiness_city', 'youtube', 'facebook', 'instagram', 'twiter', 'bussiness_description', 'bussiness_terms', 'bussiness_image'];

    
}
