<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\ContactRequest as ContactRequestModel;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $request): JsonResponse
    {
        try {
            ContactRequestModel::query()->create([
                ...$request->validated(),
                'client_info' => $request->header('User-Agent'),
            ]);

            // @TODO: Send email

            return response()->json([
                'type' => 'success',
                'message' => __('The message was sent successfully!'),
            ])->withCookie('contact_message_was_sent', true, 1);

        } catch (\Exception $e) {

            return response()->json([
                'type' => 'danger',
                'message' => 'Sorry, we were not able to send the message. Please contact me directly through email.',
            ])->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
