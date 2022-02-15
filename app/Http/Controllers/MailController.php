<?php

namespace App\Http\Controllers;

use DB;
use Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\UsersTestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index() {
        return view('mail', ['msg' => '']);
    }

    public function sendEmail() {

        $userData = DB::table('users')->pluck('email')->toArray();

        $sender = [
            'title' => 'Test Email',
            'body' => 'This mail is send to test.',
            'from' => config('mail.from')['name']
        ];

        $chunks = array_chunk($userData, 500);

        // adding email sending on multiple queue jobs
        foreach($chunks as $chunk){
            dispatch(new \App\Jobs\SendEmail($sender, $chunk));
        }

        return redirect('/')->with(['msg' => 'Email is Sent.']);
    }
}
