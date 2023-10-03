
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title',config('app.name'))</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@300;900&display=swap" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@300;900&display=swap" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?=familyLato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/public/template/general/css/style.css" />
    <link rel="stylesheet" href="/public/template/general/css/navbar.css" />
    <link rel="stylesheet" href="/public/template/general/css/paymentpage.css" />
    <link rel="stylesheet" href="/public/assets/general/css/authmodals.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    @yield('page_style','')
</head>

<body>
<!-- <header>
  <div class="navcontainer">
    <div class="one">
      <div class="support">
        <div>
          <img width="48.25px" height="47.14px" src="/public/files/images/general/headphones-1.png" alt="Support">
        </div>
        <div class="support-content">
          <p class="para1">24x7 online Support</p>
          <p class="para2">info@besttarot.com</p>
        </div>

      </div>
    </div>
    <div class="two">
      <div class="contactfree">
        <div>
          <img width="33.93px" height="34.07px" src="/public/files/images/general/telephone-(3).png" alt="contactfree">
        </div>
        <div class="contactfree-content">
          <p class="para1">Contact Us Free</p>
          <p class="para2">+91- 895 548 6258</p>
        </div>

      </div>
    </div>
    <div class="logo">
    </div>
    <div class="three">
      <div class="logincontainer">
        <div class="lang">
          <div>
            <img src="/public/files/images/general/language.png" alt="enter" />
          </div>
          <div>
            Eng
          </div>
        </div>
        <div class="userlogin">
          <div>
            <img src="/public/files/images/general/enter.png" alt="enter" />
          </div>
          <div>
            Login
          </div>
        </div>

      </div>
    </div>
    <div class="four">
      <div class="walletcontainer">

        <div>
          Wallet
        </div>
        <div>
          <img src="/public/files/images/general/Group-25367.png" alt="enter" />
        </div>
        <div>
          0.00
        </div>



      </div>
    </div>
  </div>

  <div class="horizontal-line">
  </div>


  <div class="main">
    <nav>


      <ul>
        <li>
          <a href="#">Home</a>
        </li>

        <li>
          <a href="#">About us</a>
        </li>

        <li>
          <a href="#">Prediction Services</a>
        </li>
        <li>
          <a href="#">Course</a>
        </li>

        <li>
          <a href="#">Blogging</a>
        </li>

        <li>
          <a href="#">Testimonials</a>
        </li>
        <li>
          <a href="#">Contact Us</a>
        </li>
      </ul>
    </nav>


    <nav class="mobile-nav">
      <div class="logo"> <img width="100px" height="50px" src="/public/files/images/general/logoastro.png" alt="logo" /> </div>
      <div class="menu-icon">
        <img src="/public/files/images/general/menu-icon.svg" alt="" />
      </div>
    </nav>

    <div class="mobile-menu-container">
      <div class="close-icon">
        <img src="/public/files/images/general/close-icon.svg" alt="close" />
      </div>

      <ul>
        <li>
          <a href="#">Home</a>
        </li>

        <li>
          <a href="#">About us</a>
        </li>

        <li>
          <a href="#">Prediction Services</a>
        </li>
        <li>
          <a href="#">Course</a>
        </li>

        <li>
          <a href="#">Blogging</a>
        </li>

        <li>
          <a href="#">Testimonials</a>
        </li>
        <li>
          <a href="#">Contact Us</a>
        </li>

      </ul>
    </div>


  </div>
