<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_detail extends Model
{
    protected $fillable = ['post_name','post_topic', 'youtube', 'facebook', 'instagram', 'twiter', 'post_description', 'post_image'];

}
