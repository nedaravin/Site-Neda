@extends('layouts.app')

@section('title', __('Videos'))

@section('content')
    <section class="inner-header" style="background-image: url('{{asset('images/inner-header.jpg')}}')">
        <div class="container d-flex align-items-end h-100">
            <div class="header-text">
                <h1>{{ __('Education Videos') }}</h1>
                <p></p>
            </div>
        </div>
    </section>
    <section class="inner-content">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    @if($videos_education && $videos_education->count())
                        <h2>Education</h2>
                        <div class="gallery-page">
                            @foreach($videos_education as $video)
                                <div class="gallery-item gallery-video">
                                    <a data-src="https://www.youtube.com/embed/{{ $video->videoId }}" data-target="#video-modal" data-toggle="modal"></a>
                                        <img src="http://i3.ytimg.com/vi/{{ $video->videoId }}/hqdefault.jpg"/>
                                    <h4>{{ $video->{'title_'.$language} }}</h4>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    @if($videos_general && $videos_general->count())
                        <div class="gallery-page">
                            <h2>General</h2>
                            @foreach($videos_general as $video)
                                <a data-src="https://www.youtube.com/embed/{{ $video->videoId }}" data-target="#video-modal" data-toggle="modal">
                                    {{ $video->{'title_'.$language} }}
                                </a>
                                <div class="gallery-item gallery-video">
                                    <img src="http://i3.ytimg.com/vi/{{ $video->videoId }}/hqdefault.jpg"/>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    @if($videos_event && $videos_event->count())
                        <div class="gallery-page">
                            <h2>Event</h2>
                            @foreach($videos_event as $video)
                                <a data-src="https://www.youtube.com/embed/{{ $video->videoId }}" data-target="#video-modal" data-toggle="modal">
                                    {{ $video->{'title_'.$language} }}
                                </a>
                                <div class="gallery-item gallery-video">
                                    <img src="http://i3.ytimg.com/vi/{{ $video->videoId }}/hqdefault.jpg"/>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    @if($videos_other && $videos_other->count())
                        <div class="gallery-page">
                            <h2>Other</h2>
                            @foreach($videos_other as $video)
                                <a data-src="https://www.youtube.com/embed/{{ $video->videoId }}" data-target="#video-modal" data-toggle="modal">
                                    {{ $video->{'title_'.$language} }}
                                </a>
                                <div class="gallery-item gallery-video">
                                    <img src="http://i3.ytimg.com/vi/{{ $video->videoId }}/hqdefault.jpg"/>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

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
@endsection
