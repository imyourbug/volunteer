<div class="my-5 pt-5">
    <div>
        <div class="container mx-auto px-2 md:px-0 lg:px-0">
            <div class="lg:flex lg:space-x-2 p-2 bg-lightgray">
                <a href="{{route('users.profile.index')}}" style="{{ request()->path() == 'profile/index' ? 'background-color:#000E7B;color:white' : '' }}"
                    class="btn-type btn-profile flex items-center  mb-2 lg:mb-0 w-full rounded-md py-3 font-bold md:text-lg leading-5  ring-white focus:outline-none  bg-white text-gray">
                    &ensp;Profile
                </a>
                <a href="{{route('users.profile.detail')}}"
                style="{{ preg_match('/^profile\/info\/?(.*)/', request()->path()) ? "background-color:#000E7B;color:white" : "" }}"
                    class="btn-type btn-info flex items-center  mb-2 lg:mb-0 w-full rounded-md py-3 font-bold md:text-lg leading-5  ring-white focus:outline-none  bg-white text-gray">
                    &ensp;My info / Membership
                </a>
                <a href="{{route('users.profile.award')}}"
                style="{{ preg_match('/^profile\/log\/?(.*)/', request()->path()) ? "background-color:#000E7B;color:white" : "" }}"
                    class="btn-type btn-log flex items-center  mb-2 lg:mb-0 w-full rounded-md py-3 font-bold md:text-lg leading-5  ring-white focus:outline-none  bg-white text-gray">
                    &ensp;My Portfolio / Log
                </a>
            </div>
        </div>
    </div>
</div>
