<div>
    <main>
        <div class="main-container py-[6rem] sm:py-[10rem] text-center">
            <h1 class="mb-0"><b>الشروط والأحكام<br />
                </b></h1>
        </div>
        <div style="background-color:#eef4fb"
            class=" mb-[6rem] sm:mb-[10rem]  content-block-wrap text-center  ul-center   rounded-[5rem]">
            <div class="main-container">
                <div class="text-right py-[5rem] sm:py-[8rem] full-width-bg-content">
                    @if (isset($privacyPolicy->body))
                        {!! $privacyPolicy->body !!}
                    @else
                        لا يوجد الشروط والأحكام بعد
                    @endif
                </div>
            </div>
        </div>
    </main>
</div>
