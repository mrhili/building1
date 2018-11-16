<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\User;

use Illuminate\Http\Request;

use App\Http\Requests\ContactRequest;

use App\Contact;

use Datatables;

use Form;

use Html;

use App\Mail\SendMessage;

use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function __construct()
    {

        $this->middleware('admin', ['except' => ['form', 'store']]);


    }

    

    public function index(){

    	return view('admin.contact.index');
    }

    public function seenRepDel(Contact $c){

        $contacts = $c->where('view', 1)->where('reply', 1)->where('deleted', 1)->paginate( 25 );

        $wichF = 'seenRepDel';

        return view( 'admin.contact.mailBox', compact('wichF', 'contacts') );
    }

    public function seenRep1Del(Contact $c){

        $contacts = $c->where('view', 1)->where('reply', 1)->where('deleted', 0)->paginate( 25 );

        $wichF = 'seenRep1Del';

        return view( 'admin.contact.mailBox', compact('wichF', 'contacts') );
    }

    public function seen1RepDel(Contact $c){

        $contacts = $c->where('view', 1)->where('reply', 0)->where('deleted', 1)->paginate( 50 );

        $wichF = 'seen1RepDel';

        return view( 'admin.contact.mailBox', compact('wichF', 'contacts') );
    }

    public function seen1Rep1Del(Contact $c){

        $contacts = $c->where('view', 1)->where('reply', 0)->where('deleted', 0)->paginate( 50 );

        $wichF = 'seen1Rep1Del';

        return view( 'admin.contact.mailBox', compact('wichF', 'contacts') );
    }



    public function unSeenRepDel(Contact $c){

        $contacts = $c->where('view', 0)->where('reply', 1)->where('deleted', 1)->paginate( 25 );

        $wichF = 'unSeenRepDel';

        return view( 'admin.contact.mailBox', compact('wichF', 'contacts') );
    }

    public function unSeenRep1Del(Contact $c){

        $contacts = $c->where('view', 0)->where('reply', 1)->where('deleted', 0)->paginate( 25 );

        $wichF = 'seenRepDel';

        return view( 'admin.contact.mailBox', compact('wichF', 'contacts') );
    }

    public function unSeen1RepDel(Contact $c){

        $contacts = $c->where('view', 0)->where('reply', 0)->where('deleted', 1)->paginate( 50 );

        $wichF = 'seenRepDel';

        return view( 'admin.contact.mailBox', compact('wichF', 'contacts') );
    }

    public function unSeen1Rep1Del(Contact $c){

        $contacts = $c->where('view', 0)->where('reply', 0)->where('deleted', 0)->paginate( 50 );

        $wichF = 'seenRepDel';

        return view( 'admin.contact.mailBox', compact('wichF', 'contacts') );
    }
    
    /**/
    public function contactBoxUnseen(Contact $c){

    	$contacts = $c->where('view', 0)->paginate( 50 );

    	$wichF = 'mailBoxUnseen';

    	return view('admin.contact.mailBox', compact('wichF', 'contacts') );
    }

    public function contactBox(Contact $c){

        $contacts = $c->get();

        $wichF = 'mailBox';

        return view('admin.contact.mailBox', compact('wichF', 'contacts'));
    }

