<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Maatwebsite\Excel\Concerns\ToArray;


class Importexcel extends Model
{
    use HasFactory;
    protected  $table = "importexcels";
    protected $fillable = ['name','email'];  

    public function array(array $row)
    {}
}
