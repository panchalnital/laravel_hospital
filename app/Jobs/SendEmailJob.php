<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\SendMailDemo;
use Mail;



class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $sendmail;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($sendmail)
    {
        //
        $this->sendmail=$sendmail;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $email=new SendMailDemo();
        dd($this->sendmail);
        //dd($email);
        \Mail::to($user->sendmail)->send(new UserMail($email));
        //Mail::to($this->sendmail)->send($email);
    }
}
