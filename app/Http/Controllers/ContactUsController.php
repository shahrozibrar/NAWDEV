<?php 
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Illuminate\Support\Facades\Session;
 
class ContactUSController extends Controller
{
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUS()
   {
       return view('contact-us');
   }
 
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactSaveData(Request $request)
   {
       $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
		'subject'=>'required',
        'message' => 'required',
        'number' => 'required'
        ]);
 
       ContactUS::create($request->all());

       \Mail::send('contactus',
       array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
		   'subject' => $request->get('subject'),
           'user_message' => $request->get('message'),
           'number' => $request->get('number')
       ), function($message) use ($request)
   {
      $message->from('nawdev@gmail.com');
      $message->to('nawdev23@gmail.com', 'Admin')->subject($request->get('subject'));
   });
   Session::flash('flash_message','Thanks for contacting us we will get in touch with you soon');
       return back();
   }
}
