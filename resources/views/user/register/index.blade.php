@extends('user.main')
@push('styles')
@endpush
@push('scripts')
    <script src="/js/user/register/index.js" type="text/javascript"></script>
@endpush
@section('content')
    <div id="top">
        <div class="mb-20">
            <div class="container mx-auto px-2">
                <section>
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-3 bg-lightgray my-5 p-5">
                        <section>
                            <div class="relative"><img class="page_banner-image__jznmJ"
                                    src="/storage/images/basic-detail-banner.39dee79b.jpeg" alt="bannner image" /></div>
                        </section>
                        <div class="bg-white p-5 col-span-2">
                            <h1 class=" text-md font-semibold">Start here to begin making a positive impact in your
                                community!</h1>
                            <div class="mt-3">
                                <p class="font-medium text-black" style="margin-bottom:5px">Join us</p>
                                <form name="a-form" action="{{ route('users.checkRegister') }}"
                                    class="w-full form-register form-type form-teen" method="POST">
                                    <div class="mt-3">
                                        <div><label for="email" class="AFormInput_labelName__GonDv">Student Email<span
                                                    class="text-red">*</span></label>
                                            <div>
                                                <div class="flex align-center justify-end"><input
                                                        class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                        type="email" id="email" name="email" autocomplete=""
                                                        value=""><i class="undefined mr-3 mt-4"
                                                        style="position: absolute;"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div><label for="password" class="AFormInput_labelName__GonDv">Password<span
                                                    class="text-red">*</span></label>
                                            <div>
                                                <div class="flex align-center justify-end"><input
                                                        class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                        type="password" id="password" name="password" autocomplete=""
                                                        value=""><i class="undefined mr-3 mt-4"
                                                        style="position: absolute;"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div><label for="gender" class="AFormInput_labelName__GonDv">Gender<span
                                                    class="text-red">*</span></label>
                                            <div class="lg:flex lg:items-center md:flex md:item-center">
                                                <div class="flex">
                                                    <div class="mr-3"><label class="RadioInput_radio-box__9Zh_z"
                                                            style="display: flex; align-items: center;"><input
                                                                class="RadioInput_radio-input__nYLQN" name="gender"
                                                                type="radio" value="0" checked>
                                                            <p class="RadioInput_label-name-post__DTnOY"
                                                                style="margin-bottom: 0px;">Male</p>
                                                        </label></div>
                                                </div>
                                                <div class="flex">
                                                    <div class="mr-3"><label class="RadioInput_radio-box__9Zh_z"
                                                            style="display: flex; align-items: center;"><input
                                                                class="RadioInput_radio-input__nYLQN" name="gender"
                                                                type="radio" value="1">
                                                            <p class="RadioInput_label-name-post__DTnOY"
                                                                style="margin-bottom: 0px;">Female</p>
                                                        </label></div>
                                                </div>
                                                <div class="flex">
                                                    <div class="mr-3"><label class="RadioInput_radio-box__9Zh_z"
                                                            style="display: flex; align-items: center;"><input
                                                                class="RadioInput_radio-input__nYLQN" name="gender"
                                                                type="radio" value="2">
                                                            <p class="RadioInput_label-name-post__DTnOY"
                                                                style="margin-bottom: 0px;">X</p>
                                                        </label></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div><label class="AFormInput_labelName__GonDv">Date of birth<span
                                                    class="text-red">*</span></label>
                                            <br /><input type="date" name="birthdate" value="<?php echo date('Y-m-d'); ?>"/>
                                        </div>
                                    </div>
                                    {{-- <div class="mt-3">
                                        <div>
                                            <div>
                                                <div style="width: 304px; height: 78px;">
                                                    <div><iframe title="reCAPTCHA"
                                                            src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lf3uuwkAAAAAMjQJrTAiufg2uMkQOEj7xCoq3QC&amp;co=aHR0cHM6Ly93d3cubGlvbnNoZWFydHNlcnZpY2Uub3JnOjQ0Mw..&amp;hl=vi&amp;type=image&amp;v=3kTz7WGoZLQTivI-amNftGZO&amp;theme=light&amp;size=normal&amp;badge=bottomright&amp;cb=jkx53il7cqm"
                                                            width="304" height="78" role="presentation"
                                                            name="a-xvmgs54dfx25" frameborder="0" scrolling="no"
                                                            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                                    </div>
                                                    <textarea id="g-recaptcha-response-32" name="g-recaptcha-response" class="g-recaptcha-response"
                                                        style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                </div><iframe style="display: none;"></iframe>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="pb-2 mt-3 w-48">
                                        <div>
                                            <div><button type="submit" style="background-color:#000E7B"
                                                    class="PrimaryButton_button-box__dGgxJ bg-primary border-primary border-1 px-3 py-2  undefined">
                                                    <div class=" flex justify-center align-center"
                                                        style="margin-bottom: 0px; height: 25px;">
                                                        <p class="font-primary">Join Now</p>
                                                    </div>
                                                </button></div>
                                        </div>
                                    </div>
                                    @csrf
                                </form>
                            </div>

                        </div>

                    </div>
                </section>
            </div>
        </div>
        <div class="relative ">
            <section class="bg-bluebg relative -z-20 " style="height:450px"></section>
            <main class="container mx-auto px-2 lg:px-0">
                <div class="relative -mt-80 z-50">
                    <div>
                        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-10 text-center">
                            <div class="WhoWeAreCard_main-container__fNR83 shadow-md mb-10 lg:mt-0 lg:mb-0">
                                <div class="WhoWeAreCard_icon-base-heart__sLm69"><i class="bi bi-heart-fill text-5xl"></i>
                                </div>
                                <div>
                                    <div class="WhoWeAreCard_para-base__TBhPZ">
                                        <div class="text-xl font-semibold" style="margin-top:35px">STEP 1: JOIN US
                                        </div>
                                        <div class="text-darkblue">
                                            <p>6th-12th grade</p>
                                            <p>Group Member Join a group*, attend required meetings, elect officers,
                                                and plan your volunteering goals together </p>
                                            <p>Individual Member Volunteer on your own schedule and enjoy no meeting
                                                requirements</p>
                                            <p>$69 one-time registration fee, $100 annual dues </p>
                                            <p>Reach the required 25 hours and receive a digital badge!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="WhoWeAreCard_main-container__fNR83 shadow-md  mb-16 lg:mb-0">
                                <div class="WhoWeAreCard_icon-base-star__LR8BR"><i class="bi bi-star-fill text-5xl"></i>
                                </div>
                                <div>
                                    <div class="WhoWeAreCard_para-base__TBhPZ">
                                        <div class="text-xl font-semibold" style="margin-top:35px">STEP 2: VOLUNTEER
                                            AND LEAD</div>
                                        <div class="text-darkblue">
                                            <p>Focus on giving your time to support your favorite causes</p>
                                            <p>NO fundraising</p>
                                            <p>Receive age-appropriate volunteer opportunities near you via email
                                                and access your personalized calendar in your family portal</p>
                                            <p>Conveniently track all of your volunteer hours in one place-- whether
                                                you find service opportunities via us or on your own</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="WhoWeAreCard_main-container__fNR83 shadow-md">
                                <div class="WhoWeAreCard_icon-base-hat__4z6D6"><i
                                        class="bi bi-mortarboard-fill text-5xl -scale-x-90"></i></div>
                                <div>
                                    <div class="WhoWeAreCard_para-base__TBhPZ">
                                        <div class="text-xl font-semibold " style="margin-top:35px">STEP 3: GROW
                                            &amp; ACHIEVE THROUGH SERVICE AND LEADERSHIP</div>
                                        <div class="text-darkblue">
                                            <p>Qualify for President’s Volunteer Service Award, Congressional Award,
                                                and other high honors</p>
                                            <p>Share your Volunteer Digital Portfolio with National Honor Society,
                                                NSHSS, colleges, scholarships, and job recruiters</p>
                                            <p>Earn achievements and awards while building leadership skills</p>
                                            <p>Access a database of service-related college scholarship
                                                opportunities in your Member Portal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <section class="my-8 container mx-auto px-2 lg:px-0">
            <div class="p-5 bg-primary bg-opacity-20 rounded-md">
                <div class="grid grid-cols-1 lg:grid-cols-12">
                    <div class="col-span-9">
                        <h5 class="text-secondary font-semibold text-2xl pb-3">Note</h5>
                    </div>
                    <div class="col-span-3"></div>
                </div>
                <div class="pt-4">
                    <div class="text-primary flex"><i class="bi bi-info-circle pr-2"></i>
                        <p>*Boys, Girls, and Mixed groups consist of 3-20 teens of the same age with a parent acting
                            as Class Coordinator. If a group is not yet formed in your area, you will have the
                            opportunity to create a new group. No refunds. Access our <span><a
                                    class="text-bold text-decoration-line: underline font-semibold text-secondary"
                                    href="/about/faq">FAQ&#x27;s for more info.</a> </span></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
