@extends('user.main')
@push('styles')
@endpush
@push('scripts')
    <script src="/js/user/profile/index.js" type="text/javascript"></script>
@endpush
@section('content')
    <div>
        @include('user.subheader')
        @include('user.profile.bar')
        <section class="form-type form-profile bg-lightgray py-5">
            <div class="container mx-auto px-4 md:px-0 lg:px-0">
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-12 lg:grid-cols-12 pt-5 bg-white p-4 rounded-md">
                        <div class="col-span-6">
                            <h1 class="font-semibold text-xl text-secondary">ADD VOLUNTEER HOURS</h1>
                            <div>
                                <div class="flex align-center"><i class="bi bi-info-circle text-primary"></i>
                                    <h5 class="text-primary text-sm ml-2">Deadline : 04/30/2024</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6">
                            <div>
                                <div class="flex align-center"><i class="bi bi-info-circle text-primary"></i>
                                    <h5 class="text-primary text-sm ml-2">To order your verified Cumulative Volunteer
                                        Transcript to send to colleges through Parchment, click the button below:</h5>
                                </div>
                            </div><a target="_blank" href="https://www.parchment.com/u/registration/35550664/account">
                                <div class="col-span-1 lg:flex md:flex lg:justify-end md:justify-end items-center"><img
                                        alt="infoMessageImg"
                                        srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finfo_message_img.d64d48b6.png&amp;w=256&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finfo_message_img.d64d48b6.png&amp;w=384&amp;q=75 2x"
                                        src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finfo_message_img.d64d48b6.png&amp;w=384&amp;q=75"
                                        width="136" height="48" decoding="async" data-nimg="1" loading="lazy"
                                        style="color: transparent;"></div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div class="container bg-white p-4 rounded-md">
                                <form name="a-form" id="form-volunteer" action="{{ route('volunteers.create') }}"
                                    method="POST">
                                    <div
                                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-5 font-semibold text-secondary">
                                        <div><label for="organization" class="AFormInput_labelName__GonDv">Organization<span
                                                    class="text-red">*</span></label>
                                            <div>
                                                <div class="flex align-center justify-end">
                                                    <input
                                                        class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                        type="text" id="organization" name="organization"
                                                        placeholder="Enter Organization" autocomplete="" value=""
                                                        style="padding-left: 2%;" />
                                                    <i class="undefined mr-3 mt-4" style="position: absolute;"></i>
                                                </div>
                                                <p class="err-organization"
                                                    style=" margin-bottom: 2px; margin-top: 0px; color:red"></p>
                                            </div>
                                        </div>
                                        <div><label for="name" class="AFormInput_labelName__GonDv">Contact
                                                Name<span class="text-red">*</span></label>
                                            <div>
                                                <div class="flex align-center justify-end"><input
                                                        class="TextInput_text-input__CQMEM hover:outline-primary active:outline-primary focus:outline-primary"
                                                        type="text" id="name" name="name"
                                                        placeholder="Enter Contact Name" autocomplete="" value=""
                                                        style="padding-left: 2%;"><i class="undefined mr-3 mt-4"
                                                        style="position: absolute;"></i></div>
                                                <p class="err-name" style=" margin-bottom: 2px; margin-top: 0px; color:red">
                                                </p>
                                            </div>
                                        </div>
                                        <div><label for="phone" class="AFormInput_labelName__GonDv">Contact
                                                Number</label>
                                            <div>
                                                <div class="flex align-center justify-end"><input
                                                        class="hover:outline-primary active:outline-primary focus:outline-primary"
                                                        type="text" id="phone" name="phone"
                                                        placeholder="Enter Contact Number" autocomplete="" value=""
                                                        style="padding-left: 2%;"><i class="undefined mr-3 mt-4"
                                                        style="position: absolute;"></i></div>
                                                </p>
                                                <p class="err-pattern-phone err-phone"
                                                    style=" margin-bottom: 2px; margin-top: 0px; color:red">
                                                </p>
                                            </div>
                                        </div>
                                        <div><label for="email" class="AFormInput_labelName__GonDv">Contact
                                                Email</label>
                                            <div>
                                                <div class="flex align-center justify-end"><input
                                                        class="hover:outline-primary active:outline-primary focus:outline-primary"
                                                        type="text" id="email" name="email"
                                                        placeholder="Enter Contact Email" autocomplete="" value=""
                                                        style="padding-left: 2%;"><i class="undefined mr-3 mt-4"
                                                        style="position: absolute;"></i></div>
                                                </p>
                                                <p class="err-pattern-email err-email"
                                                    style=" margin-bottom: 2px; margin-top: 0px; color:red">
                                                </p>
                                            </div>
                                        </div>
                                        <div><label for="date" class="AFormInput_labelName__GonDv">Select Date<span
                                                    class="text-red">*</span></label>
                                            <br />
                                            <input type="date" max="{{ date('Ymd') }}"
                                                class="DatePicker_date-picker__o7i66 hover:outline-primary active:outline-primary focus:outline-primary"
                                                name="date" id="date" value="" />
                                            <p class="err-date" style=" margin-bottom: 2px; margin-top: 0px; color:red">
                                            </p>
                                        </div>
                                        <div>
                                            <label for="log_service_type_id" class="AFormInput_labelName__GonDv">Select
                                                Service Type<span class="text-red">*</span></label>
                                            <select name="service_type_id" id="service_type_id" style="width: 100%">
                                                @foreach ($service_types as $ser)
                                                    <option value="{{ $ser->id }}">
                                                        {{ $ser->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <p class="err-service_type_id"
                                                style=" margin-bottom: 2px; margin-top: 0px; color:red"></p>
                                        </div>
                                        <div>
                                            <label for="start_at" class="AFormInput_labelName__GonDv">Start Time<span
                                                    class="text-red">*</span></label>
                                            <br />
                                            <input type="time" name="start_time" id="start_time" width="100%" />
                                            <p class="err-start_time"
                                                style=" margin-bottom: 2px; margin-top: 0px; color:red">
                                            </p>
                                        </div>
                                        <div><label for="end_at" class="AFormInput_labelName__GonDv">End Time<span
                                                    class="text-red">*</span></label>
                                            <br />
                                            <input type="time" name="end_time" id="end_time" width="100%" />
                                            <p class="err-end_time"
                                                style="margin-bottom: 2px; margin-top: 0px; color:red">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pt-4 font-semibold">
                                        <div><label for="description" class="AFormInput_labelName__GonDv">Description<span
                                                    class="text-red">*</span></label>
                                            <div>
                                                <textarea class="TextArea_aTextArea__BoAJ8 hover:outline-primary active:outline-primary focus:outline-primary"
                                                    name="description" id="description"
                                                    placeholder="Describe your community service project and the impact you made. Why was this volunteer project important to you?"
                                                    style="width: 50%" rows="5"></textarea>
                                                <p class="err-description"
                                                    style="margin-bottom: 2px; margin-top: 0px; color:red">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-6 gap-3 mt-4">
                                        <div>
                                            <div><button type="button"
                                                    class="btn-clear PrimaryButton_outline-button-box__mQVaQ text-light-gray border-1.5 px-4 py-2 border-gray-300 hover:border-primary hover:text-primary  undefined">
                                                    <div class="flex justify-center align-center"
                                                        style="margin-bottom: 0px; height: 25px;">
                                                        <p class="font-primary">Clear</p>
                                                    </div>
                                                </button></div>
                                        </div>
                                        <div>
                                            <div>
                                                <div>
                                                    <button type="submit" style="background-color:#000E7B"
                                                        class="btn-save PrimaryButton_button-box__dGgxJ bg-primary border-primary border-1 px-3 py-2  undefined">
                                                        <div class=" flex justify-center align-center"
                                                            style="margin-bottom: 0px; height: 25px;">
                                                            <p class="font-primary">Save</p>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="user_id" value="{{ Auth::id() }}" />
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="py-3">
                            <h1 class="font-semibold text-2xl py-5">PRESIDENT'S VOLUNTEER SERVICE AWARD (PVSA)<button
                                    type="button"><i class="bi bi-info-circle-fill text-primary"></i></button></h1>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                            <div class="bg-white p-5 rounded-md" style="height: 190px;">
                                <h1 class="text-left text-secondary uppercase font-semibold text-md pb-5">HOURS TOWARD PVSA
                                    (&nbsp;PVSA is counted from May 1 - April 30&nbsp;)</h1>
                                <div class="bg-graybg h-6 rounded-full">
                                    <div class="h-6 bg-cyan rounded-full text-center" style="width: 0%;">
                                        <p>0%</p>
                                    </div>
                                    <p class="text-right text-md font-semibold pt-2 text-gray">TOTAL PVSA HOURS</p>
                                    <p class="pt-5 text-md text-primary"><i class="bi bi-info-circle pr-3"></i>You're on
                                        your way to a PVSA-BRONZE You can do it!</p>
                                </div>
                            </div>
                            <div class="bg-white p-5 rounded-md" style="height: 190px;">
                                <h1 class="text-left text-secondary uppercase font-semibold text-md pb-5">HOURS TOWARD 25
                                    HOURS REQUIREMENTS</h1>
                                <div class="bg-graybg h-6 rounded-full">
                                    <div class="h-6 bg-yellow rounded-full text-center" style="width: 0%;">
                                        <p>0%</p>
                                    </div>
                                    <p class="text-right text-md font-semibold pt-2 text-gray">TOTAL 0 PVSA HOURS</p>
                                    <div class="flex justify-between items-center">
                                        <p class="pt-5 text-md text-primary"><i class="bi bi-info-circle pr-3"></i>Lion's
                                            Heart Minumium Hour Requirement!.</p>
                                        <p class="text-red pt-5 text-md ">Duedate : 07/03/2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div></div>
                <div>
                    <div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10 mt-10">
                            <div class="bg-white rounded-md p-10">
                                <div class="pb-5">
                                    <h1 class="text-2xl font-semibold text-secondary">ONETIME VOLUNTEER OPPORTUNITIES</h1>
                                    <p class="text-primary text-sm"><i class="bi bi-info-circle"></i> Check back often for
                                        more as we are always adding opportunities!</p>
                                </div>
                                <div class="my-3 overflow-auto" style="max-height: 670px;">
                                    <div>
                                        <div class=" w-full text-start" data-headlessui-state="">
                                            <div>
                                                <div class="container mx-auto">
                                                    <div class="relative ">
                                                        <div class="border-r-2 border-timeline absolute h-full top-0"
                                                            style="left: 9px;"></div>
                                                        <div class="overflow-auto">
                                                            <ul class="list-none m-0 p-0">
                                                                <li class="mb-5 rounded-md">
                                                                    <div class="flex group items-center ">
                                                                        <div
                                                                            class="bg-gray-800 bg-white z-10 rounded-full border-2 border-primary h-5 w-5">
                                                                            <div class="bg-timeline h-1 items-center mt-1.5"
                                                                                style="width: 20px; margin-left: 18px;">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="flex-1 ml-5 md:ml-5 pb-3 border-1 shadow-md border-timeline">
                                                                            <div class="pt-1 flex text-primary">
                                                                                <div
                                                                                    class="mx-3 pl-3 pt-1 font-medium text-md bg-lightgray p-2">
                                                                                    5th Jul, 2023</div>
                                                                            </div>
                                                                            <div class="pt-1 flex">
                                                                                <div
                                                                                    class="pl-3 pt-1 font-bold text-xl text-secondary">
                                                                                    July 5th Cleanup : The Dirtiest Beach
                                                                                    and Park Day of The Year</div>
                                                                            </div>
                                                                            <div class="pt-1 flex">
                                                                                <div class="pl-3 pt-1 font-medium text-md">
                                                                                    <span class="text-gray"> Time:
                                                                                    </span>Any Time
                                                                                </div>
                                                                                <div class="ml-1 pt-1 font-medium text-md">
                                                                                    <span class="text-gray"> </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="pt-1 flex">
                                                                                <div class="pl-3 pt-1 font-medium text-md">
                                                                                    <span class="text-gray">Event Sign Up:
                                                                                    </span><a
                                                                                        href="https://www.surfrider.org/news/help-keep-our-beaches-clean-this-fourth-of-july?utm_campaign=Dirtiest%20Beach%20Day%20202"
                                                                                        class="text-primary"
                                                                                        target="_blank">https://www.surfrider.org/news/help-keep-our-beaches-clean-this-fourth-of-july?utm_campaign=Dirtiest%20Beach%20Day%20202</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="pt-1 flex ">
                                                                                <div class="pl-3 pt-1 font-medium text-md">
                                                                                    <span class="text-gray">Location:
                                                                                    </span> <a href="">92679</a>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="flex justify-end w-full pt-1 font-medium text-primary">
                                                                                <button
                                                                                    class="flex justify-end pt-1 font-medium text-primary "
                                                                                    id="headlessui-disclosure-button-:rmi:"
                                                                                    type="button" aria-expanded="false"
                                                                                    data-headlessui-state=""><span> VIEW
                                                                                        MORE </span><span
                                                                                        class="bi bi-chevron-double-down px-1">
                                                                                    </span></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white rounded-md p-10">
                                <div class="pb-5">
                                    <h1 class="text-2xl font-semibold text-secondary">ONGOING VOLUNTEER OPPORTUNITIES</h1>
                                    <p class="text-primary text-sm"><i class="bi bi-info-circle"></i> Remember to check
                                        back for new, inspiring ways to serve your community!</p>
                                </div>
                                <div class="my-3 overflow-auto" style="max-height: 670px;">
                                    <div>
                                        <div class=" w-full text-start" data-headlessui-state="">
                                            <div>
                                                <div class="container mx-auto">
                                                    <div class="relative ">
                                                        <div class="border-r-2 border-timeline absolute h-full top-0"
                                                            style="left: 9px;"></div>
                                                        <div class="overflow-auto">
                                                            <ul class="list-none m-0 p-0">
                                                                <li class="mb-5 rounded-md">
                                                                    <div class="flex group items-center ">
                                                                        <div
                                                                            class="bg-gray-800 bg-white z-10 rounded-full border-2 border-primary h-5 w-5">
                                                                            <div class="bg-timeline h-1 items-center mt-1.5"
                                                                                style="width: 20px; margin-left: 18px;">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="flex-1 ml-5 md:ml-5 pb-3 border-1 shadow-md border-timeline">
                                                                            <div class="pt-1 flex text-primary">
                                                                                <div
                                                                                    class="mx-3 pl-3 pt-1 font-medium text-md bg-lightgray p-2">
                                                                                    DAILY</div>
                                                                            </div>
                                                                            <div class="pt-1 flex">
                                                                                <div
                                                                                    class="pl-3 pt-1 font-bold text-xl text-secondary">
                                                                                    Clean Up Mother Earth</div>
                                                                            </div>
                                                                            <div class="pt-1 flex">
                                                                                <div class="pl-3 pt-1 font-medium text-md">
                                                                                    <span class="text-gray"> Start Date:
                                                                                    </span>08/15/2023
                                                                                </div>
                                                                                <div class="pl-3 pt-1 font-medium text-md">
                                                                                    <span class="text-gray"> End date:
                                                                                    </span>08/15/2024
                                                                                </div>
                                                                            </div>
                                                                            <div class="pt-1 flex">
                                                                                <div class="pl-3 pt-1 font-medium text-md">
                                                                                    <span class="text-gray">Ongoing daily:
                                                                                    </span>Any Time
                                                                                </div>
                                                                            </div>
                                                                            <div class="pt-1 flex">
                                                                                <div class="pl-3 pt-1 font-medium text-md">
                                                                                    <span class="text-gray">Event Sign Up:
                                                                                    </span><a
                                                                                        href="http://www.wildernessproject.org/volunteer_apprentice_ecologist.php"
                                                                                        class="text-primary"
                                                                                        target="_blank">http://www.wildernessproject.org/volunteer_apprentice_ecologist.php
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="pt-1 flex "></div>
                                                                            <div
                                                                                class="flex justify-end w-full pt-1 font-medium text-primary">
                                                                                <button
                                                                                    class="flex justify-end pt-1 font-medium text-primary "
                                                                                    id="headlessui-disclosure-button-:rq4:"
                                                                                    type="button" aria-expanded="false"
                                                                                    data-headlessui-state=""><span> VIEW
                                                                                        MORE </span><span
                                                                                        class="bi bi-chevron-double-down px-1">
                                                                                    </span></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="roster"></div>
            </div>
        </section>

    </div>
@endsection
