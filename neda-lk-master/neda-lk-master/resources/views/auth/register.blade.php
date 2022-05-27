@extends('layouts.app')

@section('title', __('Register'))

@section('content')
    <section class="inner-header" style="background-image: url('{{asset('images/online registration.jpg')}}')">
        <div class="container d-flex align-items-end h-100">
            <div class="header-text">
                <h1>{{ __('Register') }}</h1>
                <p>{{ __('Be a part of NEDA') }}</p>
            </div>
        </div>
    </section>
    <section class="inner-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <ul class="nav nav-tabs nav-tab-custom mb-4" role="tablist">
                            <li role="presentation" class="nav-item">
                                <a href="#entrepreneur" aria-controls="entrepreneur" class="nav-link active" role="tab"
                                   data-toggle="tab"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                                    Entrepreneur</a>
                            </li>
                            {{--                            <li role="presentation" class="nav-item">--}}
                            {{--                                <a href="#site-user"--}}
                            {{--                                   class="nav-link"--}}
                            {{--                                   aria-controls="site-user"--}}
                            {{--                                   role="tab" data-toggle="tab"><i class="fa fa-user-o" aria-hidden="true"></i> Visitor</a>--}}
                            {{--                            </li>--}}
                        </ul>
                        <div class="card-body">
                            <div class="tab-content">
                                {{--                                <div role="tabpanel" class="tab-pane" id="site-user">--}}
                                {{--                                    <form method="POST" action="{{ route('register') }}">--}}
                                {{--                                        @csrf--}}
                                {{--                                        <input type="hidden" name="role" value="5"/>--}}
                                {{--                                        <div class="form-group row">--}}
                                {{--                                            <label for="name"--}}
                                {{--                                                   class="col-md-4 col-form-label text-md-right">--}}
                                {{--                                                {{ __('Name') }}--}}
                                {{--                                                <span class="small d-block">නම</span>--}}
                                {{--                                                <span class="small d-block">பெயர்</span>--}}
                                {{--                                            </label>--}}

                                {{--                                            <div class="col-md-6">--}}
                                {{--                                                <input id="name" type="text"--}}
                                {{--                                                       class="form-control @error('name') is-invalid @enderror"--}}
                                {{--                                                       name="name"--}}
                                {{--                                                       value="{{ old('name') }}"  autocomplete="name">--}}

                                {{--                                                @error('name')--}}
                                {{--                                                <span class="invalid-feedback" role="alert">--}}
                                {{--                                                    <strong>{{ $message }}</strong>--}}
                                {{--                                                </span>--}}
                                {{--                                                @enderror--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="form-group row">--}}
                                {{--                                            <label for="email"--}}
                                {{--                                                   class="col-md-4 col-form-label text-md-right">--}}
                                {{--                                                {{ __('E-Mail Address') }}--}}
                                {{--                                                <span class="small d-block">විද්‍යුත් තැපැල් ලිපිනය</span>--}}
                                {{--                                                <span class="small d-block">மின்னஞ்சல்</span>--}}
                                {{--                                            </label>--}}

                                {{--                                            <div class="col-md-6">--}}
                                {{--                                                <input id="email" type="email"--}}
                                {{--                                                       class="form-control @error('email') is-invalid @enderror"--}}
                                {{--                                                       name="email" value="{{ old('email') }}" --}}
                                {{--                                                       autocomplete="email">--}}

                                {{--                                                @error('email')--}}
                                {{--                                                <span class="invalid-feedback" role="alert">--}}
                                {{--                                                    <strong>{{ $message }}</strong>--}}
                                {{--                                                </span>--}}
                                {{--                                                @enderror--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="form-group row">--}}
                                {{--                                            <label for="password"--}}
                                {{--                                                   class="col-md-4 col-form-label text-md-right">--}}
                                {{--                                                {{ __('Password') }}--}}
                                {{--                                                <span class="small d-block">මුරපදය</span>--}}
                                {{--                                                <span class="small d-block">கடவுச்சொல்</span>--}}
                                {{--                                            </label>--}}

                                {{--                                            <div class="col-md-6">--}}
                                {{--                                                <input id="password" type="password"--}}
                                {{--                                                       class="form-control @error('password') is-invalid @enderror"--}}
                                {{--                                                       name="password"  autocomplete="new-password">--}}

                                {{--                                                @error('password')--}}
                                {{--                                                <span class="invalid-feedback" role="alert">--}}
                                {{--                                                    <strong>{{ $message }}</strong>--}}
                                {{--                                                </span>--}}
                                {{--                                                @enderror--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="form-group row">--}}
                                {{--                                            <label for="password-confirm"--}}
                                {{--                                                   class="col-md-4 col-form-label text-md-right">--}}
                                {{--                                                {{ __('Confirm Password') }}--}}
                                {{--                                                <span class="small d-block">තහවුරු කරන්න</span>--}}
                                {{--                                                <span class="small d-block">கடவுச்சொல்லை உறுதிப்படுத்தவும்</span>--}}
                                {{--                                            </label>--}}

                                {{--                                            <div class="col-md-6">--}}
                                {{--                                                <input id="password-confirm" type="password" class="form-control"--}}
                                {{--                                                       name="password_confirmation" --}}
                                {{--                                                       autocomplete="new-password">--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="form-group row">--}}
                                {{--                                            <label for="district"--}}
                                {{--                                                   class="col-md-4 col-form-label text-md-right">--}}
                                {{--                                                {{ __('District') }}--}}
                                {{--                                                <span class="small d-block">දිස්ත්‍රික්කය</span>--}}
                                {{--                                                <span class="small d-block">மாவட்டம்</span>--}}
                                {{--                                            </label>--}}
                                {{--                                            <div class="col-md-6">--}}
                                {{--                                                <select name="district" id="district" autocomplete="province"--}}
                                {{--                                                        class="form-control @error('district') is-invalid @enderror" >--}}
                                {{--                                                    <option value="" selected disabled>District</option>--}}
                                {{--                                                    @if($district && $district->count())--}}
                                {{--                                                        @foreach($district as $district_item)--}}
                                {{--                                                            <option value="{{ $district_item->id }}">--}}
                                {{--                                                                {{ $district_item->title_en }}--}}
                                {{--                                                            </option>--}}
                                {{--                                                        @endforeach--}}
                                {{--                                                    @endif--}}
                                {{--                                                </select>--}}
                                {{--                                                @error('district')--}}
                                {{--                                                <span class="invalid-feedback" role="alert">--}}
                                {{--                                                    <strong>{{ $message }}</strong>--}}
                                {{--                                                </span>--}}
                                {{--                                                @enderror--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="form-group row">--}}
                                {{--                                            <label for="divisional_secretariat"--}}
                                {{--                                                   class="col-md-4 col-form-label text-md-right">--}}
                                {{--                                                {{ __('Divisional Secretariat') }}--}}
                                {{--                                                <span class="small d-block">ප්‍රාදේශීය ලේකම් කාර්යාලය</span>--}}
                                {{--                                                <span class="small d-block">பிரதேச செயலகம்</span>--}}
                                {{--                                            </label>--}}
                                {{--                                            <div class="col-md-6">--}}
                                {{--                                                <select name="divisional_secretariat" id="divisional_secretariat" autocomplete="province"--}}
                                {{--                                                        class="form-control @error('divisional_secretariat') is-invalid @enderror" >--}}
                                {{--                                                    <option value="" selected disabled>Divisional Secretariat</option>--}}
                                {{--                                                    @if($divisional_secretariat && $divisional_secretariat->count())--}}
                                {{--                                                        @foreach($divisional_secretariat as $divisional_secretariat_item)--}}
                                {{--                                                            <option value="{{ $divisional_secretariat_item->id }}">--}}
                                {{--                                                                {{ $divisional_secretariat_item->title_en }}--}}
                                {{--                                                            </option>--}}
                                {{--                                                        @endforeach--}}
                                {{--                                                    @endif--}}
                                {{--                                                </select>--}}
                                {{--                                                @error('divisional_secretariat')--}}
                                {{--                                                <span class="invalid-feedback" role="alert">--}}
                                {{--                                                    <strong>{{ $message }}</strong>--}}
                                {{--                                                </span>--}}
                                {{--                                                @enderror--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="form-group row mb-0">--}}
                                {{--                                            <div class="col-md-6 offset-md-4">--}}
                                {{--                                                <button type="submit" class="btn btn-primary">--}}
                                {{--                                                    {{ __('Register') }}--}}
                                {{--                                                </button>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </form>--}}
                                {{--                                </div>--}}
                                <div role="tabpanel" class="tab-pane active" id="entrepreneur">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <input type="hidden" name="role" value="4"/>

                                        <div class="form-group row">
                                            <label for="email"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('E-Mail Address') }}
                                                <span class="small d-block">විද්‍යුත් තැපැල් ලිපිනය</span>
                                                <span class="small d-block">மின்னஞ்சல்</span>
                                            </label>
                                            <div class="col-md-6">
                                                <input id="email" type="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       name="email" value="{{ old('email') }}"
                                                       autocomplete="email" autofocus/>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        @guest
                                            <div class="form-group row">
                                                <label for="password"
                                                       class="col-md-4 col-form-label text-md-right">
                                                    {{ __('Password') }}
                                                    <span class="small d-block">මුරපදය</span>
                                                    <span class="small d-block">கடவுச்சொல்</span>
                                                </label>
                                                <div class="col-md-6">
                                                    <input id="password" type="password"
                                                           class="form-control @error('password') is-invalid @enderror"
                                                           name="password" autocomplete="new-password"/>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="password-confirm"
                                                       class="col-md-4 col-form-label text-md-right">
                                                    {{ __('Confirm Password') }}
                                                    <span class="small d-block">තහවුරු කරන්න</span>
                                                    <span class="small d-block">கடவுச்சொல்லை உறுதிப்படுத்தவும்</span>
                                                </label>
                                                <div class="col-md-6">
                                                    <input id="password-confirm" type="password" class="form-control"
                                                           name="password_confirmation"
                                                           autocomplete="new-password"/>
                                                </div>
                                            </div>
                                        @endguest

                                        <div class="form-group row">
                                            <label for="name"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Full Name') }}
                                                <span class="small d-block">සම්පූර්ණ නම</span>
                                                <span class="small d-block">முழு பெயர்</span>
                                            </label>
                                            <div class="col-md-6">
                                                <input id="name" type="text"
                                                       class="form-control @error('name') is-invalid @enderror"
                                                       name="name"
                                                       value="{{ old('name') }}" autocomplete="name" required>
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="last_name"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Surname Name') }}
                                                <span class="small d-block">වාසගම නම</span>
                                                <span class="small d-block">கடைசி பெயர்</span>
                                            </label>
                                            <div class="col-md-6">
                                                <input id="last_name" type="text"
                                                       class="form-control @error('last_name') is-invalid @enderror"
                                                       name="last_name"
                                                       value="{{ old('last_name') }}"
                                                       autocomplete="last_name">
                                                @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="gender"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Gender') }}
                                                <span class="small d-block">ස්ත්‍රි / පුරුෂ</span>
                                                <span class="small d-block">பாலினம்</span>
                                            </label>
                                            <div class="col-md-6">
                                                <select id="gender" type="text"
                                                        class="form-control @error('gender') is-invalid @enderror"
                                                        name="gender"
                                                >
                                                    <option
                                                        value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>
                                                        Male
                                                    </option>
                                                    <option
                                                        value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>
                                                        Female
                                                    </option>
                                                </select>
                                                @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="birthday"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Birthday') }}
                                                <span class="small d-block">උපන් දිනය</span>
                                                <span class="small d-block">பிறந்த நாள்</span>
                                            </label>
                                            <div class="col-md-6">
                                                <input id="birthday" type="text"
                                                       class="form-control date-picker @error('birthday') is-invalid @enderror"
                                                       name="birthday"
                                                       value="{{ old('birthday') }}"
                                                       autocomplete="birthday">
                                                @error('birthday')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="national_identification_card_no"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('NIC') }}
                                                <span class="small d-block">හැඳුනුම්පත් අංකය</span>
                                                <span class="small d-block">அடையாள அட்டை எண்</span>
                                            </label>
                                            <div class="col-md-6">
                                                <input id="nic" type="text"
                                                       class="form-control @error('nic') is-invalid @enderror"
                                                       name="nic"
                                                       value="{{ old('nic') }}"
                                                       autocomplete="nic">
                                                @error('nic')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="address"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Address') }}
                                                <span class="small d-block">ලිපිනය</span>
                                                <span class="small d-block">முகவரி</span>
                                            </label>
                                            <div class="col-md-6">
                                            <textarea id="address" type="text"
                                                      class="form-control @error('address') is-invalid @enderror"
                                                      name="address"
                                                      value="{{ old('address') }}"
                                                      autocomplete="address"></textarea>
                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="mobile"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Mobile') }}
                                                <span class="small d-block">ජංගම දුරකථන</span>
                                                <span class="small d-block">கைபேசி</span>
                                            </label>
                                            <div class="col-md-6">
                                                <input id="mobile" type="text"
                                                       class="form-control @error('mobile') is-invalid @enderror"
                                                       name="mobile"
                                                       value="{{ old('mobile') }}"
                                                       autocomplete="mobile">
                                                @error('mobile')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="phone"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Phone (Fixed Line)') }}
                                                <span class="small d-block">දුරකථනය (ස්ථාවර සම්බන්ධතාවය)</span>
                                                <span class="small d-block">கைபேசி</span>
                                            </label>
                                            <div class="col-md-6">
                                                <input id="phone" type="text"
                                                       class="form-control @error('phone') is-invalid @enderror"
                                                       name="phone"
                                                       value="{{ old('phone') }}"
                                                       autocomplete="phone">
                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group row">
                                            <label for="business_name"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Business Name') }}
                                                <span class="small d-block">ව්යාපාරික නාමය</span>
                                                <span class="small d-block">வணிகத்தின் பெயர்</span>
                                            </label>
                                            <div class="col-md-6">
                                                <input id="business_name" type="text"
                                                       class="form-control @error('business_name') is-invalid @enderror"
                                                       name="business_name"
                                                       value="{{ old('business_name') }}"
                                                       autocomplete="business_name">
                                                @error('business_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="business_phone"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Business Phone') }}
                                                <span class="small d-block">ව්යාපාරික දුරකථන</span>
                                                <span class="small d-block">வணிக தொலைபேசி</span>
                                            </label>
                                            <div class="col-md-6">
                                                <input id="business_phone" type="text"
                                                       class="form-control @error('business_phone') is-invalid @enderror"
                                                       name="business_phone"
                                                       value="{{ old('business_phone') }}"
                                                       autocomplete="business_phone">
                                                @error('business_phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="business_address"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Business Address') }}
                                                <span class="small d-block">ව්යාපාරික ලිපිනය</span>
                                                <span class="small d-block">வணிக முகவரி</span>
                                            </label>
                                            <div class="col-md-6">
                                            <textarea id="business_address" type="text"
                                                      class="form-control @error('business_address') is-invalid @enderror"
                                                      name="business_address"
                                                      value="{{ old('business_address') }}"
                                                      autocomplete="business_address"></textarea>
                                                @error('business_address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="business_start_date"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Business Start Date') }}
                                                <span class="small d-block">ව්‍යාපාර ආරම්භක දිනය</span>
                                                <span class="small d-block">வணிக தொடக்க தேதி</span>
                                            </label>
                                            <div class="col-md-6">
                                                <input id="business_start_date" type="text"
                                                       class="form-control date-picker @error('business_start_date') is-invalid @enderror"
                                                       name="business_start_date"
                                                       value="{{ old('business_start_date') }}"
                                                       autocomplete="business_start_date">
                                                @error('business_start_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="business_legal_nature"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Legal Nature Of Business') }}
                                                <span class="small d-block">ව්‍යාපාරයේ නෛතික ස්වභාවය</span>
                                                <span class="small d-block">வணிகத்தின் சட்ட இயல்பு</span>
                                            </label>
                                            <div class="col-md-6">
                                                <select id="business_legal_nature"
                                                        class="form-control @error('business_legal_nature') is-invalid @enderror"
                                                        name="business_legal_nature"
                                                        autocomplete="business_legal_nature">
                                                    <option
                                                        value="sole_proprietorship" {{ old('business_legal_nature') == 'sole_proprietorship' ? 'selected' : '' }}>
                                                        Sole Proprietorship
                                                    </option>
                                                    <option
                                                        value="public_limited_company" {{ old('business_legal_nature') == 'public_limited_company' ? 'selected' : '' }}>
                                                        Public Limited Company
                                                    </option>
                                                    <option
                                                        value="limited_liability_company" {{ old('business_legal_nature') == 'limited_liability_company' ? 'selected' : '' }}>
                                                        Limited Liability Company
                                                    </option>
                                                    <option
                                                        value="partnership" {{ old('business_legal_nature') == 'partnership' ? 'selected' : '' }}>
                                                        Partnership
                                                    </option>
                                                    <option
                                                        value="others" {{ old('business_legal_nature') == 'others' ? 'selected' : '' }}>
                                                        Others
                                                    </option>
                                                </select>
                                                @error('business_legal_nature')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="business_registration_status"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Business Registration Status') }}
                                                <span class="small d-block">ව්‍යාපාර ලියාපදිංචි කිරීමේ වර්ගය</span>
                                                <span class="small d-block">வணிக பதிவு நிலை</span>
                                            </label>
                                            <div class="col-md-6">
                                                <select id="business_registration_status"
                                                        class="form-control @error('business_registration_status') is-invalid @enderror"
                                                        name="business_registration_status"
                                                        autocomplete="business_registration_status">
                                                    <option
                                                        value="registered" {{ old('business_registration_status') == 'registered' ? 'selected' : '' }}>
                                                        Registered
                                                    </option>
                                                    <option
                                                        value="not_registered" {{ old('business_registration_status') == 'not_registered' ? 'selected' : '' }}>
                                                        Not Registered
                                                    </option>
                                                </select>
                                                @error('business_registration_status')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="business_registration_number"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Business Registration Number') }}
                                                <span class="small d-block">ව්‍යාපාර ලියාපදිංචි අංකය</span>
                                                <span class="small d-block">வணிக பதிவு எண்</span>
                                            </label>
                                            <div class="col-md-6">
                                                <input id="business_registration_number" type="text"
                                                       class="form-control @error('business_registration_number') is-invalid @enderror"
                                                       name="business_registration_number"
                                                       value="{{ old('business_registration_number') }}"
                                                       autocomplete="business_registration_number">
                                                @error('business_registration_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="business_type"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Economic Sector') }}
                                                <span class="small d-block">ආර්ථික අංශ</span>
                                                <span class="small d-block">பொருளாதார துறைகள்</span>
                                            </label>
                                            <div class="col-md-6">
                                                <select id="business_type"
                                                        class="form-control @error('business_type') is-invalid @enderror"
                                                        name="business_type"
                                                        autocomplete="business_type">
                                                    <option
                                                        value="manufacturing" {{ old('business_type') == 'manufacturing' ? 'selected' : '' }}>
                                                        Manufacturing
                                                    </option>
                                                    <option
                                                        value="service" {{ old('business_type') == 'service' ? 'selected' : '' }}>
                                                        Service
                                                    </option>
                                                    <option
                                                        value="trading" {{ old('business_type') == 'trading' ? 'selected' : '' }}>
                                                        Trading
                                                    </option>
                                                </select>
                                                @error('business_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="business_annual_turnover"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Annual Turnover') }}
                                                <span class="small d-block">වාර්ෂික පිරිවැටුම</span>
                                                <span class="small d-block">ஆண்டு வருமானம்</span>
                                            </label>
                                            <div class="col-md-6">
                                                <select id="business_annual_turnover"
                                                        class="form-control @error('business_annual_turnover') is-invalid @enderror"
                                                        name="business_annual_turnover">
                                                    <option value="" selected disabled>Select</option>
                                                    <option
                                                        value="15mil_or_less" {{ old('business_legal_nature') == '15mil_or_less' ? 'selected' : '' }}>
                                                        15Mn or less
                                                    </option>
                                                    <option
                                                        value="16mil_250mil" {{ old('business_legal_nature') == '16mil_250mil' ? 'selected' : '' }}>
                                                        16Mn to 250Mn
                                                    </option>
                                                    <option
                                                        value="251mil_750mil" {{ old('business_legal_nature') == '251mil_750mil' ? 'selected' : '' }}>
                                                        251Mn to 750Mn
                                                    </option>
                                                    <option
                                                        value="more_than_751mil" {{ old('business_legal_nature') == 'more_than_751mil' ? 'selected' : '' }}>
                                                        More than 751Mn
                                                    </option>
                                                </select>
                                                @error('business_annual_turnover')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="business_number_of_employees"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Number Of Employees') }}
                                                <span class="small d-block">මුළු සේවක සංඛ්‍යාව</span>
                                                <span class="small d-block">மொத்த ஊழியர்களின் எண்ணிக்கை</span>
                                            </label>
                                            <div class="col-md-6">
                                                <select id="business_number_of_employees"
                                                        class="form-control @error('business_number_of_employees') is-invalid @enderror"
                                                        name="business_number_of_employees">
                                                    <option value="" selected disabled>Select</option>
                                                    <option
                                                        value="10_or_less" {{ old('business_number_of_employees') == '10_or_less' ? 'selected' : '' }}>
                                                        10 or less
                                                    </option>
                                                    <option
                                                        value="11_50" {{ old('business_number_of_employees') == '11_50' ? 'selected' : '' }}>
                                                        11 to 50
                                                    </option>
                                                    <option
                                                        value="51_200" {{ old('business_number_of_employees') == '51_200' ? 'selected' : '' }}>
                                                        51 to 200
                                                    </option>
                                                    <option
                                                        value="more_than_201" {{ old('business_number_of_employees') == 'more_than_201' ? 'selected' : '' }}>
                                                        more than 201
                                                    </option>
                                                </select>
                                                @error('business_number_of_employees')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="business_service_id"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Primary Business Sector') }}
                                                <span class="small d-block">ප්‍රාථමික ව්‍යාපාර අංශය</span>
                                                <span class="small d-block">முதன்மை வணிகத் துறை</span>
                                            </label>
                                            <div class="col-md-6">
                                                <select id="business_service_id"
                                                        class="form-control @error('business_service_id') is-invalid @enderror"
                                                        name="business_service_id"
                                                        value="{{ old('business_service_id') }}"
                                                        autocomplete="business_service_id">
                                                    <option value="" selected disabled>{{ __('Primary Business Sector') }}</option>
                                                    @foreach((new \App\Models\Content\BusinessServiceType())->whereNull('parent_id')->orderBy('sort_order', 'ASC')->get() as $service_category)
                                                        <option value="{{ $service_category->id }}">
                                                            {{ $service_category->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('business_service_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="business_service_id"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Secondary Business Sector') }}
                                                <span class="small d-block">ද්විතීයික ව්‍යාපාර අංශය</span>
                                                <span class="small d-block">இரண்டாம் நிலை வணிகத் துறை</span>
                                            </label>
                                            <div class="col-md-6">
                                                <select id="secondary_business_service_id"
                                                        class="form-control @error('secondary_business_service_id') is-invalid @enderror"
                                                        name="secondary_business_service_id"
                                                        value="{{ old('secondary_business_service_id') }}"
                                                        autocomplete="secondary_business_service_id">
                                                    <option value="" selected disabled>{{ __('Secondary Business Sector') }}</option>
                                                    @foreach((new \App\Models\Content\BusinessServiceType())->whereNotNull('parent_id')->orderBy('sort_order', 'ASC')->get() as $service_category)
                                                        <option value="{{ $service_category->id }}" data-parent="{{ $service_category->parent_id }}">
                                                            {{ $service_category->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('secondary_business_service_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="business_description"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Business Description') }}
                                                <span class="small d-block">ව්යාපාරයේ ස්වභාවය</span>
                                                <span class="small d-block">வணிகத்தன்மை</span>
                                            </label>
                                            <div class="col-md-6">
                                            <textarea id="business_description" type="text"
                                                      class="form-control @error('business_description') is-invalid @enderror"
                                                      name="business_description"
                                                      value="{{ old('business_description') }}"
                                                      autocomplete="business_description"></textarea>
                                                <small class="text-warning">Please provide a small description about
                                                    your business. Maximum 200 words.</small>
                                                @error('business_description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="province_id"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Province') }}
                                                <span class="small d-block">පළාත</span>
                                                <span class="small d-block">மாகாணம்</span>
                                            </label>
                                            <div class="col-md-6">
                                                <select name="province_id" id="province_id" autocomplete="province"
                                                        class="form-control @error('province_id') is-invalid @enderror">
                                                    <option value="" selected disabled>Province</option>
                                                    @if($provinces && $provinces->count())
                                                        @foreach($provinces as $province)
                                                            <option value="{{ $province->id }}">
                                                                {{ $province->title_en }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>

                                                @error('province_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="district_id"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('District') }}
                                                <span class="small d-block">දිස්ත්‍රික්කය</span>
                                                <span class="small d-block">மாவட்டம்</span>
                                            </label>
                                            <div class="col-md-6">
                                                <select name="district_id" id="district_id" autocomplete="district"
                                                        class="form-control @error('district_id') is-invalid @enderror">
                                                    <option value="" selected disabled>District</option>
                                                    @if($districts && $districts->count())
                                                        @foreach($districts as $district_item)
                                                            <option value="{{ $district_item->id }}"
                                                                    data-province="{{ $district_item->province_id }}">
                                                                {{ $district_item->title_en }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                @error('district_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="divisional_secretariat_id"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Divisional Secretariat') }}
                                                <span class="small d-block">ප්‍රාදේශීය ලේකම් කාර්යාලය</span>
                                                <span class="small d-block">பிரதேச செயலகம்</span>
                                            </label>
                                            <div class="col-md-6">
                                                <select name="divisional_secretariat_id" id="divisional_secretariat_id"
                                                        autocomplete="province"
                                                        class="form-control @error('divisional_secretariat_id') is-invalid @enderror">
                                                    <option value="" selected disabled>Divisional Secretariat</option>
                                                    @if($ds_division && $ds_division->count())
                                                        @foreach($ds_division as $ds_division_item)
                                                            <option value="{{ $ds_division_item->id }}"
                                                                    data-district="{{ $ds_division_item->district_id }}">
                                                                {{ $ds_division_item->title_en }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                @error('divisional_secretariat_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="grama_niladhari_division_id"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Grama Niladhari Division') }}
                                                <span class="small d-block">ග්‍රාම නිලධාරි වසම</span>
                                                <span class="small d-block">கிராம நிலாதாரி பிரிவு</span>
                                            </label>
                                            <div class="col-md-6">
                                                <select name="grama_niladhari_division_id"
                                                        id="grama_niladhari_division_id" autocomplete="district"
                                                        class="form-control @error('grama_niladhari_division_id') is-invalid @enderror">
                                                    <option value="" selected disabled>Grama Niladhari Division</option>
                                                    @if($gn_division && $gn_division->count())
                                                        @foreach($gn_division as $gn_division_item)
                                                            <option value="{{ $gn_division_item->id }}"
                                                                    data-dsecretariat="{{ $gn_division_item->divisional_secretariat_id }}">
                                                                {{ $gn_division_item->title_en }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                @error('grama_niladhari_division_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group row">
                                            <label for="business_located_in_industrial_zone"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Is your business located in a Industrial Zone?') }}
                                                <span
                                                    class="small d-block">ඔබේ ව්‍යාපාරය කාර්මික කලාපයක පිහිටා තිබේද?</span>
                                                <span class="small d-block">உங்கள் வணிகம் ஒரு தொழில்துறை மண்டலத்தில் அமைந்திருக்கிறதா?</span>
                                            </label>
                                            <div class="col-md-6">
                                                <input id="business_located_in_industrial_zone" type="checkbox"
                                                       class="form-control @error('business_located_in_industrial_zone') is-invalid @enderror"
                                                       name="business_located_in_industrial_zone"
                                                       value="{{ old('business_located_in_industrial_zone') }}"
                                                       autocomplete="business_located_in_industrial_zone">
                                                @error('business_located_in_industrial_zone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="business_zone_type"
                                                   class="col-md-4 col-form-label text-md-right">
                                                {{ __('Industrial zone') }}
                                                <span class="small d-block">කාර්මික කලාපය</span>
                                                <span class="small d-block">தொழில்துறை மண்டலம்</span>
                                            </label>
                                            <div class="col-md-6">
                                                <select id="business_zone_type" type="text"
                                                        class="form-control @error('business_zone_type') is-invalid @enderror"
                                                        name="business_zone_type">
                                                    <option value="" selected disabled>Select</option>
                                                    <option
                                                        value="idb" {{ old('business_zone_type') == 'idb' ? 'selected' : '' }}>
                                                        IDB
                                                    </option>
                                                    <option
                                                        value="boi" {{ old('business_zone_type') == 'boi' ? 'selected' : '' }}>
                                                        BOI
                                                    </option>
                                                    <option
                                                        value="boi" {{ old('business_zone_type') == 'moi' ? 'selected' : '' }}>
                                                        Ministry of Industries
                                                    </option>
                                                    <option
                                                        value="boi" {{ old('business_zone_type') == 'pc' ? 'selected' : '' }}>
                                                        Provincial council
                                                    </option>
                                                </select>
                                                @error('business_zone_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
          integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
          integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
          crossorigin="anonymous"/>
    <style>
        .select2-container--default .select2-results__option[aria-disabled=true] {
            display: none;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
            integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
            crossorigin="anonymous"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"
        integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg=="
        crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(function () {
            $('#birthday').datetimepicker({
                format: 'DD-MM-YYYY'
            });

            $('#business_start_date').datetimepicker({
                format: 'DD-MM-YYYY'
            });

            $('#province_id').select2().on('change', function (e) {
                let province_id = $(this).val();
                $('#district_id option').each(function () {
                    if ($(this).data('province') == province_id) {
                        $(this).attr('disabled', false);
                    }else{
                        $(this).attr('disabled', true);
                    }
                });
            });

            $('#district_id').select2().on('change', function (e) {
                let district_id = $(this).val();
                $('#divisional_secretariat_id option').each(function () {
                    if ($(this).data('district') == district_id) {
                        $(this).attr('disabled', false);
                    }else{
                        $(this).attr('disabled', true);
                    }
                });
            });

            $('#divisional_secretariat_id').select2().on('change', function (e) {
                let divisional_secretariat_id = $(this).val();
                $('#grama_niladhari_division_id option').each(function () {
                    if ($(this).data('dsecretariat') == divisional_secretariat_id) {
                        $(this).attr('disabled', false);
                    }else{
                        $(this).attr('disabled', true);
                    }
                });
            });

            $('#grama_niladhari_division_id').select2();

            $('#business_service_id').select2().on('change', function (e) {
                let business_service_id = $(this).val();
                $('#secondary_business_service_id option').each(function () {
                    if ($(this).data('parent') == business_service_id) {
                        $(this).attr('disabled', false);
                    }else{
                        $(this).attr('disabled', true);
                    }
                });
            });

            $('#secondary_business_service_id').select2();
        });
    </script>
@endpush
