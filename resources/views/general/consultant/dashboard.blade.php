@extends('general.layout.app')
@section('page_style')
    <link rel="stylesheet" href="/public/template/general/css/tarot-reader-detail.css">
@endsection
@section('main')
    <section class="user-section">
    <div class="row">
        <div class="col user-profile">
            <div class="profile">
                <div class="profile-image">
                    <img
                        @if(isset($data->user_data) && $data->user_data->media->where('reference','profile_picture')->first())
                            src="{{asset($data->user_data->media->where('reference','profile_picture')->first()->path)}}"
                        @else
                            src="https://cdn-icons-png.flaticon.com/128/1144/1144709.png"
                        @endif
                        class="img-thumbnail">
                </div>
                <h3 class="profile-name">{{auth()->user()->name}}</h3>
                <h6>Exp : {{isset($data->user_data)? $data->experience:'---'}} Years</h6>
                <h6>{{isset($data->user_data)? implode(',',json_decode($data->languages)):'---'}}</h6>
                <a href="{{route('consultant.profile-edit-page')}}" class="schedule-btn btn">Edit Profile <i class="fa-solid fa-pencil ml-2"></i></a>
            </div>
            <div class="section-reviews">
                <h2 class="review-caption">Reviews</h2>
                <hr style="width: 100%; height: 1px; opacity: 1; color: #C5C5C5;"/>
                <div class="review">
                    <div class="review-info">
                        <div class="review-img">
                            <img src="/public/template/general/image/Reviw.png" alt="">
                        </div>
                        <div class="review-name">
                            <h3>Maad Sa'ati</h3>
                            <img src="/public/template/general/image/four-star.png" alt="">
                        </div>
                    </div>
                    <div class="review-content">
                        <h4>In publishing and graphic design, Lorem ipsum is a placeholder</h4>
                    </div>
                </div>
                <hr style="width: 100%; height: 1px; opacity: 1; color: #C5C5C5;"/>
                <div class="review">
                    <div class="review-info">
                        <div class="review-img">
                            <img src="/public/template/general/image/Reviw.png" alt="">
                        </div>
                        <div class="review-name">
                            <h3>Maad Sa'ati</h3>
                            <img src="/public/template/general/image/four-star.png" alt="">
                        </div>
                    </div>
                    <div class="review-content">
                        <h4>In publishing and graphic design, Lorem ipsum is a placeholder</h4>
                    </div>
                </div>
                <hr style="width: 100%; height: 1px; opacity: 1; color: #C5C5C5;"/>
                <div class="review">
                    <div class="review-info">
                        <div class="review-img">
                            <img src="/public/template/general/image/Reviw.png" alt="">
                        </div>
                        <div class="review-name">
                            <h3>Maad Sa'ati</h3>
                            <img src="/public/template/general/image/four-star.png" alt="">
                        </div>
                    </div>
                    <div class="review-content">
                        <h4>In publishing and graphic design, Lorem ipsum is a placeholder</h4>
                    </div>
                </div>
                <hr style="width: 100%; height: 1px; opacity: 1; color: #C5C5C5;"/>
                <div class="review">
                    <div class="review-info">
                        <div class="review-img">
                            <img src="/public/template/general/image/Reviw.png" alt="">
                        </div>
                        <div class="review-name">
                            <h3>Maad Sa'ati</h3>
                            <img src="/public/template/general/image/four-star.png" alt="">
                        </div>
                    </div>
                    <div class="review-content">
                        <h4>In publishing and graphic design, Lorem ipsum is a placeholder</h4>
                    </div>
                </div>
                <hr style="width: 100%; height: 1px; opacity: 1; color: #C5C5C5;"/>
                <div class="review">
                    <div class="review-info">
                        <div class="review-img">
                            <img src="/public/template/general/image/Reviw.png" alt="">
                        </div>
                        <div class="review-name">
                            <h3>Maad Sa'ati</h3>
                            <img src="/public/template/general/image/four-star.png" alt="">
                        </div>
                    </div>
                    <div class="review-content">
                        <h4>In publishing and graphic design, Lorem ipsum is a placeholder</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col user-description">

            <div class="row">
                <div class="col my-services">
                    <h2>About My Services</h2>
                    <hr style="width: 100%; height: 1px; opacity: 1; color: #C5C5C5;"/>
                    <p>{{ isset($data->user_data)? $data->about:'---'}}</p>


                </div>
                <div class="col our-expertiese">
                    <div class="specialization">
                        <h2>Specialization</h2>
                        <hr style="width: 100%; height: 1px; opacity: 1; color: #C5C5C5;"/>
                        <div class="specialization-content">
                            @if(isset($data->user_data))
                                @foreach(json_decode($data->specialization) as $value)
                                    <div>{{$value}}</div>
                                @endforeach
                            @endif

                        </div>
                    </div>
                    <div class="exprience-qualification">
                        <h2>Experience & Qualification</h2>
                        <p>{{isset($data->user_data)? $data->qualification:'--'}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
