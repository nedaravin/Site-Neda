@extends('layouts.app')

@section('title', __('Thank you'))

@section('content')
    <section class="inner-header" style="background-image: url('{{asset('images/online registration.jpg')}}')">
        <div class="container d-flex align-items-end h-100">
            <div class="header-text">
                <h1>{{ __('Thank You') }}</h1>
                <p>{{ __('Thank you for being part of NEDA') }}</p>
            </div>
        </div>
    </section>
    <section class="inner-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2>Thank you</h2>
                </div>
            </div>
        </div>
    </section>
@endsection
