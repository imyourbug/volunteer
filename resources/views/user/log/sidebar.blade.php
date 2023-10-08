<div class="col-span-2 bg-lightgray p-3">
    <a href="{{ route('users.profile.award') }}"
        style="{{ request()->path() == 'profile/log/award' ? 'background-color:#000E7B;color:white' : '' }}"
        class="flex items-center !mt-2 lg:mb-0 w-full rounded-md py-3 font-bold md:text-lg leading-5  ring-white focus:outline-none  bg-white text-gray">
        &emsp;
        <p class="font-primary font-medium text-sm mb-0 pr-2">Awards / Leadership</p>
    </a>
    <a href="{{ route('users.profile.mylog') }}"
        style="{{ request()->path() == 'profile/log/my-log' ? 'background-color:#000E7B;color:white' : '' }}"
        class="flex items-center !mt-2 lg:mb-0 w-full rounded-md py-3 font-bold md:text-lg leading-5  ring-white focus:outline-none  bg-white text-gray">
        &emsp;
        <p class="font-primary font-medium text-sm mb-0 pr-2">My Volunteer Log</p>
    </a>
    <a href="{{ route('users.profile.mycause') }}"
        style="{{ request()->path() == 'profile/log/my-cause' ? 'background-color:#000E7B;color:white' : '' }}"
        class="flex items-center !mt-2 lg:mb-0 w-full rounded-md py-3 font-bold md:text-lg leading-5  ring-white focus:outline-none  bg-white text-gray">
        &emsp;
        <p class="font-primary font-medium text-sm mb-0 pr-2">All My Causes</p>
    </a>
</div>
