
NProgress.configure({ trickleSpeed: 2000 });


var _token = window.Laravel;

$(window).unload(function(){
    $(this).scrollTop(0)
});






var timeS = 0;
var intervalTime = setInterval(function(){ 
        timeS++; 
        if( timeS < 180000){

                switch (document.readyState) {
                  case "loading":
                    // The document is still loading.
                    break;
                  case "interactive":
                    // The document has finished loading. We can now access the DOM elements.
                    clearInterval(intervalTime);
                    break;
                  case "complete":
                    // The page is fully loaded.
                    clearInterval(intervalTime);
                    break;
                }

         }else{
            clearInterval(intervalTime);
                $('#reloadPageDIV').css('display','block')
                $('#reloadPage').click(function() {
                    window.location.reload(true);
            });
         }
   }, 1000);

/*Nprogress*/

$( document ).ajaxStart(function() {

    NProgress.start();
  
});

$( document ).ajaxStart(function() {

    NProgress.done();
    NProgress.remove();
  
});

/*PLUS INFO*/

$(document).ready(function () {

window.checkIfNotExist = function( kind, array, key){

    if(kind === 'array'){

        if( array[key] === undefined){

            return 'حصل خطأ ما';

        }else{

            return array[key];

        }

    }else if( kind === 'object' ){

        if( array.key === undefined){

            return 'حصل خطأ ما';

        }else{

            return array.key;

        }
    }

    

}

            $.ajax({
                dataType: 'json',
                type:'GET',
                url: '/getJSON-PLUS-INFO/'
            }).done(function( info ){

                window.plusInfo = info;

            }).fail(function(){

                window.plusInfo.noImage = 'no-image.jpg';


            });
});


/*AND PLUS INFO*/

/* FOOTER TREE */

/**
 *  BootTree Treeview plugin for Bootstrap.
 *
 *  Based on BootSnipp TreeView Example by Sean Wessell
 *  URL:    http://bootsnipp.com/snippets/featured/bootstrap-30-treeview
 *
 *  Revised code by Leo "LeoV117" Myers
 *
 */




$.fn.extend({
    treeview:   function() {
        return this.each(function() {
            // Initialize the top levels;
            var tree = $(this);
            
            tree.addClass('treeview-tree');
            tree.find('li').each(function() {
                var stick = $(this);
            });
            tree.find('li').has("ul").each(function () {
                var branch = $(this); //li with children ul
                
                branch.prepend("<i class='tree-indicator fa fa-chevron-left colorFlech'></i>");
                branch.addClass('tree-branch');
                branch.on('click', function (e) {
                    if (this == e.target) {
                        var icon = $(this).children('i:first');
                        
                        icon.toggleClass("fa-chevron-down fa-chevron-left");
                        $(this).children().children().toggle();
                    }
                })
                branch.children().children().toggle();
                
                /**
                 *  The following snippet of code enables the treeview to
                 *  function when a button, indicator or anchor is clicked.
                 *
                 *  It also prevents the default function of an anchor and
                 *  a button from firing.
                 */
                branch.children('.tree-indicator, button, a').click(function(e) {
                    branch.click();
                    
                    e.preventDefault();
                });

                branch.children('.tree-indicator, button, a').dblclick(function(){

                     window.document.location = $(this).attr("href");

                });
            });
        });
    }
});

/**
 *  The following snippet of code automatically converst
 *  any '.treeview' DOM elements into a treeview component.
 */
$(window).on('load', function () {
    $('.treeview').each(function () {
        var tree = $(this);
        tree.treeview();
    })
});



/*END FOOTER TREE*/

