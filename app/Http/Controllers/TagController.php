<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ThingRequest;

use App\Thing;

use App\Building;

use DB;

class TagController extends Controller
{
    //


    public function getTagsAsNavigation( Request $request ){

        DB::connection()->disableQueryLog();

        $theString = '

<h1 class="text-center">#هاشتاج</h1>

    <ul class="">

        ';

        if( count( \App\Tag::all() ) > 0 ){


            


                        foreach( \App\Tag::all() as $tag ){
    
                            $theString .= '

							        <a href="'.route("buildings.tag", $tag->name).'" title="'.$tag->name.'">
							            
							            <li class="label label-primary displayInlineBlock margin0-5 forTagsLabel marginBottomX">

							                '.$tag->name.'

							            </li> <!-- cd-item -->
							        </a>

                            ';
                            
                        }


        $theString .= '

    </ul> <!-- cd-items -->

        ';

        return response()->json( $theString );
            
            

        }else{

        	return response()->json( '<h3>لائحة الهاشتاج فارغة</h3>' );

        }

        //
        

    }


}
