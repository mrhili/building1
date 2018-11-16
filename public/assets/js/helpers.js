
function sluggify(Text)
{
    return Text
        .toLowerCase()
        .replace(/ /g,'-')
        .replace(/[^\w-]+/g,'')
        ;
}

function addNewImage( imgId,  id ) {

        


	var temporaryArray =JSON.parse( $( "#imagesArrayHolder" ).attr('value') );

	temporaryArray.push( { imgId : imgId , sqlId : id } );

	$( "#imagesArrayHolder" ).attr('value', JSON.stringify( temporaryArray ) );

}

      //http://cdn1.iconfinder.com/data/icons/fatcow/32/accept.png

function changeImageOnHover ( theXimage ) {
  var $this = $(this);
  $this.attr('data-alt-src', $this.attr('src'));
  $this.attr('src', theXimage );
}

function changeImageOnUnHover ( theXimage ) {
  var $this = $(this);
  $this.attr('src', $this.attr('alt-src'));
  $this.attr('data-alt-src', theXimage );
}


function cap1stLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

/*NAVIGATION*/

function ajaxingNavigation( nameOfDataButtonC, theProgressIcon ){

    if( theProgressIcon !== 'undefined' ){

        var theProgressIcon = theProgressIcon;

    }else{

        var theProgressIcon = false;

    }

    var returned = null;


            $.ajax({
                dataType: 'json',
                type:'GET',
                url: '/get'+ nameOfDataButtonC +'AsNavigation/',
                data:{ _token: "{{ csrf_token() }}"  },
                asynch: false,
                beforeSend: function(){

                    if( theProgressIcon ){

                        $('.sp').css('display', 'block');

                    }
                    

                    NProgress.start();
                    
                },
                success: function(data){

                returned =  data;



                $('#anchors').html( data );

                $('#anchors').treeview();

                

                $('#anchors').css('display', 'block') ;
                    
                },
                fail: function(){

                  returned = null;

                },
                always: function(){

                if( theProgressIcon ){

                    $('.sp').css('display', 'none');

                }


                
                NProgress.done();
                NProgress.remove();

                return returned;

                }
            });
            /*.done(function(data){

                //returned =  data;



                //$('#anchors').html( data );

                //$('#anchors').treeview();

                

                //$('#anchors').css('display', 'block') ;



            }).fail(function(){

                returned = null;



            }).always(function(){



            });
            */



}


function variablingAndStoring( whatToWorkWith, data ){

    var whatToWorkWithC = cap1stLetter( whatToWorkWith );

      window.varComplete[whatToWorkWith] = data;

    my_lzma.compress(  window.varComplete[whatToWorkWith] , window.compression_mode, function on_compress_complete(result) {

        localStorage.setItem("itsANewName4"+ whatToWorkWithC , result);

        window.storageComplete[whatToWorkWith] = true;
        

    }, function on_compress_progress_update(percent) {
        /// Compressing progress code goes here.
        //console.log( "Compressing: " + (percent * 100) + "%");
    });
}




function getingFromStorageAndVariabling( whatToWorkWith2 ){

    var whatToWorkWith2C = cap1stLetter( whatToWorkWith2 );

    if (localStorage.getItem("itsANewName4" + whatToWorkWith2C ) != null) {

        window.storageComplete[whatToWorkWith2] = true;

        my_lzma.decompress(localStorage.getItem("itsANewName4"  + whatToWorkWith2C ), function on_decompress_complete(result) {
            //alert("Decompressed: " + result);

            window.varComplete[whatToWorkWith2] = result;

        }, function on_decompress_progress_update(percent) {
            /// Decompressing progress code goes here.
            //console.log( "Decompressing: " + (percent * 100) + "%");
        });

        /////////////////////////////////////////////////////////////////////////////////////////




    }

}

function inSuccess(data,textStatus, jqXHR, param){

    if (typeof(Storage) !== "undefined") {

        variablingAndStoring( param, data );

    }else{

        window.storageComplete[param] = true;

    }

    
}
function inError( jqXHR,textStatus,errorThrown , errorParam){

    console.log( 'window.varComplete['+ errorParam +'] = null;' );

    

}

/*END NAVIGATION*/