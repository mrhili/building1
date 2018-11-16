<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pic;

use App\Building;

class PicController extends Controller
{
    //
    public function index(){

    	return view('admin.pic.index');
    }

    





   
    public function create()
    {
    	# code...
    	return 'create';
    }

    protected function store(Request $request, Pic $picS)
    {
    	/*
    	$create = $picS::create(
                            $request->all()
                            );
        */

    	if($request->file('files')){

            /*

            if( $request->sqlId ){

                $checkIfExist = Pic::find( $request->sqlId )->first();

                if( $checkIfExist ){

                    return response()->json( $create );

                }

            }
            */

            if( $request->building_id ){

                $building_id = $request->building_id;

            }else{

                $building_id = 1 ;

            }



	        $ext = $request->file('files')->getClientOriginalExtension();

	        $fileName = $request->file('files')->getClientOriginalName();

	        $uniqueName = md5($fileName . time() );

	        $completeName = $uniqueName. '.' .$ext;

	        if(!file_exists( base_path().'/public/images/'.$fileName )){

	            
	            //$request->file('img')->move( 
	            //    base_path().'/public/images/', $fileName
	            //);
	            

	            

	            $request->file('files')->move( 
	                base_path().'/public/images/', $completeName
	            );

	            list($widthIMG, $heightIMG) = getimagesize( base_path().'/public/images/' . $completeName);

		        resizeIMG( base_path().'/public/images/' . $completeName, $widthIMG, $heightIMG);

		        $create = $picS::create(

		                	[ 'name' => $completeName , 'building_id' => $building_id , 'created_at' => date("Y-m-d H:i:s") ]

		                );

	        }else{

	        	$create = $picS::create(

		                	[ 'name' => $fileName, 'building_id' => $building_id , 'created_at' => date("Y-m-d H:i:s") ]

		                );

	        }

	        

		    return response()->json( $create );
	        

	        //return response()->json(['its an image']);

        }else{

        	return response()->json(['ليس بملف']);
        }

        


    }

    public function show( Thing $thingSM, $id ){

    	return 'show';
    }
    /*

    Problemme with where ALL

    public function getAll( Pic $picGA, Building $buildingGA, $slug ){

    	$picGA = $picGA->where('slug', $slug)->first();

    	//-

    	$b4 = $buildingGA->where('thing_id', $thingGA->id )->where('status', 1)->orderBy('price', 'asc')->paginate(20);

        return view('website.buildings.all', compact( 'b4' ));



    }

    */

    public function edit(User $user, $id)
    {
    	return 'edit';
        
    }
    /*
	I SHould do a delete just when i want to change a name of picture but that is not a big deal

    public function update(ThingRequest $request, Pic $picU, $id)
    {

    	$update = $picU::find($id)->update(
                                $request->all()
                                );
        return response()->json($update);
    }
    */

    public function destroy (Thing $thingD, $id)
    {
    	
    	

    	
        
    }

/*
    public function getJSON(Building $bRelation,  Request $request, Pic $pls, $id ){

        $idOfTheRelation = $bRelation->where( 'id', $request->id )->first()->thing_id;

        return $pls->find( $idOfTheRelation )->toJson();

    }
*/
    public function getJSONALLPICS( Request $request, Pic $picsAll){

        //return Users::all()->toJson()

        return $picsAll::all()->toJson();

    }

/*
    public function updateWithJson(ThingRequest $request, Thing $thingU, $id)
    {

        $update = $thingU::find($id)->update(

            $request->all()
                                );
        return response()->json($update);
    }
*/
    public function deleteWithJson(Request $request, Pic $picD, Building $buiS4DesImage, $id)
    {

    	$searchForImageInPicD = $picD::find( $id );

    	$countUsedImagesInbuiS4DesImage =  $buiS4DesImage->where('id', $id)->count();


    	if( $countUsedImagesInbuiS4DesImage == 0 && file_exists( base_path().'/public/images/'. $searchForImageInPicD->name )  ){

    		\File::delete( base_path().'/public/images/' . $searchForImageInPicD->name);

    	}

    	$searchForImageInPicD->delete();

    	return response()->json(['حذف و الحمد لله']);

    	$searchForImageInPicD = null;

    	$countUsedImagesInbuiS4DesImage =  null;

    }
}
