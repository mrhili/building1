


<!DOCTYPE html lang="en">

<head>



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- ALL NECESSARY META TAG --}}

    {{-- IE --}}

    <meta http-equiv='imagetoolbar' content='no'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{-- DC --}}

    <meta name="dc.language" CONTENT="AR">
    <meta name="dc.source" CONTENT="{{ route('index') }}">
    <meta name="dc.relation" CONTENT="{{ route('index') }}">
    <meta name="dc.title" CONTENT="{{ getSetting( 'site-name' ) }} | @yield('title')">

    {{-- PHONE --}}

    <meta name='HandheldFriendly' content='True'>
    <meta name='MobileOptimized' content='480'>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, height=device-height, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="theme-color" content="#000">
    <meta name="apple-mobile-web-app-title" content="{{ getSetting( 'site-name' ) }} | @yield('title')">

    {{-- OG TAG --}}

    <meta property="og:title" content="{{ getSetting( 'site-name' ) }} | @yield('title')"/>
    <meta property="og:type" content="إشهارت مصغرة"/>
    <meta property="og:url" content="{{ route('index') }}"/>
    <meta property="og:site_name" content="{{ getSetting( 'site-name' ) }}"/>

    {{-- Twitter --}}

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@{{ getSetting( 'twitter' ) }}" />
    <meta name="twitter:title" content="{{ getSetting( 'site-name' ) }} | @yield('title')" />

    {{-- Google --}}
    <meta name="google" content="xxxx">

    {{-- Facebook --}}

    {{-- Youtube --}}

    {{-- bing --}}

    {{-- msn --}}
    <meta name="msnbot" content="xxxx">

    {{-- yahoo --}}

    {{-- Cache --}}

    {{--
    <meta http-equiv='Expires' content='0'>
    <meta http-equiv='Pragma' content='no-cache'>
    <meta http-equiv='Cache-Control' content='no-cache'>
    --}}




    <meta charset='UTF-8'>

    <meta name='copyright' content='{{ getSetting( "site-name" ) }}'>
    <meta name='language' content='AR'>

    <meta name="Slurp" content="xxxx">

    <meta name="bingbot" content="xxxx">
    <meta name='revised' content='Sunday, July 18th, 2017, 5:15 pm'>
    <meta name='abstract' content='{{ getSetting( "description" ) }}'>
    <meta name='topic' content='{{ getSetting( "description" ) }}'>
    <meta name='summary' content='{{ getSetting( "description" ) }}'>
    <meta name='Classification' content='إشهارت مصغرة'>
    <meta name='pageKey' content=''>

    <meta name='designer' content='العدة التقنية'>
    <meta name='reply-to' content='{{ getSetting( "email" ) }}'>
    <meta name='owner' content='{{ getSetting( "director-name" ) }}'>
    <meta name='url' content='{{ route("index") }}'>
    <meta name='identifier-URL' content='{{ route("index") }}'>
    <meta name='pagename' content='{{ getSetting( "site-name" ) }} , @yield("title")'>
    <meta name='category' content='إشهارات مصغرة'>
    <meta name='coverage' content='Worldwide'>
    <meta name='author' content='{{ getSetting( "site-name" ) }}'>

    <meta name='distribution' content='Global'>
    <meta name='rating' content='General'>
    <meta name='revisit-after' content='7 days'>

    <meta name='subtitle' content='{{ getSetting( "site-name" ) }}'>
    <meta name='target' content='all'>
    <meta name='HandheldFriendly' content='True'>
    {{-- <meta name='date' content='{{ Carbon::now()->toDayDateTimeString(); }}'> --}}
    <meta name='search_date' content='2017-09-27'>
    <meta name='ResourceLoaderDynamicStyles' content=''>
    <meta name='medium' content='إشهارات مصغرة'>

    {{-- END OF ALL NECESSARY META TAG --}}

    @yield('metaTags', "
        <meta name='keywords' content='{{ getSetting( \"tags\" ) }}'>
        <meta name='dc.keywords' CONTENT='{{ getSetting( \"tags\" ) }}'>

        <meta name='description' content='{{ getSetting( \"description\" ) }}'>

        <meta property='og:description' content='{{ getSetting( \"description\" ) }}'/>
        <meta name='twitter:description' content='{{ getSetting( \"description\" ) }}' />
        <meta name='dc.description' content='{{ getSetting( \"description\" ) }}' />

        <meta name='dc.subject' content='ميكانيك غيارات مركبات'>
        <meta name='subject' content='ميكانيك غيارات مركبات'>

    ")

    @yield('imageMetaTags',"

        <meta property='og:image' content='{{ asset( \"/images/\". getSetting( \"logo\" ) ) }}'/>
        <meta name='twitter:image' content='{{ asset( \"/images/\". getSetting( \"logo\" ) ) }}' />

    ")

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/images/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/images/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/images/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/images/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/images/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/images/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/images/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/images/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('/images/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/images/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/images/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('/images/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">





    <title>{{ getSetting( 'site-name' ) }} | @yield('title')</title>
    <!-- adding this for a template purpose -->
    {!! Html::style('website/css/bootstrap.min.css') !!}
    {!! Html::style('website/css/bootstrap-rtl.min.css') !!}
    {!! Html::style('website/css/flexslider.css') !!}

    {{-- Html::style('website/css/style.css')  --}}
    
    {!! Html::style('website/css/newStyle.css') !!}



    {!! Html::style('css/changa.css') !!}

    {!! Html::style('website/css/font-awesome.min.css') !!}



    {!! Html::style('cust/nprogress/nprogress.css') !!}





    {!! Html::style('cust/sweetAlert/sweetalert.css') !!}


    {!! Html::style('cust/select2/css/select2.css') !!}

    {!! Html::style('cust/blueG/css/blueimp-gallery.css') !!}


    {!! Html::style('website/css/custom.css') !!}


    <!-- END>>> adding this for a template purpose -->
    @yield('styling')

    <!-- MODERNIZR -->



    {!! Html::script('website/js/modernizr.js') !!}

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>

<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>

{{--

LOADING PAGE

--}}

<div id="layerIntro">
    @include('partials.intro')
</div>

{{--

END LOADING PAGE

--}}
    <div id="wrapper">

        <div id="navBario">
            @include('partials.navBar')
        </div>

        <div class="sp sp-bars">

        </div>



        <div id="anchors" class="treeview myFooterGreen">



        </div>



        <div id="app">

                @yield('content')

        </div>

        <div id="footario">
            @include('partials.footer')
        </div>

    </div>

    <div class="force-overflow"></div>

    {{-- GET SITE CONTROLL

    <script>
    var _token = {{ csrf_token() }};

      (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
        t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
      })(window, document, '_gscq','script','//widgets.getsitecontrol.com/75698/script.js');
    </script>

    --}}




    <!-- Scripts -->

    {!! Html::script('js/cookie.js') !!}



    {!! Html::script('website/js/jquery.min.js') !!}

    {!! Html::script('cust/jQuery/jquery-migrate-1.4.1.min.js') !!}



    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); }
    </script>

    {!! Html::script('website/js/es6-promise.js') !!}

    {!! Html::script('website/js/bootstrap.min.js') !!}
    {!! Html::script('website/js/jquery.flexslider.js') !!}
    {!! Html::script('website/js/responsive-nav.js') !!}

    {!! Html::script('website/js/velocity.min.js') !!}

    {!! Html::script('cust/nprogress/nprogress.js') !!}

    {!! Html::script('cust/sweetAlert/sweetalert-dev.js') !!}

    {!! Html::script('cust/select2/js/select2.js') !!}

    {!! Html::script('cust/blueG/js/blueimp-gallery.js') !!}

    {!! Html::script('cust/dmUploader/js/demo-preview.js') !!}

    {!! Html::script('cust/dmUploader/js/dmuploader.js') !!}


    {!! Html::script('cust/LZMA-Compression/lzma.js') !!}

    {!! Html::script('cust/LZMA-Compression/lzma_worker.js') !!}



    {!! Html::script('assets/js/improved-links.js') !!}








    {{-- DISQUS --}}


    <script id="dsq-count-scr" src="//cars-local.disqus.com/count.js" async></script>

    {{-- END DISQUS --}}


