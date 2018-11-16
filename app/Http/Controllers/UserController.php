<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\User;

use App\Http\Requests\UserRequest;

use App\Building;

use App\Tag;

class UserController extends Controller
{
    //

    public function myPage(Building $my9Buil){


    	$display = 'myPage';

    	$userInstance = Auth::user();

    	$b4 = $my9Buil->where('user_id', Auth::user()->id )->orderBy('id', 'desc')->paginate(48);


    	return view('website.user.userPage', compact('userInstance', 'display', 'b4'));

    }

    public function mySettings(){

    	$display = 'mySettings';

    	$userInstance = Auth::user();

    	return view('website.user.userPage', compact('userInstance', 'display'));

    }

    public function myBuildingsDemande(Building $myBuil){

        $display = 'myBuildingsDemande';

        $userInstance = Auth::user();

        //$b4 = $myBuil->where('user_id', $id )->orderBy('id', 'desc')->skip(0)->take(5)->paginate(12);

        //

        $b4 = $myBuil->where('user_id', Auth::user()->id )->where('kind', 1)->where('status', 1)->orderBy('id', 'desc')->paginate(12);

        return view('website.user.userPage', compact('userInstance', 'display', 'b4'));

    }


    public function myBuildingsOffer(Building $myBuil){

        $display = 'myBuildingsOffer';

        $userInstance = Auth::user();

        //$b4 = $myBuil->where('user_id', $id )->orderBy('id', 'desc')->skip(0)->take(5)->paginate(12);

        $b4 = $myBuil->where('user_id', Auth::user()->id )->where('kind', 0)->where('status', 1)->orderBy('id', 'desc')->paginate(12);

        return view('website.user.userPage', compact('userInstance', 'display', 'b4'));

    }






    public function myBuildingsWDemande(Building $myBuil){

    	$display = 'myBuildingsWDemande';

    	$userInstance = Auth::user();

    	//$b4 = $myBuil->where('user_id', $id )->where('status', 0 )->orderBy('id', 'desc')->skip(0)->take(5)->paginate(12);

        $b4 = $myBuil->where('user_id', Auth::user()->id )->where('kind', 1)->where('status', 0 )->orderBy('id', 'desc')->paginate(12);

    	return view('website.user.userPage', compact('userInstance', 'display', 'b4'));

    }

    public function myCompleteBuildingsWDemande(Building $myBuil){

        $display = 'myCompleteBuildingsWDemande';

        $userInstance = Auth::user();

        //$b4 = $myBuil->where('user_id', $id )->where('status', 0 )->orderBy('id', 'desc')->skip(0)->take(5)->paginate(12);

        $b4 = $myBuil->where('user_id', Auth::user()->id )->where('kind', 1)->where('status', 0 )->orderBy('id', 'desc')->paginate(12);

        return view('website.user.userPage', compact('userInstance', 'display', 'b4'));

    }

    public function myBuildingsWOffer(Building $myBuil){

        $display = 'myBuildingsWOffer';

        $userInstance = Auth::user();

        //$b4 = $myBuil->where('user_id', $id )->where('status', 0 )->orderBy('id', 'desc')->skip(0)->take(5)->paginate(12);

        $b4 = $myBuil->where('user_id', Auth::user()->id )->where('kind', 0)->where('status', 0 )->orderBy('id', 'desc')->paginate(12);

        return view('website.user.userPage', compact('userInstance', 'display', 'b4'));

    }






    public function myFavoritesOffer()
    {

        $userInstance = Auth::user();

        $display = 'myFavoritesOffer';

        $b4 = Auth::user()->likes()

        ->where('kind', 1)->paginate(12);


        return view('website.user.userPage', compact('userInstance', 'display', 'b4'));
    }

  

    public function myFavoritesDemande()
    {

        $userInstance = Auth::user();

        $display = 'myFavoritesDemande';

        $b4 = Auth::user()->likes()

        ->where('kind', 0)->paginate(12);

        return view('website.user.userPage', compact('userInstance', 'display', 'b4'));
    }






    public function update(UserRequest $request,$id, User $user){

    	$userUpdate = $user::find( $id );

    	$emailCheck = $user->where('email', '=', $request->email )->get();

    	$userUpdate->name = $request->name;

        $userUpdate->tel = $request->tel;

    	$userUpdate->password = bcrypt( $request->password );

    	if( $userUpdate->email != $request->email){

    		if( count( $emailCheck )  == 0 ){

    			$userUpdate->email = $request->email;
    		}else{

    			flash('البريد الإلكتروني مستعمل', 'danger');

    		}

    	}

    	if($userUpdate->save()){

    		flash('تهانينا تم التحديت بنجاح', 'success');

	    }else{

	    }

	    

        return back();

    }

    public function BuildingsEdit($id, User $user, Building $builUpdate, Tag $tags){

    	$b = $builUpdate->findOrFail( $id );

    	$u = $user->findOrFail( Auth::id() );

        $allTags = $tags->pluck('name', 'id');



    	if(  $b->user_id == $u->id || $u->admin == 1  ){

    		return view('website.buildings.update', compact('b', 'allTags'));

    	}else{

    		return redirect('/');
    	}
        
        

    }

    public function BuildingsDestroy($id, User $user, Building $builDelete){

        $b = $builDelete->findOrFail( $id );

        $u = $user->findOrFail( Auth::id() );

        if( $b->user_id == $u->id || $u->admin == 1 ){

            $theRightUser = $b->user_id;

            if( Auth::user()->admin == 1 ){

                $theUserHoHaveThisBuild = $user::find( $theRightUser );

                $theUserHoHaveThisBuild->likes()->detach( $b->id );

            }else{

                Auth::user()->likes()->detach( $b->id );


            }


        return back();

            $b->delete();

            return back();

        }else{

            return redirect('/');
        }
        
    }

    public function getJSON( Request $request, User $uls, Building $bls, $id ){

        //$idOfPublisher = $bls->where('id', $request->id)->first()->user_id;

        //return $uls->find( $idOfPublisher )->toJson();

        return response()->json([ $bls->where('id', $request->id)->first()->user()->name ]);

    }
}
