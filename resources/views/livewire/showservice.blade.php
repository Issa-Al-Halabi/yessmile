<main>

    <div style="background-color:#f3f7fa;; background-image: url({{asset('storage/'.$service['image'])}});"
        class="mb-0 sm:mb-[10rem]
                    bg-no-repeat bg-contain   xl:bg-left-top relative ">

        <div style="background-image: url(../wp-content/uploads/2023/05/AdobeStock_443421019-1-1.png);"
            class="bg-no-repeat bg-light bg-cover bg-left-top w-full lg:min-h-[65rem] h-[calc(100vh-196px)] block lg:hidden relative
                            before:content-[''] md:before:content-[' '] before:absolute before:w-full before:h-full before:bg-gradient-to-t from-light to-light/30
                            ">
        </div>
        <div class="absolute right-0 top-0 hidden lg:block w-[80%] h-full hero-gradient"></div>

        <div class="main-container bg-light lg:bg-[transparent] relative">
            <div
                class="lg:max-w-[55rem] lg:mt-0 text-center lg:text-right  flex flex-col justify-between justify-top   lg:min-h-[65rem]   lg:h-[calc(100vh-196px)] relarive  ">
                <div></div>

                <div class="order-2 lg:order-none -mt-[calc((100vh-196px)/2)] lg:mt-0">
                    <h1 class="mb-[3rem] lg:mb-[4.8rem] ">
                        {{$service['title']}}
                        <br />
                    </h1>
                    <p class="text-[2rem] leading-[2.72rem] mb-[4.288rem]">
                        <p><span style="font-weight: 400;"> {!!$service['description']!!} </p>
                    </p>
                    <div class="btn-secondary large">
                        <a target href="{{ url('consultation') }}">استشر أطبائنا مجانًا</a>
                    </div>
                </div>


                <div></div>

            </div>
            <div class="flex lg:w-auto w-full justify-center mt-[3rem] pb-[5rem] animate-bounce"><a
                    href="#"><img decoding="async"
                        src="../wp-content/themes/yessmile-wp/assets/images/scroll-bottom.svg" /></a></div>
        </div>

    </div>


    <div
        class="mb-[6rem] sm:mb-[10rem]
                    play-stop-slider-wrp text-center  relative compare-slider">
        <div class="main-container">
            <h2 class="mb-[3rem]   ">نتائج زراعة الأسنان في يس سمايل</h2>
            <h3 class="xl:mb-[3.625rem] mb-[5rem] font-light text-[1.6rem] lg:text-[2rem]  ">شاهد صور زراعة الأسنان
                لمرضى عيادة <b>YesSmile</b> لترميم وتجميل الأسنان </h3>
        </div>
        <div class>
            <div class="relative  pl-[3rem] md:pl-0">
                <span
                    class="cursor-pointer absolute  -top-[6rem] w-[4rem] h-[4rem]  xl:right-[12.1rem] right-[1rem] play-stop-slider-button"></span>
                <div class="ysm-slider play-stop-slider   flex justify-center mb-[3rem]" dots="0"
                    slidesToShow_xl="4" slidesToShow_lg="3" slidesToShow_md="1" slidesToShow_sm="1"
                    slidesToScroll="1" centerMode="1" speed="2400">

                    @foreach ($service->images as $image )
                        <div class="px-[1.2rem] py-0 ">
                            <img-comparison-slider
                                class="focus-visible:outline-0 w-full">
                                <img decoding="async"
                                        class="rounded-[30px]  w-full " slot="first"
                                        src="{{asset('storage/'.$image['before_image'] )}}" />
                                <img
                                        decoding="async" class="rounded-[30px]  w-full " slot="second"
                                        src="{{asset('storage/'.$image['after_image'] )}}" />
                            </img-comparison-slider>
                        </div>
                    @endforeach
                </div>
                <span
                    class="slick-nav cursor-pointer prev absolute inline-block w-[4rem] h-[4rem] top-1/2 rounded-full bg-gray/20 backdrop-blur  left-[1.8rem] sm:left-[12.1rem] bg-center bg-no-repeat bg-[url({{ asset('wp-content\themes\yessmile-wp\assets\images\slider_arr_left.svg') }})] "></span>
                <span
                    class="slick-nav cursor-pointer next absolute inline-block w-[4rem] h-[4rem] top-1/2 rounded-full bg-gray/20 backdrop-blur  right-[4.8rem] sm:right-[12.1rem] bg-center bg-no-repeat bg-[url({{ asset('wp-content\themes\yessmile-wp\assets\images\slider_arr_right.svg') }})]  "></span>
            </div>
        </div>
        <h3
            class="xl:mb-[3.625rem] mb-[5rem] font-light mt-[1rem] text-[1.6rem] lg:text-[2rem] max-w-[15.7rem] lg:max-w-none mx-auto lg:mx-0 ">
            <b>يس سمايل</b>… نعم لإبتسامة جميلة.
        </h3>
        <div class="btn-secondary large">
            <a target href="{{ url('consultation') }}">استشر أطبائنا مجانًا</a>
        </div>
    </div>

</main>
