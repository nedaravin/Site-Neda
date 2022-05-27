@extends('layouts.app')

@section('title', 'National Events')

@section('content')
    <section class="inner-header" style="background-image: url('{{asset('images/inner-header.jpg')}}')">
        <div class="container d-flex align-items-end h-100">
            <div class="header-text">
                <h1>{{ __('National Level') }}</h1>
                <p></p>
            </div>
        </div>
    </section>
    <section class="inner-content">
        <div class="container">
            <div class="row">
                @if($national && $national->count())
                    <div class="col-md-12">
                        <h2 class="sub-title mt-5">{{ __('National Level') }}</h2>
                        <div class="row">
                            @foreach($national as $event)
                                <div class="col-md-6">
                                    <div class="card card-event">
                                        <div class="card-body p-0 ">
                                            <div class="row no-gutters">
                                                <div class="col-md-4">
                                                    <div class="event-img h-100"
                                                         style="background-image: url('{{ $event->getFirstMediaUrl('featured') }}')">
                                                        <div class="card-date">
                                                            {{ $event->event_start ? $event->event_start->format('l d, Y') : '' }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-text p-4">
                                                        <h4 class="event-title mb-2">
                                                            {{ $event->title }}
                                                        </h4>
                                                        <p class="event-type mb-4">{{ __('Regional') }}</p>
                                                        <p class="event-time mb-0">
                                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                            {{ $event->event_start ? $event->event_start->format('l d, Y') : '' }}
                                                        </p>
                                                        <a href="{{ route('event.show', [$language, $event->slug]) }}"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @if($national->count() > 2)
                            <div class="row">
                                <div class="col-md text-center">
                                    <a href="{{ route('events_regional.index', $language) }}"
                                       class="btn btn-link">
                                        {{ __('View More') }}
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
