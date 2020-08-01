@extends('layouts.vendor-header')

@section('content')
<section class="dash">
        <div class="container">
            <div class="row" id="dashh">
                <div class="col-sm">
                    <div class="dash-con">
                        <div class="row">
                            <div class="col-4">
                                <img class="dash-img" src="{{ asset('assets/img/icon/Group 93.svg') }}" alt="">
                            </div>
                            <div class="col">
                                <p class="dash-title">{{ $totalOrders }}</p>
                                <p class="dash-sub">Orders</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="dash-con">
                        <div class="row">
                            <div class="col-4">
                                <img class="dash-img" src="{{ asset('assets/img/icon/Group 92.svg') }}" alt="">
                            </div>
                            <div class="col">
                                <p class="dash-title">{{ $totalItems }}</p>
                                <p class="dash-sub">Food Items</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="dash-con">
                        <div class="row">
                            <div class="col-4">
                                <img class="dash-img" src="{{ asset('assets/img/icon/Group 91.svg') }}" alt="">
                            </div>
                            <div class="col">
                                <p class="dash-title">₦2,000</p>
                                <p class="dash-sub">Total Sales</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="note">
        <div class="container">
            <p class="note-head">Notifications</p>
            <div class="note-tab">
                <div class="row">
                    <div class="col-sm-1">
                        <img src="{{ asset('assets/img/icon/Ellipse 1.svg') }}" alt="">
                    </div>
                    <div class="col-sm">
                        <div class="note-details">
                           <p class="note-title">New Order <span>#303030</span></p>
                            <img class="note-side" src="assets/img/icon/Group 28.svg') }}" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="note-tab">
                <div class="row">
                    <div class="col-sm-1">
                        <img src="{{ asset('assets/img/icon/Ellipse 1.svg') }}" alt="">
                    </div>
                    <div class="col-sm">
                        <div class="note-details">
                           <p class="note-title">New Order <span>#303030</span></p>
                            <img class="note-side" src="{{ asset('assets/img/icon/Group 28.svg') }}" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="note-tab">
                <div class="row">
                    <div class="col-sm-1">
                        <img src="{{ asset('assets/img/icon/Ellipse 1.svg') }}" alt="">
                    </div>
                    <div class="col-sm">
                        <div class="note-details">
                           <p class="note-title">New Order <span>#303030</span></p>
                            <img class="note-side" src="{{ asset('assets/img/icon/Group 28.svg') }}" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection