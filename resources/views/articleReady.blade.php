@component('mail::message')
# Article created

A new article has been created by {{$user->name}}.  

@component('mail::button', ['url' => '', 'color' => 'danger'])
View Article
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
