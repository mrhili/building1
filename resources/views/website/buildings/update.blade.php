@extends('layouts.app')
@section('title')
تحيت العقار {{ $b->name }}
@stop




@section('content')


{{-- DISPLAY --}}



<div class="container-fluid">
    <div class="row">

    
      <div class="col-md-3">
          @include('partials.asideWebsite')
      
      </div>

      <div class="profile-content">
      <div class="col-md-9">
          
          

              <?php  $button = ' تحديث';  ?>

              <?php  $from = 'website'; ?>

              <?php
                
                $area_id_Selected = null; 

              ?>

              <?php $idHelper = $b->id ; ?>



            {!! Form::open([


                'files' => true,
                'route' => 'buildings.store',
                'class'=> 'form-horizontal row',
                'role' => 'form',
                'method' => 'post',
                'id' => 'images'
            ]) !!}
                <div class="col-md-6">
                  <!-- D&D Zone-->
                  <div id="drag-and-drop-zone" class="uploader">
                    <div>Drag &amp; Drop Images Here</div>
                    <div class="or">-or-</div>
                    <div class="browser">
                      <label>
                        <span>Click to open the file Browser</span>
                        {!! Form::file('files[]', null, ['accept' => 'image/*', 'multiple' => 'multiple', 'title' => 'إضغط لتحميل صورة', 'alt' => 'إضغط لتحميل صورة']) !!}
                      </label>
                    </div>
                  </div>
                  <!-- /D&D Zone -->

                  <!-- Debug box -->
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Debug</h3>
                    </div>
                    <div class="panel-body demo-panel-debug">
                      <ul id="demo-debug">
                      </ul>
                    </div>
                  </div>
                  <!-- /Debug box -->
                </div>
                <!-- / Left column -->

                <div class="col-md-6">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Uploads</h3>
                    </div>
                    <div class="panel-body demo-panel-files" id='demo-files'>
                      <span class="demo-note">No Files have been selected/droped yet...</span>
                    </div>
                  </div>
                </div>
                <!-- / Right column -->
          {!! Form::close() !!}


            {!! Form::model($b,[
                'files' => true,
                'route' => ['buildings.update', $b->id],
                'class'=> 'form-horizontal',
                'role' => 'form',
                'method' => 'PATCH',
            ]) !!}




            @include('admin.partials.formBuilding', compact('button', 'from', 'idHelper', 'thing_id_Selected', 'car_id_Selected', 'area_id_Selected'))



            {!! Form::close() !!}

      </div>
      </div>

    </div>


</div>


@stop

