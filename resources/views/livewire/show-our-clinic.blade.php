<main>
    <div @if (isset($about_our_clinic->image)) style="background-image: url({{ 'storage/' . $about_our_clinic->image }});" @endif
        class="mb-[30rem]
        bg-no-repeat bg-contain xl:bg-left-top relative ">

        @if (isset($about_our_clinic->image))
            <div style="background-image: url({{ 'storage/' . $about_our_clinic->image }});"
                class="bg-no-repeat bg-light bg-cover bg-left-top w-full h-[calc(100vh-96px)] block lg:hidden relative
                before:content-[''] md:before:content-[' '] before:absolute before:w-full before:h-full before:bg-gradient-to-t from-light to-light/30
                ">
            </div>
        @endif

        <div class="main-container bg-light lg:bg-[transparent] relative hero-with-slider">
            <div
                class="lg:max-w-[55rem] lg:mt-0 text-center lg:text-right  flex flex-col justify-between justify-top      lg:h-[calc(100vh-96px)] relarive  ">

                <div
                    class="order-2 lg:order-none -mt-[calc((100vh-96px)/2)] lg:mt-0 pt-[10rem] hero-with-slider-content">
                    <h1 class=" text-dark mb-[3rem] lg:mb-[4.8rem] max-w-[26.8rem]  mx-auto md:mx-0 md:max-w-none ">
                        <br><b>
                            @if (isset($about_our_clinic->title))
                                {{ $about_our_clinic->title }}
                            @else
                                @lang('home.no_title_yet')
                            @endif
                        </b>
                    </h1>
                    <p class="text-[2rem] leading-[2.72rem] mb-[4.288rem]">
                        @if (isset($about_our_clinic->description))
                            {!! $about_our_clinic->description !!}
                        @else
                            @lang('home.no_description_yet')
                        @endif
                    </p>
                </div>

            </div>
            <div> </div>
        </div>
    </div>



    @foreach ($services as $service)
        <div class="mb-[6rem] sm:mb-[10rem]
        play-stop-slider-wrp text-center  relative compare-slider">

            <div class="main-container">
                <style>
                    .top-40 {
                        margin-top: 100px;
                    }
                </style>
                <h2 class="mb-[3rem]  top-40 ">{{ $service->title }}</h2>
            </div>
        </div>
        <div style="display: flex;align-items: center;justify-content: flex-end;padding: 0 50px 25px;">
            <a href="{{ url('service', $service['id']) }}" class="btn-bordered"> @lang('home.read_more') </a>
        </div>

        <div class>
            <div class="relative  pl-[3rem] md:pl-0">
                <span
                    class="cursor-pointer absolute  -top-[6rem] w-[4rem] h-[4rem]  xl:right-[12.1rem] right-[1rem] play-stop-slider-button"></span>
                <div class="ysm-slider play-stop-slider   flex justify-center mb-[3rem]" dots="0"
                    slidesToShow_xl="4.3" slidesToShow_lg="3" slidesToShow_md="1" slidesToShow_sm="1" slidesToScroll="1"
                    centerMode="1" speed="2500">

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

                </div>
                <span
                    class="slick-nav cursor-pointer prev absolute inline-block w-[4rem] h-[4rem] top-1/2 rounded-full bg-gray/20 backdrop-blur  left-[1.8rem] sm:left-[12.1rem] bg-center bg-no-repeat bg-[url(../images/slider_arr_left.svg)] "></span>
                <span
                    class="slick-nav cursor-pointer next absolute inline-block w-[4rem] h-[4rem] top-1/2 rounded-full bg-gray/20 backdrop-blur  right-[4.8rem] sm:right-[12.1rem] bg-center bg-no-repeat bg-[url(../images/slider_arr_right.svg)]  "></span>
            </div>
        </div>
        </div>
    @endforeach
</main>