</header> -->
<!-- Start of the header section -->
<header>

    <!-- pre-header -->

    <div class="navcontainer">
        <div class="one">
            <div class="support">
                <div>
                    <img width="48.25px" height="47.14px" src="/public/files/images/general/headphones-1.png" alt="Support">
                </div>
                <div class="support-content">
                    <p class="para1">24x7 online Support</p>
                    <p class="para2">info@besttarot.com</p>
                </div>

            </div>
        </div>
        <div class="two">
            <div class="contactfree">
                <div>
                    <img width="33.93px" height="34.07px" src="/public/files/images/general/telephone-(3).png" alt="contactfree">
                </div>
                <div class="contactfree-content">
                    <p class="para1">Contact Us Free</p>
                    <p class="para2">+91- 895 548 6258</p>
                </div>

            </div>
        </div>
        <div class="logo">
        </div>
        <div class="three">
            <div class="logincontainer">
                <div class="lang">
                    <div>
                        <img src="/public/files/images/general/language.png" alt="enter" />
                    </div>
                    <div>
                        Eng
                    </div>
                </div>
                @if(!auth()->check())
                <div class="userlogin">
                    <div>
                        <img src="/public/files/images/general/enter.png" alt="enter" />
                    </div>
                    <div class="sign-up">
                        <a onclick="popLoginModal()" style="color: #fff;cursor: pointer">Login</a>
                    </div>
                </div>
                    @else
                    <div class="userlogOut">
                        <a href="{{route('auth.logout')}}">
                            <img height="45" width="45" src="https://cdn-icons-png.flaticon.com/128/10233/10233766.png" alt="enter" />
                            <span class="text-white">Logout</span>
                        </a>
                    </div>
                @endif

            </div>
        </div>
        <div class="four">
            @role('user')
                <div class="walletcontainer">

                    <div>
                        Wallet
                    </div>
                    <div>
                        <img src="/public/files/images/general/Group-25367.png" alt="enter" />
                    </div>
                    <div>
                        0.00
                    </div>



                </div>
            @endrole
        </div>
    </div>

    <div class="horizontal-line">
    </div>


    <div class="main">
        <nav>
            <!-- <div class="logo">Home</div> -->

            <ul>
                <li>
                    <a href="/">Home</a>
                </li>

                <li>
                    <a href="{{route('aboutUs')}}">About us</a>
                </li>

                <li>
                    <a href="{{route('predictionServices')}}">Prediction Services</a>
                </li>
                <li>
                    <a href="#">Course</a>
                </li>

                <li>
                    <a href="#">Blogging</a>
                </li>

                <li>
                    <a href="{{route('testimonials')}}">Testimonials</a>
                </li>
                <li>
                    <a href="{{route('contactUsPage')}}">Contact Us</a>
                </li>
            </ul>
        </nav>

        <!-- End of desktop navigation menu -->

        <nav class="mobile-nav">
            <div class="mobile-logo"> <img width="200px" height="70px" src="/public/files/images/general/logoastro.png" alt="logo" /> </div>
            <div class="menu-icon">
                <img src="/public/files/images/general/menu-icon.svg" alt="" />
            </div>
        </nav>

        <div class="mobile-menu-container">
            <div class="close-icon">
                <img src="/public/files/images/general/close-icon.svg" alt="" />
            </div>

            <ul>
                <li>
                    <a href="./index.html">Home</a>
                </li>

                <li>
                    <a href="./About-Us.html">About us</a>
                </li>

                <li>
                    <a href="./Service-Page.html">Prediction Services</a>
                </li>
                <li>
                    <a href="#">Course</a>
                </li>

                <li>
                    <a href="#">Blogging</a>
                </li>

                <li>
                    <a href="./testimonial-page.html">Testimonials</a>
                </li>
                <li>
                    <a href="./Contact-Page.html"> Contact Us</a>
                </li>

            </ul>
        </div>

        <!-- End of mobile navigation menu -->

    </div>
    {{--    Login and signup modals--}}
    <div id="loginModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-1"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="login-container">
                        <div class="screen-container">
                            <div class="row justify-content-center align-items-center g-2 ">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 login-left">
                                    <div class="login-left-logo">
                                        <img width="100%" height="100%" src="/public/files/images/general/main/login-logo-1.png"
                                             alt="login-bg">
                                    </div>
                                    <div class="login-logo-right">
                                        <img width="100%" height="100%" src="/public/files/images/general/main/login-page-bg-right-1.png"
                                             alt="login-bg">
                                    </div>
                                    <div class="login-left-container">
                                        <div class="screen">
                                            <h3 class="mb-2">Login As</h3>
                                            <form method="post" action="{{route('auth.login')}}">
                                                @csrf
                                                <div class="row justify-content-center align-items-center g-1 mb-2">
                                                    <div class="col">
                                                        <button class="button login__submit d-flex gap-2">
                                                            <div style="font-size: 12px;">User</div>
                                                            <div class="form-check">
                                                                <input required class="form-check-input" type="radio"
                                                                       name="login_user_type">
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col">
                                                        <button class="button login__submit d-flex gap-2">
                                                            <div style="font-size: 12px;">Tarot Card reader</div>
                                                            <div class="form-check">
                                                                <input required class="form-check-input" type="radio"
                                                                       name="login_user_type">
                                                            </div>
                                                        </button>
                                                    </div>

                                                </div>

                                                <div class="screen__content ">
                                                    <div class="login__field">
                                                        <i class="login__icon fas fa-user"></i>
                                                        <input name="login_email" type="email" class="login__input @error('login_email') is-invalid @enderror" value="{{old('login_email')}}"
                                                               placeholder="email">
                                                        @error('login_email')
                                                        <div class="invalid-feedback">{{$message}}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="login__field">
                                                        <i class="login__icon fas fa-lock"></i>
                                                        <input name="login_password" type="password" class="login__input @error('login_password') is-invalid @enderror"
                                                               placeholder="Password">
                                                        @error('login_password')
                                                        <div class="invalid-feedback">{{$message}}</div>
                                                        @enderror
                                                    </div>
                                                    <button type="submit" class="login-now-button">Login Now</button>
                                                    <center>
                                                        Dont have an account?
                                                        <a onclick="popSignupModal()" style="cursor:pointer;">Signup</a>
                                                    </center>
                                                </div>
                                            </form>
                                        </div>




                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 login-right">
                                    <div class="login-right-logo">
                                        <img src="/public/files/images/general/main/Ellipse-332.png" alt="">
                                    </div>
                                    <a href="./index.html">
                                        <div class="login-logo-cross">
                                            <img width="100%" height="100%" src="/public/files/images/general/main/Group25717-1.png"
                                                 alt="login-bg">
                                        </div>
                                    </a>

                                    <div class="login-right-fluid">
                                        <img width="100%" height="100%" src="/public/files/images/general/main/login-bg-1.png"
                                             alt="login-bg">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div id="signupModal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="signup-container">
                        <div class="screen-container-1">
                            <div class="row justify-content-center align-items-center g-2 ">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 signup-left">
                                    <div class="signup-left-logo">
                                        <img width="100%" height="100%" src="/public/files/images/general/main/login-logo-1.png"
                                             alt="login-bg">
                                    </div>
                                    <div class="signup-logo-right">
                                        <img width="100%" height="100%" src="/public/files/images/general/main/login-page-bg-right-1.png"
                                             alt="login-bg">
                                    </div>

                                    <div class="signup-left-container">
                                        <div class="screen">
                                            <h3 class="mb-2 pt-3">Sign up</h3>
                                            <form method="post" action="{{route('auth.signup')}}">
                                                @csrf
                                                <div class="row justify-content-center align-items-center g-1 mb-2">
                                                    <div class="col">
                                                        <button class="button login__submit d-flex gap-2">
                                                            <div style="font-size: 12px;">User</div>
                                                            <div class="form-check">
                                                                <input value="user" required class="form-check-input" type="radio"
                                                                       name="signup_user_type" checked>

                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col">
                                                        <button class="button login__submit d-flex gap-2">
                                                            <div style="font-size: 12px;">Tarot Card reader</div>
                                                            <div class="form-check">
                                                                <input value="consultant" required class="form-check-input" type="radio"
                                                                       name="signup_user_type" >

                                                            </div>
                                                        </button>
                                                    </div>

                                                </div>

                                                <div class="screen__content">
                                                    <div class="login__field">
                                                        <i class="login__icon fas fa-user"></i>
                                                        <input name="signup_name" type="text" class="login__input @error('signup_name') is-invalid @enderror" value="{{old('signup_name')}}" placeholder="Name">
                                                        @error('signup_name')
                                                        <div class="invalid-feedback">{{$message}}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="login__field">
                                                        <i class="login__icon fas fa-envelope"></i>
                                                        <input name="signup_email" type="email" class="login__input @error('signup_email') is-invalid @enderror" value="{{old('signup_email')}}" placeholder="Email">
                                                        @error('signup_email')
                                                            <div class="invalid-feedback">{{$message}}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="login__field">
                                                        <i class="login__icon fas fa-lock"></i>
                                                        <input name="signup_phone" type="tel" class="login__input @error('signup_phone') is-invalid @enderror" value="{{old('signup_phone')}}" placeholder="Phone No.">
                                                        @error('signup_phone')
                                                            <div class="invalid-feedback">{{$message}}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="login__field">
                                                        <i class="login__icon fas fa-lock"></i>
                                                        <input name="signup_password" type="password" class="login__input @error('signup_password') is-invalid @enderror"
                                                               placeholder="Password">
                                                        @error('signup_password')
                                                        <div class="invalid-feedback">{{$message}}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="login__field">
                                                        <i class="login__icon fas fa-lock"></i>
                                                        <input name="signup_password_confirmation" type="password" class="login__input @error('signup_password_confirmation') is-invalid @enderror"
                                                               placeholder="Password Confirmation">
                                                        @error('signup_password_confirmation')
                                                        <div class="invalid-feedback">{{$message}}</div>
                                                        @enderror
                                                    </div>

                                                    <button class="signup-now-button">Sign up</button>

                                                    <center>
                                                        Already have an account?
                                                        <a onclick="popLoginModal()" style="cursor:pointer;">Login</a>
                                                    </center>
                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 signup-right">

                                    <div class="login-right-logo">
                                        <img src="/public/files/images/general/main/Ellipse-332.png" alt="">
                                    </div>
                                    <a href="./index.html">
                                        <div class="sign-up-logo-cross" data-bs-dismiss="modal" aria-label="Close">
                                            <img width="100%" height="100%" src="/public/files/images/general/main/Group25717-1.png"
                                                 alt="login-bg">
                                        </div>
                                    </a>
                                    <div class="signup-right-fluid">
                                        <img width="100%" height="100%" src="/public/files/images/general/main/Sign-up-bg-2.png"
                                             alt="login-bg">
                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    Login and signup modals--}}
