          <a href="{{ route('contact.response', -1) }}" class="btn btn-primary btn-block margin-bottom">كتابة</a>







          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title text-center"> الرسائل</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked childesDecoNone">

                <li><i class="fa fa-envelope"></i> المقروئة 
                  <ul>

                    @if( Auth::user()->admin == 1)

                    <li><i class="fa fa-envelope"></i> مردود عليها
                      <ul class="nav-stacked childesDecoNone blueAnchor">

                        <li class="{{ aClass('contact.seenRepDel', 'a') }}"><i class="fa fa-envelope"></i><a href="{{ route('contact.seenRepDel') }}"> محذوفة</a><span class="label label-primary pull-left marginLeftX">{{ seenRepDelCount() }}</span></li>
                        <li class="{{ aClass('contact.seenRep1Del', 'a') }}"><i class="fa fa-envelope"></i><a href="{{ route('contact.seenRep1Del') }}"> غير محذوفة</a><span class="label label-primary pull-left marginLeftX">{{ seenRepDelCount() }}</span></li>

                      </ul>
                    </li>

                    @else

                    <li class="{{ aClass('contact.seenRep1Del', 'a') }}"><i class="fa fa-envelope"></i><a href="{{ route('contact.seenRep1Del') }}"> مردود عليها</a><span class="label label-primary pull-left marginLeftX">{{ seenRep1DelCount() }}</span></li>

                    @endif


                    @if( Auth::user()->admin == 1)

                    <li><i class="fa fa-envelope"></i> غير مردود عليها
                      <ul class="nav-stacked childesDecoNone blueAnchor">
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
                  <ul>


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
            </div>
            <!-- /.box-body -->
          </div>



          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title text-center"> الردود</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked childesDecoNone">

                @if( Auth::user()->admin == 1)

                <li class=""><i class="fa fa-envelope"></i> موافق عليها
                   <ul class="nav-stacked childesDecoNone blueAnchor">
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
            </div>
            <!-- /.box-body -->
          </div>
