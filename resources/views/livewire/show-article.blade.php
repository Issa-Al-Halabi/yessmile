<main>
    @if (session()->has('message'))
    <div class="alert">
        <span class="closebtn"
            onclick="this.parentElement.style.display='none';">&times;</span>
        {{ session('message') }}
    </div>
@endif
    <div class="py-[6rem] sm:py-[10rem] ">
        <div class="main-container text-center">
            <span class="text-[2.2rem] font-bold text-dark/50">
                {{ $article['date'] }}
            </span>
            <h1>
                {{ $article['title'] }}
            </h1>
        </div>
    </div>


    <div class="main-container relative">
        <div class="h-[20rem] md:h-[55rem]  relative flex justify-start bg-[#e8f5fc] rounded-[5rem]">
            <div class="  absolute bg-no-repeat bg-cover opacity-20 md:opacity-100 rounded-[5rem] bg-center z-0 left-0 top-0 right-0 bottom-0"
                style="background-image:url({{ asset('storage/' . $article['image']) }})">
            </div>
        </div>
    </div>

    <div class="pb-[10rem] bg-primary-extra-light -mt-[10rem] md:-mt-[30rem] pt-[15rem] md:pt-[40rem] rounded-[5rem]">
        <div class="main-container grid grid-cols-12 gap-[1.5rem] ">

            {{-- first column --}}
            <div class="col-span-12 md:col-span-7 single-post-content-wrap">
                {!! $article['long_description'] !!}
            </div>

            {{-- second column --}}
            <div class="col-span-12  md:col-span-4 md:col-start-9 relative   ">
                <div class=" scroll-posts-wrap sm:top-[5rem] relative sm:sticky ">

                    <div class="rounded-[2rem] bg-light p-[3rem] text-center mb-[5.6rem]">
                        <div style="background-image:url(../wp-content/uploads/2023/06/closeup-beautiful-smiling-brunette-girl-touching-cheeks-blushing-white-background-1.png);"
                            class="h-[22.7rem] rounded-[2rem] bg-cover bg-center mb-[3rem] "></div>
                        <p>هل ترغب في تصميم ابتسامة أحلامك؟<br />
                            سجل واستلم خطة العلاج مجانا</p>
                        <div class="btn-light-border small">
                            <a target href="{{ url('consultation') }}">احجز استشارة مجانية</a>
                        </div>
                    </div>


                    <div class="rounded-[2rem] bg-light p-[3rem] text-center mb-[10rem] md:mb-[5.6rem]">
                        <h3 class="text-center text-[2rem]">المزيد من المقالات</h3>
                        <div class="snap-y overflow-y-auto h-[72.8rem] pb-[10rem]">

                            @foreach ($more_articles as $more_article)
                                <div
                                    class="p-[2rem] flex  rounded-[2rem] mb-[3rem] border-[.2rem] border-primary/50 relative transition ease-linear hover:bg-light">
                                    <div class="flex flex-1 flex-col pl-[6.493506493506494%] text-right">
                                        <div><span
                                                class="text-primary opacity-[.3] text-[2rem] font-bold ">{{ $more_article['date'] }}</span>
                                        </div>
                                        <div class="post-list-content-box-two relative">
                                            <h3 class="mb-[1rem]">{{ $more_article['title'] }}</h3>
                                            <div>
                                                <a href="{{ url('article', $more_article['id']) }}">متابعة ></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="background-image:url({{ asset('storage/' . $more_article['image']) }});"
                                        class="w-[40.58441558441558%] h-[14.3rem] bg-cover bg-center rounded-[1rem]">
                                    </div>
                                    <a class="absolute left-0 top-0 right-0 bottom-[10rem]"
                                        href="{{ url('article', $more_article['id']) }}"></a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div
                        class="absolute pointer-events-none h-[10rem] md:h-[30rem] bg-gradient-to-t from-primary-extra-light via-primary-extra-light to-primary-extra-light/0 bottom-0 w-full z-10">
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="main-container mb-[6rem] sm:mb-[10rem] max-w-[111rem] mt-[6rem] md:mt-0  ">
        <div class="bg-light rounded-[2rem] shadow-items-slider-box-shadow p-[3rem] flex flex-col md:flex-row ">
            <div class="md:pl-[14.59459459459459%] flex md:flex-1 gap-0 order-2 md:order-1">
                <div class="flex flex-col justify-between gap-y-[3rem] h-full">
                    <div>
                        <h2 class="mb-0 pt-[2rem] sm:pt-0 md:text-right text-center">اترك تعليقك هنا</h2>
                    </div>
                    <div>
                        <div class="mb-[2rem]">
                            <input required wire:model="name" name="name"
                                class="bg-light-gray rounded-[2rem] py-[2.4rem] pr-[2rem] pl-[5rem] text-[1.6rem] font-bold w-full"
                                type="text" id="author" type="text" placeholder="الاسم " value />
                            <div style="    font-size: 12px;color: red;">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-[2rem]">
                            <input required wire:model="email" name="email"
                                class="bg-light-gray rounded-[2rem] py-[2.4rem] pr-[2rem] pl-[5rem] text-[1.6rem] font-bold w-full"
                                type="email" id="email" type="text" placeholder="الإيميل" value />
                            <div style="    font-size: 12px;color: red;">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div>
                            <textarea id="comment" wire:model="comment" name="comment"
                                class="bg-light-gray h-[18rem] rounded-[2rem] py-[2.4rem] pr-[2rem] pl-[5rem] text-[1.6rem] font-bold w-full"></textarea>
                            <div style="    font-size: 12px;color: red;">
                                @error('comment ')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div>
                        <input wire:click="save()" wire:loading.disabled
                            class="min-w-[10rem] text-[1.6rem] font-bold px-[4rem] py-[1.45rem] border-[.1rem] rounded-[4.7rem] border-secondary  text-secondary  transition-all duration-500 ease-in-out
                                 group-hover:shadow-btn-border-shadow inline-block hover:bg-secondary/10 "
                            name="submit" type="submit" id="submit-comment" value="أضف تعليق">
                        </div>
                        <div wire:loading  style="    font-size: 16px;color: green;">
                            يتم الارسال
                        </div>
                </div>
            </div>
            <div style="background-image:url({{ asset('../wp-content/themes/yessmile-wp/assets/images/comments-image.png') }});"
                class="h-[24.2rem] md:h-[54.2rem] w-full md:w-[46.76190476190476%] rounded-[1rem]  bg-cover bg-no-repeat order-1 md:order-2 bg-center ">
            </div>
        </div>
    </div>

</main>
