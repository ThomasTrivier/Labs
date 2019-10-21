@component('mail::message')
# New Article Published

A new article has been published. 
Article Name : {{$article->article_title}}

@component('mail::button', ['url' => '', 'color' => 'primary'])
View Article
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
