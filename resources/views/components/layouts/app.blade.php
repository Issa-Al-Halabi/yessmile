<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" @endif
class="scroll-smooth">

<!-- Mirrored from yessmile.ae/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Mar 2024 14:35:58 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta name="”robots”" content="”noindex”">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />

    <title>{{ $title ?? 'مركز يس سمايل | تجميل الأسنان في تركيا' }}</title>

    {{-- Google Map API --}}
    <script async
        src="https://maps.googleapis.com/maps/api/js?key={{ config('app.GOOGLE_API_KEY') }}&callback=console.debug&libraries=maps,marker&v=beta">
    </script>


    <meta name="description"
        content="مركز YesSmile، أكبر مركز لتجميل وزراعة الأسنان في تركيا، نقدم مجموعة واسعة من الخدمات، بما في ذلك ابتسامة هوليود وزراعة الأسنان وتجميل اللثة وعلاجات الأسنان. نستخدم أحدث التقنيات لتزويد مرضانا بأعلى جودة ممكنة من الرعاية. تواصل معنا اليوم لتحديد موعد استشارة مجانية ومعرفة المزيد عن خدماتنا." />
    <meta property="og:locale" content="ar_AR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="مركز يس سمايل | تجميل الأسنان في تركيا" />
    <meta property="og:description"
        content="مركز YesSmile، أكبر مركز لتجميل وزراعة الأسنان في تركيا، نقدم مجموعة واسعة من الخدمات، بما في ذلك ابتسامة هوليود وزراعة الأسنان وتجميل اللثة وعلاجات الأسنان. نستخدم أحدث التقنيات لتزويد مرضانا بأعلى جودة ممكنة من الرعاية. تواصل معنا اليوم لتحديد موعد استشارة مجانية ومعرفة المزيد عن خدماتنا." />
    <meta property="og:url" content="index.html" />
    <meta property="og:site_name" content="YesSmile" />
    <meta property="article:modified_time" content="2023-09-28T10:43:50+00:00" />
    <meta name="twitter:card" content="summary_large_image" />
    <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://yessmile.ae/","url":"https://yessmile.ae/","name":"مركز يس سمايل | تجميل الأسنان في تركيا","isPartOf":{"@id":"https://yessmile.ae/#website"},"datePublished":"2023-05-07T21:15:48+00:00","dateModified":"2023-09-28T10:43:50+00:00","description":"مركز YesSmile، أكبر مركز لتجميل وزراعة الأسنان في تركيا، نقدم مجموعة واسعة من الخدمات، بما في ذلك ابتسامة هوليود وزراعة الأسنان وتجميل اللثة وعلاجات الأسنان. نستخدم أحدث التقنيات لتزويد مرضانا بأعلى جودة ممكنة من الرعاية. تواصل معنا اليوم لتحديد موعد استشارة مجانية ومعرفة المزيد عن خدماتنا.","breadcrumb":{"@id":"https://yessmile.ae/#breadcrumb"},"inLanguage":"ar","potentialAction":[{"@type":"ReadAction","target":["https://yessmile.ae/"]}]},{"@type":"BreadcrumbList","@id":"https://yessmile.ae/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"الرئيسية"}]},{"@type":"WebSite","@id":"https://yessmile.ae/#website","url":"https://yessmile.ae/","name":"YesSmile","description":"نعم لإبتسامة جميلة","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://yessmile.ae/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"ar"}]}</script>
    <meta name="yandex-verification" content="24462e6a70bc6251" />

    <link rel="stylesheet" href="{{ asset('css/styles/app.css') }}" type="text/css" media="all" />

    <link rel="stylesheet" id="wp-block-library-rtl-css"
        href="{{ asset('wp-includes/css/dist/block-library/style-rtl.min84fc.css') }}" type="text/css" media="all" />

    <link rel="stylesheet" id="YSMILE-main-style-css"
        href="{{ asset('wp-content/themes/yessmile-wp/assets/css/style84fc.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" id="YSMILE-style-css" href="{{ asset('wp-content/themes/yessmile-wp/style84fc.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" id="YSMILE-slick-css-css"
        href="{{ asset('cdnjs/ajax/libs/slick-carousel/1.9.0/slick.min84fc.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" id="YSMILE-slick-theme-css"
        href="{{ asset('cdnjs/ajax/libs/slick-carousel/1.9.0/slick-theme.min84fc.css') }}" type="text/css"
        media="all" />
    <script type="text/javascript" src="{{ asset('wp-includes/js/jquery/jquery.minf43b.js') }}" id="jquery-core-js">
    </script>
    <script type="text/javascript" src="{{ asset('wp-includes/js/jquery/jquery-migrate.min5589.js') }}"
        id="jquery-migrate-js"></script>
    <link rel="https://api.w.org/" href="{{ asset('wp-json/index.html') }}" />
    <link rel="alternate" type="application/json" href="{{ asset('wp-json/wp/v2/pages/8.json') }}" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{ asset('xmlrpc0db0.php') }}" />
    <meta name="generator" content="WordPress 6.4.3" />
    <link rel="alternate" type="application/json+oembed" href="{{ asset('wp-json/oembed/1.0/embed1122.json') }}" />
    <link rel="alternate" type="text/xml+oembed" href="{{ asset('wp-json/oembed/1.0/embed9cc1&amp;format=xml') }}" />

    <link rel="icon" href="{{ asset('assets/yessmile-favicon-150x150.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/yessmile-favicon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('assets/yessmile-favicon.png') }}" />

