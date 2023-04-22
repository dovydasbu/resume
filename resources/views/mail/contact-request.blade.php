<x-mail::message>
    # Contact Request

    From Name: {{ $contactRequest->name }}

    From Email: {{ $contactRequest->email }}

    Subject: {{ $contactRequest->subject }}

    Message:
    {{ $contactRequest->message }}
</x-mail::message>
