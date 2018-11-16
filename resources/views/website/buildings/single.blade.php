@extends('layouts.app')
@section('title')
{{ $b4->name }}
@stop


@section('metaTags')

              @if( $b4->tags->count() )

              <?php $tagArr = array(); ?>



                @foreach( $b4->tags->toarray() as $key4Tag => $tag )

                  <?php array_push($tagArr, $tag["name"]);  ?>
                
                @endforeach

                <meta name='keywords' content='{{ implode(", ", $tagArr) }}'>
                <meta name='dc.keywords' CONTENT='{{ implode(", ", $tagArr) }}'>

              @else

                <meta name='keywords' content='{{ getSetting( "tags" ) }}'>
                <meta name='dc.keywords' CONTENT='{{ getSetting( "tags" ) }}'>

              @endif

              <meta name='description' content='{{ $b4->largDisc }}'>
              <meta property='og:description' content='{{ getSetting( "description" ) }}'/>
              <meta name='twitter:description' content='{{ getSetting( "description" ) }}' />
              <meta name=dc.description CONTENT='{{ getSetting( "description" ) }}'>

              <meta name='subject' content='{{ $b4->name }}'>
              <meta name='dc.subject' CONTENT="ميكانيك غيارات مركبات">


@stop


@section('content')


{{-- DISPLAY ONE --}}


