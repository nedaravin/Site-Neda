@extends('admin.layout')
@section('content')
    <main class="container">

        @if(\Session::has('success'))
            <div class="row g-3">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        {!! \Session::get('success') !!}
                    </div>
                </div>
            </div>
        @endif

        <div class="row g-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.do-admin.entrepreneur.save') }}">
                            @csrf
                            <input type="hidden" name="role" value="4"/>

                            @if($model)
                                <input type="hidden" name="model_id" value="{{ $model->id }}">
                            @endif

                            <h4 class="mb-3 mt-4">Personal Details</h4>

                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ $old('email')  }}"
                                           autocomplete="email" autofocus/>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="mobile" class="form-label">
                                        {{ __('Mobile') }}
                                    </label>
                                    <input id="mobile" type="text"
                                           class="form-control @error('mobile') is-invalid @enderror"
                                           name="mobile"
                                           value="{{ $old('mobile') }}"
                                           autocomplete="mobile">
                                    @error('mobile')
                                    <div class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="name" class="form-label">
                                        {{ __('Full Name') }}
                                    </label>
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror"
                                           name="name"
                                           value="{{ $old('name') }}" autocomplete="name" required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="last_name" class="form-label">
                                        {{ __('Surname Name') }}
                                    </label>
                                    <input id="last_name" type="text"
                                           class="form-control @error('last_name') is-invalid @enderror"
                                           name="last_name"
                                           value="{{ $old('last_name') }}"
                                           autocomplete="last_name">
                                    @error('last_name')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="gender" class="form-label">{{ __('Gender') }}</label>
                                    <select id="gender" type="text"
                                            class="form-control @error('gender') is-invalid @enderror"
                                            name="gender"
                                    >
                                        <option
                                            value="male" {{ $old('gender') == 'male' ? 'selected' : '' }}>
                                            Male
                                        </option>
                                        <option
                                            value="female" {{ $old('gender') == 'female' ? 'selected' : '' }}>
                                            Female
                                        </option>
                                    </select>
                                    @error('gender')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="birthday" class="form-label">
                                        {{ __('Birthday') }}
                                    </label>
                                    <div class="d-block position-relative">
                                        <input id="birthday" type="text"
                                               class="form-control date-picker @error('birthday') is-invalid @enderror"
                                               name="birthday"
                                               value="{{ $old('birthday') ? $old('birthday')->format('m/d/Y') : '' }}"
                                               autocomplete="birthday">
                                    </div>


                                    @error('birthday')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="national_identification_card_no"
                                           class="form-label">{{ __('NIC') }}</label>
                                    <input id="nic" type="text"
                                           class="form-control @error('nic') is-invalid @enderror"
                                           name="nic"
                                           value="{{ $old('nic') }}"
                                           autocomplete="nic">
                                    @error('nic')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="phone" class="form-label">
                                        {{ __('Phone (Fixed Line)') }}
                                    </label>
                                    <input id="phone" type="text"
                                           class="form-control @error('phone') is-invalid @enderror"
                                           name="phone"
                                           value="{{ $old('phone') }}"
                                           autocomplete="phone">
                                    @error('phone')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="address" class="form-label">{{ __('Address') }}</label>
                                    <textarea id="address" type="text"
                                              class="form-control @error('address') is-invalid @enderror"
                                              name="address"
                                              value="{{ $old('address') }}"
                                              autocomplete="address">{{ $old('address') }}</textarea>
                                    @error('address')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <h4 class="my-3">Business Details</h4>

                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="business_name" class="form-label">
                                        {{ __('Business Name') }}
                                    </label>
                                    <input id="business_name" type="text"
                                           class="form-control @error('business_name') is-invalid @enderror"
                                           name="business_name"
                                           value="{{ $old('business_name') }}"
                                           autocomplete="business_name" required>
                                    @error('business_name')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="business_phone" class="form-label">{{ __('Business Phone') }}</label>
                                    <input id="business_phone" type="text"
                                           class="form-control @error('business_phone') is-invalid @enderror"
                                           name="business_phone"
                                           value="{{ $old('business_phone') }}"
                                           autocomplete="business_phone">
                                    @error('business_phone')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="business_address"
                                           class="form-label">{{ __('Business Address') }}</label>
                                    <textarea id="business_address" type="text"
                                              class="form-control @error('business_address') is-invalid @enderror"
                                              name="business_address"
                                              value="{{ $old('business_address') }}"
                                              autocomplete="business_address">{{ $old('business_address') }}</textarea>
                                    @error('business_address')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="business_start_date"
                                           class="form-label">{{ __('Business Start Date') }}</label>
                                    <input id="business_start_date" type="text"
                                           class="form-control date-picker @error('business_start_date') is-invalid @enderror"
                                           name="business_start_date"
                                           value="{{ $old('business_start_date') ? $old('business_start_date')->format('m/d/Y') : '' }}"
                                           autocomplete="business_start_date">
                                    @error('business_start_date')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="business_legal_nature"
                                           class="form-label">{{ __('Legal Nature Of Business') }}</label>
                                    <select id="business_legal_nature"
                                            class="form-control @error('business_legal_nature') is-invalid @enderror"
                                            name="business_legal_nature"
                                            autocomplete="business_legal_nature">
                                        <option
                                            value="sole_proprietorship" {{ $old('business_legal_nature') == 'sole_proprietorship' ? 'selected' : '' }}>
                                            Sole Proprietorship
                                        </option>
                                        <option
                                            value="public_limited_company" {{ $old('business_legal_nature') == 'public_limited_company' ? 'selected' : '' }}>
                                            Public Limited Company
                                        </option>
                                        <option
                                            value="limited_liability_company" {{ $old('business_legal_nature') == 'limited_liability_company' ? 'selected' : '' }}>
                                            Limited Liability Company
                                        </option>
                                        <option
                                            value="partnership" {{ $old('business_legal_nature') == 'partnership' ? 'selected' : '' }}>
                                            Partnership
                                        </option>
                                        <option
                                            value="others" {{ $old('business_legal_nature') == 'others' ? 'selected' : '' }}>
                                            Others
                                        </option>
                                    </select>
                                    @error('business_legal_nature')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="business_registration_status"
                                           class="form-label">
                                        {{ __('Business Registration Status') }}
                                    </label>
                                    <select id="business_registration_status"
                                            class="form-control @error('business_registration_status') is-invalid @enderror"
                                            name="business_registration_status"
                                            autocomplete="business_registration_status">
                                        <option
                                            value="registered" {{ $old('business_registration_status') == 'registered' ? 'selected' : '' }}>
                                            Registered
                                        </option>
                                        <option
                                            value="not_registered" {{ $old('business_registration_status') == 'not_registered' ? 'selected' : '' }}>
                                            Not Registered
                                        </option>
                                    </select>
                                    @error('business_registration_status')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="business_registration_number"
                                           class="form-label">{{ __('Business Registration Number') }}</label>
                                    <input id="business_registration_number" type="text"
                                           class="form-control @error('business_registration_number') is-invalid @enderror"
                                           name="business_registration_number"
                                           value="{{ $old('business_registration_number') }}"
                                           autocomplete="business_registration_number">
                                    @error('business_registration_number')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="business_type"
                                           class="form-label">
                                        {{ __('Economic Sector') }}
                                    </label>
                                    <select id="business_type"
                                            class="form-control @error('business_type') is-invalid @enderror"
                                            name="business_type">
                                        <option
                                            value="manufacturing" {{ $old('business_type') == 'manufacturing' ? 'selected' : '' }}>
                                            Manufacturing
                                        </option>
                                        <option
                                            value="service" {{ $old('business_type') == 'service' ? 'selected' : '' }}>
                                            Service
                                        </option>
                                        <option
                                            value="trading" {{ $old('business_type') == 'trading' ? 'selected' : '' }}>
                                            Trading
                                        </option>
                                    </select>
                                    @error('business_type')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="business_annual_turnover"
                                           class="form-label">
                                        {{ __('Annual Turnover') }}
                                    </label>
                                    <select id="business_annual_turnover"
                                            class="form-control @error('business_annual_turnover') is-invalid @enderror"
                                            name="business_annual_turnover">
                                        <option value="" selected disabled>Select</option>
                                        <option
                                            value="15mil_or_less" {{ $old('business_annual_turnover') == '15mil_or_less' ? 'selected' : '' }}>
                                            15Mn or less
                                        </option>
                                        <option
                                            value="16mil_250mil" {{ $old('business_annual_turnover') == '16mil_250mil' ? 'selected' : '' }}>
                                            16Mn to 250Mn
                                        </option>
                                        <option
                                            value="251mil_750mil" {{ $old('business_annual_turnover') == '251mil_750mil' ? 'selected' : '' }}>
                                            251Mn to 750Mn
                                        </option>
                                        <option
                                            value="more_than_751mil" {{ $old('business_annual_turnover') == 'more_than_751mil' ? 'selected' : '' }}>
                                            More than 751Mn
                                        </option>
                                    </select>
                                    @error('business_annual_turnover')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="business_number_of_employees"
                                           class="form-label">
                                        {{ __('Number Of Employees') }}
                                    </label>
                                    <select id="business_number_of_employees"
                                            class="form-control @error('business_number_of_employees') is-invalid @enderror"
                                            name="business_number_of_employees">
                                        <option value="" selected disabled>Select</option>
                                        <option
                                            value="10_or_less" {{ $old('business_number_of_employees') == '10_or_less' ? 'selected' : '' }}>
                                            10 or less
                                        </option>
                                        <option
                                            value="11_50" {{ $old('business_number_of_employees') == '11_50' ? 'selected' : '' }}>
                                            11 to 50
                                        </option>
                                        <option
                                            value="51_200" {{ $old('business_number_of_employees') == '51_200' ? 'selected' : '' }}>
                                            51 to 200
                                        </option>
                                        <option
                                            value="more_than_201" {{ $old('business_number_of_employees') == 'more_than_201' ? 'selected' : '' }}>
                                            more than 201
                                        </option>
                                    </select>
                                    @error('business_number_of_employees')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="business_service_id"
                                           class="form-label">
                                        {{ __('Primary Business Sector') }}
                                    </label>
                                    <select id="business_service_id"
                                            class="form-control @error('business_service_id') is-invalid @enderror"
                                            name="business_service_id">
                                        {{--                                        <option value="" selected disabled>{{ __('Primary Business Sector') }}</option>--}}
                                        @foreach((new \App\Models\Content\BusinessServiceType())->whereNull('parent_id')->orderBy('sort_order', 'ASC')->get() as $service_category)
                                            <option
                                                value="{{ $service_category->id }}" {{ $old('business_service_id') == $service_category->id ? 'selected' : '' }}>
                                                {{ $service_category->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('business_service_id')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="business_service_id"
                                           class="form-label">
                                        {{ __('Secondary Business Sector') }}
                                    </label>

                                    <select id="secondary_business_service_id"
                                            class="form-control @error('secondary_business_service_id') is-invalid @enderror"
                                            name="secondary_business_service_id">
                                        @if($old('secondary_business_service_id'))
                                            <option value="{{ $old('secondary_business_service_id') }}">
                                                {{ (new \App\Models\Content\BusinessServiceType())->find($old('secondary_business_service_id'))->title_en }}
                                            </option>
                                        @else
                                            <option value="" selected
                                                    disabled>{{ __('Secondary Business Sector') }}</option>
                                        @endif
                                    </select>
                                    @error('secondary_business_service_id')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="business_description"
                                           class="form-label">
                                        {{ __('Business Description') }}
                                    </label>
                                    <textarea id="business_description" type="text"
                                              class="form-control @error('business_description') is-invalid @enderror"
                                              name="business_description"
                                              autocomplete="business_description">{{ $old('business_description') }}</textarea>
                                    <small class="text-warning">Please provide a small description about
                                        your business. Maximum 200 words.</small>
                                    @error('business_description')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="province_id"
                                           class="form-label">
                                        {{ __('Province') }}
                                    </label>
                                    <select name="province_id" id="province_id" autocomplete="province"
                                            class="form-control @error('province_id') is-invalid @enderror">
                                        <option value="" selected disabled>Province</option>
                                        @if($provinces && $provinces->count())
                                            @foreach($provinces as $province)
                                                <option
                                                    value="{{ $province->id }}" {{ $old('province_id') == $province->id ? 'selected' : '' }}>
                                                    {{ $province->title_en }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>

                                    @error('province_id')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="district_id"
                                           class="form-label">
                                        {{ __('District') }}
                                    </label>
                                    <select name="district_id" id="district_id" autocomplete="district" disabled
                                            class="form-control @error('district_id') is-invalid @enderror">
                                        @if(request()->has('update'))
                                            <option value="{{ $old('district_id') }}" selected disabled>{{ $old('district_id') }}</option>
                                        @else
                                            <option value="" selected disabled>District</option>
                                        @endif
                                    </select>
                                    @error('district_id')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="divisional_secretariat_id"
                                           class="form-label">
                                        {{ __('Divisional Secretariat') }}
                                    </label>
                                    <select name="divisional_secretariat_id" id="divisional_secretariat_id" disabled
                                            autocomplete="province"
                                            class="form-control @error('divisional_secretariat_id') is-invalid @enderror">
                                        @if(request()->has('update'))
                                            <option value="{{ $old('divisional_secretariat_id') }}" selected disabled>{{ $old('divisional_secretariat_id') }}</option>
                                        @else
                                            <option value="" selected disabled>Divisional Secretariat</option>
                                        @endif
                                    </select>
                                    @error('divisional_secretariat_id')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="grama_niladhari_division_id"
                                           class="form-label">
                                        {{ __('Grama Niladhari Division') }}
                                    </label>
                                    <select name="grama_niladhari_division_id"
                                            id="grama_niladhari_division_id" autocomplete="district" disabled
                                            class="form-control @error('grama_niladhari_division_id') is-invalid @enderror">
                                        @if(request()->has('update'))
                                            <option value="{{ $old('grama_niladhari_division_id') }}" selected disabled>{{ $old('grama_niladhari_division_id') }}</option>
                                        @else
                                            <option value="" selected disabled>Grama Niladhari Division</option>
                                        @endif
                                    </select>
                                    @error('grama_niladhari_division_id')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                            </div>

                            <h4 class="my-3 mt-3">Is business located in a Industrial Zone?</h4>

                            <div class="row g-3">
                                <div class="col-12">

                                    <div class="form-check">
                                        <input id="business_located_in_industrial_zone" type="checkbox"
                                               class="form-check-input @error('business_located_in_industrial_zone') is-invalid @enderror"
                                               name="business_located_in_industrial_zone"
                                               value="1"
                                               autocomplete="business_located_in_industrial_zone">
                                        <label for="business_located_in_industrial_zone"
                                               class="form-label">
                                            {{ __('Yes') }}
                                        </label>
                                    </div>

                                    @error('business_located_in_industrial_zone')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-12 business_zone_type" style="display: none">
                                    <label for="business_zone_type"
                                           class="form-label">
                                        {{ __('Industrial zone') }}
                                    </label>
                                    <select id="business_zone_type" type="text"
                                            class="form-control @error('business_zone_type') is-invalid @enderror"
                                            name="business_zone_type">
                                        <option value="" selected disabled>Select</option>
                                        <option
                                            value="idb" {{ $old('business_zone_type') == 'idb' ? 'selected' : '' }}>
                                            IDB
                                        </option>
                                        <option
                                            value="boi" {{ $old('business_zone_type') == 'boi' ? 'selected' : '' }}>
                                            BOI
                                        </option>
                                        <option
                                            value="boi" {{ $old('business_zone_type') == 'moi' ? 'selected' : '' }}>
                                            Ministry of Industries
                                        </option>
                                        <option
                                            value="boi" {{ $old('business_zone_type') == 'pc' ? 'selected' : '' }}>
                                            Provincial council
                                        </option>
                                    </select>
                                    @error('business_zone_type')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            @if(!request()->has('view') && !request()->has('update'))
                                <div class="row g-3 mt-3">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            @endif

                            @if(request()->has('update'))
                                <div class="row g-3 mt-3">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100">
                                            {{ __('Update') }}
                                        </button>
                                    </div>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            (function ($) {
                $('#business_located_in_industrial_zone').on('change', function () {
                    if ($(this).is(":checked")) {
                        $('.business_zone_type').show();
                    } else {
                        $('.business_zone_type').hide();
                    }
                })

                $('#business_service_id').select2()
                    .on('select2:select', function () {
                        $.get('{{ route('admin.do-admin.entrepreneur') }}?json_district=true&business_sec_id=' + $(this).val(), function (response) {
                            if (response.payload && response.payload.length !== 0) {
                                let options = '<option>Select</option>';
                                $.each(response.payload, function (key, value) {
                                    options += '<option value="' + key + '">' + value + '</option>';
                                })
                                $('#secondary_business_service_id').removeAttr('disabled').empty().append(options).select2();
                            } else {
                                $('#secondary_business_service_id').attr('disabled', true);
                            }
                        });
                    });

                $('#province_id').select2().on('select2:select', function () {
                    $.get('{{ route('admin.do-admin.entrepreneur') }}?json_district=true&province_id=' + $(this).val(), function (response) {
                        if (response.payload) {
                            let options = '<option>Select</option>';
                            $.each(response.payload, function (key, value) {
                                options += '<option value="' + key + '">' + value + '</option>';
                            })
                            $('#district_id')
                                .removeAttr('disabled')
                                .empty()
                                .append(options)
                                .select2().on('select2:select', function () {
                                $.get('{{ route('admin.do-admin.entrepreneur') }}?json_district=true&district_id=' + $(this).val(), function (response) {
                                    if (response.payload) {
                                        let options = '<option>Select</option>';
                                        $.each(response.payload, function (key, value) {
                                            options += '<option value="' + key + '">' + value + '</option>';
                                        })
                                        $('#divisional_secretariat_id').removeAttr('disabled')
                                            .empty()
                                            .append(options)
                                            .select2()
                                            .on('select2:select', function () {
                                                $.get('{{ route('admin.do-admin.entrepreneur') }}?json_district=true&divisional_secretariat_id=' + $(this).val(), function (response) {
                                                    if (response.payload) {
                                                        let options = '<option>Select</option>';
                                                        $.each(response.payload, function (key, value) {
                                                            options += '<option value="' + key + '">' + value + '</option>';
                                                        })
                                                        $('#grama_niladhari_division_id').removeAttr('disabled').empty().append(options).select2();
                                                    }
                                                });
                                            });
                                    }
                                });
                            });
                        }
                    });
                });

                $('#birthday').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    minYear: 1901
                });

                $('#business_start_date').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    minYear: 1901
                });
            })(jQuery);
        </script>
    </main>
@endsection
