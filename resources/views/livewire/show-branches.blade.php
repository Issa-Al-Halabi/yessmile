<div>
    <div class="main-container">

        <h2 class="mb-[3rem] mt-[2rem]">@lang('branches.our_branches') </h2>
        <h3 class="xl:mb-[3.625rem] mb-[5rem] font-light text-[1.6rem] lg:text-[2rem]  ">@lang('branches.all_our_branches')</h3>
    </div>
    @if (isset($branches->first()))
        <gmp-map center="{{ $branches->first()->lat }},{{ $branches->first()->lang }}" zoom="7"
            style="width=100vw; height: 100vh;" map-id="DEMO_MAP_ID">
            @foreach ($branches as $branch)
                <gmp-advanced-marker position="{{ $branch->lat }},{{ $branch->lang }}"
                    title="{{ $branch->name }}"></gmp-advanced-marker>
            @endforeach
        </gmp-map>
    @endif
</div>
