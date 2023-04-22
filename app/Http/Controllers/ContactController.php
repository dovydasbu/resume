<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactRequestMail;
use App\Models\ContactRequest as ContactRequestModel;
use Illuminate\Http\JsonResponse;
use Mail;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $request): JsonResponse
    {
        try {
            $contactRequest = ContactRequestModel::query()->create([
                ...$request->validated(),
                'client_info' => $request->header('User-Agent'),
            ]);

            Mail::to(config('mail.admin.address'))->send(new ContactRequestMail($contactRequest));

            return response()->json([
                'type' => 'success',
                'message' => __('The message was sent successfully!'),
            ])->withCookie('contact_message_was_sent', true, 1);

        } catch (\Exception $e) {

            return response()->json([
                'type' => 'danger',
                'message' => 'Sorry, we were not able to send the message. Please try again or contact me directly through email.',
            ]);
        }
    }
}
