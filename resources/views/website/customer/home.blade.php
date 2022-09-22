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
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Order No</th>
                                    <th>Order Total</th>
                                    <th>Order Date</th>
                                    <th>Order Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->order_total}}</td>
                                    <td>{{$order->order_date}}</td>
                                    <td>{{$order->order_status}}</td>
                                    <td>
                                        <a href=""><i class="fa fa-edit"></i></a>
                                        <a href=""><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
