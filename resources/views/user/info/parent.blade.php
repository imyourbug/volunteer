@extends('user.main')
@push('styles')
@endpush
@push('scripts')
    <script src="/js/user/info/parent/index.js" type="text/javascript"></script>
@endpush
@section('content')
    <div>
        @include('user.subheader')
        @include('user.profile.bar')
        <div class="container mx-auto px-2 md:px-4 lg:px-0 py-5">
            <div class="grid grid-cols-1 lg:grid-cols-12 md:gap-3 lg:gap-3">
                @include('user.info.sidebar')
                <div class="form-type-info form-parent col-span-10 mt-5 md:mt-0 lg:mt-0">
                    <section class="p-3 bg-lightgray">
                        <form name="a-form" id="form-parent">
                            <div class="bg-white p-5">
                                <div class="text-center">
                                    <h1 class="font-semibold text-2xl text-secondary">Manage Parent / Guardian Contact Info
                                    </h1>
                                </div>
                                <div class="col-span-1">
                                    <p class="font-semibold text-xl text-secondary">First Parent / Guardian</p>
                                </div>
                                <div
                                    class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-x-10 gap-y-5 font-semibold mt-2 text-secondary">
                                    <div><label for="mother_first_name" class="AFormInput_labelName__GonDv">First Name<span
                                                class="text-red">*</span></label>
                                        <div>
                                            <div class="flex align-center justify-end"><input
                                                    class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                    type="text" id="mother_first_name" name="mother_first_name"
                                                    placeholder="Enter First Name" autocomplete=""
                                                    value="{{ $parent->mother_first_name ?? '' }}"
                                                    style="padding-left: 2%;"><i class="undefined mr-3 mt-4"
                                                    style="position: absolute;"></i></div>
                                            <p class="err-mother_first_name"
                                                style=" margin-bottom: 2px; margin-top: 0px; color:red">
                                            </p>
                                        </div>
                                    </div>
                                    <div><label for="mother_last_name" class="AFormInput_labelName__GonDv">Last Name<span
                                                class="text-red">*</span></label>
                                        <div>
                                            <div class="flex align-center justify-end"><input
                                                    class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                    type="text" id="mother_last_name" name="mother_last_name"
                                                    placeholder="Enter Last Name" autocomplete=""
                                                    value="{{ $parent->mother_last_name ?? '' }}"
                                                    style="padding-left: 2%;"><i class="undefined mr-3 mt-4"
                                                    style="position: absolute;"></i></div>
                                            <p class="err-mother_last_name"
                                                style=" margin-bottom: 2px; margin-top: 0px; color:red">
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <div><label for="mother_email" class="AFormInput_labelName__GonDv">Email<span
                                                    class="text-red">*</span></label>
                                            <div>
                                                <div class="flex align-center justify-end"><input
                                                        class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                        type="text" id="mother_email" name="mother_email"
                                                        placeholder="Enter Parent Email" autocomplete=""
                                                        value="{{ $parent->mother_email ?? '' }}"
                                                        style="padding-left: 2%;"><i class="undefined mr-3 mt-4"
                                                        style="position: absolute;"></i></div>
                                                <p class="err-mother_email"
                                                    style=" margin-bottom: 2px; margin-top: 0px; color:red"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div><label for="mother_phone" class="AFormInput_labelName__GonDv">Cell Phone<span
                                                    class="text-red">*</span></label>
                                            <div>
                                                <div class="flex align-center justify-end"><input
                                                        class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                        type="text" id="mother_phone" name="mother_phone"
                                                        placeholder="Enter number phone" autocomplete=""
                                                        value="{{ $parent->mother_phone ?? '' }}"
                                                        style="padding-left: 2%;"><i class="undefined mr-3 mt-4"
                                                        style="position: absolute;"></i></div>
                                                <p class="err-mother_phone"
                                                    style=" margin-bottom: 2px; margin-top: 0px; color:red"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div><label for="mother_employer" class="AFormInput_labelName__GonDv">Employer<span
                                                class="text-red">*</span></label>
                                        <div>
                                            <div class="flex align-center justify-end"><input
                                                    class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                    type="text" id="mother_employer" name="mother_employer"
                                                    placeholder="Enter Employer Name" autocomplete=""
                                                    value="{{ $parent->mother_employer ?? '' }}"
                                                    style="padding-left: 2%;"><i class="undefined mr-3 mt-4"
                                                    style="position: absolute;"></i></div>
                                            <p class="err-mother_employer"
                                                style=" margin-bottom: 2px; margin-top: 0px; color:red">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-1 mt-5">
                                    <p class="font-semibold text-xl text-secondary">Second Parent / Guardian</p>
                                </div>
                                <div
                                    class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-x-10 gap-y-5 font-semibold mt-2 text-secondary">
                                    <div><label for="father_first_name" class="AFormInput_labelName__GonDv">First
                                            Name</label>
                                        <div>
                                            <div class="flex align-center justify-end"><input
                                                    class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                    type="text" id="father_first_name" name="father_first_name"
                                                    placeholder="Enter First Name" autocomplete=""
                                                    value="{{ $parent->father_first_name ?? '' }}"
                                                    style="padding-left: 2%;"><i class="undefined mr-3 mt-4"
                                                    style="position: absolute;"></i></div>
                                            {{-- <p class="err-father_first_name"
                                                style=" margin-bottom: 2px; margin-top: 0px; color:red"></p> --}}
                                        </div>
                                    </div>
                                    <div><label for="father_last_name" class="AFormInput_labelName__GonDv">Last
                                            Name</label>
                                        <div>
                                            <div class="flex align-center justify-end"><input
                                                    class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                    type="text" id="father_last_name" name="father_last_name"
                                                    placeholder="Enter Last Name" autocomplete=""
                                                    value="{{ $parent->father_last_name ?? '' }}"
                                                    style="padding-left: 2%;"><i class="undefined mr-3 mt-4"
                                                    style="position: absolute;"></i></div>
                                            {{-- <p class="err-father_last_name"
                                                style=" margin-bottom: 2px; margin-top: 0px; color:red"></p> --}}
                                        </div>
                                    </div>
                                    <div>
                                        <div><label for="father_email" class="AFormInput_labelName__GonDv">Email</label>
                                            <div>
                                                <div class="flex align-center justify-end"><input
                                                        class="hover:outline-primary active:outline-primary focus:outline-primary"
                                                        type="text" id="father_email" name="father_email"
                                                        placeholder="Enter Parent Email" autocomplete=""
                                                        value="{{ $parent->father_email ?? '' }}"
                                                        style="padding-left: 2%;"><i class="undefined mr-3 mt-4"
                                                        style="position: absolute;"></i></div>
                                                <p class="err-father_email"
                                                    style=" margin-bottom: 2px; margin-top: 0px; color:red"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div><label for="father_phone" class="AFormInput_labelName__GonDv">Cell
                                                Phone</label>
                                            <div>
                                                <div class="flex align-center justify-end"><input
                                                        class="hover:outline-primary active:outline-primary focus:outline-primary"
                                                        type="text" id="father_phone" name="father_phone"
                                                        placeholder="Enter number phone" autocomplete=""
                                                        value="{{ $parent->father_phone ?? '' }}"
                                                        style="padding-left: 2%;"><i class="undefined mr-3 mt-4"
                                                        style="position: absolute;"></i></div>
                                                <p class="err-father_phone"
                                                    style=" margin-bottom: 2px; margin-top: 0px; color:red"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div><label for="father_employer" class="AFormInput_labelName__GonDv">Employer</label>
                                        <div>
                                            <div class="flex align-center justify-end"><input
                                                    class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                    type="text" id="father_employer" name="father_employer"
                                                    placeholder="Enter Employer Name" autocomplete=""
                                                    value="{{ $parent->father_employer ?? '' }}"
                                                    style="padding-left: 2%;"><i class="undefined mr-3 mt-4"
                                                    style="position: absolute;"></i></div>
                                            {{-- <p class="err-father_employer"
                                                style=" margin-bottom: 2px; margin-top: 0px; color:red"></p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-4 mt-7">
                                    <div class="md:col-span-1 col-span-2 col-start-1">
                                        <div>
                                            <div><button type="submit" style="background-color:#000E7B"
                                                    class="btn-save PrimaryButton_button-box__dGgxJ bg-primary border-primary border-1 px-3 py-2  undefined">
                                                    <div class=" flex justify-center align-center"
                                                        style="margin-bottom: 0px; height: 25px;">
                                                        <p class="font-primary">Save Changes</p>
                                                    </div>
                                                </button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @csrf
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
