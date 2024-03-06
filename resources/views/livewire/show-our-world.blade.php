<main>

    <div class="md:pt-[5rem] pb-[7rem] relative" style="background-color:#EEF4FB">
        <div class="main-container text-center">
            <h2 class="mb-[3rem] sm:mb-[6rem]">المقالات</h2>
        </div>
        <div class="main-container">
            <div class="grid grid-cols-1 lg:grid-cols-12 relative">
                <div class="lg:col-span-4">
                    <div
                        class="px-[3rem] py-[1rem] flex md:hidden bg-light rounded-[2rem] mb-[3rem] flex-col filters-wrap relative cursor-pointer filters-toggle">
                        <h3 class="text-[2.4rem] mb-0">فئات</h3>
                        <div style="background-image:url(../wp-content/themes/yessmile-wp/assets/images/dropdown-icon.svg);"
                            class="filter-icon block md:small absolute left-[3rem] top-1/2 transition ease-out -translate-y-1/2 w-[3rem] h-[3rem] bg-no-repeat bg-contain bg-center">
                        </div>
                    </div>
                    <div
                        class="p-[3rem]  bg-light rounded-[2rem] mb-[3rem] flex-col transition-all ease-in-out filters-wrap hidden md:flex filters-box">
                        <div class="hidden md:flex">
                            <h3 class="text-[3.6rem]">فئات</h3>
                        </div>

                        <div class="cat-item selected" term-id="-1">الكل</div>
                        @foreach ($categories as $category )
                            <div class="cat-item" term-id="{{$category['id']}}">{{$category['name']}}</div>
                        @endforeach
                            {{-- <div class="cat-item" term-id="2">علاجات اللثة التجميلية</div>
                            <div class="cat-item" term-id="4">علاجات الأسنان "الحشوات والتركيبات"</div>
                            <div class="cat-item" term-id="5">تجارب مرضى يس سمايل</div> --}}
                    </div>
                </div>
                <div class="lg:col-start-6 lg:col-span-7  scroll-posts-wrap relative overflow-y-clip">
                    <div class="snap-y overflow-y-auto h-[100vh] md:pb-[10rem]">

                        @foreach ($articles as $article)

                        <div class="p-[3rem] flex flex-col md:flex-row bg-light rounded-[2rem] mb-[3rem] relative group featured-post-item"
                            cat-ids="{{$article['category_id']}}">
                            <div
                                class="flex md:flex-1 flex-col gap-y-[2rem] md:gap-y-0 justify-between md:pl-[13.42281879194631%] order-2 md:order-1">
                                <div class="mt-[2rem] md:mt-0"><span
                                        class="text-primary opacity-[.3] text-[2rem] font-bold ">{{$article['date']}}</span>
                                </div>
                                <h3 class="mb-0">{{$article['title']}}</h3>
                                <div class="post-list-content-box">
                                    <p class="mb-0">
                                        {{$article['short_description']}}
                                    </p>
                                </div>
                                <div class="btn-secondary small left-arrow ">
                                    <a class="transition ease-in  group-hover:scale-[1.1]"
                                        href="{{url("article/".$article["id"])}}">متابعة</a>
                                </div>
                            </div>
                            <div class="order-1 md:order-2">
                                <div class="h-[26rem] w-[26rem]  bg-cover bg-no-repeat  rounded-[2rem] bg-[#e8f5fc]"
                                    style="background-image:url({{asset('storage/'.$article["image"])}})">
                                </div>
                            </div>
                            <a class="absolute left-0 top-0 right-0 bottom-0"
                                href="{{url("article/".$article["id"])}}"></a>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
        <div
            class="absolute pointer-events-none h-[20rem] md:h-[30rem] bg-gradient-to-t from-primary-extra-light via-primary-extra-light to-primary-extra-light/0 bottom-0 w-full z-10">
        </div>
    </div>


    <div class="pt-[3.4rem] md:pt-[10rem] pb-[5rem]" style="background-color:#2A4CC7;margin-bottom:100px">
        <div class="main-container text-center">
            <h2 class="mb-[3rem] sm:mb-[6rem] text-right text-light">اخر الأخبار</h2>
        </div>
        <div class="xl:ml-[calc((100%-1270px)/2)]  ">
            <div class="slider-wrapper relative">
                <div class="ysm-slider posts-slider popular" dots="1" speed="1000" slidesToShow_xl="1"
                    slidesToShow_lg="1" slidesToShow_md="1" slidesToShow_sm="1" slidesToScroll="1"
                    centerMode="0">
                    @foreach ($news as $new )

                    <div class="slide-wrap bg-light rounded-[2rem] mb-[3rem]  w-full mx-[1.5rem] relative group">
                        <div style="background-image:url({{asset('storage/'.$new['image'])}});"
                            class="w-full h-full rounded-[2rem] bg-cover bg-no-repeat bg-center absolute left-0 top-0 right-0 bottom-0 ">
                        </div>
                        <div
                            class="flex justify-end flex-col relative h-[55.1rem] bg-gradient-to-t from-dark/80 via-dark/50 to-dark/0 rounded-[2rem] ">
                            <div
                                class="px-[3.7rem] p-[2.3rem] text-[1.6rem] text-light max-w-[90%] md:max-w-[68.6734693877551%]  ">
                                <h3 class="text-[2rem] sm:text-[3.6rem] mb-0 ">
                                  {{$new['title']}}
                                </h3>
                                <p class="mb-[1.5rem]">
                                    {{$new['short_description']}}

                                </p>
                                <span class="text-[1.6rem] font-bold text-light/50">09.02.2023</span>
                            </div>
                        </div>
                        <a class="absolute left-0 top-0 right-0 bottom-0"
                            href="{{url('news',$new['id'])}}"></a>
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

</main>
