@component('mail::message')
# Introduction

The body of your message. Change!

@component('mail::button', ['url' => '', 'color' => 'success'])
Button Text
@endcomponent

@component('mail::panel')
Example Panel
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
