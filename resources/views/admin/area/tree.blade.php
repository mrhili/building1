@extends('admin.layouts.layout')

@section('title')

  المناطق
@stop

@section('styling')


@stop

@section('content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        كافة المناطق
        <small>كافة المناطق</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin-panel.index') }}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li><a href="{{ route('buildings.index') }}"> كافة تامناطق</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

      
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">كافة المناطق</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">


              <h1>شجرة المناطق الموجودة على الموقع</h1>
              <h5>بسم الله</h5>
              <div id="bs-treeetable" class="treetable">
                المرجو الإنتضار
              </div>


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->




        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@stop

@section('usefullJS')



@stop

@section('scripting')




<script type="text/javascript">


  var data;

  var _token = '{{ csrf_token() }}';

  var lastClicked = 0;





  

  $.get('/getJSON-ALL-PLACES/' ,function( result ){

      data = JSON.parse( result );

      //data.forEach(function(b){ return b.innercode = "1A"});

      $("#bs-treeetable").bstreetable({
      data:data,
      maintitle:" الشجرة",
      nodeaddCallback:function(data,callback){

        //do your things then callback 新增的时候会返回一个字段叫pinnercode,表示父节点的innercode

        $.ajax({
            dataType: 'json',
            type:'POST',
            url: '/places/',
            data:{_token: _token, id: data.id , name: data.name, slug: sluggify(data.name), parent_id: data.parent_id }
        }).done(function(data){

          

          callback();

          $('*[data-parent_id=""]').attr( 'data-parent_id' , lastClicked);

          $('li.j-expend[data-id=""]').attr( 'data-id' , data.id).next().find('button.j-addChild').attr( 'data-id' , data.id).parents('ul.class-level-ul').attr( 'data-id' , data.id);

          swal({
            title: "الحمد لله",
            text: "لقد تتم العملية بنجاح الرقم المسجل هو : " + data.id,
            type: "success"
          });

          
        }).fail(function(){

          swal({
            title: "الحمد لله",
            text: "لم تتم العملية، المعدرة",
            type: "error"
          });

        });

        
      },
      noderemoveCallback:function(id,callback){




        swal({
          title: 'تأكيد الحذف',
          text: "هل أنت متأكد أنك تريد الحذف",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'نعم إحذف',
          cancelButtonText: 'لا تحذف',
          confirmButtonClass: 'btn btn-success',
          cancelButtonClass: 'btn btn-danger',
          buttonsStyling: false
        }).then(function () {

          /********/

          $.ajax({
              dataType: 'json',
              type:'GET',
              url: '/places/'+ id +'/delete/',
              data:{_token: _token, id: id}
          }).done(function(id){

            callback();

            swal({
              title: "الحمد لله",
              text: "لقد تتم العملية بنجاح الرقم المسجل هو : " + id,
              type: "success"
            });

            
          });
          /*********/

        }, function (dismiss) {
          // dismiss can be 'cancel', 'overlay',
          // 'close', and 'timer'
          if (dismiss === 'cancel') {
            swal({
              title: "الحمد لله",
              text: "لم تتم العملية، المعدرة",
              type: "error"
            });
          }
        });


        /*else{

            swal({   title: "لم يتم حذف، الرقم : "+ id,   text: "الحمد لله.",   timer: 1000,   showConfirmButton: false });

        }*/

        

      },
      nodeupdateCallback:function(data,callback){

        $.ajax({
            dataType: 'json',
            type:'GET',
            url: '/places/' + data.id + '/update/',
            data:{_token: _token, id: data.id , name: data.name, slug: sluggify(data.name), parent_id: data.parent_id }
        }).done(function(id){

          callback();

            swal({
              title: "الحمد لله",
              text: "لقد تمت العملية بنجاح الرقم",
              type: "success"
            });

        }).fail(function(){

          swal({
              title: "الحمد لله",
              text: "لم تتم العملية، المعدرة",
              type: "error"
            });

        });

      }
    }
    );

      return data;


  });

$(document)

  



  /*目前默认最大层级是四级（不包含根节点）*/

$( document ).ready(function(){

    

    setInterval(function(){ 
        //code goes here that will be run every 5 seconds.  

        $("li.j-expend>*").on('click', function(){

        if( $(this).parent().attr("data-id") ){

          lastClicked = $(this).parent().attr("data-id");

        }

        console.log( lastClicked );

      });

    }, 1000);








});



  </script>



    
<script>
$('div.alert').delay(2000).fadeOut(3500);
</script>

<script>


</script>
  


@stop













