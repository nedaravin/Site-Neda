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
            <div class="container text-center py-2">
                <h1>Obtain "Made In Sri Lanka" Logo</h1>
            </div>
        </header>
        @if(!request()->has('form'))
            <section class="py-5 main-content">
                <div class="container py-5">
                    <form action="{{ route('form.logo_request.save') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-7">
                                <div class="card" id="">
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                   placeholder="Name" maxlength="255" required/>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="text" class="form-control" id="email" name="email"
                                                           placeholder="Email" maxlength="255" required/>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="mobile">Mobile</label>
                                                    <input type="text" class="form-control" id="mobile" name="mobile"
                                                           placeholder="Mobile" maxlength="255" required/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="business_name">Business Name</label>
                                            <input type="text" class="form-control" id="business_name"
                                                   name="business_name"
                                                   placeholder="Business Name" maxlength="255" required/>
                                        </div>

                                        <div class="form-group">
                                            <label for="business_registration_number">Business Registration
                                                Number</label>
                                            <input type="text" class="form-control" id="business_registration_number"
                                                   name="business_registration_number"
                                                   placeholder="Business Registration Number" maxlength="255" required/>
                                        </div>

                                        <div class="form-group">
                                            <label for="type_of_products_or_services">Type of products or
                                                services</label>
                                            <input type="text" class="form-control" id="type_of_products_or_services"
                                                   name="type_of_products_or_services"
                                                   placeholder="Type of Products or Services" maxlength="255" required/>
                                        </div>

                                        <div class="form-group">
                                            <label for="business_address">Business Address</label>
                                            <input type="text" class="form-control" id="business_address"
                                                   name="business_address"
                                                   placeholder="Business Address" maxlength="255" required/>
                                        </div>

                                        <button type="submit" class="btn btn-primary">
                                            Request
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5" >
                                <div class="card">
                                    <div class="card-body" style="overflow-y: scroll; height: 743px">
                                        <h4 class="card-title">MADE IN SRI LANKA සන්නාම ලාංඡනය ලබා දීමේ ක්‍රමවේදය</h4>
                                        <ul>
                                            <li>MADE IN SRI LANKA සන්නාම ලාංඡනය සදහා ඉල්ලුම් කිරීම ජාතික ව්‍යවසාය සංවර්ධන
                                                අධිකාරිය ප්‍රාදේශීය ව්‍යවසාය සංවර්ධන නිළධාරි හරහා හෝ සෘජුව ජාතික ව්‍යවසාය
                                                සංවර්ධන අධිකාරිය වෙබ් අඩවිය හරහා (www.madeinsrilanka.org) ඉල්ලුම් කල හැක.
                                            </li>
                                            <li>ඒ අනුව අයදුම්පත හා ඉල්ලීම් ලිපිය නියමයන් හා කොන්දේසි ලබා දෙන අතර ඒ සදහා එකග විය
                                                හැකි නම් එය නිවැරදිව පුරවා, නිවැරදිතාව පිිළිබද අදාල ප්‍රාදේශීය ලේකම් කාර්යාලයේ
                                                ව්‍යවසාය සංවර්ධන නිලධාරීගේ නිර්දේශයද ඇතිව ජාතික ව්‍යවසාය සංවර්ධන අධිකාරිය වෙත
                                                එවිය යුතුය.
                                            </li>
                                            <li>ව්‍යාපාර ලියාපදිංචිය ඇතුළු අනෙකුත් සහතික වල ඡායා පිටපත් මුල් පිටපත සමග සසදා
                                                සහතික කිරීම ජාතික ව්‍යවසාය සංවර්ධන අධිකාරියේ අධ්‍යක්ෂක හෝ සහකාර අධ්‍යක්ෂක විසින්
                                                සිදුකර තිබිය යුතුය.
                                            </li>
                                            <li>එවන ලද අයදුම්පත් විෂය භාරව පත් කර ඇති නිලධාරියා විසින් ගැඹුරින් පරීක්ෂා කරනු ලබන
                                                අතර එහිදී අඩු පාඩු සහිත අයදුම්පත් නැවත ව්‍යවසායකයා වෙත නිවැරදි කිරීම සදහා යවනු
                                                ලබන අතර නිවැරදිව පිළියෙල කල අයදුම්පත් ඇගයුම් කමිටුව වෙත ඉදිරිපත් කරනු ලබයි.
                                            </li>
                                            <li>කමිටුවට ඉදිරිපත් කරනු ලබන අයදුම්පත් නිවැරදි හා අඩුපාඩු රහිතව ඉදිරිපත් කිරීම සදහා
                                                සභාපතිතුමා විසින් පත්කරනු ලැබු ජාතික ව්‍යවසාය සංවර්ධන අධිකාරියේ විෂය භාර නිලධාරි
                                                විසින් සිදුකල යුතුය.
                                            </li>
                                            <li>මසකට වරක් ඇගයුම් කමිටුව රැස් විය යුතු අතර ඉදිරිපත් කර ඇති අයදුම්පත් එහිදි නැවතත්
                                                ගැඹුරින් පරීක්ෂා කරනු ඇත. කමිටු නිර්දේශය අවසාන තිරණය
                                            </li>
                                            <li>විෂය භාර නිලධාරී විසින් කමිටුව අවසානයේ ඉදිරිපත් කල අයදුම්පත් හා එහි නිර්දේශයන්
                                                පිළිබද සාරංශයක් සකස් කිරීම අනිවාර්යය වේ.
                                            </li>
                                            <li>නැවත ඉදිරිපත් කිරීමේ හැකියාව ඇති අයදුම්පත් නිවැරදි කර ගැනීම සදහා අවශ්‍යය සහයෝගය
                                                /අවශ්‍යය ආයතන සම්බන්ධීකරණ පත්කරනු ලැබු නිලධාරියා විසින් සිදුකල යුතුයි.
                                            </li>
                                            <li>සුදුසුකම් පරික්ෂා කිරීම සදහා ලකුණු දීමේ ක්‍රමවේදයක් අනුගමනය කරන අතර අවසාන ලකුණු,
                                                ප්‍රතිශතයක් ලෙස දේශීය බව 60% ඉක්ම විය යුතුය.
                                            </li>
                                            <li>ලාංඡනය ලබා දීම සදහා අනුමත වු පසු ගිවිසුමක් සමග ලාංඡනය ලබා දෙන අතර ලියාපදිංචි
                                                අංකයක්ද ලබා දෙනු ඇත.
                                            </li>
                                            <li>සන්නාම ලාංඡනය හා ලියාපදිංචි අංකය ලබා ගත් පසු හෝ තම ආයතනය මගින් නව නිෂ්පාදනයක්
                                                නැවත හදුන්වා දෙන්නේ නම් ඒ සදහා නැවත ඉල්ලුම් කොට අනු අංකයක් ලබා ගෙන තම භාණ්ඩ
                                                ලැයිස්තුව යාවත්කාලීන කර ගත හැක.
                                            </li>
                                        </ul>
                                        <h3>ව්‍යවසායකයාට අත්වන ප්‍රතිලාභ</h3>
                                        <ul>
                                            <li>තම නිෂ්පාදනයට දේශියත්වයක් දේශීය අනන්‍යතාවක් ලැබීම.</li>
                                            <li>වෙළදපල අවස්ථා වැඩි වීම.</li>
                                            <li>මෙම ලාංඡනය තම භාණ්ඩයට ලබා දීම තුලින් අප රටෙහි දේශිය නිෂ්පාදන වල අගය ඉහල දැමිය
                                                හැකි අතර විදේශීයව වැඩි ඉල්ලුමක් ලබාගත හැක.
                                            </li>
                                            <li>මේ තුලින් දේශීය නිෂ්පාදන වල ගුණාත්මක භාවය හීන කිරීම ,නිෂ්පාදන මංකොල්ල කෑම එක හා
                                                සමාන පාරිභෝගිකයා රවටන ගුණත්වයෙන් අඩු වංචාකාරි ව්‍යාපාර නවතා දැමිමෙන් සැබෑ
                                                නිෂ්පාදකයාට වටිනා අවස්ථාවක් ලබා දිය හැක.
                                            </li>
                                            <li>තම ව්‍යාපාරය කර්මාන්තයක් විදිහට සංවර්ධනය වීම හා ශක්තිමත් වීම.</li>
                                            <li>දේශීය හා ජාත්‍යයන්තර අංශවලට ව්‍යාපාරය ව්‍යාප්ත කර ගැනීමට ඊ වාණිජ වෙළද ද්වාර සේවා
                                                සදහා සම්බන්ධ කිරීම.
                                            </li>
                                            <li>ව්‍යාපාරයට අදාළ විවිධ ව්‍යාපාර සේවා සපයන ආයතන සම්බන්ධීකරණය කිරීම හා ඉදිරියේදි එම
                                                ආයතන වල ප්‍රමුඛතාව හා සහනයන් ලබා දීම.
                                            </li>
                                            <li>අවශ්‍යය විටක තාක්ෂණික සහය ලබා දීම හා නොමිලේ විදේශීය තාක්ෂණික සහයන් ලබා දීම.</li>
                                            <li>MADE IN SRI LANKA වෙළද ප්‍රදර්ශන සදහා අවස්ථා ලබා දීම.</li>
                                            <li>MADE IN SRI LANKA වෙළද කුටි සදහා බලය පැවරීම.</li>
                                        </ul>
                                        <h3>පසුවිපරම් කිරීම</h3>
                                        <ul>
                                            <li>නියාමනය කිරීමේ සම්පුර්ණ වගකීම අදාල ප්‍රාදේශීය ලේකම් කාර්යාලයේ ව්‍යවසාය සංවර්ධන
                                                නිලධාරි මගින් සිදුකෙරෙනු ඇත.
                                            </li>
                                            <li>නිලධාරීන් නොමැති ප්‍රාදේශීය ලේකම් කාර්යාලයක් නම් ආසන්නතම ප්‍රාදේශිය ලේකම්
                                                කාර්යාලයේ නිලධාරි හෝ ප්‍රධාන කාර්යාලයේ අදාල ව්‍යවසාය ප්‍රවර්ධන සහකාර/ ව්‍යවසාය
                                                ප්‍රවර්ධන නිලධාරි විසින් සිදුකරනු ලබයි.
                                            </li>
                                            <li>එකග වු නියමයන් කොන්දෙසි නිසියාකාරව පිළිපදින්නේ දැයි සොයා බැලීම ඔවුන් විසින්
                                                විවිධ පැති කඩ ඔස්සේ සිදු කරනු ලබයි.
                                            </li>
                                        </ul>
                                        <p>(සන්නාම ලාංඡනය භාවිතා කිරීම සදහා අවසර ලබා දෙන නිෂ්පාදනය හෝ සේවාවට හැර වෙනත්
                                            නිෂ්පාදනයකට /සේවාවකට යොදා ගන්නේද, සත්‍ය නිෂ්පාදකයාගේ/සේවා සපයන්නාගේ නම සදහන් නොවන
                                            අවස්ථාවක මෙම ලාංඡනය භාවිතා කරන්නේද, නිරවද්‍යතාව තහවුරු කරගැනීම සදහා වරින්වර සම්පුර්ණ
                                            ක්‍රියාවලියම විශ්ලේෂණය කිරීම, යම් අවස්ථාවක භාහිර පාර්ෂවයක් මගින් පැමිණිල්ලක් ලැබුනු
                                            අවස්ථාවක ඒ සදහා ක්‍රියාත්මක වීම.)</p>
                                        <ul>
                                            <li>වසරකට වරක් සන්නාම ලාංඡනය අලුත් කිරීම දැනුවත් කිරීම.</li>
                                            <li>අවශ්‍යය ඔනෑම අවස්ථාවක පරීක්ෂා කිරිමේ බලය ප්‍රදේශිය ව්‍යවසාය සංවර්ධන නිලධාරි හෝ
                                                ප්‍රධාන කාර්යාලයේ මේ සදහා පත්තර ඇති නිලධාරීට බලය ඇත.
                                            </li>
                                            <li>දේශිය නිෂ්පාදන දිරිමත් කිරීම සදහා අවශ්‍යය දැනුවත් කිරීම් සදහා සහය විම
                                                ,සම්බන්ධීකරණය,මග පෙන්වීම නිරන්තරයෙන් ජාතික ව්‍යවසාය සංවර්ධන අධිකාරිය විසින් හා
                                                ප්‍රාදේශීය ව්‍යවසාය සංවර්ධන නිලධාරීන් විසින් සිදුවිය යුතුයි.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
                            Thank you, your request is saved. <br/>
                            ස්තූතියි
                        </div>
                    </div>
                </div>
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