</head>

<body data-rsssl="1" class="rtl home page-template-default page page-id-8">
    <header class="z-50 sticky">
        <div class="bg-primary w-full px-[4rem] xl:px-0 ">
            <div class="flex max-w-[127rem] mx-auto">
                <div class="flex flex-1 justify-between items-center ">
                    <a href="{{ url('/') }}" class="py-[3rem]  inline-block">
                        <img src="{{ asset('wp-content/themes/yessmile-wp/assets/images/site-logo.svg') }}" alt>
                    </a>
                    <nav class="items-center  hidden xl:block  w-full  ">
                        <ul class="flex items-center justify-center gap-[3rem]">
                            <li><a class="nav-item-link" href="{{ url('/') }}">@lang('app.Home')</a></li>

                            <li><a class="nav-item-link" href="{{ url('our-clinic') }}">@lang('app.ourClinic')</a></li>
                            <li class="group mini-nav-wrap ">
                                <a class="nav-item-link" href="#">@lang('app.aboutus')</a>
                                <div
                                    class="mini-nav-item w-full bg-primary-nav   transition-all invisible ease-in   opacity-0 duration-300 absolute top-[9.6rem] group-hover:visible group-hover:opacity-100    left-0">
                                    <div class=" min-h-[10rem] bg-primary-nav rounded-b-[2rem]">
                                        <div class="main-container  py-[2rem]">
                                            <div class="flex gap-0">
                                                <div class="flex-1">
                                                    <div class="sub-nav">
                                                        <ul>
                                                            <li class="relative">
                                                                <a class="link-box" href="{{ url('who-we-are') }}">
                                                                    <span class="nav-icon-img"><img
                                                                            class="max-h-[3rem]"
                                                                            src="{{ asset('assets/Group-2.png') }}" /></span>
                                                                    <span class="pr-[1rem] leading-[2.8rem]">
                                                                        @lang('app.aboutus')
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="relative">
                                                                <a class="link-box" href="{{ url('our-team') }}">
                                                                    <span class="nav-icon-img"><img
                                                                            class="max-h-[3rem]"
                                                                            src="{{ asset('assets/Group-801-1.png') }}" /></span>
                                                                    <span class="pr-[1rem] leading-[2.8rem]">
                                                                        @lang('app.ourteam')
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li class="relative">
                                                                <a class="link-box" href="{{ url('our_branches') }}">
                                                                    <span class="nav-icon-img"><img
                                                                            class="max-h-[3rem]"
                                                                            src="{{ asset('assets/branch.png') }}" /></span>
                                                                    <span class="pr-[1rem] leading-[2.8rem]">
                                                                        @lang('app.our_branches')
                                                                    </span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a class="nav-item-link" href="{{ url('our-world') }}"> @lang('app.our_world') </a></li>

                            <li class="group mini-nav-wrap ">
                                <a class="nav-item-link" href="#"> @lang('app.languages') </a>
                                <div
                                    class="mini-nav-item w-full bg-primary-nav   transition-all invisible ease-in   opacity-0 duration-300 absolute top-[9.6rem] group-hover:visible group-hover:opacity-100    left-0">
                                    <div class=" min-h-[10rem] bg-primary-nav rounded-b-[2rem]">
                                        <div class="main-container  py-[2rem]">
                                            <div class="flex gap-0">
                                                <div class="flex-1">
                                                    <div class="sub-nav">
                                                        <ul>
                                                            <li class="relative">
                                                                <a class="link-box" href="{{ url('ar') }}">
                                                                    <span class="pr-[1rem] leading-[2.8rem]">
                                                                        @lang('app.arabic')

                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="relative">
                                                                <a class="link-box" href="{{ url('en') }}">
                                                                    <span class="pr-[1rem] leading-[2.8rem]">
                                                                        @lang('app.english')

                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <div
                        class="nav-blure-bg backdrop-blur-sm fixed bg-light/70 left-0 top-0 right-0 bottom-0 z-[-1] transition-all ease-out opacity-0 invisible ">
                    </div>
                </div>
                <div class="xl:flex items-center hidden">
                    <div class="btn-header">
                        <a href="{{ url('consultation') }}" target>
                            @lang('app.free_consultation')
                        </a>
                    </div>
                </div>
                <div class="flex xl:hidden flex-col justify-center">
                    <div class="mobile-menu-btn cursor-pointer">
                        <span class="mobile-icon-span mobile-icon-span_top"></span>
                        <span class="mobile-icon-span mobile-icon-span_mid"></span>
                        <span class="mobile-icon-span mobile-icon-span_btm"></span>
                    </div>
                </div>
            </div>
        </div>
        <nav
            class="mobile-nav-menu-wrap fixed z-[-1] right-0 top-0 left-0 bottom-0 items-center py-[4rem]  block xl:hidden  w-full
        sm:max-w-[50rem]  transition-all ease-in-out duration-1000  closed
        ">
            <div class="fixed top-0 left-0 right-0 bottom-0 bg-primary-nav/50 backdrop-blur-2xl   z-[-1]"></div>
            <div class="overflow-y-auto max-h-[90%] sm:max-h-screen sm:h-screen bg-primary-nav py-[10rem] ">
                <ul class="flex flex-col gap-0 nav-menu-mobile px-[4rem] py-[6rem]">
                    <li><a class="nav-item-link" href="{{ url('/') }}">
                            @lang('app.Home')
                        </a></li>

                    <li><a class="nav-item-link" href="{{ url('our-clinic') }}">
                            @lang('app.ourClinic')
                        </a></li>
                    <li class="group mini-nav-wrap ">
                        <a class="nav-item-link" href="#">
                            @lang('app.aboutus')
                        </a>
                        <div
                            class="mini-nav-item w-full bg-primary-nav   transition-all invisible ease-in   opacity-0 duration-300 absolute top-[9.6rem] group-hover:visible group-hover:opacity-100    left-0">
                            <div class=" min-h-[10rem] bg-primary-nav rounded-b-[2rem]">
                                <div class="main-container  py-[2rem]">
                                    <div class="flex gap-0">
                                        <div class="flex-1">
                                            <div class="sub-nav">
                                                <ul>
                                                    <li class="relative">
                                                        <a class="link-box" href="{{ url('who-we-are') }}">
                                                            <span class="nav-icon-img"><img class="max-h-[3rem]"
                                                                    src="{{ asset('assets/Group-2.png') }}" /></span>
                                                            <span class="pr-[1rem] leading-[2.8rem]">
                                                                @lang('app.aboutus')
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="relative">
                                                        <a class="link-box" href="{{ url('our-team') }}">
                                                            <span class="nav-icon-img"><img class="max-h-[3rem]"
                                                                    src="{{ asset('assets/Group-801-1.png') }}" /></span>
                                                            <span class="pr-[1rem] leading-[2.8rem]">
                                                                @lang('app.ourteam')
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="nav-item-link" href="{{ url('our-world') }}">
                            @lang('app.our_world')
                        </a></li>

                    <li class="group mini-nav-wrap ">
                        <a class="nav-item-link" href="#">
                            @lang('app.languages')
                        </a>
                        <div
                            class="mini-nav-item w-full bg-primary-nav   transition-all invisible ease-in   opacity-0 duration-300 absolute top-[9.6rem] group-hover:visible group-hover:opacity-100    left-0">
                            <div class=" min-h-[10rem] bg-primary-nav rounded-b-[2rem]">
                                <div class="main-container  py-[2rem]">
                                    <div class="flex gap-0">
                                        <div class="flex-1">
                                            <div class="sub-nav">
                                                <ul>
                                                    <li class="relative">
                                                        <a class="link-box" href="{{ url('ar') }}">
                                                            <span class="pr-[1rem] leading-[2.8rem]">
                                                                @lang('app.arabic')
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="relative">
                                                        <a class="link-box" href="{{ url('en') }}">
                                                            <span class="pr-[1rem] leading-[2.8rem]">
                                                                @lang('app.english')
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="flex justify-center">
                    <div class="btn-secondary">
                        <a href="{{ url('consultation') }}" target>
                            @lang('app.free_consultation')
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    {{ $slot }}


    <footer class="bg-primary py-[5rem] xl:py-[10rem]">
        <div class="main-container grid xl:grid-cols-2 grid-cols-1 xl:gap-[12.375rem] text-light leading-normal ">
            <div class="flex flex-col order-2 md:order-1 justify-between gap-0">
                <div class="mb-[5.375rem] hidden md:block"><img class="max-h-[6.7rem]"
                        src="{{ asset('wp-content/themes/yessmile-wp/assets/images/footer-logo.svg') }}" /></div>
                <div class="grid grid-cols-2">
                    <div>
                        <h3 class="mb-[30px] font-medium text-[2.4rem] md:text-[3.6rem]">
                            @lang('app.our_serices')

                        </h3>
                        <ul class="text-light/70 font-extrabold">
                            @php
                                use App\Models\Service;
                                $services = Service::all(['id', 'name'])->take(5);

                            @endphp
                            @foreach ($services as $service)
                                <li class="mb-[10px] text-[1.6rem] md:text-[2rem]"><a
                                        href="{{ url('service', $service['id']) }}">{{ $service['name'] }}</a></li>
                            @endforeach

                        </ul>
                    </div>
                    @php
                        use App\Models\Footer;
                        $footer = Footer::first();
                    @endphp
                    <div>
                        <h3 class="mb-[30px] font-medium text-[2.4rem] md:text-[3.6rem]">
                            @lang('app.book_now')
                        </h3>
                        <ul class="text-light/70  font-extrabold">
                            @if (isset($footer->book_now))
                                @foreach ($footer->book_now as $book_now)
                                    <li class="mb-[10px] text-[1.6rem] md:text-[2rem]"><a
                                            href="{{ $book_now['link'] }}">{{ $book_now['title'] }}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>

                </div>

                <h3 class="mb-[30px] font-medium text-[2.4rem] md:text-[3.6rem] mt-[77px]   leading-normal">
                    @lang('app.follow_us_on_social_media')
                </h3>
                <div class="flex justify-start gap-[50px]">

                    @if (isset($footer))
                        @foreach ($footer->socials as $social)
                            <a href="{{ $social['link'] }}" target="_blank"><img style="height:50px; width:50px;"
                                    src="{{ asset('storage/' . $social['image']) }}" /></a>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="flex justify-end order-1 md:order-2">
                <div class="w-full xl:pr-[40px] md:br-0">
                    <div class="mb-[1.375rem] block md:hidden"><img
                            src="{{ asset('wp-content/themes/yessmile-wp/assets/images/footer-logo.svg') }}" /></div>
                    <h3 class="mb-[20px] font-medium text-[2.4rem] md:text-[3.6rem]">
                        @lang('app.contact_us')

                    </h3>

                    @if (isset($footer['email']))
                        <a class="block text-light/70    mb-3" href="mailto:{{ $footer['email'] }}"><span
                                class="__cf_email__">{{ $footer['email'] }}</span></a>
                    @endif

                    @if (isset($footer['phone']))
                        <a class="block text-right ltr-dir text-light/70   " target="_blank"
                            href="https://wa.me/+{{ $footer['phone'] }}">+{{ $footer['phone'] }}</a>
                    @endif

                    <div class="mt-4">
                        <div>
                            {{-- <iframe style="border: 0; border-radius: 20px; width: 100%;"
                                src="https://maps.google.com/maps?q={{ $footer->lat }},{{ $footer->lang }}&z=15&output=embed"
                                width="450" height="450" allowfullscreen="allowfullscreen"></iframe> --}}
                            @if (isset($$footer))
                                <gmp-map center="{{ $footer->lat }},{{ $footer->lang }}" zoom="7"
                                    style="width=450px; height: 450px;" map-id="DEMO_MAP_ID">
                                    <gmp-advanced-marker position="{{ $footer->lat }},{{ $footer->lang }}"
                                        title="My location"></gmp-advanced-marker>
                                </gmp-map>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-container mt-[3rem]">
            <div class="footer-bottom-links text-light/70  font-extrabold">
                <a class="text-[1.6rem] ml-[3rem] inline-block font-normal " wire:navigate href="/privacy-policy">
                    @lang('app.privacy_policy')

                </a>
                <a class="text-[1.6rem] ml-[3rem] inline-block font-normal " wire:navigate href="/term-of-use">
                    @lang('app.terms')
                </a>
            </div>
        </div>
    </footer>

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PN5LVP4" height="0"
            width="0"></iframe></noscript>

    <link rel="stylesheet" id="YSMILE-img-comparison-slider-css"
        href="{{ asset('unpkg/img-comparison-slider%407.8.2/dist/styles.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" id="fancybox-css-css"
        href="{{ asset('cdnjs/ajax/libs/fancybox/3.5.7/jquery.fancybox.min84fc.css') }}" type="text/css"
        media="all" />
    <script data-cfasync="false" src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('wp-content/themes/yessmile-wp/assets/js/slick.min84fc.js') }}"
        id="YSMILE-slick-js"></script>
    <script type="text/javascript" src="{{ asset('wp-content/themes/yessmile-wp/assets/js/custom84fc.js') }}"
        id="YSMILE-custom-js"></script>
    <script type="text/javascript" src="{{ asset('unpkg/img-comparison-slider%407.8.2/dist/index.js') }}"
        id="img-comparison-slider-js"></script>
    <script type="text/javascript" src="{{ asset('cdnjs/ajax/libs/fancybox/3.5.7/jquery.fancybox.min84fc.js') }}"
        id="fancybox-js-js"></script>
</body>

</html>
