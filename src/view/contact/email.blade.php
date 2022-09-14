@component('mail::message')
# Introduction
There is new Query From : {{ $name }}
<br><br>
Message:
{{ $message }}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent
