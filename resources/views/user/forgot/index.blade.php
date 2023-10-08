@extends('user.main')
@push('styles')
@endpush
@push('scripts')
    <script src="/js/user/forgot/index.js" type="text/javascript"></script>
@endpush
@section('content')
    <section>
        <div class="container mx-auto px-2 md:px-0">
            <div class="grid grid-cols-1 lg:grid-cols-3 md:gap-10 lg:gap-10 p-3 items-center justify-center my-16">
                <div class="col-span-2">
                    <h1 class=" text-2xl md:text-4xl text-secondary font-bold">Welcome Back!</h1>
                    <h1 class="text-2xl md:text-4xl text-secondary font-bold">Log in to <span class="text-primary">Lion’s
                            Heart</span></h1>
                    <p class="text-md md:text-xl font-medium text-black mt-5">If you are not a member yet,<br />You
                        can <span class="underline text-primary hover:text-blue hover:no-underline"><a
                                href="{{ route('users.register') }}"> JOIN NOW ! </a></span></p>
                </div>
                <div class="mt-5 md:mt-0 lg:mt-0">
                    <div class="flex justify-center items-center pb-5"><img alt="logo"
                            srcSet="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flogo.db4ad0ac.png&amp;w=256&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flogo.db4ad0ac.png&amp;w=384&amp;q=75 2x"
                            src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flogo.db4ad0ac.png&amp;w=384&amp;q=75"
                            width="139" height="89" decoding="async" data-nimg="1" loading="lazy"
                            style="color:transparent" /></div>
                    <form name="a-form" method="POST" action="{{route('users.recover')}}">
                        <div>
                            <div>
                                <div>
                                    <div class="flex align-center justify-end"><input style="padding-left: 2%;"
                                            class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                            type="text" id="email" name="email" placeholder="Email Address"
                                            autocomplete="" value=""><i class="undefined mr-3 mt-4"
                                            style="position:absolute"></i>
                                    </div>
                                    <p class="err-email" style=" margin-bottom: 2px; margin-top: 0px; color:red"></p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div>
                                <div>
                                    <button type="submit"
                                        class="btn-forgot PrimaryButton_button-box__dGgxJ bg-primary border-primary border-1 px-3 py-2  undefined"
                                        style="background-color:#000E7B">
                                        <div style="margin-bottom:0;height:25px" class=" flex justify-center align-center">
                                            <p class="font-primary">Remind Me</p>
                                        </div>
                                    </button>
                                    <button type="submit" class="btn-submit"></button>
                                </div>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
