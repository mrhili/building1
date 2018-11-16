


<div id="flipkart-navbar">

<div class="container-fluid text-center">
    <ul class="list-inline">

        <li><a href="https://facebook.com/{{ getSetting( 'facebook' ) }}" rel="nofollow"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/{{ getSetting( 'twitter' ) }}" rel="nofollow"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://youtube.com/{{ getSetting( 'youtube' ) }}" rel="nofollow"><i class="fa fa-youtube"></i></a></li>
        <li><a href="https://google.com/{{ getSetting( 'google-plus' ) }}" rel="nofollow"><i class="fa fa-google"></i></a></li>
        <li><a href="{{ route('home.about') }}" title="عن الموقع"><i class="fa fa-address-card-o"></i></a></li>
        <li><a href="{{ route('contactUs') }}" title="راسلنا"><i class="fa fa-envelope"></i></a></li>

    </ul>



</div>



    <div class="container-fluid">

        <div class="row row2">
            <div class="col-sm-6 col-md-4">
                <h2 style="margin:0px;"><span class="smallnav menu push-left" onclick="openNav()">☰</span></h2>
                <a href="{{ url('/') }}" class="logo-brand" title="{{ getSetting( 'site-name' ) }}"></a>
            </div>
            <div class="flipkart-navbar-search smallsearch col-xs-11 col-sm-6 col-md-8">


                    {!! Form::open(['route' => 'search', 'role' => 'form', 'class' => 'row' ]) !!}

                        {{ csrf_field() }}


                        <div class="col-xs-11 removeBootstrapMarginAndPadding">

                                {!! Form::text('name', old('searchBar'), ['class' => 'flipkart-navbar-input col-xs-12 removeBootstrapMarginAndPadding', 'placeholder' => 'بحث' ]) !!}




                        </div>



                        <button class="flipkart-navbar-button col-xs-1 removeBootstrapMarginAndPadding" name='ok'>
                            <i class="fa fa-search"></i>
                        </button>
                    {!! Form::close() !!}

            </div>

        </div>
        <div class="row row1">

            <ul class="largenav text-center">

                <li class="upper-links {{ currentClass() }}"><a href="{{ route('index') }}"><i class="fa fa-home"></i> الرئيسية</a> <span class="caret hidden-v"></span></li>

                <li class="upper-links {{ currentClass() }}"><a href="{{ route('home') }}"><i class="fa fa-building"></i> كل القطع</a> <span class="caret hidden-v"></span></li>

                @foreach( buildingRent( -1 ) as $brKey => $bR )
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ $bR }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu {{ currentClass('search') }}" role="menu">

                            @foreach( buildingType( -1 ) as $btKey => $bT )
                            <li>
                                <a href="{{ route('search') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('form{{ $btKey.$brKey }}').submit();">
                                    {{ buildingType( $btKey ) }}
                                </a>

                                <form id="form{{ $btKey.$brKey }}" action="{{ route('search') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}



                                    {!! Form::hidden('rent', $brKey ) !!}
                                    {!! Form::hidden('type', $btKey ) !!}


                                </form>

                            </li>
                            @endforeach


                        </ul>
                </li>
                @endforeach

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle buttonClick" data-button="areas" data-toggle="dropdown" role="button" aria-expanded="false" title="المناطق">
                        <i class="fa fa-map-marker"></i>  المناطق <span class="caret"></span>
                    </a>

                    {{--

                    <div class="dropdown-menu" role="menu">
                        {!!
                            \App\Area::customUrl('places/{slug}')->ulAttr(['class'=> '', 'role' => 'menu'])->renderAsHtml()

                        !!}
                    </div>

                    --}}


                </li>




                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" title=" حالة العقار">
                              <i class="fa fa-thumbs-up"></i><i class="fa fa-thumbs-down"></i> حالة العقار <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu drpDwnMenu2Right {{ currentClass('search') }}" role="menu">
                            @foreach( buildingState( -1 ) as $bsKey => $bS )
                            <li>
                                <a href="{{ route('search') }}" title="{{ buildingRent( $bsKey ) }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('formThing{{ $bsKey }}').submit();">
                                    {{ buildingRent( $bsKey ) }}
                                </a>

                                <form id="formThing{{ $bsKey }}" action="{{ route('search') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}



                                    {!! Form::hidden('rent', $bsKey ) !!}


                                </form>

                            </li>
                            @endforeach
                        </ul>

                </li>

                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" title=" طلب أو تقديم">
                              طلب أو تقديم <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu drpDwnMenu2Right {{ currentClass('search') }}" role="menu">
                            @foreach( buildingKind( -1 ) as $bkKey => $bK )
                            <li>
                                <a href="{{ route('search') }}" title="{{ buildingRent( $bkKey ) }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('formThing{{ $bkKey }}').submit();">
                                    {{ buildingRent( $bkKey ) }}
                                </a>

                                <form id="formThing{{ $bkKey }}" action="{{ route('search') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}



                                    {!! Form::hidden('rent', $bkKey ) !!}


                                </form>

                            </li>
                            @endforeach
                        </ul>

                </li>




                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle buttonClick" data-button="tags"  data-toggle="dropdown" role="button" aria-expanded="false" title="#هاشتاج">
                            <i class="fa fa-hashtag"></i> هاشتاج  <span class="caret"></span>
                        </a>


                    </li>





                @if( Auth::check() )

                    @if (ifAdmin( Auth::id() ) == 1 )

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-tachometer"></i> لوحة التحكم  <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu drpDwnMenu2Right" role="menu">
                                <li><a href="{{ route('site-settings.create') }}"><i class="fa fa-circle-o"></i> تعديل الإعدادات</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('buildings.create') }}"><i class="fa fa-circle-o"></i> إضافة عقار</a></li>
                                <li><a href="{{ route('buildings.index') }}"><i class="fa fa-circle-o"></i> كافة العقارات</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('admin-users-panel.create') }}"><i class="fa fa-circle-o"></i> إضافة عضو</a></li>
                                <li><a href="{{ route('admin-users-panel.index') }}"><i class="fa fa-circle-o"></i> كافة الأعضاء</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('contact.response', -1) }}"><i class="fa fa-circle-o"></i> كتابة رسالة</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('contact.index') }}"><i class="fa fa-circle-o"></i> كافة الرسائل م.إ</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('contact.box') }}"><i class="fa fa-circle-o"></i> كافة الرسائل</a></li>
                                <li><a href="{{ route('contact.sent') }}"><i class="fa fa-circle-o"></i> الرسائل المرسلة</a></li>
                                <li><a href="{{ route('contact.draft') }}"><i class="fa fa-circle-o"></i> الرسائل المحتفضة</a></li>
                                <li><a href="{{ route('contact.trash') }}"><i class="fa fa-circle-o"></i> الرسائل المحذوفة</a></li>


                            </ul>
                        </li>



                    @endif

                @endif

                    {{--<li class="upper-links"><a href="{{ route('home.about') }}" title="عن الموقع">عن الموقع</a></li>--}}
                    {{--<li class="upper-links"><a href="{{ route('contactUs') }}" title="راسلنا">راسلنا</a></li>--}}



                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li class="upper-links"><a href="{{ route('login') }}" title="تسجيل الدخول">تسجيل الدخول</a></li>
                    <li class="upper-links"><a href="{{ route('register') }}" title="تسجيل العضوية">تسجيل العضوية</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" title="{{ Auth::user()->name }}">
                            <i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu drpDwnMenu2Right" role="menu">




