 <?php

        if($request->from == 'dashboard' && Auth::check() || $request->from == 'website' ){

                if($request->file('img')){



                    $ext = $request->file('img')->getClientOriginalExtension();

                    $fileName = $request->file('img')->getClientOriginalName();

                    if(!file_exists( base_path().'/public/images/'.$fileName )){

                        /*
                        $request->file('img')->move( 
                            base_path().'/public/images/', $fileName
                        );
                        */

                        $uniqueName = md5($fileName . time() );

                        $completeName = $uniqueName. '.' .$ext;

                        $request->file('img')->move( 
                            base_path().'/public/images/', $completeName
                        );

                    }



                    list($widthIMG, $heightIMG) = getimagesize( base_path().'/public/images/' . $completeName);

                    resizeIMG( base_path().'/public/images/' . $completeName, $widthIMG, $heightIMG);

                    

                    $data['img'] = $completeName;
                }

        }