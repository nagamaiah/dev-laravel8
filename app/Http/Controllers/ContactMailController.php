<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;

class ContactMailController extends Controller
{
    public function sendContactMail()
    {
        try {
            // $dataToView = [
            //     "name" => "John",
            //     "location" => "Hyderabad",
            //     "mobile" => "9441787880",
            //     "description" => "this is dummy description"
            // ];
    
            $dataToView = new \stdClass();  
            $dataToView->name = "nag";
            $dataToView->location = "hyderabad";
            $dataToView->mobile = "9898989898";
            $dataToView->description = "this is dummy description";
    
    
            Mail::to('nagamaiah63@gmai.com')->send(new ContactUs($dataToView));
    
            echo "Mail sent successfully";

        } catch (\Throwable $erroObject) {
            dd($erroObject);
        }
    }
}