</header>
<!-- End of the header section -->

@yield('main','')

<!--Start of Footer Section -->

<div class="footer-main-container " data-black-overlay="6">
    <footer class="footer-section">
        <div class="footer-caption">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                    <h2>Zodiac Sign Finder</h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                    <div class="sign-finder">
                        <select class="finder-select day">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <select class="finder-select month">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <select class="finder-select year">
                            <option>1994</option>
                            <option>1995</option>
                            <option>1996</option>
                            <option>1997</option>
                            <option>1998</option>
                        </select>

                        <a href="#" class="submit-btn">Submit</a>

                    </div>
                </div>
            </div>


        </div>
        <div class="footer-content">
            <div class="row mobile-menus">
                <div class="col footer-menus">
                    <img src="/public/template/general/image/footer-logo.png" class="footer-logo">
                    <p class="footer-desc">There are many variations of this passages of Lorem Ipsum.</p>
                    <div class="cantact-location">
                        <img src="/public/template/general/image/location.png">
                        <p>NY 10018, California, USA</p>
                    </div>
                    <div class="cantact-location">
                        <img src="/public/template/general/image/mobile.png">
                        <p>+ (91) 1800-124-105</p>
                    </div>
                    <div class="cantact-location">
                        <img src="/public/template/general/image/mail.png">
                        <p>astrology@example.com</p>
                    </div>
                </div>
                <div class="col footer-menus">
                    <h3>Quick Links</h3>
                    <ul>
                        <li>
                            <a href="./About-Us.html">About Us </a>
                        </li>
                        <li>
                            <a href="#">Blog </a>
                        </li>
                        <li>
                            <a href="./User-Profile.html">Astrologers </a>
                        </li>
                        <li>
                            <a href="./tarot-reader-detail.html">Appointment </a>
                        </li>
                        <li>
                            <a href="./Contact-Page.html">Contact Us </a>
                        </li>
                    </ul>
                </div>
                <div class="col footer-menus">
                    <h3>Horoscope Forecasts</h3>
                    <ul>
                        <li>
                            <a href="#">My Daily Horoscope</a>
                        </li>
                        <li>
                            <a href="#">My Weekly Horoscope </a>
                        </li>
                        <li>
                            <a href="#">My Monthly Horoscope </a>
                        </li>
                        <li>
                            <a href="#">My Love Horoscope </a>
                        </li>
                        <li>
                            <a href="#">My Career Horoscop </a>
                        </li>
                    </ul>
                </div>
                <div class="col footer-menus">
                    <h3>Our Newsletter</h3>
                    <p class="footer-desc">Lorem ipsum dolor amet, consectetur adipiscing elit,sed eiusmod tempor.
                    </p>
                    <div class="news-letter">
                        <input type="text" placeholder="News.....">
                        <span class="news-action">
                <img src="/public/template/general/image/News-letter.png" alt="">
              </span>
                    </div>
                    <div class="user-concern">
                        <input type="checkbox" name="agree" id="agree">
                        <p class="footer-desc">I agree that my submitted data is being collected and stored.</p>
                    </div>

                </div>
            </div>
        </div>
    </footer>
