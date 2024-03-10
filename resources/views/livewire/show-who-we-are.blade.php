<div>

    <body data-rsssl="1" class="rtl page-template-default page page-id-746 innerpage">
        <main>

            <div class="h-auto md:h-[calc(100vh-96px)]  relative mb-[6rem] sm:mb-[10rem]">
                @if (isset($whoWeAre))
                    <div style="background-image: url({{ 'storage/' . $whoWeAre->image }} );"
                        class="absolute top-0 left-0 right-0 bottom-0 w-full h-full bg-cover after:bg-gradient-to-t from-primary/5 via-primary/80 to-primary  after:absolute after:left-0 after:right-0 after:top-0 after:bottom-0">
                    </div>
                @endif
                <div class="main-container relative flex flex-col justify-between h-full ">
                    <div class="flex flex-col justify-center text-light h-full text-center max-w-[88.4rem] mx-auto">
                        <div>
                            <h1 class="text-[2.4rem] md:3.6rem">@lang('who_we_are.who_are_we')</h1>
                            <h2 class="text-[1.6rem] md:text-[2rem] font-normal">@lang('who_we_are.put_a_smile')
                            </h2>
                            <h3 class="text-[2.4rem] md:text-[3.6rem] font-medium ">
                                @if (isset($whoWeAre->title))
                                    {{ $whoWeAre->title }}
                                @else
                                    @lang('who_we_are.no_title_yet')
                                @endif
                            </h3>
                            <p>
                                @if (isset($whoWeAre->body))
                                    {!! $whoWeAre->body !!} </h3>
                                @else
                                    @lang('who_we_are.no_description_yet')
                                @endif
                            </p>
                            <div class="btn-secondary large mt-[3rem]">
                                <a target href="{{ url('consultation') }}">@lang('who_we_are.consult_our_doctors_for_free') </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-container mb-[6rem] sm:mb-[10rem] text-center ">
                <h2></h2>
                <div class="flex flex-col justify-center  md:px-[8.4rem] max-w-[120rem] mx-auto ">
                    <div class="flex justify-between flex-wrap ">
                        @if (isset($whoWeAre->features) && is_array($whoWeAre->features))

                            @foreach ($whoWeAre->features as $feature)
                                <div class=" text-center basis-[50%] md:basis-auto py-[2rem] ">
                                    <div class="md:h-[13rem] md:w-[13rem]  h-[7rem] w-[7rem] inline-block relative"><img
                                            decoding="async"
                                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 "
                                            src="{{ 'storage/' . $feature['image'] }}" /></div>
                                    <h2 class="text-[1.6rem] font-[400] mb-0"><b
                                            class="text-dark">{{ $feature['title'] }}</b><br>{{ $feature['number'] }}
                                    </h2>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>


            <div class="main-container mb-[6rem] sm:mb-[10rem]">
                <div
                    class="px-[4rem] md:px-[8rem] py-[6rem] md:py-[10rem] bg-primary rounded-[2rem] grid grid-cols-12 text-center md:text-right ">
                    <div class="col-span-12 md:col-span-7">
                        <h2 class="text-light">
                            @if (isset($whoWeAre->banner_title))
                                {{ $whoWeAre->banner_title }}
                            @else
                                @lang('who_we_are.no_title_yet')
                            @endif
                        </h2>
                        <h3 class="text-light font-medium">
                            @if (isset($whoWeAre->banner_description))
                                {{ $whoWeAre->banner_description }}
                            @else
                                @lang('who_we_are.no_description_yet')
                            @endif
                        </h3>
                    </div>
                    <div class="col-span-12 md:col-span-5 flex justify-end">
                        <div class="btn-secondary large mt-[3rem]">
                            <a class="flex group" target href="{{ url('consultation') }}"><img decoding="async"
                                    class="inline-block w-[4rem] h-[4rem] ml-[2rem] group-hover:animate-spin"
                                    src="{{ asset('wp-content/themes/yessmile-wp/assets/images/heart-btn-icon.svg') }}" /><span>
                                    @lang('who_we_are.book_your_appointment_now')
                                </span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <h2> @lang('who_we_are.why_should_you_choose_yes_smile') </h2>
                <h3 class="text-primary">@lang('who_we_are.guarantee') </h3>
                <div class="max-w-[1100px]   overflow-x-clip mx-auto px-2 xl:px-6 mt-[5rem] mb-[6.25rem]">
                    <div class="flex">
                        <div class="flex-grow">
                            <div
                                class="min-h-[40px] justify-center text-right border-solid border-primary border-[1px] xl:text-[1.8rem] text-[1.4rem] p-[15px] rounded-t-[20px]">
                                &nbsp;</div>
                            @if (isset($whoWeAre->why_choose_us) && is_array($whoWeAre->why_choose_us))
                                @foreach ($whoWeAre->why_choose_us as $why_choose_us)
                                    <div
                                        class="min-h-[40px] justify-center text-right border-solid border-primary border-[1px] xl:text-[1.8rem] text-[1.4rem] p-[15px] xl:pr-[5.25rem] pr-[10px] ">
                                        {{ $why_choose_us['title'] }}</div>
                                @endforeach

                            @endif


                        </div>
                        <div class="w-[20%] bg-primary text-light scale-y-110 shadow-xl shadow-gray rounded-[20px]">
                            <div
                                class="min-h-[40px] justify-center xl:text-[1.8rem] text-[1.4rem] py-[15px] min-w-[75px] ">
                                @lang('who_we_are.yes_smile_center')
                            </div>
                            @if (isset($whoWeAre->why_choose_us) && is_array($whoWeAre->why_choose_us))

                                @foreach ($whoWeAre->why_choose_us as $why_choose_us)
                                    <div
                                        class="min-h-[42px] justify-center border-solid border-t-light border-r-primary border-l-primary border-[1px] p-[12px] pt-[2.7rem] ">
                                        <img decoding="async" class="inline-block"
                                            src="{{ asset('wp-content/themes/yessmile-wp/assets/images/true.svg') }}" />
                                    </div>
                                @endforeach

                            @endif

                        </div>
                        <div class="w-[20%]">
                            <div
                                class="min-h-[40px] justify-center border-solid border-primary border-[1px] py-[15px]  rounded-t-[20px] xl:text-[1.8rem] text-[1.4rem] min-w-[75px]">
                                @lang('who_we_are.other_centers')
                            </div>
                            @if (isset($whoWeAre->why_choose_us) && is_array($whoWeAre->why_choose_us))
                                @foreach ($whoWeAre->why_choose_us as $why_choose_us)
                                    <div
                                        class="min-h-[40px] justify-center border-solid border-primary border-[1px] p-[15px]  ">
                                        <img decoding="async" class="inline-block"
                                            src="{{ asset('wp-content/themes/yessmile-wp/assets/images/cross.svg') }}" />
                                    </div>
                                @endforeach

                            @endif

                        </div>
                    </div>
                </div>
            </div>

        </main>

    </body>
</div>
