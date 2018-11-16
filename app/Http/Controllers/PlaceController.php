<?php

namespace App\Http\Controllers;

use App\Area;

use App\Building;
use Illuminate\Http\Request;

use App\Http\Requests\PlaceRequest;

use DB;

class PlaceController extends Controller
{


    private function recursiveShow($id){

        array_push( $this->theArray , $id);

        foreach ( Area::where('parent_id', $id )->get(['id']) as $key => $place) {

            $this->recursiveShow( $place->id );
            # code...
        }

    }
    private $theArray = array();

    private function recursiveDelete($id){

        array_push( $this->theArray , $id);

        foreach ( Area::where('parent_id', $id )->get(['id']) as $key => $place) {

            $this->recursiveDelete( $place->id );
            # code...
        }

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.area.tree');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlaceRequest $request, Area $areaS)
    {
        //
        $create = $areaS::create(
                            $request->all()
                            );
        return response()->json($create);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        //
    }



    public function getAll( Area $placeGA, Building $b4, $slug ){

    $placeGA = $placeGA->where('slug', $slug)->first();

    $this->recursiveShow(  $placeGA->id );

    $b4 = $b4->whereIn('id', $this->theArray )->where('status', 1)->orderBy('price', 'asc')->paginate(20);

    $this->theArray = array();

    return view('website.buildings.all', compact( 'b4' ));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        //
    }

    public function getJSON( Request $request, Building $pRelation, Area $pls, $id ){

        $idOfTheRelation = $pRelation->where( 'id', $request->id )->first()->area_id ;

        return $pls->find( $idOfTheRelation )->toJson();

    }



    public function getJSONALLPLACES( Request $request, Area $plsAll){


        return $plsAll::all()->toJson();

    }

    public function getAreasAsNavigation( Request $request ){

        //return Users::all()->toJson()


        DB::connection()->disableQueryLog();

        return response()->json( '<h3 class="text-center">أماك التواجد</h3>'.\App\Area::customUrl('places/{slug}')->ulAttr(['class'=> '', 'role' => 'menu'])->renderAsHtml() );

        

    }


    public function updateWithJson(PlaceRequest $request, Area $placeU, $id)
    {

        $update = $placeU::find($id)->update(

            $request->all()
                                );
        return response()->json($update);
    }

    public function deleteWithJson(Request $request, Area $placeD, $id)
    {
        $p = $placeD::find($id);

        $this->recursiveDelete(  $p->id);


        Place::destroy( $this->theArray );

        $this->theArray = array();



        return response()->json(['إحذف و الحمد لله']);

    }
}
