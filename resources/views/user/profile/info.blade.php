<div class="form-type form-info container mx-auto px-2 md:px-4 lg:px-0 py-5" style="display: none">
    <div class="grid grid-cols-1 lg:grid-cols-12 md:gap-3 lg:gap-3">
        <div class="col-span-2 bg-lightgray p-3">
            <button
                class="btn-type-info btn-detail flex items-center !mt-2 lg:mb-0 w-full rounded-md py-3 font-bold md:text-lg leading-5  ring-white focus:outline-none bg-white text-gray">&emsp;My
                Details
            </button>
            <button
                class="btn-type-info btn-parent flex items-center !mt-2 lg:mb-0 w-full rounded-md py-3 font-bold md:text-lg leading-5  ring-white focus:outline-none  bg-white text-gray">&emsp;Parent
                Info
            </button>
            <button
                class="btn-type-info btn-member flex items-center !mt-2 lg:mb-0 w-full rounded-md py-3 font-bold md:text-lg leading-5  ring-white focus:outline-none  bg-white text-gray">&emsp;Membership
                Info
            </button>
        </div>
        {{-- detail --}}
        @include('user.info.detail')
        {{-- parent --}}
        @include('user.info.parent')
        {{-- member --}}
        @include('user.info.member')
    </div>
</div>
