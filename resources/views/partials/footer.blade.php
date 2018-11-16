

<footer class="footer">
{{--
<div class="row myFooterGreen">
  <div class="treeview col-md-4">
  <h3 class="text-center">شجرة القطع الميكانيكية</h3>
  <hr />
    {!!
        
        \App\Thing::customUrl('pieces/{slug}')->ulAttr(['class'=> '', 'role' => 'menu'])->renderAsHtml()

    !!}
  </div>
  <div class="treeview col-md-4">
  <h3 class="text-center">شجرة المركبات</h3>
  <hr class="style18" />
  {!!
                            
        \App\Car::customUrl('cars/{slug}')->ulAttr(['class'=> '', 'role' => 'menu'])->renderAsHtml()

    !!}
  </div>
  <div class="treeview col-md-4">
  <h3 class="text-center">شجرة المناطق</h3>
  <hr />
  {!!
                            
        \App\Area::customUrl('places/{slug}')->ulAttr(['class'=> '', 'role' => 'menu'])->renderAsHtml()

    !!}
  </div>


  <div class="treeview col-md-4">
  <h3 class="text-center">حالة القطعة</h3>
  <hr class="style18" />

                            
        <ul class="{{ currentClass('search') }}" role="menu">
                            @foreach( thingRent( -1 ) as $trKey => $tR )
                            <li>
                                <a href="{{ route('search') }}" title="{{ thingRent( $trKey ) }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('formRent{{ $trKey }}').submit();">
                                    {{ thingRent( $trKey ) }}
                                </a>
                                
                                <form id="formRent{{ $trKey }}" action="{{ route('search') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}

                                    

                                    {!! Form::hidden('rent', $trKey ) !!}

                                    
                                </form>
                                
                            </li>
                            @endforeach
                        </ul>


  </div>

  <div class="treeview col-md-4">
  <h3 class="text-center">موديل المركبة</h3>
  <hr />

                            
                        <ul class="{{ currentClass('search') }}" role="menu">
                            @foreach( carModel( -1 ) as $cmKey => $cM )
                            <li>
                                <a href="{{ route('search') }}" title="{{ carModel( $cmKey ) }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('formModel{{ $cmKey }}').submit();">
                                    {{ carModel( $cmKey ) }}
                                </a>
                                
                                <form id="formModel{{ $cmKey }}" action="{{ route('search') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}

                                    

                                    {!! Form::hidden('carModel', $cmKey ) !!}

                                    
                                </form>
                                
                            </li>
                            @endforeach
                        </ul>


  </div>

  <div class="treeview col-md-4">
  <h3 class="text-center">وقود المركبة</h3>
  <hr class="style18" />

                            
        <ul class="{{ currentClass('search') }}" role="menu">
            @foreach( carCarb( -1 ) as $ccKey => $cC )
              <li>
                  <a href="{{ route('search') }}" title="{{ carCarb( $ccKey ) }}"
                      onclick="event.preventDefault();
                               document.getElementById('formCarb{{ $ccKey }}').submit();">
                      {{ carCarb( $ccKey ) }}
                  </a>
                  
                  <form id="formCarb{Carb{ $ccKey }}" action="{{ route('search') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}

                      

                      {!! Form::hidden('carCarb', $ccKey ) !!}

                      
                  </form>
                  
              </li>
            @endforeach
        </ul>


  </div>




</div>

--}}
  <div class="footer_bottom">

    <div class="follow-us">
       <a class="fa fa-facebook social-icon" href="https://facebook.com/{{ getSetting( 'facebook' ) }}" rel="nofollow"> </a> 
      <a class="fa fa-twitter social-icon" href="https://twitter.com/{{ getSetting( 'twitter' ) }}" rel="nofollow"> </a> 
      <a class="fa fa-youtube social-icon" href="https://youtube.com/{{ getSetting( 'youtube' ) }}" rel="nofollow"> </a> 
      <a class="fa fa-google-plus social-icon" href="https://google.com/{{ getSetting( 'google-plus' ) }}" rel="nofollow"> </a> 
    </div>
    
    <div class="copy">
      <p>أنشئ هذا الموقع من طرف <a href="https://idda-tech.000webhotapp.com/" title="العدة التقنية" rel="nofollow" target="_blank">العدة التقنية</a></p>
    </div>
  </div>
</footer>