@extends('admin.layouts.layout')

@section('title')

  كافة الرسائل
@stop

@section('usefullStyleSheetBeforeSkin')

  <!-- fullCalendar 2.2.5-->
  {!! Html::style('dashboard/plugins/fullcalendar/fullcalendar.min.css') !!}

  {{ HTML::style('dashboard/plugins/fullcalendar/fullcalendar.print.css', ['media' => 'print']) }}


@stop

@section('usefullStyleSheet')

  {!! Html::style('dashboard/dist/css/skins/_all-skins.min.css') !!}
  <!-- iCheck -->
  {!! Html::style('dashboard/plugins/iCheck/flat/blue.css') !!}

@stop



@section('styling')



@stop

@section('content')




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mailbox
        <small>13 new messages</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mailbox</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
        @include('admin.partials.asideBox')
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">

            @if( $is == 'message' )

              <h3 class="box-title">قراءة الرسالة</h3>

            @elseif( $is == 'reply' )

              <h3 class="box-title">قراءة الرد</h3>

            @endif

              <div class="box-tools pull-right">
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3>{{ $c->subject }}</h3>
                <h5><span class="mailbox-read-time">{{ $c->created_at }}</span><span class="pull-left">{{ $c->email }}</span></h5>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">
                <div class="btn-group">

              @if( $is == 'message' )

                @isset( $adminView )

                  @if( $adminView )
                      @if( $c->view )

                        <a href="" type="button" class="btn btn-default btn-sm hasBeenSeenSmall" data-toggle="tooltip" data-container="body" title=" لم أرها"><i class="fa fa-times"></i></a>

                      @else

                        <a href="" type="button" class="btn btn-default btn-sm hasBeenSeenSmall" data-toggle="tooltip" data-container="body" title=" رأيتها"><i class="fa fa-check-square-o"></i></a>

                      @endif
                  @endif

                @endisset

              @endif

              @if( $is == 'message' )

                <a href="{{ route('contact.destroyMessageBack2New', $c->id ) }}" type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="حذف"><i class="fa fa-trash-o"></i></a>

                @if( Auth::id() == 1 )

                <a href="{{ route('contact.xdestroyMessageBack2New', $c->id ) }}" type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="حذف خطير"><i class="fa fa-trash"></i></a>

                @endif

              @elseif( $is == 'reply' )

                <a href="{{ route('reply.destroyRepBack2New', $c->id ) }}" type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="حذف"><i class="fa fa-trash-o"></i></a>

                @if( Auth::id() == 1 )

                <a href="{{ route('reply.xdestroyRepBack2New', $c->id ) }}" type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="حذف خطير"><i class="fa fa-trash"></i></a>

                @endif

              @endif

                  <a href="{{ route('contact.response', $c->id) }}" type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="رد">
                    <i class="fa fa-reply"></i></a>
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="نشر">
                    <i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="طباعة">
                  <i class="fa fa-print"></i></button>
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <p class="text-center">{{ $c->message }}</p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->

            @if( $is == 'message' )


              @foreach( generateReply( $c->id ) as $rep )
              <div class="box-footer">
                  <h3 class="pull-left">{{ $rep->user->name }}</h3>
                  <div class="clearfix"></div>
                  <h3>{{$loop->count}} - {{ $rep->subject }}</h3>
                  <h5><span class="mailbox-read-time">{{ $rep->created_at }}</span><span class="pull-left">{{ $rep->email }}</span></h5>
                  <p class="text-center"><b>{{ $rep->subject }}</b></p>
                  <p class="text-center">{{ $rep->message }}</p>
              </div>
              @endforeach

            @elseif( $is == 'reply' )


              @foreach( generateMessage( $contact->contact_id ) as $mess )


              <div class="box-footer">
                  <h3 class="pull-left"><a href="{{ route('reply.show', $rep->id) }}">{{ $mess->name }}</a></h3>
                  <div class="clearfix"></div>
                  <h3>{{$loop->count}} - {{ $mess->subject }}</h3>
                  <h5><span class="mailbox-read-time">{{ $rep->created_at }}</span><span class="pull-left">{{ $rep->user->name }}</span></h5>
                  <p class="text-center"><b>{{ $rep->subject }}</b></p>
                  <p class="text-center">{{ $rep->message }}</p>
              </div>

              @endforeach


            @endif


            {{--
            <div class="box-footer">


              <ul class="mailbox-attachments clearfix">
                <li>
                  <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>

                  <div class="mailbox-attachment-info">
                    <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> Sep2014-report.pdf</a>
                        <span class="mailbox-attachment-size">
                          1,245 KB
                          <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                  </div>
                </li>
                <li>
                  <span class="mailbox-attachment-icon"><i class="fa fa-file-word-o"></i></span>

                  <div class="mailbox-attachment-info">
                    <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> App Description.docx</a>
                        <span class="mailbox-attachment-size">
                          1,245 KB
                          <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                  </div>
                </li>
                <li>
                  <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo1.png" alt="Attachment"></span>

                  <div class="mailbox-attachment-info">
                    <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo1.png</a>
                        <span class="mailbox-attachment-size">
                          2.67 MB
                          <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                  </div>
                </li>
                <li>
                  <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo2.png" alt="Attachment"></span>

                  <div class="mailbox-attachment-info">
                    <a href="" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo2.png</a>
                        <span class="mailbox-attachment-size">
                          1.9 MB
                          <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                  </div>
                </li>
              </ul>

              
            </div>
            --}}
            <!-- /.box-footer -->
            <div class="box-footer">
              <div class="pull-right">


              @if( $is == 'message' )

                @isset( $adminView )

                  @if( $adminView )
                      @if( $c->view )

                        <a href="" type="button" class="btn btn-default hasBeenSeen"><i class="fa fa-times"></i> لم أرها</a>

                      @else

                        <a href="" type="button" class="btn btn-default hasBeenSeen"><i class="fa fa-check-square-o"></i> رأيتها</a>

                      @endif
                  @endif

                @endisset

              @endif

              @if( $is == 'message' )

                <a href="{{ route('contact.response', $c->id) }}" type="button" class="btn btn-default"><i class="fa fa-reply"></i> رد</a>

              @endif
                <button type="button" class="btn btn-default"><i class="fa fa-share"></i> نشر</button>
              </div>


              @if( $is == 'message' )

                <a href="{{ route('contact.destroyMessageBack2New', $c->id ) }}" type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> حذف</a>

                @if( Auth::id() == 1 )

                <a href="{{ route('contact.xdestroyMessageBack2New', $c->id ) }}" type="button" class="btn btn-default"><i class="fa fa-trash"></i> حذف خطير</a>

                @endif

              @elseif( $is == 'reply' )

                <a href="{{ route('reply.destroyRepBack2New', $c->id ) }}" type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> حذف</a>

                @if( Auth::id() == 1 )

                <a href="{{ route('reply.xdestroyRepBack2New', $c->id ) }}" type="button" class="btn btn-default"><i class="fa fa-trash"></i> حذف خطير</a>

                @endif

              @endif



              <button type="button" class="btn btn-default"><i class="fa fa-print"></i> طباعة</button>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@stop

