<div class="profile-sidebar">
        <!-- SIDEBAR USERPIC -->
        @if( Auth::check() )
        <div class="profile-userpic">
          <img src="{{ 

                        route('identicon::main', [
                            getUserEmail( Auth::id() )
                        ])

           }}" class="img-responsive" alt="صورة المستعمل">
        </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        
        <div class="profile-usertitle">
          <div class="profile-usertitle-name">
            {{ getUser( Auth::id() ) }}
          </div>

          <div class="profile-usertitle-job">
            {{ getUserEmail( Auth::id() ) }}
          </div>
        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        
        <div class="profile-userbuttons">
          {{--<button type="button" class="btn btn-danger btn-sm">Follow</button>--}}
          <a href="{{ route( 'user.my-page' ) }}" class="btn btn-success btn-sm" title=" صفحتي"> صفحتي</a>
        </div>
        @else

         <div class="profile-usertitle">
          <div class="profile-usertitle-name">
            زائر
          </div>

        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        
        <div class="profile-userbuttons">
          <a href="{{ route('login') }}" class="btn yellow-btn btn-sm" title="تسجيل"> دخول</a>
          <a href="{{ route('register') }}" class="btn btn-success btn-sm" title="تسجيل"> تسجيل</a>
        </div>


        @endif
        <!-- END SIDEBAR BUTTONS -->
        <!-- SIDEBAR MENU -->
        <div class="profile-usermenu">

          @if( Auth::check() )

          <ul class="inDeco">

            <li class="{{ activeClass('buildings.add') }}"><a href="{{ route( 'buildings.add' ) }}" title=" إضافة قطعة جديدية"> إضافة قطعة جديدية</a></li>

            <li> التقديم أو البيع
              <ul>


                        <li class=""> المفعلة
                            <ul>
                              <li class="{{ activeClass('user.my-buildings-offer' ) }}"><a href="{{ route( 'user.my-buildings-offer' ) }}" title="قطعي المفعلة"> قطعي المفعلة</a></li>

                            </ul>
                            
                        </li>

                        <li class=""> التي في الإنتضار
                            <ul>
                              <li class="{{ activeClass('user.my-buildings-in-wait-offer' ) }}"><a href="{{ route( 'user.my-buildings-in-wait-offer' ) }}" title="قطعي الغير مفعلة"> قطعي الغير مفعلة</a></li>

                            </ul>
                            
                        </li>

                        <li class=""> المفضلة
                            <ul>
                              <li class="{{ activeClass('user.my-favorites-offer' ) }}"><a href="{{ route( 'user.my-favorites-offer' ) }}" title=" قطعي المفعلة"> قطعي المفضلة</a></li>

                            </ul>
                            
                        </li>


              </ul>
            </li>

            <li> الطلب أو الشراء
              <ul>
                
                
                  <li class=""> المفعلة
                      <ul>
                        <li class="{{ activeClass('user.my-buildings-demande' ) }}"><a href="{{ route( 'user.my-buildings-demande' ) }}" title="قطعي المفعلة"> قطعي المفعلة</a></li>

                      </ul>
                      
                  </li>

                  <li class=""> التي في الإنتضار
                      <ul>
                        <li class="{{ activeClass('user.my-buildings-in-wait-demande' ) }}"><a href="{{ route( 'user.my-buildings-in-wait-demande' ) }}" title="قطعي الغير مفعلة"> قطعي الغير مفعلة</a></li>

                      </ul>
                      
                  </li>

                  <li class=""> المفضلة
                      <ul>
                        <li class="{{ activeClass('user.my-favorites-demande' ) }}"><a href="{{ route( 'user.my-favorites-demande' ) }}" title="قطعي المفضلة"> قطعي المفضلة</a></li>

                      </ul>
                      
                  </li>

                  

              </ul>

            </li>
            <li class="{{ activeClass('user.my-settings') }}"><a href="{{ route( 'user.my-settings' ) }}" title=" تعديل المعلومات الشخصية"> تعديل المعلومات الشخصية</a></li>




          </ul>

          @endif



          

