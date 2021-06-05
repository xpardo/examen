<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Mail\CloudHostingProduct;

class MailController extends Controller
{
    //
    public function mail()    {    
        $name = 'Cloudways';     
        Mail::to('xpullodsmx@gmail.com')->send(new CloudHostingProduct($name)); 
        return 'Email sent Successfully';  
    }

                
}


