<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insursencecard extends Model
{
    use HasFactory;
    protected $table = 'insursencecards';
    protected $fillable = ['name','cust_code','card_number','exipry_cod','security_code'];


}
