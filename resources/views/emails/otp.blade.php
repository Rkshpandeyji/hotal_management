@component('mail::message')
# OTP Verification

Your OTP for email verification is: **{{ $otp }}**

If you did not request this OTP, please ignore this email.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent

