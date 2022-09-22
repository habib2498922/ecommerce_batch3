@extends('website.master')

@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">
                            My DashBoard
                        </h1>
                    </div>
                </div>
                <div class="col-md-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href=""><i class="lni lni-home"></i>Home</a> </li>
                        <li><a href="">DashBoard</a> </li>
                        <li>My DashBoard</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{route('customer-dashboard')}}">My Dashboard</a> </li>
                            <li class="list-group-item"><a href="{{route('customer-profile')}}">My Profile</a> </li>
                            <li class="list-group-item"><a href="{{route('customer-account')}}">My Account</a> </li>
                            <li class="list-group-item"><a href="">Change password</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">Recent Order</div>
                        <div class="card-body">
                            <h1>Customer Profile..</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