/**/



    public function hasBeenSeenNotWebMaster(Contact $contact, $id){

        $message = $contact->find( $id )->first();

        if( $message->view == 1 ){

            response()->json($message);

        }else{

            $message->view = 1;

        }

        $message->save();

        return response()->json($message);
    } 



    public function hasBeenSeen(Contact $contact, $id){

        $message = $contact->find( $id )->first();

        if( $message->view ==  1 ){

            $message->view =  0;

        }else{

            $message->view = 1;

        }

        $message->save();

        return response()->json($message);
    }   

    public function form(){

    	return view('website.contact.contact');
    }


    public function response(Contact $contact, $id){

    	$message = $contact->find( $id )->get();

    	return view('admin.contact.response', compact('message'));
    }

    public function create()
    {
    	# code...
    	return view('admin.contact.create');
    }

    protected function store(ContactRequest $request, Contact $contactS)
    {


    	if( $request->from == 'website' ){

    		$data = [
                'name' => $request->name,
                'email' => $request->email, 
                'phoneNumber' => $request->phoneNumber, 
                'type' => $request->type, 
                'type'  => $request->type,
                'subject'  => $request->subject,
                'message' => $request->message,
                'view' => 0,
                'reply' => 0,
                'deleted' => 0
            ];


            // The user is logged in...
            $contactS->create( $data );

            $contentMail = new SendMessage( $request->all() );

            //getSetting( "email" );

            Mail::to( getSetting('email') )->queue( $contentMail );

            return back()->withFlashMessage('أرسلت الرسالة');


    	}else if( $request->from == 'dashboard' ){

    	}


    }

    public function show( Contact $contactSM, $id ){

    	$c = $contactSM->find( $id );

        $adminView = false;

        $is = 'message';

        if( Auth::id() != 1 ){

            if( $c->deleted == 1 ){

                return back();

            }

        }else{

            $adminView = true;

        }

    	return view('admin.contact.readMail', compact( 'c', 'is', 'adminView' ) );
    }

    public function edit(User $user, $id)
    {
    	$user = $user->findOrFail( $id );

    	return view( 'admin.user.edit', compact( 'user' ) );
        
    }
    protected function update(AddUserRequestByAdmin $request, User $user)
    {

    	$userUpdate = $user->findOrFail( $id );

    	$userUpdate->fill( $request->all()->save() );

    	flash('تهانينا تم التحديت بنجاح', 'success');

        return back();
    }

    public function destroy (User $user, $id)
    {
    	
        
    }

    public function destroyMessageBack2New (Contact $c, $id)
    {
        
        if( Auth::user()->admin != 1 ){

            return redirect('/');
        }else{

                $message = $c->find( $id )->first();

                $message->deleted = 1;

                $message->save();

                return redirect()->route('contact.unSeen1Rep1Del')->withFlashMessage('حذفت');

        }


        
    }


    public function xdestroyMessageBack2New (Contact $c, $id)
    {
        
        if( Auth::user()->admin != 1 && Auth::id() != 1 ){

            return redirect('/');
        }else{

                $message = $c->find( $id )->first();

                $message->delete();

                return redirect()->route('contact.unSeen1Rep1Del')->withFlashMessage('حذفت');

        }


        
    }


    public function destroyMessageAndBack (Contact $c, $id)
    {
        
        if( Auth::user()->admin != 1 ){

            return redirect('/');
        }else{

                $message = $c->find( $id )->first();

                $message->deleted = 1;

                $message->save();

                return back()->withFlashMessage('حذفت');

        }


        
    }

    public function xdestroyMessageAndBack (Contact $c, $id)
    {
        
        if( Auth::user()->admin != 1 || Auth::id() != 1 ){

            return redirect('/');
        }else{

                $message = $c->find( $id )->first();

                $message->delete();

                return back()->withFlashMessage('حذفت');

        }


        
    }



    public function anyData(Contact $contact)
    {

      $contact = $contact->all();

        return Datatables::of($contact)

           



            ->editColumn('type', function ($model) {

                return contactType( $model->type );


                		
            })

            ->editColumn('view', function ($model) {

                return contactSeen( $model->view );


                		
            })

            ->editColumn('reply', function ($model) {

                return contactRepleyed( $model->reply );


                		
            })
            
            ->editColumn('response', function ($model) {

                return link_to_route('contact.response', 'الإجابة على الرسالة', [ $model->id ], ['class' => 'btn btn-info btn-circle']);


                		
            })

            ->editColumn('delete', function ($model) {
            		
            		return link_to_route('admin-users-panel.destroy', 'حذف الرسالة', [ $model->id ], ['id' => 'delete', 'class' => 'btn btn-danger btn-circle']);

            })
            ->make(true);

    }




}
