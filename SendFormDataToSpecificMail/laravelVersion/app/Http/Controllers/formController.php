<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;

class formController extends Controller
{
    
    public function index()
    {
        return view('pages.home');
    }

    public function thankYou()
    {
        return view('pages.thankYou');
    }

    public function store(Request $request)
    {
        
        $data = [ 
                  'name'=> $request->name,
                  'email'=> $request->email,
                  'phone'=> $request->phone,
                  'occupation'=> $request->occupation  
                ];

        Mail::send('layouts.mailLayout',$data, function ($message)
        {
            $message->to('kevin_mogi@yahoo.co.id')
                    ->subject('New Visitor');
        });

      return redirect()->route('thankyou');
 
    }
}
