<div>

    <body data-rsssl="1" class="rtl page-template-default page page-id-732 innerpage">

        <main>


            <div @if (isset($AboutOurTeam->image)) style="background-image: url({{ 'storage/' . $AboutOurTeam->image }});" @endif
                class="mb-[30rem]
                bg-no-repeat bg-contain xl:bg-left-top relative ">

                @if (isset($AboutOurTeam->image))
                    <div style="background-image: url({{ 'storage/' . $AboutOurTeam->image }});"
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
                            <h1
                                class=" text-dark mb-[3rem] lg:mb-[4.8rem] max-w-[26.8rem]  mx-auto md:mx-0 md:max-w-none ">
                                @lang('our_team.our_doctors')
                                <br />
                                <br><b>
                                    @if (isset($AboutOurTeam->title))
                                        {{ $AboutOurTeam->title }}
                                    @else
                                        @lang('our_team.no_title_yet')
                                    @endif
                                </b>
                            </h1>
                            <p class="text-[2rem] leading-[2.72rem] mb-[4.288rem]">
                                @if (isset($AboutOurTeam->description))
                                    {!! $AboutOurTeam->description !!}
                                @else
                                    @lang('our_team.no_description_yet')
                                @endif
                            </p>
                        </div>

                    </div>
                    <div> </div>
                </div>
            </div>

            {{-- -- Team Section -- --}}

            @foreach ($Teams as $Team)
                <div class="main-container  relative mb-[6rem] sm:mb-[10rem]">
                    <div
                        class="absolute top-0 bottom-0 left-0 xl:left-[10%] right-0 bg-light-gray rounded-[2rem] mx-[1.6rem]">
                    </div>
                    <div class="relative grid  grid-cols-12 py-[3rem] lg:py-[6.7rem]">
                        <div class="col-span-12 xl:col-span-8 order-2 xl:order-1  ">
                            <div class="lg:px-[6.7rem] px-0 py-[3rem] lg:py-0">
                                <h2
                                    class="text-[2.4rem] text-primary mb-[3rem] text-center xl:text-right mt-[3rem] xl:mt-0">
                                    {!! $Team->brief !!}<br />
                                </h2>
                                <div
                                    class="relative flex flex-wrap  justify-center xl:justify-start  gap-[4.8rem] mb-[7rem]">

                                    @if ($Team->work_history)
                                        @for ($i = count($Team->work_history) - 1; $i >= 0; $i--)
                                            <div
                                                class="w-[100%] ml-[20%] lg:ml-0 lg:w-[17.5rem] min-h-[12rem] lg:min-h-[17.5rem] bg-light border-[.1rem] border-secondary  p-[1rem] rounded-[2rem]
                                                  relative lg:mt-[6rem]">
                                                <span
                                                    class="absolute  bg-[url(../images/pin.svg)]  top-1/2 lg:top-[-7rem] left-[-10%] ml-[-4.5rem] lg:ml-0 lg:left-[50%] transform translate-y-[-50%] lg:translate-y-0 lg:translate-x-[-50%] w-[5rem] h-[5rem] ">
                                                    <span
                                                        class="inline-block  relative w-full h-full after:content-[' '] after:bg-[url(../images/vec_arrow.svg)] after:absolute lg:after:top-[1rem] lg:after:left-[-15.5rem] after:transform   lg:after:w-[14.2rem] after:h-[3rem] after:bg-no-repeat after:bg-right lg:after:bg-center
                                                                                                        after:rotate-90 after:top-[8rem] after:left-[-1rem] lg:after:rotate-0  after:w-[7rem]
                                                                                            "></span>
                                                </span>
                                                <p>{{ $Team->work_history[$i]['text'] }} </p>
                                            </div>
                                        @endfor
                                    @endif

                                </div>
                                <h2 class="text-[2.4rem] text-primary mb-[3rem]"> @lang('our_team.specialist') </h2>
                                <div class="flex flex-wrap gap-[1rem]">
                                    @if ($Team->specialist)
                                        @foreach ($Team->specialist as $specialist)
                                            <div
                                                class="text-[1.6rem] lg:text-[2rem] py-[.8rem] pl-[3rem] pr-[7rem] bg-light rounded-full border-[.1rem] border-secondary relative before:content-[' '] before:bg-[url(../images/li_icon_secondary.svg)] before:absolute before:right-[2rem] before:w-[3rem] before:h-[3rem] ">
                                                {{ $specialist['speciality'] }}</div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-span-12 xl:col-span-4 bg-primary p-[3rem] lg:p-[5rem] rounded-[2rem]  order-1 xl:order-2  mt-[-10rem] xl:mt-0 md:max-w-[50%] lg:max-w-none  mx-auto  ">
                            <img decoding="async" class="mb-[2rem]" src="{{ asset('storage/' . $Team->image) }}" />
                            <div class="text-center">
                                <h3 class="text-[3.2rem] text-light ">{{ $Team->name }}</h3>
                                <h4 class="text-[2rem] text-light font-normal"> {{ $Team->job_title }}</h4>
                                <div class="btn-secondary rounded-lr">
                                    <a class="text-[1.8rem] font-medium" target href="{{ url('consultation') }}">
                                        @lang('our_team.book_a_consultation_with') {{ $Team->name }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



        </main>

    </body>


</div>
