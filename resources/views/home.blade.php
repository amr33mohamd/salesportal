@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <!--
<div class="container">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
            </div>
@endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (auth()->user()->subscribed('default'))
        You can access the dashboard from here <a target="_blank" href="{{route('leads')}}">Dashboard</a>
                    @else
        You need  to subscribe to a plan to access the dashboard
@endif
        </div>
    </div>
</div>
</div>

<div class="card-deck mb-3 text-center" style="margin-top: 20px">
@foreach($plans as $plan)
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">{{$plan->name}}
        @if (auth()->user()->subscribedToPlan($plan->id, 'default'))
            <span class="badge badge-pill badge-success">Current</span>
@endif
            </h4>
            <h6>{{$plan->description}}</h6>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">${{$plan->price}} <small class="text-muted">/ mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    @foreach($plan->features as $feature)
            <li>{{$feature}}</li>
                    @endforeach
            </ul>
@unless (auth()->user()->subscribedToPlan($plan->id, 'default'))
            <a href="{{route('subscribe', $plan->id)}}">
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Subscribe</button>
                    </a>
                @endif
            </div>
        </div>
        @endforeach
        </div>
    </div>
-->
    <div class="auth-page">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center align-items-center">
                @foreach($plans as $plan)

                    <div class="col-xl-4">
                        <div class="card-box @if($plan->name == 'Premium Plan') active @endif subscription-box p-0">
                            <div class="subscription-header  p-4 pt-5 text-center">
                                <h2>{{$plan->name}}</h2>
                                <div class="price py-4 d-flex justify-content-center align-items-end">
                                    <h4>AED</h4>
                                    <h3>135</h3>
                                </div>
                                <p class="pt-4">{{$plan->description}}</p>
                                <hr class="mb-0 mt-3">
                            </div>

                            <div class="subscription-body px-4 pb-4">
                                @foreach($plan->features as $feature)

                                    <div class="list pb-3 d-flex justify-content-center align-items-start">
                                        <div class="icon">
                                            <img src="/assets/images/correct.svg"/>
                                        </div>
                                        <div class="text">
                                            {{$feature}}
                                        </div>
                                        <div class="info">
                                            <img src="/assets/images/info.svg"/>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                            @if (!auth()->user()->subscribedToPlan($plan->id, 'default'))
                                <a href="{{route('subscribe', $plan->id)}}">
                                    <div class="subscription-footer">
                                        <button>Try Now</button>
                                    </div>
                                </a>
                            @else
                                <div class="text-center">

                                    <p> You can access the dashboard from here <a target="_blank" href="{{route('leads')}}">Dashboard</a>
                                    </p>
                                </div>
                            @endif

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
