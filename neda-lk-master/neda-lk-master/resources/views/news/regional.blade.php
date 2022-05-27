@extends('layouts.app')

@section('title', 'Regional')

@section('content')
    <section class="inner-header" style="background-image: url('{{asset('images/inner-header.jpg')}}')">
        <div class="container d-flex align-items-end h-100">
            <div class="header-text">
                <h1>{{ __('Regional Level') }}</h1>
                <p></p>
            </div>
        </div>
    </section>
    <section class="inner-content">
        <div class="container">
            <div class="row">
                @if($regional && $regional->count())
                    <div class="col-md-12">
                        <h2 class="sub-title mt-5">{{ __('Regional Level') }}</h2>
                        <div class="row">
                            @foreach($regional as $news)
                                <div class="col-md-6">
                                    <div class="card card-event">
                                        <div class="card-body p-0 ">
                                            <div class="row no-gutters">
                                                <div class="col-md-4">
                                                    <div class="event-img h-100"
                                                         style="background-image: url('{{ $news->getFirstMediaUrl('featured') }}')">
                                                        <div class="card-date">
                                                            {{ $news->event_start ? $news->event_start->format('l d, Y') : '' }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-text p-4">
                                                        <h4 class="event-title mb-2">
                                                            {{ $news->title }}
                                                        </h4>
                                                        <p class="event-type mb-4">{{ __('Regional') }}</p>
                                                        <p class="event-time mb-0">
                                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                            {{ $news->event_start ? $news->event_start->format('l d, Y') : '' }}
                                                        </p>
                                                        <a href="{{ route('news.show', [$language, $news->slug]) }}"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
