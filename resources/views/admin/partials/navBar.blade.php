<nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">{{ inboxCountUnViewed() }}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">لديك {{ inboxCountUnViewed() }} رسائل غير مقروءة</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  @forelse( getAllInbox() as $getInbox )
                    <li><!-- start message -->
                      <a href="{{ route( 'contact.show' , $getInbox->id ) }}">
                        <div class="pull-right">
                          <img src="{{ 

                            route('identicon::main', [
                                 $getInbox->email 
                            ])

                            }}" class="img-circle" alt="صورة {{ $getInbox->email }}">
                        </div>
                        <h4>
                          {{ $getInbox->subject }}
                          
                        </h4>
                        <p> {{ $getInbox->message }}</p>
                        <small><i class="fa fa-clock-o"></i> {{ $getInbox->created_at }}</small>
                      </a>
                    </li>
                    <!-- end message -->
                  @empty
                    <li>
                      <a>
                        <div class="pull-left">
                          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          Support Team
                          <small><i class="fa fa-clock-o"></i> #</small>
                        </h4>
                        <p> لا توجد رسالة</p>
                      </a>
                    </li>

                  @endforelse

                  
                </ul>
              </li>


              <li class="footer">
                <a href="{{ route('contact.index') }}">رؤية كافة الرسائل م.إ</a> 
                <a href="{{ route('contact.box') }}">رؤية كافة الرسائل م.ج</a> 
              </li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ 

                        route('identicon::main', [
                            getUserEmail( Auth::id() )
                        ])

              }}" class="img-circle" width="20" alt="User Image">
              <span class="hidden-xs">{{ getUser( Auth::id() ) }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ 

                        route('identicon::main', [
                            getUserEmail( Auth::id() )
                        ])

                }}" class="img-circle" alt="User Image">

                <p>
                  {{ getUser( Auth::id() ) }}
                  <small>عضو منذ{{  getUserCreatedAt( Auth::id() ) }} </small>
                </p>
              </li>
              <!-- Menu Body -->

              <li class="user-body">
                <div class="row">
                  <div class="col-xs-1 "></div>
                  <div class="col-xs-11 ">
                    التقديم أو البيع<br />
                    --المفعلة<br />
                    ----<a href="{{ route( 'user.my-buildings-offer' ) }}" title="قطعي المفعلة"> قطعي المفعلة</a><br />
                    ----<a href="{{ route( 'user.my-complete-buildings-offer' ) }}" title="مركباتي المفعلة"> مركباتي المفعلة</a><br />
                    --التي في الإنتضار<br />
                    ----<a href="{{ route( 'user.my-buildings-in-wait-offer' ) }}" title="قطعي الغير مفعلة"> قطعي الغير مفعلة</a><br />
                    ----<a href="{{ route( 'user.my-complete-buildings-in-wait-offer' ) }}" title="مركباتي الغير مفعلة"> مركباتي الغير مفعلة</a><br />
                    --المفضلة<br />
                    ----<a href="{{ route( 'user.my-favorites-offer' ) }}" title=" قطعي المفعلة"> قطعي المفضلة</a><br />
                    ----<a href="{{ route( 'user.my-complete-favorites-offer' ) }}" title=" قطعي المفعلة"> مركباتي المفضلة</a><br />
                    الطلب أو الشراء<br />
                    --المفعلة<br />
                    ----<a href="{{ route( 'user.my-buildings-demande' ) }}" title="قطعي المفعلة"> قطعي المفعلة</a><br />
                    ----<a href="{{ route( 'user.my-complete-buildings-demande' ) }}" title="مركباتي المفعلة"> مركباتي المفعلة</a><br />
                    --التي في الإنتضار<br />
                    ----<a href="{{ route( 'user.my-buildings-in-wait-demande' ) }}" title="قطعي الغير مفعلة"> قطعي الغير مفعلة</a><br />
                    ----<a href="{{ route( 'user.my-complete-buildings-in-wait-demande' ) }}" title="مركباتي الغير مفعلة"> مركباتي الغير مفعلة</a><br />
                    --المفضلة<br />
                    ----<a href="{{ route( 'user.my-favorites-demande' ) }}" title="قطعي المفضلة"> قطعي المفضلة</a><br />
                    ----<a href="{{ route( 'user.my-complete-favorites-demande' ) }}" title="مركباتي المفضلة"> مركباتي المفضلة</a><br />
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="{{ route( 'user.my-page', Auth::id() ) }}" class="btn btn-default btn-flat">الصفحة الشخصية</a>
                </div>
                <div class="pull-left">

                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      خروج
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </div>
              </li>

            </ul>
          </li>

           <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
          
        </ul>
      </div>
    </nav>