@section('usefullJSTwo')

  {!! Html::script('dashboard/plugins/iCheck/icheck.min.js') !!}

@stop

@section('scripting')

<!-- Page Script -->
<script>
  $(function () {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });

    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
  });
</script>

@if( $is == 'message' )

  @if( Auth::id() == 1 )

    <script type="text/javascript">
      $(document).ready(function(){

          var _token = '{{ csrf_token() }}';

          var idOfC = '{{ $c->id }}';

        $('.hasBeenSeen, .hasBeenSeenSmall').on('click',function( event ){


          event.preventDefault();


            $.ajax({
                dataType: 'json',
                type:'GET',
                url: '/contact-hasBeenSeen/'+ idOfC,
                data:{_token: _token, id: idOfC }
            }).done(function(data){

              if( data.view == 1){

                $('.hasBeenSeen').html('').html('<i class="fa fa-times"></i> لم أرها');

                $('.hasBeenSeenSmall').html('').html('<i class="fa fa-times"></i>').attr('title', 'لم أرها');

              }else{

                $('.hasBeenSeen').html('').html('<i class="fa fa-check-square-o"></i> رأيتها');

                $('.hasBeenSeenSmall').html('').html('<i class="fa fa-check-square-o"></i>').attr('title', 'رأيتها');

              }

              swal({
                title: "الحمد لله",
                text: "لقد تتم العملية بنجاح الرقم المسجل هو : " + data.id + " و لقد تغيرت القيمة إلى" + data.view,
                type: "success"
              });



              
              
            }).fail(function(){

              swal({
                title: "الحمد لله",
                text: "لم تتم العملية، المعدرة",
                type: "error"
              });

            });


        });

      });
    </script>

  @else

    <script type="text/javascript">
      $(document).ready(function(){

          var _token = '{{ csrf_token() }}';

          var idOfC = '{{ $c->id }}';

            $.ajax({
                dataType: 'json',
                type:'GET',
                url: '/contact-hasBeenSeen-not-web-master/'+ idOfC,
                data:{_token: _token, id: idOfC }
            }).done(function(data){

              
            });

      });
    </script>

  @endif

@endif

@stop




