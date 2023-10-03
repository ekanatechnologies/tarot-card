@extends('general.layout.app')
@section('page_style')
    <link rel="stylesheet" href="/public/template/general/css/screen.css">
@endsection
@section('main')
    <section class="user-section">
        <div class="row">
            <div class="chatpage-section">

                <div class="main">

                    <div class="user-profile-page-2">
                        <div class="row justify-content-center align-items-center g-2">

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                                <div class="user-profile-availabity">
                                    <div class="card text-start user-profile-availabity-1">
                                        <div class="card-body">
                                            <div class="row mb-2 pt-4 pl-4">
                                                <h4>Actions</h4>
                                            </div>
                                            <hr style="width:100%; margin: auto;" />
                                            <div class="">
                                                <ul class="nav nav-pills flex-column mb-auto">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link text-primary border-right border-primary h5" aria-current="page">
                                                            <i class="fa-solid fa-user mr-3"></i>
                                                            Profile
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link link-dark h5" aria-current="page">
                                                            <i class="fa-solid fa-comments mr-2"></i>
                                                            Chat History
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link link-dark h5" aria-current="page">
                                                            <i class="fa-solid fa-credit-card mr-2"></i>
                                                            Credit History
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link link-dark h5" aria-current="page">
                                                            <i class="fa-solid fa-repeat mr-2"></i>
                                                            Refund Raise
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link link-dark h5" aria-current="page">
                                                            <i class="fa-solid fa-comment-dots mr-2"></i>
                                                            Notification
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                                <div class="user-profile-header">
                                    <div class="card user-profile-availabity-left">
                                        <div class="row">
                                            <h3 class="text-left  pl-5 pt-2  ">User Profile</h3>
                                        </div>
                                        <div class="container">

                                            <div class="row m-1  g-0">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                    <div class="card user-profile-availabity-card-1">
                                                        <div class="card-body">
                                                            <div class="">
                                                                <img src="/public/files/images/general/main/user-profile-1.png" alt="df">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                    <div class="card user-profile-availabity-card-1">
                                                        <div class="card-body">
                                                            <div class="card-title edit-profil-tit ">
                                                                <p>Vaibhav Valmiki</p>
                                                                <p>Phone number : 077 0798 1998</p>
                                                                <p>vaibhav va@gmail.com</p>
                                                                <p>Address</p>
                                                                <p>Street: 25 Park Avenue, United Kingdom 66 Whatlington Road
                                                                </p>

                                                            </div>
                                                            <div class="edit-profile-btn">
                                                                <div><img src="/public/files/images/general/main/edit-profile-icon.png" alt="">
                                                                </div>
                                                                <p>Edit Profile</p>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                    <div class="card user-profile-availabity-card-2">
                                                        <div class="card-body">
                                                            <div class="user-profile-wallet">
                                                                <div>
                                                                    <img src="/public/files/images/general/Group-25367.png" alt="enter" />
                                                                </div>
                                                                <div>
                                                                    Wallet
                                                                </div>
                                                                <div class="user-profile-wallet-amount">
                                                                    0.00
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="container mt-4">
                                            <div class="row">
                                                <div class="12">
                                                    <h4>About You</h4>
                                                </div>
                                                <div class="d-flex mt-2 justify-content-around">
                                                    <div class="p-2"> I am a professional Tarot Reader and a Healer. I received
                                                        the Nari Shakti award for my level of proficiency in Tarot reading. It
                                                        is always a pleasure for me to receive excellent reviews from my
                                                        clients. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
