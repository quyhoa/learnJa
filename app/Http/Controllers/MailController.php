<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function basic_email(Request $request){
    $input = $request->all();
    try {
      Mail::send('inc.mail', array('name'=>$input["name"],'email'=>$input["email"], 'content'=>$input['comment']), function($message){
          $message->to('quyhoait@gmail.com', 'butchigho')->subject('Feed back!');
      });
    } catch (Exception $e) {
      dd($e);
    }
    
    // Session::flash('flash_message', 'Send message successfully!');
    return redirect('/');
   }

   	public function html_email(){
      	$data = array('name'=>"Virat Gandhi");
      	Mail::send('mail', $data, function($message) {
         	$message->to('abc@gmail.com', 'Tutorials Point')->subject('Laravel HTML Testing Mail');
         	$message->from('xyz@gmail.com','Virat Gandhi');
      	});
      	echo "HTML Email Sent. Check your inbox.";
   	}
   
   	public function attachment_email(){
      	$data = array('name'=>"Virat Gandhi");
      	Mail::send('mail', $data, function($message) {
         	$message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
         	$message->attach('C:\laravel-master\laravel\public\uploads\image.png');
         	$message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         	$message->from('xyz@gmail.com','Virat Gandhi');
      	});
      echo "Email Sent with attachment. Check your inbox.";
   	}

}