<script>

    $('a.logo-brand').css( 'background', 'url(\"{{ asset( "/images/". getSetting( "logo" ) ) }}\") no-repeat center' ).css('background-size', '159.5px 88.5px');

    $('#layerIntro').css('background-image', 'url(\"{{ asset( "/images/". getSetting( "motif" ) ) }}\")');



    function mainUrl(){

            return "{{ url('/') }}" ;

        }


    Cookies.set('screen', $(document).width());


</script>


<script type="text/javascript">
    $("#plusButton").css("display", "none");
    $("#minusButton").on("click", function(){
        $("#plusButton").css("display", "block");
        $(this).css("display", "none");
        $("#displayed").css("display", "none");
    });

    $("#plusButton").on("click", function(){
        $("#minusButton").css("display", "block");
        $(this).css("display", "none");
        $("#displayed").css("display", "block");
    });
</script>

<script type="text/javascript">
var mincount = 2;
var maxcount = 4;

$(".image-gallery-list>ul li").slice(2).hide();

$(".image-gallery-list").scroll(function() {

  if($(".image-gallery-list").scrollTop() + $(".image-gallery-list").height() >= $(".image-gallery-list")[0].scrollHeight) {

    $(".image-gallery-list>ul li").slice(mincount,maxcount).fadeIn(1000);

    mincount = mincount+2;
    maxcount = maxcount+2;

  }
});
</script>


    {!! Html::script('assets/js/helpers.js') !!}


<script type="text/javascript">

</script>



<script type="text/javascript" id="cookieinfo" src="//cookieinfoscript.com/js/cookieinfo.min.js">
</script>

    {!! Html::script('website/js/custom.js') !!}

    <!-- INSERTING SCRipt -->
    @yield('scripting')



</body>
</html>
