@component('mail::message')

<strong> Name: </strong> {{$data['contact_name']}}
<br>
<strong> Email: </strong> {{$data['contact_email']}}
<br>
<strong> Subject: </strong> {{$data['contact_subject']}}
<br>
<strong> Message: </strong> {{$data['contact_message']}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
