<div class="form-type form-log container mx-auto px-2 md:px-4 lg:px-0 py-5" style="display: none">
    <div class="grid grid-cols-1 lg:grid-cols-12 md:gap-3 lg:gap-3">
        <div class="col-span-2 bg-lightgray p-3">
            <button
                class="btn-type-log btn-award flex items-center !mt-2 lg:mb-0 w-full rounded-md py-3 font-bold md:text-lg leading-5  ring-white focus:outline-none bg-white text-gray">&emsp;Awards
                / Leadership
            </button>
            <button
                class="btn-type-log btn-log flex items-center !mt-2 lg:mb-0 w-full rounded-md py-3 font-bold md:text-lg leading-5  ring-white focus:outline-none bg-white text-gray">&emsp;My
                Volunteer Log
            </button>
            <button
                class="btn-type-log btn-cause flex items-center !mt-2 lg:mb-0 w-full rounded-md py-3 font-bold md:text-lg leading-5  ring-white focus:outline-none bg-white text-gray">&emsp;All
                My Causes
            </button>
        </div>
        {{-- award --}}
        @include('user.log.award')
        {{-- cause --}}
        @include('user.log.cause')
        {{-- log --}}
        @include('user.log.index')
    </div>
</div>