<li class="childesAsBlackColor"> التقديم أو البيع
              <ul>


                        <li class=""> المفعلة
                            <ul class="">
                              <li class="{{ activeClass('user.my-buildings-offer' ) }}"><a href="{{ route( 'user.my-buildings-offer' ) }}" title="قطعي المفعلة"> قطعي المفعلة</a></li>
                              <li class="{{ activeClass('user.my-complete-buildings-offer' ) }}"><a href="{{ route( 'user.my-complete-buildings-offer' ) }}" title="مركباتي المفعلة"> مركباتي المفعلة</a></li>
                            </ul>

                        </li>

                        <li class=""> التي في الإنتضار
                            <ul>
                              <li class="{{ activeClass('user.my-buildings-in-wait-offer' ) }}"><a href="{{ route( 'user.my-buildings-in-wait-offer' ) }}" title="قطعي الغير مفعلة"> قطعي الغير مفعلة</a></li>
                              <li class="{{ activeClass('user.my-complete-buildings-in-wait-offer' ) }}"><a href="{{ route( 'user.my-complete-buildings-in-wait-offer' ) }}" title="مركباتي الغير مفعلة"> مركباتي الغير مفعلة</a></li>
                            </ul>

                        </li>

                        <li class=""> المفضلة
                            <ul>
                              <li class="{{ activeClass('user.my-favorites-offer' ) }}"><a href="{{ route( 'user.my-favorites-offer' ) }}" title=" قطعي المفعلة"> قطعي المفضلة</a></li>
                              <li class="{{ activeClass('user.my-complete-favorites-offer' ) }}"><a href="{{ route( 'user.my-complete-favorites-offer' ) }}" title=" قطعي المفعلة"> مركباتي المفضلة</a></li>
                            </ul>

                        </li>


              </ul>
            </li>

            <li> الطلب أو الشراء
              <ul>


                  <li class=""> المفعلة
                      <ul>
                        <li class="{{ activeClass('user.my-buildings-demande' ) }}"><a href="{{ route( 'user.my-buildings-demande' ) }}" title="قطعي المفعلة"> قطعي المفعلة</a></li>
                        <li class="{{ activeClass('user.my-complete-buildings-demande' ) }}"><a href="{{ route( 'user.my-complete-buildings-demande' ) }}" title="مركباتي المفعلة"> مركباتي المفعلة</a></li>
                      </ul>

                  </li>

                  <li class=""> التي في الإنتضار
                      <ul>
                        <li class="{{ activeClass('user.my-buildings-in-wait-demande' ) }}"><a href="{{ route( 'user.my-buildings-in-wait-demande' ) }}" title="قطعي الغير مفعلة"> قطعي الغير مفعلة</a></li>
                        <li class="{{ activeClass('user.my-complete-buildings-in-wait-demande' ) }}"><a href="{{ route( 'user.my-complete-buildings-in-wait-demande' ) }}" title="مركباتي الغير مفعلة"> مركباتي الغير مفعلة</a></li>
                      </ul>

                  </li>

                  <li class=""> المفضلة
                      <ul>
                        <li class="{{ activeClass('user.my-favorites-demande' ) }}"><a href="{{ route( 'user.my-favorites-demande' ) }}" title="قطعي المفضلة"> قطعي المفضلة</a></li>
                        <li class="{{ activeClass('user.my-complete-favorites-demande' ) }}"><a href="{{ route( 'user.my-complete-favorites-demande' ) }}" title="مركباتي المفضلة"> مركباتي المفضلة</a></li>
                      </ul>

                  </li>



              </ul>

            </li>




















                            <li role="separator" class="divider"></li>

                            <li>
                                <a href="{{ route('logout') }}" title="خروج"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    خروج
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif

                <li class="upper-links"><a href="{{ route('buildings.add') }}" class="colorBlack btn yellow-btn">
                إضافة قطعة ميكانيكية أو طلب قطعة مخصصة
                  </a></li>

                <div class="clear"></div>
            </ul>
        </div>
    </div>
</div>
<div id="mySidenav" class="sidenav">
    <div class="myNavGreen container row">
        <span class="sidenav-heading col-xs-10">{{ getSetting( 'site-name' ) }}</span>
        <a href="javascript:void(0)" class="closebtn col-xs-2" onclick="closeNav()" rel="nofollow">×</a>


    </div>
    <ul class="sideNavBar">


                <div class="clear"></div>




            </ul>
</div>