$(document).ready(function () {

    /* LIST BY LIST */





    

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('yellow-btn').addClass('btn-default');
            $item.addClass('yellow-btn');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.yellow-btn').trigger('click');


    /*QICK VIEW*/




        //final width --> this is the quick view image slider width
    //maxQuickWidth --> this is the max-width of the quick-view panel
    var sliderFinalWidth = 400,
        maxQuickWidth = 900;

    //open the quick view panel


    /*

    */
    $('.cd-trigger').on('click', function(event){

        

        var idOfLink = $(this).data('id');

        var theRightImg = $(this).data('img');

        

    
            $(".idBOX").attr("href", mainUrl()+"/buildings/" + idOfLink ).attr("title", $(this).parent().parent().find('.name').html() );
            $(".nameBOX").html( $(this).parent().parent().find('.name').html() );
            $(".priceBox").html( 


                        $(this).parent().parent().find('.price').html()


             );
            $(".kindBox").html( $(this).parent().parent().find('.state').html()  );

            $(".rentBox").html( $(this).parent().parent().find('.rent').html()  );

            $(".squareBox").html( $(this).parent().parent().find('.square').html()  );

            $(".typeBox").html( $(this).parent().parent().find('.type').html()  );

            $(".rentBox").html( $(this).parent().parent().find('.rent').html()  );

            $(".areaBox").html( $(this).parent().parent().find('.area_id').html()  );


            $(".created_atBOX").html( $(this).parent().parent().find('.created_at').html() );

            $(".imgBOX").attr("src", theRightImg ).attr("alt", $(this).parent().parent().find('.name').html() ).attr("title", $(this).parent().parent().find('.name').html() );
    


        var selectedImage = $(this).parent('.cd-item').children('img'),
            slectedImageUrl = selectedImage.attr('src');

        $('body').addClass('overlay-layer');
        animateQuickView(selectedImage, sliderFinalWidth, maxQuickWidth, 'open');

        //update the visible slider image in the quick view panel
        //you don't need to implement/use the updateQuickView if retrieving the quick view data with ajax
        updateQuickView(slectedImageUrl);
    });

    //close the quick view panel
    $('body').on('click', function(event){
        if( $(event.target).is('.cd-close') || $(event.target).is('body.overlay-layer')) {
            closeQuickView( sliderFinalWidth, maxQuickWidth);
        }
    });
    $(document).keyup(function(event){
        //check if user has pressed 'Esc'
        if(event.which=='27'){
            closeQuickView( sliderFinalWidth, maxQuickWidth);
        }
    });

    //quick view slider implementation
    $('.cd-quick-view').on('click', '.cd-slider-navigation a', function(){
        updateSlider($(this));
    });

    //center quick-view on window resize
    $(window).on('resize', function(){
        if($('.cd-quick-view').hasClass('is-visible')){
            window.requestAnimationFrame(resizeQuickView);
        }
    });

    function updateSlider(navigation) {
        var sliderConatiner = navigation.parents('.cd-slider-wrapper').find('.cd-slider'),
            activeSlider = sliderConatiner.children('.selected').removeClass('selected');
        if ( navigation.hasClass('cd-next') ) {
            ( !activeSlider.is(':last-child') ) ? activeSlider.next().addClass('selected') : sliderConatiner.children('li').eq(0).addClass('selected'); 
        } else {
            ( !activeSlider.is(':first-child') ) ? activeSlider.prev().addClass('selected') : sliderConatiner.children('li').last().addClass('selected');
        } 
    }

    function updateQuickView(url) {
        $('.cd-quick-view .cd-slider li').removeClass('selected').find('img[src="'+ url +'"]').parent('li').addClass('selected');
    }

    function resizeQuickView() {
        var quickViewLeft = ($(window).width() - $('.cd-quick-view').width())/2,
            quickViewTop = ($(window).height() - $('.cd-quick-view').height())/2;
        $('.cd-quick-view').css({
            "top": quickViewTop ,
            "left": quickViewLeft,
        });
    } 

    function closeQuickView(finalWidth, maxQuickWidth) {
        var close = $('.cd-close'),
            activeSliderUrl = close.siblings('.cd-slider-wrapper').find('.selected img').attr('src'),
            selectedImage = $('.empty-box').find('img');
        //update the image in the gallery
        if( !$('.cd-quick-view').hasClass('velocity-animating') && $('.cd-quick-view').hasClass('add-content')) {
            selectedImage.attr('src', activeSliderUrl);
            animateQuickView(selectedImage, finalWidth, maxQuickWidth, 'close');
        } else {
            closeNoAnimation(selectedImage, finalWidth, maxQuickWidth);
        }
    }

    function animateQuickView(image, finalWidth, maxQuickWidth, animationType) {
        //store some image data (width, top position, ...)
        //store window data to calculate quick view panel position
        var parentListItem = image.parent('.cd-item'),
            topSelected = image.offset().top - $(window).scrollTop(),
            leftSelected = image.offset().left,
            widthSelected = image.width(),
            heightSelected = image.height(),
            windowWidth = $(window).width(),
            windowHeight = $(window).height(),
            finalLeft = (windowWidth - finalWidth)/2,
            finalHeight = finalWidth * heightSelected/widthSelected,
            finalTop = (windowHeight - finalHeight)/2,
            quickViewWidth = ( windowWidth * .8 < maxQuickWidth ) ? windowWidth * .8 : maxQuickWidth ,
            quickViewLeft = (windowWidth - quickViewWidth)/2;

        if( animationType == 'open') {
            //hide the image in the gallery
            parentListItem.addClass('empty-box');
            //place the quick view over the image gallery and give it the dimension of the gallery image
            $('.cd-quick-view').css({
                "top": topSelected,
                "left": leftSelected,
                "width": widthSelected,
            }).velocity({
                //animate the quick view: animate its width and center it in the viewport
                //during this animation, only the slider image is visible
                'top': finalTop+ 'px',
                'left': finalLeft+'px',
                'width': finalWidth+'px',
            }, 1000, [ 400, 20 ], function(){
                //animate the quick view: animate its width to the final value
                $('.cd-quick-view').addClass('animate-width').velocity({
                    'left': quickViewLeft+'px',
                    'width': quickViewWidth+'px',
                }, 300, 'ease' ,function(){
                    //show quick view content
                    $('.cd-quick-view').addClass('add-content');
                });
            }).addClass('is-visible');
        } else {
            //close the quick view reverting the animation
            $('.cd-quick-view').removeClass('add-content').velocity({
                'top': finalTop+ 'px',
                'left': finalLeft+'px',
                'width': finalWidth+'px',
            }, 300, 'ease', function(){
                $('body').removeClass('overlay-layer');
                $('.cd-quick-view').removeClass('animate-width').velocity({
                    "top": topSelected,
                    "left": leftSelected,
                    "width": widthSelected,
                }, 500, 'ease', function(){
                    $('.cd-quick-view').removeClass('is-visible');
                    parentListItem.removeClass('empty-box');
                });
            });
        }
    }
    function closeNoAnimation(image, finalWidth, maxQuickWidth) {
        var parentListItem = image.parent('.cd-item'),
            topSelected = image.offset().top - $(window).scrollTop(),
            leftSelected = image.offset().left,
            widthSelected = image.width();

        //close the quick view reverting the animation
        $('body').removeClass('overlay-layer');
        parentListItem.removeClass('empty-box');
        $('.cd-quick-view').velocity("stop").removeClass('add-content animate-width is-visible').css({
            "top": topSelected,
            "left": leftSelected,
            "width": widthSelected,
        });
    }

    /*SETTING THE LEGAL ANCHOR TO IMAGES IF WITH IS SMALL*/

/*
<div class="col-xs-12">

@if( count($b4) > 0 )

    <ul class="cd-items cd-container">

    @foreach($b4 as $builItem)



   <!-- from the originale template -->

    
        <li class="cd-item nonDeco">
            <img src="{{ ifImg( $builItem->img ) }}" class="effectS" alt="Item Preview">
            <a href="#0" class="cd-trigger" data-id="{{ $builItem->id }}">نظرة سريعة</a>
        </li> <!-- cd-item -->

*/


    var width = $(window).width();
    var wrapped = false;

    if( width >= 1024 ){


    }else{

        wrapped = true;

        $('li.cd-item').each( function () {

            theID = $(this).find('.cd-trigger').attr('data-id');


            theAnchor = $('<a href="'+mainUrl()+'/buildings/'+theID+'"></a>');
           

            $(this).wrap( theAnchor );




        });


    }
    
    $(window).on('resize', function(){
       if($(this).width() != width){
          width = $(this).width();
           
          if( width < 1024 ){

            if (!wrapped) {
                wrapped = true;

                $('li.cd-item').each( function () {

                    theID = $(this).find('.cd-trigger').attr('data-id');


                    theAnchor = $('<a href="'+ mainUrl() +'/buildings/'+theID+'"></a>');
                   

                    $(this).wrap( theAnchor );




                });
            }

               
            

          }else{

            if (wrapped) {
                wrapped = false;

                $('li.cd-item').each( function () {



                    

                    $(this).parent().replaceWith( this );


                });
            }


          }

       }
    });

      //GALLERY IMAGE
    if ( $( "#links" ).length ) {
        document.getElementById('links').onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {index: link, event: event},
                links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
    }
    /*

    $('a.dropdown-toggle').click(function(){

        $(this).next().next().toggle();
    });

    */

    /*NAVIGATION*/



    var elementsNav = $('.largenav').html();

      $('.sideNavBar').html( elementsNav );


window.dataButton = { dataButton: '', dataButtonC: '' };


    $('.buttonClick').on('click', function(){


        document.getElementById("mySidenav").style.width = "0";


        if( $('#anchors').css('display') == 'block' && window.dataButton.dataButton == $(this).attr('data-button') ){

            $('#anchors').css('display', 'none');

        }else{

            window.dataButton.dataButton = $(this).attr('data-button');

            window.dataButton.dataButtonC = cap1stLetter( $(this).attr('data-button') );


            if( window.allComplete && window.varComplete[ window.dataButton.dataButton ] ){

                $('#anchors').html( window.varComplete[ window.dataButton.dataButton ] );

                if( window.dataButton.dataButton != 'tags' ){

                    $('#anchors').treeview(); 

                }

                $('#anchors').css('display', 'block') ;

            }else if( window.varComplete[ window.dataButton.dataButton ] ){

                $('#anchors').html( window.varComplete[ window.dataButton.dataButton ] );

                if( window.dataButton.dataButton != 'tags' ){

                    $('#anchors').treeview(); 

                }            

                $('#anchors').css('display', 'block') ;

            }else if(typeof(Storage) !== "undefined" && localStorage.getItem("itsANewName4"+ window.dataButton.dataButtonC) != null){

                my_lzma.decompress(localStorage.getItem("itsANewName4"  + window.dataButton.dataButtonC ), function on_decompress_complete(result) {
                    //alert("Decompressed: " + result);

                    $('#anchors').html( result );

                    if( window.dataButton.dataButton != 'tags' ){

                        $('#anchors').treeview(); 

                    }             

                    $('#anchors').css('display', 'block') ;

                    window.storageComplete[ window.dataButton.dataButton ] = result;

                }, function on_decompress_progress_update(percent) {
                    /// Decompressing progress code goes here.
                    //console.log( "Decompressing: " + (percent * 100) + "%");
                });




            }else{

                    $.ajax({
                        dataType: 'json',
                        type:'GET',
                        url: '/get'+ window.dataButton.dataButtonC +'AsNavigation/',
                        data:{ _token: "{{ csrf_token() }}"  },
                        asynch: true,
                        beforeSend: function(){

                            $('.sp').css('display', 'block');
                            
                            NProgress.start();
                            
                        },
                    }).done( function(data,textStatus, jqXHR){

                        

                        $('#anchors').html( returnedVar );

                        if( window.dataButton.dataButton != 'tags' ){

                            //$('#anchors').treeview(); 

                        }            

                        $('#anchors').css('display', 'block') ;

                        inSuccess(data,textStatus, jqXHR, v);

                    }).fail(function(data,textStatus, jqXHR){

                        inError( jqXHR,textStatus,errorThrown , v);

                          swal({
                            title: "تنبيه",
                            text: "المرجوا الإعادة لم تتم الإستجابة",
                            type: "error"
                          });

                    }).always(function(){

                            $('.sp').css('display', 'none');


                            NProgress.done();
                            NProgress.remove();

                    });


            }


        }




    });



/*

    $('.buttonClick').on('click', function(){

        var checkIfTheSameWasClicked = false,

        dataButton = '',

        dataButtonC = '',

        returnedVar = null;

        //compression_mode = 1;

        if( dataButton == $(this).attr('data-button') ){

            checkIfTheSameWasClicked = true;

        }else{
            dataButton = $(this).attr('data-button');

            dataButtonC = cap1stLetter( $(this).attr('data-button') );
        }

            $('#anchors').html( '<h3> المرجوا إنتضار تحميل البيانات </h3>' );

            if( window.allComplete ){

                $('#anchors').html( window.varComplete[ dataButton ] );

                $('#anchors').treeview();             

                $('#anchors').css('display', 'block') ;

            }else if(typeof(Storage) !== "undefined" && localStorage.getItem("itsANewName4"+ dataButtonC) != null){

                    my_lzma = LZMA;    

                my_lzma.decompress(localStorage.getItem("itsANewName4"  + dataButtonC ), function on_decompress_complete(result) {
                    //alert("Decompressed: " + result);

                $('#anchors').html( window.varComplete[ dataButton ] );

                $('#anchors').treeview();             

                $('#anchors').css('display', 'block') ;

                }, function on_decompress_progress_update(percent) {
                    /// Decompressing progress code goes here.
                    //console.log( "Decompressing: " + (percent * 100) + "%");
                });




            }else{

                returnedVar = ajaxingNavigation( dataButtonC, true );

                    if( returnedVar == null ){

                      swal({
                        title: "تنبيه",
                        text: "المرجوا الإعادة لم تتم الإستجابة",
                        type: "error"
                      });

                   }else{

                    $('#anchors').html( returnedVar );

                    $('#anchors').treeview();             

                    $('#anchors').css('display', 'block') ;

                   }


            }




        if(  $('#anchors').css('display') == 'block' && checkIfTheSameWasClicked ){

            $('#anchors').css('display', 'none') ;
        }

        
     
    });
*/




    });


    

    /*END NAVIGATION*/



