@extends('user.main')
@push('styles')
@endpush
@push('scripts')
@endpush
@section('content')
   <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-lightgray p-4 mt-4">
                <div class="w-full h-full">
                    <div class="react-multi-carousel-list carousel-container " dir="ltr">
                        <ul class="react-multi-carousel-track "
                            style="transition:none;overflow:unset;transform:translate3d(0px,0,0)"></ul>
                    </div>
                </div>
                <div class="bg-white p-4">
                    <form name="a-form" action="/volunteer/request" method="POST">
                        <div class="bg-white">
                            <h1 class="text-md md:text-xl font-semibold mt-2">Start here to post your volunteer
                                opportunity</h1>
                            <div class="mt-6">
                                <div><label for="requester_first_name" class="AFormInput_labelName__GonDv">First
                                        Name<span class="text-red">*</span></label>
                                    <div>
                                        <div class="flex align-center justify-end"><input style="padding-left:2%"
                                                class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                value="{{old('first_name')}}"
                                                type="text" id="requester_first_name" name="first_name"
                                                placeholder="Enter First Name" autoComplete="" /><i
                                                class="undefined mr-3 mt-4" style="position:absolute"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div><label for="requester_last_name" class="AFormInput_labelName__GonDv">Last Name<span
                                            class="text-red">*</span></label>
                                    <div>
                                        <div class="flex align-center justify-end"><input style="padding-left:2%"
                                                class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                value="{{old('last_name')}}"
                                                type="text" id="requester_last_name" name="last_name"
                                                placeholder="Enter Last Name" autoComplete="" /><i
                                                class="undefined mr-3 mt-4" style="position:absolute"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div><label for="organization_name" class="AFormInput_labelName__GonDv">Organization
                                        Name<span class="text-red">*</span></label>
                                    <div>
                                        <div class="flex align-center justify-end"><input style="padding-left:2%"
                                                class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                value="{{old('organization_name')}}"
                                                type="text" id="organization_name" name="organization_name"
                                                placeholder="Enter Organization Name" autoComplete="" /><i
                                                class="undefined mr-3 mt-4" style="position:absolute"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div><label for="organization_type" class="AFormInput_labelName__GonDv">Organization
                                        Type<span class="text-red">*</span></label>
                                        <br/>
                                    <select name="organization_type" style="width: 50%">
                                        <option value="0">Other</option>
                                        <option value="1">Non profit</option>
                                        <option value="2">School</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div><label for="requester_email" class="AFormInput_labelName__GonDv">Email Address<span
                                            class="text-red">*</span></label>
                                    <div>
                                        <div class="flex align-center justify-end"><input style="padding-left:2%"
                                                class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                type="text" id="requester_email" name="email"
                                                value="{{old('email')}}"
                                                placeholder="Enter Email Address" autoComplete="" /><i
                                                class="undefined mr-3 mt-4" style="position:absolute"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div>
                                    <div class="flex">
                                        <div class="w-5 h-5 "><input id="checkbox" class="h-5 w-5 accent-primary"
                                                type="checkbox" name="checkbox" /></div>
                                        <div class="pl-2"><label for="checkbox" class="text-gray">I don&#x27;t want to
                                                miss a thing. Send me updates!</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-1 lg:grid-cols-2 mt-8">
                                <div>
                                    <div><button type="submit" style="background-color:#000E7B"
                                            class="PrimaryButton_button-box__dGgxJ bg-primary border-primary border-1 px-3 py-2  undefined">
                                            <div style="margin-bottom:0;height:25px"
                                                class=" flex justify-center align-center">
                                                <p class="font-primary">Post your volunteer opportunity now!</p>
                                            </div>
                                        </button></div>
                                </div>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
            <div class="my-10">
                <div class="text-center my-10 md:my-20">
                    <h1 class="text-2xl md:text-4xl font-semibold">Request Volunteers <span
                            class="text-primary">FAQ&#x27;s</span></h1>
                </div>
                <div class="mb-4 shadow-md">
                    <div class="w-full bg-white p-1 shadow-md"><button
                            class="flex w-full justify-between items-center px-4 py-2 text-left text-sm font-medium "
                            id="headlessui-disclosure-button-:R4qirbkm:" type="button" aria-expanded="false"
                            data-headlessui-state="">
                            <div>
                                <p class="text-md text-start font-semibold text-secondary ">About Our Members</p>
                            </div><span class="bi bi-plus text-secondary "></span>
                        </button></div>
                </div>
                <div class="mb-4 shadow-md">
                    <div class="w-full bg-white p-1 shadow-md"><button
                            class="flex w-full justify-between items-center px-4 py-2 text-left text-sm font-medium "
                            id="headlessui-disclosure-button-:R5airbkm:" type="button" aria-expanded="false"
                            data-headlessui-state="">
                            <div>
                                <p class="text-md text-start font-semibold text-secondary ">Expectations of Our Members
                                </p>
                            </div><span class="bi bi-plus text-secondary "></span>
                        </button></div>
                </div>
                <div class="mb-4 shadow-md">
                    <div class="w-full bg-white p-1 shadow-md"><button
                            class="flex w-full justify-between items-center px-4 py-2 text-left text-sm font-medium "
                            id="headlessui-disclosure-button-:R5qirbkm:" type="button" aria-expanded="false"
                            data-headlessui-state="">
                            <div>
                                <p class="text-md text-start font-semibold text-secondary ">Our Part</p>
                            </div><span class="bi bi-plus text-secondary "></span>
                        </button></div>
                </div>
                <div class="mb-4 shadow-md">
                    <div class="w-full bg-white p-1 shadow-md"><button
                            class="flex w-full justify-between items-center px-4 py-2 text-left text-sm font-medium "
                            id="headlessui-disclosure-button-:R6airbkm:" type="button" aria-expanded="false"
                            data-headlessui-state="">
                            <div>
                                <p class="text-md text-start font-semibold text-secondary ">Your Part</p>
                            </div><span class="bi bi-plus text-secondary "></span>
                        </button></div>
                </div>
                <div class="mb-4 shadow-md">
                    <div class="w-full bg-white p-1 shadow-md"><button
                            class="flex w-full justify-between items-center px-4 py-2 text-left text-sm font-medium "
                            id="headlessui-disclosure-button-:R6qirbkm:" type="button" aria-expanded="false"
                            data-headlessui-state="">
                            <div>
                                <p class="text-md text-start font-semibold text-secondary ">Questions</p>
                            </div><span class="bi bi-plus text-secondary "></span>
                        </button></div>
                </div>
                <div class="mb-4 shadow-md">
                    <div class="w-full bg-white p-1 shadow-md"><button
                            class="flex w-full justify-between items-center px-4 py-2 text-left text-sm font-medium "
                            id="headlessui-disclosure-button-:R7airbkm:" type="button" aria-expanded="false"
                            data-headlessui-state="">
                            <div>
                                <p class="text-md text-start font-semibold text-secondary ">Contact</p>
                            </div><span class="bi bi-plus text-secondary "></span>
                        </button></div>
                </div>
            </div>
            <div>
                <div class="w-full h-full px-4 mb-8">
                    <div class="react-multi-carousel-list carousel-container " dir="ltr">
                        <ul class="react-multi-carousel-track "
                            style="transition:none;overflow:unset;transform:translate3d(0px,0,0)"></ul>
                    </div>
                </div>
            </div>
        </div>
@endsection
