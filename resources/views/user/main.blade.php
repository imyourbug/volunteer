<!DOCTYPE html>
<html lang="en">

<head>
    <meta charSet="utf-8" />
    <link rel="preload" href="/storage/images/c65efb1063cc8e94.p.woff2" as="font" type="font/woff2" crossorigin="" />
    <link rel="stylesheet" href="/css/81e148f1f637b594.css" data-precedence="high" />
    <link rel="stylesheet" href="/css/dda58edab92d90ef.css" data-precedence="high" />
    <link rel="stylesheet" href="/css/a90661c7c558d3be.css" data-precedence="high" />
    <link rel="stylesheet" href="/css/style1.css" data-precedence="high" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Volunteer Opportunities for Teens</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description"
        content="Receive local teen volunteer opportunities. Students track community service hours, create digital portfolio, earn awards and scholarships." />
    <meta name="keywords" content="local teen volunteer opportunities, community service hours" />
    <meta name="facebook-domain-verification" content="zrcp5rusg9b12jihpg1dasn74fx5d8" />
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/favicon.ico" />
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    @stack('styles')
</head>

<body class="__variable_ec1f04 !font-primary">
    <!-- Start of LiveChat (www.livechat.com) code -->
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 15945504;;
        (function(n, t, c) {
            function i(n) {
                return e._h ? e._h.apply(null, n) : e._q.push(n)
            }
            var e = {
                _q: [],
                _h: null,
                _v: "2.0",
                on: function() {
                    i(["on", c.call(arguments)])
                },
                once: function() {
                    i(["once", c.call(arguments)])
                },
                off: function() {
                    i(["off", c.call(arguments)])
                },
                get: function() {
                    if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                    return i(["get", c.call(arguments)])
                },
                call: function() {
                    i(["call", c.call(arguments)])
                },
                init: function() {
                    var n = t.createElement("script");
                    n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js",
                        t.head.appendChild(n)
                }
            };
            !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
        }(window, document, [].slice))
    </script>
    <noscript><a href="https://www.livechat.com/chat-with/15945504/" rel="nofollow">Chat with us</a>, powered by <a
            href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
    <!-- End of LiveChat code -->

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
    {{-- header --}}
    @include('user.header')
    {{-- content --}}
    @yield('content')
    {{-- footer --}}
    @include('user.footer')
    <div class="Toastify"></div>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="/_next/static/chunks/polyfills-c67a75d1b6f99dc8.js" nomodule=""></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    @stack('scripts')
    <script src="/_next/static/chunks/webpack-1e408190a5586826.js" async=""></script>
    <script src="/_next/static/chunks/17-493f48cad698a497.js" async=""></script>
    <script src="/_next/static/chunks/main-app-32f57a6d775a0346.js" async=""></script>
    <script>
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
    </script>
    <script src="/js/user/main.js" type="text/javascript"></script>
</body>

</html>
