<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\User;

use Illuminate\Http\Request;

use App\Http\Requests\BuildingRequest;

use App\Http\Requests\BuildingRequestNotRequiredIds;






use App\Building;

use App\Tag;

use App\Area;

use App\Pic;

use Imager;



use Datatables;

use Form;

use Html;



class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

        $this->middleware('admin')->only(['anyData', 'create', 'index']);

        $this->middleware('user')->only(['update', 'edit', 'destroyWithGet']);


    }

    public function renderIndex( $postQuery ){

        $b4 =  $bQuery->where('status', 1)->orderBy('id', 'desc')->paginate(20);

        return view('website.buildings.all', compact( 'b4'));
    }

    public function syncTags( Building $bToSync, array $tagsToSync ){

        $fresh = [];

        foreach( $tagsToSync as $tag )
        {
            if( Tag::find($tag) )
            {
                $fresh[] = $tag;
            }

            elseif( Tag::where('name',$tag)->exists() )
            {
                $fresh[] = Tag::where('name',$tag)->latest()->first()->id;
            }
            else
            {
                $t = new Tag;
                $t->name = sluggify( $tag );
                $t->save();

                $fresh[] = $t->id;
            }
        }

        $bToSync->tags()->sync( $fresh );

    }

    public function syncPics(array $imagesArrayHolder, Building $savedPub){

        foreach($imagesArrayHolder as $keyImages => $imagesObjHolder ){

           $justAPicToSync = Pic::find( $imagesObjHolder->sqlId );

           $justAPicToSync->building_id = $savedPub->id ;

           $justAPicToSync->save();

        }
    }


    public function index()
    {
        //
        return view('admin.building.index');
    }

    public function add(Tag $tags)
    {
        //
        $allTags = $tags->pluck('name', 'id');

        return view('website.buildings.add', compact('allTags'));

        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tag $tags)
    {
        //
        $allTags = $tags->pluck('name', 'id');

        return view('website.buildings.add', compact('allTags'));

        
    }

            

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function store(BuildingRequestNotRequiredIds $request, Building $build, Area $serach4Area )
    {
        //
        // if things exists and car for not having problemmes



        if($request->from == 'dashboard' && Auth::check() || $request->from == 'website' ){

            //dd('good');

            $imagesArrayHolder = json_decode($request->imagesArrayHolder);

            if($imagesArrayHolder === null) {
                // $ob is null because the json cannot be decoded
                return redirect()->route('home');
            }else{


                $data = [
                    'user_id' => null,
                    'name' => $request->name,
                    'price' => $request->price, 
                    'state' => $request->state, 
                    'rent' => $request->rent, 
                    'square'=> $request->square,
                    'type'=> $request->type,
                    'roomNumber'=> $request->roomNumber,
                    'lang' => $request->lang, 
                    'lat'=> $request->lat,
                    'largDisc' => $request->largDisc, 
                    'area_id'=> $request->area_id,
                    'kind'=> $request->kind,
                    'tel'=> $request->tel,
                   // 'imagesArrayHolder' => $request->imagesArrayHolder,
                ];



                if( $request->ifNotArea ){

                    $lookin4AreaName = $serach4Area->where('name', 'like', '%'.$request->ifNotArea.'%')->first();

                    if( $lookin4AreaName ){


                        $data['area_id'] =  $lookin4AreaName->id;

                    }else{

                        $createdArea = \App\Area::create(['name' => $request->ifNotArea, 'parent_id' => 1, 'slug' => sluggify( $request->ifNotArea ) ]);

                        $data['area_id'] =  $createdArea->id;
                    }


                }elseif( $request->area_id == null){

                    //back with old values

                    $this->validate($request, [
                        'area_id' => 'required|integer',
                    ]);

                }elseif( $request->car_id ){

                    $data['area_id'] =  $request->area_id;



                }


                if( $request->from == 'dashboard' && Auth::check() ){


                    

                        if ( Auth::check() )
                    {
                        $data['user_id'] = Auth::id();

                        $data['status'] = $request->status;

                        




                        // The user is logged in...
                        $savedPub = $build->create( $data );

                        $this->syncTags($savedPub, $request->input('tag_list') );

                        $this->syncPics($imagesArrayHolder, $savedPub);


                        flash('تهانينا تم التسجيل بنجاح', 'success');


                        return redirect('buildings');
                    }else{
                        return redirect('/');
                    }

                }else if( $request->from == 'website' ){

                    // The user is logged in...


                    if( Auth::check() ){
                        $data['user_id'] = Auth::id();
                    }

                    $data['status'] = 0;
                    
                    $savedPub = $build->create( $data );

                    $this->syncTags($savedPub, $request->input('tag_list') );

                    $this->syncPics($imagesArrayHolder, $savedPub);


                    


                    flash('تهانينا تم التسجيل بنجاح', 'success');

                    return redirect('home');

                }else{

                    return redirect('home');

                }



            }


        }

        





        






        

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Building $b1)
    {
        //
        if( !is_numeric( $id ) ){

            return back();

        }else{

        

            $b4 = $b1->findOrFail( $id );

            $b1 = new Building;

            $same = $b1->where('id','!=' , $b4->id )

                        ->where('price','>=' , $b4->price - 500 )

                        ->where('price','<=' , $b4->price + 500 )

                        ->where('state','>=' , $b4->price - 2 )

                        ->where('state','<=' , $b4->price + 2 )

                        ->where('rent', $b4->rent )

                        ->where('square','>=' , $b4->square - 100 )

                        ->where('square','<=' , $b4->square + 100 )

                        ->where('type',$b4->type )

                        ->where('area_id', $b4->area_id)

                        ->where('lang', '>=', $b4->lang - 1 )

                        ->where('lang', '<=', $b4->lang  + 1 )

                        ->where('lat', '>=', $b4->lat - 1 )

                        ->where('lat', '<=', $b4->lat  + 1 )

                        ->where('kind', $b4->kind )

                        ->where('status', 1)->orderBy('id', 'desc')

                        ->limit(20)

                        ->paginate(3)

                        ;

    /*


            

    */


            return view('website.buildings.single', compact('b4', 'same'));

        }
    }

    public function tag($name){

        $tag = Tag::where('name', $name)->first();

        $b4 =  $tag->buildings()->where('status', 1)->orderBy('id', 'desc')->paginate(20);
        /*
        IF PAGINATE DONT WORK PLEASE

        DONT USE b4
        AND

        return $this->renderIndex( $tag->buildings() );

        */

        return view('website.buildings.all', compact( 'b4'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id , Building $b)
    {
        $b = $b->findOrFail( $id );

        $allTags = Tag::pluck('name', 'id');
        
        return view('admin.building.edit', compact('b','allTags'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(BuildingRequestNotRequiredIds $request , Building $b2 , User $user, $id){
    
     $buildingToUpdate = $b2->find( $id );
     
     $imagesArrayHolder = json_decode($request->imagesArrayHolder);
     
     if(  $buildingToUpdate && $imagesArrayHolder !== null ){
     
     
         if ( $request->from == 'dashboard' && Auth::user()->admin == 1 || $request->from == 'website' && $buildingToUpdate->status == 0 && Auth::id() == $buildingToUpdate->user_id )
            {
            
                $data = [
                    'name' => $request->name,
                    'price' => $request->price, 
                    'state' => $request->state, 
                    'rent' => $request->rent, 
                    'square'=> $request->square,
                    'type'=> $request->type,
                    'roomNumber'=> $request->roomNumber,
                    'lang' => $request->lang, 
                    'lat'=> $request->lat,
                    'largDisc' => $request->largDisc, 
                    'area_id'=> $request->area_id,
                    'kind'=> $request->kind,
                    'tel'=> $request->tel
                
                ];
                


                if( $request->ifNotArea ){

                    $lookin4AreaName = $serach4Area->where('name', 'like', '%'.$request->ifNotArea.'%')->first();

                    if( $lookin4AreaName ){


                        $data['area_id'] =  $lookin4AreaName->id;

                    }else{

                        $createdArea = \App\Area::create(['name' => $request->ifNotArea, 'parent_id' => 1, 'slug' => sluggify( $request->ifNotArea ) ]);

                        $data['area_id'] =  $createdArea->id;
                    }


                }elseif( $request->area_id == null){

                    //back with old values

                    $this->validate($request, [
                        'area_id' => 'required|integer',
                    ]);

                }elseif( $request->area_id ){

                    $data['area_id'] =  $request->area_id;



                }
                
/**/
                if( $request->from == 'dashboard' && Auth::user()->admin == 1 ){

                    $data['status'] = $request->status;
                    
                    if(
                        $b2::where('id', $id )->update( $data )
                        
                        ){

                        $savedPub = $b2::where('id', $id )->first();

                        $this->syncTags( $savedPub, $request->input('tag_list') );

                        flash('تهانينا تم التحديث بنجاح', 'success');

                        return redirect('buildings');

                    }else{

                        return redirect('home');

                    }

                }
                
/**/
                if( $request->from == 'website' && $buildingToUpdate->status == 0 && ( Auth::id() == $buildingToUpdate->user_id || $u->admin == 1 ) ){



                    $data['status'] = $request->status;

                    if(
                        $b2::where('id', $id )->update( $data )
                        ){

                        $savedPub = $b2::where('id', $id )->first();

                        $this->syncTags( $savedPub, $request->input('tag_list') );

                        flash('تهانينا تم التحديث بنجاح', 'success');

                        return redirect()->route('buildings.show', $id );

                    }else{

                        return back();

                    }  

                    

                }elseif( $request->from == 'website' && $buildingToUpdate->status == 1 && ( Auth::id() == $buildingToUpdate->user_id || $u->admin == 1 ) ){

                    if( $u->admin == 0 ){

                        $data['status'] = 0;

                    }

                    if(
                        $b2::where('id', $id )->update( $data )
                        ){

                        $savedPub = $b2::where('id', $id )->first();

                        $this->syncTags( $savedPub, $request->input('tag_list') );

                        flash('تهانينا تم التحديث بنجاح', 'success');

                        return redirect()->route('user.my-buildings-in-wait' );

                    }else{

                        return back();

                    }  

                }           
                
/**/        
            }else{
            
                return redirect('/');
            
            
            }
     
     
     
     
     }else{
            return redirect('/');
        }
    
    
    
    
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Building $b10){

        return 'destroy';

    }
    public function destroyWithGet($id, Building $bB, User $findUser)
    {


        $b3 = $bB::find( $id );

        $theRightUser = $b3->user_id;

        if( Auth::user()->admin == 1 ){

            $theUserHoHaveThisBuild = $findUser::find( $theRightUser );

            $theUserHoHaveThisBuild->likes()->detach( $b3->id );



        }else{

            Auth::user()->likes()->detach( $b3->id );


        }

        /***********************************/



                    $imgName = $b3->img; 

                    

                    if( $imgName ){

                        if( file_exists( base_path().'/public/images/'. $imgName ) ){

                            $searchForPictureInOtehrsItem = $b2->where('img', $imgName)->where('id', '!=' , $id )->count();


                            if( $searchForPictureInOtehrsItem == 0 ){

                                \File::delete( base_path().'/public/images/' . $imgName );

                            }

                        }

                    }



        /**********************************/

        

        $b3->delete();

        flash('تهانينا تم الحذف بنجاح', 'success');

        return back();

    }

    
    public function anyData(Building $buildings)
    {

      $buildings = $buildings::where('id', '!=' , 1 )->get();

        return Datatables::of($buildings)




        ->editColumn('status', function ($model) {
                
                return buildingStatu( $model->status );
            })
        ->editColumn('name', function ($model) {
                
                return link_to_route('buildings.show', $model->name, [ $model->id ], ['class' => 'btn btn-primary btn-circle']);
            })

         ->editColumn('rent', function ($model) {
             
                return buildingRent( $model->rent ) ;
            })
         ->editColumn('type', function ($model) {
             
                return buildingType( $model->type ) ;
            })
         ->editColumn('kind', function ($model) {
             
                return buildingKind( $model->kind ) ;
            })

         ->editColumn('tel', function ($model) {

                return $model->tel == null ? 'غير موجود' : $model->tel;
            })

        ->editColumn('tag_list', function ($model) {

            $initializTags = array();

              if( $model->tags->count() ){

                foreach( $model->tags as $tag ){

                    array_push( $initializTags, $tag->name );

                }
                
              }



            return  HTML::ul( $initializTags ) ;


            })

        ->editColumn('area_id', function ($model) {
                
                return getAreaName( $model->area_id ) ;
            })
        ->editColumn('user_id', function ($model) {
                
                return  'يجب أن تصلح الشو لليوزر';
                return link_to_route('buildings.show', getUserName( $model->area_id ), [ $model->user_id ], ['class' => 'btn btn-primary btn-circle']);
            })

        ->editColumn('edit', function ($model) {

                return link_to_route('buildings.edit', 'تحديث', [ $model->id ], ['class' => 'btn btn-info btn-circle']);
                        
            })
        

        ->editColumn('delete', function ($model) {

            return Html::methodLink("DELETE", route('buildings.destroyWithGet', $model->id), 'حذف', ['data' => ['id' => $model->id], 'id' => 'delete']) ;
      
            })



        ->make(true);

    }

    public function showingAllEnabled(Building $b4)
    {
        //

        $b4 = $b4->where('status', 1)->orderBy('price', 'asc')->paginate(40);

        return view('website.buildings.all', compact( 'b4' ));

    }

    public function search(Request $req, Building $bs )
    {
            $b4 = $bs;

            $breadCrumb = [];
            

        if( $req->searchBar != null ){

            $b4 = $b4->where('name', 'like', '%'.$req->searchBar.'%');

            $breadCrumb['الإسم'] = $req->searchBar ;
        }

        if( $req->name != null ){

            $b4 = $b4->where('name', 'like', '%'.$req->name.'%');

            $breadCrumb['الإسم'] = $req->name ;
        }


        if( $req->priceFrom != null ){

            $b4 = $b4->where('price','>=' , $req->priceFrom );

            $breadCrumb['الثمن إبتداءا من '] = $req->priceFrom ;
        }

        if( $req->priceTo != null ){

            $b4 = $b4->where('price','<=' , $req->priceTo );

            $breadCrumb['الثمن أقل من '] = $req->priceTo ;
        }

        if( $req->state != null ){

            $b4 = $b4->where('state', $req->state );

            $breadCrumb['حالة العقار '] = $req->state ;
        }



        if( $req->rent  != null ){

            $b4 =  $b4->where('rent', '=', $req->rent );

            $breadCrumb['نوع البيع'] = buildingRent( $req->rent ) ;
        }

        if( $req->squareFrom != null ){

            $b4 = $b4->where('square','>=' , $req->squareFrom );

            $breadCrumb['المساحة إبتداءا من'] = $req->squareFrom ;
        }

        if( $req->squareTo != null ){

            $b4 = $b4->where('square','>=' , $req->squareTo );

            $breadCrumb['المساحة إلى'] = $req->squareTo ;
        }

        if( $req->area_id != null ){

            $b4 =  $b4->where('area_id', $req->area_id );

            $breadCrumb['مان تواجد القطعة'] = getAreaName( $req->area_id ) ;
        }

        if( $req->type != null ){

            $b4 =  $b4->where('type', $req->type );

            $breadCrumb['نوع العقار '] = buildingType( $req->type ) ;

        }


        if( $req->roomNumberFrom != null ){

            $b4 = $b4->where('roomNumber','>=' , $req->roomNumberFrom );

            $breadCrumb['عدد الغرف إبتداءا من'] = $req->roomNumberFrom ;
        }

        if( $req->roomNumberTo != null ){

            $b4 = $b4->where('roomNumber','>=' , $req->roomNumberTo );

            $breadCrumb['عدد الغرف إلى'] = $req->roomNumberTo ;
        }


        if( $req->langFrom != null ){

            $b4 =  $b4->where('lang', '>=', $req->langFrom );

            $breadCrumb['خط الطول تواجد العقار من '] =  $req->langFrom  ;

        }

        if( $req->langTo != null ){

            $b4 =  $b4->where('lang', '<=', $req->langTo );

            $breadCrumb['خط الطول تواجد العقار أقل من '] =  $req->langTo  ;

        }

        if( $req->latFrom != null  ){

            $b4 =  $b4->where('lat', '>=', $req->latFrom );

            $breadCrumb['خط العرض تواجد العقار من '] =  $req->latFrom  ;

        }

        if( $req->latTo != null  ){

            $b4 =  $b4->where('lat', '<=', $req->latTo );

            $breadCrumb['خط العرض تواجد العقار أقل من '] =  $req->latTo  ;

        }

        if( $req->kind != null ){

            $b4 = $b4->where('kind', $req->kind );

            $breadCrumb['نوع الإشهار'] = $req->kind ;
        }


        $b4 =  $b4->where('status', 1)->orderBy('id', 'desc')
                ->paginate(20);

        $fRequest = $req->all();

        return view('website.buildings.all', compact( 'b4' , 'breadCrumb', 'fRequest'));

        

    }

    public function fav(Request $req,  Building $builToFavorite,  $id ){

        $builToFavorite = $builToFavorite::find( $id );

        return Auth::user()->likes()->attach( $builToFavorite );

    }

    public function unFav( Request $req, $id ){

        return Auth::user()->likes()->detach( $id );

    }
    


    public function getJSON( Request $request, Building $bls, $id ){

        return $bls->find( $request->id )->toJson();

    }




    public function getPlusInfoWithJSON( Request $request){

        return response()->json([


                'buildingRent' => buildingRent(-1),
                /*

                'thingStatu' => thingStatu(-1),

                'carCarb' => carCarb(-1),

                'carModel' => carModel(-1),
                */

                'kind' => buildingKind(-1),

                'noImage' => ifImg( getSetting( 'no-image' ) ),


            ]);



    }






}