/* NAVBAR */



    function openNav() {
        document.getElementById("mySidenav").style.width = "70%";


    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }



    /*END NAVBAR*/


$(window).load(function() {



    $('#layerIntro').css('display','none');
    $('#navBario').css('display','block');
    $('#app').css('display','block');
    $('#footario').css('display','block');


    window.allComplete = false;

    window.ifSomethingWentWrong = false;

    window.compression_mode = 1;

    my_lzma = LZMA;

    var urls = ['areas','tags'];

    window.varComplete = {

        areas: null,
        tags: null

    };

    window.storageComplete = {

        areas: false,
        tags: false

    };



console.log('s');
NProgress.start();

$.each(urls,function(i , v){

    
    $.ajax({
        dataType: 'json',
        type:'GET',
        url: '/get'+cap1stLetter(v)+'AsNavigation/',
        data:{ _token: "{{ csrf_token() }}"  },
        asynch: true
    }).done( function(data,textStatus, jqXHR){

        inSuccess(data,textStatus, jqXHR, v);
        if(i == urls.length -1 && !window.ifSomethingWentWrong ){
            window.allComplete = true;
        }

    }).fail(function(data,textStatus, jqXHR){

        inError( jqXHR,textStatus,jqXHR , v);

        window.ifSomethingWentWrong = true;

    }).always(function(){
        if(i == urls.length -1 ){

            NProgress.done();
            NProgress.remove();

            console.log('f');

        }
    });


});


});



window.onbeforeunload = function() {

    if(!window.allComplete){
        return true;
    }else{
        window.onbeforeunload = null;
    }
    
};
// Remove navigation prompt
//window.onbeforeunload = null;


/*NAVBAR*/







