@extends('user.main')
@push('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <style>
        .items {
            width: 90%;
            margin: 0px auto;
            margin-top: 100px
        }

        .slick-slide {
            margin: 10px
        }

        .slick-slide img {
            width: 100%;
            border: 0px solid #fff
        }
    </style>
@endpush
@push('scripts')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('.items').slick({
                infinite: true,
                speed: 800,
                autoplay: true,
                autoplaySpeed: 2000,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }

                ]
            });
        });
    </script>
@endpush
@section('content')
    <div>
        <section>
            <div class="relative"><img class="page_banner-image__jznmJ" src="/storage/images/home-banner.20b5cca0.jpg"
                    alt="bannner image" /></div>
        </section>
        <main class="container mx-auto px-4 lg:px-0">
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 relative -mt-28 md:-mt-24 lg:-mt-10 z-50">
                <div class="p-5 bg-white justify-center !bg-secondary InfoCard_main-container__3LBBC">
                    <p class="font-semibold text-2xl mt-3 mb-2 text-secondary text-white">THAM GIA NGAY</p>
                    <p class="text-md text-darkblue text-white">Hope Services Vietnam là tổ chức phi lợi nhuận được thành
                        lập
                        với mong muốn khơi dậy trong các bạn tinh thần phục vụ cộng đồng, tạo động lực cho các thành viên
                        tham gia xây dựng một xã hội nhân văn, và kiến tạo, mở rộng các cơ hội tình nguyện cho các bạn học
                        sinh từ lớp 6-12.</p>
                    <div class="flex justify-start mt-3"><a target="_blank" href="{{ route('users.register') }}">
                            <div><button type="button"
                                    class="PrimaryButton_outline-button-box__mQVaQ text-light-gray
                                    border-1.5 px-4 py-2 border-gray-300 hover:border-primary hover:text-primary
                                    !bg-secondary text-white !border-white hover:!border-primary">
                                    <div style="margin-bottom:0;height:25px" class="flex justify-center align-center">
                                        <p class="font-primary">Tham gia ngay</p>
                                    </div>
                                </button></div>
                        </a></div>
                </div>
            </div>
        </main>
        <div class="relative mt-14">
            <section class="bg-bluebg relative -z-20 " style="height:500px">
                <div class="container mx-auto px-4 md:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-8">
                        <div class="md:col-start-3 md:col-span-4">
                            <div class="text-center p-5">
                                <p class="uppercase font-medium text-primary text-sm md:text-md">Who We Are</p>
                                <p class="text-lg md:text-2xl font-bold">We are Hope and we give hopes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <main class="container mx-auto px-4 lg:px-0">
                <div class="relative -mt-80 z-50">
                    <div>
                        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-10 text-center">
                            <div class="WhoWeAreCard_main-container__fNR83 shadow-md mb-10 lg:mt-0 lg:mb-0">
                                <div class="WhoWeAreCard_icon-base-heart__sLm69"><i class="bi bi-heart-fill text-5xl "></i>
                                </div>
                                <div>
                                    <div class="WhoWeAreCard_para-base__TBhPZ">
                                        <div class="text-xl font-semibold" style="margin-top:35px">Điều gì tạo nên sự khác
                                            biệt của Hope Services?</div>
                                        <div class="text-darkblue">
                                            <p>Chúng mình là một tổ chức phi lợi nhuận.</p>
                                            <p>Chúng mình không thuộc về các nhà đầu tư hay chủ sở hữu, chúng mình thuộc về
                                                cộng đồng.</p>
                                            <p>Tất cả số tiền mà tổ chức kiếm được đều được đầu tư trực tiếp vào Hope
                                                Services.</p>
                                            <p>Với số tiền đó, chúng mình phát triển các chương trình và giúp đỡ các thành
                                                viên cần hỗ trợ tài chính.</p>
                                            <p>Chúng mình làm vậy để TẤT CẢ các thành viên có thể nhận ra việc cho đi để
                                                nhận lại
                                                và từ đó lan tỏa năng lượng tích cực và những giá trị cốt lõi của tổ chức
                                                đến cộng đồng.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="WhoWeAreCard_main-container__fNR83 shadow-md">
                                <div class="WhoWeAreCard_icon-base-hat__4z6D6"><i
                                        class="bi bi-mortarboard-fill text-5xl -scale-x-90"></i></div>
                                <div>
                                    <div class="WhoWeAreCard_para-base__TBhPZ">
                                        <div class="text-xl font-semibold " style="margin-top:35px">Lợi ích khi tham gia
                                            Hope Services</div>
                                        <div class="text-darkblue">
                                            <p>Được làm việc và thử thách trong môi trường năng động và chuyên nghiệp, được
                                                đào tạo.</p>
                                            <p>Có nhiều cơ hội được trải nghiệm những hoạt động thú vị của vô số dự án trên
                                                địa bàn cả nước.</p>
                                            <p>Có cơ hội gặp gỡ với những người có sức ảnh hưởng trong các dự án.</p>
                                            <p>Sau khi đảm bảo yêu cầu về số giờ hoạt động của các dự án, các bạn sẽ nhận
                                                được Giấy chứng nhận vô cùng giá trị của team Hope Services Vietnam.</p>
                                            <p>Luôn được chào đón với những dự án tiếp theo mà các bạn muốn tham gia.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mx-auto -mb-20 mt-5 pt-10">
                    <div>
                        <div class="py-3 grid grid-cols-2 bg-white md:grid-cols-4 lg:grid-cols-4 gap-2 text-center md:divide-x lg:divide-x divide-dashed divide-stroke"
                            style="box-shadow:rgba(0, 0, 0, 0.10) 0px 3px 8px">
                            <div class="py-2"><i class="bi bi-clock-fill text-3xl text-primary"></i>
                                <div class="text-3xl font-bold my-2" style="letter-spacing:0.5px">{{ $total }}</div>
                                <div class="font-medium uppercase text-md" style="color:#A5A5A5">HOURS</div>
                            </div>
                            <div class="py-2"><i class="bi bi-people-fill text-3xl text-primary"></i>
                                <div class="text-3xl font-bold my-2" style="letter-spacing:0.5px">0</div>
                                <div class="font-medium uppercase text-md" style="color:#A5A5A5">GROUPS</div>
                            </div>
                            <div class="py-2"><i class="bi bi-book-half text-3xl text-primary"></i>
                                <div class="text-3xl font-bold my-2" style="letter-spacing:0.5px">0</div>
                                <div class="font-medium uppercase text-md" style="color:#A5A5A5">CHAPTERS</div>
                            </div>
                            <div class="py-2"><i class="bi bi-pin-map-fill text-3xl text-primary"></i>
                                <div class="text-3xl font-bold my-2" style="letter-spacing:0.5px">0</div>
                                <div class="font-medium uppercase text-md" style="color:#A5A5A5">STATES</div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <section class="bg-bluebg pt-32">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-8">
                    <div class="md:col-start-3 md:col-span-4">
                        <div class="text-center p-5">
                            <p class="uppercase font-medium text-primary text-sm md:text-md">Click on a story to see
                            </p>
                            <p class="text-lg md:text-2xl font-bold">Members Stories on Facebook</p>
                        </div>
                    </div>
                </div>
            </div>
            <main class="container mx-auto pb-10">
                <div class="react-multi-carousel-list carousel-container InstagramStoriesCarousel_custom-carousel__9kPoI"
                    style="justify-content: space-around">
                    <div class="bg-white mx-3">
                        <div class="flex items-center p-3 justify-between ">
                            <div class="flex items-center">
                                <div class="h-9 w-9 rounded-full bg-primary flex justify-center items-center"><img
                                        src="/_next/static/media/lionimg.dcb85513.png" alt="lionimg" class="h-5 w-5"></div>
                                <div class="mx-2"><span
                                        class="text-sm font-semibold antialiased block leading-tight">lionsheartservice</span><span
                                        class="text-gray-600 text-xs block">USA</span></div>
                            </div>
                            <div><i class="bi bi-three-dots"></i></div>
                        </div>
                        <div class="w-full !object-cover" style="height: 300px;"><a href="https://www.facebook.com/"
                                target="_blank"><img
                                    src="https://scontent-sea1-1.cdninstagram.com/v/t51.29350-15/350246041_172500475787920_7420693306006826258_n.jpg?_nc_cat=108&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=k6ujZ3Gs5C0AX_jqWDu&amp;_nc_ht=scontent-sea1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AfBqIHY5VkdsbWTG8wDM_u6oAEhUbloRkBsmdiUabGAZKw&amp;oe=64F377F1"
                                    style="height: 300px; width: 100%;"></a></div>
                        <div class="flex items-center justify-between p-3">
                            <div class="flex items-center justify-center gap-3"><i class="fa-regular fa-thumbs-up"></i><i
                                    class="fa-regular fa-comment"></i><i class="fa-brands fa-facebook-messenger"></i>
                            </div>
                            <div class="flex"><i class="fa-solid fa-share"></i></div>
                        </div>
                    </div>
                    <div class="bg-white mx-3">
                        <div class="flex items-center p-3 justify-between ">
                            <div class="flex items-center">
                                <div class="h-9 w-9 rounded-full bg-primary flex justify-center items-center"><img
                                        src="/_next/static/media/lionimg.dcb85513.png" alt="lionimg" class="h-5 w-5">
                                </div>
                                <div class="mx-2"><span
                                        class="text-sm font-semibold antialiased block leading-tight">lionsheartservice</span><span
                                        class="text-gray-600 text-xs block">USA</span></div>
                            </div>
                            <div><i class="bi bi-three-dots"></i></div>
                        </div>
                        <div class="w-full !object-cover" style="height: 300px;"><a href="https://www.facebook.com/"
                                target="_blank"><img
                                    src="https://scontent-sea1-1.cdninstagram.com/v/t51.29350-15/350246041_172500475787920_7420693306006826258_n.jpg?_nc_cat=108&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=k6ujZ3Gs5C0AX_jqWDu&amp;_nc_ht=scontent-sea1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AfBqIHY5VkdsbWTG8wDM_u6oAEhUbloRkBsmdiUabGAZKw&amp;oe=64F377F1"
                                    style="height: 300px; width: 100%;"></a></div>
                        <div class="flex items-center justify-between p-3">
                            <div class="flex items-center justify-center gap-3"><i class="fa-regular fa-thumbs-up"></i><i
                                    class="fa-regular fa-comment"></i><i class="fa-brands fa-facebook-messenger"></i>
                            </div>
                            <div class="flex"><i class="fa-solid fa-share"></i></div>
                        </div>
                    </div>
                    <div class="bg-white mx-3">
                        <div class="flex items-center p-3 justify-between ">
                            <div class="flex items-center">
                                <div class="h-9 w-9 rounded-full bg-primary flex justify-center items-center"><img
                                        src="/_next/static/media/lionimg.dcb85513.png" alt="lionimg" class="h-5 w-5">
                                </div>
                                <div class="mx-2"><span
                                        class="text-sm font-semibold antialiased block leading-tight">lionsheartservice</span><span
                                        class="text-gray-600 text-xs block">USA</span></div>
                            </div>
                            <div><i class="bi bi-three-dots"></i></div>
                        </div>
                        <div class="w-full !object-cover" style="height: 300px;"><a href="https://www.facebook.com/"
                                target="_blank"><img
                                    src="https://scontent-sea1-1.cdninstagram.com/v/t51.29350-15/350246041_172500475787920_7420693306006826258_n.jpg?_nc_cat=108&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=k6ujZ3Gs5C0AX_jqWDu&amp;_nc_ht=scontent-sea1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AfBqIHY5VkdsbWTG8wDM_u6oAEhUbloRkBsmdiUabGAZKw&amp;oe=64F377F1"
                                    style="height: 300px; width: 100%;"></a></div>
                        <div class="flex items-center justify-between p-3">
                            <div class="flex items-center justify-center gap-3"><i class="fa-regular fa-thumbs-up"></i><i
                                    class="fa-regular fa-comment"></i><i class="fa-brands fa-facebook-messenger"></i>
                            </div>
                            <div class="flex"><i class="fa-solid fa-share"></i></div>
                        </div>
                    </div>
                    <div class="bg-white mx-3">
                        <div class="flex items-center p-3 justify-between ">
                            <div class="flex items-center">
                                <div class="h-9 w-9 rounded-full bg-primary flex justify-center items-center"><img
                                        src="/_next/static/media/lionimg.dcb85513.png" alt="lionimg" class="h-5 w-5">
                                </div>
                                <div class="mx-2"><span
                                        class="text-sm font-semibold antialiased block leading-tight">lionsheartservice</span><span
                                        class="text-gray-600 text-xs block">USA</span></div>
                            </div>
                            <div><i class="bi bi-three-dots"></i></div>
                        </div>
                        <div class="w-full !object-cover" style="height: 300px;"><a href="https://www.facebook.com/"
                                target="_blank"><img
                                    src="https://scontent-sea1-1.cdninstagram.com/v/t51.29350-15/350246041_172500475787920_7420693306006826258_n.jpg?_nc_cat=108&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=k6ujZ3Gs5C0AX_jqWDu&amp;_nc_ht=scontent-sea1-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AfBqIHY5VkdsbWTG8wDM_u6oAEhUbloRkBsmdiUabGAZKw&amp;oe=64F377F1"
                                    style="height: 300px; width: 100%;"></a></div>
                        <div class="flex items-center justify-between p-3">
                            <div class="flex items-center justify-center gap-3"><i class="fa-regular fa-thumbs-up"></i><i
                                    class="fa-regular fa-comment"></i><i class="fa-brands fa-facebook-messenger"></i>
                            </div>
                            <div class="flex"><i class="fa-solid fa-share"></i></div>
                        </div>
                    </div>
                </div>
            </main>
        </section>
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-8">
                <div class="md:col-start-3 md:col-span-4">
                    <div class="text-center p-5">
                        <p class="uppercase font-medium text-primary text-sm md:text-md">WE COULD USE YOUR SUPPORT
                        </p>
                        <p class="text-lg md:text-2xl font-bold">We are a Nonprofit Organization</p>
                    </div>
                </div>
            </div>
        </div>
        <section class="container mx-auto">
            <main>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 p-4">
                    <div class="p-5 bg-white justify-center undefined InfoCard_main-container__3LBBC">
                        <div
                            style="height:50px;width:50px;display:flex;align-items:center;justify-content:center;border-radius:5px;background-color:#d5d1efa1">
                            <i class="bi bi-heart-fill" style="color:#000E7B;font-size:25px;margin-top:2px"></i>
                        </div>
                        <p class="font-semibold text-2xl mt-3 mb-2 text-secondary undefined">Ways To Give</p>
                        <p class="text-md text-darkblue undefined">Service-learning gives teens a front-row seat to
                            challenges facing their communities and hands-on problem-solving experience. Donations
                            help us mobilize more students to serve their communities.</p>
                        <div class="flex justify-start mt-3"><a target="_blank"
                                href="https://shop.lionsheartservice.org/pages/lions-heart-donation">
                                <div><button type="button"
                                        class="PrimaryButton_outline-button-box__mQVaQ text-light-gray border-1.5 px-4 py-2 border-gray-300 hover:border-primary hover:text-primary  text-primary uppercase !border-primary hover:text-secondary hover:!border-secondary">
                                        <div style="margin-bottom:0;height:25px" class="flex justify-center align-center">
                                            <p class="font-primary">Learn More</p>
                                        </div>
                                    </button></div>
                            </a></div>
                    </div>
                    <div class="p-5 bg-white justify-center undefined InfoCard_main-container__3LBBC">
                        <div
                            style="height:50px;width:50px;display:flex;align-items:center;justify-content:center;border-radius:5px;background-color:#d5d1efa1">
                            <i class="bi bi-people-fill" style="color:#000E7B;font-size:25px;margin-top:2px"></i>
                        </div>
                        <p class="font-semibold text-2xl mt-3 mb-2 text-secondary undefined">Partner</p>
                        <p class="text-md text-darkblue undefined">Our mission is to guide teens in becoming civic
                            minded young adults as they learn 21st Century skills. This is possible through generous
                            support of our technology foundation and affinity partners.</p>
                        <div class="flex justify-start mt-3"><a target="_blank"
                                href="https://lionsheartservice.org/lh2/General/support-lionsheart-donations">
                                <div><button type="button"
                                        class="PrimaryButton_outline-button-box__mQVaQ text-light-gray border-1.5 px-4 py-2 border-gray-300 hover:border-primary hover:text-primary  text-primary uppercase !border-primary hover:text-secondary hover:!border-secondary">
                                        <div style="margin-bottom:0;height:25px" class="flex justify-center align-center">
                                            <p class="font-primary">PARTNER WITH US</p>
                                        </div>
                                    </button></div>
                            </a></div>
                    </div>
                    <div class="p-5 bg-white justify-center undefined InfoCard_main-container__3LBBC">
                        <div
                            style="height:50px;width:50px;display:flex;align-items:center;justify-content:center;border-radius:5px;background-color:#d5d1efa1">
                            <i class="bi bi-buildings-fill" style="color:#000E7B;font-size:25px;margin-top:2px"></i>
                        </div>
                        <p class="font-semibold text-2xl mt-3 mb-2 text-secondary undefined">Sponsor</p>
                        <p class="text-md text-darkblue undefined">Corporations focused on giving back are powerful
                            forces. Supporting the nurturing of teen volunteers will make a lasting community impact
                            and future investment in workforce development.</p>
                        <div class="flex justify-start mt-3"><a target="_blank"
                                href="https://lionsheartservice.org/lh2/General/support-lionsheart-donations">
                                <div><button type="button"
                                        class="PrimaryButton_outline-button-box__mQVaQ text-light-gray border-1.5 px-4 py-2 border-gray-300 hover:border-primary hover:text-primary  text-primary uppercase !border-primary hover:text-secondary hover:!border-secondary">
                                        <div style="margin-bottom:0;height:25px" class="flex justify-center align-center">
                                            <p class="font-primary">SUPPORT OUR CAUSE</p>
                                        </div>
                                    </button></div>
                            </a></div>
                    </div>
                </div>
            </main>
        </section>
        <section class="container mx-auto my-12 px-4 lg:px-0">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 items">
                <a class="Sponsors_reward-card__W54b7">
                    <img alt="sponsors2"
                        srcSet="/storage/images/sponsors1.png"
                        src="/storage/images/sponsors1.png"
                        width="120" height="101" decoding="async" data-nimg="1"
                        class="Sponsors_reward-image__nkVKx" loading="lazy" style="color:transparent" />
                </a>
                <a class="Sponsors_reward-card__W54b7">
                    <img alt="sponsors2"
                        srcSet="/storage/images/sponsors2.png"
                        src="/storage/images/sponsors2.png"
                        width="203" height="204" decoding="async" data-nimg="1"
                        class="Sponsors_reward-image__nkVKx" loading="lazy" style="color:transparent" />
                </a>
                <a class="Sponsors_reward-card__W54b7">
                    <img alt="sponsors2"
                        srcSet="/storage/images/sponsors4.png"
                        src="/storage/images/sponsors4.png"
                        width="120" height="72" decoding="async" data-nimg="1"
                        class="Sponsors_reward-image__nkVKx" loading="lazy" style="color:transparent" />
                </a>
                <a class="Sponsors_reward-card__W54b7">
                    <img alt="sponsors4"
                        srcSet="/storage/images/sponsors5.png"
                        src="/storage/images/sponsors5.png"
                        width="206" height="78" decoding="async" data-nimg="1"
                        class="Sponsors_reward-image__nkVKx" loading="lazy" style="color:transparent" /></a>
                <a class="Sponsors_reward-card__W54b7">
                    <img alt="sponsors5"
                        srcSet="/storage/images/sponsors1.png"
                        src="/storage/images/sponsors1.png"
                        width="120" height="101" decoding="async" data-nimg="1"
                        class="Sponsors_reward-image__nkVKx" loading="lazy" style="color:transparent" />
                </a>
            </div>
        </section>
    </div>
@endsection
