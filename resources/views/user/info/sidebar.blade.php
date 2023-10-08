<div class="col-span-2 bg-lightgray p-3">
    <a href="{{ route('users.profile.detail') }}"
        style="{{ request()->path() == 'profile/info/detail' ? 'background-color:#000E7B;color:white' : '' }}"
        class="flex items-center !mt-2 lg:mb-0 w-full rounded-md py-3 font-bold md:text-lg leading-5  ring-white focus:outline-none  bg-white text-gray">
        &emsp;
        <p class="font-primary font-medium text-sm mb-0 pr-2">My Details</p>
    </a>
    <a href="{{ route('users.profile.parent') }}"
        style="{{ request()->path() == 'profile/info/parent' ? 'background-color:#000E7B;color:white' : '' }}"
        class="flex items-center !mt-2 lg:mb-0 w-full rounded-md py-3 font-bold md:text-lg leading-5  ring-white focus:outline-none  bg-white text-gray">
        &emsp;
        <p class="font-primary font-medium text-sm mb-0 pr-2">Parent Info</p>
    </a>
</div>