<div class="container">
  <div class="row">

  

  <div class="col-md-3">

    @include('partials.asideWebsite')

  </div>



    <div class="card col-md-9">
      <div class="container-fliud">
      <div class="row">

        @if( Auth::check() )

            @if( Auth::user()->id == 1 || Auth::user()->id == $b4->user_id )

            <div class="col-xs-12 text-center">

              <a href="{{ route('user.update-buildings-in-wait', $b4->id ) }}" class="btn btn-sm btn-info"> تحديث</a>
              <a href="{{ route('user.destroy-buildings-in-wait', $b4->id ) }}" class="btn btn-sm btn-danger"> حذف</a>

            </div>

            @endif

        @endif

      </div>

        <div class="wrapper row">

          
          <div class="details col-md-6">
            <h1 class="product-title text-center" title="{{ $b4->name }}">{{ $b4->name }}</h1>
            <div class="rating">
              {{--
              <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <span class="review-no">41 reviews</span>
              --}}
            </div>
            
            <h4 class="price">الثمن: <span>{{ $b4->price }} درهم</span></h4>
            <h4 class="price">حالة العقار: <span>{{  buildingState( $b4->state )  }}</span></h4>
            <h4 class="price">حالة العقار: <span>{{  buildingRent( $b4->rent )  }}</span></h4>
            <h4 class="price">عدد غرف العقار: <span>{{  $b4->square   }}</span></h4>
            <h4 class="price">نوع العقار: <span>{{  buildingType( $b4->type )  }}</span></h4>
            <h4 class="price">نوع العقار: <span>{{  $b4->roomNumber   }}</span></h4>
            <h4 class="price">نوع العقار: <span>{{  $b4->kind   }}</span></h4>
            <h4 class="price">نوع العقار: <span>{{  $b4->tel   }}</span></h4>
            <h4 class="price">المنطقة: <span>{{ getAreaName( $b4->area_id ) }}</span></h4>


            
            <h4 class="price">تاريخ النشر: <span>{{ $b4->created_at }}</span></h4>
            <h4 class="price">تاريخ التحديث: <span>{{ $b4->updated_at }}</span></h4>
            <h4 class="price">إسم الناشر: <span>{{ getUser( $b4->user_id )  }}</span></h4>
            
            <p class="product-description">
              <h4> عن القطعة: </h4>
              {{ $b4->largDisc }}
            </p>
            <p class="product-description row">
              <h4> كلمات دلالية: </h4>
              <ul>

              @if( $b4->tags->count() )
                @foreach( $b4->tags as $tag )

                  <a href="{{ route('buildings.tag', $tag->name ) }}" title="{{ $tag->name }}">
                      
                      <li class="label label-primary displayInlineBlock margin0-5">

                          {{ $tag->name }}

                      </li> <!-- cd-item -->
                  </a>
                
                @endforeach
              @endif

              </ul>

              {{--
              @foreach ($b4->likes as $userHooLike)
                  {{ $userHooLike->name }} likes this !
              @endforeach

              --}}

              
            </p>
            
            {{--
            <div class="action">
              <button class="add-to-cart btn btn-default" type="button">add to cart</button>
              <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
            </div>
            --}}
          </div>
          <div class="preview col-md-6">
            
            <div>

            <div id="links" class="preview-pic tab-content">

              @foreach( $b4->pics as $numberOfPic => $picture )

                    <a class="tab-pane {{ $numberOfPic == 0 ? 'active': '' }}" id="link{{ $numberOfPic }}" href="{{ ifImg( $picture->name ) }}" title="{{ $b4->name }}">

                        <img src="{{ ifImg( $picture->name ) }}" class="img-responsive" alt="{{ $b4->name }}" title="{{ $b4->name }}" />

                    </a>

              @endforeach

            </div>
              
              
              {{--
              <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
              <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
              <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
              <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
              --}}
            </div>
            <ul class="preview-thumbnail nav nav-tabs">

              @foreach( $b4->pics as $numberOfPic => $picture )

              <li class="{{ $numberOfPic == 0 ? 'active': '' }}">
                <a data-target="#link{{ $numberOfPic }}" data-toggle="tab"><img src="{{ ifImg( $picture->name ) }}" class="img-responsive" alt="{{ $b4->name }}" title="{{ $b4->name }}" /></a>
              </li>

              @endforeach
              {{--
              <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
              <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
              <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
              <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
              --}}
            </ul>
              <div class="text-center">

                      <a id="liked" href="{{ route('buildings.fav', $b4->id) }}" title="لا يعجبني بعد"><i  class="fa fa-heart-o fa-3x"> لا يعجبني بعد</i></a>

                      <a id="no-liked" href="{{ route('buildings.unFav', $b4->id) }}" title=" يعجبني"><i  class="fa fa-heart fa-3x"> يعجبني</i></a>

              </div>
            
          </div>

        </div>
        <hr />
        <div class="col-xs-12">
          <div id="map" style="width:100%;height:500px"></div>
        </div>
        <div class="col-xs-12">
          <div id="disqus_thread"></div>
          <script>

            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://cars-local.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
          </script>
          <noscript>المرجو إتاحة الجافاسكريبت <a href="https://disqus.com/?ref_noscript" title="disqus" rel="nofollow">التعليقات من ديسكاس.</a></noscript>
        </div>

        
      </div>
    </div>




    <div class="col-xs-12">
      
      @if( count($same) > 0 )

        @foreach($same as $builItem)

        <div class="col-sm-4">

          <div class="productbox relative">
            <div class="producttitle text-center">{{ $builItem->name }}</div>
            <div id="links">
                <a href="{{ ifImg( '' ) }}" title="{{ $b4->name }}">
                    <img src="{{ ifImg( $b4->img ) }}" class="img-responsive" alt="{{ $b4->name }}" />
                </a>
            </div>
            <div class="overflow-yScroll">
              <p class="text-center overflow-yScroll maxXL">{{ $builItem->smallDisc }}</p>
                <p class="text-center">
                  الثمن : <span class="redColor">{{ $builItem->price }}</span><br />
                  حالة العقار : <span class="redColor">{{ buildingState( $builItem->state ) }}</span><br />
                  نوع بيع لبعقار: <span class="redColor">{{ buildingRent( $builItem->rent ) }}</span><br />
                  مساحة العقار: <span class="redColor">{{ $builItem->square }}</span><br />
                  نوع العقار: <span class="redColor">{{ buildingType( $builItem->type ) }}</span><br />
                  مكان العقار: <span class="redColor"></span>{{ getAreaName( $builItem->area_id ) }}<br />
                  تاريخ النشر: <span class="redColor"></span>{{ $builItem->create_at }}<br />
                </p>
            </div>


            <div class="absolute bottom0 right0 left0">
                          <hr />
              <a href="{{ route('buildings.show', $builItem->id ) }}" title="$builItem->name" class="btn btn-sm btn-block">التفاصيل</a>
            </div>
          </div>
        </div>


      @endforeach

      <div class="col-xs-12">
        {{ $same->links() }}
      </div>

      @else

        <p class="alert alert-danger">
          لا توجد قطعة ميكانيكية قريبة من هذه المواصفات
        </p>

      @endif
    </div>
  </div>