@section('scripting')

  <script>
    
    $('.select2R').select2({
        dir: 'rtl',
        theme: "classic"
      });

    $('#tag_list').select2({
      dir: 'rtl',
      tags: true,
      tokenSeparators: [",", " "],

      createTag: function(newTag) {
           return {
               id: newTag.term,
               text: newTag.term 
           };
       }

    });


    $('.oneLenght').select2({
      maximumSelectionLength: 1
    });

    $("#addIfNotThing").css("display", "block");

    $("#addIfNotThing").on("click",function( event ){

      event.preventDefault();

      $("#addIfNotThing").css("display", "none");

      $("#thing_idSide").css("display", "none");

      $("#ifNotThingSide").css("display", "block");

      $("#returnIfThing").css("display", "block");

      return false;

    });

    $("#returnIfThing").on("click",function( event ){

      event.preventDefault();

      $("#addIfNotThing").css("display", "block");

      $("#thing_idSide").css("display", "block");

      $("#ifNotThingSide").css("display", "none");

      $("#returnIfThing").css("display", "none");

      return false;

    });

    $("#addIfNotCar").css("display", "block");

    $("#addIfNotCar").on("click",function( event ){

      event.preventDefault();

      $("#addIfNotCar").css("display", "none");

      $("#car_idSide").css("display", "none");

      $("#ifNotCarSide").css("display", "block");

      $("#returnIfCar").css("display", "block");

      return false;

    });

    $("#returnIfCar").on("click",function( event ){

      event.preventDefault();

      $("#addIfNotCar").css("display", "block");

      $("#car_idSide").css("display", "block");

      $("#ifNotCarSide").css("display", "none");

      $("#returnIfCar").css("display", "none");

      return false;

    });

    $("#addIfNotArea").css("display", "block");

    $("#addIfNotArea").on("click",function( event ){

      event.preventDefault();

      $("#addIfNotArea").css("display", "none");

      $("#area_idSide").css("display", "none");

      $("#ifNotAreaSide").css("display", "block");

      $("#returnIfArea").css("display", "block");

      return false;

    });

    $("#returnIfArea").on("click",function( event ){

      event.preventDefault();

      $("#addIfNotArea").css("display", "block");

      $("#area_idSide").css("display", "block");

      $("#ifNotAreaSide").css("display", "none");

      $("#returnIfArea").css("display", "none");

      return false;

    });
    
  </script>

  {{-- dmuploader --}}



  <script type="text/javascript">

  window.shouldUpdate = true;



  /*Manipulate json*/

      // Declare location array

      $( "#imagesArrayHolder" ).attr('value', JSON.stringify( [] ) );


      /*
      

      // Button bindings
      //var locationButton = document.getElementById("addNewLocation");
      //locationButton.onclick = addNewLocation;

      //var displayJsonButton = document.getElementById("displayJsonObject");
      //displayJsonButton.onclick = displayJsonObject;

      // Button functions
      

      function makeJsonObject() {
        var json = {
           location : locations
        }
        
        return json;
      }

      function displayJsonObject() {
        var obj = makeJsonObject();
        console.log(obj.location);
      }
      */
    /*EndManipulate json*/

      var _token = '{{ csrf_token() }}';

      var dmuploaderX = {
        dataType: 'json',
        type:'POST',
        allowedTypes: 'image/*',
        url: '/pics/',
        extraData: { _token: _token, building_id: {{ $b->id }} },
        /*
        onInit: function(){
          $.danidemo.addLog('#demo-debug', 'default', 'Plugin initialized correctly');
        },
        */
        onBeforeUpload: function(id){

          

/*
        var imagesArray = JSON.parse( $( "#imagesArrayHolder" ).attr('value') );

        var theBiggestId = 0;

          for(var k in imagesArray){

            if( theBiggestId < imagesArray[ k ].imgId ){

              theBiggestId = imagesArray[ k ].imgId ;

            }

          }

          var id = ++theBiggestId;
*/

          $.danidemo.addLog('#demo-debug', 'default', 'Starting the upload of #' + id);

          $.danidemo.updateFileStatus(id, 'default', 'التحميل جار');
        },
        onNewFile: function(id, file){

          var fileType = file["type"];
          var ValidImageTypes = ["image/gif", "image/jpeg", "image/png"];
          if ($.inArray(fileType, ValidImageTypes) < 0) {
               // invalid file type code goes here.
               $.danidemo.addFile('#demo-files', id, file, false);
          }else{
            $.danidemo.addFile('#demo-files', id, file, true);
          }

          

          /*** Begins Image preview loader ***/
          if (typeof FileReader !== "undefined"){
            
            var reader = new FileReader();

            // Last image added
            var img = $('#demo-files').find('.demo-image-preview').eq(0);

            reader.onload = function (e) {
              img.attr('src', e.target.result);
            }

            reader.readAsDataURL(file);

            var toGetFileName = file.name.split('.');

            dmuploaderX.extraData.ext = toGetFileName.splice(-1).join() ;

            dmuploaderX.extraData.name = toGetFileName.join(".") ;

            dmuploaderX.extraData.files = file ;

            console.log("this is the file on new file");

            console.log(file);

            console.log("end of new file");

            


          } else {
            // Hide/Remove all Images if FileReader isn't supported
            $('#demo-files').find('.demo-image-preview').remove();
          }
          /*** Ends Image preview loader ***/

        },
        onComplete: function(){
          $.danidemo.addLog('#demo-debug', 'default', 'التحميل جرى كمت يلبغي');
        },
        onUploadProgress: function(id, percent){
          var percentStr = percent + '%';

          $.danidemo.updateFileProgress(id, percentStr);
        },
        onUploadSuccess: function(id, data){

          $.danidemo.addLog('#demo-debug', 'success', 'كمل تحميل الملف رقم ' + id );

          $.danidemo.addLog('#demo-debug', 'info', 'رسالة السيرفر للملف رقم ' + id + 'هي ' + JSON.stringify(data));

          $.danidemo.updateFileStatus(id, 'success', 'التحميل جرى كمت يلبغي');

          $.danidemo.updateFileProgress(id, '100%');

          console.log("now we should adding a new image id is" + id);

          console.log("now we should adding a new image data.id is" + data.id);

          addNewImage( id, data.id );

          




          swal({
            title: "الحمد لله",
            text: " تمت إضافة الصورة بنجاح: ",
            type: "success"
          });

          console.log( "a#deleteItem ->" );


          console.log( $("a#deleteItem") );

          console.log("assigning On click");




          $("a#deleteItem").each(function( each ){

            /*

            console.log("$(this); ->");

            console.log( $(this) );

            console.log("each ->");

            console.log( each );

            console.log("$(this)[ each ] ->");

            console.log( $(this)[ each ] );

            */

            console.log("$(this)[ 0 ] ->");

            console.log( $(this)[ 0 ] );

            var $this = $(this);

            if( !$this.attr('data-event-click') ){

                    $this.on('click' , function(){

                    console.log("btn clicked");

                    event.preventDefault();

                    var imagesArray = JSON.parse( $( "#imagesArrayHolder" ).attr('value') );

                    console.log("parsing th #imagesArrayHolder goes like that");

                    console.log(imagesArray);

                    console.log("end parsing");

                    var theIdOfTheDeletingItem = $this.attr("data-item-number");

                    console.log("theIdOfTheDeletingItem is " + theIdOfTheDeletingItem);

                    var objectSpeceficId =  imagesArray.filter(function( f ){ return f.imgId == theIdOfTheDeletingItem })[0];

                    console.log("objectSpeceficId is " );

                    console.log( objectSpeceficId );

                    console.log("end of objectSpeceficId is " );

                    console.log("send ajax with ");

                    console.log( {_token: _token, id: objectSpeceficId.sqlId  } );

                    $.ajax({
                        dataType: 'json',
                        type:'get',
                        url: '/pics/'+ objectSpeceficId.sqlId +'/delete',
                        data:{_token: _token, id: objectSpeceficId.sqlId  }
                    }).done(function(data){

                      $.danidemo.addLog('#demo-debug', 'success', 'لقد عم حذف رقم ' + objectSpeceficId.imgId );

                      $.danidemo.addLog('#demo-debug', 'info', 'رسالة السيرفر للملف رقم ' + objectSpeceficId.imgId + 'هي ' + JSON.stringify(data));

                      swal({
                        title: "الحمد لله",
                        text: "لقد تتم العملية بنجاح الرقم المسجل هو : " + objectSpeceficId.imgId,
                        type: "success"
                      });

                      /**/

                      console.log("filtring imageArray");

                      var filtredImagesArray = imagesArray.filter( function( f ){ return f.imgId != theIdOfTheDeletingItem; } )

                      console.log("filtred imageArray now is");

                      console.log( filtredImagesArray );

                      console.log( "assigning filtredImagesArray to the image array holder" );

                      $( "#imagesArrayHolder").attr("value", JSON.stringify( filtredImagesArray ));

                      console.log( "now the images array holder is -> " + $( "#imagesArrayHolder").attr("value") );

                      $('div#demo-file'+ objectSpeceficId.imgId ).remove();


                    }).fail(function( data){

                    swal({
                        title: "الحمد لله",
                        text: "لم تتم العملية، المعدرة",
                        type: "error"
                      });

                      $.danidemo.addLog('#demo-debug', 'error', 'هناك مشكل رسالة السيرفر للملف رقم ' + objectSpeceficId.imgId );

                      console.log( "fail this is the data returned");

                      console.log( data);

                      console.log( "end of return");

                    });

                



              });

            }



            $this.attr('data-event-click' , true);


          });

          


        },
        onNewUpdateFile: function(imgId, sqlId, link ){

          console.log( imgId, sqlId, link );

          $.danidemo.addLink('#demo-files', imgId, link, sqlId);

          addNewImage( imgId, sqlId );


          $("a#deleteItem").each(function( each ){

            /*

            console.log("$(this); ->");

            console.log( $(this) );

            console.log("each ->");

            console.log( each );

            console.log("$(this)[ each ] ->");

            console.log( $(this)[ each ] );

            */

            console.log("$(this)[ 0 ] ->");

            console.log( $(this)[ 0 ] );

            var $this = $(this);

            if( !$this.attr('data-event-click') ){

                    $this.on('click' , function(){

                    console.log("btn clicked");

                    event.preventDefault();

                    var imagesArray = JSON.parse( $( "#imagesArrayHolder" ).attr('value') );

                    console.log("parsing th #imagesArrayHolder goes like that");

                    console.log(imagesArray);

                    console.log("end parsing");

                    var theIdOfTheDeletingItem = $this.attr("data-item-number");

                    console.log("theIdOfTheDeletingItem is " + theIdOfTheDeletingItem);

                    var objectSpeceficId =  imagesArray.filter(function( f ){ return f.imgId == theIdOfTheDeletingItem })[0];

                    console.log("objectSpeceficId is " );

                    console.log( objectSpeceficId );

                    console.log("end of objectSpeceficId is " );

                    console.log("send ajax with ");

                    console.log( {_token: _token, id: objectSpeceficId.sqlId  } );

                    $.ajax({
                        dataType: 'json',
                        type:'get',
                        url: '/pics/'+ objectSpeceficId.sqlId +'/delete',
                        data:{_token: _token, id: objectSpeceficId.sqlId  }
                    }).done(function(data){

                      $.danidemo.addLog('#demo-debug', 'success', 'لقد عم حذف رقم ' + objectSpeceficId.imgId );

                      $.danidemo.addLog('#demo-debug', 'info', 'رسالة السيرفر للملف رقم ' + objectSpeceficId.imgId + 'هي ' + JSON.stringify(data));

                      swal({
                        title: "الحمد لله",
                        text: "لقد تتم العملية بنجاح الرقم المسجل هو : " + objectSpeceficId.imgId,
                        type: "success"
                      });

                      /**/

                      console.log("filtring imageArray");

                      var filtredImagesArray = imagesArray.filter( function( f ){ return f.imgId != theIdOfTheDeletingItem; } )

                      console.log("filtred imageArray now is");

                      console.log( filtredImagesArray );

                      console.log( "assigning filtredImagesArray to the image array holder" );

                      $( "#imagesArrayHolder").attr("value", JSON.stringify( filtredImagesArray ));

                      console.log( "now the images array holder is -> " + $( "#imagesArrayHolder").attr("value") );

                      $('div#demo-file'+ objectSpeceficId.imgId ).remove();


                    }).fail(function( data){

                    swal({
                        title: "الحمد لله",
                        text: "لم تتم العملية، المعدرة",
                        type: "error"
                      });

                      $.danidemo.addLog('#demo-debug', 'error', 'هناك مشكل رسالة السيرفر للملف رقم ' + objectSpeceficId.imgId );

                      console.log( "fail this is the data returned");

                      console.log( data);

                      console.log( "end of return");

                    });

                



              });

            }



            $this.attr('data-event-click' , true);


          });

          

        },
        onUploadError: function(id, message){
          $.danidemo.updateFileStatus(id, 'error', message);

          $.danidemo.addLog('#demo-debug', 'error', 'هناك مشكل رسالة السيرفر للملف رقم ' + id + 'هي ' + message);

          swal({
            title: "الحمد لله",
            text: " المرجو إعادة المحاولة بعد تحديث الصفحة ",
            type: "error"
          });

        },
        onFileTypeError: function(file){
          $.danidemo.addLog('#demo-debug', 'error', 'الملف \'' + file.name + '\' لا يمكن عحميله يجب أن يكون صورة');

          swal({
            title: "تنبيه",
            text: " لا يمكن عحميله يجب أن يكون صورة ",
            type: "error"
          });
        },
        onFileSizeError: function(file){
          $.danidemo.addLog('#demo-debug', 'error', 'الملف \'' + file.name + '\' لا يمكن عحميله كبير جدا');

          swal({
            title: "تنبيه",
            text: " لا يمكن عحميله كبير جدا ",
            type: "error"
          });
        },
        onFallbackMode: function(message){
          $.danidemo.addLog('#demo-debug', 'info', 'هناك مشكل في تحمل هذه التقنية من طرف البروسر و الرسالة هي ' + message);

        }
      };


      $('#drag-and-drop-zone').dmUploader( dmuploaderX );

      @foreach ($b->pics as $kLoop => $vLoop)

        

        $('#drag-and-drop-zone').dmUploader( dmuploaderX.onNewUpdateFile(

          {{ $kLoop }},
          {{ $vLoop->id }},
          "{{ ifImg( $vLoop->name ) }}"

           )
        );
        
      @endforeach
    </script>


@stop









