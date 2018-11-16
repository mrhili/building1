@extends('layouts.app')
@section('title')
تسجيل عضوية جديدة
@stop
@section('content')
<div class="about">
  <div class="container">
    <section class="title-section">
      <h1 class="title-header text-center" title="تسجيل العضوية">تسجيل العضوية</h1>
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
      <h3>مميزات تسجيلك معا</h3>
      <p>بلا بلا بلا</p>

            {!! Form::open([
                'route' => ['register'],
                'class'=> 'form-horizontal',
                'role' => 'form',
                'method' => 'POST',
            ]) !!}


            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">الإسم</label>

                <div class="col-md-6">
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'required' => true ,  'autofocus' => true ]) !!}

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">العوا الإلكتروني</label>

                <div class="col-md-6">
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'required' => true ]) !!}

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                <label for="tel" class="col-md-4 control-label"> رقم الهاتف</label>

                <div class="col-md-6">
                    {!! Form::tel('tel', old('tel'), ['class' => 'form-control', 'required' => true ]) !!}

                    @if ($errors->has('tel'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tel') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">كلمة المرور</label>

                <div class="col-md-6">
                    {!! Form::password('password', ['class' => 'form-control', 'required' => true ]) !!}

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            {{--
            @if( Auth::user()->admin == 1)
            <div class="form-group{{ $errors->has('admin') ? ' has-error' : '' }}">
                <label for="admin" class="col-md-4 control-label">الإدارة</label>

                <div class="col-md-6">
                    {!! Form::number('admin', ['class' => 'form-control', 'min' => '0', 'max' => '1', 'required' => true ]) !!}

                    @if ($errors->has('admin'))
                        <span class="help-block">
                            <strong>{{ $errors->first('admin') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            @endif
            --}}


            <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label">تأكيد كلمة المرور</label>

                <div class="col-md-6">
                    {!! Form::password('password_confirmation', null, ['class' => 'form-control', 'required' => true ]) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary btn-block">
                        التسجيل
                    </button>
                </div>
            </div>
        </form>

    </div>
  </div>
</div>

@endsection
