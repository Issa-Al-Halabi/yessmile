<main>
    @if (session()->has('message'))
        <div class="alert text-center">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ session('message') }}
        </div>
    @endif
    <div class="py-[6rem] sm:py-[10rem] ">
        <div class="main-container text-center">
            <span class="text-[2.2rem]  font-bold text-dark/50">
                {{ $news['date'] }}
            </span>
            <h1>
                {{ $news['title'] }}
            </h1>
        </div>
    </div>


    <div class="main-container relative">
        <div class="h-[20rem] md:h-[55rem]  relative flex justify-start bg-[#e8f5fc] rounded-[5rem]">
            <div class="  absolute bg-no-repeat bg-cover opacity-20 md:opacity-100 rounded-[5rem] bg-center z-0 left-0 top-0 right-0 bottom-0"
                style="background-image:url({{ asset('storage/' . $news['image']) }})">
            </div>
        </div>
    </div>

    <div class="pb-[10rem] bg-primary-extra-light -mt-[10rem] md:-mt-[30rem] pt-[15rem] md:pt-[40rem] rounded-[5rem]">
        <div class="main-container grid grid-cols-12 gap-[1.5rem] ">

            {{-- first column --}}
            <div class="col-span-12 md:col-span-7 single-post-content-wrap"
                style="display: flex;flex-direction: column;justify-content: space-between;">
                {!! $news['long_description'] !!}

                @if (isset($news->socials))
                    @foreach ($news->socials as $social)
                        <a href="{{ $social['link'] }}" target="_blank"><img style="height:50px; width:50px;"
                                src="{{ asset('storage/' . $social['image']) }}" /></a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</main>
