@extends('layouts.app')
@section('title')
مرحبا بك
@stop


@section('content')


{{-- DISPLAY --}}


<div class="main">
<div class="content_white">
  <h1 title="عن الموقع"> عن الموقع : {{ getSetting( 'site-name' ) }}</h1>

  <p>{{ getSetting( 'description' ) }}</p>
</div>
<div class="featured_content" id="feature">
  <div class="container">
    <div class="row text-center">
      <div class="col-xs-6 col-md-3 feature_grid2"> <i class="fa fa-cog fa-3x"></i>
        <h3 class="m_1"><a href="#" rel="nofollow">خفة</a></h3>
        <p class="m_2"> كتابة</p>
        </div>
      <div class="col-xs-6 col-md-3 feature_grid2"> <i class="fa fa-comments-o fa-3x"></i>
        <h3 class="m_1"><a href="#" rel="nofollow">أمان</a></h3>
        <p class="m_2"> كتابة</p>
        </div>
      <div class="col-xs-6 col-md-3 feature_grid2"> <i class="fa fa-globe fa-3x"></i>
        <h3 class="m_1"><a href="#" rel="nofollow">سهولة</a></h3>
        <p class="m_2"> كتابة</p>
      </div>
      <div class="col-xs-6 col-md-3 feature_grid2"> <i class="fa fa-wifi fa-3x"></i>
        <h3 class="m_1"><a href="#" rel="nofollow">إنتشار</a></h3>
        <p class="m_2"> كتابة</p>
      </div>
      
  </div>
</div>
<hr class="style18" />
<div class="about-info">

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="block-heading-two">
          <h2><span>عن الموقع</span></h2>
        </div>
        <p>كتابة</p>
        </div>
      <div class="col-md-4">
        <div class="block-heading-two">
          <h3><span>لمذا نحن</span></h3>
        </div>
        <div class="panel-group" id="accordion-alt3">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3" rel="nofollow"> <i class="fa fa-angle-right"></i> عنوان</a> </h4>
            </div>
            <div id="collapseOne-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p> كتابة</p>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3" rel="nofollow"> <i class="fa fa-angle-right"></i> عنوان</a> </h4>
            </div>
            <div id="collapseTwo-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p> كتابة</p>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3" rel="nofollow"> <i class="fa fa-angle-right"></i> عنوان </a> </h4>
            </div>
            <div id="collapseThree-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p> كتابة</p>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3" rel="nofollow"> <i class="fa fa-angle-right"></i> عنوان</a> </a> </h4>
            </div>
            <div id="collapseFour-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p> كتابة</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <div class="highlight-info">
        <div class="layerBackground">
          <div class="overlay spacer">
            <div class="container">
              <div class="row text-center">
                <div class="col-xs-4"> <i class="fa fa-picture-o fa-5x yellowColor"></i>
                  <h4>{{ partValidCount() }} إعلان متوفر حاليا</h4>
                </div>
                <div class="col-xs-4"> <i class="fa fa-check-square-o fa-5x yellowColor"></i>
                  <h4>{{ partSellCount() }} مبيوعة</h4>
                </div>
                <div class="col-xs-4"> <i class="fa fa-user fa-5x yellowColor"></i>
                  <h4>{{ sellerCount() }} بائع</h4>
                </div>

              </div>
            </div>
          </div>
      </div>
    </div>

<div class="testimonial-area">
  <div class="testimonial-solid">
    <div class="container">
      <h2>أراء المستعملين</h2>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"> <a href="#" rel="nofollow"></a> </li>
          <li data-target="#carousel-example-generic" data-slide-to="1" class=""> <a href="#" rel="nofollow"></a> </li>

        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <p>"ليس هناك مستعمل بعد."</p>
            <p><strong>- المدير -</strong></p>
          </div>

          <div class="item">
            <p>"ليس هناك مستعمل بعد."</p>
            <p><strong>- المدير -</strong></p>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

@stop



@section('scripting')

<script>

    $(".highlight-info").css("background-color", "rgba(159, 229, 135, .5)");

    $(".highlight-info").css("background-image", "url( {{ ifImg( getSetting('background-about') ) }} )");

</script>





@stop
