<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ReplyRequest;

use App\Reply;

use App\Contact;

use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    //

    public function agreeDel( Reply $r ){


        $contacts = $r->where('confirmed', 1)->where('deleted', 1)->paginate( 25 );

        $wichF = 'agreeDel';

        return view( 'admin.contact.mailBox', compact('wichF', 'contacts') );

    }  

    public function agree1Del( Reply $r ){


        $contacts = $r->where('confirmed', 1)->where('deleted', 0)->paginate( 25 );

        $wichF = 'agree1Del';

        return view( 'admin.contact.mailBox', compact('wichF', 'contacts') );

    }

    public function unAgreeDel( Reply $r ){


        $contacts = $r->where('confirmed', 0)->where('deleted', 1)->paginate( 25 );

        $wichF = 'unAgreeDel';

        return view( 'admin.contact.mailBox', compact('wichF', 'contacts') );

    }

    public function unAgree1Del( Reply $r ){


        $contacts = $r->where('confirmed', 0)->where('deleted', 0)->paginate( 25 );

        $wichF = 'unAgree1Del';

        return view( 'admin.contact.mailBox', compact('wichF', 'contacts') );

    }




    public function show( Reply $replySM, $id ){

        $c = $replySM->find( $id );

        $is = 'reply';

        return view('admin.contact.readMail', compact( 'c', 'is', 'adminView' ) );
    }




    public function create(Reply $replyTo,Contact $contactFrom, $id){

    	$mailWork = false;

    	if($id == -1){

    		$mailWork = true;

    		return view('admin.contact.composeMail', compact('mailWork') );

    	}else{

    		$contact = $contactFrom->find( $id );


    		return view('admin.contact.composeMail', compact('mailWork', 'contact') );

    	}

    	

    }

    protected function store(ReplyRequest $request, Reply $replyS)
    {


    	if( $request->from == 'dashboard' ){



    		$data = [
                
                'contact_id' => $request->contact_id, 
                'subject'  => $request->subject,
                'message' => $request->message,
                'confirmed' => 0,
                'deleted' => 0,
                'user_id' => Auth::id()
            ];

            if( $request->email ){

    			$data['email'] = $request->email;
    		}

    		if( $request->contact_id ){

    			$data['contact_id'] = $request->contact_id;
    		}

            // The user is logged in...
            $replyS->create( $data );


            return back();


    	}


    }



    public function destroyRepBack2New (Reply $r, $id)
    {
        
        if( Auth::user()->admin != 1 ){

            return redirect('/');
        }else{

                $rep = $r->find( $id )->first();

                $rep->deleted = 1;

                $rep->save();

                return redirect()->route('reply.agree1Del')->withFlashMessage('حذفت');

        }


        
    }


    public function xdestroyRepBack2New (Reply $r, $id)
    {
        
        if( Auth::user()->admin != 1 && Auth::id() != 1 ){

            return redirect('/');
        }else{

                $rep = $r->find( $id )->first();

                $rep->delete();

                return redirect()->route('reply.agree1Del')->withFlashMessage('حذفت');

        }


        
    }


    public function destroyRepAndBack (Reply $r, $id)
    {
        
        if( Auth::user()->admin != 1 ){

            return redirect('/');
        }else{

                $rep = $r->find( $id )->first();

                $rep->deleted = 1;

                $rep->save();

                return back()->withFlashMessage('حذفت');

        }


        
    }

    public function xdestroyRepAndBack (Reply $r, $id)
    {
        
        if( Auth::user()->admin != 1 || Auth::id() != 1 ){

            return redirect('/');
        }else{

                $rep = $r->find( $id )->first();

                $rep->delete();

                return back()->withFlashMessage('حذفت');

        }


        
    }


}
