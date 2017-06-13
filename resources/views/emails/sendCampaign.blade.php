@component('mail::message')
# {!! $data['subject'] !!}


{!! $data['content'] !!}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
