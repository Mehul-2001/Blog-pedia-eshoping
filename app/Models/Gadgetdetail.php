<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gadgetdetail extends Model
{
    protected $fillable = ['gadget_name','gadget_price', 'gadget_description', 'gadget_image'];
}
