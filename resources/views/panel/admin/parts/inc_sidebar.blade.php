<!--**********************************
        Sidebar start
    ***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="dropdown header-profile">
                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                    <img src="/public/template/admin/images/pic1.jpg" width="20" alt>
                    <div class="header-info ms-3">
                        <span class="font-w600 ">Hi,<b>{{auth()->user()->name}}</b></span>
                        <small class="text-end font-w400">{{auth()->user()->email}}</small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="app-profile.html" class="dropdown-item ai-icon">
                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        <span class="ms-2">Profile </span>
                    </a>
                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        <span class="ms-2">Inbox </span>
                    </a>
                    <a href="{{route('auth.logout')}}" class="dropdown-item ai-icon">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <span class="">Logout </span>
                    </a>
                </div>
            </li>
            <li class="@if(request()->is('*user*')) mm-active @endif">
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="@if(request()->is('*user*')) true @else false @endif">
                    <i class="fa-solid fa-user"></i>
                    <span class="nav-text">Users</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a>@if(request()->is('*user')) <i class="fa-solid fa-caret-right"></i> @endif  List</a>
                    </li>
                </ul>
            </li>

            <li class="@if(request()->is('*settings*')) mm-active @endif">
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="@if(request()->is('*settings*')) true @else false @endif">
                    <i class="fa-solid fa-gear"></i>
                    <span class="nav-text">Settings</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{route('admin.website-settings-view')}}">@if(request()->is('*website')) <i class="fa-solid fa-caret-right"></i> @endif  Website Settings</a>
                    </li>
                </ul>
            </li>

{{--            <li>--}}
{{--                <a class="has-arrow ai-icon" aria-expanded="false">--}}
{{--                    <i class="flaticon-050-info"></i>--}}
{{--                    <span class="nav-text">Apps</span>--}}
{{--                </a>--}}
{{--                <ul aria-expanded="false">--}}
{{--                    <li><a href="app-profile.html">Profile</a></li>--}}
{{--                    <li><a href="post-details.html">Post Details</a></li>--}}
{{--                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>--}}
{{--                        <ul aria-expanded="false">--}}
{{--                            <li><a href="email-compose.html">Compose</a></li>--}}
{{--                            <li><a href="email-inbox.html">Inbox</a></li>--}}
{{--                            <li><a href="email-read.html">Read</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li><a href="./app-calender.html">Calendar</a></li>--}}
{{--                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>--}}
{{--                        <ul aria-expanded="false">--}}
{{--                            <li><a href="ecom-product-grid.html">Product Grid</a></li>--}}
{{--                            <li><a href="ecom-product-list.html">Product List</a></li>--}}
{{--                            <li><a href="ecom-product-detail.html">Product Details</a></li>--}}
{{--                            <li><a href="ecom-product-order.html">Order</a></li>--}}
{{--                            <li><a href="ecom-checkout.html">Checkout</a></li>--}}
{{--                            <li><a href="ecom-invoice.html">Invoice</a></li>--}}
{{--                            <li><a href="ecom-customers.html">Customers</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
        </ul>
        <div class="copyright">
            <p><strong>{{config('app.name')}} Dashboard</strong> Â© 2023 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by <a href="www.ekanatechnologies.com">Ekana Technologies</a></p>
        </div>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
