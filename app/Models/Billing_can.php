<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing_can extends Model
{
    use HasFactory;
    protected $table = 'billing_cans';
    protected $fillable = ['day_can_count','can','date','time','rate','qty','type','offer','total'];
}
