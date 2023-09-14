<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;
    protected $table = "billings";
    protected $fillable = ['billing_no','firstname','lastname','email','mobile','billing_date','billing_time','payment_mode','product_brand','product_name','product_quantity','product_rate','paid_amt','balance_amt','address','city','state','product_total','cust_code'];
}
