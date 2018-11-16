@extends('layouts.app')
@section('title')
مرحبا بك
@stop


@section('content')


{{-- DISPLAY --}}

<div class="row">
  <div class="">

    <div id="mainCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators no-bottom">
        <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#mainCarousel" data-slide-to="1"></li>
        <li data-target="#mainCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="http://www.totalprop.co.uk/wp-content/uploads/2014/01/New-Slide17-1400x500.jpg" class="img-responsive" alt="...">
          <div class="carousel-caption">
            <h3>...</h3>
            <p>...</p>
          </div>
        </div>

        <div class="item">
          <img src="http://search3.onechirp.com/wp-content/uploads/2015/10/maxresdefault-1920x700-1400x500.jpg" class="img-responsive" alt="...">
          <div class="carousel-caption">
            <h3>...</h3>
            <p>...</p>
          </div>
        </div>

        <div class="item">
          <img src="http://www.invest-realestate-florida.com/wp-content/uploads/2016/01/HOUSE-EXTERIOR-Website-Header-1400x500.png" class="img-responsive" alt="...">
          <div class="carousel-caption">
            <h3>...</h3>
            <p>...</p>
          </div>
        </div>

      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#mainCarousel" role="button" data-slide="prev">
        <span>}</span>
        <span class="sr-only">السابقة</span>
      </a>
      <a class="right carousel-control" href="#mainCarousel" role="button" data-slide="next">
        <span>{</span>
        <span class="sr-only">اللاحقة</span>
      </a>
    </div>



  <div class="clearfix"></div>
  </div>
</div>










<div class="banner relative text-center">
    <div class="layer">
      <div class="container">

        <div class="banner-info  divisionIndex">

        <h1 title="{{ getSetting( 'site-name' ) }}">{{ getSetting( 'site-name' ) }}</h1>
        <h3>{{ getSetting( 'description' ) }}</h3>



    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn yellow-btn btn-circle"><i class="fa fa-i-cursor" aria-hidden="true"></i></a>
                <p>الإسم</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle"><i class="fa fa-usd" aria-hidden="true"></i></a>
                <p>الثمن</p>
            </div>

            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle"><i class="fa fa-gear" aria-hidden="true"></i></a>
                <p> حالة العقار</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-default btn-circle"><i class="fa fa-space-shuttle" aria-hidden="true"></i></a>
                <p>نوع البيع</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-5" type="button" class="btn btn-default btn-circle"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                <p>مساحة العقار</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-6" type="button" class="btn btn-default btn-circle"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                <p>مكان التواجد</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-7" type="button" class="btn btn-default btn-circle"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                <p>نوع العقار</p>
            </div>


            <div class="stepwizard-step">
                <a href="#step-8" type="button" class="btn btn-default btn-circle"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                <p>عدد الغرف</p>
            </div>

            <div class="stepwizard-step">
                <a href="#step-9" type="button" class="btn btn-default btn-circle"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                <p>نوع الإشهار</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-10" type="button" class="btn btn-default btn-circle"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                <p>معلومات إضافية</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-11" type="button" class="btn btn-default btn-circle"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                <p>بحت</p>
            </div>
        </div>
    </div>
                {!! Form::open(['route' => 'search', 'role' => 'form']) !!}

                              {{ csrf_field() }}
                    <div class="row setup-content" id="step-1">
                        <div class="col-xs-12">

                                <h3> الإسم</h3>

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="control-label">الإسم</label>
                                            {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'إسم العقار' ]) !!}
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif


                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <button class="btn btn-primary orange-circle-button nextBtn" type="button">تعمق<br />في البحث<br /><span class="orange-circle-greater-than">></span></button>

                                </div>


                        </div>
                    </div>


                    <div class="row setup-content" id="step-2">
                        <div class="col-xs-12">

                                <h3> الثمن</h3>



                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="control-label">ثمن: إبتداءا من</label>
                                        {!! Form::number('priceFrom', old('priceFrom'), ['class' => 'form-control', 'placeholder' => 'ثمن: إبتداءا من']) !!}
                                        @if ($errors->has('priceFrom'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('priceFrom') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="control-label">ثمن: أقل من</label>
                                        {!! Form::number('priceTo', old('priceTo'), ['class' => 'form-control', 'placeholder' => 'ثمن: أقل من']) !!}
                                        @if ($errors->has('priceTo'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('priceTo') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <button class="btn btn-primary orange-circle-button nextBtn" type="button">تعمق<br />في البحث<br /><span class="orange-circle-greater-than">></span></button>

                                </div>

                        </div>
                    </div>

                    <div class="row setup-content" id="step-3">
                        <div class="col-xs-12">

                                <h3> حالة العقار</h3>

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="control-label">حالة العقار</label>
                                            {!! Form::select('state', buildingState( -1 ) , old('state') , ['class' => 'form-control select2R2', 'placeholder' =>  'حالة العقار' ] ) !!}

                                              @if ($errors->has('state'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('state') }}</strong>
                                                    </span>
                                              @endif


                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <button class="btn btn-primary orange-circle-button nextBtn" type="button">تعمق<br />في البحث<br /><span class="orange-circle-greater-than">></span></button>

                                </div>


                        </div>
                    </div>

                    <div class="row setup-content" id="step-4">
                        <div class="col-xs-12">

                                <h3> نوع البيع</h3>

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="control-label">نوع البيع</label>
                                            {!! Form::select('rent', buildingRent( -1 ) , old('rent') , ['class' => 'form-control select2R2', 'placeholder' =>  'حالة العقار' ] ) !!}

                                              @if ($errors->has('rent'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('rent') }}</strong>
                                                    </span>
                                              @endif


                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <button class="btn btn-primary orange-circle-button nextBtn" type="button">تعمق<br />في البحث<br /><span class="orange-circle-greater-than">></span></button>

                                </div>


                        </div>
                    </div>


                    <div class="row setup-content" id="step-5">
                        <div class="col-xs-12">

                                <h3> المساحة</h3>



                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="control-label">مساحة: إبتداءا من</label>
                                        {!! Form::number('squareFrom', old('squareFrom'), ['class' => 'form-control', 'placeholder' => 'مساحة: إبتداءا من']) !!}
                                        @if ($errors->has('squareFrom'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('squareFrom') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="control-label">مساحة: أقل من</label>
                                        {!! Form::number('squareTo', old('squareTo'), ['class' => 'form-control', 'placeholder' => 'مساحة: أقل من']) !!}
                                        @if ($errors->has('squareTo'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('squareTo') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <button class="btn btn-primary orange-circle-button nextBtn" type="button">تعمق<br />في البحث<br /><span class="orange-circle-greater-than">></span></button>

                                </div>

                        </div>
                    </div>


                    <div class="row setup-content" id="step-6">
                        <div class="col-xs-12">
                                <h3> مكان تواجد العقار</h3>

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="control-label"> مكان تواجد العقار</label>
                                            {!!
                                            \App\Area::attr(['name' => 'area_id', 'id' => 'area_id', 'class' => 'form-control select2R','size' => 20,'value' => old('area_id'), 'placeholder' => 'مكان تواجد العقار الميكانيكية'])
                                            ->selected( null )
                                            ->renderAsDropdown() !!}


                                            @if ($errors->has('area_id'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('area_id') }}</strong>
                                                </span>
                                            @endif


                                    </div>
                                    <div class="divisionIndex col-xs-12">

                                      <br/>

                                        <h3>أو </h3>

                                      <br/>

                                    </div>


                                    <h3> إحداتيات العرض</h3>

                                    <div class="col-md-12">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">خط العرض: إبتداءا من</label>

                                                {!! Form::number('latFrom', old('latFrom'), ['class' => 'form-control', 'placeholder' => 'خط العرض: إبتداءا من']) !!}

                                                @if ($errors->has('latFrom'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('latFrom') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">خط العرض: أقل إحداثية</label>

                                                {!! Form::number('latTo', old('latTo'), ['class' => 'form-control', 'placeholder' => 'خط العرض: أقل إحداثية']) !!}

                                                @if ($errors->has('latTo'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('latTo') }}</strong>
                                                    </span>
                                                @endif


                                            </div>
                                        </div>

                                    </div>


                                </div>


                                <div class="col-md-2">
                                    <button class="btn btn-primary orange-circle-button nextBtn" type="button">تعمق<br />في البحث<br /><span class="orange-circle-greater-than">></span></button>

                                </div>


                        </div>
                    </div>





                    <div class="row setup-content" id="step-7">
                        <div class="col-xs-12">

                                <h3> نوع العقار</h3>

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="control-label">نوع العقار</label>
                                            {!! Form::select('buildingType', buildingType( -1 ) , old('type') , ['class' => 'form-control select2R2', 'placeholder' =>  'نوع العقار' ] ) !!}

                                              @if ($errors->has('type'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('type') }}</strong>
                                                    </span>
                                              @endif


                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <button class="btn btn-primary orange-circle-button nextBtn" type="button">تعمق<br />في البحث<br /><span class="orange-circle-greater-than">></span></button>

                                </div>


                        </div>
                    </div>






                    <div class="row setup-content" id="step-8">
                        <div class="col-xs-12">

                                <h3> عدد الغرف</h3>



                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="control-label">عدد الغرف: إبتداءا من</label>
                                        {!! Form::number('roomNumberFrom', old('roomNumberFrom'), ['class' => 'form-control', 'placeholder' => 'عدد الغرف: إبتداءا من']) !!}
                                        @if ($errors->has('roomNumberFrom'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('roomNumberFrom') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="control-label">عدد الغرف: أقل من</label>
                                        {!! Form::number('roomNumberTo', old('roomNumberTo'), ['class' => 'form-control', 'placeholder' => 'عدد الغرف: أقل من']) !!}
                                        @if ($errors->has('roomNumberTo'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('roomNumberTo') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <button class="btn btn-primary orange-circle-button nextBtn" type="button">تعمق<br />في البحث<br /><span class="orange-circle-greater-than">></span></button>

                                </div>

                        </div>
                    </div>




                    <div class="row setup-content" id="step-9">
                        <div class="col-xs-12">

                                <h3> نوع الإشهار</h3>

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="control-label">نوع الإشهار</label>
                                            {!! Form::select('kind', buildingKind( -1 ) , old('kind') , ['class' => 'form-control select2R2', 'placeholder' =>  'نوع العقار' ] ) !!}

                                              @if ($errors->has('kind'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('kind') }}</strong>
                                                    </span>
                                              @endif


                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <button class="btn btn-primary orange-circle-button nextBtn" type="button">تعمق<br />في البحث<br /><span class="orange-circle-greater-than">></span></button>

                                </div>


                        </div>
                    </div>


                    <div class="row setup-content" id="step-10">
                        <div class="col-xs-12">
                                <h3> معلومات إضافية</h3>

                                <div class="col-md-10">

                                </div>


                                <div class="col-md-2">
                                    <button class="btn btn-primary orange-circle-button nextBtn" type="button">تعمق<br />في البحث<br /><span class="orange-circle-greater-than">></span></button>

                                </div>


                        </div>
                    </div>


                    <div class="row setup-content" id="step-11">
                        <div class="col-xs-12">
                                <h3> بحت</h3>
                                {!! Form::submit('بحث' , ['class' => 'btn orange-circle-button', 'name' => 'ok']) !!}


                        </div>
                    </div>
                {!! Form::close() !!}


           </div>
      </div>

      <hr class="style18" />
          <div class="divisionIndex">

            <h3>أو </h3>

          <br/>
          <a href="{{ route('buildings.add') }}" class="btn yellow-btn btn-lg" title="إضافة قطعة ميكانيكية">
          إضافة قطعة ميكانيكية
          <br />
          أو طلب قطعة مخصصة
          </a>
      </div>
  </div>

</div>

<div class="col-xs-12">

@if( count($t4) > 0 )

<h2 class="text-center">#هاشتاج</h2>

    <ul class="">

    @foreach($t4 as $tag)



   <!-- from the originale template -->

        <a href="{{ route('buildings.tag', $tag->name ) }}" title="{{ $tag->name }}">

            <li class="label label-primary displayInlineBlock margin0-5 marginBottomX">

                {{ $tag->name }}

            </li> <!-- cd-item -->
        </a>





    @endforeach

    </ul> <!-- cd-items -->

@endif

</div>

<?Php $easyLoop = compact('b4', 'demande') ;

$titleLoop = array( 'القطع المتوفرة للبيع', 'القطع المطلوبة للشراء' );

$loopCount = 0;
?>

@foreach($easyLoop as $b4 )

    <div class="col-xs-12">


    @if( count($b4) > 0 )

        <h2 class="text-center">{{ $titleLoop[ $loopCount ] }}</h2>


        <ul class="cd-items cd-container">

        @foreach($b4 as $builItem)

            @if( count( $builItem->pics->toarray() ) > 0 )

                <? $theFirstItemInArrayOfPic = 0; ?>

                @foreach(  $builItem->pics as $numberOfPic => $picture )

                    @if( $theFirstItemInArrayOfPic == 0 )


                        <li class="cd-item nonDeco">
                            <img src="{{ ifImg( $picture->name ) }}" class="effectS" alt="{{ $builItem->name }}" title="{{ $builItem->name }}">
                            <a href="#0" class="cd-trigger" data-id="{{ $builItem->id }}" data-img="{{ ifImg( $picture->name ) }}" title="{{ $builItem->name }}">نظرة سريعة</a>
                        </li> <!-- cd-item -->
                    @endif


                <? $theFirstItemInArrayOfPic++ ;?>

                @endforeach

                <? $theFirstItemInArrayOfPic = 0; ?>


            @else

            <li class="cd-item nonDeco">
                <img src="{{ ifImg( '' ) }}" class="effectS" alt="{{ $builItem->name }}" title="{{ $builItem->name }}">
                <a href="#0" class="cd-trigger" data-id="{{ $builItem->id }}" data-img="{{ ifImg( '' ) }}" title="{{ $builItem->name }}">نظرة سريعة</a>
            </li> <!-- cd-item -->

            @endif



            <li class="hide idIs{{ $builItem->id }}">

            <span class="name">{{ $builItem->name }}</span>

            <span class="price">{{ $builItem->price }}</span>

            <span class="state">{{ $builItem->state }}</span>

            <span class="rent">{{ buildingRent( $builItem->rent ) }}</span>

            <span class="square">{{ $builItem->square }}</span>

            <span class="type">{{ buildingType( $builItem->type ) }}</span>

            <span class="roomNumber">{{ $builItem->roomNumber }}</span>

            <span class="lang">{{ $builItem->lang }}</span>

            <span class="lat">{{ $builItem->lat }}</span>

            <span class="largDisc">{{ $builItem->largDisc }}</span>

            <span class="kind">{{ getThingName( $builItem->kind ) }}</span>

            <span class="created_at">{{ $builItem->created_at  }}</span>

            <span class="updated_at">{{ $builItem->updated_at  }}</span>

            <span class="user_id">{{ getUserName( $builItem->user_id ) }}</span>

            <span class="area_id">{{ getAreaName( $builItem->area_id ) }}</span>

            <span class="tel">{{  $builItem->tel  }}</span>





            </li>

        @endforeach

        </ul> <!-- cd-items -->
        <div class="text-center">
        @if( $b4 instanceof \Illuminate\Pagination\LengthAwarePaginator )
            {{ $b4->links() }}

        @endif
        </div>

    @endif
    </div>

    <?Php $loopCount++; ?>

@endforeach

    <div class="cd-quick-view row">
        <div class="cd-slider-wrapper col-xs-6">
            <ul class="cd-slider">
                <li class="selected nonDeco"><img src="" class="imgBOX" alt="" title=""></li>


            </ul> <!-- cd-slider -->

            <ul class="cd-slider-navigation">

                <li class="nonDeco"><a class="cd-next" href="#0">السابق</a></li>
                <li class="nonDeco"><a class="cd-prev" href="#0">التالي</a></li>

            </ul> <!-- cd-slider-navigation -->
        </div> <!-- cd-slider-wrapper -->

        <div class="cd-item-info overflow-yScroll col-xs-6">
            <h2 class="nameBOX"></h2>
            <h3 class="price priceBOX"></h3>
            <h3 class="price kindBox"></h3>

            <h5 class="price">حالة العقار : <span class="stateBox"></span></h5>
            <h5 class="price">نوع بيع لبعقار: <span class="rentBox"></span></h5>
            <h5 class="price">مساحة العقار: <span class="squareBox"></span></h5>
            <h5 class="price">نوع العقار: <span class="typeBox"></span></h5>
            <h5 class="price">حالة العقار: <span class="rentBOX"></span></h5>
            <h5 class="price">مكان العقار: <span class="areaBox"></span></h5>
            <h5 class="price">تاريخ النشر: <span class="created_atBOX"></span></h5>


            <ul class="cd-item-action">
                <li><a href="" class="idBOX"><button class="add-to-cart">نظرة شاملة</button></a></li>

            </ul> <!-- cd-item-action -->
        </div> <!-- cd-item-info -->
        <a href="#0" class="cd-close">إغلاق</a>
    </div> <!-- cd-quick-view -->

@stop






@section('scripting')

<script>
    $(".banner").css("background-image", "url( {{ ifImg( getSetting('slider-img') ) }} )");
</script>





@stop
