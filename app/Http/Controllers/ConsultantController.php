<?php

namespace App\Http\Controllers;

use App\Models\ConsultantInfo;
use App\Models\File;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Storage;

class ConsultantController extends Controller
{
    function index()
    {
        $data=ConsultantInfo::with('user_data')->where('user_id',auth()->user()->id)->first();
        return view('general.consultant.dashboard',['data'=>$data]);
    }
    function profilePage()
    {
        return view('general.consultant.profile.profile_page');
    }
    function profileEditPage()
    {
        $data=ConsultantInfo::with('user_data')->where('user_id',auth()->user()->id)->first();
        return view('general.consultant.profile.edit',['data'=>$data]);
    }
    function profileEdit(Request $request)
    {
        $validationRules=[
            'field_name'=>'min:3',
            'field_email'=>'email|unique:users,email,'.auth()->user()->id,
            'field_experience'=>'integer|between:0.5,80',
            'field_about'=>'',
            'field_qualification'=>'',
            'field_vid_consult_charge'=>'required|integer|gt:0',
            'field_tags'=>'required',
            'field_languages'=>'required',
        ];
        if ($request->hasFile('field_image')){
            $validationRules['field_image']='file|mimes:bpm,jpg,jpeg,png,webp';
        }
        $request->validate($validationRules);

        if ($request->hasFile('field_image')){
            $imgInDb=File::where(['additional'=>'profile_picture_consultant','reference_id'=>auth()->user()->id])->first();
            if(!$imgInDb){
                $image=new File();
            } else{
                Storage::disk('my_public')->delete($imgInDb->path);
                $image=$imgInDb;
            }
            $image->path=Storage::disk('my_public')->put('images', $request->field_image);
            $image->reference='profile_picture';
            $image->reference_id=auth()->user()->id;
            $image->additional='profile_picture_consultant';
            $image->created_by=auth()->user()->id;
            if(!$image->save()) {
                return redirect()->back()->withErrors('Unable to save the image');
            }
        }

        $inDb=ConsultantInfo::where(['user_id'=>auth()->user()->id])->first();
        if(!$inDb){
            $info=new ConsultantInfo();
        } else{
            $info=$inDb;
        }
        $user=User::find(auth()->user()->id);
        $userToBeUpdated=false;
        if ($request->has('field_name')){
            $userToBeUpdated=true;
            $user->name=$request->field_name;
        }
        if ($request->has('field_email')){
            $userToBeUpdated=true;
            $user->email=$request->field_email;
        }
        $info->user_id=auth()->user()->id;
        $info->experience=$request->field_experience;
        $info->about=$request->field_about;
        $info->qualification=$request->field_qualification;
        $info->vid_consult_charge=(float)$request->field_vid_consult_charge*60;
        $info->specialization=json_encode(array_column(json_decode($request->field_tags),'value'));
        $info->languages=json_encode(array_column(json_decode($request->field_languages),'value'));
        if(!$info->save()) {
            return redirect()->back()->withErrors('Unable to perform this action');
        }
        if ($userToBeUpdated){
            $user=User::find(auth()->user()->id);
            if(!$user->save()) {
                return redirect()->back()->withErrors('Unable to update user data');
            }
        }
        return redirect()->back()->with('success','Action performed successfully');
    }

    function listPage()
    {
        $consultants=User::role('consultant')->with('consultant_info')->get();
        return view('general.consultant.consultant-list',['consultants'=>$consultants]);
    }
}
