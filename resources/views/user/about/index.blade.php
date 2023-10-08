@extends('user.main')
@push('styles')
@endpush
@push('scripts')
    <script src="/js/user/profile/index.js" type="text/javascript"></script>
@endpush
@section('content')
    <div id="page_top">
        <section>
            <div class="relative"><img class="page_banner-image__aGEZ8" src="/images/ban1.jpg" alt="bannner image" /></div>
        </section>
        <section>
            <div class="container mx-auto px-4 md:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-8">
                    <div class="md:col-start-3 md:col-span-4">
                        <div class="text-center p-5">
                            <p class="uppercase font-medium text-primary text-sm md:text-md">See How It Works</p>
                            <p class="text-lg md:text-2xl font-bold">Members Get So Much Out of Lion&#x27;s Heart</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <div>
                        <div class="p-5 bg-white justify-center undefined InfoCard_main-container__3LBBC">
                            <div
                                style="height:50px;width:50px;display:flex;align-items:center;justify-content:center;border-radius:5px;background-color:#d5d1efa1">
                                <i class="bi bi-phone-fill" style="color:#000E7B;font-size:25px;margin-top:2px"></i>
                            </div>
                            <p class="font-semibold text-2xl mt-3 mb-2 text-secondary undefined">Receive Opportunities
                            </p>
                            <p class="text-md text-darkblue undefined">We find local, age-appropriate, volunteer
                                opportunities from non-profits near you leaving time for teens to serve their
                                communities.</p>
                            <div class="flex justify-start mt-3"><a target="_blank" href="/enrollment/basic-details">
                                    <div><button type="button"
                                            class="PrimaryButton_outline-button-box__mQVaQ text-light-gray border-1.5 px-4 py-2 border-gray-300 hover:border-primary hover:text-primary  undefined">
                                            <div style="margin-bottom:0;height:25px"
                                                class="flex justify-center align-center">
                                                <p class="font-primary">Enroll Today</p>
                                            </div>
                                        </button></div>
                                </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="p-5 bg-white justify-center undefined InfoCard_main-container__3LBBC">
                            <div
                                style="height:50px;width:50px;display:flex;align-items:center;justify-content:center;border-radius:5px;background-color:#d5d1efa1">
                                <i class="bi bi-hand-thumbs-up-fill"
                                    style="color:#000E7B;font-size:25px;margin-top:2px"></i>
                            </div>
                            <p class="font-semibold text-2xl mt-3 mb-2 text-secondary undefined">Choose Your Causes</p>
                            <p class="text-md text-darkblue undefined">Teens serve the community on their schedules,
                                find new passions, choose causes meaningful to them, and step out of their comfort
                                zones.</p>
                            <div class="flex justify-start mt-3"><a target="_blank" href="/enrollment/basic-details">
                                    <div><button type="button"
                                            class="PrimaryButton_outline-button-box__mQVaQ text-light-gray border-1.5 px-4 py-2 border-gray-300 hover:border-primary hover:text-primary  undefined">
                                            <div style="margin-bottom:0;height:25px"
                                                class="flex justify-center align-center">
                                                <p class="font-primary">Join Us!</p>
                                            </div>
                                        </button></div>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <img alt="nonprof.png" src="/images/about4.png" width="1023" height="597" decoding="async"
                        data-nimg="1" loading="lazy" style="color:transparent" />
                </div>
            </div>
        </section>

        <section>
            <div class="flex container mx-auto justify-center" id="mission" style="object-fit:contain">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <div><img alt="vision" src="/images/about5.png" width="2483" height="4808" decoding="async"
                            data-nimg="1" class="w-80 " loading="lazy" style="color:transparent" /></div>
                    <div><img alt="mission" src="/images/about6.png" width="2471" height="4808" decoding="async"
                            data-nimg="1" class="w-80" loading="lazy" style="color:transparent" /></div>
                    <div><img alt="value" src="/images/about7.png" width="2471" height="4808" decoding="async"
                            data-nimg="1" class="w-80" loading="lazy" style="color:transparent" /></div>
                </div>
            </div>
        </section>
        <section id="ourstory">
            <div class="container mx-auto px-4 md:px-6 lg:px-8 p-5">
                <div class="grid grid-cols-1 md:grid-cols-8">
                    <div class="md:col-start-3 md:col-span-4">
                        <div class="text-center p-5">
                            <p class="uppercase font-medium text-primary text-sm md:text-md">The Power of One and a Son
                            </p>
                            <p class="text-lg md:text-2xl font-bold">Founding Lion’s Heart Teen Volunteers and Leaders
                            </p>
                        </div>
                    </div>
                </div>
                <p class="text-darkgray">Terry Corwin and her son Spencer, then 13 years old, were driving after
                    visiting her parents in the summer of 2004. Mother and son started discussing avenues for Spencer
                    and his friends to give back to the community. This mother of two concluded that no organization in
                    the area provided a broad-based platform for doing so. Thus, Lion’s Heart Teen Volunteers and
                    Leaders was born.</p>
                <p class="pt-5 text-darkgray">The very first group project was collecting new hygiene items that became
                    kits for an orphanage in Mexico. The group split up into smaller groups of 2-3 and organized
                    themselves in front of different grocery stores in the community. They typed up a note asking for
                    donations and politely handed them out to shoppers entering the store and collecting the items as
                    they left the store. At the next meeting, the boys created an assembly line armed with large plastic
                    bags to create hygiene kits. Over 200 kits were made that night.</p>
                <p class="pt-5 text-darkgray">Those hygiene items have long since been used, but the memory of helping
                    others and the inspiration to continue has endured for these original members and thousands to
                    follow in their footsteps. Thank you, Class of 2010, and congratulations to all 12 of the original
                    members who started in 2004, continued all six years of Lion’s Heart, and then graduated from
                    college!</p>
            </div>
            <div class="flex container mx-auto px-10 md:px-12 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-3 mb-3 w-full">
                    <div class="w-full object-cover ">
                        <img alt="value" src="/images/about1.png" width="375" height="272" decoding="async"
                            data-nimg="1" class="w-full" loading="lazy" style="color:transparent" />
                    </div>
                    <div class="w-full object-cover">
                        <img alt="value" src="/images/about2.png" width="375" height="273" decoding="async"
                            data-nimg="1" class="w-full" loading="lazy" style="color:transparent" />
                    </div>
                    <div class="w-full object-cover bg-red">
                        <img alt="value" src="/images/about3.png" width="375" height="273" decoding="async"
                            data-nimg="1" class="w-full" loading="lazy" style="color:transparent" />
                    </div>
                </div>
            </div>
        </section>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
@endsection
