<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">
    <style>
        body {
            font-family: 'Abhaya Libre', serif;
            background-color: rgb(241, 247, 251);
            font-size: 18px;
        }

        #first_page {
        }

        #first_page .btn {
            font-size: 20px;
        }

        #first_page .card-header {
            padding: 10px 20px;
        }

        #first_page ul li {
            margin: 0 0 15px 0;
        }

        #first_page ul li:last-child {
            margin: 0;
        }

        .floating-menu {
            position: fixed;
            top: 30px;
            right: 0;
            width: 40px;
            border: 1px solid #ced4da;
        }

        .font-sm, body.font-sm, html.font-sm {
            font-size: 13px;
        }

        .font-md, body.font-md, html.font-md {
            font-size: 16px;
        }

        .font-lg, body.font-lg, html.font-lg {
            font-size: 19px;
        }

        .btn-primary {
            padding: 15px 30px;
            font-weight: 800;
            font-size: 20px;
        }

        .card {
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #eff2f7;
            border-radius: .375rem;
            position: relative;
            margin-bottom: 2rem;
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, .03);
        }

        .card .card-header {
            border-bottom: none;
            background: #f8f9fa;
        }

        .card-header:first-child {
            border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
        }

        .card-header .number {
            color: #adb5bd;
            font-size: 1.5rem;
            font-weight: 700;
        }

        h2 {
            font-size: 1.5rem !important;
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-check {
            margin-bottom: 15px;
            margin-left: 20px;
        }

        label {
            margin-bottom: 12px;
        }

        .form-control {
            border: 1px solid #bdc9d5;
        }

        @media print {
            .alert.alert-success, .btn, .no-print {
                display: none;
                height: 0 !important;
            }

            .card-body {
                box-shadow: none;
                border: none;
            }

            input, textarea {
                border: none;
            }
        }

        .printable {
            margin: 0 !important;
            padding: 0 !important;
        }


    </style>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" title="{{ config('app.name', 'Laravel') }}" class="img-fluid">
            </a>
        </div>
    </nav>
    <main>
        <header class="bg-primary text-white py-5 printable">
            <div class="container text-center">
                <h1>කර්මාන්ත අමාත්‍යාංශය මගින් ක්‍රියාත්මක කිරීමට යෝජිත කර්මාන්ත යථාවත් කිරීමේ සහන වැඩසටහන</h1>
            </div>
        </header>
        @if(!request()->has('form'))
            <section id="first_page" class="container mt-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title mb-4">තෝරා ගැනීමේ නියමයන් හා කොන්දේසි</h2>
                        <ul>
                            <li>ඔබ ක්ෂුද්‍ර , සුළු හෝ මධ්‍ය පරිමාණ කර්මාන්තකරුවකු වීම.</li>
                            <li>ඔබගේ ව්‍යාපාරය නමින් මේ වන විට විධිමත් බැංකු ණය/කල්බදු/ක්ෂ්‍රද්‍ර මූල්‍ය ණය/සමෘද්ධි
                                බැංකු හෝ
                                සමූපකාර
                                ණය/වෙනත් අවිධිමත් ණය පැවතීම.
                            </li>
                            <li>2019 අප්‍රේල් මස පාස්කු ප්‍රහාරය / 2020 මාර්තු මස සිට මේ දක්වා ඇතිවී තිබෙන කෝවිඩ් වසංගත
                                තත්වය තම
                                ව්‍යාපාරයට අහිතකර අන්දමින් බලපාතිබීම.
                            </li>
                            <li>නිරවද්‍යතාව තහවුරු කරගැනීම සදහා බැංකු තොරතුරු ලබා ගනු ඇත.</li>
                            <li>තෝරා ගැනීම ස්වාධීන කමිටුවක් මගින් සිදු කරනු ඇත.</li>
                            <li>තෝරා ගැනීම සදහා කුමන ආකාරයකින් හෝ බලපෑම් කිරීම නුසුදුසු කමක් සේ සලකනු ඇත.</li>
                            <li>අසත්‍ය තොරතුරු සැපයීම අයදුම්පත අවලංගු වීමට හේතුවේ.</li>
                        </ul>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <h2 class="card-title mb-4">අයදුම්පත්‍රය පිරවීම සදහා උපදෙස්</h2>
                        <ul>
                            <li>ඔබ ආයතනය පිළිබඳ සත්‍ය තොරතුරු පමණක් මෙම අයදුම්පත්‍රය සමග ඉදිරිපත් කරන්න. සියලු තොරතුරු
                                වල
                                රහස්‍යභාවය ආරක්ෂා කෙරෙන බව සලකන්න.
                            </li>
                            <li>
                                මෙම අයදුම්පත පිරවීමේදි යම් අපහසුතාවයක් හෝ පැහැදිලි කිරීමක් අවශ්‍යය නම් ඔබ අයත් වන
                                දිස්ත්‍රික් ලේකම් / ප්‍රාදේශිය ලේකම් කාර්යාලයේ ජාතික ව්‍යවසාය සංවර්ධන අධිකාරියේ
                                ප්‍රාදේශිය
                                ව්‍යවසාය සංවර්ධන නිලධාරින් විසින් හෝ ජාතික ව්‍යවසාය සංවර්ධන අධිකාරියේ ප්‍රධාන කාර්යාලයේ
                                පහත
                                දුරකථන අංක ඇමතීමෙන් ලබා ගත හැකිය.
                                <br/> <br/>
                                සශික ද මෙල් මහතා - 071 833 3924 / 011 360 1592
                                <br/><br/>
                                පී.එස්. සේරසිංහ මිය - 011 592 2970
                                <br/><br/>
                                ඒ.බී.ලතීෆ් මහතා (දෙමළ මාධ්‍ය) - 077 685 5738
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="{{ route('form.back_to_business') }}?form=view" class="btn btn-primary mt-4">
                            ඉදිරියට යන්න
                        </a>
                    </div>
                </div>
            </section>
        @elseif(request()->get('form') === 'view')
            <section class="py-5 main-content">
                <div class="container py-5">
                    <div class="row no-print">
                        <div class="col">
                            <div class="alert alert-warning" style="font-size: 20px;">
                                එක් ව්‍යාපාරයක් සඳහා එක් පෝර්මයක් බැගින් පිරවීමට කාරුණික වන්න
                            </div>
                        </div>
                    </div>

                    <div class="row no-print">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col text-right">
                                            <button onclick="window.print()" class="btn btn-success"
                                                    style="height: 40px;">මුද්‍රණය කරන්න
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="{{ route('form.back_to_business.save') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="registration_id">ඉල්ලුම්පත්රයේ අංකය</label>
                                                    <input type="text" class="form-control" id="registration_id"
                                                           name="registration_id"
                                                           placeholder="ඉල්ලුම්පත්රයේ අංකය" maxlength="255"/>
                                                    <small>ඔබට යෙදුම් අංකයක් නොමැති නම්, මෙය හිස්ව තබන්න</small>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="district">දිස්ත්‍රික්කය</label>
                                                    <input type="text" class="form-control" id="district"
                                                           name="district"
                                                           placeholder="දිස්ත්‍රික්කය" maxlength="255" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="divisional_secretariat">ප්‍රාදේශීය ලේකම්
                                                        කොට්ඨාශය</label>
                                                    <input type="text" class="form-control" id="divisional_secretariat"
                                                           name="divisional_secretariat"
                                                           placeholder="ප්‍රාදේශීය ලේකම් කොට්ඨාශය" maxlength="255"
                                                           />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="gn_division">ග්‍රාම නිලධාරි වසම</label>
                                                    <input type="text" class="form-control" id="gn_division"
                                                           name="gn_division"
                                                           placeholder="ග්‍රාම නිලධාරි වසම  " maxlength="255" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="name">1. සම්පුර්ණ නම</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                   placeholder="සම්පුර්ණ නම" maxlength="255" />
                                        </div>

                                        <div class="form-group">
                                            <label for="address">2. ස්ථීර ලිපිනය</label>
                                            <textarea class="form-control" id="address" name="address"
                                                      placeholder="ස්ථීර ලිපිනය" maxlength="255" cols="30" rows="2"
                                                      ></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="national_identification_card_no">3. ජාතික හැදුනුම්පත්
                                                අංකය</label>
                                            <input type="text" class="form-control" id="national_identification_card_no"
                                                   name="national_identification_card_no"
                                                   placeholder="ජාතික හැදුනුම්පත් අංකය" maxlength="255" />
                                        </div>

                                        <div class="form-group">
                                            <label for="birthday">4. ව්‍යාපාර හිමිකරුගේ උපන් දිනය</label>
                                            <div class="row">
                                                <div class="col">
                                                    <select name="birthday_range" id="birthday_range" class="form-control">
                                                        <option value="less_than_25">අවුරුදු 25 ට අඩු</option>
                                                        <option value="between_26_and_40">අවුරුදු 26 ත් 40 ත් අතර</option>
                                                        <option value="between_41_and_60">අවුරුදු 41 ත් 60 ත් අතර</option>
                                                        <option value="greater_than_60">අවුරුදු 60 ට වැඩි</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row d-none">
                                                <div class="col">
                                                    <select name="date" id="date" class="form-control">
                                                        <option value="" selected disabled>දිනය</option>
                                                        @foreach(range(1, 31) as $date)
                                                            <option value="{{ $date }}">{{ $date }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col">
                                                    <select name="month" id="month" class="form-control">
                                                        <option value="" selected disabled>මාසය</option>
                                                        @foreach(range(1, 12) as $month)
                                                            <option value="{{ $month }}">{{ $month }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col">
                                                    <select name="year" id="year" class="form-control">
                                                        <option value="" selected disabled>වසර</option>
                                                        @foreach(range(1945, (date('Y') - 18)) as $date)
                                                            <option value="{{ $date }}">{{ $date }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="gender">5. ස්ත්‍රී / පුරුෂ භාවය</label>

                                            <select name="gender" id="gender" class="form-control" >
                                                <option value="" selected disabled>-</option>
                                                <option value="male">පුරුෂ</option>
                                                <option value="female">ස්ත්‍රී</option>
                                            </select>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="mobile">6.1 ජංගම දුරකථන අංකය</label>
                                                <input type="text" class="form-control" id="mobile"
                                                       name="mobile"
                                                       placeholder="ජංගම දුරකථන අංකය" maxlength="255" />
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="phone">6.2 ස්ථාවර දුරකථන අංකය</label>
                                                <input type="text" class="form-control" id="phone"
                                                       name="phone"
                                                       placeholder="ස්ථාවර දුරකථන අංකය" maxlength="255"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">7. විද්‍යුත් තැපැල් ලිපිනය</label>
                                            <input type="email" class="form-control" id="email"
                                                   name="email"
                                                   placeholder="විද්‍යුත් තැපැල් ලිපිනය"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="business_name">8. ව්‍යාපාර නාමය</label>
                                            <input type="text" class="form-control" id="business_name"
                                                   name="business_name"
                                                   placeholder="ව්‍යාපාර නාමය" maxlength="255" />
                                        </div>

                                        <div class="form-group">
                                            <label>9. එම ව්‍යාපාරය ලියාපදිංචි කර ඇත්නම් (ලියාපදිංචි සහතිකයේ පිටපත
                                                ඉදිරිපත් කළ යුතුය).</label>
                                            <div class="row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <label for="business_registration_number">
                                                        <small>9.1</small> ව්‍යාපාර ලියාපදිංචි අංකය
                                                    </label>
                                                    <input type="text" class="form-control"
                                                           id="business_registration_number"
                                                           name="business_registration_number"
                                                           placeholder="ව්‍යාපාර ලියාපදිංචි අංකය" maxlength="255"
                                                           />
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <label for="business_start_date">
                                                        <small>9.2</small> ලියාපදිංචි කල වර්ෂය
                                                    </label>
                                                    <select name="business_start_date" id="business_start_date"
                                                            class="form-control" >
                                                        <option value="" selected disabled>ලියාපදිංචි කල වර්ෂය</option>
                                                        @foreach(range(1945, date('Y')) as $date)
                                                            <option value="{{ $date }}">{{ $date }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="legal_nature_of_business">
                                                10. ව්‍යාපාර ලියාපදිංචියේ ස්වභාවය
                                            </label>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="legal_nature_of_business" value="sole_proprietor"
                                                       id="individual_business" />
                                                <label class="form-check-label" for="individual_business">තනි පුද්ගල
                                                    ව්‍යාපාරයකි</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="legal_nature_of_business" value="partnership"
                                                       id="partnership"/>
                                                <label class="form-check-label" for="partnership">හවුල්
                                                    ව්‍යාපාරයකි</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="legal_nature_of_business" value="public_company"
                                                       id="public_company"/>
                                                <label class="form-check-label" for="public_company">
                                                    මහජන සමාගමකි
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="legal_nature_of_business" value="private_company"
                                                       id="private_company"/>
                                                <label class="form-check-label" for="private_company">
                                                    පුද්ගලික සමාගම
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="legal_nature_of_business" value="not_yet_registered"
                                                       id="not_yet_registered"/>
                                                <label class="form-check-label" for="not_yet_registered">
                                                    තවම ලියාපදිංචි කර නොමැත
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="legal_nature_of_business" value="other"
                                                       id="other"/>
                                                <label class="form-check-label" for="other">
                                                    වෙනත්
                                                </label>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="primary_industry">
                                                11. ඔබගේ ව්‍යාපාරයේ මුලික ව්‍යාපාර / කර්මාන්ත අංශය තෝරන්න
                                            </label>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="primary_industry"
                                                       value="accommodation-and-food-service-activities"
                                                       id="accommodation-and-food-service-activities" />
                                                <label class="form-check-label"
                                                       for="accommodation-and-food-service-activities">
                                                    නවාතැන් හා ආහාර සැපයීමේ සේවා
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="primary_industry"
                                                       value="administrative-and-support-service-activities"
                                                       id="administrative-and-support-service-activities"/>
                                                <label class="form-check-label"
                                                       for="administrative-and-support-service-activities">
                                                    පරිපාලන හා සහාය සේවා
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="primary_industry" value="agriculture-forestry-and-fishing"
                                                       id="agriculture-forestry-and-fishing"/>
                                                <label class="form-check-label" for="agriculture-forestry-and-fishing">
                                                    කෘෂිකර්මය, වනය ආශ්‍රීත ව්‍යාපාර, ධීවර කර්මාන්තය
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="primary_industry"
                                                       value="activities-of-extraterritorial-organizations-and-bodies"
                                                       id="activities-of-extraterritorial-organizations-and-bodies"/>
                                                <label class="form-check-label"
                                                       for="activities-of-extraterritorial-organizations-and-bodies">
                                                    ජාත්‍යන්තර ආයතන වල ක්‍රියාකාරිත්වය
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="primary_industry"
                                                       value="activities-of-households-as-employers-undifferentiated-goods-and-services-producing-activities-of-households-for-own-use"
                                                       id="activities-of-households-as-employers-undifferentiated-goods-and-services-producing-activities-of-households-for-own-use"/>
                                                <label class="form-check-label"
                                                       for="activities-of-households-as-employers-undifferentiated-goods-and-services-producing-activities-of-households-for-own-use">
                                                    ගෘහ සේවය සහ තමන්ගේ භාවිතය සදහා ගෘහස්ත මට්ටමෙන් භාණ්ඩ/සේවා නිෂ්පාදනය
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="primary_industry" value="arts-entertainment-and-recreation"
                                                       id="arts-entertainment-and-recreation"/>
                                                <label class="form-check-label" for="arts-entertainment-and-recreation">
                                                    කළාව හා විනෝදාස්වාදය
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="primary_industry" value="construction" id="construction"/>
                                                <label class="form-check-label" for="construction">
                                                    ඉදිකිරිම්
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="primary_industry" value="education" id="education"/>
                                                <label class="form-check-label" for="education">
                                                    අධ්‍යාපන
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="primary_industry"
                                                       value="electricity-gas-steam-and-air-conditioning-supply"
                                                       id="electricity-gas-steam-and-air-conditioning-supply"/>
                                                <label class="form-check-label"
                                                       for="electricity-gas-steam-and-air-conditioning-supply">
                                                    විදුලිය, ගෑස්, තාප සහ වායුසමීකරණ සේවා
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="primary_industry"
                                                       value="financial-and-insurance-activities"
                                                       id="financial-and-insurance-activities"/>
                                                <label class="form-check-label"
                                                       for="financial-and-insurance-activities">
                                                    මුල්‍ය හා රක්ෂණ සේවා
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="primary_industry"
                                                       value="human-health-and-social-work-activities"
                                                       id="human-health-and-social-work-activities"/>
                                                <label class="form-check-label"
                                                       for="human-health-and-social-work-activities">
                                                    මානව සෞඛ්‍යය සහ සමාජ සේවා කටයුතු
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="primary_industry" value="information-and-communication"
                                                       id="information-and-communication"/>
                                                <label class="form-check-label" for="information-and-communication">
                                                    තොරතුරු හා සන්නිවේදනය
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="primary_industry" value="manufacturing"
                                                       id="manufacturing"/>
                                                <label class="form-check-label" for="manufacturing">
                                                    නිෂ්පාදනය
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="primary_industry" value="mining-and-quarrying"
                                                       id="mining-and-quarrying"/>
                                                <label class="form-check-label" for="mining-and-quarrying">
                                                    පතල් කැනීම් සහ ගල් කැනීම්
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="primary_industry" value="other-service-activities"
                                                       id="other-service-activities"/>
                                                <label class="form-check-label" for="other-service-activities">
                                                    අනෙකුත් සේවා කටයුතු
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="primary_industry"
                                                       value="public-administration-and-defence-compulsory-social-security"
                                                       id="public-administration-and-defence-compulsory-social-security"/>
                                                <label class="form-check-label"
                                                       for="public-administration-and-defence-compulsory-social-security">
                                                    මහජන පරිපාලනය, ආරක්ෂාව, අත්‍යවශ්‍ය සමාජ ආරක්ෂණය
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="primary_industry" value="real-estate-activities"
                                                       id="real-estate-activities"/>
                                                <label class="form-check-label" for="real-estate-activities">
                                                    දේපල සහ නිවාස ව්‍යාපාර
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="primary_industry" value="transportation-and-storage"
                                                       id="transportation-and-storage"/>
                                                <label class="form-check-label" for="transportation-and-storage">
                                                    ප්‍රවාහන සහ ගබඩා කිරීම
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="primary_industry"
                                                       value="water-supply-sewerage-waste-management-and-remediation-activities"
                                                       id="water-supply-sewerage-waste-management-and-remediation-activities"/>
                                                <label class="form-check-label"
                                                       for="water-supply-sewerage-waste-management-and-remediation-activities">
                                                    ජල සම්පාදනය, මළ ද්‍රව්‍ය, අපද්‍රව්‍ය කලමණාකරණය සහ ප්‍රතිකර්ම කටයුතු
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="primary_industry"
                                                       value="wholesale-and-retail-trade-repair-of-motor-vehicles-and-motorcycles"
                                                       id="wholesale-and-retail-trade-repair-of-motor-vehicles-and-motorcycles"/>
                                                <label class="form-check-label"
                                                       for="wholesale-and-retail-trade-repair-of-motor-vehicles-and-motorcycles">
                                                    තොග සහ සිල්ලර වෙළදාම, මෝටර් වාහන සහ යතුරු පැදි අලුත්වැඩියාව
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="primary_industry" value="primary_industry_other"
                                                       id="primary_industry_other"/>
                                                <label class="form-check-label" for="primary_industry_other">
                                                    වෙනත්
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="business_description">
                                                12. ඔබගේ නිෂ්පාදනය පිළිබඳව සැකෙවින් විස්තර කරන්න
                                            </label>
                                            <textarea type="text" class="form-control" id="business_description"
                                                      name="business_description"
                                                      placeholder="ඔබගේ නිෂ්පාදනය පිළිබඳව සැකෙවින් විස්තර කරන්න"
                                                      ></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="business_operational_period">
                                                13. ආරම්භයේ සිට මේ දක්වා කොපමණ කාලයක් ඔබගේ ව්‍යාපාරය
                                                ක්‍රියාත්මක වෙනවාද?
                                            </label>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="business_operational_period"
                                                       value="less_than_one_year"
                                                       id="less_than_one_year"/>
                                                <label class="form-check-label"
                                                       for="less_than_one_year">
                                                    වසරකට වඩා අඩුයි
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="business_operational_period"
                                                       value="one_to_two_years"
                                                       id="one_to_two_years"/>
                                                <label class="form-check-label"
                                                       for="one_to_two_years">
                                                    වසර 1 - 2ත් අතර
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="business_operational_period"
                                                       value="two_to_five_years"
                                                       id="two_to_five_years"/>
                                                <label class="form-check-label"
                                                       for="two_to_five_years">
                                                    වසර 2 - 5ත් අතර
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="business_operational_period"
                                                       value="five_to_ten_years"
                                                       id="five_to_ten_years"/>
                                                <label class="form-check-label"
                                                       for="five_to_ten_years">
                                                    වසර 5 - 10ත් අතර
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="business_operational_period"
                                                       value="ten_or_more_years"
                                                       id="ten_or_more_years"/>
                                                <label class="form-check-label"
                                                       for="ten_or_more_years">
                                                    වසර 10 ට වැඩි
                                                </label>
                                            </div>


                                        </div>

                                        <div class="form-group">
                                            <label for="focus_market">
                                                14. ව්‍යාපාරයේ අලෙවි කටයුතු සිදුකරනුයේ
                                            </label>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="focus_market"
                                                       value="local"
                                                       id="local"/>
                                                <label class="form-check-label"
                                                       for="local">
                                                    රටතුළ
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="focus_market"
                                                       value="international"
                                                       id="international"/>
                                                <label class="form-check-label"
                                                       for="international">
                                                    ජාත්‍යන්තරව
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="focus_market"
                                                       value="local_and_international"
                                                       id="local_and_international"/>
                                                <label class="form-check-label"
                                                       for="local_and_international">
                                                    රටතුළ හා ජාත්‍යන්තරව
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="customers_before_terrorist_attacks_and_covid">
                                                15. පාස්කූ ප්‍රහාරය /කොවිඩ් 19 වසංගතයට <b>පෙර</b> ඔබගේ ව්‍යාපාරය
                                                මගින් මාසිකව සේවය සලසන ලද ගනුදෙනුදෙනුකරුවන් ගණන කොපමණද?
                                            </label>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="customers_before_terrorist_attacks_and_covid"
                                                       value="less_than_99_customers"
                                                       id="less_than_99_customers"/>
                                                <label class="form-check-label"
                                                       for="less_than_99_customers">
                                                    ගණුදෙනුකරුවන් 99 වඩා අඩුවෙන්
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="customers_before_terrorist_attacks_and_covid"
                                                       value="100_to_499_customers"
                                                       id="100_to_499_customers"/>
                                                <label class="form-check-label"
                                                       for="100_to_499_customers">
                                                    100 - 499 අතර
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="customers_before_terrorist_attacks_and_covid"
                                                       value="500_to_1000_customers"
                                                       id="500_to_1000_customers"/>
                                                <label class="form-check-label"
                                                       for="500_to_1000_customers">
                                                    500 - 1000 අතර
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="customers_before_terrorist_attacks_and_covid"
                                                       value="1001_to_5000_customers"
                                                       id="1001_to_5000_customers"/>
                                                <label class="form-check-label"
                                                       for="1001_to_5000_customers">
                                                    1001 - 5,000 අතර
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="customers_before_terrorist_attacks_and_covid"
                                                       value="more_than_10000_customers"
                                                       id="more_than_10000_customers"/>
                                                <label class="form-check-label"
                                                       for="more_than_10000_customers">
                                                    10,000 වැඩි
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="customers_after_terrorist_attacks_and_covid">
                                                16. පාස්කූ ප්‍රහාරය / කොවිඩ් 19 වසංගතයට <b>පසු</b> ඔබගේ
                                                ව්‍යාපාරය
                                                මගින් මාසිකව සේවය සලසන ලද ගනු දෙනුදෙනු කරුවන් අඩුවීම සටහන් කරන්න.
                                                ගනුදෙනු කරුවන්ගේ;
                                            </label>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="customers_after_terrorist_attacks_and_covid"
                                                       value="no_change"
                                                       id="no_change"/>
                                                <label class="form-check-label"
                                                       for="no_change">
                                                    අඩුවීමක් නැත
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="customers_after_terrorist_attacks_and_covid"
                                                       value="10_percent_change"
                                                       id="10_percent_change"/>
                                                <label class="form-check-label"
                                                       for="10_percent_change">
                                                    10% වඩා අඩු වී ඇත
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="customers_after_terrorist_attacks_and_covid"
                                                       value="11_to_30_percent_change"
                                                       id="11_to_30_percent_change"/>
                                                <label class="form-check-label"
                                                       for="11_to_30_percent_change">
                                                    11% - 30% අඩු වී ඇත
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="customers_after_terrorist_attacks_and_covid"
                                                       value="31_50_percent_change"
                                                       id="31_50_percent_change"/>
                                                <label class="form-check-label"
                                                       for="31_50_percent_change">
                                                    31% - 50% අඩු වී ඇත
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="customers_after_terrorist_attacks_and_covid"
                                                       value="51_to_70_percent_change"
                                                       id="51_to_70_percent_change"/>
                                                <label class="form-check-label"
                                                       for="51_to_70_percent_change">
                                                    51% - 70% අඩු වී ඇත
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="customers_after_terrorist_attacks_and_covid"
                                                       value="71_to_90_percent_change"
                                                       id="71_to_90_percent_change"/>
                                                <label class="form-check-label"
                                                       for="71_to_90_percent_change">
                                                    71% - 90% අඩු වී ඇත
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="customers_after_terrorist_attacks_and_covid"
                                                       value="more_than_91_percent_change"
                                                       id="more_than_91_percent_change"/>
                                                <label class="form-check-label"
                                                       for="more_than_91_percent_change">
                                                    91% වඩා අඩු වී ඇත
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="customers_after_terrorist_attacks_and_covid"
                                                       value="has_changed"
                                                       id="has_changed"/>
                                                <label class="form-check-label"
                                                       for="has_changed">
                                                    වැඩි වී ඇත
                                                </label>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="annual_gross_income_for_the_last_three_years">
                                                17. පසුගිය වසර තුන පිළිබද සලකා වාර්ෂික දළ ආදායම (රුපියල්
                                                මිලියන)
                                            </label>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="annual_gross_income_for_the_last_three_years"
                                                       value="less_than_one"
                                                       id="less_than_one"/>
                                                <label class="form-check-label"
                                                       for="less_than_one">
                                                    1 වඩා අඩුය
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="annual_gross_income_for_the_last_three_years"
                                                       value="between_one_to_three"
                                                       id="between_one_to_three"/>
                                                <label class="form-check-label"
                                                       for="between_one_to_three">
                                                    1 - 3 අතර
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="annual_gross_income_for_the_last_three_years"
                                                       value="between_three_to_six"
                                                       id="between_three_to_six"/>
                                                <label class="form-check-label"
                                                       for="between_three_to_six">
                                                    3 - 6 අතර
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="annual_gross_income_for_the_last_three_years"
                                                       value="between_six_to_ten"
                                                       id="between_six_to_ten"/>
                                                <label class="form-check-label"
                                                       for="between_six_to_ten">
                                                    6 - 10 අතර
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="annual_gross_income_for_the_last_three_years"
                                                       value="between_ten_to_twenty_five"
                                                       id="between_ten_to_twenty_five"/>
                                                <label class="form-check-label"
                                                       for="between_ten_to_twenty_five">
                                                    10 - 25 අතර
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="annual_gross_income_for_the_last_three_years"
                                                       value="between_twenty_five_to_fifty"
                                                       id="between_twenty_five_to_fifty"/>
                                                <label class="form-check-label"
                                                       for="between_twenty_five_to_fifty">
                                                    25 - 50 අතර
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="annual_gross_income_for_the_last_three_years"
                                                       value="between_fifty_to_one_hundred"
                                                       id="between_fifty_to_one_hundred"/>
                                                <label class="form-check-label"
                                                       for="between_fifty_to_one_hundred">
                                                    50 - 100 අතර
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="annual_gross_income_for_the_last_three_years"
                                                       value="more_than_one_hundred"
                                                       id="more_than_one_hundred"/>
                                                <label class="form-check-label"
                                                       for="more_than_one_hundred">
                                                    100 වඩා වැඩියෙන්
                                                </label>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="difference_of_gross_income_for_the_last_three_years">
                                                18. පාස්කූ ප්‍රහාරය / කොවිඩ් 19 වසංගතයේ බලපෑම හේතුවෙන්
                                                ඔබගේ ව්‍යාපාරයේ ආදායම් තත්ත්වය පසුගිය වසර තුනේ දළ මාසික ආදායම් වල
                                                සාමාන්‍ය සමග සැසඳීමේදී සිදුවී ඇති වෙනස සටහන් කරන්න.
                                            </label>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="difference_of_gross_income_for_the_last_three_years"
                                                       value="no_change"
                                                       id="no_change"/>
                                                <label class="form-check-label"
                                                       for="no_change">
                                                    වෙනසක් නැත
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="difference_of_gross_income_for_the_last_three_years"
                                                       value="ten_percent_difference"
                                                       id="ten_percent_difference"/>
                                                <label class="form-check-label"
                                                       for="ten_percent_difference">
                                                    10% ක ප්‍රමාණයකින් අඩු වී ඇත
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="difference_of_gross_income_for_the_last_three_years"
                                                       value="eleven_to_thrity_percent_difference"
                                                       id="eleven_to_thrity_percent_difference"/>
                                                <label class="form-check-label"
                                                       for="eleven_to_thrity_percent_difference">
                                                    11% - 30% ප්‍රමාණයකින් අඩු වී ඇත
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="difference_of_gross_income_for_the_last_three_years"
                                                       value="thirty_one_to_fifty_percent_difference"
                                                       id="thirty_one_to_fifty_percent_difference"/>
                                                <label class="form-check-label"
                                                       for="thirty_one_to_fifty_percent_difference">
                                                    31% - 50% ප්‍රමාණයකින් අඩු වී ඇත
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="difference_of_gross_income_for_the_last_three_years"
                                                       value="fifty_one_to_seventy_percent_difference"
                                                       id="fifty_one_to_seventy_percent_difference"/>
                                                <label class="form-check-label"
                                                       for="fifty_one_to_seventy_percent_difference">
                                                    51% - 70% ප්‍රමාණයකින් අඩු වී ඇත
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="difference_of_gross_income_for_the_last_three_years"
                                                       value="seventy_one_to_ninty_percent_difference"
                                                       id="seventy_one_to_ninty_percent_difference"/>
                                                <label class="form-check-label"
                                                       for="seventy_one_to_ninty_percent_difference">
                                                    71% - 90% ප්‍රමාණයකින් අඩු වී ඇත
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="difference_of_gross_income_for_the_last_three_years"
                                                       value="ninety_one_percent_difference"
                                                       id="ninety_one_percent_difference"/>
                                                <label class="form-check-label"
                                                       for="ninety_one_percent_difference">
                                                    91% ප්‍රමාණයකින් අඩු වී ඇත
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="difference_of_gross_income_for_the_last_three_years"
                                                       value="income_has_increased"
                                                       id="income_has_increased"/>
                                                <label class="form-check-label"
                                                       for="income_has_increased">
                                                    මාසික ආදායම වැඩි වී ඇත
                                                </label>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label>19. පාස්කූ ප්‍රහාරය / කොවිඩ් 19 වසංගත තත්ත්වයට <b>පෙර</b> ඔබ ආයතනයේ
                                                කොපමණ සේවක සංඛ්‍යාවක් සේවය කළාද?</label>
                                            <div class="row mt-2">
                                                <div class="form-group col-md-6 mb-0">
                                                    <label
                                                            for="full_time_employees_before_terrorist_attacks_and_covid">
                                                        පුර්ණ කාලීන සේවකයන් ගණන
                                                    </label>
                                                    <input type="number" class="form-control"
                                                           id="full_time_employees_before_terrorist_attacks_and_covid"
                                                           name="full_time_employees_before_terrorist_attacks_and_covid"
                                                           placeholder="පුර්ණ කාලීන සේවකයන් ගණන"/>
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <label
                                                            for="part_time_employees_before_terrorist_attacks_and_covid">
                                                        අර්ධ කාලීන සේවකයන් ගණන
                                                    </label>
                                                    <input type="number" class="form-control"
                                                           id="part_time_employees_before_terrorist_attacks_and_covid"
                                                           name="part_time_employees_before_terrorist_attacks_and_covid"
                                                           placeholder="අර්ධ කාලීන සේවකයන් ගණන"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>20. පාස්කූ ප්‍රහාරය / කොවිඩ් 19 වසංගත තත්ත්වයට <b>පසු</b> කොපමණ සේවක
                                                සංඛ්‍යාවක් සේවය කරනු ලබන්නේද?</label>

                                            <div class="row mt-2">
                                                <div class="form-group col-md-6 mb-0">
                                                    <label
                                                            for="full_time_employees_after_terrorist_attacks_and_covid">
                                                        පුර්ණ කාලීන සේවකයන් ගණන
                                                    </label>
                                                    <input type="number" class="form-control"
                                                           id="full_time_employees_after_terrorist_attacks_and_covid"
                                                           name="full_time_employees_after_terrorist_attacks_and_covid"
                                                           placeholder="පුර්ණ කාලීන සේවකයන් ගණන"/>
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <label
                                                            for="part_time_employees_after_terrorist_attacks_and_covid">
                                                        අර්ධ කාලීන සේවකයන් ගණන
                                                    </label>
                                                    <input type="number" class="form-control"
                                                           id="part_time_employees_after_terrorist_attacks_and_covid"
                                                           name="part_time_employees_after_terrorist_attacks_and_covid"
                                                           placeholder="අර්ධ කාලීන සේවකයන් ගණන"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="impact_on_business_after_terrorist_attacks_and_covid">
                                                21. පාස්කූ ප්‍රහාරය /කොවිඩ් 19 වසංගත තත්ත්වයට පසුව ඔබගේ
                                                ව්‍යාපාරයට කිසියම් බලපෑමක් සිදුව ඇති නම් එම කරුණු සියල්ල පහත සදහන් කර
                                                ඇති වගන්ති අතරින් තෝරා ලකුණු කරන්න.
                                            </label>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="impact_on_business_after_terrorist_attacks_and_covid"
                                                       value="operating_normally"
                                                       id="operating_normally"/>
                                                <label class="form-check-label"
                                                       for="operating_normally">
                                                    සාමාන්‍ය පරිදි ක්‍රියාත්මක වෙමින් පවති
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="impact_on_business_after_terrorist_attacks_and_covid"
                                                       value="operating_with_modifications_and_limitations"
                                                       id="operating_with_modifications_and_limitations"/>
                                                <label class="form-check-label"
                                                       for="operating_with_modifications_and_limitations">
                                                    වෙනස්කම් සහ සීමා සහිතව ක්‍රියාත්මක කරයි
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="impact_on_business_after_terrorist_attacks_and_covid"
                                                       value="operating_with_massive_modifications_and_limitations"
                                                       id="operating_with_massive_modifications_and_limitations"/>
                                                <label class="form-check-label"
                                                       for="operating_with_massive_modifications_and_limitations">
                                                    විශාල වෙනස්කම් (ක්‍රමය,ක්‍රියාවලිය, තාක්ෂණය ආදී) සහිතව
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="impact_on_business_after_terrorist_attacks_and_covid"
                                                       value="operating_with_diversification"
                                                       id="operating_with_diversification"/>
                                                <label class="form-check-label"
                                                       for="operating_with_diversification">
                                                    විවිධාංගීකරණය සහිතව ක්‍රියාත්මක වේ
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="impact_on_business_after_terrorist_attacks_and_covid"
                                                       value="temporarily_closed"
                                                       id="temporarily_closed"/>
                                                <label class="form-check-label"
                                                       for="temporarily_closed">
                                                    තාවකාලිකව වසා දමා ඇත
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="impact_on_business_after_terrorist_attacks_and_covid"
                                                       value="permanently_closed"
                                                       id="permanently_closed"/>
                                                <label class="form-check-label"
                                                       for="permanently_closed">
                                                    සම්පුර්ණයෙන්ම වසා දමා ඇත
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="impact_on_business_after_terrorist_attacks_and_covid"
                                                       value="impact_on_business_after_terrorist_attacks_and_covidother"
                                                       id="impact_on_business_after_terrorist_attacks_and_covidother"/>
                                                <label class="form-check-label"
                                                       for="impact_on_business_after_terrorist_attacks_and_covidother">
                                                    වෙනත්
                                                </label>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="business_currently_has_loans_leases">
                                                22. ඔබගේ ව්‍යාපාරය මේවන විට ණය / කල්බදු පවතිනවාද?
                                            </label>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="business_currently_has_loans_leases"
                                                       value="yes"
                                                       id="business_currently_has_loans_leases_yes"/>
                                                <label class="form-check-label"
                                                       for="business_currently_has_loans_leases_yes">
                                                    ඔව්
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="business_currently_has_loans_leases"
                                                       value="no"
                                                       id="business_currently_has_loans_leases_no"/>
                                                <label class="form-check-label"
                                                       for="business_currently_has_loans_leases_no">
                                                    නැත
                                                </label>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="business_currently_has_formal_or_informal_loans">
                                                23. 'ඔව්' නම් , විධිමත්හෝ අවිධිමත් ණය ද යන්න කරුණාකර
                                                සලකුණු කරන්න.
                                            </label>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="business_currently_has_formal_or_informal_loans"
                                                       value="formal_loans"
                                                       id="formal_loans"/>
                                                <label class="form-check-label"
                                                       for="formal_loans">
                                                    බැංකු සහ මුල්‍ය ආයතන වලින් විධිමත් ණය
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="business_currently_has_formal_or_informal_loans"
                                                       value="informal_loans"
                                                       id="informal_loans"/>
                                                <label class="form-check-label"
                                                       for="informal_loans">
                                                    අවිධිමත් මුදල් ණය දෙන්නන්ගෙන් සහ වෙනත් පුද්ගලයන් ගෙන්
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="what_is_required_to_revitalize_the_business">
                                                24. ඔබගේ ව්‍යාපාරය නැවත යථා තත්ත්වයට පත් කිරීමට අවශ්‍යය
                                                වන්නේ,
                                            </label>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="what_is_required_to_revitalize_the_business"
                                                       value="concession_money"
                                                       id="concession_money"/>
                                                <label class="form-check-label"
                                                       for="concession_money">
                                                    සහන මුදලක්
                                                </label>
                                                <input type="number" class="form-control"
                                                       id="concession_money_amount"
                                                       name="concession_money_amount"
                                                       value="{{ old('concession_money_amount') }}"
                                                       placeholder="එහි වටිනාකම රු" maxlength="255"/>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="what_is_required_to_revitalize_the_business"
                                                       value="loan"
                                                       id="loan"/>
                                                <label class="form-check-label"
                                                       for="loan">
                                                    ණය මුදලක්
                                                </label>
                                                <input type="number" class="form-control"
                                                       id="loan_amount"
                                                       name="loan_amount"
                                                       value="{{ old('loan_amount') }}"
                                                       placeholder="එහි වටිනාකම රු" maxlength="255"/>
                                            </div>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="what_is_required_to_revitalize_the_business"
                                                       value="update_existing_credit"
                                                       id="update_existing_credit"/>
                                                <label class="form-check-label"
                                                       for="update_existing_credit">
                                                    පවතින ණය යාවත් කාලීන කිරීමක්
                                                </label>
                                                <input type="number" class="form-control"
                                                       id="credit_update_amount"
                                                       name="credit_update_amount"
                                                       value="{{ old('credit_update_amount') }}"
                                                       placeholder="එහි වටිනාකම රු" maxlength="255"/>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="bank_loan_information">
                                                25. ලබා ගෙන ඇති ණය පහසුකම් පිලිබඳ විස්තර: (ඔබ බැංකු /
                                                මූල්‍ය ආයතන කිහිපයකින් ණය ලබාගෙන ඇත්නම් ඒ බව වෙන වෙනම සදහන් කරන්න).
                                            </label>

                                            <div class="mb-4 row">
                                                <label class="form-check-label col" for="bank_and_branch_of_loan">
                                                    ඔබ ණය ලබාගත් බැංකුව හා බැංකු ශාඛාව
                                                </label>
                                                <input type="text" class="form-control col"
                                                       name="bank_and_branch_of_loan_one"
                                                       value="{{ old('bank_and_branch_of_loan_one') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                                <input type="text" class="form-control col mx-2"
                                                       name="bank_and_branch_of_loan_two"
                                                       value="{{ old('bank_and_branch_of_loan_two') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                                <input type="text" class="form-control col"
                                                       name="bank_and_branch_of_loan_three"
                                                       value="{{ old('bank_and_branch_of_loan_three') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                            </div>

                                            <div class="mb-4 row">
                                                <label class="form-check-label col" for="bank_credit_facility_number">
                                                    බැංකු ණය පහසුකම් අංකය
                                                </label>
                                                <input type="text" class="form-control col"
                                                       name="bank_credit_facility_number_one"
                                                       value="{{ old('bank_credit_facility_number_one') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                                <input type="text" class="form-control col mx-2"
                                                       name="bank_credit_facility_number_two"
                                                       value="{{ old('bank_credit_facility_number_two') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                                <input type="text" class="form-control col"
                                                       name="bank_credit_facility_number_three"
                                                       value="{{ old('bank_credit_facility_number_three') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                            </div>

                                            <div class="mb-4 row">
                                                <label class="form-check-label col" for="loan_scheme">
                                                    ණය යෝජනා ක්‍රමය
                                                </label>
                                                <input type="text" class="form-control col"
                                                       name="loan_scheme_one"
                                                       value="{{ old('loan_scheme_one') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                                <input type="text" class="form-control col mx-2"
                                                       name="loan_scheme_two"
                                                       value="{{ old('loan_scheme_two') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                                <input type="text" class="form-control col"
                                                       name="loan_scheme_three"
                                                       value="{{ old('loan_scheme_three') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                            </div>

                                            <div class="mb-4 row">
                                                <label class="form-check-label col"
                                                       for="year_and_month_of_obtaining_loan">
                                                    ණය ලබාගත් වර්ෂය සහ මාසය
                                                </label>
                                                <input type="text" class="form-control col"
                                                       name="year_and_month_of_obtaining_loan_one"
                                                       value="{{ old('year_and_month_of_obtaining_loan_one') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                                <input type="text" class="form-control col mx-2"
                                                       name="year_and_month_of_obtaining_loan_two"
                                                       value="{{ old('year_and_month_of_obtaining_loan_two') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                                <input type="text" class="form-control col"
                                                       name="year_and_month_of_obtaining_loan_three"
                                                       value="{{ old('year_and_month_of_obtaining_loan_three') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                            </div>

                                            <div class="mb-4 row">
                                                <label class="form-check-label col" for="total_loans_obtained">
                                                    ලබාගත් මුළු ණය ප්‍රමාණය (රු.)
                                                </label>
                                                <input type="text" class="form-control col"
                                                       name="total_loans_obtained_one"
                                                       value="{{ old('total_loans_obtained_one') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                                <input type="text" class="form-control col mx-2"
                                                       name="total_loans_obtained_two"
                                                       value="{{ old('total_loans_obtained_two') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                                <input type="text" class="form-control col"
                                                       name="total_loans_obtained_three"
                                                       value="{{ old('total_loans_obtained_three') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                            </div>

                                            <div class="mb-4 row">
                                                <label class="form-check-label col"
                                                       for="deposited_as_collateral_to_obtain_a_loan">
                                                    ණය ලබා ගැනීම සදහා ඇප වශයෙන් තැන්පත් කරණු ලැබුවේ?
                                                </label>
                                                <input type="text" class="form-control col"
                                                       name="deposited_as_collateral_to_obtain_a_loan_one"
                                                       value="{{ old('deposited_as_collateral_to_obtain_a_loan_one') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                                <input type="text" class="form-control col mx-2"
                                                       name="deposited_as_collateral_to_obtain_a_loan_two"
                                                       value="{{ old('deposited_as_collateral_to_obtain_a_loan_two') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                                <input type="text" class="form-control col"
                                                       name="deposited_as_collateral_to_obtain_a_loan_three"
                                                       value="{{ old('deposited_as_collateral_to_obtain_a_loan_three') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                            </div>

                                            <div class="mb-4 row">
                                                <label class="form-check-label col" for="term_of_the_loan">
                                                    ණය ලබාගෙන ඇති කාල සීමාව
                                                </label>
                                                <input type="text" class="form-control col"
                                                       name="term_of_the_loan_one"
                                                       value="{{ old('term_of_the_loan_one') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                                <input type="text" class="form-control col mx-2"
                                                       name="term_of_the_loan_two"
                                                       value="{{ old('term_of_the_loan_two') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                                <input type="text" class="form-control col"
                                                       name="term_of_the_loan_three"
                                                       value="{{ old('term_of_the_loan_three') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                            </div>

                                            <div class="mb-4 row">
                                                <label class="form-check-label col" for="year_month_loan_is_due">
                                                    ණය අවසන් වීමට නියමිත වර්ෂය හා මාසය
                                                </label>
                                                <input type="text" class="form-control col"
                                                       name="year_month_loan_is_due_one"
                                                       value="{{ old('year_month_loan_is_due_one') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                                <input type="text" class="form-control col mx-2"
                                                       name="year_month_loan_is_due_two"
                                                       value="{{ old('year_month_loan_is_due_two') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                                <input type="text" class="form-control col"
                                                       name="year_month_loan_is_due_three"
                                                       value="{{ old('year_month_loan_is_due_three') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                            </div>

                                            <div class="mb-4 row">
                                                <label class="form-check-label col" for="debt_default_years_months">
                                                    ණය ගෙවීම මගහැරී ඇති වර්ෂයන් \ මාස
                                                </label>
                                                <input type="text" class="form-control col"
                                                       name="debt_default_years_months_one"
                                                       value="{{ old('debt_default_years_months_one') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                                <input type="text" class="form-control col mx-2"
                                                       name="debt_default_years_months_two"
                                                       value="{{ old('debt_default_years_months_two') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                                <input type="text" class="form-control col"
                                                       name="debt_default_years_months_three"
                                                       value="{{ old('debt_default_years_months_three') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                            </div>

                                            <div class="mb-4 row">
                                                <label class="form-check-label col" for="remaining_installments">
                                                    ගෙවිමට ඇති වාරික ගණන
                                                </label>
                                                <input type="text" class="form-control col"
                                                       name="remaining_installments_one"
                                                       value="{{ old('remaining_installments_one') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                                <input type="text" class="form-control col mx-2"
                                                       name="remaining_installments_two"
                                                       value="{{ old('remaining_installments_two') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                                <input type="text" class="form-control col"
                                                       name="remaining_installments_three"
                                                       value="{{ old('remaining_installments_three') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                            </div>

                                            <div class="mb-4 row">
                                                <label class="form-check-label col" for="total_interest_to_be_paid">
                                                    පොළිය සදහා ගෙවිය යුතු මුළු මුදල
                                                </label>
                                                <input type="text" class="form-control col"
                                                       name="total_interest_to_be_paid_one"
                                                       value="{{ old('total_interest_to_be_paid_one') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                                <input type="text" class="form-control col mx-2"
                                                       name="total_interest_to_be_paid_two"
                                                       value="{{ old('total_interest_to_be_paid_two') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                                <input type="text" class="form-control col"
                                                       name="total_interest_to_be_paid_three"
                                                       value="{{ old('total_interest_to_be_paid_three') }}"
                                                       placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                            </div>

                                            <h5>(සැ.යු. උක්ත තොරතුරු සනාථ කිරීම සඳහා ණය පිළිබඳ අදාල බැංකු හෝ මූල්‍ය ආයතන
                                                වෙතින් ඔබ වෙත එවා ඇති ලිපිලේඛණ වල පිටපත් ඉදිරිපත් කළ යුතුය). </h5>

                                        </div>

                                        <div class="form-group">
                                            <label
                                                    for="applied_for_government_assistance_after_terrorist_attacks_covid">
                                                26. පාස්කු ප්‍රහාරය හෝ කොවිඩ් 19 වසංගතය ආරම්භ වීමෙන් පසුව
                                                කිසියම් සහනයක් හෝ රජයේ සහනාධාරයක් ලබාගැනීමට අයදුම් කලේද?
                                            </label>

                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="applied_for_government_assistance_after_terrorist_attacks_covid"
                                                       value="heard_but_does_not_know_government_relief"
                                                       id="heard_but_does_not_know_government_relief"/>
                                                <label class="form-check-label"
                                                       for="heard_but_does_not_know_government_relief">
                                                    රජයේ සහනාධාර පිළිබද ඇසුනද ඒ පිළිබද නොදනි
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="applied_for_government_assistance_after_terrorist_attacks_covid"
                                                       value="have_not_applied_to_any_relief"
                                                       id="have_not_applied_to_any_relief"/>
                                                <label class="form-check-label"
                                                       for="have_not_applied_to_any_relief">
                                                    මම මේ වන විට කිසිදු සහනයක් ලබා ගැනීමට අයදුම්කර නැත
                                                </label>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="applied_for_government_assistance_after_terrorist_attacks_covid"
                                                       value="eligible_for_insurance_compensation"
                                                       id="eligible_for_insurance_compensation"/>
                                                <label class="form-check-label"
                                                       for="eligible_for_insurance_compensation">
                                                    රක්ෂණ වන්දි ලබා ගැනීමට සුදුසුකම් ලබා සිටින නිසා ඒ සදහා අයදුම් කලෙමි
                                                </label>
                                                <div class="my-2">
                                                    <label>එසේ අයදුම්කල රක්ෂණ වන්දි ලැබුණිද?</label>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input"
                                                                       name="eligible_for_insurance_compensation_received"
                                                                       value="eligible_for_insurance_compensation_received_yes"
                                                                       id="eligible_for_insurance_compensation_received_yes"/>
                                                                <label class="form-check-label"
                                                                       for="eligible_for_insurance_compensation_received_yes">
                                                                    ඔව්
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input"
                                                                       name="eligible_for_insurance_compensation_received"
                                                                       value="eligible_for_insurance_compensation_received_no"
                                                                       id="eligible_for_insurance_compensation_received_no"/>
                                                                <label class="form-check-label"
                                                                       for="eligible_for_insurance_compensation_received_no">
                                                                    නැත
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="applied_for_government_assistance_after_terrorist_attacks_covid"
                                                       value="submitted_for_concessions_introduced_by_the_central_bank"
                                                       id="submitted_for_concessions_introduced_by_the_central_bank"/>
                                                <label class="form-check-label"
                                                       for="submitted_for_concessions_introduced_by_the_central_bank">
                                                    ශ්‍රී ලංකා මහ බැංකුව විසින් හදුන්වා දෙන ලද සහන ලබා ගැනීම සදහා
                                                    ගනුදෙනු
                                                    සිදුකරන බැංකුව හරහා අයදුම්පත් යොමු කළෙමි.
                                                </label>
                                                <div class="mt-2">
                                                    <label>එසේ අයදුම්කල සහන ලැබුණිද?</label>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input"
                                                                       name="received_concessions_introduced_by_the_central_bank"
                                                                       value="yes"
                                                                       id="submitted_for_concessions_introduced_by_the_central_bank_yes"/>
                                                                <label class="form-check-label"
                                                                       for="submitted_for_concessions_introduced_by_the_central_bank_yes">
                                                                    ඔව්
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input"
                                                                       name="received_concessions_introduced_by_the_central_bank"
                                                                       value="no"
                                                                       id="submitted_for_concessions_introduced_by_the_central_bank_no"/>
                                                                <label class="form-check-label"
                                                                       for="submitted_for_concessions_introduced_by_the_central_bank_no">
                                                                    නැත
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="applied_for_government_assistance_after_terrorist_attacks_covid"
                                                       value="applied_for_different_relief"
                                                       id="applied_for_different_relief"/>
                                                <label class="form-check-label"
                                                       for="applied_for_different_relief">
                                                    වෙනත් මුල්‍ය සහන ලබා ගැනීම සදහා අයදුම් කළෙමි
                                                </label>
                                                <div class="my-2">
                                                    <label>එසේ අයදුම්කල සහන ලැබුණිද?</label>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input"
                                                                       name="received_for_different_relief"
                                                                       value="yes"
                                                                       id="received_for_different_relief_yes"/>
                                                                <label class="form-check-label"
                                                                       for="received_for_different_relief_yes">
                                                                    ඔව්
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input"
                                                                       name="received_for_different_relief"
                                                                       value="no"
                                                                       id="received_for_different_relief_no"/>
                                                                <label class="form-check-label"
                                                                       for="received_for_different_relief_no">
                                                                    නැත
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                       name="applied_for_government_assistance_after_terrorist_attacks_covid"
                                                       value="received_help_from_family_friends"
                                                       id="received_help_from_family_friends"/>
                                                <label class="form-check-label"
                                                       for="received_help_from_family_friends">
                                                    මගේ පවුලේ උදවියගේ හා යහළුවන්ගේ උදව් ඉල්ලුවෙමි
                                                </label>
                                            </div>


                                        </div>

                                        <div class="row d-print-block d-none">
                                            <div class="col-md-12">
                                                ඉහත සඳහන් සියළු තොරතුරු සත්‍යය හා නිවැරදි බව සහතික කරමි.
                                            </div>
                                            <div class="col-md-6 mt-5 text-center pb-4">
                                                අයදුම්කරුගේ අත්සන
                                            </div>
                                            <div class="col-md-6 mt-5 pb-4 text-center">දිනය</div>
                                            <div class="col-md-12 border-top pt-3 mb-4">
                                                කාර්යාලීය ප්‍රයෝජනය සදහා පමණි.
                                            </div>
                                            <div class="col-md-12">
                                                1. ඉහත තොරතුරු සදහන් ව්‍යාපාරය පාස්කූ ප්‍රහාරය හෝ කොවිඩ් 19 වසංගතය නිසා
                                                <ul class="mt-3">
                                                    <li class="pb-2">බලපෑමට ලක්වු බව ඔබ දැනුවත් වුයේ;</li>
                                                    <li class="pb-2">ග්‍රාම නිලධාරී /ආර්ථික සංවර්ධන නිලධාරී මගින්</li>
                                                    <li class="pb-2">ක්ෂේත්‍ර පරීක්ෂා කිරීමෙන්</li>
                                                    <li class="pb-2">දුරකථනය මගින්</li>
                                                    <li class="pb-2">
                                                        වෙනත් (සඳහන් කරන්න)...........................................................................................................
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12">
                                                2. පහත සදහන් කර ඇති සම්පත්/සහන අතරින් මෙම කර්මාන්තය පවත්නා තත්ත්වයෙන්
                                                මුදවා ගැනීම සදහා ඔබ විසින් නිර්දේශ කරනු ලබන්නේ කුමන දේවල් දැයි සදහන්
                                                කරන්න.
                                                <ul>
                                                    <li class="pb-2">ව්‍යාපාර කටයුතු පවත්වාගෙන යාම සදහා මුල්‍ය සහනයක්
                                                    </li>
                                                    <li class="pb-2">පවත්නා ණය /කල්බදු ගෙවීමට සහන</li>
                                                    <li class="pb-2">ණය තොරතුරු කාර්යංශයේ තහනම් කිරීම් වල තාවකාලික
                                                        ලිහිල් කිරීමක්
                                                    </li>
                                                    <li class="pb-2">ණය යාවත් කාලීන කිරීම සඳහා සහාය</li>
                                                    <li class="pb-2">බදු හා බදු ආශ්‍රිත සහන</li>
                                                    <li class="pb-2">කාරක ප්‍රාග්ධන ණය ලබා ගැනීමට සහාය</li>
                                                    <li class="pb-2">තාක්ෂණය අත්පත් කර ගැනීමට සහාය</li>
                                                    <li class="pb-2">ඉඩකඩම් සහ වගා ඉඩම් ලබා ගැනීමට සහාය</li>
                                                    <li class="pb-2">කාර්ය මණ්ඩල පුහුණු අවස්ථා ඇති කිරීම</li>
                                                    <li class="pb-2">අනෙකුත් ව්‍යාපාර /කර්මාන්ත/වාණිජ මණ්ඩල සබදතා
                                                        ගොඩනැගිමට සහාය
                                                    </li>
                                                    <li class="pb-2">කාර්ය මණ්ඩල පවත්වා ගැනීම අඩු කිරිම සහ කළමණාකරන සහ
                                                    </li>
                                                    <li class="pb-2">
                                                        වෙනත් (සඳහන් කරන්න).............................................................................................................
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12">
                                                3. මෙම සහන ලැබුනු පසු නැවත ව්‍යාපාර කටයුතු ආරම්භ කිරීමට /යථා තත්ත්වයට
                                                පත්කර ගැනීමට සුදානම් බවට ඔබට සහතික විය හැකිද?
                                                <ul>
                                                    <li class="pb-2">ඔව්</li>
                                                    <li class="pb-2">නැත</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12 pl-4">
                                                ඉහත සහනය ලැබීම සදහා සුදුසු යැයි නිර්දේශ කරමි.
                                                <br> <br>
                                                අත්සන:
                                                ...................................................................................
                                                <br> <br>
                                                නම:
                                                .........................................................................................
                                                <br> <br>
                                                ව්‍යවසාය සංවර්ධන නිලධාරි<br>
                                                ජාතික ව්‍යවසාය සංවර්ධන අධිකාරිය<br>
                                                ඉහත සහනය ලබාදීම සඳහා සුදුසු යැයි අනුමත කරමි.<br> <br>
                                                අත්සන :
                                                ...................................................................................<br>
                                                <br>
                                                නම :
                                                .........................................................................................<br>
                                                <br>
                                                දිස්ත්‍රික් / ප්‍රාදේශීය ලේකම්
                                                .........................................................<br> <br>
                                                නිලමුද්‍රාව<br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if(!$form_data)
                                    <button type="submit" class="btn btn-primary no-print">
                                        පෝරමය සුරකින්න
                                    </button>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        @elseif(request()->get('form') === 'success')
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <div class="alert alert-success">
                            ස්තූතියි, සමීක්ෂණය සුරකින ලදි.
                        </div>
                    </div>
                </div>
                @if($form_data)
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h2>අයදුම්පත් අංකය: {{ str_pad($form_data->id, 5, '0', STR_PAD_LEFT) }}</h2>
                                    <div class="row">
                                        <div class="col text-right">
                                            <button onclick="window.print()" class="btn btn-success"
                                                    style="height: 40px;">මුද්‍රණය කරන්න
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="district">දිස්ත්‍රික්කය</label>
                                                <input type="text" class="form-control" id="district"
                                                       name="district"
                                                       value="{{ $form_data->district }}" disabled/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="divisional_secretariat">ප්‍රාදේශීය ලේකම්
                                                    කොට්ඨාශය</label>
                                                <input type="text" class="form-control" id="divisional_secretariat"
                                                       name="divisional_secretariat"
                                                       value="{{ $form_data->divisional_secretariat }}" disabled/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="gn_division">ග්‍රාම නිලධාරි වසම</label>
                                                <input type="text" class="form-control" id="gn_division"
                                                       name="gn_division"
                                                       value="{{ $form_data->gn_division }}" disabled/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">1. සම්පුර්ණ නම</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               value="{{ $form_data->name }}" disabled/>
                                    </div>

                                    <div class="form-group">
                                        <label for="address">2. ස්ථීර ලිපිනය</label>
                                        <textarea class="form-control" id="address" name="address"
                                                  disabled>{{ $form_data->address }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="national_identification_card_no">3. ජාතික හැදුනුම්පත්
                                            අංකය</label>
                                        <input type="text" class="form-control" id="national_identification_card_no"
                                               name="national_identification_card_no"
                                               value="{{ $form_data->national_identification_card_no }}" disabled/>
                                    </div>

                                    <div class="form-group">
                                        <label for="birthday_range">4. ව්‍යාපාර හිමිකරුගේ උපන් දිනය</label>
                                        <input type="text" class="form-control"
                                               value="{{ $form_data->birthday_range }}" disabled/>
                                    </div>

                                    <div class="form-group">
                                        <label for="gender">5. ස්ත්‍රී / පුරුෂ භාවය</label>

                                        <input type="text" class="form-control"
                                               value="{{ $form_data->gender == 'male' ? 'පුරුෂ' : 'ස්ත්‍රී' }}"
                                               disabled/>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="mobile">6.1 ජංගම දුරකථන අංකය</label>
                                            <input type="text" class="form-control"
                                                   value="{{ $form_data->mobile }}" disabled/>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="phone">6.2 ස්ථාවර දුරකථන අංකය</label>
                                            <input type="text" class="form-control"
                                                   value="{{ $form_data->phone }}" disabled/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">7. විද්‍යුත් තැපැල් ලිපිනය</label>
                                        <input type="text" class="form-control"
                                               value="{{ $form_data->email }}" disabled/>
                                    </div>

                                    <div class="form-group">
                                        <label for="business_name">8. ව්‍යාපාර නාමය</label>
                                        <input type="text" class="form-control"
                                               value="{{ $form_data->business_name }}" disabled/>
                                    </div>

                                    <div class="form-group">
                                        <label>9. එම ව්‍යාපාරය ලියාපදිංචි කර ඇත්නම් (ලියාපදිංචි සහතිකයේ පිටපත
                                            ඉදිරිපත් කළ යුතුය).</label>
                                        <div class="row">
                                            <div class="form-group col-md-6 mb-0">
                                                <label for="business_registration_number">
                                                    <small>9.1</small> ව්‍යාපාර ලියාපදිංචි අංකය
                                                </label>
                                                <input type="text" class="form-control"
                                                       value="{{ $form_data->business_registration_number }}" disabled/>
                                            </div>
                                            <div class="form-group col-md-6 mb-0">
                                                <label for="business_start_date">
                                                    <small>9.2</small> ලියාපදිංචි කල වර්ෂය
                                                </label>
                                                <input type="text" class="form-control"
                                                       value="{{ $form_data->business_start_date->format('Y') }}"
                                                       disabled/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="legal_nature_of_business">
                                            10. ව්‍යාපාර ලියාපදිංචියේ ස්වභාවය
                                        </label>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->legal_nature_of_business == 'sole_proprietor' ? 'checked' : '' }} disabled
                                                   name="legal_nature_of_business" value="sole_proprietor"
                                                   id="individual_business"/>
                                            <label class="form-check-label" for="individual_business">තනි පුද්ගල
                                                ව්‍යාපාරයකි</label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->legal_nature_of_business == 'partnership' ? 'checked' : '' }} disabled
                                                   name="legal_nature_of_business" value="partnership"
                                                   id="partnership"/>
                                            <label class="form-check-label" for="partnership">හවුල්
                                                ව්‍යාපාරයකි</label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->legal_nature_of_business == 'public_company' ? 'checked' : '' }} disabled
                                                   name="legal_nature_of_business" value="public_company"
                                                   id="public_company"/>
                                            <label class="form-check-label" for="public_company">
                                                මහජන සමාගමකි
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->legal_nature_of_business == 'private_company' ? 'checked' : '' }} disabled
                                                   name="legal_nature_of_business" value="private_company"
                                                   id="private_company"/>
                                            <label class="form-check-label" for="private_company">
                                                පුද්ගලික සමාගම
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->legal_nature_of_business == 'not_yet_registered' ? 'checked' : '' }} disabled
                                                   name="legal_nature_of_business" value="not_yet_registered"
                                                   id="not_yet_registered"/>
                                            <label class="form-check-label" for="not_yet_registered">
                                                තවම ලියාපදිංචි කර නොමැත
                                            </label>
                                        </div>

                                        <input type="text" class="form-control text-left"
                                               value="
                                           {{ $form_data->legal_nature_of_business !== 'sole_proprietor' &&
       $form_data->legal_nature_of_business !== 'partnership'&&
       $form_data->legal_nature_of_business !== 'public_company'&&
       $form_data->legal_nature_of_business !== 'private_company'&&
       $form_data->legal_nature_of_business !== 'not_yet_registered' ? $form_data->legal_nature_of_business : '' }}"
                                               disabled/>
                                    </div>

                                    <div class="form-group">
                                        <label for="primary_industry">
                                            11. ඔබගේ ව්‍යාපාරයේ මුලික ව්‍යාපාර / කර්මාන්ත අංශය තෝරන්න
                                        </label>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->primary_industry == 'accommodation-and-food-service-activities' ? 'checked' : '' }} disabled
                                                   name="primary_industry"
                                                   value="accommodation-and-food-service-activities"
                                                   id="accommodation-and-food-service-activities"/>
                                            <label class="form-check-label"
                                                   for="accommodation-and-food-service-activities">
                                                නවාතැන් හා ආහාර සැපයීමේ සේවා
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->primary_industry == 'administrative-and-support-service-activities' ? 'checked' : '' }} disabled
                                                   name="primary_industry"
                                                   value="administrative-and-support-service-activities"
                                                   id="administrative-and-support-service-activities"/>
                                            <label class="form-check-label"
                                                   for="administrative-and-support-service-activities">
                                                පරිපාලන හා සහාය සේවා
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->primary_industry == 'agriculture-forestry-and-fishing' ? 'checked' : '' }} disabled
                                                   name="primary_industry" value="agriculture-forestry-and-fishing"
                                                   id="agriculture-forestry-and-fishing"/>
                                            <label class="form-check-label" for="agriculture-forestry-and-fishing">
                                                කෘෂිකර්මය, වනය ආශ්‍රීත ව්‍යාපාර, ධීවර කර්මාන්තය
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="primary_industry"
                                                   {{ $form_data->primary_industry == 'activities-of-extraterritorial-organizations-and-bodies' ? 'checked' : '' }} disabled
                                                   value="activities-of-extraterritorial-organizations-and-bodies"
                                                   id="activities-of-extraterritorial-organizations-and-bodies"/>
                                            <label class="form-check-label"
                                                   for="activities-of-extraterritorial-organizations-and-bodies">
                                                ජාත්‍යන්තර ආයතන වල ක්‍රියාකාරිත්වය
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="primary_industry"
                                                   {{ $form_data->primary_industry == 'activities-of-households-as-employers-undifferentiated-goods-and-services-producing-activities-of-households-for-own-use' ? 'checked' : '' }} disabled
                                                   value="activities-of-households-as-employers-undifferentiated-goods-and-services-producing-activities-of-households-for-own-use"
                                                   id="activities-of-households-as-employers-undifferentiated-goods-and-services-producing-activities-of-households-for-own-use"/>
                                            <label class="form-check-label"
                                                   for="activities-of-households-as-employers-undifferentiated-goods-and-services-producing-activities-of-households-for-own-use">
                                                ගෘහ සේවය සහ තමන්ගේ භාවිතය සදහා ගෘහස්ත මට්ටමෙන් භාණ්ඩ/සේවා නිෂ්පාදනය
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->primary_industry == 'arts-entertainment-and-recreation' ? 'checked' : '' }} disabled
                                                   name="primary_industry" value="arts-entertainment-and-recreation"
                                                   id="arts-entertainment-and-recreation"/>
                                            <label class="form-check-label" for="arts-entertainment-and-recreation">
                                                කළාව හා විනෝදාස්වාදය
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->primary_industry == 'construction' ? 'checked' : '' }} disabled
                                                   name="primary_industry" value="construction" id="construction"/>
                                            <label class="form-check-label" for="construction">
                                                ඉදිකිරිම්
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->primary_industry == 'education' ? 'checked' : '' }} disabled
                                                   name="primary_industry" value="education" id="education"/>
                                            <label class="form-check-label" for="education">
                                                අධ්‍යාපන
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="primary_industry"
                                                   {{ $form_data->primary_industry == 'electricity-gas-steam-and-air-conditioning-supply' ? 'checked' : '' }} disabled
                                                   value="electricity-gas-steam-and-air-conditioning-supply"
                                                   id="electricity-gas-steam-and-air-conditioning-supply"/>
                                            <label class="form-check-label"
                                                   for="electricity-gas-steam-and-air-conditioning-supply">
                                                විදුලිය, ගෑස්, තාප සහ වායුසමීකරණ සේවා
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="primary_industry"
                                                   {{ $form_data->primary_industry == 'financial-and-insurance-activities' ? 'checked' : '' }} disabled
                                                   value="financial-and-insurance-activities"
                                                   id="financial-and-insurance-activities"/>
                                            <label class="form-check-label"
                                                   for="financial-and-insurance-activities">
                                                මුල්‍ය හා රක්ෂණ සේවා
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="primary_industry"
                                                   {{ $form_data->primary_industry == 'human-health-and-social-work-activities' ? 'checked' : '' }} disabled
                                                   value="human-health-and-social-work-activities"
                                                   id="human-health-and-social-work-activities"/>
                                            <label class="form-check-label"
                                                   for="human-health-and-social-work-activities">
                                                මානව සෞඛ්‍යය සහ සමාජ සේවා කටයුතු
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->primary_industry == 'information-and-communication' ? 'checked' : '' }} disabled
                                                   name="primary_industry" value="information-and-communication"
                                                   id="information-and-communication"/>
                                            <label class="form-check-label" for="information-and-communication">
                                                තොරතුරු හා සන්නිවේදනය
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="primary_industry" value="manufacturing"
                                                   {{ $form_data->primary_industry == 'manufacturing' ? 'checked' : '' }} disabled
                                                   id="manufacturing"/>
                                            <label class="form-check-label" for="manufacturing">
                                                නිෂ්පාදනය
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="primary_industry" value="mining-and-quarrying"
                                                   {{ $form_data->primary_industry == 'mining-and-quarrying' ? 'checked' : '' }} disabled
                                                   id="mining-and-quarrying"/>
                                            <label class="form-check-label" for="mining-and-quarrying">
                                                පතල් කැනීම් සහ ගල් කැනීම්
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->primary_industry == 'other-service-activities' ? 'checked' : '' }} disabled
                                                   name="primary_industry" value="other-service-activities"
                                                   id="other-service-activities"/>
                                            <label class="form-check-label" for="other-service-activities">
                                                අනෙකුත් සේවා කටයුතු
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="primary_industry"
                                                   {{ $form_data->primary_industry == 'public-administration-and-defence-compulsory-social-security' ? 'checked' : '' }} disabled
                                                   value="public-administration-and-defence-compulsory-social-security"
                                                   id="public-administration-and-defence-compulsory-social-security"/>
                                            <label class="form-check-label"
                                                   for="public-administration-and-defence-compulsory-social-security">
                                                මහජන පරිපාලනය, ආරක්ෂාව, අත්‍යවශ්‍ය සමාජ ආරක්ෂණය
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="primary_industry" value="real-estate-activities"
                                                   {{ $form_data->primary_industry == 'real-estate-activities' ? 'checked' : '' }} disabled
                                                   id="real-estate-activities"/>
                                            <label class="form-check-label" for="real-estate-activities">
                                                දේපල සහ නිවාස ව්‍යාපාර
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->primary_industry == 'transportation-and-storage' ? 'checked' : '' }} disabled
                                                   name="primary_industry" value="transportation-and-storage"
                                                   id="transportation-and-storage"/>
                                            <label class="form-check-label" for="transportation-and-storage">
                                                ප්‍රවාහන සහ ගබඩා කිරීම
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->primary_industry == 'water-supply-sewerage-waste-management-and-remediation-activities' ? 'checked' : '' }} disabled
                                                   name="primary_industry"
                                                   value="water-supply-sewerage-waste-management-and-remediation-activities"
                                                   id="water-supply-sewerage-waste-management-and-remediation-activities"/>
                                            <label class="form-check-label"
                                                   for="water-supply-sewerage-waste-management-and-remediation-activities">
                                                ජල සම්පාදනය, මළ ද්‍රව්‍ය, අපද්‍රව්‍ය කලමණාකරණය සහ ප්‍රතිකර්ම කටයුතු
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="primary_industry"
                                                   {{ $form_data->primary_industry == 'wholesale-and-retail-trade-repair-of-motor-vehicles-and-motorcycles' ? 'checked' : '' }} disabled
                                                   value="wholesale-and-retail-trade-repair-of-motor-vehicles-and-motorcycles"
                                                   id="wholesale-and-retail-trade-repair-of-motor-vehicles-and-motorcycles"/>
                                            <label class="form-check-label"
                                                   for="wholesale-and-retail-trade-repair-of-motor-vehicles-and-motorcycles">
                                                තොග සහ සිල්ලර වෙළදාම, මෝටර් වාහන සහ යතුරු පැදි අලුත්වැඩියාව
                                            </label>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="business_description">
                                            12. ඔබගේ නිෂ්පාදනය පිළිබඳව සැකෙවින් විස්තර කරන්න
                                        </label>
                                        <textarea type="text" class="form-control" id="business_description"
                                                  name="business_description"
                                                  disabled
                                                  placeholder="ඔබගේ නිෂ්පාදනය පිළිබඳව සැකෙවින් විස්තර කරන්න">{{ $form_data->business_description }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="business_operational_period">
                                            13. ආරම්භයේ සිට මේ දක්වා කොපමණ කාලයක් ඔබගේ ව්‍යාපාරය
                                            ක්‍රියාත්මක වෙනවාද?
                                        </label>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="business_operational_period"
                                                   value="less_than_one_year"
                                                   {{ $form_data->business_operational_period == 'less_than_one_year' ? 'checked' : '' }} disabled
                                                   id="less_than_one_year"/>
                                            <label class="form-check-label"
                                                   for="less_than_one_year">
                                                වසරකට වඩා අඩුයි
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="business_operational_period"
                                                   {{ $form_data->business_operational_period == 'one_to_two_years' ? 'checked' : '' }} disabled
                                                   value="one_to_two_years"
                                                   id="one_to_two_years"/>
                                            <label class="form-check-label"
                                                   for="one_to_two_years">
                                                වසර 1 - 2ත් අතර
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="business_operational_period"
                                                   value="two_to_five_years"
                                                   {{ $form_data->business_operational_period == 'two_to_five_years' ? 'checked' : '' }} disabled
                                                   id="two_to_five_years"/>
                                            <label class="form-check-label"
                                                   for="two_to_five_years">
                                                වසර 2 - 5ත් අතර
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="business_operational_period"
                                                   value="five_to_ten_years"
                                                   {{ $form_data->business_operational_period == 'five_to_ten_years' ? 'checked' : '' }} disabled
                                                   id="five_to_ten_years"/>
                                            <label class="form-check-label"
                                                   for="five_to_ten_years">
                                                වසර 5 - 10ත් අතර
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="business_operational_period"
                                                   value="ten_or_more_years"
                                                   {{ $form_data->business_operational_period == 'ten_or_more_years' ? 'checked' : '' }} disabled
                                                   id="ten_or_more_years"/>
                                            <label class="form-check-label"
                                                   for="ten_or_more_years">
                                                වසර 10 ට වැඩි
                                            </label>
                                        </div>


                                    </div>

                                    <div class="form-group">
                                        <label for="focus_market">
                                            14. ව්‍යාපාරයේ අලෙවි කටයුතු සිදුකරනුයේ
                                        </label>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="focus_market"
                                                   value="local"
                                                   {{ $form_data->focus_market == 'local' ? 'checked' : '' }} disabled
                                                   id="local"/>
                                            <label class="form-check-label"
                                                   for="local">
                                                රටතුළ
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="focus_market"
                                                   {{ $form_data->focus_market == 'international' ? 'checked' : '' }} disabled
                                                   value="international"
                                                   id="international"/>
                                            <label class="form-check-label"
                                                   for="international">
                                                ජාත්‍යන්තරව
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="focus_market"
                                                   {{ $form_data->focus_market == 'local_and_international' ? 'checked' : '' }} disabled
                                                   value="local_and_international"
                                                   id="local_and_international"/>
                                            <label class="form-check-label"
                                                   for="local_and_international">
                                                රටතුළ හා ජාත්‍යන්තරව
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="customers_before_terrorist_attacks_and_covid">
                                            15. පාස්කූ ප්‍රහාරය /කොවිඩ් 19 වසංගතයට <b>පෙර</b> ඔබගේ ව්‍යාපාරය
                                            මගින් මාසිකව සේවය සලසන ලද ගනුදෙනුදෙනුකරුවන් ගණන කොපමණද?
                                        </label>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="customers_before_terrorist_attacks_and_covid"
                                                   value="less_than_99_customers"
                                                   {{ $form_data->customers_before_terrorist_attacks_and_covid == 'less_than_99_customers' ? 'checked' : '' }} disabled
                                                   id="less_than_99_customers"/>
                                            <label class="form-check-label"
                                                   for="less_than_99_customers">
                                                ගණුදෙනුකරුවන් 99 වඩා අඩුවෙන්
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="customers_before_terrorist_attacks_and_covid"
                                                   value="100_to_499_customers"
                                                   {{ $form_data->customers_before_terrorist_attacks_and_covid == '100_to_499_customers' ? 'checked' : '' }} disabled
                                                   id="100_to_499_customers"/>
                                            <label class="form-check-label"
                                                   for="100_to_499_customers">
                                                100 - 499 අතර
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="customers_before_terrorist_attacks_and_covid"
                                                   value="500_to_1000_customers"
                                                   {{ $form_data->customers_before_terrorist_attacks_and_covid == '500_to_1000_customers' ? 'checked' : '' }} disabled
                                                   id="500_to_1000_customers"/>
                                            <label class="form-check-label"
                                                   for="500_to_1000_customers">
                                                500 - 1000 අතර
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="customers_before_terrorist_attacks_and_covid"
                                                   value="1001_to_5000_customers"
                                                   {{ $form_data->customers_before_terrorist_attacks_and_covid == '1001_to_5000_customers' ? 'checked' : '' }} disabled
                                                   id="1001_to_5000_customers"/>
                                            <label class="form-check-label"
                                                   for="1001_to_5000_customers">
                                                1001 - 5,000 අතර
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="customers_before_terrorist_attacks_and_covid"
                                                   value="more_than_10000_customers"
                                                   {{ $form_data->customers_before_terrorist_attacks_and_covid == 'more_than_10000_customers' ? 'checked' : '' }} disabled
                                                   id="more_than_10000_customers"/>
                                            <label class="form-check-label"
                                                   for="more_than_10000_customers">
                                                10,000 වැඩි
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="customers_after_terrorist_attacks_and_covid">
                                            16. පාස්කූ ප්‍රහාරය / කොවිඩ් 19 වසංගතයට <b>පසු</b> ඔබගේ
                                            ව්‍යාපාරය
                                            මගින් මාසිකව සේවය සලසන ලද ගනු දෙනුදෙනු කරුවන් අඩුවීම සටහන් කරන්න.
                                            ගනුදෙනු කරුවන්ගේ;
                                        </label>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="customers_after_terrorist_attacks_and_covid"
                                                   value="no_change"
                                                   {{ $form_data->customers_after_terrorist_attacks_and_covid == 'no_change' ? 'checked' : '' }} disabled
                                                   id="no_change"/>
                                            <label class="form-check-label"
                                                   for="no_change">
                                                අඩුවීමක් නැත
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="customers_after_terrorist_attacks_and_covid"
                                                   value="10_percent_change"
                                                   {{ $form_data->customers_after_terrorist_attacks_and_covid == '10_percent_change' ? 'checked' : '' }} disabled
                                                   id="10_percent_change"/>
                                            <label class="form-check-label"
                                                   for="10_percent_change">
                                                10% වඩා අඩු වී ඇත
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="customers_after_terrorist_attacks_and_covid"
                                                   value="11_to_30_percent_change"
                                                   {{ $form_data->customers_after_terrorist_attacks_and_covid == '11_to_30_percent_change' ? 'checked' : '' }} disabled
                                                   id="11_to_30_percent_change"/>
                                            <label class="form-check-label"
                                                   for="11_to_30_percent_change">
                                                11% - 30% අඩු වී ඇත
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="customers_after_terrorist_attacks_and_covid"
                                                   value="31_50_percent_change"
                                                   {{ $form_data->customers_after_terrorist_attacks_and_covid == '31_50_percent_change' ? 'checked' : '' }} disabled
                                                   id="31_50_percent_change"/>
                                            <label class="form-check-label"
                                                   for="31_50_percent_change">
                                                31% - 50% අඩු වී ඇත
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="customers_after_terrorist_attacks_and_covid"
                                                   value="51_to_70_percent_change"
                                                   {{ $form_data->customers_after_terrorist_attacks_and_covid == '51_to_70_percent_change' ? 'checked' : '' }} disabled
                                                   id="51_to_70_percent_change"/>
                                            <label class="form-check-label"
                                                   for="51_to_70_percent_change">
                                                51% - 70% අඩු වී ඇත
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="customers_after_terrorist_attacks_and_covid"
                                                   value="71_to_90_percent_change"
                                                   {{ $form_data->customers_after_terrorist_attacks_and_covid == '71_to_90_percent_change' ? 'checked' : '' }} disabled
                                                   id="71_to_90_percent_change"/>
                                            <label class="form-check-label"
                                                   for="71_to_90_percent_change">
                                                71% - 90% අඩු වී ඇත
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="customers_after_terrorist_attacks_and_covid"
                                                   value="more_than_91_percent_change"
                                                   {{ $form_data->customers_after_terrorist_attacks_and_covid == 'more_than_91_percent_change' ? 'checked' : '' }} disabled
                                                   id="more_than_91_percent_change"/>
                                            <label class="form-check-label"
                                                   for="more_than_91_percent_change">
                                                91% වඩා අඩු වී ඇත
                                            </label>
                                        </div>


                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="customers_after_terrorist_attacks_and_covid"
                                                   value="has_changed"
                                                   {{ $form_data->customers_after_terrorist_attacks_and_covid == 'has_changed' ? 'checked' : '' }} disabled
                                                   id="has_changed"/>
                                            <label class="form-check-label"
                                                   for="has_changed">
                                                වැඩි වී ඇත
                                            </label>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="annual_gross_income_for_the_last_three_years">
                                            17. පසුගිය වසර තුන පිළිබද සලකා වාර්ෂික දළ ආදායම (රුපියල්
                                            මිලියන)
                                        </label>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="annual_gross_income_for_the_last_three_years"
                                                   value="less_than_one"
                                                   {{ $form_data->annual_gross_income_for_the_last_three_years == 'less_than_one' ? 'checked' : '' }} disabled
                                                   id="less_than_one"/>
                                            <label class="form-check-label"
                                                   for="less_than_one">
                                                1 වඩා අඩුය
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="annual_gross_income_for_the_last_three_years"
                                                   value="between_one_to_three"
                                                   {{ $form_data->annual_gross_income_for_the_last_three_years == 'between_one_to_three' ? 'checked' : '' }} disabled
                                                   id="between_one_to_three"/>
                                            <label class="form-check-label"
                                                   for="between_one_to_three">
                                                1 - 3 අතර
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="annual_gross_income_for_the_last_three_years"
                                                   value="between_three_to_six"
                                                   {{ $form_data->annual_gross_income_for_the_last_three_years == 'between_three_to_six' ? 'checked' : '' }} disabled
                                                   id="between_three_to_six"/>
                                            <label class="form-check-label"
                                                   for="between_three_to_six">
                                                3 - 6 අතර
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="annual_gross_income_for_the_last_three_years"
                                                   value="between_six_to_ten"
                                                   {{ $form_data->annual_gross_income_for_the_last_three_years == 'between_six_to_ten' ? 'checked' : '' }} disabled
                                                   id="between_six_to_ten"/>
                                            <label class="form-check-label"
                                                   for="between_six_to_ten">
                                                6 - 10 අතර
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="annual_gross_income_for_the_last_three_years"
                                                   value="between_ten_to_twenty_five"
                                                   {{ $form_data->annual_gross_income_for_the_last_three_years == 'between_ten_to_twenty_five' ? 'checked' : '' }} disabled
                                                   id="between_ten_to_twenty_five"/>
                                            <label class="form-check-label"
                                                   for="between_ten_to_twenty_five">
                                                10 - 25 අතර
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="annual_gross_income_for_the_last_three_years"
                                                   value="between_twenty_five_to_fifty"
                                                   {{ $form_data->annual_gross_income_for_the_last_three_years == 'between_twenty_five_to_fifty' ? 'checked' : '' }} disabled
                                                   id="between_twenty_five_to_fifty"/>
                                            <label class="form-check-label"
                                                   for="between_twenty_five_to_fifty">
                                                25 - 50 අතර
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="annual_gross_income_for_the_last_three_years"
                                                   value="between_fifty_to_one_hundred"
                                                   {{ $form_data->annual_gross_income_for_the_last_three_years == 'between_fifty_to_one_hundred' ? 'checked' : '' }} disabled
                                                   id="between_fifty_to_one_hundred"/>
                                            <label class="form-check-label"
                                                   for="between_fifty_to_one_hundred">
                                                50 - 100 අතර
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="annual_gross_income_for_the_last_three_years"
                                                   value="more_than_one_hundred"
                                                   {{ $form_data->annual_gross_income_for_the_last_three_years == 'more_than_one_hundred' ? 'checked' : '' }} disabled
                                                   id="more_than_one_hundred"/>
                                            <label class="form-check-label"
                                                   for="more_than_one_hundred">
                                                100 වඩා වැඩියෙන්
                                            </label>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="difference_of_gross_income_for_the_last_three_years">
                                            18. පාස්කූ ප්‍රහාරය / කොවිඩ් 19 වසංගතයේ බලපෑම හේතුවෙන්
                                            ඔබගේ ව්‍යාපාරයේ ආදායම් තත්ත්වය පසුගිය වසර තුනේ දළ මාසික ආදායම් වල
                                            සාමාන්‍ය සමග සැසඳීමේදී සිදුවී ඇති වෙනස සටහන් කරන්න.
                                        </label>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="difference_of_gross_income_for_the_last_three_years"
                                                   value="no_change"
                                                   {{ $form_data->difference_of_gross_income_for_the_last_three_years == 'no_change' ? 'checked' : '' }} disabled
                                                   id="no_change"/>
                                            <label class="form-check-label"
                                                   for="no_change">
                                                වෙනසක් නැත
                                            </label>
                                        </div>


                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="difference_of_gross_income_for_the_last_three_years"
                                                   value="ten_percent_difference"
                                                   {{ $form_data->difference_of_gross_income_for_the_last_three_years == 'ten_percent_difference' ? 'checked' : '' }} disabled
                                                   id="ten_percent_difference"/>
                                            <label class="form-check-label"
                                                   for="ten_percent_difference">
                                                10% ක ප්‍රමාණයකින් අඩු වී ඇත
                                            </label>
                                        </div>


                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="difference_of_gross_income_for_the_last_three_years"
                                                   value="eleven_to_thrity_percent_difference"
                                                   {{ $form_data->difference_of_gross_income_for_the_last_three_years == 'eleven_to_thrity_percent_difference' ? 'checked' : '' }} disabled
                                                   id="eleven_to_thrity_percent_difference"/>
                                            <label class="form-check-label"
                                                   for="eleven_to_thrity_percent_difference">
                                                11% - 30% ප්‍රමාණයකින් අඩු වී ඇත
                                            </label>
                                        </div>


                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="difference_of_gross_income_for_the_last_three_years"
                                                   value="thirty_one_to_fifty_percent_difference"
                                                   {{ $form_data->difference_of_gross_income_for_the_last_three_years == 'thirty_one_to_fifty_percent_difference' ? 'checked' : '' }} disabled
                                                   id="thirty_one_to_fifty_percent_difference"/>
                                            <label class="form-check-label"
                                                   for="thirty_one_to_fifty_percent_difference">
                                                31% - 50% ප්‍රමාණයකින් අඩු වී ඇත
                                            </label>
                                        </div>


                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="difference_of_gross_income_for_the_last_three_years"
                                                   value="fifty_one_to_seventy_percent_difference"
                                                   {{ $form_data->difference_of_gross_income_for_the_last_three_years == 'fifty_one_to_seventy_percent_difference' ? 'checked' : '' }} disabled
                                                   id="fifty_one_to_seventy_percent_difference"/>
                                            <label class="form-check-label"
                                                   for="fifty_one_to_seventy_percent_difference">
                                                51% - 70% ප්‍රමාණයකින් අඩු වී ඇත
                                            </label>
                                        </div>


                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="difference_of_gross_income_for_the_last_three_years"
                                                   value="seventy_one_to_ninty_percent_difference"
                                                   {{ $form_data->difference_of_gross_income_for_the_last_three_years == 'seventy_one_to_ninty_percent_difference' ? 'checked' : '' }} disabled
                                                   id="seventy_one_to_ninty_percent_difference"/>
                                            <label class="form-check-label"
                                                   for="seventy_one_to_ninty_percent_difference">
                                                71% - 90% ප්‍රමාණයකින් අඩු වී ඇත
                                            </label>
                                        </div>


                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="difference_of_gross_income_for_the_last_three_years"
                                                   value="ninety_one_percent_difference"
                                                   {{ $form_data->difference_of_gross_income_for_the_last_three_years == 'ninety_one_percent_difference' ? 'checked' : '' }} disabled
                                                   id="ninety_one_percent_difference"/>
                                            <label class="form-check-label"
                                                   for="ninety_one_percent_difference">
                                                91% ප්‍රමාණයකින් අඩු වී ඇත
                                            </label>
                                        </div>


                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="difference_of_gross_income_for_the_last_three_years"
                                                   value="income_has_increased"
                                                   {{ $form_data->difference_of_gross_income_for_the_last_three_years == 'income_has_increased' ? 'checked' : '' }} disabled
                                                   id="income_has_increased"/>
                                            <label class="form-check-label"
                                                   for="income_has_increased">
                                                මාසික ආදායම වැඩි වී ඇත
                                            </label>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label>19. පාස්කූ ප්‍රහාරය / කොවිඩ් 19 වසංගත තත්ත්වයට <b>පෙර</b> ඔබ ආයතනයේ
                                            කොපමණ සේවක සංඛ්‍යාවක් සේවය කළාද?</label>
                                        <div class="row mt-2">
                                            <div class="form-group col-md-6 mb-0">
                                                <label
                                                        for="full_time_employees_before_terrorist_attacks_and_covid">
                                                    පුර්ණ කාලීන සේවකයන් ගණන
                                                </label>
                                                <input type="number" class="form-control"
                                                       value="{{ $form_data->full_time_employees_before_terrorist_attacks_and_covid }}"
                                                       disabled
                                                       id="full_time_employees_before_terrorist_attacks_and_covid"
                                                       name="full_time_employees_before_terrorist_attacks_and_covid"
                                                       placeholder="පුර්ණ කාලීන සේවකයන් ගණන"/>
                                            </div>
                                            <div class="form-group col-md-6 mb-0">
                                                <label
                                                        for="part_time_employees_before_terrorist_attacks_and_covid">
                                                    අර්ධ කාලීන සේවකයන් ගණන
                                                </label>
                                                <input type="number" class="form-control"
                                                       value="{{ $form_data->part_time_employees_before_terrorist_attacks_and_covid }}"
                                                       disabled
                                                       id="part_time_employees_before_terrorist_attacks_and_covid"
                                                       name="part_time_employees_before_terrorist_attacks_and_covid"
                                                       placeholder="අර්ධ කාලීන සේවකයන් ගණන"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>20. පාස්කූ ප්‍රහාරය / කොවිඩ් 19 වසංගත තත්ත්වයට <b>පසු</b> කොපමණ සේවක
                                            සංඛ්‍යාවක් සේවය කරනු ලබන්නේද?</label>

                                        <div class="row mt-2">
                                            <div class="form-group col-md-6 mb-0">
                                                <label
                                                        for="full_time_employees_after_terrorist_attacks_and_covid">
                                                    පුර්ණ කාලීන සේවකයන් ගණන
                                                </label>
                                                <input type="number" class="form-control"
                                                       id="full_time_employees_after_terrorist_attacks_and_covid"
                                                       value="{{ $form_data->full_time_employees_after_terrorist_attacks_and_covid }}"
                                                       disabled
                                                       name="full_time_employees_after_terrorist_attacks_and_covid"
                                                       placeholder="පුර්ණ කාලීන සේවකයන් ගණන"/>
                                            </div>
                                            <div class="form-group col-md-6 mb-0">
                                                <label
                                                        for="part_time_employees_after_terrorist_attacks_and_covid">
                                                    අර්ධ කාලීන සේවකයන් ගණන
                                                </label>
                                                <input type="number" class="form-control"
                                                       id="part_time_employees_after_terrorist_attacks_and_covid"
                                                       value="{{ $form_data->part_time_employees_after_terrorist_attacks_and_covid }}"
                                                       disabled
                                                       name="part_time_employees_after_terrorist_attacks_and_covid"
                                                       placeholder="අර්ධ කාලීන සේවකයන් ගණන"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="impact_on_business_after_terrorist_attacks_and_covid">
                                            21. පාස්කූ ප්‍රහාරය /කොවිඩ් 19 වසංගත තත්ත්වයට පසුව ඔබගේ
                                            ව්‍යාපාරයට කිසියම් බලපෑමක් සිදුව ඇති නම් එම කරුණු සියල්ල පහත සදහන් කර
                                            ඇති වගන්ති අතරින් තෝරා ලකුණු කරන්න.
                                        </label>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->impact_on_business_after_terrorist_attacks_and_covid == 'operating_normally' ? 'checked' : '' }} disabled
                                                   name="impact_on_business_after_terrorist_attacks_and_covid"
                                                   value="operating_normally"
                                                   id="operating_normally"/>
                                            <label class="form-check-label"
                                                   for="operating_normally">
                                                සාමාන්‍ය පරිදි ක්‍රියාත්මක වෙමින් පවති
                                            </label>
                                        </div>


                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->impact_on_business_after_terrorist_attacks_and_covid == 'operating_with_modifications_and_limitations' ? 'checked' : '' }} disabled
                                                   name="impact_on_business_after_terrorist_attacks_and_covid"
                                                   value="operating_with_modifications_and_limitations"
                                                   id="operating_with_modifications_and_limitations"/>
                                            <label class="form-check-label"
                                                   for="operating_with_modifications_and_limitations">
                                                වෙනස්කම් සහ සීමා සහිතව ක්‍රියාත්මක කරයි
                                            </label>
                                        </div>


                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="impact_on_business_after_terrorist_attacks_and_covid"
                                                   value="operating_with_massive_modifications_and_limitations"
                                                   {{ $form_data->impact_on_business_after_terrorist_attacks_and_covid == 'operating_with_massive_modifications_and_limitations' ? 'checked' : '' }} disabled
                                                   id="operating_with_massive_modifications_and_limitations"/>
                                            <label class="form-check-label"
                                                   for="operating_with_massive_modifications_and_limitations">
                                                විශාල වෙනස්කම් (ක්‍රමය,ක්‍රියාවලිය, තාක්ෂණය ආදී) සහිතව
                                            </label>
                                        </div>


                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="impact_on_business_after_terrorist_attacks_and_covid"
                                                   value="operating_with_diversification"
                                                   {{ $form_data->impact_on_business_after_terrorist_attacks_and_covid == 'operating_with_diversification' ? 'checked' : '' }} disabled
                                                   id="operating_with_diversification"/>
                                            <label class="form-check-label"
                                                   for="operating_with_diversification">
                                                විවිධාංගීකරණය සහිතව ක්‍රියාත්මක වේ
                                            </label>
                                        </div>


                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="impact_on_business_after_terrorist_attacks_and_covid"
                                                   value="temporarily_closed"
                                                   {{ $form_data->impact_on_business_after_terrorist_attacks_and_covid == 'temporarily_closed' ? 'checked' : '' }} disabled
                                                   id="temporarily_closed"/>
                                            <label class="form-check-label"
                                                   for="temporarily_closed">
                                                තාවකාලිකව වසා දමා ඇත
                                            </label>
                                        </div>


                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="impact_on_business_after_terrorist_attacks_and_covid"
                                                   value="permanently_closed"
                                                   {{ $form_data->impact_on_business_after_terrorist_attacks_and_covid == 'permanently_closed' ? 'checked' : '' }} disabled
                                                   id="permanently_closed"/>
                                            <label class="form-check-label"
                                                   for="permanently_closed">
                                                සම්පුර්ණයෙන්ම වසා දමා ඇත
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="business_currently_has_loans_leases">
                                            22. ඔබගේ ව්‍යාපාරය මේවන විට ණය / කල්බදු පවතිනවාද?
                                        </label>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="business_currently_has_loans_leases"
                                                   value="yes"
                                                   {{ $form_data->business_currently_has_loans_leases == 'yes' ? 'checked' : '' }} disabled
                                                   id="business_currently_has_loans_leases_yes"/>
                                            <label class="form-check-label"
                                                   for="business_currently_has_loans_leases_yes">
                                                ඔව්
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="business_currently_has_loans_leases"
                                                   value="no"
                                                   {{ $form_data->business_currently_has_loans_leases == 'no' ? 'checked' : '' }} disabled
                                                   id="business_currently_has_loans_leases_no"/>
                                            <label class="form-check-label"
                                                   for="business_currently_has_loans_leases_no">
                                                නැත
                                            </label>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="business_currently_has_formal_or_informal_loans">
                                            23. 'ඔව්' නම් , විධිමත්හෝ අවිධිමත් ණය ද යන්න කරුණාකර
                                            සලකුණු කරන්න.
                                        </label>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->business_currently_has_formal_or_informal_loans == 'formal_loans' ? 'checked' : '' }} disabled
                                                   name="business_currently_has_formal_or_informal_loans"
                                                   value="formal_loans"
                                                   id="formal_loans"/>
                                            <label class="form-check-label"
                                                   for="formal_loans">
                                                බැංකු සහ මුල්‍ය ආයතන වලින් විධිමත් ණය
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->business_currently_has_formal_or_informal_loans == 'informal_loans' ? 'checked' : '' }} disabled
                                                   name="business_currently_has_formal_or_informal_loans"
                                                   value="informal_loans"
                                                   id="informal_loans"/>
                                            <label class="form-check-label"
                                                   for="informal_loans">
                                                අවිධිමත් මුදල් ණය දෙන්නන්ගෙන් සහ වෙනත් පුද්ගලයන් ගෙන්
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="what_is_required_to_revitalize_the_business">
                                            24. ඔබගේ ව්‍යාපාරය නැවත යථා තත්ත්වයට පත් කිරීමට අවශ්‍යය
                                            වන්නේ,
                                        </label>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->what_is_required_to_revitalize_the_business == 'concession_money' ? 'checked' : '' }} disabled
                                                   name="what_is_required_to_revitalize_the_business"
                                                   value="concession_money"
                                                   id="concession_money"/>
                                            <label class="form-check-label"
                                                   for="concession_money">
                                                සහන මුදලක්
                                            </label>
                                            <input type="number" class="form-control"
                                                   id="concession_money_amount"
                                                   name="concession_money_amount"
                                                   value="{{ $form_data->concession_money_amount }}"
                                                   disabled
                                                   placeholder="එහි වටිනාකම රු" maxlength="255"/>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->what_is_required_to_revitalize_the_business == 'loan' ? 'checked' : '' }} disabled
                                                   name="what_is_required_to_revitalize_the_business"
                                                   value="loan"
                                                   id="loan"/>
                                            <label class="form-check-label"
                                                   for="loan">
                                                ණය මුදලක්
                                            </label>
                                            <input type="number" class="form-control"
                                                   id="loan_amount"
                                                   name="loan_amount"
                                                   value="{{ $form_data->loan_amount }}"
                                                   disabled
                                                   placeholder="එහි වටිනාකම රු" maxlength="255"/>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="what_is_required_to_revitalize_the_business"
                                                   value="update_existing_credit"
                                                   {{ $form_data->what_is_required_to_revitalize_the_business == 'update_existing_credit' ? 'checked' : '' }} disabled
                                                   id="update_existing_credit"/>
                                            <label class="form-check-label"
                                                   for="update_existing_credit">
                                                පවතින ණය යාවත් කාලීන කිරීමක්
                                            </label>
                                            <input type="number" class="form-control"
                                                   id="credit_update_amount"
                                                   name="credit_update_amount"
                                                   value="{{ $form_data->credit_update_amount }}"
                                                   disabled
                                                   placeholder="එහි වටිනාකම රු" maxlength="255"/>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="bank_loan_information">
                                            25. ලබා ගෙන ඇති ණය පහසුකම් පිලිබඳ විස්තර: (ඔබ බැංකු /
                                            මූල්‍ය ආයතන කිහිපයකින් ණය ලබාගෙන ඇත්නම් ඒ බව වෙන වෙනම සදහන් කරන්න).
                                        </label>

                                        <div class="mb-4 row">
                                            <label class="form-check-label col" for="bank_and_branch_of_loan">
                                                ඔබ ණය ලබාගත් බැංකුව හා බැංකු ශාඛාව
                                            </label>
                                            <input type="text" class="form-control col"
                                                   name="bank_and_branch_of_loan_one"
                                                   value="{{ $form_data->bank_and_branch_of_loan_one }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                            <input type="text" class="form-control col mx-2"
                                                   name="bank_and_branch_of_loan_two"
                                                   value="{{ $form_data->bank_and_branch_of_loan_two }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                            <input type="text" class="form-control col"
                                                   name="bank_and_branch_of_loan_three"
                                                   value="{{ $form_data->bank_and_branch_of_loan_three }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                        </div>

                                        <div class="mb-4 row">
                                            <label class="form-check-label col" for="bank_credit_facility_number">
                                                බැංකු ණය පහසුකම් අංකය
                                            </label>
                                            <input type="text" class="form-control col"
                                                   name="bank_credit_facility_number_one"
                                                   value="{{ $form_data->bank_credit_facility_number_one }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                            <input type="text" class="form-control col mx-2"
                                                   name="bank_credit_facility_number_two"
                                                   value="{{ $form_data->bank_credit_facility_number_two }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                            <input type="text" class="form-control col"
                                                   name="bank_credit_facility_number_three"
                                                   value="{{ $form_data->bank_credit_facility_number_three }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                        </div>

                                        <div class="mb-4 row">
                                            <label class="form-check-label col" for="loan_scheme">
                                                ණය යෝජනා ක්‍රමය
                                            </label>
                                            <input type="text" class="form-control col"
                                                   name="loan_scheme_one"
                                                   value="{{ $form_data->loan_scheme_one }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                            <input type="text" class="form-control col mx-2"
                                                   name="loan_scheme_two"
                                                   value="{{ $form_data->loan_scheme_two }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                            <input type="text" class="form-control col"
                                                   name="loan_scheme_three"
                                                   value="{{ $form_data->loan_scheme_three }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                        </div>

                                        <div class="mb-4 row">
                                            <label class="form-check-label col"
                                                   for="year_and_month_of_obtaining_loan">
                                                ණය ලබාගත් වර්ෂය සහ මාසය
                                            </label>
                                            <input type="text" class="form-control col"
                                                   name="year_and_month_of_obtaining_loan_one"
                                                   value="{{ $form_data->year_and_month_of_obtaining_loan_one }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                            <input type="text" class="form-control col mx-2"
                                                   name="year_and_month_of_obtaining_loan_two"
                                                   value="{{ $form_data->year_and_month_of_obtaining_loan_two }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                            <input type="text" class="form-control col"
                                                   name="year_and_month_of_obtaining_loan_three"
                                                   value="{{ $form_data->year_and_month_of_obtaining_loan_three }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                        </div>

                                        <div class="mb-4 row">
                                            <label class="form-check-label col" for="total_loans_obtained">
                                                ලබාගත් මුළු ණය ප්‍රමාණය (රු.)
                                            </label>
                                            <input type="text" class="form-control col"
                                                   name="total_loans_obtained_one"
                                                   value="{{ $form_data->total_loans_obtained_one }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                            <input type="text" class="form-control col mx-2"
                                                   name="total_loans_obtained_two"
                                                   value="{{ $form_data->total_loans_obtained_two }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                            <input type="text" class="form-control col"
                                                   name="total_loans_obtained_three"
                                                   value="{{ $form_data->total_loans_obtained_three }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                        </div>

                                        <div class="mb-4 row">
                                            <label class="form-check-label col"
                                                   for="deposited_as_collateral_to_obtain_a_loan">
                                                ණය ලබා ගැනීම සදහා ඇප වශයෙන් තැන්පත් කරණු ලැබුවේ?
                                            </label>
                                            <input type="text" class="form-control col"
                                                   name="deposited_as_collateral_to_obtain_a_loan_one"
                                                   value="{{ $form_data->deposited_as_collateral_to_obtain_a_loan_one }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                            <input type="text" class="form-control col mx-2"
                                                   name="deposited_as_collateral_to_obtain_a_loan_two"
                                                   value="{{ $form_data->deposited_as_collateral_to_obtain_a_loan_two }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                            <input type="text" class="form-control col"
                                                   name="deposited_as_collateral_to_obtain_a_loan_three"
                                                   value="{{ $form_data->deposited_as_collateral_to_obtain_a_loan_three }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                        </div>

                                        <div class="mb-4 row">
                                            <label class="form-check-label col" for="term_of_the_loan">
                                                ණය ලබාගෙන ඇති කාල සීමාව
                                            </label>
                                            <input type="text" class="form-control col"
                                                   name="term_of_the_loan_one"
                                                   value="{{ $form_data->term_of_the_loan_one }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                            <input type="text" class="form-control col mx-2"
                                                   name="term_of_the_loan_two"
                                                   value="{{ $form_data->term_of_the_loan_two }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                            <input type="text" class="form-control col"
                                                   name="term_of_the_loan_three"
                                                   value="{{ $form_data->term_of_the_loan_three }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                        </div>

                                        <div class="mb-4 row">
                                            <label class="form-check-label col" for="year_month_loan_is_due">
                                                ණය අවසන් වීමට නියමිත වර්ෂය හා මාසය
                                            </label>
                                            <input type="text" class="form-control col"
                                                   name="year_month_loan_is_due_one"
                                                   value="{{ $form_data->year_month_loan_is_due_one }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                            <input type="text" class="form-control col mx-2"
                                                   name="year_month_loan_is_due_two"
                                                   value="{{ $form_data->year_month_loan_is_due_two }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                            <input type="text" class="form-control col"
                                                   name="year_month_loan_is_due_three"
                                                   value="{{ $form_data->year_month_loan_is_due_three }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                        </div>

                                        <div class="mb-4 row">
                                            <label class="form-check-label col" for="debt_default_years_months">
                                                ණය ගෙවීම මගහැරී ඇති වර්ෂයන් \ මාස
                                            </label>
                                            <input type="text" class="form-control col"
                                                   name="debt_default_years_months_one"
                                                   value="{{ $form_data->debt_default_years_months_one }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                            <input type="text" class="form-control col mx-2"
                                                   name="debt_default_years_months_two"
                                                   value="{{ $form_data->debt_default_years_months_two }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                            <input type="text" class="form-control col"
                                                   name="debt_default_years_months_three"
                                                   value="{{ $form_data->debt_default_years_months_three }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                        </div>

                                        <div class="mb-4 row">
                                            <label class="form-check-label col" for="remaining_installments">
                                                ගෙවිමට ඇති වාරික ගණන
                                            </label>
                                            <input type="text" class="form-control col"
                                                   name="remaining_installments_one"
                                                   value="{{ $form_data->remaining_installments_one }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                            <input type="text" class="form-control col mx-2"
                                                   name="remaining_installments_two"
                                                   value="{{ $form_data->remaining_installments_two }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                            <input type="text" class="form-control col"
                                                   name="remaining_installments_three"
                                                   value="{{ $form_data->remaining_installments_three }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                        </div>

                                        <div class="mb-4 row">
                                            <label class="form-check-label col" for="total_interest_to_be_paid">
                                                පොළිය සදහා ගෙවිය යුතු මුළු මුදල
                                            </label>
                                            <input type="text" class="form-control col"
                                                   name="total_interest_to_be_paid_one"
                                                   value="{{ $form_data->total_interest_to_be_paid_one }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 1" maxlength="255"/>

                                            <input type="text" class="form-control col mx-2"
                                                   name="total_interest_to_be_paid_two"
                                                   value="{{ $form_data->total_interest_to_be_paid_two }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 2" maxlength="255"/>

                                            <input type="text" class="form-control col"
                                                   name="total_interest_to_be_paid_three"
                                                   value="{{ $form_data->total_interest_to_be_paid_three }}"
                                                   disabled
                                                   placeholder="බැංකු / මූල්‍ය ආයතන 3" maxlength="255"/>
                                        </div>

                                        <h5>(සැ.යු. උක්ත තොරතුරු සනාථ කිරීම සඳහා ණය පිළිබඳ අදාල බැංකු හෝ මූල්‍ය ආයතන
                                            වෙතින් ඔබ වෙත එවා ඇති ලිපිලේඛණ වල පිටපත් ඉදිරිපත් කළ යුතුය). </h5>

                                    </div>

                                    <div class="form-group">
                                        <label
                                                for="applied_for_government_assistance_after_terrorist_attacks_covid">
                                            26. පාස්කු ප්‍රහාරය හෝ කොවිඩ් 19 වසංගතය ආරම්භ වීමෙන් පසුව
                                            කිසියම් සහනයක් හෝ රජයේ සහනාධාරයක් ලබාගැනීමට අයදුම් කලේද?
                                        </label>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->applied_for_government_assistance_after_terrorist_attacks_covid == 'heard_but_does_not_know_government_relief' ? 'checked' : '' }} disabled
                                                   name="applied_for_government_assistance_after_terrorist_attacks_covid"
                                                   value="heard_but_does_not_know_government_relief"
                                                   id="heard_but_does_not_know_government_relief"/>
                                            <label class="form-check-label"
                                                   for="heard_but_does_not_know_government_relief">
                                                රජයේ සහනාධාර පිළිබද ඇසුනද ඒ පිළිබද නොදනි
                                            </label>
                                        </div>


                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="applied_for_government_assistance_after_terrorist_attacks_covid"
                                                   {{ $form_data->applied_for_government_assistance_after_terrorist_attacks_covid == 'have_not_applied_to_any_relief' ? 'checked' : '' }} disabled
                                                   value="have_not_applied_to_any_relief"
                                                   id="have_not_applied_to_any_relief"/>
                                            <label class="form-check-label"
                                                   for="have_not_applied_to_any_relief">
                                                මම මේ වන විට කිසිදු සහනයක් ලබා ගැනීමට අයදුම්කර නැත
                                            </label>
                                        </div>


                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="applied_for_government_assistance_after_terrorist_attacks_covid"
                                                   {{ $form_data->applied_for_government_assistance_after_terrorist_attacks_covid == 'eligible_for_insurance_compensation' ? 'checked' : '' }} disabled
                                                   value="eligible_for_insurance_compensation"
                                                   id="eligible_for_insurance_compensation"/>
                                            <label class="form-check-label"
                                                   for="eligible_for_insurance_compensation">
                                                රක්ෂණ වන්දි ලබා ගැනීමට සුදුසුකම් ලබා සිටින නිසා ඒ සදහා අයදුම් කලෙමි
                                            </label>
                                            <div class="my-2">
                                                <label>එසේ අයදුම්කල රක්ෂණ වන්දි ලැබුණිද?</label>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input type="radio" class="form-check-input"
                                                                   {{ $form_data->eligible_for_insurance_compensation_received == 'eligible_for_insurance_compensation_received_yes' ? 'checked' : '' }} disabled
                                                                   name="eligible_for_insurance_compensation_received"
                                                                   value="eligible_for_insurance_compensation_received_yes"
                                                                   id="eligible_for_insurance_compensation_received_yes"/>
                                                            <label class="form-check-label"
                                                                   for="eligible_for_insurance_compensation_received_yes">
                                                                ඔව්
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input type="radio" class="form-check-input"
                                                                   {{ $form_data->eligible_for_insurance_compensation_received == 'eligible_for_insurance_compensation_received_no' ? 'checked' : '' }} disabled
                                                                   name="eligible_for_insurance_compensation_received"
                                                                   value="eligible_for_insurance_compensation_received_no"
                                                                   id="eligible_for_insurance_compensation_received_no"/>
                                                            <label class="form-check-label"
                                                                   for="eligible_for_insurance_compensation_received_no">
                                                                නැත
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   name="applied_for_government_assistance_after_terrorist_attacks_covid"
                                                   {{ $form_data->applied_for_government_assistance_after_terrorist_attacks_covid == 'submitted_for_concessions_introduced_by_the_central_bank' ? 'checked' : '' }} disabled
                                                   value="submitted_for_concessions_introduced_by_the_central_bank"
                                                   id="submitted_for_concessions_introduced_by_the_central_bank"/>
                                            <label class="form-check-label"
                                                   for="submitted_for_concessions_introduced_by_the_central_bank">
                                                ශ්‍රී ලංකා මහ බැංකුව විසින් හදුන්වා දෙන ලද සහන ලබා ගැනීම සදහා
                                                ගනුදෙනු
                                                සිදුකරන බැංකුව හරහා අයදුම්පත් යොමු කළෙමි.
                                            </label>
                                            <div class="mt-2">
                                                <label>එසේ අයදුම්කල සහන ලැබුණිද?</label>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input type="radio" class="form-check-input"
                                                                   {{ $form_data->received_concessions_introduced_by_the_central_bank == 'yes' ? 'checked' : '' }} disabled
                                                                   name="received_concessions_introduced_by_the_central_bank"
                                                                   value="yes"
                                                                   id="submitted_for_concessions_introduced_by_the_central_bank_yes"/>
                                                            <label class="form-check-label"
                                                                   for="submitted_for_concessions_introduced_by_the_central_bank_yes">
                                                                ඔව්
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input type="radio" class="form-check-input"
                                                                   {{ $form_data->received_concessions_introduced_by_the_central_bank == 'no' ? 'checked' : '' }} disabled
                                                                   name="received_concessions_introduced_by_the_central_bank"
                                                                   value="no"
                                                                   id="submitted_for_concessions_introduced_by_the_central_bank_no"/>
                                                            <label class="form-check-label"
                                                                   for="submitted_for_concessions_introduced_by_the_central_bank_no">
                                                                නැත
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->applied_for_government_assistance_after_terrorist_attacks_covid == 'applied_for_different_relief' ? 'checked' : '' }} disabled
                                                   name="applied_for_government_assistance_after_terrorist_attacks_covid"
                                                   value="applied_for_different_relief"
                                                   id="applied_for_different_relief"/>
                                            <label class="form-check-label"
                                                   for="applied_for_different_relief">
                                                වෙනත් මුල්‍ය සහන ලබා ගැනීම සදහා අයදුම් කළෙමි
                                            </label>
                                            <div class="my-2">
                                                <label>එසේ අයදුම්කල සහන ලැබුණිද?</label>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input type="radio" class="form-check-input"
                                                                   name="received_for_different_relief"
                                                                   {{ $form_data->received_for_different_relief == 'yes' ? 'checked' : '' }} disabled
                                                                   value="yes"
                                                                   id="received_for_different_relief_yes"/>
                                                            <label class="form-check-label"
                                                                   for="received_for_different_relief_yes">
                                                                ඔව්
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input type="radio" class="form-check-input"
                                                                   name="received_for_different_relief"
                                                                   {{ $form_data->received_for_different_relief == 'no' ? 'checked' : '' }} disabled
                                                                   value="no"
                                                                   id="received_for_different_relief_no"/>
                                                            <label class="form-check-label"
                                                                   for="received_for_different_relief_no">
                                                                නැත
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                   {{ $form_data->applied_for_government_assistance_after_terrorist_attacks_covid == 'received_help_from_family_friends' ? 'checked' : '' }} disabled
                                                   name="applied_for_government_assistance_after_terrorist_attacks_covid"
                                                   value="received_help_from_family_friends"
                                                   id="received_help_from_family_friends"/>
                                            <label class="form-check-label"
                                                   for="received_help_from_family_friends">
                                                මගේ පවුලේ උදවියගේ හා යහළුවන්ගේ උදව් ඉල්ලුවෙමි
                                            </label>
                                        </div>


                                    </div>

                                </div>
                            </div>
                            @if(!$form_data)
                                <button type="submit" class="btn btn-primary">
                                    පෝරමය සුරකින්න
                                </button>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        @endif
    </main>
    <footer id="footer" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-muted small">
                    කතුහිමිකම © 2020 ජාතික ව්‍යවසාය සංවර්ධන අධිකාරිය. සියළු හිමිකම් ඇවිරිනි.
                </div>
            </div>
        </div>
    </footer>
    <div class="floating-menu shadow-lg no-print">
        <div class="btn-group btn-group-vertical btn-change-size" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-light font-sm font-weight-bold" id="fontSm">A</button>
            <button type="button" class="btn btn-light font-md active font-weight-bold" id="fontMd">A</button>
            <button type="button" class="btn btn-light font-lg font-weight-bold" id="fontLg">A</button>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        // const content = document.querySelector('.main-content');
        // scrollnav.init(content, {
        //     sections: 'h2 .number',
        //     showHeadline: false
        // });

        function removeClass() {
            $('html').removeClass();
            $('.btn-change-size .btn').removeClass('active');
        }

        $('#fontSm').on('click', function () {
            removeClass();
            $('html').addClass('font-sm');
            $(this).addClass('active');
        });
        $('#fontMd').on('click', function () {
            removeClass();
            $('html').addClass('font-md');
            $(this).addClass('active');
        });
        $('#fontLg').on('click', function () {
            removeClass();
            $('html').addClass('font-lg');
            $(this).addClass('active');
        });
        $('.company-type').click(function () {
            if ($(this).val() === 'c_1_a') {
                $('.production').show();
                $('.services').hide();
            }

            if ($(this).val() === 'c_1_b') {
                $('.production').hide();
                $('.services').show();
            }
        });

        $('[name="legal_nature_of_business"]').on('change', function () {
            $('#legal_nature_of_business').remove();
            if ($(this).val() === 'other') {
                $(this).parent().parent().append('<input type="text" class="form-control" id="legal_nature_of_business"\n' +
                    '                                                   name="legal_nature_of_business"\n' +
                    '                                                   placeholder="වෙනත් (සඳහන් කරන්න)" maxlength="255"/>')
            }
        });

        $('[name="primary_industry"]').on('change', function () {
            $('#primary_industry').remove();
            if ($(this).val() === 'primary_industry_other') {
                $(this).parent().parent().append('<input type="text" class="form-control" id="primary_industry"\n' +
                    '                                                   name="primary_industry"\n' +
                    '                                                   placeholder="වෙනත් (සඳහන් කරන්න)" maxlength="255"/>')
            }
        });

        $('[name="impact_on_business_after_terrorist_attacks_and_covid"]').on('change', function () {
            $('#impact_on_business_after_terrorist_attacks_and_covid').remove();
            if ($(this).val() === 'impact_on_business_after_terrorist_attacks_and_covidother') {
                $(this).parent().parent().append('<input type="text" class="form-control"\n' +
                    '                id="impact_on_business_after_terrorist_attacks_and_covid"\n' +
                    '                name="impact_on_business_after_terrorist_attacks_and_covid"\n' +
                    '                placeholder="වෙනත් (සඳහන් කරන්න)" maxlength="255"/>');
            }
        });

    });
</script>
</body>
</html>
