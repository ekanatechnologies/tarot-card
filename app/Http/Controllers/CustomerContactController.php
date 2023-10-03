<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class CustomerContactController extends Controller
{
    function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required_without:phone',
            'phone'=>'required_without:email',
            'message'=>'required'
        ]);
        $customerContactMessage=new ContactMessage();
        $customerContactMessage->name=$request->name;
        $customerContactMessage->email=$request->email;
        $customerContactMessage->phone=$request->phone;
        $customerContactMessage->message=$request->message;
        if (!$customerContactMessage->save()){
            return redirect()->back()->with('error','Unable to perform this action');
        }
        return redirect()->back()->with('success','Action performed successfully');
    }
}
