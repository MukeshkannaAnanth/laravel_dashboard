<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Add_Dressproduct extends Model
{
    protected $table = 'add__dressproducts';
    protected $fillable = ['Dress_no','Dress_name','Dress_code','Dress_Rate','Dress_Stock','cust_code','dress_image','dress_type'];
}
