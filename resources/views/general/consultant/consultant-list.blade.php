@extends('general.layout.app')
@section('page_style')
    <link rel="stylesheet" href="/public/template/general/css/tarot-reader-detail.css">
@endsection
@section('main')
    <div class="main">
        <section class="card-reader-section">
            <div class="rn-rendar-container">
                <div class="row">
                    @foreach($consultants as $c)
                        <div class="col-3 mb-5 animate__animated animate__bounce">
                            <div class="rn-rendar-list">
                                <span class="icon-1">
                                  <img width="100%" height="100%"
                                       src="{{count($c->profile_pic)>0?'/'.$c->profile_pic->first()->path:'https://cdn-icons-png.flaticon.com/128/1144/1144709.png'}}"
                                       alt="anstro-1">
                                </span>
                                <div class="inner">
                                    <p class="title">{{$c->name}}</p>
                                    <p>Exp : {{$c->consultant_info->experience}} Years</p>
                                    <p>{{$c->consultant_info->about}}</p>

                                </div>
                                <div class="inner-btn">
                                    <a class="btn btn-primary rounded shadow rounded-pill">Chat <i
                                            class="fa-solid fa-comments ms-2"></i></a>
                                    <span
                                        class="badge bg-success">${{$c->consultant_info->vid_consult_charge/60}}/min</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <div class="">
            <div class="">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">2</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
