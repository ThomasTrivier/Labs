@component('mail::message')
# New Article

A new article is available.
Article Name : {{$article->article_title}}

@component('mail::button', ['url' => '', 'color' => 'primary'])
View Article
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