@isset( $fRequest['name'] )

    @if( array_key_exists ( 'name' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $nm = $fRequest['name']; ?>

    @else

      <?Php $nm = old('name'); ?>

    @endif

@else

  <?Php $nm = old('name'); ?>

@endisset

@empty( $fRequest  )


    
    <?Php $nm = old('name'); ?>


@endempty  



@isset( $fRequest['priceFrom'] )

    @if( array_key_exists ( 'priceFrom' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $pF = $fRequest['priceFrom']; ?>

    @else

      <?Php $pF = old('priceFrom'); ?>

    @endif

@else

<?Php $pF = old('priceFrom'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $pF = old('priceFrom'); ?>

@endempty  

@isset( $fRequest['priceTo'] )


    @if( array_key_exists ( 'priceTo' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $pT = $fRequest['priceTo']; ?>

    @else

      <?Php $pT = old('priceTo'); ?>

    @endif

@else

<?Php $pT = old('priceTo'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $pT = old('priceTo'); ?>

@endempty  



@isset( $fRequest['state'] )

    @if( array_key_exists ( 'state' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $s = $fRequest['state']; ?>

    @else

      <?Php $s = old('state'); ?>

    @endif

@else

<?Php $s = old('state'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $s = old('state'); ?>

@endempty  





@isset( $fRequest['rent'] )

    @if( array_key_exists ( 'rent' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $r = $fRequest['rent']; ?>

    @else

      <?Php $r = old('rent'); ?>

    @endif

@else

<?Php $r = old('rent'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $r = old('rent'); ?>

@endempty  

@isset( $fRequest['squareFrom'] )

    @if( array_key_exists ( 'squareFrom' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $sF = $fRequest['squareFrom']; ?>

    @else

      <?Php $sF = old('squareFrom'); ?>


    @endif

@else

<?Php $sF = old('squareFrom'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $sF = old('squareFrom'); ?>

@endempty  

@isset( $fRequest['squareTo'] )


    @if( array_key_exists ( 'squareTo' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $sT = $fRequest['squareTo']; ?>

    @else

      <?Php $sT = old('squareTo'); ?>

    @endif

@else

<?Php $sT = old('squareTo'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $sT = old('squareTo'); ?>

@endempty  


@isset( $fRequest['area_id'] )

    @if( array_key_exists ( 'area_id' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $aS = $fRequest['area_id']; ?>

    @else

      <?Php $aS = null; ?>

    @endif

@else

<?Php $aS = old('area_id'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $aS = null; ?>

@endempty  



@isset( $fRequest['latFrom'] )


    @if( array_key_exists ( 'latFrom' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $lF = $fRequest['latFrom']; ?>

    @else

      <?Php $lF = old('latFrom'); ?>

    @endif

@else

<?Php $lF = old('latFrom'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $lF = old('latFrom'); ?>

@endempty  

@isset( $fRequest['latTo'] )

    @if( array_key_exists ( 'latTo' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $lT = $fRequest['latTo']; ?>

    @else

      <?Php $lT = old('latTo'); ?>

    @endif

@else

<?Php $lT = old('latTo'); ?>


@endisset






@isset( $fRequest['langFrom'] )

    @if( array_key_exists ( 'langFrom' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $lF = $fRequest['langFrom']; ?>

    @else

      <?Php $lF = old('langFrom'); ?>

    @endif

@else

<?Php $lF = old('lanFrom'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $lF = old('langFrom'); ?>

@endempty  

@isset( $fRequest['langTo'] )


    @if( array_key_exists ( 'langTo' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $lT = $fRequest['langTo']; ?>

    @else

      <?Php $lT = old('langTo'); ?>

    @endif

@else

<?Php $lT = old('langTo'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $lT = old('langTo'); ?>

@endempty  


@isset( $fRequest['type'] )

    @if( array_key_exists ( 'type' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $t = $fRequest['type']; ?>

    @else

      <?Php $t = old('type'); ?>

    @endif

@else

<?Php $t = old('type'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $t = old('type'); ?>

@endempty


@isset( $fRequest['roomNumberFrom'] )

    @if( array_key_exists ( 'roomNumberFrom' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $rF = $fRequest['roomNumberFrom']; ?>

    @else

      <?Php $rF = old('roomNumberFrom'); ?>

    @endif

@else

<?Php $rF = old('roomNumberFrom'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $rF = old('roomNumberFrom'); ?>

@endempty  

@isset( $fRequest['roomNumberTo'] )


    @if( array_key_exists ( 'roomNumberTo' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $rT = $fRequest['roomNumberTo']; ?>

    @else

      <?Php $rT = old('roomNumberTo'); ?>

    @endif

@else

<?Php $rT = old('roomNumberTo'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $rT = old('roomNumberTo'); ?>

@endempty  


@isset( $fRequest['kind'] )

    @if( array_key_exists ( 'kind' , $fRequest ) && Route::currentRouteName() == 'search' )

      <?Php $k = $fRequest['kind']; ?>

    @else

      <?Php $k = old('kind'); ?>

    @endif


@else

<?Php $k = old('kind'); ?>

@endisset

@empty( $fRequest  )
    
    <?Php $k = old('kind'); ?>

@endempty









          {!! Form::open(['route' => 'search']) !!}

          {{ csrf_field() }}
          

            <ul class="inDeco" id="buttonDisplay">
              <li id="plusButton"><i class="fa fa-plus"></i></li>
              <li id="minusButton"><i class="fa fa-minus"></i></li>
            </ul>

            <ul id="displayed" class="inDeco">
              
              <li class="">
                {!! Form::text('name', $nm, ['class' => 'form-control', 'placeholder' => 'إسم القطعة' ]) !!}
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
              </li>



              <li class="">
                {!! Form::number('priceFrom', $pF, ['class' => 'form-control', 'placeholder' => 'ثمن: إبتداءا من']) !!}
                {!! Form::number('priceTo', $pT, ['class' => 'form-control', 'placeholder' => 'ثمن: أقل من']) !!}

                @if ($errors->has('priceFrom'))
                    <span class="help-block">
                        <strong>{{ $errors->first('priceFrom') }}</strong>
                    </span>
                @endif

                @if ($errors->has('priceTo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('priceTo') }}</strong>
                    </span>
                @endif
              </li>

              <li class="">

              
              {!! Form::select('state', buildingState( -1 ) , $s , ['class' => 'form-control select2R2', 'placeholder' =>  'حالة العقار' ] ) !!}

              @if ($errors->has('state'))
                    <span class="help-block">
                        <strong>{{ $errors->first('state') }}</strong>
                    </span>
              @endif

              </li>



              <li class="">

              
              {!! Form::select('rent', buildingRent( -1 ) , $r , ['class' => 'form-control select2R2', 'placeholder' =>  'نوع بيع العقار' ] ) !!}

              @if ($errors->has('rent'))
                    <span class="help-block">
                        <strong>{{ $errors->first('rent') }}</strong>
                    </span>
              @endif

              </li>



              <li class="">
                {!!
                \App\Area::attr(['name' => 'area_id', 'id' => 'area_id', 'class' => 'form-control areaForm select2R', 'style' => 'width: 100%','size' => 20,'value' => old('area_id'), 'placeholder' => 'مكان تواجد القطعة الميكانيكية'])
                ->selected( $aS )
                ->renderAsDropdown() !!}


                @if ($errors->has('area_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('area_id') }}</strong>
                    </span>
                @endif

              </li>


              <li class="active">
                {!! Form::number('squareFrom', $sF, ['class' => 'form-control', 'placeholder' => 'مساحة العقار: إبتداءا من']) !!}
                {!! Form::number('squareTo', $sT, ['class' => 'form-control', 'placeholder' => 'مساحة العقار: أقل إحداثية']) !!}

                @if ($errors->has('squareFrom'))
                    <span class="help-block">
                        <strong>{{ $errors->first('squareFrom') }}</strong>
                    </span>
                @endif

                @if ($errors->has('squareTo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('squareTo') }}</strong>
                    </span>
                @endif
              </li>








              <li class="active">
                {!! Form::number('langFrom', $lF, ['class' => 'form-control', 'placeholder' => 'خط الطول: إبتداءا من']) !!}
                {!! Form::number('langTo', $lT, ['class' => 'form-control', 'placeholder' => 'خط الطول: أقل إحداثية']) !!}

                @if ($errors->has('langFrom'))
                    <span class="help-block">
                        <strong>{{ $errors->first('langFrom') }}</strong>
                    </span>
                @endif

                @if ($errors->has('langTo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('langTo') }}</strong>
                    </span>
                @endif
              </li>

              <li class="">

              
              {!! Form::select('type', buildingType( -1 ) , $t , ['class' => 'form-control select2R2', 'placeholder' =>  'نوع العقار' ] ) !!}

              @if ($errors->has('type'))
                    <span class="help-block">
                        <strong>{{ $errors->first('type') }}</strong>
                    </span>
              @endif

              </li>


              <li class="active">
                {!! Form::number('roomNumberFrom', $rF, ['class' => 'form-control', 'placeholder' => 'عدد الغرف: إبتداءا من']) !!}
                {!! Form::number('roomNumberTo', $rT, ['class' => 'form-control', 'placeholder' => 'عدد الغرف: أقل إحداثية']) !!}

                @if ($errors->has('roomNumberFrom'))
                    <span class="help-block">
                        <strong>{{ $errors->first('roomNumberFrom') }}</strong>
                    </span>
                @endif

                @if ($errors->has('roomNumberTo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('roomNumberTo') }}</strong>
                    </span>
                @endif
              </li>


              <li class="">

              
              {!! Form::select('kind', buildingKind( -1 ) , $k , ['class' => 'form-control select2R2', 'placeholder' =>  'نوع الإشهار' ] ) !!}

              @if ($errors->has('kind'))
                    <span class="help-block">
                        <strong>{{ $errors->first('kind') }}</strong>
                    </span>
              @endif

              </li>


              <li>
              {!! Form::submit('إبحث' , ['class' => 'btn btn-primary btn-block', 'name' => 'ok', 'title' => 'إبحث']) !!}
              </li>


          </ul>

          {!! Form::close() !!}

        </div>
        <!-- END MENU -->
      </div>