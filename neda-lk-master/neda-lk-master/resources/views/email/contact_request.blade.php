@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{ __('NEDA Site contact request') }}
        @endcomponent
    @endslot

        <p><strong>{{ __('Name') }} </strong> : {{ $date['name'] }}</p>
        <p><strong>{{ __('Email') }} </strong> : {{ $date['email'] }}</p>
        <p><strong>{{ __('Subject') }} </strong> : <strong>{{ $date['subject'] }}</strong> </p>
        <p><strong>{{ __('Message') }} </strong> : {{ $date['message'] }}</p>

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent
