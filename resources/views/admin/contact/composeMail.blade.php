@extends('admin.layouts.layout')

@section('title')

  كتابة الرسالة
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

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        علبة الرسائل
        <small>{{ inboxCountUnViewed(  ) }} رسالة جديدة</small>
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
          	{!! Form::open([
                'files' => true,
                'route' => 'reply.store',
                'class'=> 'form-horizontal',
                'role' => 'form',
                'method' => 'post',
            ]) !!}

            {{ csrf_field() }}

            {!! Form::hidden('from', 'dashboard' ) !!}
            <div class="box-header with-border">
              <h3 class="box-title">أكتب رسالة</h3>
            </div>

            <div class="box-body">




            <div class="form-group">
              @if( $mailWork )

                {!! Form::email('email', null, [ 'class' => 'form-control', 'placeholder' => 'name@example.com']) !!}

              @else

                
                {!! Form::email('email', $contact->email , [ 'class' => 'form-control', 'placeholder' => 'name@example.com']) !!}

                {!! Form::hidden('contact_id', $contact->id) !!}


              @endif

            </div>

            





            <div class="form-group">
                {!! Form::text('subject', null, ['class' => 'form-control form-control', 'placeholder' => 'الموضوع'] ) !!}
              </div>

	            <!-- /.box-header -->
	            <div class="box-body pad">

	            		{!! Form::textarea('message', null, ['id' => 'editor1' , 'rows' => '10', 'cols' => '80'] ) !!}

	                    
	            </div>
	          <!-- /.box -->
              <div class="form-group">
                <div class="btn btn-default btn-file pull-left">
                  <i class="fa fa-paperclip"></i> ملفات
                  {!! Form::file('attachement') !!}
                </div>
                <p class="help-block">أقصى حجم 32 MB</p>
              </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> إرسال</button>
                <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> تسجيل</button>
                
              </div>
              <button type="reset" class="btn btn-default pull-left"><i class="fa fa-times"></i> مسح</button>
            </div>

          {!! Form::close() !!}
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
<!-- ./wrapper -->
@stop

@section('usefullJSTwo')

  {!! Html::script('dashboard/plugins/iCheck/icheck.min.js') !!}

  <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>

@stop

@section('scripting')

<!-- Page Script -->
<script>
    $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
  });
</script>
@stop
</body>
</html>