</div>

@stop

@section('scripting')

  <script>
    
    $('.select2R').select2({
      dir: 'rtl'
    });
  </script>


    <script>
  function myMap() {
    var myCenter = new google.maps.LatLng({{ $b4->lat }},{{ $b4->lang }});
    var mapCanvas = document.getElementById("map");
    var mapOptions = {center: myCenter, zoom: 5};
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({position:myCenter});
    marker.setMap(map);
  }
  </script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfe6lnGvpoO0itVk2Doz_9xPweZ5JnUaI&callback=myMap"></script>


<script type="text/javascript">

  var ifAuth = {{ Auth::check() ? 1 : 0 }} ;

  var _token = '{{ csrf_token() }}';

  if( ifAuth == 1 ){

    var ifTrue = {{ $b4->isLiked() ? 1 : 0 }} ;

    var theIdItem = {{ $b4->id }} ;

    if( ifTrue == 0 ){

      $("#liked").css( "display", "inline-block" );

      $("#no-liked").css( "display", "none" );

    }else if( ifTrue == 1 ){

      $("#no-liked").css( "display", "inline-block" );

      $("#liked").css( "display", "none" );

    }
/*
    $("#liked").hover(function( ){

      $(this).html( $("#no-liked").html() );
    }

    $("#no-liked").hover(function( ){

      $(this).html( $("liked").html() );
    }
*/

    $("#liked").on("click",function( event ){

      event.preventDefault();

      if( ifTrue == 0 ){

        $.ajax({
              dataType: 'json',
              type:'POST',
              url: '/like/'+ theIdItem,
              data:{_token: _token }
          }).done(function(){


            $("#no-liked").css( "display", "inline-block" );

            $("#liked").css( "display", "none" );

            ifTrue = 1;

            swal({
              title: "الحمد لله",
              text: "لقد تم الإعجاب بنجاح ",
              type: "success"
            });

            
          }).fail(function(){

            swal({
              title: "الحمد لله",
              text: "لم تتم العملية، المعدرة",
              type: "error"
            });

          });


        

      }else{

        swal({
              title: "الحمد لله",
              text: "مناك خطب ما",
              type: "error"
            });

      }

      return false;

      

    });

    $("#no-liked").on("click",function( evenet ){

      event.preventDefault();

      if( ifTrue == 1 ){

        $.ajax({
              dataType: 'json',
              type:'POST',
              url: '/unLike/'+ theIdItem,
              data:{_token: _token }
          }).done(function(){


            $("#no-liked").css( "display", "none" );

            $("#liked").css( "display", "inline-block" );

            ifTrue = 0;

            swal({
              title: "الحمد لله",
              text: "لقد تم عدم الإعجاب بنجاح ",
              type: "success"
            });

            
          }).fail(function(){

            swal({
              title: "الحمد لله",
              text: "لم تتم العملية، المعدرة",
              type: "error"
            });

          });


        

      }else{

        swal({
              title: "الحمد لله",
              text: "مناك خطب ما",
              type: "error"
            });

      }

      return false;

      
      
    });



  }else{

    $("#no-liked").css( "display", "none" );

    $("#liked").css( "display", "none" );

  }

</script>

@stop
