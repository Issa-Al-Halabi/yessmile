    <main>

        <div @if (isset($about_us)) style="background-image:  url('{{ asset('storage/' . $about_us['image']) }}');" @endif
            class="bg-no-repeat bg-contain   xl:bg-left-top relative  ">

            <div class="main-container bg-light lg:bg-[transparent] relative pt-[2rem]">
                <div class="lg:max-w-[48rem] lg:mt-0 text-center lg:text-right  flex flex-col justify-between justify-top  hero-wrap lg:min-h-[65rem] sm:h-[60vh]  xl:h-[calc(100vh-116px)] relarive pb-0  lg:pb-[12rem] "
                    style="margin-bottom:20px;">

                    <div></div>

                    <div class="order-2 lg:order-none">
                        <h1 class=" text-primary mb-[1rem] lg:mb-[3rem]">
                            @if (isset($about_us))
                                {{ $about_us['title'] }}
                            @else
                                there is no about us
                            @endif

                            <br />

                        </h1>
                        <p><span style="font-weight: 400;">

                                @if (isset($about_us))
                                    {!! $about_us['body'] !!}
                                @else
                                    there is no about us
                                @endif
                            </span>

                        </p>
                        <div class="btn-secondary large" style="margin-bottom :20px">
                            <a target href="{{ url('consultation') }}">استشر أطبائنا مجانًا</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div
            class="mb-[6rem] sm:mb-[10rem]
                            play-stop-slider-wrp text-center  relative compare-slider">
            <div class="main-container">
                <style>
                    .top-40 {
                        margin-top: 140px;
                    }
                </style>
                <h2 class="mb-[3rem]  top-40 ">صور لنتائج عملنا</h2>
                <h3 class="xl:mb-[3.625rem] mb-[5rem] font-light text-[1.6rem] lg:text-[2rem]  ">
                     شاهد أحدث صور لنتائج عملنا
                </h3>
            </div>
            <div class>
                <div class="relative  pl-[3rem] md:pl-0">
                    <span
                        class="cursor-pointer absolute  -top-[6rem] w-[4rem] h-[4rem]  xl:right-[12.1rem] right-[1rem] play-stop-slider-button"></span>
                    <div class="ysm-slider play-stop-slider   flex justify-center mb-[3rem]" dots="0"
                        slidesToShow_xl="4.3" slidesToShow_lg="3" slidesToShow_md="1" slidesToShow_sm="1"
                        slidesToScroll="1" centerMode="1" speed="2500">

                        @foreach ($services as $service)
                            @foreach ($service->images as $images)
                                <div class="px-[1.2rem] py-0 ">
                                    <img-comparison-slider class="focus-visible:outline-0 w-full">
                                        <img decoding="async" class="rounded-[30px]  w-full " slot="first"
                                            src="{{ asset('storage/' . $images['before_image']) }}" />
                                        <img decoding="async" class="rounded-[30px]  w-full " slot="second"
                                            src="{{ asset('storage/' . $images['after_image']) }}" />
                                    </img-comparison-slider>
                                </div>
                            @endforeach
                        @endforeach

                    </div>
                    <span
                        class="slick-nav cursor-pointer prev absolute inline-block w-[4rem] h-[4rem] top-1/2 rounded-full bg-gray/20 backdrop-blur  left-[1.8rem] sm:left-[12.1rem] bg-center bg-no-repeat bg-[url(../images/slider_arr_left.svg)] "></span>
                    <span
                        class="slick-nav cursor-pointer next absolute inline-block w-[4rem] h-[4rem] top-1/2 rounded-full bg-gray/20 backdrop-blur  right-[4.8rem] sm:right-[12.1rem] bg-center bg-no-repeat bg-[url(../images/slider_arr_right.svg)]  "></span>
                </div>
            </div>
            <h3
                class="xl:mb-[3.625rem] mb-[5rem] font-light mt-[1rem] text-[1.6rem] lg:text-[2rem] max-w-[15.7rem] lg:max-w-none mx-auto lg:mx-0 ">
                <b>يس سمايل</b>… نعم لابتسامة جميلة.
            </h3>
            <div class="btn-secondary large">
                <a target href="{{ url('consultation') }}">استشر أطبائنا مجانًا</a>
            </div>
        </div>

        <div class="mb-[6rem] sm:mb-[10rem]
                        text-center block">
            <div class="main-container">
                <h2 class="mb-[3rem]">خدماتنا</h2>
                <h3 class="xl:mb-[3rem] font-light">تمتع بأجمل ابتسامة عبر خدماتنا المختلفة</h3>
            </div>
            <div class="sm:max-w-[127rem] sm:mx-auto relative pl-[3rem] md:pl-0">
                <div class="ysm-slider offers-slider " dots="0" centerMode="1" slidesToShow_xl="3"
                    slidesToShow_lg="3" slidesToShow_md="1" slidesToShow_sm="1" slidesToScroll="1">

                    @foreach ($services as $service)
                        <div class="slide px-[1.2rem] group">
                            <div class="relative">
                                <img decoding="async" class="w-full"
                                    src="{{ asset('storage/' . $service['image']) }}" />
                                <div class="flex justify-between mt-[3rem]">
                                    <div>
                                        <h3 class=" font-light mb-0   text-[2rem] text-right">
                                            {{ $service['name'] }}<br />
                                        </h3>
                                    </div>
                                    <div>
                                        <div class="btn-bordered">أقرأ المزيد</div>
                                    </div>
                                </div>
                                <a target href="{{ url('service', $service['id']) }}"
                                    class="absolute left-0 top-0 right-0 bottom-0"></a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <span
                    class="slick-nav cursor-pointer prev absolute inline-block w-[4rem] h-[4rem] top-1/2 rounded-full bg-gray/20 backdrop-blur  left-[1.8rem] sm:left-[12.1rem] bg-center bg-no-repeat bg-[url(../images/slider_arr_left.svg)] "></span>
                <span
                    class="slick-nav cursor-pointer next absolute inline-block w-[4rem] h-[4rem] top-1/2 rounded-full bg-gray/20 backdrop-blur  right-[4.8rem] sm:right-[12.1rem] bg-center bg-no-repeat bg-[url(../images/slider_arr_right.svg)]  "></span>
            </div>
        </div>

        <div class="pt-[3.4rem] md:pt-[10rem] pb-[5rem]" style="background-color:#2A4CC7; margin-bottom:50px;">
            <div class="main-container text-center">
                <h2 class="mb-[3rem] sm:mb-[6rem] text-right text-light">المواضيع الأكثر قراءة</h2>
            </div>
            <div class="xl:ml-[calc((100%-1270px)/2)]  ">
                <div class="slider-wrapper relative">
                    <div class="ysm-slider posts-slider popular" dots="1" speed="1000" slidesToShow_xl="1"
                        slidesToShow_lg="1" slidesToShow_md="1" slidesToShow_sm="1" slidesToScroll="1" centerMode="0">
                        @foreach ($articles as $article)
                            <div
                                class="slide-wrap bg-light rounded-[2rem] mb-[3rem]  w-full mx-[1.5rem] relative group">
                                <div style="background-image:url({{ asset('storage/' . $article['image']) }});"
                                    class="w-full h-full rounded-[2rem] bg-cover bg-no-repeat bg-center absolute left-0 top-0 right-0 bottom-0 ">
                                </div>
                                <div
                                    class="flex justify-end flex-col relative h-[55.1rem] bg-gradient-to-t from-dark/80 via-dark/50 to-dark/0 rounded-[2rem] ">
                                    <div
                                        class="px-[3.7rem] p-[2.3rem] text-[1.6rem] text-light max-w-[90%] md:max-w-[68.6734693877551%]  ">
                                        <h3 class="text-[2rem] sm:text-[3.6rem] mb-0 ">
                                            {{ $article['title'] }}
                                        </h3>
                                        <p class="mb-[1.5rem]">
                                            {{ $article['short_description'] }}
                                        </p>
                                        <span class="text-[1.6rem] font-bold text-light/50">
                                            {{ $article['date'] }}

                                        </span>
                                    </div>
                                </div>
                                <a class="absolute left-0 top-0 right-0 bottom-0"
                                    href="{{ url('article', $article['id']) }}"></a>
                            </div>
                        @endforeach
                    </div>
                    <div class="main-container relative xl:ml-0 ">
                        <span
                            class="slick-nav cursor-pointer prev absolute inline-block w-[4.4rem] h-[4.4rem] bottom-[-1rem] rounded-full md:right-[7rem] right-[8rem] bg-center bg-no-repeat bg-[url(../images/pop-prev-icon.svg)] "></span>
                        <span
                            class="slick-nav cursor-pointer next absolute inline-block w-[4.4rem] h-[4.4rem] bottom-[-1rem] rounded-full md:right-0 right-[1.5rem] bg-center bg-no-repeat bg-[url(../images/pop-next-icon.svg)]  "></span>
                    </div>
                </div>
            </div>
        </div>


        <div class="main-container mb-[6rem] sm:mb-[10rem]">
            <div
                class="overflow-clip relative
                                text-block-with-shape  bg-no-repeat bg-left   bg-primary rounded-[2rem]">
                <img decoding="async"
                    class="hidden lg:block absolute h-full left-[-47%] opacity-50  md:left-[-31%] lg:left-[-28%]  xl:left-[-5%] xl:top-0  "
                    src="wp-content/uploads/2023/09/Group-346-2.webp" />
                <img decoding="async" class="block lg:hidden absolute [32.1rem] top-0 left-0  "
                    src="wp-content/uploads/2023/09/Group-346-1.webp" />
                <div class="lg:py-[5rem] py-[3rem]   md:max-w-[70%]   max-w-none  text-light ]">
                    <div class="px-[3rem]">

                        <h2 class="my-[5rem] max-w-[20rem] sm:max-w-none ">
                            @if (isset($about_us))
                                {{ $about_us['banner']['title'] }}
                            @else
                                احجز موعدك الان مجانًا
                            @endif
                        </h2>

                        @if (       isset($about_us))
                            {!! $about_us['banner']['body'] !!}
                        @else
                            <p>هل ترغب أن تتميز بابتسامتك؟ هل لديك مشاكل بأسنانك تريد علاجها ومن<br />
                                ثم تجميلها؟</p>
                            <p>تحدث مع أطبائنا مجانًا حول أفضل خطة علاجية مناسبة لحالتك الخاصة!<br />
                                نقدم لك تحليل مجاني ومفصل لنضعك على طريق ابتسامة <b>Hollywood</b> مثالية.</p>
                        @endif


                        <div class="btn-light mt-[6rem] lg:mt-[10rem] mb-[5rem]  text-center md:text-right">
                            <a target href="{{ url('book-appointment') }}">

                                @if (isset($about_us))
                                    {{ $about_us['banner']['button_text'] }}
                                @else
                                    احجز
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="main-container mb-[3rem] sm:mb-[6rem]">
            <div class="faq-wrap text-center">
                <h2 class="mb-[3.75rem]">أسئلة مرضانا</h2>

                @foreach ($faqs as $faq)
                    <button class="accordion font-bold ">
                        {{ $faq['question'] }}
                        </b></button>
                    <div class="panel max-h-0 overflow-hidden transition-all ease-out  ">
                        <div class="pr-[1.5rem] pl-[1.5rem] sm:pl-0 lg:pr-[8.25rem] pb-[1rem] pt-0 text-right">
                            <p><span style="font-weight: 400;">
                                    {!! $faq['answer'] !!}


                            </p>
                            <div class="btn-secondary mt-[20px] mb-[20px]">
                                <span><a target href="{{ url('consultation') }}">احجز موعد استشارة مجانية</a></span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>

    </main>
