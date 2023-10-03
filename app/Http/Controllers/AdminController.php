<?php

namespace App\Http\Controllers;

use App\Models\WebsiteSetting;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        return view('panel.admin.index');
    }
    function user_list()
    {
        return view('panel.admin.user.index');
    }

    function websiteSettingsView()
    {
        $data=WebsiteSetting::all();
        return view('panel.admin.setting.website-setting',['data'=>$data]);
    }
    function websiteSettings(Request $request)
    {
        $validationRules=[
            'field_website_name' => 'required|max:128',
            'field_website_email'=>'required|email',
            'field_website_phone'=>'required|digits:10',
            'field_website_address'=>'required',
        ];
        if ($request->has('field_website_logo')){
            $validationRules['field_website_logo']='file|mimes:jpg,bmp,webp,jpeg';
        }
        $request->validate($validationRules);
        $websiteSetting=new WebsiteSetting();
        $websiteSetting->title=$request->field_website_name;
        $websiteSetting->email=$request->field_website_email;
        $websiteSetting->phone=$request->field_website_phone;
        $websiteSetting->address=$request->field_website_address;
        if (!$websiteSetting->save()){
            return redirect()->back()->with('error','Unable to perform this action');
        }
        return redirect()->back()->with('success','Action performed successfully');
    }
}
