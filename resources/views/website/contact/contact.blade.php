@extends('layouts.app')
@section('title')
راسلنا
@stop


@section('content')




<section id="contact" class="container">


	<div class="section-content">
		<h1 class="section-header" title="راسلنا"><span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">راسلني يا صديقي</span> رسالتك تتبت وجودك .</h1>
	</div>
			<div class="contact-section">

				<div class="row bottomBorder">
					<div class="col-xs-12">
						<div class="col-md-5 text-center leftBorder">

							<p class="">
							العنوان: {{ getSetting('adress') }}
							<br />
							</p>

							<p class="">
							رقم الهاتف: {{ getSetting('mobile-number') }}
							<br />
							</p>
				
						</div>
						<div class="col-md-5 text-center">
							<p class="">
							البريد الإلكتروني: {{ getSetting('email') }}
							<br />
							</p>
							<p class="">
							إسم المدير: {{ getSetting('director-name') }}
							<br />
							</p>
						</div>

					</div>
				</div>


				<div class="row bottomBorder social text-center">


					    	
					    		<ul>
					                <li><a href="{{ 'https://facebook.com/'. getSetting('facebook') }}" target="_blank"><i class="fa fa-lg fa-facebook" rel="nofollow"></i></a></li>
					                <li><a href="{{ 'https://twitter.com/'. getSetting('twitter') }}" target="_blank"><i class="fa fa-lg fa-twitter" rel="nofollow"></i></a></li>
					                <li><a href="{{ 'https://plus.google.com/'. getSetting('google-plus') }}" target="_blank"><i class="fa fa-lg fa-google-plus" rel="nofollow"></i></a></li>
					                <li><a href="{{ 'https://youtube.com/'. getSetting('youtube') }}" target="_blank"><i class="fa fa-lg fa-youtube" rel="nofollow"></i></a></li>
					                <!--
					                <li><a href="{{ 'https://github.com/'. getSetting('github') }}" target="_blank"><i class="fa fa-lg fa-github" rel="nofollow"></i></a></li>
					                -->
					                <li><a href="{{ 'mailto:'. getSetting('email') }}" target="_blank"><i class="fa fa-lg fa-envelope" rel="nofollow"></i></a></li>
					                <li><a href="{{ 'https://paypal.com/'. getSetting('paypal') }}" target="_blank"><i class="fa fa-lg fa-paypal" rel="nofollow"></i></a></li>
					                <!--
					                <li><a href="#"><i class="fa fa-lg fa-google-plus"></i></a></li>
					                
					                <li><a href="#"><i class="fa fa-lg fa-pinterest"></i></a></li>
					                <li><a href="#"><i class="fa fa-lg fa-linkedin"></i></a></li>
					                <li><a href="#"><i class="fa fa-lg fa-flickr"></i></a></li>
					                <li><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
					                <li><a href="#"><i class="fa fa-lg fa-vimeo-square"></i></a></li>
					                <li><a href="#"><i class="fa fa-lg fa-stack-overflow"></i></a></li>
					                <li><a href="#"><i class="fa fa-lg fa-dropbox"></i></a></li>
					                <li><a href="#"><i class="fa fa-lg fa-tumblr"></i></a></li>
					                <li><a href="#"><i class="fa fa-lg fa-dribbble"></i></a></li>
					                <li><a href="#"><i class="fa fa-lg fa-skype"></i></a></li>
					                <li><a href="#"><i class="fa fa-lg fa-stack-exchange"></i></a></li>
					                
					                <li><a href="#"><i class="fa fa-lg fa-xing"></i></a></li>
					                <li><a href="#"><i class="fa fa-lg fa-rss"></i></a></li>
					                <li><a href="#"><i class="fa fa-lg fa-foursquare"></i></a></li>
					                <li><a href="#"><i class="fa fa-lg fa-youtube-play"></i></a></li>
					                -->
					            </ul>
				</div>



									{!! Form::open([
			            'route' => 'contact.store',
			            'class'=> 'form-horizontal',
			            'role' => 'form',
			            'method' => 'post',
		            ]) !!}

		            <div class="row text-center">
					<div class="col-md-5 form-line">




		            	{{ csrf_field() }}


		            	{!! Form::hidden('from', 'website' ) !!}



						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						    

						    <div class="col-xs-12">


						        {!! Form::text('name', old('name') , ['class' => 'form-control', 'placeholder' => 'الإسم', 'required' => true] ) !!}

						        @if ($errors->has('name'))
						            <span class="help-block">
						                <strong>{{ $errors->first('name') }}</strong>
						            </span>
						        @endif
						    </div>
						</div>


				  		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

						    <div class="col-xs-12">


						        {!! Form::email('email', old('email') , ['class' => 'form-control' , 'placeholder' => ' البريد الإلكتروني', 'required' => true] ) !!}

						        @if ($errors->has('email'))
						            <span class="help-block">
						                <strong>{{ $errors->first('email') }}</strong>
						            </span>
						        @endif
						    </div>
						</div>


						<div class="form-group{{ $errors->has('phoneNumber') ? ' has-error' : '' }}">
						    

						    <div class="col-xs-12">


						        {!! Form::tel('phoneNumber', old('phoneNumber') , ['class' => 'form-control', 'placeholder' => ' رقم الهاتف', 'required' => true] ) !!}

						        @if ($errors->has('phoneNumber'))
						            <span class="help-block">
						                <strong>{{ $errors->first('phoneNumber') }}</strong>
						            </span>
						        @endif
						    </div>
						</div>

			  		</div>


			  		<div class="offset-md-1 col-md-5">


					<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
					    

					    
					    {!! Form::label('type', 'طريقة بيع العقار', ['id' => 'type','class' => 'col-xs-6 control-label']) !!}
					    <div class="col-xs-6">


					        {!! Form::select('type', contactType( -1 ) , old('type') , ['class' => 'form-control select2R', 'required' => true] ) !!}

					        @if ($errors->has('type'))
					            <span class="help-block">
					                <strong>{{ $errors->first('type') }}</strong>
					            </span>
					        @endif
					    </div>
					</div>

					<div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
						    

						    <div class="col-xs-12">


						        {!! Form::text('subject', old('subject') , ['class' => 'form-control', 'placeholder' => ' الموضوع', 'required' => true] ) !!}

						        @if ($errors->has('subject'))
						            <span class="help-block">
						                <strong>{{ $errors->first('subject') }}</strong>
						            </span>
						        @endif
						    </div>
						</div>

					<div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
						    

						    <div class="col-xs-12">


						        {!! Form::textarea('message', old('message') , ['class' => 'form-control', 'placeholder' => ' رقم الهاتف', 'required' => true] ) !!}

						        @if ($errors->has('message'))
						            <span class="help-block">
						                <strong>{{ $errors->first('message') }}</strong>
						            </span>
						        @endif
						    </div>
						</div>

			  			<div>



			  				<button type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  أرسل <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
			  			</div>


			  		
			  			
					</div>

				</div>


				{!! Form::close() !!}

				<div>
					<p class="text-center alert yellowAlert">
					إذا وجدت مشاكل على هذه التقنية المرجو إستخدام هذا <a href="mailto:{{ getSetting('email') }}">الرابط</a>
					</p>
				</div>



			</div>

	{{--<div id="map" style="width:100%;height:300px"></div>--}}

</section>




@stop
@section('scripting')



    <script>
  function myMap() {
    var myCenter = new google.maps.LatLng({{ getSetting( 'lat' ) }},{{ getSetting( 'lng' ) }});
    var mapCanvas = document.getElementById("map");
    var mapOptions = {center: myCenter, zoom: 5};
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({position:myCenter});
    marker.setMap(map);
  }
  </script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfe6lnGvpoO0itVk2Doz_9xPweZ5JnUaI&callback=myMap"></script>


<script>
  
  $('.select2R').select2({
    dir: 'rtl'
  });
</script>


@stop
