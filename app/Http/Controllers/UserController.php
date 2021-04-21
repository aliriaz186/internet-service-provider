<?php
namespace App\Http\Controllers;

use App\dreams;
use App\Http\Controllers\Controller;
use App\PaymentHistory;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Session;
use services\email_messages\InvitationMessageBody;
use services\email_services\EmailAddress;
use services\email_services\EmailBody;
use services\email_services\EmailMessage;
use services\email_services\EmailSender;
use services\email_services\EmailSubject;
use services\email_services\MailConf;
use services\email_services\PhpMail;
use services\email_services\SendEmailService;

class UserController extends Controller
{
    public function get(Request $request)
    {
        $user_id = $request->get("uid", 0);
        $user = User::find($user_id);
        return $user;
    }

    public function home(){
        return view('landing');
    }
    public function pricing(){
        return view('pricing');
    }
    public function aboutus(){
        return view('aboutus');
    }
    public function services(){
        return view('services');
    }

    public function contactus(){
        return view('contactus');
    }

    public function sendEmail(Request $request){
        $subject = new SendEmailService(new EmailSubject("A customer contacted you from Eagle  Internet"));
        $mailTo = new EmailAddress('me.aliriaz007@gmail.com');
        $invitationMessage = new InvitationMessageBody();
        $emailBody = $invitationMessage->invitationMessageBody($request);
        $body = new EmailBody($emailBody);
        $emailMessage = new EmailMessage($subject->getEmailSubject(), $mailTo, $body);
        $sendEmail = new EmailSender(new PhpMail(new MailConf("smtp.gmail.com", "admin@dispatch.com", "secret-2021")));
        $result = $sendEmail->send($emailMessage);

        session()->flash('msg', 'Message Sent Successfully. We will get back to you soon.');
        return redirect()->back();
    }
}
