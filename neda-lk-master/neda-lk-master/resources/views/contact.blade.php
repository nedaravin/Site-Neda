@extends('layouts.app')

@section('title', __('Contact'))

@section('content')
    <section class="inner-header" style="background-image: url('{{asset('images/inner-header.jpg')}}')">
        <div class="container d-flex align-items-end h-100">
            <div class="header-text">
                <h1>{{ __('Contact') }}</h1>
                <p>{{ __('Contact Details') }}</p>
            </div>
        </div>
    </section>
    <section class="inner-content">
        <div class="container">

            <h4 class="mb-5">{{ __('District Coordinators and Development Officers') }}</h4>
            <div class="row my-4">
                <div class="col-md">
                    <form action="{{ route('contact', $language) }}" method="get">
                        <div class="form-row">
                            {{--                            <div class="form-group col-md-3">--}}
                            {{--                                <label for="">Province</label>--}}
                            {{--                                <select name="province" id="province" autocomplete="province"--}}
                            {{--                                        class="form-control @error('province') is-invalid @enderror" required>--}}
                            {{--                                    <option value="" selected disabled>Province</option>--}}
                            {{--                                    @if($province && $province->count())--}}
                            {{--                                        @foreach($province as $province_item)--}}
                            {{--                                            <option--}}
                            {{--                                                value="{{ $province_item->id }}" {{ request()->get('province') == $province_item->id ? 'selected' : '' }}>--}}
                            {{--                                                {{ $province_item->title_en }}--}}
                            {{--                                            </option>--}}
                            {{--                                        @endforeach--}}
                            {{--                                    @endif--}}
                            {{--                                </select>--}}
                            {{--                            </div>--}}
                            <div class="form-group col-md-3">
                                <label for="">District</label>
                                <select name="district" id="district" autocomplete="district"
                                        class="form-control @error('district') is-invalid @enderror" required>
                                    <option value="" selected disabled>District</option>
                                    @if($district && $district->count())
                                        @foreach($district as $district_item)
                                            <option
                                                value="{{ $district_item->id }}" {{ request()->get('district') == $district_item->id ? 'selected' : '' }}>
                                                {{ $district_item->title_en }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">DS Division</label>
                                <select name="divisional_secretariat" id="divisional_secretariat"
                                        autocomplete="province"
                                        class="form-control @error('divisional_secretariat') is-invalid @enderror">
                                    <option value="" selected disabled>Divisional Secretariat</option>
                                    @if($divisional_secretariat && $divisional_secretariat->count())
                                        @foreach($divisional_secretariat as $divisional_secretariat_item)
                                            <option
                                                value="{{ $divisional_secretariat_item->id }}" {{ request()->get('divisional_secretariat') == $divisional_secretariat_item->id ? 'selected' : '' }}>
                                                {{ $divisional_secretariat_item->title_en }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">&nbsp;</label>
                                <div class="row ml-4">
                                    <button class="btn btn-primary d-block btn-sm mr-2" type="submit">
                                        {{ __('Find') }}
                                    </button>
                                    @if(request()->has('province') || request()->has('district') || request()->has('divisional_secretariat'))
                                        <a class="btn btn-primary d-block btn-sm"
                                           href="{{ route('contact', $language) }}">
                                            {{ __('Reset') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <table class="table table-striped">
                        <tr>
                            <th>District</th>
                            <th>DS Division</th>
                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Contact No</th>
                        </tr>
                        @if($do_list && $do_list->count())
                            @foreach($do_list as $do_user)
                                <tr>
                                    <td>{{ $do_user->district_model ? $do_user->district_model->title_en : '-' }}</td>
                                    <td>{{ $do_user->divisional_secretariat_model ? $do_user->divisional_secretariat_model->title_en : '-' }}</td>
                                    <td>{{ $do_user->name }}</td>
                                    <td>{{ $do_user->email }}</td>
                                    <td>{{ $do_user->phone }}</td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                    <div class="row">
                        <div class="col-md-12">
                            {{ $do_list->links('vendor.pagination.bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="mb-5 mt-5">{{ __('Office Contacts')}}</h4>
            <div class="row">
                @if($block = content_block(14))
                    <div class="col-md-12 mb-4">
                        {!! $block['content'] !!}
                    </div>
                @endif
            </div>
            <h4 class="mb-5">{{ __('Send us a message') }}</h4>
            <div class="row mb-5">
                <div class="col-md-8">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <form method="post" id="contact-request" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="contactName">{{ __('Full Name') }}</label>
                                    <input type="text" class="form-control" id="contactName"
                                           @if(app()->getLocale() === 'fr')
                                           placeholder="Nom complet"
                                           @endif
                                           @if(app()->getLocale() === 'en')
                                           placeholder="Full Name"
                                           @endif
                                           name="name" required
                                           autocomplete="off">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <!-- Label -->
                                    <label for="contactEmail">{{ __('Email') }}</label>
                                    <!-- Input -->
                                    <input type="email" class="form-control" id="contactEmail"
                                           placeholder="hello@domain.com" name="email" required
                                           autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-7 mb-md-9">
                                    <label for="contactMessage">{{ __('Subject') }}</label>
                                    <input class="form-control" name="subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-7 mb-md-9">
                                    <label for="contactMessage">{{ __('How can we help you?') }}</label>
                                    <textarea class="form-control" id="contactMessage" rows="5"
                                              @if(app()->getLocale() === 'fr')
                                              placeholder="Dites-nous en quoi nous pouvons vous aider!"
                                              @elseif(app()->getLocale() === 'en')
                                              placeholder="Tell us how we can help you!"
                                              @else
                                              @endif

                                              autocomplete="off" name="message"
                                              spellcheck="false"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-3">
                            <div class="col-auto d-flex">
                                @captcha
                                <input type="text" class="form-control"
                                       id="captcha" name="captcha" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary lift">{{ __('Send the message') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="map mb-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15844.024111743754!2d79.8779629!3d6.8898803!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd57af0f93d27a8c3!2sNational%20Enterprise%20Development%20Authority(NEDA)%2CSri%20Lanka!5e0!3m2!1sen!2slk!4v1607330734994!5m2!1sen!2slk"
                            height="300" frameborder="0" style="width: 100%; border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="contact-info">
                        <ul class="list-unstyled mb-5">
                            <li class="d-flex mb-3">
                                <i aria-hidden="true" class="fa fa-map-marker mr-3"></i>
                                <span>561, Elvitigala Mawatha, <br>Colombo 05, Sri Lanka.</span>
                            </li>
                            <li class="d-flex mb-3">
                                <i aria-hidden="true" class="fa fa-link mr-3"></i>
                                <a href="http://www.neda.gov.lk" target="_blank">http://www.neda.gov.lk</a>
                            </li>
                            <li class="d-flex mb-3">
                                <i aria-hidden="true" class="fa fa-envelope-o mr-3"></i>
                                <a href="mailto:info@neda.lk" target="_blank">info@neda.lk</a>
                            </li>
                        </ul>
                        <h6>{{ __('General Numbers') }}</h6>
                        <ul class="list-unstyled mb-5">
                            <li class="d-flex mb-3">
                                <i aria-hidden="true" class="fa fa-map-marker mr-3"></i>
                                <span>561, Elvitigala Mawatha, <br>Colombo 05,Sri Lanka.</span>
                            </li>
                            <li class="d-flex mb-3">
                                <i aria-hidden="true" class="fa fa-fax mr-3"></i>
                                <span>112 368 393 </span>
                            </li>
                        </ul>
                        <h6>{{ __('Divisional Numbers') }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
