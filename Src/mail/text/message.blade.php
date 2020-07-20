@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['subject' => $subject])
@endcomponent
@endslot

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
{{ config('app.name') }} é um produto da Asteroide Tecnologia e Pagamentos
CNPJ: 26.600.796/0001-07 - contato@asteroidetecnologia.com.br
@endcomponent
@endslot
@endcomponent