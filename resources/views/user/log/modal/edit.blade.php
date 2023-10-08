<h2 class="text-lg flex justify-between items-center font-medium leading-6 p-4 text-gray-900"
    id="headlessui-dialog-title-:rba:" data-headlessui-state="open"
    style="border-bottom-width: 0.5px; border-bottom-color: rgb(187, 195, 207);">
    <p class="text-secondary font-semibold">Edit Volunteer Hours</p>
</h2>
<div class="p-4" id="headlessui-description-:rbb:" data-headlessui-state="open">
    <div>
        <div>
            <div>
                <form name="a-form" id="form-volunteer_update" action="{{ route('volunteers.create') }}" method="POST">
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-5 font-semibold text-secondary">
                        <div><label for="organization" class="AFormInput_labelName__GonDv">Organization<span
                                    class="text-red">*</span></label>
                            <div>
                                <div class="flex align-center justify-end">
                                    <input
                                        class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                        type="text" id="organization_update" name="organization"
                                        placeholder="Enter Organization" autocomplete="" value=""
                                        style="padding-left: 2%;" />
                                    <i class="undefined mr-3 mt-4" style="position: absolute;"></i>
                                </div>
                                <p class="err-organization_update" style=" margin-bottom: 2px; margin-top: 0px; color:red"></p>
                            </div>
                        </div>
                        <div><label for="name" class="AFormInput_labelName__GonDv">Contact
                                Name<span class="text-red">*</span></label>
                            <div>
                                <div class="flex align-center justify-end"><input
                                        class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                        type="text" id="name_update" name="name" placeholder="Enter Contact Name"
                                        autocomplete="" value="" style="padding-left: 2%;"><i
                                        class="undefined mr-3 mt-4" style="position: absolute;"></i></div>
                                <p class="err-name_update" style=" margin-bottom: 2px; margin-top: 0px; color:red">
                                </p>
                            </div>
                        </div>
                        <div><label for="phone" class="AFormInput_labelName__GonDv">Contact
                                Number</label>
                            <div>
                                <div class="flex align-center justify-end"><input
                                        class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                        type="text" id="phone_update" name="phone" placeholder="Enter Contact Number"
                                        autocomplete="" value="" style="padding-left: 2%;"><i
                                        class="undefined mr-3 mt-4" style="position: absolute;"></i></div>
                                </p>
                                <p class="err-pattern-phone_update err-phone_update"
                                    style=" margin-bottom: 2px; margin-top: 0px; color:red">
                                </p>
                            </div>
                        </div>
                        <div><label for="email" class="AFormInput_labelName__GonDv">Contact
                                Email</label>
                            <div>
                                <div class="flex align-center justify-end"><input
                                        class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                        type="text" id="email_update" name="email" placeholder="Enter Contact Email"
                                        autocomplete="" value="" style="padding-left: 2%;"><i
                                        class="undefined mr-3 mt-4" style="position: absolute;"></i></div>
                                </p>
                                <p class="err-pattern-email_update err-email_update"
                                    style=" margin-bottom: 2px; margin-top: 0px; color:red">
                                </p>
                            </div>
                        </div>
                        <div><label for="date" class="AFormInput_labelName__GonDv">Select Date<span
                                    class="text-red">*</span></label>
                            <br />
                            <input type="date" max="{{ date('Ymd') }}"
                                class="DatePicker_date-picker__o7i66 hover:outline-primary active:outline-primary focus:outline-primary"
                                name="date" id="date_update" value="" />
                            <p class="err-date_update" style=" margin-bottom: 2px; margin-top: 0px; color:red">
                            </p>
                        </div>
                        <div>
                            <label for="log_service_type_id" class="AFormInput_labelName__GonDv">Select
                                Service Type<span class="text-red">*</span></label>
                            <select name="service_type_id" id="service_type_id_update" style="width: 100%">
                                @foreach ($service_types as $ser)
                                    <option value="{{ $ser->id }}">
                                        {{ $ser->name }}
                                    </option>
                                @endforeach
                            </select>
                            <p class="err-service_type_id_update" style=" margin-bottom: 2px; margin-top: 0px; color:red"></p>
                        </div>
                        <div>
                            <label for="start_at" class="AFormInput_labelName__GonDv">Start Time<span
                                    class="text-red">*</span></label>
                            <br />
                            <input type="time" name="start_time" id="start_time_update" width="100%" />
                            <p class="err-start_time_update" style=" margin-bottom: 2px; margin-top: 0px; color:red">
                            </p>
                        </div>
                        <div><label for="end_at" class="AFormInput_labelName__GonDv">End Time<span
                                    class="text-red">*</span></label>
                            <br />
                            <input type="time" name="end_time" id="end_time_update" width="100%" />
                            <p class="err-end_time_update" style="margin-bottom: 2px; margin-top: 0px; color:red">
                            </p>
                        </div>
                    </div>
                    <div class="pt-4 font-semibold">
                        <div><label for="description" class="AFormInput_labelName__GonDv">Description<span
                                    class="text-red">*</span></label>
                            <div>
                                <textarea class="TextArea_aTextArea__BoAJ8 hover:outline-primary active:outline-primary focus:outline-primary"
                                    name="description" id="description_update"
                                    placeholder="Describe your community service project and the impact you made. Why was this volunteer project important to you?"
                                    style="width: 50%" rows="5"></textarea>
                                <p class="err-description_update" style="margin-bottom: 2px; margin-top: 0px; color:red">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-6 gap-3 mt-4">
                        <div>
                            <div><button type="button"
                                    class="btn-clear_update PrimaryButton_outline-button-box__mQVaQ text-light-gray border-1.5 px-4 py-2 border-gray-300 hover:border-primary hover:text-primary  undefined">
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
                                        class="btn-save_update PrimaryButton_button-box__dGgxJ bg-primary border-primary border-1 px-3 py-2  undefined">
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
                    <input type="hidden" name="id" id="id" />
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
