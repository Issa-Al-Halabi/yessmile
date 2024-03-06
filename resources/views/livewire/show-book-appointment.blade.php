<div>

    <body data-rsssl="1" class="rtl page-template-default page page-id-744 innerpage">

        <main>

            <div class="bg-light-gray lg:h-[calc(100vh-194px)]  mb-[10rem] ">
                <div class="main-container grid grid-cols-12 pt-[10rem] " style="justify-items: center;">
                    <div class="col-span-12 lg:col-span-7 order-2 lg:order-1">
                        <div class="flex flex-col  h-full pl-0  lg:pl-[7.5rem]">
                            <div
                                class="contact-content-block-wrap text-center lg:text-right max-w-[31rem] lg:max-w-none inline-block lg:block mx-auto lg:mr-0">
                                <h1 class="hidden lg:block font-normal">حجز موعد &#8211; <b class="text-dark">يس
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
                            <h1 class="block lg:hidden font-normal">حجز موعد &#8211; <b class="text-dark">يس
                                    سمايل</b>
                            </h1>
                            <h2 class="block lg:hidden text-[2rem] font-medium">نقدم خدمات استثنائية؛ ترغب في تجربتها
                                بنفسك!</h2>
                        </div>
                        <div
                            class="min-h-[75.3rem] bg-light rounded-[2rem] shadow-light-box-shadow mb-[3rem] lg:mb-0 px-[3rem] py-[2rem] sm:px-[8.4rem] sm:py-[6rem]">
                            <h2 class="text-[1.6rem] font-bold text-center text-primary">أرسل لنا رسالتك وسنجيبك خلال 24
                                ساعة</h3>
                                <script type="text/javascript"></script>
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
                                                        type="text" value class="large" aria-invalid="false" />
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

                                            <div id="field_2_3"
                                                class="gfield gfield--type-phone gfield--width-full field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"
                                                data-js-reload="field_2_3"><label class="gfield_label gform-field-label"
                                                    for="input_2_4">
                                                    تاريخ الموعد</label>
                                                <div class="ginput_container ginput_container_phone">
                                                    <input wire:model="date" type="date" name="date"
                                                        id="input_2_4" value class="large" aria-invalid="false" />
                                                    <div style="    font-size: 12px;color: red;">
                                                        @error('date')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
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
                                <script type="text/javascript">
                                    /* <![CDATA[ */
                                    gform.initializeOnLoaded(function() {
                                        gformInitSpinner(2, '../wp-content/plugins/gravityforms/images/spinner.svg', true);
                                        jQuery('#gform_ajax_frame_2').on('load', function() {
                                            var contents = jQuery(this).contents().find('*').html();
                                            var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;
                                            if (!is_postback) {
                                                return;
                                            }
                                            var form_content = jQuery(this).contents().find('#gform_wrapper_2');
                                            var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_2').length >
                                                0;
                                            var is_redirect = contents.indexOf('gformRedirect(){') >= 0;
                                            var is_form = form_content.length > 0 && !is_redirect && !is_confirmation;
                                            var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css(
                                                'margin-top'), 10) + 100;
                                            if (is_form) {
                                                jQuery('#gform_wrapper_2').html(form_content.html());
                                                if (form_content.hasClass('gform_validation_error')) {
                                                    jQuery('#gform_wrapper_2').addClass('gform_validation_error');
                                                } else {
                                                    jQuery('#gform_wrapper_2').removeClass('gform_validation_error');
                                                }
                                                setTimeout(function() {
                                                    /* delay the scroll by 50 milliseconds to fix a bug in chrome */
                                                    jQuery(document).scrollTop(jQuery('#gform_wrapper_2').offset().top - mt);
                                                }, 50);
                                                if (window['gformInitDatepicker']) {
                                                    gformInitDatepicker();
                                                }
                                                if (window['gformInitPriceFields']) {
                                                    gformInitPriceFields();
                                                }
                                                var current_page = jQuery('#gform_source_page_number_2').val();
                                                gformInitSpinner(2, '../wp-content/plugins/gravityforms/images/spinner.svg', true);
                                                jQuery(document).trigger('gform_page_loaded', [2, current_page]);
                                                window['gf_submitting_2'] = false;
                                            } else if (!is_redirect) {
                                                var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();
                                                if (!confirmation_content) {
                                                    confirmation_content = contents;
                                                }
                                                setTimeout(function() {
                                                    jQuery('#gform_wrapper_2').replaceWith(confirmation_content);
                                                    jQuery(document).scrollTop(jQuery('#gf_2').offset().top - mt);
                                                    jQuery(document).trigger('gform_confirmation_loaded', [2]);
                                                    window['gf_submitting_2'] = false;
                                                    wp.a11y.speak(jQuery('#gform_confirmation_message_2').text());
                                                }, 50);
                                            } else {
                                                jQuery('#gform_2').append(contents);
                                                if (window['gformRedirect']) {
                                                    gformRedirect();
                                                }
                                            }
                                            const gformWrapperDiv = document.getElementById("gform_wrapper_2");
                                            if (gformWrapperDiv) {
                                                const visibilitySpan = document.createElement("span");
                                                visibilitySpan.id = "gform_visibility_test_2";
                                                gformWrapperDiv.insertAdjacentElement("afterend", visibilitySpan);
                                            }
                                            const visibilityTestDiv = document.getElementById("gform_visibility_test_2");
                                            let postRenderFired = false;

                                            function triggerPostRender() {
                                                if (postRenderFired) {
                                                    return;
                                                }
                                                postRenderFired = true;
                                                jQuery(document).trigger('gform_post_render', [2, current_page]);
                                                gform.utils.trigger({
                                                    event: 'gform/postRender',
                                                    native: false,
                                                    data: {
                                                        formId: 2,
                                                        currentPage: current_page
                                                    }
                                                });
                                                if (visibilityTestDiv) {
                                                    visibilityTestDiv.parentNode.removeChild(visibilityTestDiv);
                                                }
                                            }

                                            function debounce(func, wait, immediate) {
                                                var timeout;
                                                return function() {
                                                    var context = this,
                                                        args = arguments;
                                                    var later = function() {
                                                        timeout = null;
                                                        if (!immediate) func.apply(context, args);
                                                    };
                                                    var callNow = immediate && !timeout;
                                                    clearTimeout(timeout);
                                                    timeout = setTimeout(later, wait);
                                                    if (callNow) func.apply(context, args);
                                                };
                                            }
                                            const debouncedTriggerPostRender = debounce(function() {
                                                triggerPostRender();
                                            }, 200);
                                            if (visibilityTestDiv && visibilityTestDiv.offsetParent === null) {
                                                const observer = new MutationObserver((mutations) => {
                                                    mutations.forEach((mutation) => {
                                                        if (mutation.type === 'attributes' && visibilityTestDiv
                                                            .offsetParent !== null) {
                                                            debouncedTriggerPostRender();
                                                            observer.disconnect();
                                                        }
                                                    });
                                                });
                                                observer.observe(document.body, {
                                                    attributes: true,
                                                    childList: false,
                                                    subtree: true,
                                                    attributeFilter: ['style', 'class'],
                                                });
                                            } else {
                                                triggerPostRender();
                                            }
                                        });
                                    });
                                    /* ]]&gt; */
                                </script>
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
        <script type="text/javascript" src="{{ asset('wp-includes/js/dist/vendor/wp-polyfill-inert.min0226.js') }}"
            id="wp-polyfill-inert-js"></script>
        <script type="text/javascript" src="{{ asset('wp-includes/js/dist/vendor/regenerator-runtime.min6c85.js') }}"
            id="regenerator-runtime-js"></script>
        <script type="text/javascript" src="{{ asset('wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js') }}"
            id="wp-polyfill-js"></script>
        <script type="text/javascript" src="{{ asset('wp-includes/js/dist/dom-ready.minded6.js') }}" id="wp-dom-ready-js">
        </script>
        <script type="text/javascript" src="{{ asset('wp-includes/js/dist/hooks.min2ebd.js') }}" id="wp-hooks-js"></script>
        <script type="text/javascript" src="{{ asset('wp-includes/js/dist/i18n.minf92f.js') }}" id="wp-i18n-js"></script>
        <script type="text/javascript" id="wp-i18n-js-after">
            /* <![CDATA[ */
            wp.i18n.setLocaleData({
                'text direction\u0004ltr': ['rtl']
            });
            /* ]]> */
        </script>
        <script type="text/javascript" id="wp-a11y-js-translations">
            /* <![CDATA[ */
            (function(domain, translations) {
                var localeData = translations.locale_data[domain] || translations.locale_data.messages;
                localeData[""].domain = domain;
                wp.i18n.setLocaleData(localeData, domain);
            })("default", {
                "translation-revision-date": "2024-02-13 12:47:46+0000",
                "generator": "GlotPress\/4.0.0-beta.2",
                "domain": "messages",
                "locale_data": {
                    "messages": {
                        "": {
                            "domain": "messages",
                            "plural-forms": "nplurals=6; plural=(n == 0) ? 0 : ((n == 1) ? 1 : ((n == 2) ? 2 : ((n % 100 >= 3 && n % 100 <= 10) ? 3 : ((n % 100 >= 11 && n % 100 <= 99) ? 4 : 5))));",
                            "lang": "ar"
                        },
                        "Notifications": ["\u0627\u0644\u0625\u0634\u0639\u0627\u0631\u0627\u062a"]
                    }
                },
                "comment": {
                    "reference": "wp-includes\/js\/dist\/a11y.js"
                }
            });
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{ asset('wp-includes/js/dist/a11y.min866e.js') }}" id="wp-a11y-js"></script>
        <script type="text/javascript" defer="defer"
            src="{{ asset('wp-content/plugins/gravityforms/js/jquery.json.min5e0b.js') }}" id="gform_json-js"></script>
        <script type="text/javascript" id="gform_gravityforms-js-extra">
            /* <![CDATA[ */
            var gform_i18n = {
                "datepicker": {
                    "days": {
                        "monday": "Mo",
                        "tuesday": "Tu",
                        "wednesday": "We",
                        "thursday": "Th",
                        "friday": "Fr",
                        "saturday": "Sa",
                        "sunday": "Su"
                    },
                    "months": {
                        "january": "\u064a\u0646\u0627\u064a\u0631",
                        "february": "\u0641\u0628\u0631\u0627\u064a\u0631",
                        "march": "\u0645\u0627\u0631\u0633",
                        "april": "\u0627\u0628\u0631\u064a\u0644",
                        "may": "\u0645\u0627\u064a\u0648",
                        "june": "\u064a\u0648\u0646\u064a\u0629",
                        "july": "\u064a\u0648\u0644\u064a\u0648",
                        "august": "\u0627\u063a\u0633\u0637\u0633",
                        "september": "\u0633\u0628\u062a\u0645\u0628\u0631",
                        "october": "\u0627\u0643\u062a\u0648\u0628\u0631",
                        "november": "\u0646\u0648\u0641\u0645\u0628\u0631",
                        "december": "\u062f\u064a\u0633\u0645\u0628\u0631"
                    },
                    "firstDay": 6,
                    "iconText": "\u062d\u062f\u062f \u0627\u0644\u062a\u0627\u0631\u064a\u062e"
                }
            };
            var gf_legacy_multi = [];
            var gform_gravityforms = {
                "strings": {
                    "invalid_file_extension": "This type of file is not allowed. Must be one of the following:",
                    "delete_file": "Delete this file",
                    "in_progress": "in progress",
                    "file_exceeds_limit": "File exceeds size limit",
                    "illegal_extension": "This type of file is not allowed.",
                    "max_reached": "Maximum number of files reached",
                    "unknown_error": "There was a problem while saving the file on the server",
                    "currently_uploading": "Please wait for the uploading to complete",
                    "cancel": "\u0627\u0644\u063a\u0627\u0621",
                    "cancel_upload": "Cancel this upload",
                    "cancelled": "Cancelled"
                },
                "vars": {
                    "images_url": "https:\/\/yessmile.ae\/wp-content\/plugins\/gravityforms\/images"
                }
            };
            var gf_global = {
                "gf_currency_config": {
                    "name": "\u0627\u0644\u062f\u0648\u0644\u0627\u0631 \u0627\u0644\u0627\u0645\u0631\u064a\u0643\u0649",
                    "symbol_left": "$",
                    "symbol_right": "",
                    "symbol_padding": "",
                    "thousand_separator": ",",
                    "decimal_separator": ".",
                    "decimals": 2,
                    "code": "USD"
                },
                "base_url": "https:\/\/yessmile.ae\/wp-content\/plugins\/gravityforms",
                "number_formats": [],
                "spinnerUrl": "https:\/\/yessmile.ae\/wp-content\/plugins\/gravityforms\/images\/spinner.svg",
                "version_hash": "aaec19a0005311d3d7d53d9573025ecb",
                "strings": {
                    "newRowAdded": "\u062a\u0645\u062a \u0625\u0636\u0627\u0641\u0629 \u0635\u0641 \u062c\u062f\u064a\u062f.",
                    "rowRemoved": "\u062a\u0645\u062a \u0625\u0632\u0627\u0644\u0629 \u0627\u0644\u0635\u0641",
                    "formSaved": "\u062a\u0645 \u062d\u0641\u0638 \u0627\u0644\u0646\u0645\u0648\u0630\u062c. \u064a\u062d\u062a\u0648\u064a \u0627\u0644\u0645\u062d\u062a\u0648\u0649 \u0639\u0644\u0649 \u0627\u0644\u0631\u0627\u0628\u0637 \u0644\u0644\u0639\u0648\u062f\u0629 \u0648\u0627\u0633\u062a\u0643\u0645\u0627\u0644 \u0627\u0644\u0646\u0645\u0648\u0630\u062c."
                }
            };
            /* ]]> */
        </script>

        <script type="text/javascript" defer="defer"
            src="{{ asset('wp-content/plugins/gravityforms/js/gravityforms.min5e0b.js') }}" id="gform_gravityforms-js">
        </script>
        <script type="text/javascript" defer="defer"
            src="{{ asset('wp-content/plugins/gravityforms/js/jquery.maskedinput.min5e0b.js') }}" id="gform_masked_input-js">
        </script>
        <script type="text/javascript" defer="defer"
            src="{{ asset('wp-content/plugins/gravityforms/assets/js/dist/utils.minbdb4.js') }}"
            id="gform_gravityforms_utils-js"></script>
        <script type="text/javascript" defer="defer"
            src="{{ asset('wp-content/plugins/gravityforms/assets/js/dist/vendor-theme.minca9e.js') }}"
            id="gform_gravityforms_theme_vendors-js"></script>
        <script type="text/javascript" id="gform_gravityforms_theme-js-extra">
            /* <![CDATA[ */
            var gform_theme_config = {
                "common": {
                    "form": {
                        "honeypot": {
                            "version_hash": "aaec19a0005311d3d7d53d9573025ecb"
                        }
                    }
                },
                "hmr_dev": "",
                "public_path": "https:\/\/yessmile.ae\/wp-content\/plugins\/gravityforms\/assets\/js\/dist\/"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" defer="defer"
            src="{{ asset('wp-content/plugins/gravityforms/assets/js/dist/scripts-theme.min00af.js') }}"
            id="gform_gravityforms_theme-js"></script>
        <script defer type="text/javascript" src="{{ asset('wp-content/plugins/akismet/_inc/akismet-frontendce31.js') }}"
            id="akismet-frontend-js"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            gform.initializeOnLoaded(function() {
                jQuery(document).on('gform_post_render', function(event, formId, currentPage) {
                    if (formId == 2) {
                        jQuery('#input_2_3').mask('(999) 999-9999').bind('keypress', function(e) {
                            if (e.which == 13) {
                                jQuery(this).blur();
                            }
                        });
                    }
                });
                jQuery(document).on('gform_post_conditional_logic', function(event, formId, fields, isInit) {})
            });
            /* ]]> */
        </script>
        <script type="text/javascript">
            /* <![CDATA[ */
            gform.initializeOnLoaded(function() {
                const gformWrapperDiv = document.getElementById("gform_wrapper_2");
                if (gformWrapperDiv) {
                    const visibilitySpan = document.createElement("span");
                    visibilitySpan.id = "gform_visibility_test_2";
                    gformWrapperDiv.insertAdjacentElement("afterend", visibilitySpan);
                }
                const visibilityTestDiv = document.getElementById("gform_visibility_test_2");
                let postRenderFired = false;

                function triggerPostRender() {
                    if (postRenderFired) {
                        return;
                    }
                    postRenderFired = true;
                    jQuery(document).trigger('gform_post_render', [2, 1]);
                    gform.utils.trigger({
                        event: 'gform/postRender',
                        native: false,
                        data: {
                            formId: 2,
                            currentPage: 1
                        }
                    });
                    if (visibilityTestDiv) {
                        visibilityTestDiv.parentNode.removeChild(visibilityTestDiv);
                    }
                }

                function debounce(func, wait, immediate) {
                    var timeout;
                    return function() {
                        var context = this,
                            args = arguments;
                        var later = function() {
                            timeout = null;
                            if (!immediate) func.apply(context, args);
                        };
                        var callNow = immediate && !timeout;
                        clearTimeout(timeout);
                        timeout = setTimeout(later, wait);
                        if (callNow) func.apply(context, args);
                    };
                }
                const debouncedTriggerPostRender = debounce(function() {
                    triggerPostRender();
                }, 200);
                if (visibilityTestDiv && visibilityTestDiv.offsetParent === null) {
                    const observer = new MutationObserver((mutations) => {
                        mutations.forEach((mutation) => {
                            if (mutation.type === 'attributes' && visibilityTestDiv.offsetParent !==
                                null) {
                                debouncedTriggerPostRender();
                                observer.disconnect();
                            }
                        });
                    });
                    observer.observe(document.body, {
                        attributes: true,
                        childList: false,
                        subtree: true,
                        attributeFilter: ['style', 'class'],
                    });
                } else {
                    triggerPostRender();
                }
            });
            /* ]]> */
        </script>
    </body>

    <!-- Mirrored from yessmile.ae/contact-us/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Mar 2024 14:37:59 GMT -->

</div>
