@extends('layouts.app')

@section('title', $model->title)

@section('content')
    <section class="inner-header"
             style="background-image: url('{{$model->hasMedia('cover') ? $model->getFirstMediaUrl('cover') : asset('images/inner-header.jpg')}}')">
        <div class="container d-flex align-items-end h-100">
            <div class="header-text">
                <h1>{{ $model->title }}</h1>
                <p>{{ $model->summary }}</p>
            </div>
        </div>
    </section>
    <section class="inner-content">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    @if(auth('web')->check() && auth('web')->user()->hasRole('Site Administrator'))
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <a href="/admin/resources/events/{{ $model->id }}/edit"
                                   class="btn btn-danger"
                                   target="_blank">
                                    Edit
                                </a>
                            </div>
                        </div>
                    @endif
                    @if($model->hasMedia('featured'))
                        <div class="row mb-4">
                            <div class="col">
                                <img src="{{ $model->getFirstMediaUrl('featured') }}" alt="{{ $model->title }}"
                                     class="img-fluid"/>
                            </div>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col">
                            {!! $model->content !!}
                        </div>
                    </div>

                    @if($model->hasMedia('gallery'))
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Gallery</h4>
                                <div class="gallery-page">
                                    @foreach($model->getMedia('gallery') as $gallery_image)
                                        <div class="gallery-item">
                                            <img src="{{ $gallery_image->getUrl() }}" alt="{{ $model->title }}"/>
                                            <a href="#" data-toggle="modal" data-index="{{ $loop->index }}"
                                               data-target="#galleryModal" class="gallery-img"></a>
                                        </div>
                                @endforeach
                                <!-- Modal -->
                                    <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div id="carousel-photo-gallery" class="carousel slide" data-ride="carousel">
                                                        <div class="carousel-inner">
                                                            @foreach($model->getMedia('gallery') as $item)
                                                                <div
                                                                    class="carousel-item photo-gallery-item {{ ($loop->first)? 'active': '' }}">
                                                                    <img class="d-block w-100" src="{{ $item->getUrl() }}">
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carousel-photo-gallery"
                                                           role="button"
                                                           data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carousel-photo-gallery"
                                                           role="button"
                                                           data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
