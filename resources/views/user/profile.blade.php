@extends('user.main')
@push('styles')
@endpush
@push('scripts')
    <script src="/js/user/profile.js" type="text/javascript"></script>
@endpush
@section('content')
    <div>
        <div class="bg-secondary lg:h-72 flex items-center">
            <div class="container mx-auto px-4 md:px-6 lg:px-0">
                <div class="grid grid-cols-1 lg:grid-cols-12">
                    <div class="lg:col-span-5 lg:flex items-center">
                        <div class="flex justify-center items-center my-4 cursor-pointer">
                            <div class="UserProfileCard_user-image__7bhoQ"><img alt="NOT FOUND"
                                    srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdummy_img.a36209cd.png&amp;w=640&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdummy_img.a36209cd.png&amp;w=1200&amp;q=75 2x"
                                    src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdummy_img.a36209cd.png&amp;w=1200&amp;q=75"
                                    width="600" height="600" decoding="async" data-nimg="1"
                                    class="rounded-full object-cover w-44 h-44" loading="lazy" style="color: transparent;">
                            </div>
                        </div>
                        <div><input type="file" name="file" class="!hidden" id="file-picker" accept="image/*"></div>
                        <div class="grid grid-cols-2">
                            <div class=" lg:text-left ml-4 my-4 lg:my-0">
                                <p class="text-primary font-semibold text-xl selection:capitalize pt-2">Andy Cao</p>
                                <p class="font-semibold text-white text-md">CA - Sunnyvale</p>
                                <p class="font-semibold text-white text-md"> </p>
                                <p class="font-semibold text-white text-md mt-3">Member since 2023 </p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-7 ">
                        <div class="lg:flex justify-center lg:justify-end lg:items-top h-full">
                            <div><a href="/content/share-your-story">
                                    <div><button type="button"
                                    style="background-color:#000E7B"
                                            class="PrimaryButton_button-box__dGgxJ bg-primary border-primary border-1 px-3 py-2  bg-primary my-2">
                                            <div class=" flex justify-center align-center"
                                                style="margin-bottom: 0px; height: 25px;">
                                                <p class="font-primary">Share My Story</p>
                                            </div>
                                        </button></div>
                                </a><a href="user/my-portfolio/award">
                                    <div><button type="button" style="background-color:#000E7B"
                                            class="PrimaryButton_button-box__dGgxJ bg-primary border-primary border-1 px-3 py-2  bg-primary my-2">
                                            <div class=" flex justify-center align-center"
                                                style="margin-bottom: 0px; height: 25px;">
                                                <p class="font-primary">View My Volunteer Log</p>
                                            </div>
                                        </button></div>
                                </a>
                                <div class="mt-1 text-right">
                                    <p class="text-primary">My Member ID : 226528</p>
                                    <p class="text-primary">My Referral Code : <span class="uppercase">226528AC</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative container mx-auto px-4 md:px-6 lg:px-0 lg:-mt-20 z-1 my-10 lg:my-0">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-4">
                <div
                    class="shadow p-4 bg-white w-full lg:col-span-3 lg:col-start-4 border-b-4 border-primary mb-10 md:mb-0">
                    <div class="flex justify-center items-center">
                        <div class="flex justify-center items-center rounded-full bg-blue "
                            style="height: 60px; width: 60px;"><i class="bi bi-person-fill text-white text-2xl"></i></div>
                    </div>
                    <div class="text-center ml-4 my-4 lg:my-0">
                        <p class="text-xl text-center text-secondary mt-2 capitalize font-semibold">Chapter President : Dawn
                            Wood</p>
                        <p class="font-regular text-secondary text-1xl"></p>
                        <p class="text-sm my-2"><a class="text-primary hover:underline hover:text-lightblue"
                                href="mailto:Dawn.Wood@lionsheartservice.org">Dawn.Wood@lionsheartservice.org</a></p>
                        <p class="text-sm my-2"><a class="text-primary hover:underline hover:text-lightblue"
                                href="tel:800.894.8877 x114">(800) 894-8877114</a></p>
                    </div>
                </div>
                <div
                    class="shadow p-4 bg-white w-full lg:col-span-3 lg:col-start-7 border-b-4 border-primary mb-10 md:mb-0">
                    <div class="flex justify-center items-center">
                        <div class="bg-primary flex justify-center items-center rounded-full"
                            style="height: 60px; width: 60px;background-color:#000E7B"><i class="bi bi-clock-fill text-white text-xl"></i></div>
                    </div>
                    <p class="text-xl text-center text-secondary mt-2 capitalize font-semibold"> Hours since joining</p>
                    <p class="text-center text-4xl mt-3"><a class="text-primary font-bols">0</a></p>
                </div>
                <div class="shadow p-4 bg-white w-full lg:col-span-3 lg:col-start-10 border-b-4 border-primary">
                    <div class="flex justify-center items-center">
                        <div class="bg-secondary flex justify-center items-center rounded-full"
                            style="height: 60px; width: 60px;"><i class="bi bi-envelope-fill text-white text-xl"></i></div>
                    </div>
                    <p class="text-xl text-center text-secondary mt-2 capitalize font-semibold"> Invite Friends</p>
                    <p class="text-xl mt-3 text-center"><a
                            href="mailto:?subject=Join%20Lion%27s%20Heart%20with%20my%20Referral%20Code,%20get%20$5%20off&amp;body=The%20time%20is%20now%20to%20take%20action%20for%20a%20positive%20future!%20Join%20me%20and%20become%20a%20Member%20of%20Lion%E2%80%99s%20Heart%20-%20Teen%20Volunteers%20and%20Leaders%20today!%0D%0AUse%20this%20code%20during%20enrollment%20to%20receive%20$5%20off:%20226528AC%0D%0A%0D%0ABy%20enrolling%20today%20you%20will:%0D%0A%0D%0A*%20Gain%20immediate%20access%20to%20the%20volunteer%20opportunity%20calendar%20and%20start%20volunteering!%0D%0A*%20Connect%20with%20causes%20you%20care%20about%20and%20participate%20in%20service%20learning%20experiences%0D%0A*%20Be%20able%20to%20volunteer%20on%20your%20own%20schedule%20with%20a%20group%20or%20as%20an%20individual%20Member%0D%0A*%20Build%20successful%20college,%20honor%20society,%20scholarship,%20and%20job%20applications%0D%0A*%20Develop%20leadership%20and%20life%20skills%20that%20can%20help%20you%20towards%20your%20future%20career%0D%0A*%20Earn%20the%20President%27s%20Volunteer%20Service%20Award%20and%20more%0D%0A%0D%0AVisit%20lionsheartservice.org%20to%20get%20started.%20%20Let%E2%80%99s%20do%20this!%0D%0A%0D%0A%20Thanks,%0D%0A%20Andy%20Cao%0D%0A%2094087 - Sunnyvale%0D%0A%0D%0ANeed%20support?%20Contact%20NewMembers@Lionsheartservice.org%20or%20call%20800-894-8877.%20The%20Lion%E2%80%99s%20Heart%20office%20is%20open%20M-F%209am-4pm."
                            class="text-primary hover:underline" target="_blank">Click here</a></p>
                </div>
            </div>
        </div>
        <div class="my-5 pt-5">
            <div>
                <div class="container mx-auto px-2 md:px-0 lg:px-0">
                    <div class="lg:flex lg:space-x-2 p-2 bg-lightgray">
                        <button
                            class="btn-type btn-profile flex items-center  mb-2 lg:mb-0 w-full rounded-md py-3 font-bold md:text-lg leading-5  ring-white focus:outline-none  bg-primary text-white">
                            &ensp;Profile
                        </button>
                        <button
                            class="btn-type btn-info flex items-center  mb-2 lg:mb-0 w-full rounded-md py-3 font-bold md:text-lg leading-5  ring-white focus:outline-none  bg-white text-gray">
                            &ensp;My info / Membership
                        </button>
                        <button
                            class="btn-type btn-log flex items-center  mb-2 lg:mb-0 w-full rounded-md py-3 font-bold md:text-lg leading-5  ring-white focus:outline-none  bg-white text-gray">
                            &ensp;My Portfolio / Log
                        </button>
                        <button
                            class="btn-type btn-tool flex items-center  mb-2 lg:mb-0 w-full rounded-md py-3 font-bold md:text-lg leading-5  ring-white focus:outline-none  bg-white text-gray">
                            &ensp;Toolkit
                        </button>
                        <button
                            class="btn-type btn-college flex items-center  mb-2 lg:mb-0 w-full rounded-md py-3 font-bold md:text-lg leading-5  ring-white focus:outline-none  bg-white text-gray">
                            &ensp;College Scholarships
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- profile --}}
        @include('user.profile.index')
        {{-- info --}}
        @include('user.profile.info')
        {{-- log --}}
        @include('user.profile.log')
    </div>
@endsection
