@extends('layouts.app')

@section('title', __('Recruitment of Management Assistant (Non - Technological)'))

@section('content')
    <section class="inner-header" style="background-image: url('{{asset('images/careers.jpg')}}')">
        <div class="container d-flex align-items-end h-100">
            <div class="header-text">
                <h1>{{ __('Recruitment of Management Assistant (Non - Technological)') }}</h1>
                <p>{{ __('Specimen Form of Application') }}</p>
            </div>
        </div>
    </section>
    <section class="inner-content">
        <div class="alert alert-warning">
            Sorry this vacancy is no longer available.
        </div>
    </section>
    <section class="inner-content d-none">
        <div class="container">
            <h4 class="mb-5">{{ __('Recruitment of Management Assistant (Non - Technological)') }}</h4>
            @if(!request()->has('form'))
                <form method="POST" action="{{ route('form.recruitment_of_management_assistant.save') }}" enctype="multipart/form-data">
                    @csrf

                    <h5><span class="field-number">01.</span> Personal Information</h5>
                    <div class="form-group row">
                        <label for="full_name"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">1.1.</span> Name in full <br><span class="text-muted">(In English block capitals)</span>
                        </label>
                        <div class="col-md-6">
                            <input id="full_name" type="text"
                                   class="form-control @error('full_name') is-invalid @enderror"
                                   name="full_name" value="{{ old('full_name') }}"
                                   required/>
                            @error('full_name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                            <small>(Eg. : HERATH MUDIYANSELAGE SAMAN KUMARA GUNAWARDHANA)</small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name_with_initials"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">1.2.</span> Name with initials at the end <br><span
                                    class="text-muted">(In English block capitals)</span>
                        </label>
                        <div class="col-md-6">
                            <input id="name_with_initials" type="text"
                                   class="form-control @error('name_with_initials') is-invalid @enderror"
                                   name="name_with_initials" value="{{ old('name_with_initials') }}"
                                   required/>
                            @error('name_with_initials')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                            <small>(Eg: GUNAWARDHANA H.M.S.K.)</small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name_in_different_language"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">1.3.</span> Name in full <br> <span class="text-muted">(In Sinhala /Tamil)</span>
                        </label>
                        <div class="col-md-6">
                            <input id="name_in_different_language" type="text"
                                   class="form-control @error('name_in_different_language') is-invalid @enderror"
                                   name="name_in_different_language" value="{{ old('name_in_different_language') }}"
                                   required/>
                            @error('name_in_different_language')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="permanent_address"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">1.4.</span> Permanent Address <br><span class="text-muted">(In English block capitals)</span>
                        </label>
                        <div class="col-md-6">
                        <textarea id="permanent_address" type="text"
                                  class="form-control @error('permanent_address') is-invalid @enderror"
                                  name="permanent_address"
                                  autocomplete="permanent_address" required>{{ old('permanent_address') }}</textarea>
                            @error('permanent_address')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="gender"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">1.5.</span> Gender
                        </label>
                        <div class="col-md-6">
                            <select id="gender" type="text"
                                    class="form-control @error('gender') is-invalid @enderror"
                                    name="gender" value="{{ old('gender') }}"
                                    required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="race"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">1.6.</span> Race
                        </label>
                        <div class="col-md-6">
                            <select id="race" type="text"
                                    class="form-control @error('race') is-invalid @enderror"
                                    name="race" required>
                                <option value="sinhala" {{ old('race') == 'sinhala' ? 'selected' : '' }}>Sinhala
                                </option>
                                <option value="tamil" {{ old('race') == 'tamil' ? 'selected' : '' }}>Tamil</option>
                                <option value="muslim" {{ old('race') == 'muslim' ? 'selected' : '' }}>Muslim</option>
                                <option value="other" {{ old('race') == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('race')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nic"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">1.7.</span> National Identity Card Number
                        </label>
                        <div class="col-md-6">
                            <input id="nic" type="text"
                                   class="form-control @error('nic') is-invalid @enderror"
                                   name="nic" value="{{ old('nic') }}"
                                   required/>
                            @error('nic')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="birthday"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">1.8</span> Date of Birth
                        </label>
                        <div class="col-md-6">
                            <input id="birthday" type="text"
                                   class="form-control @error('birthday') is-invalid @enderror"
                                   name="birthday" value="{{ old('birthday') }}"
                                   required/>
                            @error('birthday')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                            <small>(Format: YYYY-MM-DD)</small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="age_at_closing"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">1.9</span> Age as at 12th January 2021 which is the date of
                            closing the application
                        </label>
                        <div class="col-md-6">
                            <input id="age_at_closing" type="text"
                                   class="form-control @error('age_at_closing') is-invalid @enderror"
                                   name="age_at_closing" value="{{ old('age_at_closing') }}"
                                   required/>
                            @error('age_at_closing')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="telephone"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">1.10.</span> Telephone No
                        </label>
                        <div class="col-md-6">
                            <input id="telephone" type="text"
                                   class="form-control @error('telephone') is-invalid @enderror"
                                   name="telephone" value="{{ old('telephone') }}"
                                   required/>
                            @error('telephone')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">1.11.</span> Email
                        </label>
                        <div class="col-md-6">
                            <input id="email" type="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}"
                                   required/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <h5><span class="field-number">02.</span> Educational Qualifications</h5>
                    <div class="form-group row">
                        <label for="educational_qualifications_al"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">2.1.</span> G.C.E. (A/L) Examination
                        </label>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col">
                                    <label for="educational_qualifications_al[year]"
                                           class="col-form-label text-md-left">
                                        Year
                                    </label>
                                    <input id="educational_qualifications_al[year]" type="text"
                                           class="form-control"
                                           name="educational_qualifications_al[year]"
                                           value="{{ old('educational_qualifications_al[year]') }}"
                                    />
                                </div>
                                <div class="col">
                                    <label for="educational_qualifications_al[index_no]"
                                           class="col-form-label text-md-left">
                                        Index No
                                    </label>
                                    <input id="educational_qualifications_al[index_no]" type="text"
                                           class="form-control"
                                           name="educational_qualifications_al[index_no]"
                                           value="{{ old('educational_qualifications_al[index_no]') }}"
                                    />
                                </div>
                            </div>

                            <div class="bg-light bg-light border mt-2 px-3 pb-3">
                                <div class="row mt-2">
                                    <div class="col">
                                        <label for="educational_qualifications_al[subject_1]"
                                               class="col-form-label text-md-left">
                                            Subject
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label for="educational_qualifications_al[grade_1]"
                                               class="col-form-label text-md-left">
                                            Grade
                                        </label>
                                    </div>
                                </div>
                                @foreach(range(1, 4) as $key)
                                    <div class="row mt-1">
                                        <div class="col">
                                            <input id="educational_qualifications_al[subject_{{ $key }}]" type="text"
                                                   class="form-control"
                                                   name="educational_qualifications_al[subject_{{ $key }}]"
                                                   value="{{ old('educational_qualifications_al[subject_{{ $key ]') }}"
                                                   placeholder="{{ $key }}"
                                                    {{ $loop->first ? 'required' : '' }}/>
                                        </div>
                                        <div class="col">
                                            <input id="educational_qualifications_al[grade_{{ $key }}]" type="text"
                                                   class="form-control"
                                                   name="educational_qualifications_al[grade_{{ $key }}]"
                                                   value="{{ old('educational_qualifications_al[grade_{{ $key ]') }}"
                                                    {{ $loop->first ? 'required' : '' }}/>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="educational_qualifications_ol"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">2.2.</span> G.C.E. (O/L) Examination
                        </label>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col">
                                    <label for="educational_qualifications_ol[year]"
                                           class="col-form-label text-md-left">
                                        Year
                                    </label>
                                    <input id="educational_qualifications_ol[year]" type="text"
                                           class="form-control"
                                           name="educational_qualifications_ol[year]"
                                           value="{{ old('educational_qualifications_ol[year]') }}"
                                           required/>
                                </div>
                                <div class="col">
                                    <label for="educational_qualifications_ol[index_no]"
                                           class=" col-form-label text-md-left">
                                        Index No
                                    </label>
                                    <input id="educational_qualifications_ol[index_no]" type="text"
                                           class="form-control"
                                           name="educational_qualifications_ol[index_no]"
                                           value="{{ old('educational_qualifications_ol[index_no]') }}"
                                           required/>
                                </div>
                            </div>
                            <div class="bg-light bg-light border mt-2 px-3 pb-3">
                                <div class="row mt-2">
                                    <div class="col">
                                        <label for="educational_qualifications_ol[subject_1]"
                                               class="col-form-label text-md-left">
                                            Subject
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label for="educational_qualifications_ol[grade_1]"
                                               class="col-form-label text-md-left">
                                            Grade
                                        </label>
                                    </div>
                                </div>
                                @foreach(range(1, 9) as $key)
                                    <div class="row mt-1">
                                        <div class="col">
                                            <input id="educational_qualifications_ol[subject_{{ $key }}]" type="text"
                                                   class="form-control"
                                                   name="educational_qualifications_ol[subject_{{ $key }}]"
                                                   value="{{ old('educational_qualifications_ol[subject_{{ $key]') }}"
                                                   placeholder="{{ $key }}"
                                                    {{ $loop->first ? 'required' : '' }}/>
                                        </div>
                                        <div class="col">
                                            <input id="educational_qualifications_ol[grade_{{ $key }}]" type="text"
                                                   class="form-control"
                                                   name="educational_qualifications_ol[grade_{{ $key }}]"
                                                   value="{{ old('educational_qualifications_ol[grade_{{ $key]') }}"
                                                    {{ $loop->first ? 'required' : '' }}/>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <h5><span class="field-number">03.</span></h5>
                    <div class="form-group row">
                        <label for="found_guilty_by_court_of_law"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">3.1</span> Have you been found guilty by court of Law ?
                        </label>
                        <div class="col-md-6">
                            <select id="found_guilty_by_court_of_law" type="text"
                                    class="form-control @error('found_guilty_by_court_of_law') is-invalid @enderror"
                                    name="found_guilty_by_court_of_law"
                                    value="{{ old('found_guilty_by_court_of_law') }}"
                                    required>
                                <option value="" selected disabled>Yes or No</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('found_guilty_by_court_of_law')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="found_guilty_by_court_of_law_details"
                               class="col-md-4 col-form-label text-md-left">
                            3.2 If so, give details
                        </label>
                        <div class="col-md-6">
                            <input id="found_guilty_by_court_of_law_details" type="text"
                                   class="form-control @error('found_guilty_by_court_of_law_details') is-invalid @enderror"
                                   name="found_guilty_by_court_of_law_details"
                                   value="{{ old('found_guilty_by_court_of_law_details') }}"
                            />
                            @error('found_guilty_by_court_of_law_details')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <h5><span class="field-number">04.</span></h5>
                    <div class="form-group row">
                        <label for="holding_a_post_in_the_public_service"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">4.1</span> Are you holding a post in the Public Service?
                        </label>
                        <div class="col-md-6">
                            <select id="holding_a_post_in_the_public_service" type="text"
                                    class="form-control @error('holding_a_post_in_the_public_service') is-invalid @enderror"
                                    name="holding_a_post_in_the_public_service"
                                    value="{{ old('holding_a_post_in_the_public_service') }}"
                                    required>
                                <option value="" selected disabled>Yes or No</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('holding_a_post_in_the_public_service')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="found_guilty_by_court_of_law_details"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">4.2.</span> If so, give details
                        </label>
                        <div class="col-md-6">
                            <input id="found_guilty_by_court_of_law_details" type="text"
                                   class="form-control @error('found_guilty_by_court_of_law_details') is-invalid @enderror"
                                   name="found_guilty_by_court_of_law_details"
                                   value="{{ old('found_guilty_by_court_of_law_details') }}"
                            />
                            @error('found_guilty_by_court_of_law_details')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="dismissed_or_removed_from_public_service"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">4.3.</span> Have you been dismissed from the Public Service/ Have
                            you removed from the Public
                            Service
                        </label>
                        <div class="col-md-6">
                            <input id="dismissed_or_removed_from_public_service" type="text"
                                   class="form-control @error('dismissed_or_removed_from_public_service') is-invalid @enderror"
                                   name="dismissed_or_removed_from_public_service"
                                   value="{{ old('dismissed_or_removed_from_public_service') }}"
                            />
                            @error('dismissed_or_removed_from_public_service')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <h5><span class="field-number">05.</span></h5>
                    <div class="form-group row">
                        <label for="profile_picture"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">5.1.</span> Personal Photo
                        </label>
                        <div class="col-md-6">
                            <input id="profile_picture" type="file"
                                   class="form-control @error('profile_picture') is-invalid @enderror"
                                   name="profile_picture"
                                   value="{{ old('profile_picture') }}" required/>
                            @error('profile_picture')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="qualifications"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">5.2.</span> Photos of certificate/s of basic education qualifications
                        </label>
                        <div class="col-md-6">
                            <input id="qualifications" type="file"
                                   class="form-control @error('qualifications') is-invalid @enderror"
                                   name="qualifications[]" multiple
                                   value="{{ old('qualifications') }}" required/>
                            @error('qualifications')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                            <small>You can select multiple files at once (Photos / PDF / Word / Text)
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="letters"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">5.3.</span> Experience letter/s
                        </label>
                        <div class="col-md-6">
                            <input id="letters" type="file"
                                   class="form-control @error('letters') is-invalid @enderror"
                                   name="letters[]" multiple
                                   value="{{ old('letters') }}" />
                            @error('letters')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                            <small>You can select multiple files at once (Photos / PDF / Word / Text)
                            </small>
                        </div>
                    </div>

                    <div class="form-group row mb-3 mt-5">
                        <div class="col-md-12 col-form-label text-md-left">
                            I declare that all the information given in this form is true to the best of my knowledge and belief.
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </div>
                </form>
                <div class="adlux-message mt-5 text-center d-none">
                    <h6 class="mb-2">Need technical assistance or advice?, please call NEDA IT - (077) 036 5588</h6>
                    <p class="mb-0 text-muted small">Powered by Adlux</p>
                </div>
            @elseif(request()->get('form') === 'success')
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mt-4">
                            <div class="alert alert-success">
                                Thank you, your submission is saved
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
            integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
            crossorigin="anonymous"></script>
    <script>
        $('#birthday').datepicker({
            format: "yyyy-mm-dd",
            startView: 3
        });
    </script>
@endpush

@push('styles')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
          integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
          crossorigin="anonymous"/>
@endpush
