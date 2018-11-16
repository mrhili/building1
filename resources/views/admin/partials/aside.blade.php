
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-right image">
          <img src="{{ 

                        route('identicon::main', [
                            getUserEmail( Auth::id() )
                        ])

           }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-right info">
          <p>{{ getUser( Auth::id() ) }}</p>
          <a href="#"> موجود <i class="fa fa-circle text-success"></i></a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
          <input type="text" name="q" class="form-control" placeholder=" إبحت">
              
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">القائمة</li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>الموقع</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-left pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('index') }}"><i class="fa fa-fast-backward"></i> الرجوع إلى الموقع . ر</a></li>
            <li><a href="{{ route('home') }}"><i class="fa fa-car"></i> كل القطع. ر</a></li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span> منطقة القطعة</span>
                <span class="pull-left-container">
                  <i class="fa fa-angle-left pull-left"></i>
                </span>
              </a>
              <ul class="treeview-menu">

                {!!
                            \App\Area::customUrl('places/{slug}')->ulAttr(['class'=> '', 'role' => 'menu'])->renderAsHtml()

                        !!}

              </ul>        
            </li> 
            {{--
            <li class="treeview">
                    <a href="#">
                      <i class="fa fa-laptop"></i>
                      <span> حالة القطع</span>
                      <span class="pull-left-container">
                        <i class="fa fa-angle-left pull-left"></i>
                      </span>
                    </a>

                    <ul class="treeview-menu {{ currentClass('search') }}" role="menu">
                      @foreach( buildingRent( -1 ) as $brKey => $bR )
                        <li>
                            <a href="{{ route('search') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('formThing{{ $brKey }}').submit();">
                                {{ thingRent( $brKey ) }}
                            </a>
                            
                            <form id="formThing{{ $brKey }}" action="{{ route('search') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}

                                

                                {!! Form::hidden('rent', $brKey ) !!}

                                
                            </form>
                            
                        </li>
                      @endforeach
                  </ul>
            </li>
            --}}
            @if( count( \App\Tag::all() ) > 0 )
            <li class="treeview">
                    <a href="#">
                      <i class="fa fa-laptop"></i>
                      <span> #هاشتاج</span>
                      <span class="pull-left-container">
                        <i class="fa fa-angle-left pull-left"></i>
                      </span>
                    </a>

                    <ul class="treeview-menu {{ currentClass('search') }}" role="menu">
                      @foreach( \App\Tag::all() as $tag )
            
                          <li class="">
                              <a href="{{ route('buildings.tag', $tag->name ) }}">

                                  {{ $tag->name }}

                              </a>
                          </li> <!-- cd-item -->
                          
                      @endforeach
                  </ul>
            </li>
            @endif
            


            <li><a href="{{ route('home.about') }}">عن الموقع</a></li>
            <li><a href="{{ route('contactUs') }}">راسلنا</a></li>
            <li><a href="{{ route('buildings.add') }}" class="colorBlack">إضافة قطعة</a></li>
          </ul>
        </li>

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>لوحة التحكم</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-left pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin-panel.index') }}"><i class="fa fa-circle-o"></i> الرئيسية</a></li>

            <li>
              <a href="#"><i class="fa fa-sitemap" aria-hidden="true"></i> الإدارة الرئيسية للموقع
                <span class="pull-left-container">
                  <i class="fa fa-angle-left pull-left"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('site-settings.create') }}"><i class="fa fa-wrench" aria-hidden="true"></i> تعديل الإعدادات</a></li>
              </ul>
            </li>


            {{-- BUILDINGS CONTROLLE --}}

            <li>
              <a href="#"><i class="fa fa-rocket" aria-hidden="true"></i> إدارة الإعلانات
                <span class="pull-left-container">
                  <i class="fa fa-angle-left pull-left"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('buildings.create') }}"><i class="fa fa-plus" aria-hidden="true"></i> إضافة إعلان</a></li>
                <li><a href="{{ route('buildings.index') }}"><i class="fa fa-ship" aria-hidden="true"></i> كافة الإعلانات</a></li>

              </ul>
            </li>

            {{-- PLACES CONTROLLE --}}

            <li>
              <a href="#"><i class="fa fa-rocket" aria-hidden="true"></i> إدارة المناطق
                <span class="pull-left-container">
                  <i class="fa fa-angle-left pull-left"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('places.index') }}"><i class="fa fa-ship" aria-hidden="true"></i> شجرة المناطق</a></li>
              </ul>
            </li>


            {{-- USERS CONTROLLE --}}

            <li>
              <a href="#"><i class="fa fa-building-o"></i> إدارة الأعضاء
                <span class="pull-left-container">
                  <i class="fa fa-angle-left pull-left"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('admin-users-panel.create') }}"><i class="fa fa-plus"></i> إضافة عضو</a></li>
                <li><a href="{{ route('admin-users-panel.index') }}"><i class="fa fa-building"></i> كافة الأعضاء</a></li>
              </ul>
            </li>

            {{-- MAIL CONTROLLE --}}

            <li>
              <a href="#"><i class="fa fa-envelope-o"></i> إدارة الرسائل
                <span class="pull-left-container">
                  <i class="fa fa-angle-left pull-left"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('contact.response', -1) }}"><i class="fa fa-pencil-square-o"></i> كتابة رسالة</a></li>
                <li>
                  <a href="#"><i class="fa fa-envelope"></i> كافة الرسائل
                    <span class="pull-left-container">
                      <i class="fa fa-angle-left pull-left"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('contact.index') }}"><i class="fa fa-envelope-square" aria-hidden="true"></i> كافة الرسائل م.إ</a></li>
                    <li>
                      <a href="#"><i class="fa fa-envelope-o"></i> كافة الرسائل م.ج
                        <span class="pull-left-container">
                          <i class="fa fa-angle-left pull-left"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">

















          <li ><a href="{{ route('contact.response', -1) }}" class="">كتابة</a></li>



              <li class="treeview">الرسائل</li>

              <ul class="treeview-menu">

                              <li><i class="fa fa-envelope"></i> المقروئة 
                  <ul>

                    @if( Auth::user()->admin == 1)

                    <li><i class="fa fa-envelope"></i> مردود عليها
                      <ul class="treeview-menu">

                        <li class="{{ aClass('contact.seenRepDel', 'a') }}"><i class="fa fa-envelope"></i><a href="{{ route('contact.seenRepDel') }}"> محذوفة</a><span class="label label-primary pull-left marginLeftX">{{ seenRepDelCount() }}</span></li>
                        <li class="{{ aClass('contact.seenRep1Del', 'a') }}"><i class="fa fa-envelope"></i><a href="{{ route('contact.seenRep1Del') }}"> غير محذوفة</a><span class="label label-primary pull-left marginLeftX">{{ seenRepDelCount() }}</span></li>

                      </ul>
                    </li>

                    @else

                    <li class="{{ aClass('contact.seenRep1Del', 'a') }}"><i class="fa fa-envelope"></i><a href="{{ route('contact.seenRep1Del') }}"> مردود عليها</a><span class="label label-primary pull-left marginLeftX">{{ seenRep1DelCount() }}</span></li>

                    @endif


                    @if( Auth::user()->admin == 1)

                    <li><i class="fa fa-envelope"></i> غير مردود عليها
                      <ul class="treeview-menu">
                        <li class="{{ aClass('contact.seen1RepDel', 'a') }}"><i class="fa fa-envelope"></i><a href="{{ route('contact.seen1RepDel') }}"> محذوفة</a><span class="label label-primary pull-left marginLeftX">{{ seen1RepDelCount() }}</span></li>
                        <li class="{{ aClass('contact.seen1Rep1Del', 'a') }}"><i class="fa fa-envelope"></i><a href="{{ route('contact.seen1Rep1Del') }}"> غير محذوفة</a><span class="label label-primary pull-left marginLeftX">{{ seen1Rep1DelCount() }}</span></li>
                      </ul>
                    </li>

                    @else

                    <li class="{{ aClass('contact.seen1Rep1Del', 'a') }}"><i class="fa fa-envelope"></i><a href="{{ route('contact.seen1Rep1Del') }}"> غير مردود عليها</a><span class="label label-primary pull-left marginLeftX">{{ seen1Rep1DelCount() }}</span></li>

                    @endif



                  </ul>
                </li>

                  <li class=""><i class="fa fa-envelope"></i> الغير المقروئة 
                  <ul class="treeview-menu">


                    @if( Auth::user()->admin == 1)

                    <li><i class="fa fa-envelope"></i> مردود عليها
                      <ul class="nav-stacked childesDecoNone blueAnchor">
                        <li class="{{ aClass('contact.unSeenRepDel', 'a') }}"><i class="fa fa-envelope"></i><a href="{{ route('contact.unSeenRepDel') }}"> محذوفة</a><span class="label label-primary pull-left marginLeftX">{{ unSeenRepDelCount() }}</span></li>
                        <li class="{{ aClass('contact.unSeenRep1Del', 'a') }}"><i class="fa fa-envelope"></i><a href="{{ route('contact.unSeenRep1Del') }}"> غير محذوفة</a><span class="label label-primary pull-left marginLeftX">{{ unSeenRep1DelCount() }}</span></li>
                      </ul>
                    </li>

                    @else

                    <li class="{{ aClass('contact.unSeenRep1Del', 'a') }}"><i class="fa fa-envelope"></i><a href="{{ route('contact.unSeenRep1Del') }}"> مردود عليها</a><span class="label label-primary pull-left marginLeftX">{{ unSeenRep1DelCount() }}</span></li>

                    @endif



                    @if( Auth::user()->admin == 1)

                    <li><i class="fa fa-envelope"></i> غير مردود عليها
                      <ul class="nav-stacked childesDecoNone blueAnchor">
                        <li class="{{ aClass('contact.unSeen1RepDel', 'a') }}"><i class="fa fa-envelope"></i><a href="{{ route('contact.unSeen1RepDel') }}"> محذوفة</a><span class="label label-primary pull-left marginLeftX">{{ unSeen1RepDelCount() }}</span></li>
                        <li class="{{ aClass('contact.unSeen1Rep1Del', 'a') }}"><i class="fa fa-envelope"></i><a href="{{ route('contact.unSeen1Rep1Del') }}"> غير محذوفة</a><span class="label label-primary pull-left marginLeftX">{{ unSeen1Rep1DelCount() }}</span></li>
                      </ul>
                    </li>

                    @else

                    <li class="{{ aClass('contact.unSeen1Rep1Del', 'a') }}"><i class="fa fa-envelope"></i><a href="{{ route('contact.unSeen1Rep1Del') }}"> غير مردود عليها</a><span class="label label-primary pull-left marginLeftX">{{ unSeen1Rep1DelCount() }}</span></li>

                    @endif




                  </ul>
                </li>

              </ul>


              <li> الردود</li>



                            <ul class="treeview-menu">

                @if( Auth::user()->admin == 1)

                <li class=""><i class="fa fa-envelope"></i> موافق عليها
                   <ul class="treeview-menu">
                      <li class="{{ aClass('reply.agreeDel', 'a') }}"><i class="fa fa-envelope"></i><a href="{{ route('reply.agreeDel') }}"> محذوفة</a><span class="label label-primary pull-left marginLeftX">{{ agreeDelCount() }}</span></li>
                      <li class="{{ aClass('reply.agree1Del', 'a') }}"><i class="fa fa-envelope"></i><a href="{{ route('reply.agree1Del') }}"> غير محذوفة</a><span class="label label-primary pull-left marginLeftX">{{ agreeDelCount() }}</span></li>
                    </ul>
                </li>

                @else

                <li class="{{ aClass('reply.agree1Del', 'a') }}"><i class="fa fa-envelope"></i><a href="{{ route('reply.agree1Del') }}"> موافق عليها</a><span class="label label-primary pull-left marginLeftX">{{ agree1DelCount() }}</span></li>

                @endif



                @if( Auth::user()->admin == 1)

                <li class=""><i class="fa fa-envelope"></i> غير موافق عليها
                   <ul class="nav-stacked childesDecoNone blueAnchor">
                      <li class="{{ aClass('reply.unAgreeDel', 'a') }}"><i class="fa fa-envelope"></i><a href="{{ route('reply.unAgreeDel') }}"> محذوفة</a><span class="label label-primary pull-left marginLeftX">{{ unAgreeDelCount() }}</span></li>
                      <li class="{{ aClass('reply.unAgree1Del', 'a') }}"><i class="fa fa-envelope"></i><a href="{{ route('reply.unAgree1Del') }}"> غير محذوفة</a><span class="label label-primary pull-left marginLeftX">{{ unAgree1DelCount() }}</span></li>
                    </ul>
                </li>

                @else

                <li class="{{ aClass('reply.unAgree1Del', 'a') }}"><i class="fa fa-envelope"></i><a href="{{ route('reply.unAgree1Del') }}">  غير موافق عليها</a><span class="label label-primary pull-left marginLeftX">{{ unAgree1DelCount() }}</span></li>

                @endif


              </ul>



















                      </ul>
                    </li>
                  </ul>
                  
                </li>
              </ul>
            </li>
                

                {{-- MAP RSS --}}

            <li>
              <a href="{{ route('rss') }}"><i class="fa fa-envelope-o"></i> خريطة الموقع
                <span class="pull-left-container">
                  <i class="fa fa-angle-left pull-left"></i>
                </span>
              </a>

            </li>
              </ul>
            </li>

          </ul>

        

    </section>
    <!-- /.sidebar -->
  </aside>