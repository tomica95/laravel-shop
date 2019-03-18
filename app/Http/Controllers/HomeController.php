<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Brand;

use App\Models\Watch;

use App\Models\Activity;

use Mail;

class HomeController extends Controller
{
    public function index()
    {   
        $data['brands'] = Brand::all();

        $data['watches'] = Watch::orderBy('visits','DESC')
                    ->take(10)
                    ->get();

        


        return view('welcome',$data);
    }

    public function contact_show(){



        return view('pages.contact');

    }

    public function store(Request $request)
    {


        $this->validate($request,[

            'txtName'=>'required|min:2',
            'txtEmail'=>'required|email',
            'txtQuestion'=>'required|min:5',
            'txtMsg'=>'required|min:5'

        ]);

        

        Mail::send('emails.contact-message',[

            'msg' => $request->txtMsg

        ],function($mail) use($request){

            $mail->from($request->txtEmail, $request->txtName);

            $mail->to('toma.selea.103.14@ict.edu.rs')->subject($request->txtQuestion);
        });

        $activity = new Activity;

            $activity->client = request()->server('HTTP_USER_AGENT');

            $activity->description = 'User contacted admin with email - '.$request->txtEmail.' and with question'.$request->textQuestion;

            $activity->save();

        return redirect()->back()->with('flash_message','Thank you for contacting');

        

        
    }

    

  

    
}
