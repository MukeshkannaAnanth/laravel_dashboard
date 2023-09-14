<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addcustomer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $fillable = ['customername','customer_mobile','cust_code','customer_image','customer_addr','customer_city','customer_state','customer_type','customer_email'];
}
