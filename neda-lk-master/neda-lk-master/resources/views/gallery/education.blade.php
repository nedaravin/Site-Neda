@extends('layouts.app')

@section('title', __('Education Gallery'))

@section('content')
    <section class="inner-header" style="background-image: url('{{asset('images/inner-header.jpg')}}')">
        <div class="container d-flex align-items-end h-100">
            <div class="header-text">
                <h1>{{ __('Education Gallery') }}</h1>
                <p></p>
            </div>
        </div>
    </section>
    <section class="inner-content">
        <div class="container">
            @include('gallery.common')
            <div class="row">
                <div class="col-md">
                    @include('gallery.gallery_loop')
                </div>
            </div>
        </div>
    </section>
@endsection
