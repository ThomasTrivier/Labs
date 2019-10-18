@component('mail::message')
# Contact Request

Name : {{$contact->name}}
Email : {{$contact->email}}
@component('mail::panel')
Subject : {{$contact->subject}}
Message : {{$contact->message}}
@endcomponent

@component('mail::button', ['url' => '', 'color' => 'success'])
View Contact
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
