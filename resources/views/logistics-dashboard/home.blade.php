@extends('layouts.logistics-header')

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
                                <p class="dash-sub">Total Requests</p>
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
                                <p class="dash-title">{{ $totalAvailableRequests }}</p>
                                <p class="dash-sub">Avail. Requests</p>
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
                <div class="note-details">
                    <p class="note-title">You have <span>{{ $totalPendingOrders }}</span> new orders,<br class="break" style="display: none;" /> <a style="text-decoration: underline !important ;" href="{{ url('/logistics/orders') }}">see here</a></p>
                </div>
            </div>
        </div>
    </section>

    @endsection