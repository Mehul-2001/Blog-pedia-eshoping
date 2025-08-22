<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetails extends Model
{
    protected $fillable = ['gadget_name','gadget_price','gadget_image','customer_id','invoice_no'];
    public function customers()
    {
        return $this->hasMany(Customer::class,'customer_id');
    }
}
