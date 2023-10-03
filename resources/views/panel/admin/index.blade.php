@extends('panel.admin.layout.app')
@section('main')
    <!-- row -->
    <div class="container-fluid">

        <div class="row invoice-card-row">
            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="card bg-gradient-5 invoice-card">
                    <div class="card-body d-flex">
                        <div class="row">
                            <div class="col-0 col-xs-0 col-sm-0 col-md-6 col-lg-5 col-xl-5">
                                <img src="https://cdn-icons-png.flaticon.com/128/1651/1651602.png" class="img-fluid">
                            </div>
                            <div class="col text-white">
                                <h1 class="text-white font-weight-bold">74</h1>
                                <h5 class="text-white">Consultation</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="card bg-gradient-4 invoice-card">
                    <div class="card-body d-flex">
                        <div class="row">
                            <div class="col-0 col-xs-0 col-sm-0 col-md-6 col-lg-5 col-xl-5">
                                <img src="https://cdn-icons-png.flaticon.com/128/2972/2972531.png" class="img-fluid">
                            </div>
                            <div class="col text-white">
                                <h1 class="text-white font-weight-bold">1269</h1>
                                <h5 class="text-white">Minutes Consulting</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="card bg-gradient-5 invoice-card">
                    <div class="card-body d-flex">
                        <div class="row">
                            <div class="col-0 col-xs-0 col-sm-0 col-md-6 col-lg-5 col-xl-5">
                                <img src="https://cdn-icons-png.flaticon.com/128/11507/11507392.png" class="img-fluid">
                            </div>
                            <div class="col text-white">
                                <h1 class="text-white font-weight-bold">13058</h1>
                                <h5 class="text-white">Earning</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="card bg-gradient-1 invoice-card">
                    <div class="card-body d-flex">
                        <div class="row">
                            <div class="col-0 col-xs-0 col-sm-0 col-md-6 col-lg-5 col-xl-5">
                                <img src="https://cdn-icons-png.flaticon.com/128/7756/7756168.png" class="img-fluid">
                            </div>
                            <div class="col text-white">
                                <h1 class="text-white font-weight-bold">321</h1>
                                <h5 class="text-white">New Account</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-9 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <div class="card-bx bg-blue">
                                    <img class="pattern-img" src="/public/template/admin/images/pattern6.png" alt>
                                    <div class="card-info text-white">
                                        <img src="/public/template/admin/images/circle.png" class="mb-4" alt>
                                        <h2 class="text-white card-balance">$824,571.93</h2>
                                        <p class="fs-16">Wallet Recharges</p>
                                        <span>+0.8% than last month</span>
                                    </div>
                                    <a class="change-btn" href="javascript:void(0);"><i
                                            class="fa fa-caret-up up-ico"></i>Refresh<span class="reload-icon"><i
                                                class="fas fa-sync-alt reload active"></i></span></a>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="row align-items-center  mt-xl-0 mt-4">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Earnings Overview</h4>
                                        <span>Earnings are based on end of month revenue calculation</span>
                                        <ul class="card-list mt-4">
                                            <li><span class="bg-blue circle"></span>Video Consult<span>60%%</span></li>
                                            <li><span class="bg-success circle"></span>Text Chat<span>20%</span></li>
                                            <li><span class="bg-warning circle"></span>Gifting<span>20%</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6" style="height:200px">
                                        <canvas id="polarChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <div id="customerConversionChart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-5">
                <div class="card">
                    <div class="card-header pb-0 border-0">
                        <div>
                            <h4 class="card-title mb-2">Activity</h4>
                            <h2 class="mb-0">$78120</h2>
                        </div>
                        <ul class="card-list">
                            <li class="justify-content-end">Recharge<span class="bg-success circle me-0 ms-2"></span></li>
                            <li class="justify-content-end">Spending<span class="bg-danger circle me-0 ms-2"></span></li>
                        </ul>
                    </div>
                    <div class="card-body pb-0 pt-3">
                        <div id="chartBar" class="bar-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-7">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <div>
                            <h4 class="card-title mb-2">Quick Transfer</h4>
                            <span class="fs-12">Last payment request</span>
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                        stroke="#575757" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                        stroke="#575757" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                        stroke="#575757" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0);">Next</a>
                                <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="user-bx">
                            <img src="/public/template/admin/images/pic1_1.jpg" alt>
                            <div>
                                <h6 class="user-name">Samuel</h6>
                                <span class="meta">@sam224</span>
                            </div>
                            <div class="">
                                Requested Amount
                                <span class="badge badge-success rounded shadow">$200</span>
                            </div>
                            <i class="las la-check-circle check-icon"></i>
                        </div>
                        <h4 class="mt-3 mb-3">Recent Payouts<a href="javascript:void(0);"
                                                              class="fs-16 float-end text-secondary font-w600">See
                                More</a></h4>
                        <ul class="user-list">
                            <li><img src="/public/template/admin/images/1.jpg" alt></li>
                            <li><img src="/public/template/admin/images/2.jpg" alt></li>
                            <li><img src="/public/template/admin/images/3.jpg" alt></li>
                            <li><img src="/public/template/admin/images/4.jpg" alt></li>
                            <li><img src="/public/template/admin/images/5.jpg" alt></li>
                            <li><img src="/public/template/admin/images/6.jpg" alt></li>
                        </ul>
                        <h4 class="mt-3 mb-0">Insert Amount</h4>
                        <div class="format-slider">
                            <input class="form-control amount-input" title="Formatted number" id="input-format">
                            <div id="slider-format"></div>
                        </div>
                        <div class="text-secondary fs-16 d-flex justify-content-between font-w600 mt-4">
                            <span>Your Balance</span>
                            <span>$ 456,345.62</span>
                        </div>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <a href="javascript:void(0);" class="btn btn-primary d-block btn-lg text-uppercase">Transfer
                            Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-5">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <div>
                            <h4 class="card-title mb-2">Credit Spendings</h4>
                            <span class="fs-12">Credit spending split details</span>
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                        stroke="#575757" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                        stroke="#575757" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                        stroke="#575757" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="progress default-progress">
                            <div class="progress-bar bg-gradient-1 progress-animated" style="width: 70%; height:20px;"
                                 role="progressbar">
                                <span class="sr-only">70%</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                            <span>Video Consult</span>
                            <span class="fs-18"><span class="text-black pe-2">$8015</span>/$13058</span>
                        </div>
                        <div class="progress default-progress mt-4">
                            <div class="progress-bar bg-gradient-2 progress-animated" style="width: 25%; height:20px;"
                                 role="progressbar">
                                <span class="sr-only">70% Complete</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                            <span>Text Chat</span>
                            <span class="fs-18"><span class="text-black pe-2">$1567</span>/$13058</span>
                        </div>
                        <div class="progress default-progress mt-4">
                            <div class="progress-bar bg-gradient-3 progress-animated" style="width: 25%; height:20px;"
                                 role="progressbar">
                                <span class="sr-only">25%</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                            <span>Gifting</span>
                            <span class="fs-18"><span class="text-black pe-2">$1567</span>/$13058</span>
                        </div>

                    </div>
                    <div class="card-footer border-0 pt-0">
                        <a href="javascript:void(0);" class="btn btn-outline-primary d-block btn-lg">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-7">
                <div class="card">
                    <div class="card-header d-flex flex-wrap border-0 pb-0">
                        <div class="me-auto mb-sm-0 mb-3">
                            <h4 class="card-title mb-2">Transaction Overview</h4>
                            <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
                        </div>
                        <a href="javascript:void(0)" class="btn btn-rounded btn-md btn-primary me-3 me-3"><i
                                class="las la-download scale5 me-3"></i>Download Report</a>
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                        stroke="#575757" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                        stroke="#575757" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                        stroke="#575757" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-2">
                        <div class="d-sm-flex d-block">
                            <div class="form-check toggle-switch text-end form-switch me-4">
                                <input checked class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Number</label>
                            </div>
                            <div class="form-check toggle-switch text-end form-switch me-auto">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault1">
                                <label class="form-check-label" for="flexSwitchCheckDefault1">Analytics</label>
                            </div>
                            <ul class="card-list d-flex mt-sm-0 mt-3">
                                <li class="me-3"><span class="bg-success circle"></span>Income</li>
                                <li><span class="oranger-bg circle"></span>Outcome</li>
                            </ul>
                        </div>
                        <div id="chartBar2" class="bar-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header d-block d-sm-flex border-0">
                        <div class="me-3">
                            <h4 class="card-title mb-2">Previous Transactions</h4>
                            <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
                        </div>
                        <div class="card-tabs mt-3 mt-sm-0">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#monthly"
                                       role="tab">Monthly</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#Weekly" role="tab">Weekly</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#Today" role="tab">Today</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body tab-content p-0">
                        <div class="tab-pane active show fade" id="monthly" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-responsive-md card-table transactions-table">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <i class="fa-solid fa-wallet fa-2x text-success fa-2x"></i>
                                        </td>
                                        <td>
                                            <h6 class="fs-16 font-w600 mb-0"><a href="javascript:void(0);" class="text-black">Vijendra Chaurasiya</a></h6>
                                            <span class="fs-14">Wallet recharge</span>
                                        </td>
                                        <td>
                                            <h6 class="fs-16 text-black font-w600 mb-0">June 4, 2020</h6>
                                            <span class="fs-14">05:34:45 AM</span>
                                        </td>
                                        <td><span class="fs-16 text-black font-w600">+$5,553</span></td>
                                        <td><span class="text-success fs-16 font-w500 text-end d-block">
                                                <span class="badge badge-success shadow">Completed</span>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa-solid text-warning fa-money-bill-transfer fa-2x"></i>
                                        </td>
                                        <td>
                                            <h6 class="fs-16 font-w600 mb-0"><a href="javascript:void(0);" class="text-black">Neeraj Sinha</a></h6>
                                            <span class="fs-14">Consultant Withdrawl</span>
                                        </td>
                                        <td>
                                            <h6 class="fs-16 text-black font-w600 mb-0">June 14, 2020</h6>
                                            <span class="fs-14">05:34:45 AM</span>
                                        </td>
                                        <td><span class="fs-16 text-black font-w600">-$2500</span></td>
                                        <td><span class="text-success fs-16 font-w500 text-end d-block">
                                                <span class="badge badge-warning shadow">Approval Pending</span>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa-solid fa-wallet fa-2x text-success fa-2x"></i>
                                        </td>
                                        <td>
                                            <h6 class="fs-16 font-w600 mb-0"><a href="javascript:void(0);" class="text-black">Nandini S.</a></h6>
                                            <span class="fs-14">Wallet recharge</span>
                                        </td>
                                        <td>
                                            <h6 class="fs-16 text-black font-w600 mb-0">June 14, 2020</h6>
                                            <span class="fs-14">05:36:45 AM</span>
                                        </td>
                                        <td><span class="fs-16 text-black font-w600">+$600</span></td>
                                        <td><span class="text-success fs-16 font-w500 text-end d-block">
                                                <span class="badge badge-success shadow">Completed</span>
                                            </span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="Weekly" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-responsive-md card-table transactions-table">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <svg class="bgl-success tr-icon" width="63" height="63" viewBox="0 0 63 63"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="M35.2219 42.9875C34.8938 42.3094 35.1836 41.4891 35.8617 41.1609C37.7484 40.2531 39.3453 38.8422 40.4828 37.0758C41.6477 35.2656 42.2656 33.1656 42.2656 31C42.2656 24.7875 37.2125 19.7344 31 19.7344C24.7875 19.7344 19.7344 24.7875 19.7344 31C19.7344 33.1656 20.3523 35.2656 21.5117 37.0813C22.6437 38.8477 24.2461 40.2586 26.1328 41.1664C26.8109 41.4945 27.1008 42.3094 26.7727 42.993C26.4445 43.6711 25.6297 43.9609 24.9461 43.6328C22.6 42.5063 20.6148 40.7563 19.2094 38.5578C17.7656 36.3047 17 33.6906 17 31C17 27.2594 18.4547 23.743 21.1016 21.1016C23.743 18.4547 27.2594 17 31 17C34.7406 17 38.257 18.4547 40.8984 21.1016C43.5453 23.7484 45 27.2594 45 31C45 33.6906 44.2344 36.3047 42.7852 38.5578C41.3742 40.7508 39.3891 42.5063 37.0484 43.6328C36.3648 43.9555 35.55 43.6711 35.2219 42.9875Z"
                                                        fill="#2BC155"/>
                                                    <path
                                                        d="M36.3211 31.7274C36.5891 31.9953 36.7203 32.3453 36.7203 32.6953C36.7203 33.0453 36.5891 33.3953 36.3211 33.6633L32.8812 37.1031C32.3781 37.6063 31.7109 37.8797 31.0055 37.8797C30.3 37.8797 29.6273 37.6008 29.1297 37.1031L25.6898 33.6633C25.1539 33.1274 25.1539 32.2633 25.6898 31.7274C26.2258 31.1914 27.0898 31.1914 27.6258 31.7274L29.6437 33.7453L29.6437 25.9742C29.6437 25.2196 30.2562 24.6071 31.0109 24.6071C31.7656 24.6071 32.3781 25.2196 32.3781 25.9742L32.3781 33.7508L34.3961 31.7328C34.9211 31.1969 35.7852 31.1969 36.3211 31.7274Z"
                                                        fill="#2BC155"/>
                                                </g>
                                            </svg>
                                        </td>
                                        <td>
                                            <h6 class="fs-16 font-w600 mb-0"><a href="javascript:void(0);"
                                                                                class="text-black">XYZ Store ID</a></h6>
                                            <span class="fs-14">Cashback</span>
                                        </td>
                                        <td>
                                            <h6 class="fs-16 text-black font-w600 mb-0">June 4, 2020</h6>
                                            <span class="fs-14">05:34:45 AM</span>
                                        </td>
                                        <td><span class="fs-16 text-black font-w600">+$5,553</span></td>
                                        <td><span class="text-success fs-16 font-w500 text-end d-block">Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg class="bgl-danger tr-icon" width="63" height="63" viewBox="0 0 63 63"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="M35.2219 19.0125C34.8937 19.6906 35.1836 20.5109 35.8617 20.8391C37.7484 21.7469 39.3453 23.1578 40.4828 24.9242C41.6476 26.7344 42.2656 28.8344 42.2656 31C42.2656 37.2125 37.2125 42.2656 31 42.2656C24.7875 42.2656 19.7344 37.2125 19.7344 31C19.7344 28.8344 20.3523 26.7344 21.5117 24.9187C22.6437 23.1523 24.2461 21.7414 26.1328 20.8336C26.8109 20.5055 27.1008 19.6906 26.7726 19.007C26.4445 18.3289 25.6297 18.0391 24.9461 18.3672C22.6 19.4937 20.6148 21.2437 19.2094 23.4422C17.7656 25.6953 17 28.3094 17 31C17 34.7406 18.4547 38.257 21.1015 40.8984C23.743 43.5453 27.2594 45 31 45C34.7406 45 38.257 43.5453 40.8984 40.8984C43.5453 38.2516 45 34.7406 45 31C45 28.3094 44.2344 25.6953 42.7851 23.4422C41.3742 21.2492 39.389 19.4937 37.0484 18.3672C36.3648 18.0445 35.55 18.3289 35.2219 19.0125Z"
                                                        fill="#FF2E2E"/>
                                                    <path
                                                        d="M36.3211 30.2726C36.589 30.0047 36.7203 29.6547 36.7203 29.3047C36.7203 28.9547 36.589 28.6047 36.3211 28.3367L32.8812 24.8969C32.3781 24.3937 31.7109 24.1203 31.0055 24.1203C30.3 24.1203 29.6273 24.3992 29.1297 24.8969L25.6898 28.3367C25.1539 28.8726 25.1539 29.7367 25.6898 30.2726C26.2258 30.8086 27.0898 30.8086 27.6258 30.2726L29.6437 28.2547L29.6437 36.0258C29.6437 36.7804 30.2562 37.3929 31.0109 37.3929C31.7656 37.3929 32.3781 36.7804 32.3781 36.0258L32.3781 28.2492L34.3961 30.2672C34.9211 30.8031 35.7851 30.8031 36.3211 30.2726Z"
                                                        fill="#FF2E2E"/>
                                                </g>
                                            </svg>
                                        </td>
                                        <td>
                                            <h6 class="fs-16 font-w600 mb-0"><a href="javascript:void(0);"
                                                                                class="text-black">Chef Renata</a></h6>
                                            <span class="fs-14">Transfer</span>
                                        </td>
                                        <td>
                                            <h6 class="fs-16 text-black font-w600 mb-0">June 5, 2020</h6>
                                            <span class="fs-14">05:34:45 AM</span>
                                        </td>
                                        <td><span class="fs-16 text-black font-w600">-$167</span></td>
                                        <td><span class="text-warning fs-16 font-w500 text-end d-block">Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg class="bgl-success tr-icon" width="63" height="63" viewBox="0 0 63 63"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="M35.2219 42.9875C34.8938 42.3094 35.1836 41.4891 35.8617 41.1609C37.7484 40.2531 39.3453 38.8422 40.4828 37.0758C41.6477 35.2656 42.2656 33.1656 42.2656 31C42.2656 24.7875 37.2125 19.7344 31 19.7344C24.7875 19.7344 19.7344 24.7875 19.7344 31C19.7344 33.1656 20.3523 35.2656 21.5117 37.0813C22.6437 38.8477 24.2461 40.2586 26.1328 41.1664C26.8109 41.4945 27.1008 42.3094 26.7727 42.993C26.4445 43.6711 25.6297 43.9609 24.9461 43.6328C22.6 42.5063 20.6148 40.7563 19.2094 38.5578C17.7656 36.3047 17 33.6906 17 31C17 27.2594 18.4547 23.743 21.1016 21.1016C23.743 18.4547 27.2594 17 31 17C34.7406 17 38.257 18.4547 40.8984 21.1016C43.5453 23.7484 45 27.2594 45 31C45 33.6906 44.2344 36.3047 42.7852 38.5578C41.3742 40.7508 39.3891 42.5063 37.0484 43.6328C36.3648 43.9555 35.55 43.6711 35.2219 42.9875Z"
                                                        fill="#2BC155"/>
                                                    <path
                                                        d="M36.3211 31.7274C36.5891 31.9953 36.7203 32.3453 36.7203 32.6953C36.7203 33.0453 36.5891 33.3953 36.3211 33.6633L32.8812 37.1031C32.3781 37.6063 31.7109 37.8797 31.0055 37.8797C30.3 37.8797 29.6273 37.6008 29.1297 37.1031L25.6898 33.6633C25.1539 33.1274 25.1539 32.2633 25.6898 31.7274C26.2258 31.1914 27.0898 31.1914 27.6258 31.7274L29.6437 33.7453L29.6437 25.9742C29.6437 25.2196 30.2562 24.6071 31.0109 24.6071C31.7656 24.6071 32.3781 25.2196 32.3781 25.9742L32.3781 33.7508L34.3961 31.7328C34.9211 31.1969 35.7852 31.1969 36.3211 31.7274Z"
                                                        fill="#2BC155"/>
                                                </g>
                                            </svg>
                                        </td>
                                        <td>
                                            <h6 class="fs-16 font-w600 mb-0"><a href="javascript:void(0);"
                                                                                class="text-black">Cindy Alexandro</a>
                                            </h6>
                                            <span class="fs-14">Transfer</span>
                                        </td>
                                        <td>
                                            <h6 class="fs-16 text-black font-w600 mb-0">June 5, 2020</h6>
                                            <span class="fs-14">05:34:45 AM</span>
                                        </td>
                                        <td><span class="fs-16 text-black font-w600">+$5,553</span></td>
                                        <td><span class="text-danger fs-16 font-w500 text-end d-block">Canceled</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="Today" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-responsive-md card-table transactions-table">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <svg class="bgl-danger tr-icon" width="63" height="63" viewBox="0 0 63 63"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="M35.2219 19.0125C34.8937 19.6906 35.1836 20.5109 35.8617 20.8391C37.7484 21.7469 39.3453 23.1578 40.4828 24.9242C41.6476 26.7344 42.2656 28.8344 42.2656 31C42.2656 37.2125 37.2125 42.2656 31 42.2656C24.7875 42.2656 19.7344 37.2125 19.7344 31C19.7344 28.8344 20.3523 26.7344 21.5117 24.9187C22.6437 23.1523 24.2461 21.7414 26.1328 20.8336C26.8109 20.5055 27.1008 19.6906 26.7726 19.007C26.4445 18.3289 25.6297 18.0391 24.9461 18.3672C22.6 19.4937 20.6148 21.2437 19.2094 23.4422C17.7656 25.6953 17 28.3094 17 31C17 34.7406 18.4547 38.257 21.1015 40.8984C23.743 43.5453 27.2594 45 31 45C34.7406 45 38.257 43.5453 40.8984 40.8984C43.5453 38.2516 45 34.7406 45 31C45 28.3094 44.2344 25.6953 42.7851 23.4422C41.3742 21.2492 39.389 19.4937 37.0484 18.3672C36.3648 18.0445 35.55 18.3289 35.2219 19.0125Z"
                                                        fill="#FF2E2E"/>
                                                    <path
                                                        d="M36.3211 30.2726C36.589 30.0047 36.7203 29.6547 36.7203 29.3047C36.7203 28.9547 36.589 28.6047 36.3211 28.3367L32.8812 24.8969C32.3781 24.3937 31.7109 24.1203 31.0055 24.1203C30.3 24.1203 29.6273 24.3992 29.1297 24.8969L25.6898 28.3367C25.1539 28.8726 25.1539 29.7367 25.6898 30.2726C26.2258 30.8086 27.0898 30.8086 27.6258 30.2726L29.6437 28.2547L29.6437 36.0258C29.6437 36.7804 30.2562 37.3929 31.0109 37.3929C31.7656 37.3929 32.3781 36.7804 32.3781 36.0258L32.3781 28.2492L34.3961 30.2672C34.9211 30.8031 35.7851 30.8031 36.3211 30.2726Z"
                                                        fill="#FF2E2E"/>
                                                </g>
                                            </svg>
                                        </td>
                                        <td>
                                            <h6 class="fs-16 font-w600 mb-0"><a href="javascript:void(0);"
                                                                                class="text-black">Chef Renata</a></h6>
                                            <span class="fs-14">Transfer</span>
                                        </td>
                                        <td>
                                            <h6 class="fs-16 text-black font-w600 mb-0">June 5, 2020</h6>
                                            <span class="fs-14">05:34:45 AM</span>
                                        </td>
                                        <td><span class="fs-16 text-black font-w600">-$167</span></td>
                                        <td><span class="text-warning fs-16 font-w500 text-end d-block">Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg class="bgl-success tr-icon" width="63" height="63" viewBox="0 0 63 63"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="M35.2219 42.9875C34.8938 42.3094 35.1836 41.4891 35.8617 41.1609C37.7484 40.2531 39.3453 38.8422 40.4828 37.0758C41.6477 35.2656 42.2656 33.1656 42.2656 31C42.2656 24.7875 37.2125 19.7344 31 19.7344C24.7875 19.7344 19.7344 24.7875 19.7344 31C19.7344 33.1656 20.3523 35.2656 21.5117 37.0813C22.6437 38.8477 24.2461 40.2586 26.1328 41.1664C26.8109 41.4945 27.1008 42.3094 26.7727 42.993C26.4445 43.6711 25.6297 43.9609 24.9461 43.6328C22.6 42.5063 20.6148 40.7563 19.2094 38.5578C17.7656 36.3047 17 33.6906 17 31C17 27.2594 18.4547 23.743 21.1016 21.1016C23.743 18.4547 27.2594 17 31 17C34.7406 17 38.257 18.4547 40.8984 21.1016C43.5453 23.7484 45 27.2594 45 31C45 33.6906 44.2344 36.3047 42.7852 38.5578C41.3742 40.7508 39.3891 42.5063 37.0484 43.6328C36.3648 43.9555 35.55 43.6711 35.2219 42.9875Z"
                                                        fill="#2BC155"/>
                                                    <path
                                                        d="M36.3211 31.7274C36.5891 31.9953 36.7203 32.3453 36.7203 32.6953C36.7203 33.0453 36.5891 33.3953 36.3211 33.6633L32.8812 37.1031C32.3781 37.6063 31.7109 37.8797 31.0055 37.8797C30.3 37.8797 29.6273 37.6008 29.1297 37.1031L25.6898 33.6633C25.1539 33.1274 25.1539 32.2633 25.6898 31.7274C26.2258 31.1914 27.0898 31.1914 27.6258 31.7274L29.6437 33.7453L29.6437 25.9742C29.6437 25.2196 30.2562 24.6071 31.0109 24.6071C31.7656 24.6071 32.3781 25.2196 32.3781 25.9742L32.3781 33.7508L34.3961 31.7328C34.9211 31.1969 35.7852 31.1969 36.3211 31.7274Z"
                                                        fill="#2BC155"/>
                                                </g>
                                            </svg>
                                        </td>
                                        <td>
                                            <h6 class="fs-16 font-w600 mb-0"><a href="javascript:void(0);"
                                                                                class="text-black">Cindy Alexandro</a>
                                            </h6>
                                            <span class="fs-14">Transfer</span>
                                        </td>
                                        <td>
                                            <h6 class="fs-16 text-black font-w600 mb-0">June 5, 2020</h6>
                                            <span class="fs-14">05:34:45 AM</span>
                                        </td>
                                        <td><span class="fs-16 text-black font-w600">+$5,553</span></td>
                                        <td><span class="text-danger fs-16 font-w500 text-end d-block">Canceled</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg class="bgl-success tr-icon" width="63" height="63" viewBox="0 0 63 63"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="M35.2219 42.9875C34.8938 42.3094 35.1836 41.4891 35.8617 41.1609C37.7484 40.2531 39.3453 38.8422 40.4828 37.0758C41.6477 35.2656 42.2656 33.1656 42.2656 31C42.2656 24.7875 37.2125 19.7344 31 19.7344C24.7875 19.7344 19.7344 24.7875 19.7344 31C19.7344 33.1656 20.3523 35.2656 21.5117 37.0813C22.6437 38.8477 24.2461 40.2586 26.1328 41.1664C26.8109 41.4945 27.1008 42.3094 26.7727 42.993C26.4445 43.6711 25.6297 43.9609 24.9461 43.6328C22.6 42.5063 20.6148 40.7563 19.2094 38.5578C17.7656 36.3047 17 33.6906 17 31C17 27.2594 18.4547 23.743 21.1016 21.1016C23.743 18.4547 27.2594 17 31 17C34.7406 17 38.257 18.4547 40.8984 21.1016C43.5453 23.7484 45 27.2594 45 31C45 33.6906 44.2344 36.3047 42.7852 38.5578C41.3742 40.7508 39.3891 42.5063 37.0484 43.6328C36.3648 43.9555 35.55 43.6711 35.2219 42.9875Z"
                                                        fill="#2BC155"/>
                                                    <path
                                                        d="M36.3211 31.7274C36.5891 31.9953 36.7203 32.3453 36.7203 32.6953C36.7203 33.0453 36.5891 33.3953 36.3211 33.6633L32.8812 37.1031C32.3781 37.6063 31.7109 37.8797 31.0055 37.8797C30.3 37.8797 29.6273 37.6008 29.1297 37.1031L25.6898 33.6633C25.1539 33.1274 25.1539 32.2633 25.6898 31.7274C26.2258 31.1914 27.0898 31.1914 27.6258 31.7274L29.6437 33.7453L29.6437 25.9742C29.6437 25.2196 30.2562 24.6071 31.0109 24.6071C31.7656 24.6071 32.3781 25.2196 32.3781 25.9742L32.3781 33.7508L34.3961 31.7328C34.9211 31.1969 35.7852 31.1969 36.3211 31.7274Z"
                                                        fill="#2BC155"/>
                                                </g>
                                            </svg>
                                        </td>
                                        <td>
                                            <h6 class="fs-16 font-w600 mb-0"><a href="javascript:void(0);"
                                                                                class="text-black">Paipal</a></h6>
                                            <span class="fs-14">Transfer</span>
                                        </td>
                                        <td>
                                            <h6 class="fs-16 text-black font-w600 mb-0">June 4, 2020</h6>
                                            <span class="fs-14">05:34:45 AM</span>
                                        </td>
                                        <td><span class="fs-16 text-black font-w600">+$5,553</span></td>
                                        <td><span class="text-success fs-16 font-w500 text-end d-block">Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg class="bgl-danger tr-icon" width="63" height="63" viewBox="0 0 63 63"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="M35.2219 19.0125C34.8937 19.6906 35.1836 20.5109 35.8617 20.8391C37.7484 21.7469 39.3453 23.1578 40.4828 24.9242C41.6476 26.7344 42.2656 28.8344 42.2656 31C42.2656 37.2125 37.2125 42.2656 31 42.2656C24.7875 42.2656 19.7344 37.2125 19.7344 31C19.7344 28.8344 20.3523 26.7344 21.5117 24.9187C22.6437 23.1523 24.2461 21.7414 26.1328 20.8336C26.8109 20.5055 27.1008 19.6906 26.7726 19.007C26.4445 18.3289 25.6297 18.0391 24.9461 18.3672C22.6 19.4937 20.6148 21.2437 19.2094 23.4422C17.7656 25.6953 17 28.3094 17 31C17 34.7406 18.4547 38.257 21.1015 40.8984C23.743 43.5453 27.2594 45 31 45C34.7406 45 38.257 43.5453 40.8984 40.8984C43.5453 38.2516 45 34.7406 45 31C45 28.3094 44.2344 25.6953 42.7851 23.4422C41.3742 21.2492 39.389 19.4937 37.0484 18.3672C36.3648 18.0445 35.55 18.3289 35.2219 19.0125Z"
                                                        fill="#FF2E2E"/>
                                                    <path
                                                        d="M36.3211 30.2726C36.589 30.0047 36.7203 29.6547 36.7203 29.3047C36.7203 28.9547 36.589 28.6047 36.3211 28.3367L32.8812 24.8969C32.3781 24.3937 31.7109 24.1203 31.0055 24.1203C30.3 24.1203 29.6273 24.3992 29.1297 24.8969L25.6898 28.3367C25.1539 28.8726 25.1539 29.7367 25.6898 30.2726C26.2258 30.8086 27.0898 30.8086 27.6258 30.2726L29.6437 28.2547L29.6437 36.0258C29.6437 36.7804 30.2562 37.3929 31.0109 37.3929C31.7656 37.3929 32.3781 36.7804 32.3781 36.0258L32.3781 28.2492L34.3961 30.2672C34.9211 30.8031 35.7851 30.8031 36.3211 30.2726Z"
                                                        fill="#FF2E2E"/>
                                                </g>
                                            </svg>
                                        </td>
                                        <td>
                                            <h6 class="fs-16 font-w600 mb-0"><a href="javascript:void(0);"
                                                                                class="text-black">Hawkins Jr.</a></h6>
                                            <span class="fs-14">Cashback</span>
                                        </td>
                                        <td>
                                            <h6 class="fs-16 text-black font-w600 mb-0">June 4, 2020</h6>
                                            <span class="fs-14">05:34:45 AM</span>
                                        </td>
                                        <td><span class="fs-16 text-black font-w600">+$5,553</span></td>
                                        <td><span class="text-danger fs-16 font-w500 text-end d-block">Canceled</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card progress-card">
                            <div class="card-body d-flex">
                                <div class="me-auto">
                                    <h4 class="card-title">Total Transactions</h4>
                                    <div class="d-flex align-items-center">
                                        <h2 class="fs-38 mb-0">98k</h2>
                                        <div class="text-success transaction-caret">
                                            <i class="fas fa-sort-up"></i>
                                            <p class="mb-0">+0.5%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress progress-vertical-bottom" style="min-height:110px;min-width:10px;">
                                    <div class="progress-bar bg-primary" style="width:10px; height:40%;"
                                         role="progressbar">
                                        <span class="sr-only">40% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-vertical-bottom" style="min-height:110px;min-width:10px;">
                                    <div class="progress-bar bg-primary" style="width:10px; height:55%;"
                                         role="progressbar">
                                        <span class="sr-only">55% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-vertical-bottom" style="min-height:110px;min-width:10px;">
                                    <div class="progress-bar bg-primary" style="width:10px; height:80%;"
                                         role="progressbar">
                                        <span class="sr-only">80% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-vertical-bottom" style="min-height:110px;min-width:10px;">
                                    <div class="progress-bar bg-primary" style="width:10px; height:50%;"
                                         role="progressbar">
                                        <span class="sr-only">50% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Payout Approval Pending</h4>
                                <div class="d-flex align-items-center">
                                    <div class="me-auto">
                                        <div class="progress mt-4" style="height:10px;">
                                            <div class="progress-bar bg-primary progress-animated"
                                                 style="width: 45%; height:10px;" role="progressbar">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                        <p class="fs-16 mb-0 mt-2"><span class="text-danger">-0,8% </span>from last
                                            month</p>
                                    </div>
                                    <h2 class="fs-38">84</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mt-2">Visits</h4>
                                <div class="d-flex align-items-center mt-3 mb-2">
                                    <h2 class="fs-38 mb-0 me-3">456</h2>
                                    <span class="badge badge-success">+0.5%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mt-2">Gifting</h4>
                                <div class="d-flex align-items-center mt-3 mb-2">
                                    <h2 class="fs-38 mb-0 me-3">1467</h2>
                                    <span class="badge badge-danger">-6.4%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_script')
    <!-- Dashboard 1 -->
    <script src="/public/template/admin/js/dashboard-1.js"></script>
    <script type="text/javascript">
        var options = {
            series: [
                {
                    name: "High - 2013",
                    data: [28, 29, 33, 36, 32, 32, 33]
                },
                {
                    name: "Low - 2013",
                    data: [12, 11, 14, 18, 17, 13, 13]
                }
            ],
            chart: {
                height: 350,
                type: 'line',
                dropShadow: {
                    enabled: true,
                    color: '#000',
                    top: 18,
                    left: 7,
                    blur: 10,
                    opacity: 0.2
                },
                toolbar: {
                    show: false
                }
            },
            colors: ['#77B6EA', '#545454'],
            dataLabels: {
                enabled: true,
            },
            stroke: {
                curve: 'smooth'
            },
            title: {
                text: 'Visits vs Consultation',
                align: 'left'
            },
            grid: {
                borderColor: '#e7e7e7',
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                },
            },
            markers: {
                size: 1
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                title: {
                    text: 'Month'
                }
            },
            yaxis: {
                title: {
                    text: 'Consultation'
                },
                min: 5,
                max: 40
            },
            legend: {
                position: 'top',
                horizontalAlign: 'right',
                floating: true,
                offsetY: -25,
                offsetX: -5
            }
        };

        var chart = new ApexCharts(document.querySelector("#customerConversionChart"), options);
        chart.render();
    </script>
@endsection
