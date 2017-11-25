<?php

namespace App\Http\Controllers;

use App\Settings;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function contactMail(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required|email',
            'judul' => 'required',
            'pesan' => 'required|min:15|max:10000',
            'g-recaptcha-response' => 'required|captcha'
        ]);
        $settings = Settings::all()->first();
        Mail::send('mails.contact',['request'=>$request], function ($message) use ($settings){
            $message->from('no-reply@developer-banten.net', 'Helpdesk Pemprov Banten');
            $message->subject('Kontak Baru ');
            $message->to($settings->admin_email);
        });
        return redirect()->back()->withMessage('Pesan anda berhasil dikirim. Kami akan segera merespon pesan anda.');
    }

}
