@extends('user.main')
@push('styles')
@endpush
@push('scripts')
    <script src="/js/user/login/index.js" type="text/javascript"></script>
@endpush
@section('content')
    <section>
        <div class="container mx-auto px-2 md:px-0">
            <div class="grid grid-cols-1 lg:grid-cols-3 md:gap-10 lg:gap-10 p-3 items-center justify-center my-16">
                <div class="col-span-2">
                    <h1 class=" text-2xl md:text-4xl text-secondary font-bold">Welcome Back!</h1>
                    <h1 class="text-2xl md:text-4xl text-secondary font-bold">Log in to Hope Service Viet Nam</h1>
                    <p class="text-md md:text-xl font-medium text-black mt-5">If you are not a member yet,<br />You
                        can <span class="underline text-info hover:text-blue hover:no-underline"><a
                                href="{{ route('users.register') }}"> JOIN NOW ! </a></span></p>
                </div>
                <div class="mt-5 md:mt-0 lg:mt-0">
                    <div class="flex justify-center items-center pb-5">
                        <img
                            alt="logo is here"
                            src="/images/logohope.jpg"
                            loading="lazy"
                            width="200px" height="200px"/>
                        </div>
                    <form id="form-login" name="a-form" action="{{ route('users.checkLogin') }}" method="POST">
                        <div>
                            <div>
                                <div>
                                    <div class="flex align-center justify-end"><input style="padding-left:2%"
                                            class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                            type="email" id="email" name="email" placeholder="Email"
                                            autoComplete="" /><i class="undefined mr-3 mt-4" style="position:absolute"></i>
                                    </div>
                                    <p class="err-email" style=" margin-bottom: 2px; margin-top: 0px; color:red"></p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div>
                                <div>
                                    <div class="flex align-center justify-end"><input style="padding-left:2%"
                                            class="TextInput_text-input__CQMEM  hover:outline-primary active:outline-primary focus:outline-primary"
                                            type="password" id="password" name="password" placeholder="Password"
                                            autoComplete="" /><i class="undefined mr-3 mt-4" style="position:absolute"></i>
                                    </div>
                                    <p class="err-password" style=" margin-bottom: 2px; margin-top: 0px; color:red"></p>
                                </div>
                            </div>
                        </div>
                        <p class="pb-2 text-right text-blue"><a href="{{ route('users.forgot') }}">Forgot Password?</a></p>
                        <div>
                            <div>
                                <div><button type="submit" style="background-color:#000E7B"
                                        class="btn-login PrimaryButton_button-box__dGgxJ bg-primary border-primary border-1 px-3 py-2  undefined">
                                        <div style="margin-bottom:0;height:25px" class=" flex justify-center align-center">
                                            <p class="font-primary">Login</p>
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
