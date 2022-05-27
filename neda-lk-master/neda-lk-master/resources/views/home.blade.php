@extends('layouts.app')

@section('title', __('Home'))

@section('content')
    @if(env('APP_URL') === 'https://www.nef.lk')
        <h3>Redirecting..</h3>
        <script>
            location.href = "http://www.neda.gov.lk";
        </script>
    @else
        @if($home_gallery && $home_gallery->hasMedia('gallery'))
            <div class="home-slider carousel slide carousel-fade" id="homeSlider" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($home_gallery->getMedia('gallery') as $gallery_media)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <div class="carousel-img"
                                 style="background-image: url('{{ $gallery_media->getUrl() }}')"></div>
                            <div class="carousel-caption">
                                <div class="container slider-text">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>{{ $gallery_media->getCustomProperty('title_'.$language) }}</h5>
                                            {!! $gallery_media->getCustomProperty('description_'.$language) !!}
                                            @if($gallery_media->hasCustomProperty('link_'.$language) && $gallery_media->getCustomProperty('link_'.$language))
                                                <a class="btn btn-light ml-4" href="{!! $gallery_media->getCustomProperty('link_'.$language) !!}">
                                                    {!! $gallery_media->getCustomProperty('link_text_'.$language) !!}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#homeSlider" role="button" data-slide="prev">
                    <i aria-hidden="true" class="fa fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#homeSlider" role="button" data-slide="next">
                    <i aria-hidden="true" class="fa fa-angle-right"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        @endif
        <!-- Featured links -->
        <section class="featured-links">
            <div class="container">
                <div class="owl-carousel owl-theme" id="featuredLinks">
                    @if($block = content_block(4))
                        <div class="featured-links-item">
                            <a href="{{ $block['link'] }}"></a>
                            <img src="{{ $block['image'] }}">
                            <h3>{{ $block['title'] }}</h3>
                            {!! $block['content'] !!}
                        </div>
                    @endif
                    @if($block = content_block(5))
                        <div class="featured-links-item">
                            <a href="{{ $block['link'] }}"></a>
                            <img src="{{ $block['image'] }}">
                            <h3>{{ $block['title'] }}</h3>
                            {!! $block['content'] !!}
                        </div>
                    @endif
                    @if($block = content_block(6))
                        <div class="featured-links-item">
                            <a href="{{ $block['link'] }}"></a>
                            <img src="{{ $block['image'] }}">
                            <h3>{{ $block['title'] }}</h3>
                            {!! $block['content'] !!}
                        </div>
                    @endif
                    @if($block = content_block(7))
                        <div class="featured-links-item">
                            <a href="{{ $block['link'] }}"></a>
                            <img src="{{ $block['image'] }}">
                            <h3>{{ $block['title'] }}</h3>
                            {!! $block['content'] !!}
                        </div>
                    @endif
                    @if($block = content_block(8))
                        <div class="featured-links-item">
                            <a href="{{ $block['link'] }}"></a>
                            <img src="{{ $block['image'] }}">
                            <h3>{{ $block['title'] }}</h3>
                            {!! $block['content'] !!}
                        </div>
                    @endif
                </div>
            </div>
        </section>
        <!-- Featured Articles -->
        <section class="featured-articles">
            <div class="container">
                <div class="owl-carousel owl-theme" id="featuredArticles">
                    @if($block = content_block(9))
                        <div class="featured-articles-item d-flex align-items-end"
                             style="background-image: url('{{ $block['image'] }}')">
                            <div class="featured-articles-content">
                                <h3>{{ $block['title'] }}</h3>
                                {!! $block['content'] !!}
                                <a href="{{ $block['link'] }}">
                                    {{ $block['link_text'] }}
                                    <i class="fa fa-long-arrow-right"
                                       aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    @endif

                    @if($block = content_block(10))
                        <div class="featured-articles-item d-flex align-items-end"
                             style="background-image: url('{{ $block['image'] }}')">
                            <div class="featured-articles-content">
                                <h3>{{ $block['title'] }}</h3>
                                {!! $block['content'] !!}
                                <a href="{{ $block['link'] }}">
                                    {{ $block['link_text'] }}
                                    <i class="fa fa-long-arrow-right"
                                       aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    @endif

                    @if($block = content_block(11))
                        <div class="featured-articles-item d-flex align-items-end"
                             style="background-image: url('{{ $block['image'] }}')">
                            <div class="featured-articles-content">
                                <h3>{{ $block['title'] }}</h3>
                                {!! $block['content'] !!}
                                <a href="{{ $block['link'] }}">
                                    {{ $block['link_text'] }}
                                    <i class="fa fa-long-arrow-right"
                                       aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>

        <!-- Events and More -->
        <section class="events py-extra">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="home-title">{{ __('Event Calendar') }}</h2>
                        <div class="list-group list-group-flush">
                            @if($events && $events->count())
                                @foreach($events as $event)
                                    <div class="list-group-item p-0 card card-event">
                                        <div class="card-body p-0 ">
                                            <div class="row no-gutters">
                                                <div class="col-md-4">
                                                    <div class="event-img h-100"
                                                         style="background-image: url('{{ $event->getFirstMediaUrl('featured', 'thumb')  }}')">
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
                                @endforeach
                            @else
                                <div class="text-center mt-md-5 mb-5">
                                    <p class="mb-0"><img src="{{ asset('images/events.png') }}" width="100px"></p>
                                    <p>No active events.</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 pl-md-5">
                        <h2 class="home-title">{{ __('What we do') }}</h2>
                        @if($block = content_block(12))
                            <div class="home-video" style="background-image: url('{{ $block['image'] }}')">
                                <a data-src="{{ $block['link'] }}"
                                   data-target="#video-modal" data-toggle="modal"></a>
                                <div class="btn-play">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <!-- News and Publications -->
        <section class="news py-extra" style="background-image: url('{{asset('images/news-bg.jpg')}}')">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h2 class="home-title mb-4">{{ __('News and Publications') }}</h2>
                        <p>{{ __('The news about recent activities from NEDA Sri Lanka') }}</p>
                        <a href="{{ route('news.index', $language) }}" class="btn btn-outline-primary">{{ __('More News') }}</a>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            @if($news && $news->count())
                                @foreach($news as $news_item)
                                    <div class="col-md">
                                        <div class="card card-news">
                                            <img class="card-img-top" src="{{ $news_item->getFirstMediaUrl('featured', 'home_thumb') }}">
                                            <div class="card-body">
                                                {{--<div class="card-date">Nov 12, 2020</div>--}}
                                                <h5 class="card-title mb-4">
                                                    {{ $news_item->title }}
                                                </h5>
                                                <a href="{{ route('news.show', [$language, $news_item->slug]) }}" class="card-link">
                                                    {{ __('Continue Reading') }}
                                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Photo Gallery -->
        <section class="photo-gallery py-extra">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="home-title">{{ __('Photo Gallery') }}</h2>
                    </div>
                </div>
                <div class="gallery-page">
                    @if($gallery && $gallery->count())
                        @foreach($gallery as $item)
                            <div class="gallery-item">
                                <img src="{{ $item->getUrl('home_thumb') }}" alt="Gallery"/>
                                <a href="{{ $item->getUrl() }}"
                                   data-lightbox="Home Gallery" class="gallery-img"></a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>

        <section class="information py-extra">
            <div class="information-bg" style="background-image: url('{{asset('images/information-bg.jpg')}}')"></div>
            <div class="container">
                <div class="row mb-5">
                    <div class="col">
                        <div class="text-center">
                            <h2 class="home-title">{{ __('Explore Online Services & Resource') }}</h2>
                            <a href="/register" class="btn btn-primary btn-light">{{ __('Register / Login Now') }}</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="row no-gutters">
                                    @if($block = content_block(13))
                                        <div class="col-md-5">
                                            <img src="{{ $block['image'] }}" class="card-img">
                                        </div>
                                        <div class="col-md-7 py-5 px-4">
                                            {!! $block['content'] !!}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <h3 class="home-subtitle">{{ __('Important Links') }}</h3>
                                <div id="ImportantLinks" class="owl-carousel owl-theme ">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item important-links">
                                            <a href="http://www.doc.gov.lk" target="_blank">
                                                <img src="{{asset('images/gov.png')}}" class="mr-2"> Department of
                                                commerce</a>
                                        </li>
                                        <li class="list-group-item important-links">
                                            <a href="http://www.drc.gov.lk/" target="_blank">
                                                <img src="{{asset('images/gov.png')}}" class="mr-2"> Department of
                                                register companies </a>
                                        </li>
                                        <li class="list-group-item important-links">
                                            <a href="https://www.srilankabusiness.com/" target="_blank">
                                                <img src="{{asset('images/srilankabusiness.png')}}" class="mr-2"> Export
                                                development board
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item important-links">
                                            <a href="http://www.idb.gov.lk" target="_blank">
                                                <img src="{{asset('images/idb.png')}}" class="mr-2">Industrial
                                                development board</a>
                                        </li>
                                        <li class="list-group-item important-links">
                                            <a href="https://slndc.gov.lk/" target="_blank">
                                                <img src="{{asset('images/gov.png')}}" class="mr-2"> National design
                                                center </a>
                                        </li>
                                        <li class="list-group-item important-links">
                                            <a href="https://caa.gov.lk" target="_blank">
                                                <img src="{{asset('images/caa.png')}}" class="mr-2"> Consumer affairs
                                                authority
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item important-links">
                                            <a href="http://iti.lk" target="_blank">
                                                <img src="{{asset('images/iti.png')}}" class="mr-2">Industrial
                                                technology institute</a>
                                        </li>
                                        <li class="list-group-item important-links">
                                            <a href="https://www.slsi.lk" target="_blank">
                                                <img src="{{asset('images/slsi.png')}}" class="mr-2"> Sri Lanka
                                                standards institute </a>
                                        </li>
                                        <li class="list-group-item important-links">
                                            <a href="http://slic.gov.lk/" target="_blank">
                                                <img src="{{asset('images/slic.png')}}" class="mr-2"> Sri lanka
                                                inventors commission
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video Modal -->
        <div class="modal fade modal-video" id="video-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                                    allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
