<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(){
        try{
            $toEmailAddress="nawshin22nasir@gmail.com";
            $welcomeMessage="Hey welcome!";
            $response = Mail::to($toEmailAddress)->send(new SendMail($welcomeMessage));
            dd($response);
        }
        catch(Exception $e){
            Log::error("Unable to send email".$e->getMessage());
        }
    }
}
