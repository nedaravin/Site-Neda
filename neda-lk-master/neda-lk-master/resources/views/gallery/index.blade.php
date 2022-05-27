@extends('layouts.app')

@section('title', __('Gallery'))

@section('content')
    <section class="inner-header" style="background-image: url('{{asset('images/inner-header.jpg')}}')">
        <div class="container d-flex align-items-end h-100">
            <div class="header-text">
                <h1>{{ __('Gallery') }}</h1>
                <p></p>
            </div>
        </div>
    </section>
    <section class="inner-content">
        <div class="container">
            @include('gallery.common')
            <div class="row">
                <div class="col-md">
                    <div class="gallery-page">
                        @if($media && $media->count())
                            @foreach($media as $item)
                                <div class="gallery-item">
                                    <img src="{{ $item->getUrl('thumb') }}" data-toggle="modal" data-target="#galleryModal"/>
                                    <a href="{{ $item->getUrl() }}"
                                       data-lightbox="general" class="gallery-img"></a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