</div>


<!--End of Footer Section -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="/public/template/general/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/gh/graingert/WOW@1.3.0/dist/wow.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
<script src="/public/assets/js/pitLib.js"></script>
<script>
    $(document).ready(()=> {
        @if($errors->has('login_email')||$errors->has('login_password')||$errors->has('login_error'))
            $("#loginModal").modal('show');
        @endif
        @if($errors->has('signup_name')||$errors->has('signup_email')||$errors->has('signup_phone')||$errors->has('signup_password')||$errors->has('signup_password_confirmation'))
            $("#signupModal").modal('show');
        @endif
        new WOW().init();
        // $('.sign-up').click(()=>{
        //     $("#loginModal").modal('show');
        //     $('.login-container').fadeIn();
        // })
        // $('.cancel').click(()=>{
        //     $('.login-container').fadeOut();
        // })
        // $('.sign-up-now').click(()=>{
        //     $('.login-container').fadeOut();
        //     $('.signup-container').fadeIn();
        // })
        // $('.cancel-2').click(()=>{
        //     $('.signup-container').fadeOut();
        // })
    })
    @if(Session::has('error'))
    PitLib.Audio.play();
    Swal.fire({
        position: 'top-end',
        icon: 'warning',
        title: '{{Session::get('error')}}',
        showConfirmButton: false,
        timer: 1500
    });
    @endif
    @if(Session::has('success'))
    playAudio(1);
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: '{{Session::get('success')}}',
        showConfirmButton: false,
        timer: 1500
    });
    @endif

    function popSignupModal() {
        $("#loginModal").modal('hide');
        $("#signupModal").modal('show');
    }
    function popLoginModal() {
        $("#signupModal").modal('hide');
        $("#loginModal").modal('show');
    }
</script>
@yield('page_script','')
</body>

</html>
