@extends('layouts.app')
@section('title', 'Payment Methods')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" id="stripeForm">
                    <div class="card-header">
                        Payment Methods
                        <a href="{{route('payment_methods.create')}}">
                            <button type="button" class="btn btn-sm btn-success float-right">Add Payment Method</button>
                        </a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Type</th>
                                <th scope="col">Number</th>
                                <th scope="col">Is Default</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($payment_methods as $method)
                                <tr>
                                    <th scope="row">{{$loop->index + 1}}</th>
                                    <td>{{$method->type}}</td>
                                    <td>**** **** **** {{$method->card->last4}}</td>
                                    <td>
                                        @if($default_method && $method->id == $default_method->asStripePaymentMethod()->id)
                                            <i class="fa fa-check" style="color: green"></i>
                                        @else
                                            <form id="update-form-{{$method->id}}" action="{{route('payment_methods.update', $method->id)}}" method="POST" style="display: none;">
                                                @method('put')
                                                @csrf
                                            </form>
                                            <a href="{{route('payment_methods.update', $method->id)}}"
                                               onclick="event.preventDefault();
                                                   document.getElementById('update-form-{{$method->id}}').submit();">
                                                <button type="button" class="btn btn-sm btn-primary">Set As Default</button>
                                            </a>
                                        @endif
                                    </td>
                                    <td>
{{--                                        <a href="{{route('payment_methods.edit', 3)}}">--}}
{{--                                            <button type="button" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></button>--}}
{{--                                        </a>--}}
                                        <form id="delete-form-{{$method->id}}" action="{{route('payment_methods.destroy', $method->id)}}" method="POST" style="display: none;">
                                            @method('delete')
                                            @csrf
                                        </form>
                                        <a href="{{route('payment_methods.destroy', $method->id)}}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('delete-form-{{$method->id}}').submit();">
                                            <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" style="text-align: center">Please add a payment method first.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
