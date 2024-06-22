<x-mail::message>
Hi {{ $user->name }},

Your 6-digit code is:

<strong>{{ $otp->code }}</strong>

@if ($otp->type == 'password-reset')
Use this code to reset your password in the app.
@else
Use this code to complete the verification process in the app.
@endif

Do not share this code. Penger representatives will never reach out to you to verify this code over the phone or
SMS.

<strong>The code is valid for 10 minutes.</strong>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
