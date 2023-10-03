@extends('general.layout.app')
@section('main')

    <div class="hero-wrapper">

        <div class="hero-section">
            <div class="left">
                <h4>Trust our experience</h4>
                <h1>
                    Start control of your
                </h1>
                <h3>
                    professional destiny
                </h3>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content .
                    of a page when looking at its layout. The point of using Lorem Ipsum.
                </p>


                <a href="#" class="btn white  enrol-icon">Book Appointment</a>
            </div>

            <div class="right">
                <img width="100%" height="100%" src="/public/files/images/general/Clip path group.png" alt=""/>
            </div>

            <!-- <div class="achievement-cards">
                <div class="achievement-card students-enrolled">
                  <div class="content">
                    <div>
                      <h3>32K</h3>
                    </div>
                    <p>Students Enrolled</p>
                  </div>

                  <div class="bg"></div>
                </div>

                <div class="achievement-card overall-rating">
                  <div class="content">
                    <div>
                      <h3>4.7</h3>
                      <img src="/public/files/images/general/start-icon.svg" alt="" />
                    </div>
                    <p>Overall Rating</p>
                  </div>

                  <div class="bg"></div>
                </div>
              </div> -->
        </div>
    </div>

    <!-- End of the hero section -->

    <!-- Start of the Top Rated Tarot Card Reader section -->
    <div class="tarot-card">
        <div class="main">
            <section class="card-reader-section">
                <h2>Top Rated Tarot Card Reader</h2>
                <div class="rendar-content">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page
                        when
                        looking at its layout. The point of using Lorem Ipsum. </p>

                </div>

                <div class="reader-footer-img">
                    <img width="100%" height="100%" src="/public/files/images/general/image-torot-footer.png"
                         alt="reader-footer-img">
                </div>

                <div class="rn-rendar-container">
                    <div class="rn-rendar-list">
            <span class="icon-1">
              <img width="100%" height="100%" src="/public/files/images/general/anstro-1.png" alt="anstro-1">
            </span>
                        <div class="inner">
                            <p class="title">Vaibhav Valmiki</p>
                            <p>Exp : 15 years</p>
                            <p>LOVE & LIFE - Honest answers Intuitive psychic life coach</p>

                        </div>
                        <div class="inner-btn">
                            <div class="inner-btn-chat-now">
                                Chat Now
                            </div>
                            <div>
                                $2/min
                            </div>
                        </div>
                    </div>

                    <div class="rn-rendar-list">
            <span class="icon-1">
              <img width="100%" height="100%" src="/public/files/images/general/anstro-2.png" alt="anstro-1">
            </span>
                        <div class="inner">
                            <p class="title">Vaibhav Valmiki</p>
                            <p>Exp : 15 years</p>
                            <p>LOVE & LIFE - Honest answers Intuitive psychic life coach</p>

                        </div>
                        <div class="inner-btn">
                            <div class="inner-btn-chat-now">
                                Chat Now
                            </div>
                            <div>
                                $2/min
                            </div>
                        </div>
                    </div>

                    <div class="rn-rendar-list">
            <span class="icon-1">
              <img width="100%" height="100%" src="/public/files/images/general/anstro-3.png" alt="anstro-1">
            </span>
                        <div class="inner">
                            <p class="title">Rosslyn</p>
                            <p>Exp : 15 years</p>
                            <p>LOVE & LIFE - Honest answers Intuitive psychic life coach</p>

                        </div>
                        <div class="inner-btn">
                            <div class="inner-btn-chat-now">
                                Chat Now
                            </div>
                            <div>
                                $2/min
                            </div>
                        </div>
                    </div>

                    <div class="rn-rendar-list">
            <span class="icon-1">
              <img width="100%" height="100%" src="/public/files/images/general/anstro-4.png" alt="anstro-1">
            </span>
                        <div class="inner">
                            <p class="title">Jennifer</p>
                            <p>Exp : 15 years</p>
                            <p>LOVE & LIFE - Honest answers Intuitive psychic life coach</p>

                        </div>
                        <div class="inner-btn">
                            <div class="inner-btn-chat-now">
                                Chat Now
                            </div>
                            <div>
                                $2/min
                            </div>
                        </div>
                    </div>
                    <div class="rn-rendar-list">
            <span class="icon-1">
              <img width="100%" height="100%" src="/public/files/images/general/anstro-4.png" alt="anstro-1">
            </span>
                        <div class="inner">
                            <p class="title">Jennifer</p>
                            <p>Exp : 15 years</p>
                            <p>LOVE & LIFE - Honest answers Intuitive psychic life coach</p>

                        </div>
                        <div class="inner-btn">
                            <div class="inner-btn-chat-now">
                                Chat Now
                            </div>
                            <div>
                                $2/min
                            </div>
                        </div>
                    </div>
                    <a href="{{route('consultant.list.all-page')}}" style="text-decoration: none">
                        <div class="rn-rendar-list d-flex h1">
                            See All
                            <div class="">
                                <i class="fa-solid fa-circle-chevron-right text-primary"></i>
                            </div>
                        </div>
                    </a>
                </div>


            </section>
        </div>
    </div>



    <!-- End of the Top Rated Tarot Card Reader section-->




    <!-- End of testimonials Section -->

    <!--Start of services section -->
    <div class="main">
        <section class="services-section">


            <h2 class="light">Our Services</h2>
            <div class="services-img-inner">
                <img src="/public/files/images/general/services-img.png" alt="services-img">
            </div>
            <p class="services-para">
                It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at
                its layout. The point of using Lorem Ipsum.
            </p>

            <div class="services-cards">
                <div class="services-card">
                    <img src="/public/files/images/general/services-rectangle-1.png" alt=""/>

                    <div class="info">
                        <h3>Psychic Reading</h3>

                    </div>
                </div>

                <div class="services-card">
                    <img src="/public/files/images/general/services-img-2.png" alt=""/>

                    <div class="info">
                        <h3>Tarot card reading </h3>

                    </div>
                </div>
                <div class="services-card">
                    <img src="/public/files/images/general/services-img-3.png" alt=""/>

                    <div class="info">
                        <h3> Fortune Telling</h3>

                    </div>
                </div>
            </div>
            <div class="services-cards">
                <div class="services-card">
                    <img src="/public/files/images/general/services-img-4.png" alt=""/>

                    <div class="info">
                        <h3>Psychic Reading</h3>

                    </div>
                </div>

                <div class="services-card">
                    <img src="/public/files/images/general/services-img-5.png" alt=""/>

                    <div class="info">
                        <h3>Tarot card reading </h3>

                    </div>
                </div>
                <div class="services-card">
                    <img src="/public/files/images/general/services-img-6.png" alt=""/>

                    <div class="info">
                        <h3> Fortune Telling</h3>

                    </div>
                </div>
            </div>


        </section>
    </div>

    <!-- End of services section -->



    <!-- Start of Customer Says section-->


    <section class="customer-satisfaction-section">
        <div class="main">
            <div class="row">
                <div class="col-lg-8 col-xs-12 col-sm-12 col-md-12">
                    <h3 class="mt-3 ">What's Our Customer Says</h3>
                    <p class="mb-3 satisfaction-para">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Lorem Ipsum has been the
                        industry's</p>
                </div>
                <div class="col-lg-4 col-xs-12 col-sm-12 col-md-12">

                    <p class="mt-4 satisfaction-para-1">Happy Customers</p>
                    <p class="satisfaction-para-2">Lorem Ipsum is simply dummy text</p>
                </div>
            </div>
            <div class="slider-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="inam" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="card" style="width: 330px;margin: auto;">

                                                        <div class="card-body">
                                                            <h4 class="card-title">Quality Of Service</h4>
                                                            <p class="card-text">Lorem Ipsum is simply dummy text of the
                                                                printing and typesetting
                                                                industry. Lorem Ipsum has been the industry's standard
                                                                dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and
                                                                scrambled it to make a type specimen
                                                                book.</p>
                                                            <div class="customer-footer">
                                                                <div>
                                                                    <img
                                                                        src="/public/files/images/general/Group-2126.png"
                                                                        alt="Group-2126">
                                                                </div>
                                                                <div>
                                                                    <p>Maad Sa'ati</p>
                                                                    <span>CEO</span>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="card" style="width: 330px;">

                                                        <div class="card-body">
                                                            <h4 class="card-title">Customer Satisfaction</h4>
                                                            <p class="card-text">Lorem Ipsum is simply dummy text of the
                                                                printing and typesetting
                                                                industry. Lorem Ipsum has been the industry's standard
                                                                dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and
                                                                scrambled it to make a type specimen
                                                                book.</p>
                                                            <div class="customer-footer">
                                                                <div>
                                                                    <img
                                                                        src="/public/files/images/general/Group-2126.png"
                                                                        alt="Group-2126">
                                                                </div>
                                                                <div>
                                                                    <p>Maad Sa'ati</p>
                                                                    <span>CEO</span>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="card" style="width: 330px;">

                                                        <div class="card-body">
                                                            <h4 class="card-title">Empowering Our Staff</h4>
                                                            <p class="card-text">Lorem Ipsum is simply dummy text of the
                                                                printing and typesetting
                                                                industry. Lorem Ipsum has been the industry's standard
                                                                dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and
                                                                scrambled it to make a type specimen
                                                                book.</p>
                                                            <div class="customer-footer">
                                                                <div>
                                                                    <img
                                                                        src="/public/files/images/general/Group-2126.png"
                                                                        alt="Group-2126">
                                                                </div>
                                                                <div>
                                                                    <p>Maad Sa'ati</p>
                                                                    <span>CEO</span>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>


                                    </div>
                                    <div class="carousel-item">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="card" style="width: 330px;margin: auto;">

                                                        <div class="card-body">
                                                            <h4 class="card-title">Quality Of Service</h4>
                                                            <p class="card-text">Lorem Ipsum is simply dummy text of the
                                                                printing and typesetting
                                                                industry. Lorem Ipsum has been the industry's standard
                                                                dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and
                                                                scrambled it to make a type specimen
                                                                book.</p>
                                                            <div class="customer-footer">
                                                                <div>
                                                                    <img
                                                                        src="/public/files/images/general/Group-2126.png"
                                                                        alt="Group-2126">
                                                                </div>
                                                                <div>
                                                                    <p>Maad Sa'ati</p>
                                                                    <span>CEO</span>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="card" style="width: 330px;">

                                                        <div class="card-body">
                                                            <h4 class="card-title">Customer Satisfaction</h4>
                                                            <p class="card-text">Lorem Ipsum is simply dummy text of the
                                                                printing and typesetting
                                                                industry. Lorem Ipsum has been the industry's standard
                                                                dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and
                                                                scrambled it to make a type specimen
                                                                book.</p>
                                                            <div class="customer-footer">
                                                                <div>
                                                                    <img
                                                                        src="/public/files/images/general/Group-2126.png"
                                                                        alt="Group-2126">
                                                                </div>
                                                                <div>
                                                                    <p>Maad Sa'ati</p>
                                                                    <span>CEO</span>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="card" style="width: 330px;">

                                                        <div class="card-body">
                                                            <h4 class="card-title">Empowering Our Staff</h4>
                                                            <p class="card-text">Lorem Ipsum is simply dummy text of the
                                                                printing and typesetting
                                                                industry. Lorem Ipsum has been the industry's standard
                                                                dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and
                                                                scrambled it to make a type specimen
                                                                book.</p>
                                                            <div class="customer-footer">
                                                                <div>
                                                                    <img
                                                                        src="/public/files/images/general/Group-2126.png"
                                                                        alt="Group-2126">
                                                                </div>
                                                                <div>
                                                                    <p>Maad Sa'ati</p>
                                                                    <span>CEO</span>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>


                                    </div>

                                </div>
                                <a href="#inam" class="carousel-control-prev" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a href="#inam" class="carousel-control-next" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <div class="mobile-slider-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="inam" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="card" style="width: 330px;margin: auto;">

                                                        <div class="card-body">
                                                            <h4 class="card-title">Quality Of Service</h4>
                                                            <p class="card-text">Lorem Ipsum is simply dummy text of the
                                                                printing and typesetting
                                                                industry. Lorem Ipsum has been the industry's standard
                                                                dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and
                                                                scrambled it to make a type specimen
                                                                book.</p>
                                                            <div class="customer-footer">
                                                                <div>
                                                                    <img
                                                                        src="/public/files/images/general/Group-2126.png"
                                                                        alt="Group-2126">
                                                                </div>
                                                                <div>
                                                                    <p>Maad Sa'ati</p>
                                                                    <span>CEO</span>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>


                                            </div>

                                        </div>


                                    </div>
                                    <div class="carousel-item">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="card" style="width: 330px;margin: auto;">

                                                        <div class="card-body">
                                                            <h4 class="card-title">Quality Of Service</h4>
                                                            <p class="card-text">Lorem Ipsum is simply dummy text of the
                                                                printing and typesetting
                                                                industry. Lorem Ipsum has been the industry's standard
                                                                dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and
                                                                scrambled it to make a type specimen
                                                                book.</p>
                                                            <div class="customer-footer">
                                                                <div>
                                                                    <img
                                                                        src="/public/files/images/general/Group-2126.png"
                                                                        alt="Group-2126">
                                                                </div>
                                                                <div>
                                                                    <p>Maad Sa'ati</p>
                                                                    <span>CEO</span>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>


                                            </div>

                                        </div>


                                    </div>

                                </div>
                                <a href="#inam" class="carousel-control-prev" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a href="#inam" class="carousel-control-next" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>




    <!-- Start of Horoscope Forecasts Section -->



    <section class="horoscope-section">
        <div class="main">
            <h3 class="horoscope-title">Horoscope Forecasts</h3>
            <p class="horoscope-para">It is a long established fact that a reader will be distracted by the readable
                content
                of a page when looking at its layout. The point of using Lorem Ipsum.</p>

            <div class="horoscope-container">
                <div class="horoscope-list">
                    <div class="horoscope-img-fluid">
                        <img width="100%" height="100%" src="/public/files/images/general/NoPath-2.png"
                             alt="horoscope-img">
                    </div>

                    <img src="/public/files/images/general/arrow-1.png" alt="arrow-1">

                    <div class="scope-title-1">
                        <p>Aries</p>
                    </div>
                    <div class="horoscope-desc">
                        <p>MAR 21-APR 19</p>
                    </div>

                </div>

                <div class="horoscope-list">
                    <div class="horoscope-img-fluid">
                        <img width="100%" height="100%" src="/public/files/images/general/NoPath-1.png"
                             alt="horoscope-img">
                    </div>

                    <img src="/public/files/images/general/arrow-1.png" alt="arrow-1">

                    <div class="scope-title-1">
                        <p>Taurus</p>
                    </div>
                    <div class="horoscope-desc">
                        <p>MAR 21-APR 19</p>
                    </div>

                </div>
                <div class="horoscope-list">
                    <div class="horoscope-img-fluid">
                        <img width="100%" height="100%" src="/public/files/images/general/NoPath-3.png"
                             alt="horoscope-img">
                    </div>

                    <img src="/public/files/images/general/arrow-1.png" alt="arrow-1">

                    <div class="scope-title-1">
                        <p>Gemini</p>
                    </div>
                    <div class="horoscope-desc">
                        <p>MAR 21-APR 19</p>
                    </div>

                </div>
                <div class="horoscope-list">
                    <div class="horoscope-img-fluid">
                        <img width="100%" height="100%" src="/public/files/images/general/NoPath-4.png"
                             alt="horoscope-img">
                    </div>

                    <img src="/public/files/images/general/arrow-1.png" alt="arrow-1">

                    <div class="scope-title-1">
                        <p>Cancer</p>
                    </div>
                    <div class="horoscope-desc">
                        <p>MAR 21-APR 19</p>
                    </div>

                </div>
                <div class="horoscope-list">
                    <div class="horoscope-img-fluid">
                        <img width="100%" height="100%" src="/public/files/images/general/NoPath-5.png"
                             alt="horoscope-img">
                    </div>

                    <img src="/public/files/images/general/arrow-1.png" alt="arrow-1">

                    <div class="scope-title-1">
                        <p>Leo</p>
                    </div>
                    <div class="horoscope-desc">
                        <p>MAR 21-APR 19</p>
                    </div>

                </div>
            </div>
            <div class="horoscope-container">
                <div class="horoscope-list">
                    <div class="horoscope-img-fluid">
                        <img width="100%" height="100%" src="/public/files/images/general/NoPath-6.png"
                             alt="horoscope-img">
                    </div>

                    <img src="/public/files/images/general/arrow-1.png" alt="arrow-1">

                    <div class="scope-title-1">
                        <p>Virgo</p>
                    </div>
                    <div class="horoscope-desc">
                        <p>MAR 21-APR 19</p>
                    </div>

                </div>

                <div class="horoscope-list">
                    <div class="horoscope-img-fluid">
                        <img width="100%" height="100%" src="/public/files/images/general/NoPath-7.png"
                             alt="horoscope-img">
                    </div>

                    <img src="/public/files/images/general/arrow-1.png" alt="arrow-1">

                    <div class="scope-title-1">
                        <p>Aries</p>
                    </div>
                    <div class="horoscope-desc">
                        <p>MAR 21-APR 19</p>
                    </div>

                </div>
                <div class="horoscope-list">
                    <div class="horoscope-img-fluid">
                        <img width="100%" height="100%" src="/public/files/images/general/NoPath-8.png"
                             alt="horoscope-img">
                    </div>

                    <img src="/public/files/images/general/arrow-1.png" alt="arrow-1">

                    <div class="scope-title-1">
                        <p>Libra</p>
                    </div>
                    <div class="horoscope-desc">
                        <p>MAR 21-APR 19</p>
                    </div>

                </div>
                <div class="horoscope-list">
                    <div class="horoscope-img-fluid">
                        <img width="100%" height="100%" src="/public/files/images/general/NoPath-9.png"
                             alt="horoscope-img">
                    </div>

                    <img src="/public/files/images/general/arrow-1.png" alt="arrow-1">

                    <div class="scope-title-1">
                        <p>Scorpio</p>
                    </div>
                    <div class="horoscope-desc">
                        <p>MAR 21-APR 19</p>
                    </div>

                </div>
                <div class="horoscope-list">
                    <div class="horoscope-img-fluid">
                        <img width="100%" height="100%" src="/public/files/images/general/NoPath-10.png"
                             alt="horoscope-img">
                    </div>

                    <img src="/public/files/images/general/arrow-1.png" alt="arrow-1">

                    <div class="scope-title-1">
                        <p>Saggitarius</p>
                    </div>
                    <div class="horoscope-desc">
                        <p>MAR 21-APR 19</p>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <!-- End of Horoscope Forecasts Section -->

    <!-- Start of Why Choose us Section -->


    <div class="choose-us-sec-bg-horizontal">

    </div>
    <section class="choose-us-section">
        <div class="main">

            <div class="choose-us-container">
                <h3 class="choose-us-heading">Latest Articles</h3>
                <p class="choose-us-para">It is a long established fact that a reader will be distracted by the readable
                    content
                    of
                    a pagewhen looking at its layout. The point of using Lorem Ipsum . </p>

                <div class="choose-us-containers">
                    <div class="choose-us-list">
                        <div class="choose-us-img-fluid">
                            <img width="100%" height="100%" src="/public/files/images/general/choose-us-img-1.png"
                                 alt="horoscope-img">
                        </div>
                        <div class="choose-us-title">
                            <p>Trusted million Clients</p>
                        </div>

                    </div>
                    <div class="choose-us-list">
                        <div class="choose-us-img-fluid">
                            <img width="100%" height="100%" src="/public/files/images/general/choose-us-img-2.png"
                                 alt="horoscope-img">
                        </div>
                        <div class="choose-us-title">
                            <p>Years of Experience</p>
                        </div>

                    </div>
                    <div class="choose-us-list">
                        <div class="choose-us-img-fluid">
                            <img width="100%" height="100%" src="/public/files/images/general/choose-us-img-5.png"
                                 alt="horoscope-img">
                        </div>
                        <div class="choose-us-title">
                            <p>Types of Horoscope</p>
                        </div>

                    </div>
                    <div class="choose-us-list">
                        <div class="choose-us-img-fluid">
                            <img width="100%" height="100%" src="/public/files/images/general/choose-us-img-4.png"
                                 alt="horoscope-img">
                        </div>
                        <div class="choose-us-title">
                            <p>Qualiified Astrologers </p>
                        </div>

                    </div>
                    <div class="choose-us-list">
                        <div class="choose-us-img-fluid">
                            <img width="100%" height="100%" src="/public/files/images/general/choose-us-img-3.png"
                                 alt="horoscope-img">
                        </div>
                        <div class="choose-us-title">
                            <p>Success Horoscope</p>
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </section>


    <!-- End of Why Choose us Section -->

    <!-- Start of Enquiry Section -->

    <section class="enquiry-section">
        <div class="main">
            <div class="enquire-container">
                <div class="enquire-title">
                    <h3> Raise a Enquiry</h3>

                </div>
                <form action="#">
                    <div class="mb-1 p-2">
                        <input type="text" class="form-control " id="exampleFormControlInput1" placeholder="Your Name">
                    </div>
                    <div class="mb-1 p-2">
                        <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Your Email">
                    </div>
                    <div class="mb-1 p-2">
                        <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="Mobile No.">
                    </div>
                    <div class="mb-1 p-2">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"
                      placeholder="Your Message"></textarea>
                    </div>

                    <div class="mt-3 enquire-btn ">
                        SUBMIT
                    </div>

                </form>


            </div>
        </div>
    </section>

    <!-- End of Enquiry Section -->

    <!-- Start of Latest Articles -->

    <div class="main">
        <section class="articles-section">
            <h3 class="articles-heading">Latest Articles</h3>
            <p class="articles-para">It is a long established fact that a reader will be distracted by the readable
                content of
                a pagewhen looking at its layout. The point of using Lorem Ipsum . </p>
            <div class="articles-img-inner">
                <img src="/public/files/images/general/services-img.png" alt="services-img">

            </div>
            <div class="articles-container">
                <div class="articles-list">
                    <div class="articles-img-fluid">
                        <img width="100%" height="100%" src="/public/files/images/general/articles-img-1.png"
                             alt="articles-img">
                    </div>
                    <div class="articles-header">
                        <div class="articles-headerleft">
                            <div><img src="/public/files/images/general/articles-header-1.png" alt="articles-header">
                            </div>
                            <div>By Admin</div>
                        </div>
                        <div class="articles-headerright">
                            <div><img src="/public/files/images/general/articles-header-2.png" alt="articles-header">
                            </div>
                            <div>0 comments</div>
                        </div>
                    </div>
                    <div class="articles-title">
                        <p>Consectetur Adipiscing Elit Sedeius Mod Tempor Incididunt Ut Labore.</p>
                    </div>
                    <div class="articles-desc">
                        <p>Consectetur adipiscing elit, sed desdo eiusmod tempor incididuesdeentiut labore etesde
                            doloesire
                            esdesdeges magna aliquapspendisse and the gravida.</p>
                    </div>
                </div>
                <div class="articles-list">
                    <div class="articles-img-fluid">
                        <img width="100%" height="100%" src="/public/files/images/general/articles-img-2.png"
                             alt="articles-img">
                    </div>
                    <div class="articles-header">
                        <div class="articles-headerleft">
                            <div><img src="/public/files/images/general/articles-header-1.png" alt="articles-header">
                            </div>
                            <div>By Admin</div>
                        </div>
                        <div class="articles-headerright">
                            <div><img src="/public/files/images/general/articles-header-2.png" alt="articles-header">
                            </div>
                            <div>0 comments</div>
                        </div>
                    </div>
                    <div class="articles-title">
                        <p>Consectetur Adipiscing Elit Sedeius Mod Tempor Incididunt Ut Labore.</p>
                    </div>
                    <div class="articles-desc">
                        <p>Consectetur adipiscing elit, sed desdo eiusmod tempor incididuesdeentiut labore etesde
                            doloesire
                            esdesdeges magna aliquapspendisse and the gravida.</p>
                    </div>
                </div>
                <div class="articles-list">
                    <div class="articles-img-fluid">
                        <img width="100%" height="100%" src="/public/files/images/general/articles-img-3.png"
                             alt="articles-img">
                    </div>
                    <div class="articles-header">
                        <div class="articles-headerleft">
                            <div><img src="/public/files/images/general/articles-header-1.png" alt="articles-header">
                            </div>
                            <div>By Admin</div>
                        </div>
                        <div class="articles-headerright">
                            <div><img src="/public/files/images/general/articles-header-2.png" alt="articles-header">
                            </div>
                            <div>0 comments</div>
                        </div>
                    </div>
                    <div class="articles-title">
                        <p>Consectetur Adipiscing Elit Sedeius Mod Tempor Incididunt Ut Labore.</p>
                    </div>
                    <div class="articles-desc">
                        <p>Consectetur adipiscing elit, sed desdo eiusmod tempor incididuesdeentiut labore etesde
                            doloesire
                            esdesdeges magna aliquapspendisse and the gravida.</p>
                    </div>
                </div>
            </div>
            <div class="articles-action-btn">

                <div class="articles-button">View more</div>

            </div>
        </section>
    </div>
    <!-- End of Latest Articles -->




    <!-- Start of Footer Section-->
    <!-- <div class="footercontainer">


      <footer>
        <div class="main">
          <div class="row footer-header">
            <div class="col-4">
              <h3>Zodiac Sign Finder</h3>


            </div>
            <div class="col-8">

              <div class="filter-container">
                <div class="filter-btn-1">
                  <div style="margin-top: 10px">
                    <p style="color: #000 ">1</p>
                  </div>
                  <div style="margin-top: 0">
                    <img src="/public/files/images/general/Vector-1.png" alt="Vector-1">
                  </div>
                </div>
                <div class="filter-btn-1">
                  <div style="margin-top: 10px">
                    <p style="color: #000 ">1</p>
                  </div>
                  <div style="margin-top: 0">
                    <img src="/public/files/images/general/Vector-1.png" alt="Vector-1">
                  </div>
                </div>
                <div class="filter-btn-1">
                  <div style="margin-top: 10px">
                    <p style="color: #000 ">1994</p>
                  </div>
                  <div style="margin-top: 0">
                    <img src="/public/files/images/general/Vector-1.png" alt="Vector-1">
                  </div>
                </div>
                <div class="filter-btn-4">
                  <div style="margin-top: 10px">
                    <p style="color: #ffffff ">Submit</p>
                  </div>

                </div>

              </div>

            </div>
          </div>

          <hr />

          <div class="links-container">
            <div class="links">

              <img width="287px" height="72px" src="/public/files/images/general/logoastro.png" alt="logoastro">

              <ul>
                <li>
                  <p>There are many variations of this passages of Lorem Ipsum.</p>
                </li>

                <li>
                  <a href="#">NY 10018, California,</a>
                </li>

                <li>
                  <a href="#"> USA + (91) 1800-124-105</a>
                </li>

                <li>
                  <a href="#"> astrology@example.com</a>
                </li>
              </ul>
            </div>
            <div class="links">
              <h4>Quick Links</h4>

              <ul>
                <li>
                  <a href="#">About Us</a>
                </li>

                <li>
                  <a href="#"> Blog </a>
                </li>

                <li>
                  <a href="#">Astrologers</a>
                </li>

                <li>
                  <a href="#"> Appointment </a>
                </li>
                <li>
                  <a href="#"> Contact Us</a>
                </li>
              </ul>
            </div>

            <div class="links">
              <h4>Horoscope Forecasts</h4>

              <ul>
                <li>
                  <a href="#">My Daily Horoscope</a>
                </li>

                <li>
                  <a href="#"> My Weekly Horoscope</a>
                </li>

                <li>
                  <a href="#"> My Monthly Horoscope</a>
                </li>
                <li>
                  <a href="#"> My Love Horoscope</a>
                </li>

                <li>
                  <a href="#"> My Career Horoscop</a>
                </li>
              </ul>
            </div>

            <div class="links">
              <h4>Our Newsletter</h4>

              <ul>
                <li>
                  Lorem ipsum dolor amet, consectetur adipiscing elit,sed eiusmod tempor.
                </li>
              </ul>



              <form action="#">
                <input type="text" placeholder="Email..." />
                <div class="submit-btn">
                  <img src="/public/files/images/general/Vector.png" alt="Vector">
                </div>
              </form>

              <ul>
                <li>
                  <p class="para-4">
                    I agree that my submitted data is being collected and stored.
                  </p>

                </li>
              </ul>
            </div>

          </div>

          <hr />



        </div>
      </footer>
    </div> -->
    <!-- End of Footer Section-->
@endsection
