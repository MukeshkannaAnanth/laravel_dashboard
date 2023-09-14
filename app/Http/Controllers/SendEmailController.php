<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use Mail;
 
use App\Mail\NotifyMail;
 
 
class SendEmailController extends Controller
{
     
    public function index()
    {
 
      echo "ok";
    } 
}