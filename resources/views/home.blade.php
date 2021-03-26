@extends('layouts.app')
@section('title', 'Home')

@section('content')
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
@endsection
