@extends('general.layout.app')
@section('page_style')
    <link rel="stylesheet" href="/public/template/general/css/contactpage.css">
@endsection
@section('main')


<div class="contact-page-hero-wrapper">
    <div class="main">
        <div class="contact-page-hero-section">
            <div class="contact-page-hero-left">

                <h1>
                    Contact Us
                </h1>
                <p>
                    Feel free to get conected with us. We are happy to hear it from you, because your feedback makes us better.
                </p>

            </div>



        </div>
    </div>

</div>
<div class="contact-page-form">
    <div class="contact-page-form-bg"></div>

    <div class="contact-form-container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="card form-card-1">
                            <div class="card-body d-flex justify-content-around ">
                                <div>
                                    kmk
                                </div>
                                <div>
                                    <p class="card-text-1">Phone Number</p>
                                    <p class="card-text-1">+ (91) 1800-124-105</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="card form-card-1">
                            <div class="card-body d-flex justify-content-around ">
                                <div>
                                    kmk
                                </div>
                                <div>
                                    <p class="card-text-1">Email ID</p>
                                    <p class="card-text-1">example@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="card form-card-1">
                            <div class="card-body d-flex justify-content-around ">

                                <div>
                                    kmk
                                </div>
                                <div>
                                    <p class="card-text-1">Address</p>
                                    <p class="card-text-1">Lorem ipsum dolodd</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="card form-card-1">
                            <div class="card-body d-flex justify-content-around ">

                                <div>
                                    kmk
                                </div>
                                <div>
                                    <p class="card-text-1">Website</p>
                                    <p class="card-text-1">+ (91) 1800-124-105</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                <div class="row">
                    <div class="card form-card-2 mb-2">
                        <form method="post" action="{{route('contactUsCreate')}}">
                            @csrf
                            <fieldset class="mb-3 row p-2">
                                <legend class="col-form-legend col-12">Send Messege</legend>
                                <div class="col-12 ">
                                    Send your message, and we will get back to you...
                                </div>
                            </fieldset>
                            <div class=" row p-2">
                                <div class="col-12 d-flex g-2">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" name="name" placeholder="Name">
                                            @error('name')
                                            <span class="invalid-feedback">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" name="email" placeholder="Email Address">
                                            @error('email')
                                            <span class="invalid-feedback">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class=" row p-2">

                                <div class="col-12  d-flex g-2 justify-content-center">
                                    <div class="row">
                                        <div class="col">
                                            <input type="tel" class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}" name="phone" id="phone" placeholder="Phone No.">
                                            @error('phone')
                                            <span class="invalid-feedback">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control @error('subject') is-invalid @enderror" value="{{old('subject')}}" name="subject" id="subject" placeholder="Subject">
                                            @error('subject')
                                            <span class="invalid-feedback">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="mb-1 p-2">
                                <div class="form-floating">
                                        <textarea name="message" class="form-control @error('message') is-invalid @enderror" placeholder="Leave a comment here"
                                                  id="floatingTextarea2" style="height:80px">{{old('message')}}</textarea>
                                    <label for="floatingTextarea2">Enter your message here</label>
                                    @error('message')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-4 ">
                                    <button class="ml-3 form-page-btn">
                                        Send
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>

@endsection
@section('page_script')
@endsection
