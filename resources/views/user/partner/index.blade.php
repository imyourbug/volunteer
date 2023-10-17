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
    <script src="/js/user/profile/index.js" type="text/javascript"></script>
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
<section class="mb-5 bg-secondary">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 gap-8 rounded-md lg:grid-cols-5 p-5">
        <div class="text-white col-span-3">
          <div class="font-bold text-2xl">
            PARTNER WITH Lion’s Heart Teen Volunteers and Leaders
          </div>
          <p class="my-3 font-light">
          Bạn có thể trở thành một phần của Lion’s Heart Teen Volunteers and Leaders’ để trở thành một phần của thế hệ trẻ năng động, tài giỏi và sẽ là những cá nhân dẫn đầu của tương lai. Dưới tư cách là một đối tác, bạn sẽ có cơ hội tiếp cận những nhóm cá nhân tiềm năng, sẵn sàng hành động để tạo ra những thay đổi tích cực cho thế giới.
          </p>
          <div class="my-3">
            <p class="my-3 font-light">
            Lion’s Heart sẵn sàng đồng hành cùng bạn để thiết kế những chương trình phù hợp với sứ mệnh của bạn - tạo ra những cơ hội tình nguyện, tài trợ hay đồng hành cùng các sự kiện, hoạt động và các dự án.
            </p>
            <p class="my-3 text-primary">
            *Lion’s Heart - Teen Volunteers and Leaders là một tổ chức độc lập, không thuộc sở hữu hay đối tác của The Lionheart Life Center, trường Lionheart hay các dự án và tổ chức khác.
            </p>
          </div>
          <div class="grid grid-cols-1 lg:grid-cols-3">
            <div class="pb-5">
              <a
                target="_blank"
                href="{{route('users.partner.create')}}"
                ><div>
                  <button
                    type="button" style="background-color:#000E7B"
                    class="PrimaryButton_button-box__dGgxJ bg-primary border-primary border-1 px-3 py-2 uppercase"
                  >
                    <div
                      style="margin-bottom: 0; height: 25px"
                      class="flex justify-center align-center"
                    >
                      <p class="font-primary">Connect With us</p>
                    </div>
                  </button>
                </div></a
              >
            </div>
          </div>
        </div>
        <div
          class="lg:col-span-2 col-span-3 object-cover flex justify-center items-center"
        >
          <img
            src="/images/foodbank.jpeg"
            alt="image"
            style="width: 100%; height: 100%; object-fit: cover"
            class="rounded-md"
          />
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3">
        <div
          class="p-5 bg-white justify-center undefined InfoCard_main-container__3LBBC"
        >
          <div
            style="
              height: 50px;
              width: 50px;
              display: flex;
              align-items: center;
              justify-content: center;
              border-radius: 5px;
              background-color: #d5d1efa1;
            "
          >
            <i
              class="bi-heart-fill"
              style="color: #000E7B; font-size: 25px; margin-top: 2px"
            ></i>
          </div>
          <p
            class="font-semibold text-2xl mt-3 mb-2 text-secondary undefined"
          >
            Foundations &amp; Grants
          </p>
          <p class="text-md text-darkblue undefined">
          Sự hỗ trợ và đồng hành của Hope Services Vietnam để lại những ảnh hưởng lớn ở lớp trẻ hiện tại và vô vàn những thế hệ mai sau.
          </p>
          <div class="flex justify-start mt-3">
            <a
              target="_blank"
              href="https://shop.lionsheartservice.org/pages/lions-heart-donation"
              ><div>
                <button
                  type="button"
                  class="PrimaryButton_outline-button-box__mQVaQ text-light-gray border-1.5 px-4 py-2 border-gray-300 hover:border-primary hover:text-primary !border-primary text-primary hover:!border-secondary hover:text-secondary"
                >
                  <div
                    style="margin-bottom: 0; height: 25px"
                    class="flex justify-center align-center"
                  >
                    <p style="color: black">Support Our Mission</p>
                  </div>
                </button>
              </div></a
            >
          </div>
        </div>
        <div
          class="p-5 bg-white justify-center undefined InfoCard_main-container__3LBBC"
        >
          <div
            style="
              height: 50px;
              width: 50px;
              display: flex;
              align-items: center;
              justify-content: center;
              border-radius: 5px;
              background-color: #d5d1efa1;
            "
          >
            <i
              class="bi bi-people-fill"
              style="color: #000E7B; font-size: 25px; margin-top: 2px"
            ></i>
          </div>
          <p
            class="font-semibold text-2xl mt-3 mb-2 text-secondary undefined"
          >
            Corporate Partnership
          </p>
          <p class="text-md text-darkblue undefined">
          Những thế hệ của tương lai sẽ tiếp tục được truyền cảm hứng bởi sự sẵn sàng hành động vì lợi ích chung của thế hệ trẻ hiện tại.
          </p>
          <div class="flex justify-start mt-3">
            <a
              target="_blank"
              href="{{route('users.partner.create')}}"
              ><div>
                <button
                  type="button"
                  class="PrimaryButton_outline-button-box__mQVaQ text-light-gray border-1.5 px-4 py-2 border-gray-300 hover:border-primary hover:text-primary !border-primary text-primary hover:!border-secondary hover:text-secondary"
                >
                  <div
                    style="margin-bottom: 0; height: 25px"
                    class="flex justify-center align-center"
                  >
                    <p style="color: black">Become a Partner</p>
                  </div>
                </button>
              </div></a
            >
          </div>
        </div>
        <div
          class="p-5 bg-white justify-center undefined InfoCard_main-container__3LBBC"
        >
          <div
            style="
              height: 50px;
              width: 50px;
              display: flex;
              align-items: center;
              justify-content: center;
              border-radius: 5px;
              background-color: #d5d1efa1;
            "
          >
            <i
              class="bi-buildings-fill"
              style="color: #000E7B; font-size: 25px; margin-top: 2px"
            ></i>
          </div>
          <p
            class="font-semibold text-2xl mt-3 mb-2 text-secondary undefined"
          >
            Individual Giving
          </p>
          <p class="text-md text-darkblue undefined">
          Đầu tư vào những gì xứng đáng - giáo dục và cộng đồng. Đầu tư vào thế hệ trẻ đầy tiềm năng, sự  cảm thông và lòng trắc ẩn.
          </p>
          <div class="flex justify-start mt-3">
            <a
              target="_blank"
              href="https://shop.lionsheartservice.org/pages/lions-heart-donation"
              ><div>
                <button
                  type="button"
                  class="PrimaryButton_outline-button-box__mQVaQ text-light-gray border-1.5 px-4 py-2 border-gray-300 hover:border-primary hover:text-primary !border-primary text-primary hover:!border-secondary hover:text-secondary"
                >
                  <div
                    style="margin-bottom: 0; height: 25px"
                    class="flex justify-center align-center"
                  >
                    <p style="color: black">Donate Today</p>
                  </div>
                </button>
              </div></a
            >
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-bluebg pb-8">
    <div class="container mx-auto px-4">
      <div class="text-center py-10">
        <h1 class="text-primary font-semibold text-md">
          VOLUNTEERING PREPARES
        </h1>
        <h1 class="text-4xl font-semibold">Teens for College &amp; Career</h1>
      </div>
      <div>
        <p class="text-md font-normal text-darkblue">
        Sự hỗ trợ hào phóng từ các đối tác, tổ chức và những cá nhân cho phép Hope Services Vietnam đem đến cho những bạn trẻ (độ tuổi từ lớp 6-12) cơ hội và tài nguyên để xây dựng bộ kỹ năng cần thiết và kết nối với những vấn đề của cộng đồng. Những cựu thành viên của Hope Services Vietnam là những người đi đầu luôn sẵn sàng hành động để tạo ra những thay đổi tích cực cho cộng đồng và đem đến cơ hội cho những nhóm người yếu thế. Kết nối và tham gia cùng Lion’s Heart Teen Volunteers and Leaders’, các bạn trẻ có thêm cơ hội để khám phá những tiềm năng của bản thân, đạt được những thành tựu trong học tập và tìm ra hướng đi phù hợp trong tương lai.
        </p>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-12 md:grid-cols-12 my-5">
        <div class="col-span-2">
          <a
            target="_blank"
            href="{{route('users.partner.create')}}"
            ><div>
              <button
                type="button" style="background-color:#000E7B"
                class="PrimaryButton_button-box__dGgxJ bg-primary border-primary border-1 px-3 py-2 undefined"
              >
                <div
                  style="margin-bottom: 0; height: 25px"
                  class="flex justify-center align-center"
                >
                  <p class="font-primary">Partner with us</p>
                </div>
              </button>
            </div></a
          >
        </div>
      </div>
    </div>
  </section>
  <div class="relative">
    <main class="container mx-auto px-4 lg:px-0">
      <div class="container mx-auto -mb-20 mt-5 pt-10">
        <div>
          <div
            class="py-3 grid grid-cols-2 bg-white md:grid-cols-4 lg:grid-cols-4 gap-5 text-center md:divide-x lg:divide-x divide-dashed divide-stroke"
            style="box-shadow: rgba(0, 0, 0, 0.1) 0px 3px 8px"
          >
            <div class="py-2">
              <i class="bi bi-globe-americas text-4xl text-primary"></i>
              <div
                class="text-3xl font-bold my-2"
                style="letter-spacing: 0.5px"
              >
                1,500,000
              </div>
              <div
                class="font-medium uppercase text-md"
                style="color: #a5a5a5"
              >
                NONPROFITS IN THE U.S
              </div>
            </div>
            <div class="py-2">
              <i class="bi bi-people-fill text-4xl text-primary"></i>
              <div
                class="text-3xl font-bold my-2"
                style="letter-spacing: 0.5px"
              >
                15,000,000
              </div>
              <div class="font-medium text-md" style="color: #a5a5a5">
                U.S. HIGH SCHOOL STUDENTS
              </div>
            </div>
            <div class="py-2">
              <i class="bi bi-emoji-smile-fill text-4xl text-primary"></i>
              <div
                class="text-3xl font-bold my-2"
                style="letter-spacing: 0.5px"
              >
                90 %
              </div>
              <div class="font-medium text-md" style="color: #a5a5a5">
                OF NONPROFITS RELY ON VOLUNTEERS
              </div>
            </div>
            <div class="py-2">
              <i class="bi bi-lightbulb-fill text-4xl text-primary"></i>
              <div
                class="text-3xl font-bold my-2"
                style="letter-spacing: 0.5px"
              >
                53
              </div>
              <div class="font-medium text-md" style="color: #a5a5a5">
                AVERAGE HOURS/YEAR SERVED BY LION’S HEART MEMBERS
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  <br/><br/><br/><br/><br/>
  <div class="container mx-auto px-4 lg:px-0 mt-8">
    <div class="grid grid-cols-1 md:grid-cols-8">
      <div class="md:col-start-3 md:col-span-4">
        <div class="text-center p-5">
          <p class="uppercase font-medium text-primary text-sm md:text-md">
            PARTNERS
          </p>
          <p class="text-lg md:text-2xl font-bold">In Positive Impact</p>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-1 md:grod-cols-12 lg:grid-cols-12">
      <div class="lg:col-start-5 col-span-4">
        <p class="font-normal text-darkblue text-sm py-2 text-center">
        Sự kết nối được thể hiện qua nền tảng vững chắc và sự hỗ trợ, hợp tác và đóng góp của các tổ chức và các đối tác tiềm năng.
        </p>
      </div>
    </div>
    <div class="flex justify-center items-center">
      <a
        target="_blank"
        href="{{route('users.partner.create')}}"
        ><div>
          <button
            type="button" style="background-color:#000E7B"
            class="PrimaryButton_button-box__dGgxJ bg-primary border-primary border-1 px-3 py-2 undefined"
          >
            <div
              style="margin-bottom: 0; height: 25px"
              class="flex justify-center align-center"
            >
              <p class="font-primary">Become a corporate partner</p>
            </div>
          </button>
        </div></a
      >
    </div>
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
