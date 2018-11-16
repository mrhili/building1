<?Php
	public function update(BuildingRequestNotRequiredIds $request , Building $b2 , User $user, $id){
	
	 $buildingToUpdate = $b2->find( $id );
	 
	 $imagesArrayHolder = json_decode($request->imagesArrayHolder);
	 
	 if(  $buildingToUpdate && $imagesArrayHolder !== null ){
	 
	 
		 if ( $request->from == 'dashboard' && Auth::user()->admin == 1 || $request->from == 'website' && $buildingToUpdate->status == 0 && Auth::id() == $buildingToUpdate->user_id )
			{
			
				$data = [
					'name' => $request->name,
					'price' => $request->price, 
					'thing_id' => $request->thing_id, 
					'rent' => $request->rent, 
					'carModel'=> $request->carModel,
					'carCarb'=> $request->carCarb,
					'largDisc' => $request->largDisc, 
					'lang' => $request->lang, 
					'lat'=> $request->lat,
					'area_id'=> $request->area_id,
					'tel' => $request->tel,
					'thingKind' => $request->thingKind,
				
				];
				
				
				if( $request->ifNotThing ){

					$lookin4ThingName = $serach4Thing->where('name', 'like', '%'.$request->ifNotThing.'%')->first();

					if( $lookin4ThingName ){


						$data['thing_id'] =  $lookin4ThingName->id;

					}else{

						$createdThing = \App\Thing::create(['name' => $request->ifNotThing, 'parent_id' => 1, 'slug' => sluggify( $request->ifNotThing ) ]);

						$data['thing_id'] =  $createdThing->id;
					}


				}elseif( $request->thing_id == null){

					//back with old values

					$this->validate($request, [
						'thing_id' => 'required|integer',
					]);

				}elseif( $request->car_id ){

					$data['thing_id'] =  $request->thing_id;



				}



				if( $request->ifNotCar ){

					$lookin4CarName = $serach4Car->where('name', 'like', '%'.$request->ifNotCar.'%')->first();

					if( $lookin4CarName ){


						$data['car_id'] =  $lookin4CarName->id;

					}else{

						$createdCar = \App\Car::create(['name' => $request->ifNotCar, 'parent_id' => 6, 'slug' => sluggify( $request->ifNotCar ) ]);

						$data['car_id'] =  $createdCar->id;
					}


				}elseif( $request->car_id == null){

					//back with old values

					$this->validate($request, [
						'car_id' => 'required|integer',
					]);

				}elseif( $request->car_id ){

					$data['car_id'] =  $request->car_id;



				}

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
