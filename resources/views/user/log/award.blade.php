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
        <div class="container mx-auto px-2 md:px-4 lg:px-0 py-5">
            <div class="grid grid-cols-1 lg:grid-cols-12 md:gap-3 lg:gap-3">
                @include('user.log.sidebar')
                <div class="col-span-10 mt-5 md:mt-0 lg:mt-0">
                    <div>
                        <div class="container mx-auto px-5 ">
                            <div class="relative">
                                <div class="border-r-2 border-timeline absolute h-full top-0" style="left: 9px;"></div>
                                <ul class="list-none m-0 p-0">
                                    <li class="rounded-md">
                                        <div class="flex group items-center">
                                            <div class="bg-white z-10 rounded-full border-2 border-primary h-5 w-5">
                                                <div class="bg-timeline w-4 md:w-10 items-center mt-2"
                                                    style="margin-left: 18px; height: 2px;"></div>
                                            </div>
                                            <div class="flex-1 ml-4 md:ml-10 shadow-md p-3 mb-8">
                                                <div class="pt-1 flex"><i class="bi bi-calendar3 text-primary text-2xl"></i>
                                                    <div class="pl-3 pt-1 font-semibold">2023-2024</div>
                                                </div>
                                                <div class="pt-1 flex"><i
                                                        class="bi bi-clock-fill text-primary text-2xl"></i>
                                                    <div class="pl-3 pt-1 font-semibold"></div>
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
@endsection
