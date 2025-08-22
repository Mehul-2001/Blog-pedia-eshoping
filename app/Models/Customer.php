<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [ 'name' ,'phone_number', 'email', 'address', 'state', 'city', 'zip','termsandcondition',];

    public function orderdetails()
    {
        return $this->belongsTo(Orderdetails::class);
    }
}
