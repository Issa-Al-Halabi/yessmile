<div>

    <body data-rsssl="1" class="rtl page-template-default page page-id-744 innerpage">

        <main>

            <div class="bg-light-gray lg:h-[calc(100vh-194px)]  mb-[10rem] ">
                <div class="main-container grid grid-cols-12 pt-[10rem] " style="justify-items: center;">
                    <div class="col-span-12 lg:col-span-7 order-2 lg:order-1">
                        <div class="flex flex-col  h-full pl-0  lg:pl-[7.5rem]">
                            <div
                                class="contact-content-block-wrap text-center lg:text-right max-w-[31rem] lg:max-w-none inline-block lg:block mx-auto lg:mr-0">
                                <h1 class="hidden lg:block font-normal">حجز استشارة &#8211; <b class="text-dark">يس
                                        سمايل</b></h1>
                                <h2 class="hidden lg:block text-[2rem] font-medium">نقدم خدمات استثنائية؛ ترغب في
                                    تجربتها
                                    بنفسك!</h2>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 order-1 lg:order-1 ">
                        <div class="contact-content-block-wrap block lg:hidden text-center">
                            <h1 class="block lg:hidden font-normal">حجز استشارة &#8211; <b class="text-dark">يس
                                    سمايل</b>
                            </h1>
                            <h2 class="block lg:hidden text-[2rem] font-medium">نقدم خدمات استثنائية؛ ترغب في تجربتها
                                بنفسك!</h2>
                        </div>
                        <div
                            class="min-h-[75.3rem] bg-light rounded-[2rem] shadow-light-box-shadow mb-[3rem] lg:mb-0 px-[3rem] py-[2rem] sm:px-[8.4rem] sm:py-[6rem]">
                            <h2 class="text-[1.6rem] font-bold text-center text-primary">أرسل لنا رسالتك وسنجيبك خلال 24
                                ساعة</h3>
                                <div class="gf_browser_unknown gform_wrapper gravity-theme gform-theme--no-framework ysm-form_wrapper contact-form_wrapper"
                                    data-form-theme="gravity-theme" data-form-index="0" id="gform_wrapper_2">
                                    <div id="gf_2" class="gform_anchor" tabindex="-1"></div>

                                    <div class="gform-body gform_body">
                                        <div id="gform_fields_2"
                                            class="gform_fields top_label form_sublabel_below description_below">
                                            <div id="field_2_1"
                                                class="gfield gfield--type-text field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"
                                                data-js-reload="field_2_1"><label class="gfield_label gform-field-label"
                                                    for="input_2_1">
                                                    اسم المريض
                                                </label>
                                                <div class="ginput_container ginput_container_text">
                                                    <input wire:model="patient_name" name="patient_name" id="input_2_1"
                                                        type="text" value="{{ $patient_name }}" class="large"
                                                        aria-invalid="false" />
                                                    <div style="    font-size: 12px;color: red;">
                                                        @error('patient_name')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="field_2_2"
                                                class="gfield gfield--type-email gfield--width-full field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"
                                                data-js-reload="field_2_2"><label class="gfield_label gform-field-label"
                                                    for="input_2_2">
                                                    العمر</label>
                                                <div class="ginput_container ginput_container_email">
                                                    <input wire:model="age" name="age" id="input_2_2" type="number"
                                                        value class="large" aria-invalid="false" />
                                                    <div style="    font-size: 12px;color: red;">
                                                        @error('age')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="field_2_3"
                                                class="gfield gfield--type-phone gfield--width-full field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"
                                                data-js-reload="field_2_3"><label class="gfield_label gform-field-label"
                                                    for="input_2_3">
                                                    البلد</label>
                                                <div class="ginput_container ginput_container_phone">
                                                    <input wire:model="country" name="country" id="input_2_3"
                                                        type="tel" value class="large" aria-invalid="false" />
                                                    <div style="    font-size: 12px;color: red;">
                                                        @error('country')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>


                                            <div id="field_2_8"
                                                class="gfield gfield--type-textarea field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"
                                                data-js-reload="field_2_8"><label class="gfield_label gform-field-label"
                                                    for="input_2_8">
                                                    وصف الحالة التي يعاني منها</label>
                                                <div class="ginput_container ginput_container_textarea">
                                                    <textarea wire:model="diagnose_description" name="diagnose_description" id="input_2_8" class="textarea large"
                                                        aria-invalid="false" rows="10" cols="50"></textarea>
                                                </div>
                                                <div style="    font-size: 12px;color: red;">
                                                    @error('diagnose_description')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>


                                            <div id="field_2_3"
                                                class="gfield gfield--type-phone gfield--width-full field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"
                                                data-js-reload="field_2_3"><label class="gfield_label gform-field-label"
                                                    for="input_2_4">
                                                    ارفاق صور</label>
                                                <div class="ginput_container ginput_container_phone">
                                                    <input multiple wire:model.live="images" type="file"
                                                        accept="image/png,image/jpeg" name="images" id="input_2_4"
                                                        value class="large" aria-invalid="false" />
                                                    <div style="    font-size: 12px;color: red;">
                                                        @error('images')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>

                                                    <div wire:loading wire:target="images" style="color:red">
                                                        يتم تحميل الصور
                                                    </div>
                                                    @if ($images)
                                                        <div
                                                            style="display: flex;flex-wrap: wrap;align-content: center;justify-content: center;align-items: center;gap: 20px;">
                                                            @foreach ($images as $image)
                                                                <div style="width:100px;hight:100px;">
                                                                    <img src="{{ $image->temporaryUrl() }}">
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <fieldset id="field_2_9"
                                                class="gfield gfield--type-checkbox gfield--type-choice privacy-check field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible"
                                                data-js-reload="field_2_9">
                                                <legend
                                                    class="gfield_label gform-field-label gfield_label_before_complex">
                                                    Privacy</legend>
                                                <div class="ginput_container ginput_container_checkbox">
                                                    <div class="gfield_checkbox" id="input_2_9">
                                                        <div class="gchoice gchoice_2_9_1">
                                                            <input wire:model="privacyPolicy"
                                                                class="gfield-choice-input" name="input_9.1"
                                                                type="checkbox"
                                                                value="لقد قرأت وأوافق على شروط سياسة الخصوصية"
                                                                id="choice_2_9_1" />
                                                            <label for="choice_2_9_1" id="label_2_9_1"
                                                                class="gform-field-label gform-field-label--type-inline">لقد
                                                                قرأت وأوافق على شروط سياسة الخصوصية</label>
                                                            <div style="    font-size: 12px;color: red;">
                                                                @error('privacyPolicy')
                                                                    {{ $message }}
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div id="field_2_10"
                                                class="gfield gfield--type-html gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"
                                                data-js-reload="field_2_10">
                                                <p class="form-btm-text">معلوماتك في أمان معنا، يتم نقل البيانات
                                                    عبر
                                                    التشفير.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gform_footer top_label">
                                        <div wire:loading.remove>
                                            <input type="submit" id="gform_submit_button_2"
                                                class="gform_button button" value="إرسال" style="cursor: pointer;"
                                                wire:click="save()" />
                                        </div>

                                        {{-- loading --}}
                                        <div class="loading" style="width: 100%;" wire:loading>
                                            <input type="submit" wire:loading.disabled id="gform_submit_button_2"
                                                class="gform_button button" value="يتم الارسال"
                                                style="cursor: pointer;" />
                                        </div>


                                    </div>
                                </div>
                                @if (session()->has('message'))
                                    <div class="alert">
                                        <span class="closebtn"
                                            onclick="this.parentElement.style.display='none';">&times;</span>
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <iframe style="display:none;width:0px;height:0px;" src="about:blank"
                                    name="gform_ajax_frame_2" id="gform_ajax_frame_2"
                                    title="يحتوي iframe على المنطق المطلوب للتعامل مع Gravity Forms التي تعمل بتقنية Ajax."></iframe>

                        </div>
                    </div>
                    <div
                        class="col-span-12 py-[3rem] order-3 text-center lg:text-right max-w-[31rem] lg:max-w-none inline-block lg:block mx-auto lg:mx-0  ">
                        <p class="font-medium">املأ النموذج المرفق، وسنوافيك بمواعيد الاستشارة المتاحة لدينا.</p>
                        <p class="text-secondary text-[2.4rem] lg:text-[3.6rem] font-extrabold">يمكنك التواصل معنا
                            7/24.
                        </p>
                    </div>
                </div>
            </div>

        </main>


        <link rel="stylesheet" id="forms-style-css"
            href="{{ asset('wp-content/themes/yessmile-wp/ysmile_blocks/blocks/assets/css/form-style84fc.css') }}"
            type="text/css" media="all" />
        <link rel="stylesheet" id="gform_basic-css"
            href="{{ asset('wp-content/plugins/gravityforms/assets/css/dist/basic.min5e0b.css') }}" type="text/css"
            media="all" />

    </body>

    <!-- Mirrored from yessmile.ae/contact-us/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Mar 2024 14:37:59 GMT -->

</div>
