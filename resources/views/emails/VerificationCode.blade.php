
@component('mail::message')
<h1 style="font-weight: 100;font-size: 40px">Email Verification Code</h1>

To continue with your email verification, Please enter the following code:

<b>VERIFICATION CODE</b>
<br>
{{$vcode}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
