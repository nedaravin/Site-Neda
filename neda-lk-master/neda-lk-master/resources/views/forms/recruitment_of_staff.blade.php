@extends('layouts.app')

@section('title', __('Recruitment of Staff'))

@section('content')
    <section class="inner-header" style="background-image: url('{{asset('images/careers.jpg')}}')">
        <div class="container d-flex align-items-end h-100">
            <div class="header-text">
                <h1>Enterprise Promotion Officer (EPO) – 01 <br> Enterprise Promotion Assistant (EPA) – 03</h1>
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
            <h4 class="mb-5">{{ __('Recruitment of Staff') }}</h4>

            @if(!request()->has('form'))
                <form method="POST" action="{{ route('form.recruitment_of_staff.save') }}" enctype="multipart/form-data">
                    @csrf


                    <div class="form-group row">
                        <label for="job_type"
                               class="col-md-4 col-form-label text-md-left">
                            Job Designation
                        </label>
                        <div class="col-md-6">
                            <select id="job_type" type="text"
                                    class="form-control @error('job_type') is-invalid @enderror"
                                    name="job_type" required>
                                <option value="enterprise_promotion_officer">Enterprise Promotion Officer</option>
                                <option value="enterprise_promotion_assistant">Enterprise Promotion Assistant</option>
                            </select>
                            @error('job_type')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <h5><span class="field-number">01.</span> Personal Information</h5>

                    <div class="form-group row">
                        <label for="full_name"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">1.1.</span> Name in full <br> <span class="text-muted">(In English block capitals)</span>
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
                            <small>(Eg: GUNAWARDHANA H.M.S.K.)</small>
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
                            <span class="field-number"> 1.10.</span> Telephone No
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

                    <h6><span class="field-number">2.1.</span> Educational Qualifications</h6>

                    <div class="form-group row">
                        <label for="education_date_of_graduation"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">1</span> Date of effective of the Degree
                        </label>
                        <div class="col-md-6">
                            <input id="education_date_of_graduation" type="text"
                                   class="form-control @error('education_date_of_graduation') is-invalid @enderror"
                                   name="education_date_of_graduation"
                                   value="{{ old('education_date_of_graduation') }}"
                                   />
                            @error('education_date_of_graduation')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="education_university_institute"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">2</span> University / Institute
                        </label>
                        <div class="col-md-6">
                            <input id="education_university_institute" type="text"
                                   class="form-control @error('education_university_institute') is-invalid @enderror"
                                   name="education_university_institute"
                                   value="{{ old('education_university_institute') }}"
                                   />
                            @error('education_university_institute')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="education_registration_number"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">3</span> Registration Number
                        </label>
                        <div class="col-md-6">
                            <input id="education_registration_number" type="text"
                                   class="form-control @error('education_registration_number') is-invalid @enderror"
                                   name="education_registration_number"
                                   value="{{ old('education_registration_number') }}"
                                   />
                            @error('education_registration_number')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="education_degree"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">4</span> Degree
                        </label>
                        <div class="col-md-6">
                            <input id="education_degree" type="text"
                                   class="form-control @error('education_degree') is-invalid @enderror"
                                   name="education_degree"
                                   value="{{ old('education_degree') }}"
                                   />
                            @error('education_degree')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="education_subjects_and_field"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">5</span> Subjects/ Subjects field
                        </label>
                        <div class="col-md-6">
                            <input id="education_subjects_and_field" type="text"
                                   class="form-control @error('education_subjects_and_field') is-invalid @enderror"
                                   name="education_subjects_and_field"
                                   value="{{ old('education_subjects_and_field') }}"
                                   required/>
                            @error('education_subjects_and_field')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="education_index_no"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">6</span> Index No
                        </label>
                        <div class="col-md-6">
                            <input id="education_index_no" type="text"
                                   class="form-control @error('education_index_no') is-invalid @enderror"
                                   name="education_index_no"
                                   value="{{ old('education_index_no') }}"
                                   required/>
                            @error('education_index_no')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="education_language_medium_of_examination"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">7</span> Language medium of Examination
                        </label>
                        <div class="col-md-6">
                            <input id="education_language_medium_of_examination" type="text"
                                   class="form-control @error('education_language_medium_of_examination') is-invalid @enderror"
                                   name="education_language_medium_of_examination"
                                   value="{{ old('education_language_medium_of_examination') }}"
                                   required/>
                            @error('education_language_medium_of_examination')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <h6><span class="field-number">2.2</span> G.C.E. (O/L) Examination</h6>

                    <div class="form-group row">
                        <label for="education_ol_passed_year"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">1</span> Year in which the applicant passed the examination
                        </label>
                        <div class="col-md-6">
                            <input id="education_ol_passed_year" type="text"
                                   class="form-control @error('education_ol_passed_year') is-invalid @enderror"
                                   name="education_ol_passed_year"
                                   value="{{ old('education_ol_passed_year') }}"
                                   required/>
                            @error('education_ol_passed_year')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="education_ol_index_no"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">2</span> Index No
                        </label>
                        <div class="col-md-6">
                            <input id="education_ol_index_no" type="text"
                                   class="form-control @error('education_ol_index_no') is-invalid @enderror"
                                   name="education_ol_index_no"
                                   value="{{ old('education_ol_index_no') }}"
                                   required/>
                            @error('education_ol_index_no')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="education_ol_language"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">3</span> Language medium of Examination
                        </label>
                        <div class="col-md-6">
                            <input id="education_ol_language" type="text"
                                   class="form-control @error('education_ol_language') is-invalid @enderror"
                                   name="education_ol_language"
                                   value="{{ old('education_ol_language') }}"
                                   required/>
                            @error('education_ol_language')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="education_ol_english_score"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">4</span> Pass obtained for English Language
                        </label>
                        <div class="col-md-6">
                            <input id="education_ol_english_score" type="text"
                                   class="form-control @error('education_ol_english_score') is-invalid @enderror"
                                   name="education_ol_english_score"
                                   value="{{ old('education_ol_english_score') }}"
                                   required/>
                            @error('education_ol_english_score')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <h6><span class="field-number">2.3.</span> G.C.E. (A/L) Examination</h6>

                    <div class="form-group row">
                        <label for="education_al_passed_year"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">1</span> Year in which the applicant passed the examination
                        </label>
                        <div class="col-md-6">
                            <input id="education_al_passed_year" type="text"
                                   class="form-control @error('education_al_passed_year') is-invalid @enderror"
                                   name="education_al_passed_year"
                                   value="{{ old('education_al_passed_year') }}"
                                   required/>
                            @error('education_al_passed_year')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="education_al_index_no"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">2</span> Index No
                        </label>
                        <div class="col-md-6">
                            <input id="education_al_index_no" type="text"
                                   class="form-control @error('education_al_index_no') is-invalid @enderror"
                                   name="education_al_index_no"
                                   value="{{ old('education_al_index_no') }}"
                                   required/>
                            @error('education_al_index_no')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="education_al_language"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">3</span> Language medium of Examination
                        </label>
                        <div class="col-md-6">
                            <input id="education_al_language" type="text"
                                   class="form-control @error('education_al_language') is-invalid @enderror"
                                   name="education_al_language"
                                   value="{{ old('education_al_language') }}"
                                   required/>
                            @error('education_al_language')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="education_al_english_score"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">4</span> Pass obtained for English Language
                        </label>
                        <div class="col-md-6">
                            <input id="education_al_english_score" type="text"
                                   class="form-control @error('education_al_english_score') is-invalid @enderror"
                                   name="education_al_english_score"
                                   value="{{ old('education_al_english_score') }}"
                                   required/>
                            @error('education_al_english_score')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <h6><span class="field-number">2.4</span> Other Educational Qualifications</h6>

                    <div class="form-group row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <label for="educational_qualifications[institutes_1]"
                                           class="col-form-label text-md-left">
                                        Institute / Organization
                                    </label>
                                </div>
                                <div class="col">
                                    <label for="educational_qualifications[qualification_1]"
                                           class="col-form-label text-md-left">
                                        Qualification and Major
                                    </label>
                                </div>
                                <div class="col">
                                    <label for="educational_qualifications[date_1]"
                                           class="col-form-label text-md-left">
                                        Effective date
                                    </label>
                                </div>
                            </div>
                            @foreach(range(1, 7) as $key)
                                <div class="row mt-2">
                                    <div class="col">
                                        <input id="educational_qualifications[institutes_{{ $key }}]" type="text"
                                               class="form-control"
                                               name="educational_qualifications[institutes_{{ $key }}]"
                                               value="{{ old('educational_qualifications[institutes_'. $key .']') }}"
                                               {{ $loop->first ? 'required' : '' }}/>
                                    </div>
                                    <div class="col">
                                        <input id="educational_qualifications[qualification_{{ $key }}]" type="text"
                                               class="form-control"
                                               name="educational_qualifications[qualification_{{ $key }}]"
                                               value="{{ old('educational_qualifications[qualification_'. $key .']') }}"
                                               {{ $loop->first ? 'required' : '' }}/>
                                    </div>
                                    <div class="col">
                                        <input id="educational_qualifications[date_{{ $key }}]" type="text"
                                               class="form-control"
                                               name="educational_qualifications[date_{{ $key }}]"
                                               value="{{ old('educational_qualifications[date_'. $key .']') }}"
                                               {{ $loop->first ? 'required' : '' }}/>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <h5><span class="field-number">03.</span> Working Experience</h5>

                    <div class="form-group row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <label for="work_experience[institutes_1]"
                                           class="col-form-label text-md-left">
                                        Institute / Organization
                                    </label>
                                </div>
                                <div class="col">
                                    <label for="work_experience[qualification_1]"
                                           class="col-form-label text-md-left">
                                        Designation
                                    </label>
                                </div>
                                <div class="col">
                                    <label for="work_experience[date_1]"
                                           class="col-form-label text-md-left">
                                        Duration (Year from… to …)
                                    </label>
                                </div>
                            </div>
                            @foreach(range(1, 4) as $key)
                                <div class="row mt-2">
                                    <div class="col">
                                        <input id="work_experience[institutes_{{ $key }}]" type="text"
                                               class="form-control"
                                               name="work_experience[institutes_{{ $key }}]"
                                               value="{{ old('work_experience[institutes_'. $key .']') }}"
                                               {{ $loop->first ? 'required' : '' }}/>
                                    </div>
                                    <div class="col">
                                        <input id="work_experience[designation_{{ $key }}]" type="text"
                                               class="form-control"
                                               name="work_experience[designation_{{ $key }}]"
                                               value="{{ old('work_experience[designation_'. $key .']') }}"
                                               {{ $loop->first ? 'required' : '' }}/>
                                    </div>
                                    <div class="col">
                                        <input id="work_experience[date_{{ $key }}]" type="text"
                                               class="form-control"
                                               name="work_experience[date_{{ $key }}]"
                                               value="{{ old('work_experience[date_'. $key .']') }}"
                                               {{ $loop->first ? 'required' : '' }}/>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <p><i>(Post Qualifying Experience will be considered)</i></p>


                    <h5><span class="field-number">04</span></h5>
                    <div class="form-group row">
                        <label for="found_guilty_by_court_of_law"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">4.1</span> Have you been found guilty by court of Law ?
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
                            <span class="field-number">4.2</span> If so, give details
                        </label>
                        <div class="col-md-6">
                            <input id="found_guilty_by_court_of_law_details" type="text"
                                   class="form-control @error('found_guilty_by_court_of_law_details') is-invalid @enderror"
                                   name="found_guilty_by_court_of_law_details"
                                   value="{{ old('found_guilty_by_court_of_law_details') }}"
                                   required/>
                            @error('found_guilty_by_court_of_law_details')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <h5><span class="field-number">05.</span></h5>
                    <div class="form-group row">
                        <label for="holding_a_post_in_the_public_service"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">5.1</span> Are you holding a post in the Public Service?
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
                            <span class="field-number">5.2.</span> If so, give details
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

                    <h5><span class="field-number">06.</span></h5>
                    <div class="form-group row">
                        <label for="dismissed_or_removed_from_public_service"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">6.1.</span> Have you been dismissed from the Public Service/ Have
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

                    <h5><span class="field-number">07.</span></h5>
                    <div class="form-group row">
                        <label for="profile_picture"
                               class="col-md-4 col-form-label text-md-left">
                            <span class="field-number">7.1.</span> Personal Photo
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
                            <span class="field-number">7.2.</span> Photos of certificate/s of basic education qualifications
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
                            <span class="field-number">7.3.</span> Experience letter/s
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
                            <small>You can select multiple files at once. (Photos / PDF / Word / Text)
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
