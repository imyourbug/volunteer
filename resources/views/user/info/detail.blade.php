@extends('user.main')
@push('styles')
@endpush
@push('scripts')
    <script src="/js/user/info/detail/index.js" type="text/javascript"></script>
@endpush
@section('content')
    <div>
        @include('user.subheader')
        @include('user.profile.bar')
        <div class="container mx-auto px-2 md:px-4 lg:px-0 py-5">
            <div class="grid grid-cols-1 lg:grid-cols-12 md:gap-3 lg:gap-3">
                @include('user.info.sidebar')
                <div class="col-span-10 mt-5 md:mt-0 lg:mt-0">
                    <div>
                        <form name="a-form" id="form-save">
                            <section class=" p-3 bg-lightgray">
                                <div class="bg-white p-5">
                                    <div class="text-center mb-3">
                                        <h1 class="font-semibold text-2xl text-secondary">Manage Contact Info / Change
                                            Password
                                        </h1>
                                    </div>
                                    <div class="grid grid-cols-3 md:grid-cols-12">
                                        <div class="col-span-7 flex">
                                            <h1 class="font-semibold text-xl text-secondary py-5">Member's Info*</h1>
                                        </div>
                                    </div>
                                    <div
                                        class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-x-10 gap-y-5 font-semibold text-secondary">
                                        <div><label for="first_name" class="AFormInput_labelName__GonDv">First Name<span
                                                    class="text-red">*</span></label>
                                            <div>
                                                <div class="flex align-center justify-end"><input
                                                        class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                        type="text" id="first_name" name="first_name" autocomplete=""
                                                        value="{{ $detail->first_name }}" style="padding-left: 2%;"
                                                        placeholder="Enter first name" /><i class="undefined mr-3 mt-4"
                                                        style="position: absolute;"></i></div>
                                                <p class="err-first_name"
                                                    style=" margin-bottom: 2px; margin-top: 0px; color:red"></p>
                                            </div>
                                        </div>
                                        <div><label for="last_name" class="AFormInput_labelName__GonDv">Last Name<span
                                                    class="text-red">*</span></label>
                                            <div>
                                                <div class="flex align-center justify-end"><input
                                                        class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                        type="text" id="last_name" name="last_name" autocomplete=""
                                                        value="{{ $detail->last_name }}" style="padding-left: 2%;"
                                                        placeholder="Enter last name" /><i class="undefined mr-3 mt-4"
                                                        style="position: absolute;"></i></div>
                                                <p class="err-last_name"
                                                    style=" margin-bottom: 2px; margin-top: 0px; color:red"></p>
                                            </div>
                                        </div>
                                        <div><label for="pronouns" class="AFormInput_labelName__GonDv">Preferred
                                                Pronouns</label>
                                            <div>
                                                <div class="flex align-center justify-end"><input
                                                        class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                        type="text" id="pronouns" name="pronouns" autocomplete=""
                                                        value="{{ $detail->pronouns }}" style="padding-left: 2%;"
                                                        placeholder="Enter pronouns" /><i class="undefined mr-3 mt-4"
                                                        style="position: absolute;"></i></div>
                                                <p class="err-pronouns"
                                                    style=" margin-bottom: 2px; margin-top: 0px; color:red"></p>
                                            </div>
                                        </div>
                                        <div><label for="street" class="AFormInput_labelName__GonDv">Street Address<span
                                                    class="text-red">*</span></label>
                                            <div>
                                                <div class="flex align-center justify-end"><input
                                                        class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                        type="text" id="street" name="street" autocomplete=""
                                                        value="{{ $detail->street }}" style="padding-left: 2%;"
                                                        placeholder="Enter street" /><i class="undefined mr-3 mt-4"
                                                        style="position: absolute;"></i></div>
                                                <p class="err-street"
                                                    style=" margin-bottom: 2px; margin-top: 0px; color:red"></p>
                                            </div>
                                        </div>
                                        <div><label for="city" class="AFormInput_labelName__GonDv">Ward<span
                                                    class="text-red">*</span></label>
                                            <div>
                                                <div class="flex align-center justify-end"><input
                                                        class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                        type="text" id="ward" name="ward" autocomplete=""
                                                        value="{{ $detail->ward }}" style="padding-left: 2%;"
                                                        placeholder="Enter ward" /><i class="undefined mr-3 mt-4"
                                                        style="position: absolute;"></i></div>
                                                <p class="err-ward" style=" margin-bottom: 2px; margin-top: 0px; color:red">
                                                </p>
                                            </div>
                                        </div>
                                        <div><label for="region_id" class="AFormInput_labelName__GonDv">Province<span
                                                    class="text-red">*</span></label>
                                            <br />
                                            <input
                                                class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                type="text" id="province" name="province" autocomplete=""
                                                value="{{ $detail->province }}" style="padding-left: 2%;"
                                                placeholder="Enter province" />
                                            <p class="err-province"
                                                style=" margin-bottom: 2px; margin-top: 0px; color:red"></p>
                                        </div>
                                        <div><label for="dob" class="AFormInput_labelName__GonDv">Select
                                                BirthDate</label>
                                            <br /><input type="date" max="2023-08-13"
                                                class="DatePicker_date-picker__o7i66 hover:outline-primary active:outline-primary focus:outline-primary"
                                                name="birth_date" id="birth_date" value="{{ $detail->birth_date }}">
                                            <p class="err-birth_date"
                                                style=" margin-bottom: 2px; margin-top: 0px; color:red"></p>
                                        </div>
                                        <div>
                                            <div><label for="phone" class="AFormInput_labelName__GonDv">Cell Phone<span
                                                        class="text-red">*</span></label>
                                                <div>
                                                    <div class="flex align-center justify-end"><input
                                                            class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                            type="text" id="phone" name="phone" autocomplete=""
                                                            value="{{ $detail->phone }}" style="padding-left: 2%;"
                                                            placeholder="Enter number phone" /><i
                                                            class="undefined mr-3 mt-4" style="position: absolute;"></i>
                                                    </div>
                                                    <p class="err-phone"
                                                        style=" margin-bottom: 2px; margin-top: 0px; color:red"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div><label for="school" class="AFormInput_labelName__GonDv">School
                                                Information
                                                (Please write school's full name)<span class="text-red">*</span></label>
                                            <div>
                                                <div class="flex align-center justify-end"><input
                                                        class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                                        type="text" id="school" name="school" autocomplete=""
                                                        value="{{ $detail->school }}" style="padding-left: 2%;"
                                                        placeholder="Enter school name" /><i class="undefined mr-3 mt-4"
                                                        style="position: absolute;"></i></div>
                                                <p class="err-school"
                                                    style=" margin-bottom: 2px; margin-top: 0px; color:red"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-4 mt-5">
                                        <div class="md:col-span-1 col-span-2 col-start-1">
                                            <div>
                                                <div><button type="submit"
                                                style="background-color:#000E7B"
                                                        class="btn-save PrimaryButton_button-box__dGgxJ bg-primary border-primary border-1 px-3 py-2  undefined">
                                                        <div class=" flex justify-center align-center"
                                                            style="margin-bottom: 0px; height: 25px;">
                                                            <p class="font-primary">Save</p>
                                                        </div>
                                                    </button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            @csrf
                        </form>
                        <form name="a-form" id="form-change">
                            <section class="p-3 bg-lightgray mx-auto">
                                <div class="container mx-auto p-3 sm:px-4 lg:px-4 bg-white rounded-md mb-3">
                                    <h1 class="font-semibold text-xl pb-3">Change My Password</h1>
                                    <div
                                        class="grid grid-cols-1 md:grid-cols-3 gap-x-10 gap-y-5 font-semibold text-secondary">
                                        <div><label for="password" class="AFormInput_labelName__GonDv">New Password<span
                                                    class="text-red">*</span></label>
                                            <div>
                                                <div class="flex align-center justify-end"><input
                                                        class="txt-password txt-new-password hover:outline-primary active:outline-primary focus:outline-primary"
                                                        type="password" id="password" name="password" autocomplete=""
                                                        style="padding-left: 2%;" placeholder="Enter password" /><i
                                                        class="undefined mr-3 mt-4" style="position: absolute;"></i></div>
                                                <p class="err-password"
                                                    style=" margin-bottom: 2px; margin-top: 0px; color:red"></p>
                                            </div>
                                        </div>
                                        <div><label for="confirm_password" class="AFormInput_labelName__GonDv">Confirm New
                                                Password<span class="text-red">*</span></label>
                                            <div>
                                                <div class="flex align-center justify-end"><input
                                                        class="txt-password txt-confirm-password hover:outline-primary active:outline-primary focus:outline-primary"
                                                        type="password" id="confirm_password" autocomplete=""
                                                        style="padding-left: 2%;" placeholder="Enter new password" /><i
                                                        class="undefined mr-3 mt-4" style="position: absolute;"></i></div>
                                                <p class="err-confirm_password err-match-confirm_password"
                                                    style=" margin-bottom: 2px; margin-top: 0px; color:red"></p>
                                            </div>
                                        </div>
                                        <div class="flex justify-between md:justify-around lg:justify-around">
                                            <div>
                                                <p class="font-medium">My Account ID</p>
                                                <p class="font-bold mt-3">{{ Auth::user()?->id }}</p>
                                            </div>
                                            <div>
                                                <p class="font-medium">My Username</p>
                                                <p class="font-bold mt-3">
                                                    {{ Auth::user()?->name ?? Auth::user()?->email }}
                                                </p>
                                                <input name="email" type="hidden"
                                                    value="{{ Auth::user()?->email }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-4 mt-7">
                                        <div class="md:col-span-1 col-span-2 col-start-1">
                                            <div>
                                                <div><button type="submit" style="background-color:#000E7B"
                                                        class="btn-change PrimaryButton_button-box__dGgxJ bg-primary border-primary border-1 px-3 py-2  undefined">
                                                        <div class=" flex justify-center align-center"
                                                            style="margin-bottom: 0px; height: 25px;">
                                                            <p class="font-primary">Change Password</p>
                                                        </div>
                                                    </button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
