@extends('general.layout.app')
@section('page_style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/yaireo/tagify@4.17.9/dist/tagify.css">
@endsection
@section('main')
   <div class="container">
       <div class="row">
           <div class="col">
               <form enctype="multipart/form-data" method="post" action="{{route('consultant.profile-edit')}}">
                   @csrf
                   <div class="card wow animate__animated animate__slideInUp">
                       <div class="card-header h4">
                           Profile Edit
                       </div>
                       <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                                    <div class="row">
                                        <div class="col">
                                            <center>
                                                <img
                                                    @if(isset($data->user_data) && $data->user_data->media->where('reference','profile_picture')->first())
                                                        src="{{asset($data->user_data->media->where('reference','profile_picture')->first()->path)}}"
                                                    @else
                                                        src="https://cdn-icons-png.flaticon.com/128/1144/1144709.png"
                                                    @endif
                                                    alt="" class="img-fluid img-thumbnail mb-2">
                                            </center>
                                            <input type="file" name="field_image" class="form-control @error('field_image') is-invalid @enderror">
                                            @error('field_image')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row mb-2">
                                        <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="form-group">
                                                <label for="field_name">Name</label>
                                                <input type="text" name="field_name" class="form-control @error('field_name') is-invalid @enderror" id="field_name" placeholder="Enter Name" value="{{auth()->user()->name}}">
                                                @error('field_name')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="form-group">
                                                <label for="field_email">Email</label>
                                                <input disabled type="email" class="form-control @error('field_email') is-invalid @enderror" id="field_email" placeholder="Enter Email" value="{{auth()->user()->email}}">
                                                @error('field_email')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="form-group">
                                                <label for="field_experience">Experience</label>
                                                <input type="number" name="field_experience" class="form-control @error('field_experience') is-invalid @enderror" id="field_experience" placeholder="Years of experience" value="{{isset($data->experience)?$data->experience:null}}">
                                                <small class="">Years of experience</small>
                                                @error('field_experience')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="form-group">
                                                <label for="field_about">About</label>
                                                <textarea name="field_about" class="form-control @error('field_about') is-invalid @enderror" id="field_about" placeholder="Describe about yourself. It will be visible to your visitors.">{{(isset($data->about))?$data->about:''}}</textarea>
                                                @error('field_about')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="form-group">
                                                <label for="field_qualification">Qualification and specialization</label>
                                                <textarea name="field_qualification" class="form-control @error('field_qualification') is-invalid @enderror" id="field_qualification" placeholder="Your qualification and specialization.">{{(isset($data->qualification))?$data->qualification:''}}</textarea>
                                                @error('field_qualification')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="form-group">
                                                <label for="field_tags">Specializations</label>
                                                <input value="{{(isset($data->specialization)?$data->specialization:null)}}" type="text" name="field_tags" class="tags form-control @error('field_tags') is-invalid @enderror" id="field_tags" placeholder="Specialization tags">
                                                <small class="">Type and press enter</small>
                                                @error('field_tags')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="form-group">
                                                <label for="field_languages">Languages</label>
                                                <input value="{{isset($data->languages)?$data->languages:null}}" type="text" name="field_languages" class="tags form-control @error('field_languages') is-invalid @enderror" id="field_languages" placeholder="Specialization tags">
                                                <small class="">Languages</small>
                                                @error('field_languages')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="form-group">
                                                <label for="field_vid_consult_charge">Video Call Charges</label>
                                                <input value="{{isset($data->vid_consult_charge)? $data->vid_consult_charge/60:null}}" type="number" min="0" name="field_vid_consult_charge" class="tags form-control @error('field_vid_consult_charge') is-invalid @enderror" id="field_vid_consult_charge" placeholder="Specialization">
                                                <small class="">Per Minute Video Call Charge</small>
                                                @error('field_vid_consult_charge')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                       <div class="card-footer">
                           <div class="float-end">
                               <button class="btn btn-md btn-primary">Submit <i class="fa-solid fa-check ms-2"></i></button>
                           </div>
                       </div>
                   </div>
               </form>
           </div>
       </div>
   </div>
@endsection
@section('page_script')
    <script src="https://cdn.jsdelivr.net/gh/yaireo/tagify@4.17.9/dist/tagify.min.js"></script>
    <script>
        $(document).ready(function () {
            var field_tags = document.querySelector('input[name=field_tags]');
            var field_languages = document.querySelector('input[name=field_languages]');
            new Tagify(field_tags);
            new Tagify(field_languages);
        });
    </script>
@endsection
