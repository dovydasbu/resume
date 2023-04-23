<?php

namespace App\Console\Commands;

use App\Mail\ContactRequestMail;
use App\Models\ContactRequest;
use Illuminate\Console\Command;
use Mail;

class SendContactRequestEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'resume-send:contact-request {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Contact Request Email';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $contactRequest = ContactRequest::first();

        if (!$contactRequest) {
            $contactRequest = ContactRequest::query()->create([
                'name' => 'Test Testausk',
                'email' => 'test@test.com',
                'subject' => 'Price of web',
                'message' => 'web is eshop',
                'client_info' => 'IP.IP.IP',
            ]);
        }

        Mail::to(config('mail.admin.address'))->send(new ContactRequestMail($contactRequest));
    }
}
