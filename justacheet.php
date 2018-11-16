<?Php


if ($request->from == 'dashboard' && Auth::user()->admin == 1 || $request->from == 'website' && $buildingToUpdate->status == 0 && Auth::id() == $buildingToUpdate->user_id) 
{ 

	if ($request->hasFile('img')) 
	{ 

		$imgName = $request->file('img')->getClientOriginalName(); 

		$ext = $request->file('img')->getClientOriginalExtension(); 

		$completeLastImg = $imgName . '.' . $ext; 

		// if it is a new img requested not repeated 

		$tempSearchLastImgName = $b2->where('id', $id)->first(); 

		// if he grab a new picture 

		if ($completeLastImg != $tempSearchLastImgName->img) 
		{ 

			//searching if image allready exist in the database 

			$tempSearchBuil = $b2->where('img', $completeLastImg)->first(); 


			if ($completeLastImg != $tempSearchBuil->img) 
			{ 

			//now it is new in the database 

			// search if the updated credential already hav an image 

			$tempSearchToDeleteImg = $b2->where('id', $id)->first(); 

			if( $tempSearchToDeleteImg->img ){ 
			             
			// search if the updated credential already hav an image and is not used but an other annouce 

			$tempSearchToNotDeleteImgCount = $b2->where('id', '!=' , $id)->where('img', $tempSearchLastImgName->img)->count(); 
			               
			if( $tempSearchToNotDeleteImgCount == 0 ){


				if( file_exists( base_path().'/public/images/'.$tempSearchLastImgName->img ) ){

					File::delete( base_path().'/public/images/' . $tempSearchLastImgName->img );

				}

			}
			             
			             
			}else{ 

				if(!file_exists( base_path().'/public/images/'.$completeLastImg )){

				$uniqueName = md5($imgName . time() );

				$completeNextImg = $uniqueName . '.' . $ext;

				$request->file('img')->move( base_path().'/public/images/', $completeNextImg  );

				}

				$data['img'] = $completeNextImg;

			} 


			} 
			else 
			{ 
			$data['img'] = $completeLastImg; 

			} 


		} 
		else 
		{ 

		$data['img']     = $completeLastImg; 
		$completeLastImg = null; 
		} 
		$tempSearchLastImgName = null; 


	} 

}

/*****************************************************/


if ($request->hasFile('img')) 
{ 

    $imgName = $request->file('img')->getClientOriginalName(); 

    $ext = $request->file('img')->getClientOriginalExtension(); 

    $completeLastImg = $imgName . '.' . $ext; 


    $searchForPictureInTheDB = $b2->where('img', $completeLastImg)->count(); 

    //if new in the db

    if( $searchForPictureInTheDB == 0 && !(file_exists( base_path().'/public/images/'.$completeLastImg)) ){


            $uniqueName = md5($imgName . time() );

            $completeNextImg = $uniqueName . '.' . $ext;

            $request->file('img')->move( base_path().'/public/images/', $completeNextImg  );

            list($widthIMG, $heightIMG) = getimagesize( base_path().'/public/images/' . $completeNextImg);

            resizeIMG( base_path().'/public/images/' . $completeNextImg, $widthIMG, $heightIMG);

            $data['img'] = $completeNextImg;

            //searching to delete the last img

            $searchIfTheUploaderHaveAlreadyAnImageInThisPub = $b2->where('id', $id)->first(); 

            if( $searchIfTheUploaderHaveAlreadyAnImageInThisPub->img != null ){

                $searchIfSomeOneOtherUseThisPicture = $b2->where('img', $searchIfTheUploaderHaveAlreadyAnImageInThisPub->img )->count();

                if( $searchIfSomeOneOtherUseThisPicture == 0 ){

                    \File::delete( base_path().'/public/images/' . $searchIfTheUploaderHaveAlreadyAnImageInThisPub->img );
                    
                }

            }
        
    }else{

        $data['img'] = $completeLastImg; 

    }


}



/********************************GET FIRST IMG GOOGLE

*/


$search_keyword=str_replace(' ','+',$search_keyword);
$newhtml =file_get_html("https://www.google.com/search?q=".$search_keyword."&tbm=isch");
$result_image_source = $newhtml->find('img', 0)->src;
echo '<img src="'.$result_image_source.'">';






/****************/