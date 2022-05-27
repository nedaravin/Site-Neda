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
                @if($model->children && $model->children->count())
                    <div class="col-md-3">
                        <div class="list-sidebar">
                            @if($model->parent)
                                <h6 class="list-header">
                                    <a href="#">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> {{ $model->parent->title }}
                                    </a>
                                </h6>
                            @else
                                <h6 class="list-header">
                                    <a href="#">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> {{ $model->title }}
                                    </a>
                                </h6>
                            @endif
                            <ul class="nav">
                                @foreach($model->children as $child)
                                    @if($child->status)
                                        <li class="nav-item">
                                            <a href="/{{ $language }}/page/{{ $child->slug }}"
                                               class="nav-link {{ request()->getRequestUri() == '/'.$language.'/page/'.$child->slug ? 'active' : '' }}">{{ $child->title }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @elseif($model->parent)
                    <div class="col-md-3">
                        <div class="list-sidebar">
                            <h6 class="list-header">
                                <a href="/{{ $language }}/page/{{ $model->parent->slug }}">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i> {{ $model->parent->title }}
                                </a>
                            </h6>
                            <ul class="nav">
                                @foreach($model->parent->children as $child)
                                    @if($child->status)
                                        <li class="nav-item">
                                            <a href="/{{ $language }}/page/{{ $child->slug }}"
                                               class="nav-link {{ request()->getRequestUri() == '/'.$language.'/page/'.$child->slug ? 'active' : '' }}">{{ $child->title }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <div class="col-md">
                    @if(auth('web')->check() && auth('web')->user()->hasRole('Site Administrator'))
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <a href="/admin/resources/pages/{{ $model->id }}/edit"
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

                    @if($model->hasMedia('download_'.$language))
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    @foreach($model->getMedia('download_'.$language) as $document)
                                        <div class="col-md-6">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $document->name }}</h5>
                                                    <a href="{{ $document->getUrl() }}" target="_blank"
                                                       class="btn btn-light btn-sm mt-3">
                                                        @if($document->mime_type === 'text/rtf')
                                                            <i class="fa fa-file-word-o mr-2" aria-hidden="true"></i>
                                                        @elseif($document->mime_type === 'application/pdf')
                                                            <i class="fa fa-file-pdf-o mr-2" aria-hidden="true"></i>
                                                        @endif
                                                        {{ __('View / Download') }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif

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
                                    <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div id="carousel-photo-gallery" class="carousel slide"
                                                         data-ride="carousel">
                                                        <div class="carousel-inner">
                                                            @foreach($model->getMedia('gallery') as $item)
                                                                <div
                                                                    class="carousel-item photo-gallery-item {{ ($loop->first)? 'active': '' }}">
                                                                    <img class="d-block w-100"
                                                                         src="{{ $item->getUrl() }}">
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carousel-photo-gallery"
                                                           role="button"
                                                           data-slide="prev">
                                                            <span class="carousel-control-prev-icon"
                                                                  aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carousel-photo-gallery"
                                                           role="button"
                                                           data-slide="next">
                                                            <span class="carousel-control-next-icon"
                                                                  aria-hidden="true"></span>
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
