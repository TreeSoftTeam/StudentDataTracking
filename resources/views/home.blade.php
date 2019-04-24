@extends('layouts.management')

@section('head')
<link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">
@endsection

@section('content')


            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Home</h4>
                    <p class="text-muted page-title-alt">Welcome to admin panel !</p>
                </div>
            </div>


            <!-- Content Page -->
            <div class="row">




                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card-box">
                                <div class="bar-widget">
                                    <div class="table-box">
                                        <div class="table-detail">
                                            <div class="iconbox bg-info">
                                                <i class="text-blue md md-account-child"></i>
                                            </div>
                                        </div>

                                        <div class="table-detail">
                                            <h4 class="m-t-0 m-b-5"><b><span
                                                        data-plugin="counterup">430</span></b></h4>
                                            <h5 class="text-muted m-b-0 m-t-0">จำนวนนักศึกษา</h5>
                                        </div>
                                        <div class="table-detail text-right">
                                            <span data-plugin="peity-bar" data-colors="#34d3eb,#ebeff2"
                                                data-width="120"
                                                data-height="45">5,3,9,6,5,9,7,3,5,2,9,7,2,1</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card-box">
                                <div class="bar-widget">
                                    <div class="table-box">
                                        <div class="table-detail">
                                            <div class="iconbox bg-success">
                                                <i class="text-white md md-account-child"></i>
                                            </div>
                                        </div>

                                        <div class="table-detail">
                                            <h4 class="m-t-0 m-b-5"><b><span
                                                        data-plugin="counterup">5</span></b></h4>
                                            <h5 class="text-muted m-b-0 m-t-0">จำนวนผู้มีสิทธิ์ดู</h5>
                                        </div>
                                        <div class="table-detail text-right">
                                            <span data-plugin="peity-bar" data-colors="#34d3eb,#ebeff2"
                                                data-width="120"
                                                data-height="45">5,3,9,6,5,9,7,3,5,2,9,7,2,1</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card-box">
                                <div class="bar-widget">
                                    <div class="table-box">
                                        <div class="table-detail">
                                            <div class="iconbox bg-pink">
                                                <i class="text-white md md-account-child"></i>
                                            </div>
                                        </div>

                                        <div class="table-detail">
                                            <h4 class="m-t-0 m-b-5"><b><span
                                                        data-plugin="counterup">3</span></b></h4>
                                            <h5 class="text-muted m-b-0 m-t-0">จำนวนผู้ดูแล</h5>
                                        </div>
                                        <div class="table-detail text-right">
                                            <span data-plugin="peity-bar" data-colors="#34d3eb,#ebeff2"
                                                data-width="120"
                                                data-height="45">5,3,9,6,5,9,7,3,5,2,9,7,2,1</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-lg-12">
                    <div class="row">

                        <!-- Visa -->
                        <div class="col-lg-6">
                            <div class="card-box">
                                <h4 class="m-t-0 m-b-20 header-title"><b>รายชื่อนักศึกษา Visa ที่ใกล้หมดอายุ</b>
                                </h4>

                                <div class="inbox-widget nicescroll mx-box">
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img
                                                    src="assets/images/users/avatar-1.jpg"
                                                    class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Chadengle</p>
                                            <p class="inbox-item-text">คณะ:.... สาขา:...</p>
                                            <p class="inbox-item-date">22 Day left</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img
                                                    src="assets/images/users/avatar-2.jpg"
                                                    class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Tomaslau</p>
                                            <p class="inbox-item-text">คณะ:.... สาขา:...</p>
                                            <p class="inbox-item-date">5 Day left</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img
                                                    src="assets/images/users/avatar-3.jpg"
                                                    class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Stillnotdavid</p>
                                            <p class="inbox-item-text">คณะ:.... สาขา:...</p>
                                            <p class="inbox-item-date">21 Day left</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img
                                                    src="assets/images/users/avatar-4.jpg"
                                                    class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Kurafire</p>
                                            <p class="inbox-item-text">คณะ:.... สาขา:...</p>
                                            <p class="inbox-item-date">14 Day left</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img
                                                    src="assets/images/users/avatar-5.jpg"
                                                    class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Shahedk</p>
                                            <p class="inbox-item-text">คณะ:.... สาขา:...</p>
                                            <p class="inbox-item-date">28 Day left</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img
                                                    src="assets/images/users/avatar-6.jpg"
                                                    class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Adhamdannaway</p>
                                            <p class="inbox-item-text">คณะ:.... สาขา:...</p>
                                            <p class="inbox-item-date">18 Day left</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img
                                                    src="assets/images/users/avatar-8.jpg"
                                                    class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Arashasghari</p>
                                            <p class="inbox-item-text">คณะ:.... สาขา:...</p>
                                            <p class="inbox-item-date">29 Day left</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img
                                                    src="assets/images/users/avatar-9.jpg"
                                                    class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Joshaustin</p>
                                            <p class="inbox-item-text">คณะ:.... สาขา:...</p>
                                            <p class="inbox-item-date">7 Day left</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Passport -->
                        <div class="col-lg-6">
                            <div class="card-box">
                                <h4 class="m-t-0 m-b-20 header-title"><b>รายชื่อนักศึกษา Passport
                                        ที่ใกล้หมดอายุ</b></h4>

                                <div class="inbox-widget nicescroll mx-box">

                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img
                                                    src="assets/images/users/avatar-2.jpg"
                                                    class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Tomaslau</p>
                                            <p class="inbox-item-text">คณะ:.... สาขา:...</p>
                                            <p class="inbox-item-date">5 Day left</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img
                                                    src="assets/images/users/avatar-3.jpg"
                                                    class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Stillnotdavid</p>
                                            <p class="inbox-item-text">คณะ:.... สาขา:...</p>
                                            <p class="inbox-item-date">21 Day left</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img
                                                    src="assets/images/users/avatar-4.jpg"
                                                    class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Kurafire</p>
                                            <p class="inbox-item-text">คณะ:.... สาขา:...</p>
                                            <p class="inbox-item-date">14 Day left</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img
                                                    src="assets/images/users/avatar-5.jpg"
                                                    class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Shahedk</p>
                                            <p class="inbox-item-text">คณะ:.... สาขา:...</p>
                                            <p class="inbox-item-date">28 Day left</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img
                                                    src="assets/images/users/avatar-6.jpg"
                                                    class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Adhamdannaway</p>
                                            <p class="inbox-item-text">คณะ:.... สาขา:...</p>
                                            <p class="inbox-item-date">18 Day left</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img
                                                    src="assets/images/users/avatar-8.jpg"
                                                    class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Arashasghari</p>
                                            <p class="inbox-item-text">คณะ:.... สาขา:...</p>
                                            <p class="inbox-item-date">29 Day left</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img
                                                    src="assets/images/users/avatar-9.jpg"
                                                    class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Joshaustin</p>
                                            <p class="inbox-item-text">คณะ:.... สาขา:...</p>
                                            <p class="inbox-item-date">7 Day left</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
            <!-- end row -->


 
@endsection


@section('bottom')
<script src="{{ asset('assets/plugins/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/plugins/counterup/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('assets/plugins/counterup/jquery.counterup.min.js') }}"></script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.counter').counterUp({
            delay: 10,
            time: 1100
        });

    });
</script>
@endsection