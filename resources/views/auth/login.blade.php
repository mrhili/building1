@extends('layouts.app')

@section('title')
تسجيل الدخول
@stop

@section('content')

<div class="about">
  <div class="container">
    <section class="title-section">
      <h1 class="title-header text-center" title="تسجيل الدخول">تسجيل الدخول</h1>
    </section>
  </div>
</div>
<div class="contact">
  <div class="container">
    <div class="row contact_top">
    <!--
      <div class="col-md-4 contact_details">
        <h5>Mailing address:</h5>
        <div class="contact_address">321 Awesome Street, New York, NY 17022</div>
      </div>
      <div class="col-md-4 contact_details">
        <h5>Call us:</h5>
        <div class="contact_address"> +1 800 123 1234<br>
        </div>
      </div>
      <div class="col-md-4 contact_details">
        <h5>Email us:</h5>
        <div class="contact_mail"> info@companyname.com</div>
      </div>
    </div>
    -->
    <div class="contact_bottom">
      <h3>مرحبا بك مرة أخرى</h3>
      <p class="">نتمى لك فرجة ممتعة</p>

            {!! Form::open([
                'route' => ['login'],
                'class'=> 'form-horizontal',
                'role' => 'form',
                'method' => 'POST',
            ]) !!}

            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">العوان الإلكتروني</label>

                <div class="col-md-6">

                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'required' => true ,  'autofocus' => true ]) !!}



                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">كلمة المرور</label>

                <div class="col-md-6">

                    {!! Form::password('password',['class' => 'form-control', 'required' => true ]) !!}

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>



            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                    @if( old('remember') )

                        <label>
                            {!! Form::checkbox('remember', null, true, ['class' => 'pull-right' ]) !!}
                            تذكر التصفح
                        </label>

                    @else

                        <label>
                            {!! Form::checkbox('remember', null, false, ['class' => 'pull-right' ]) !!}
                            تذكر التصفح
                        </label>

                    @endif

                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">

                    {!! Form::submit('الدخول', [ 'class' => 'btn btn-primary' ]) !!}

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        فقدت كلمة مرورك ؟
                    </a>

                </div>
            </div>
        {!! Form::close() !!}

    </div>
  </div>
</div>

@endsection
