@extends('Agent.Layout.App')
@section('title', 'Payments')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<style>
.select2-container--default .select2-selection--single{
  height: 45px !important;
  border: 1px solid #70707030;
}


</style>

<!-- Page Body Start -->
<main class="pb-3" >
    <!-- Page Title and Breadcrumb Start -->
    <div class="page-title-breadcrumb my-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col" >
                    <div class="page-title" >
                        Finance Summary
                    </div>
                </div>
                <div class="col-auto">
                    <div class="breadcrumb-box">
                        <ul>
                            <li>Finance</li>
                            <li>Milestone</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title and Breadcrumb End -->

    <section class="profile-content">
        <div class="container-fluid dashboard">
            <div class="row mb-4 dashboard-header">
                <div class="col-lg">
                    <div class="card-box p-3">
                        <div class="row ">
                            <div class="col">
                                <div class="number-title">
                                    <h2>$34,152</h2>
                                    <p class="mb-0">Commission</p>
                                </div>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <img src="./assets/images/Outline.svg"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card-box p-3">
                        <div class="row ">
                            <div class="col">
                                <div class="number-title">
                                    <h2>$34,152</h2>
                                    <p class="mb-0">Wallet</p>
                                </div>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <img src="./assets/images/wallet.svg"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card-box p-3">
                        <div class="row ">
                            <div class="col">
                                <div class="number-title">
                                    <h2>34,152</h2>
                                    <p class="mb-0">Invoices</p>
                                </div>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <img src="./assets/images/invoices.svg"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card-box p-3">
                        <div class="row ">
                            <div class="col">
                                <div class="number-title">
                                    <h2>34,152</h2>
                                    <p class="mb-0">Milestones</p>
                                </div>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <img src="./assets/images/hand.svg"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card-box p-3">
                        <div class="row ">
                            <div class="col">
                                <div class="number-title">
                                    <h2>$34,152</h2>
                                    <p class="mb-0">Total Amount</p>
                                </div>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <img src="./assets/images/finance-money.svg"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="app" >
        <div class="admin-table" >
            <div class="container-fluid" >
                <div class="row admin-table-header">
                    <div class="col-auto admin-table-header-box">
                        <div class="row m-0">
                            <div class="top-heading mb-1">
                                <h2>Milestone</h2>
                                <img src="assets/images/question-circle.svg" class="ml-2">
                            </div>
                        </div>
                        <div class="row m-0">
                            <ul class="admin-table-info">
                                <li >Record (s)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col admin-table-filter-box">
                        <div class="admin-table-filter d-flex justify-content-end align-items-center">
                            <button class="admin-table-btn admin-table-btn-add mr-3" data-toggle="modal" data-target="#add-payment"><img class="mr-2"
                                                                                                                                         src="./assets/images/table-add.svg">Add</button>
                            <button class="admin-table-btn mr-3" id="filter"><img class="mr-2"
                                                                                  src="./assets/images/table-filter.svg">Filter</button>


                            <div class="table-search">
                                <img src="./assets/images/table-search.svg">
                                <input type="text" placeholder="Search …">
                            </div>
                        </div>
                    </div>
                </div>
                <section class="profile-content mt-3">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="card-box p-3">
                                <div class="tab-h-box">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="milestone-tab" data-toggle="tab" href="#milestone"
                                               role="tab" aria-controls="milestone" aria-selected="true">Milestone</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="wallet-tab" data-toggle="tab" href="#wallet"
                                               role="tab" aria-controls="wallet" aria-selected="false">Wallet</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " id="invoices-tab" data-toggle="tab" href="#invoices"
                                               role="tab" aria-controls="invoices" aria-selected="false">Invoices</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " id="commission-tab" data-toggle="tab" href="#commission"
                                               role="tab" aria-controls="commission" aria-selected="false">Commission</a>
                                        </li>

                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="milestone" role="tabpanel"
                                             aria-labelledby="finance-tab">
                                            <!-- Table Section Start -->
                                            <div class="admin-table finance-table">
                                                <div class="row admin-table-body mt-3">
                                                    <div class="col">

                                                        <div class="table-responsive">
                                                            <table class="table table-sm" id="example">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">Payment ID</th>
                                                                    <th scope="col">Client email</th>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Due Date</th>
                                                                    <th scope="col">Amount</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($milestones as $milestone)
                                                                    <tr>
                                                                        <td>{{$milestone->id}}</td>
                                                                        <td>{{$milestone->payment->account->email}}</td>
                                                                        <td class="red-color">
                                                                            {{$milestone->status}}
                                                                        </td>
                                                                        <td>{{\Carbon\Carbon::parse( $milestone->due_date)->toRfc7231String()}} </td>
                                                                        <td>{{($milestone->amount)}}</td>
{{--                                                                        <td>--}}
{{--                                                                            <div class="table-action-btn">--}}

{{--                                                                                <a href="#" class="ml-3">--}}
{{--                                                                                    <img src="./assets/images/table-edit-btn.svg"/>--}}
{{--                                                                                </a>--}}
{{--                                                                                <a href="#" class="ml-3">--}}
{{--                                                                                    <img src="./assets/images/table-delete-btn.svg"/>--}}
{{--                                                                                </a>--}}
{{--                                                                            </div>--}}
{{--                                                                        </td>--}}
                                                                    </tr>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Table Section End -->
                                        </div>
                                        <div class="tab-pane fade" id="wallet" role="tabpanel"
                                             aria-labelledby="finance-tab">
                                            <!-- Table Section Start -->
                                            <div class="admin-table finance-table">
                                                <div class="row admin-table-body mt-3">
                                                    <div class="col">
                                                        <div class="table-responsive">
                                                            <table class="table table-sm" id="example2">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">Payment ID</th>
                                                                    <th scope="col">Client email</th>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Due Date</th>
                                                                    <th scope="col">Amount</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($milestones->where('status','done') as $milestone)
                                                                    <tr>
                                                                        <td>{{$milestone->id}}</td>
                                                                        <td>{{$milestone->payment->account->email}}</td>
                                                                        <td class="red-color">
                                                                            {{$milestone->status}}
                                                                        </td>
                                                                        <td>{{\Carbon\Carbon::parse( $milestone->due_date)->toRfc7231String()}} </td>
                                                                        <td>{{$milestone->amount}}</td>

                                                                    </tr>
                                                                @endforeach

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Table Section End -->
                                        </div>
                                        <div class="tab-pane fade" id="invoices" role="tabpanel"
                                             aria-labelledby="finance-tab">
                                            <!-- Table Section Start -->
                                            <div class="admin-table finance-table">
                                                <div class="row admin-table-body mt-3">
                                                    <div class="col">
                                                        <div class="table-responsive">
                                                            <table class="table table-sm" id="example3">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">Payment ID</th>
                                                                    <th scope="col">Client name</th>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Due Date</th>
                                                                    <th scope="col">Amount</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($payments as $payment)
                                                                    <tr>
                                                                        <td>{{$payment->id}}</td>
                                                                        <td>{{$payment->account->email}}</td>
                                                                        <td class="red-color">
                                                                            {{$payment->status}}
                                                                        </td>
                                                                        <td>{{\Carbon\Carbon::parse( $payment->due_date)->toRfc7231String()}} </td>
                                                                        <td>{{$payment->amount}}</td>
                                                                        <td>
                                                                            <div class="table-action-btn">

                                                                                <a href="/invoice/{{$payment->id}}" class="ml-3">
                                                                                    <img src="./assets/images/table-edit-btn.svg"/>
                                                                                </a>
                                                                                <a href="#" class="ml-3">
                                                                                    <img src="./assets/images/table-delete-btn.svg"/>
                                                                                </a>
                                                                            </div>
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
                                        <div class="tab-pane fade" id="commission" role="tabpanel"
                                             aria-labelledby="finance-tab">
                                            <!-- Table Section Start -->
                                            <div class="admin-table finance-table">
                                                <div class="row admin-table-body mt-3">
                                                    <div class="col">
                                                        <div class="table-responsive">
                                                            <table class="table table-sm" id="example4">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">Payment ID</th>
                                                                    <th scope="col">Client ID</th>
                                                                    <th scope="col">Client name</th>
                                                                    <th scope="col">Milestone</th>
                                                                    <th scope="col">Amount</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($commissions as $commission)
                                                                    <tr>
                                                                        <td>{{$commission->id}}</td>
                                                                        <td>{{$commission->milestone->payment->account->id}}</td>
                                                                        <td>{{$commission->milestone->payment->account->email}}</td>

                                                                        <td>{{$commission->amount}}</td>

                                                                    </tr>
                                                                @endforeach

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Modal Start -->
                                        <div class="modal fade" id="add-payment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <!-- Form box Start -->
                                                        <div class="setting-box">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="nav admin-table-form-top-btn" id="v-pills-tab" role="tablist">
                                                                            <a class="nav-link">
                                                                                Add Milestone
                                                                            </a>
                                                                        </div>
                                                                        <form method="post" action="/payments/add" />
                                                                        @csrf
                                                                        <div class="card-box mb-2 px-2 py-3">
                                                                        <span class="setting-form-box">
                                                                            <div class="row px-2">
                                                                                <div class="col px-2">
                                                                                    <div class="row mx-0">
                                                                                        <div class="col-lg-3 px-2">
                                                                                            <div class="form-field">
                                                                                                <div class="form-field__control form-field--is-active">
                                                                                                    <label for="milestone-1" class="form-field__label">Program Type</label>
                                                                                                    <select id="milestone-1" v-model="choice" name="type" class="form-field__input">
                                                                                                        <option value="fixed">Fixed Price</option>
                                                                                                        <option value="hourly">Hourly</option>
                                                                                                        <option value="items">Items</option>
                                                                                                    </select>
                                                                                                    <div class="form-dropdown-icon">
                                                                                                        <img src="./assets/images/form-drop-down.svg" />
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <span v-if="choice == 'hourly'" class="col-lg-6 row">
                                                                                        <div class="col-lg-6 px-2" >
                                                                                            <div class="form-field">
                                                                                                <div class="form-field__control form-field--is-active">
                                                                                                    <label for="milestone-2" class="form-field__label">Hour Price</label>
                                                                                                    <input id="milestone-2" v-model="h_price"  v-on:keyup="calculate()" name="h_price" type="number" class="form-field__input"
                                                                                                           placeholder="Hour Price" required/>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6 px-2" >
                                                                                            <div class="form-field">
                                                                                                <div class="form-field__control form-field--is-active">
                                                                                                    <label for="milestone-3" class="form-field__label">No. of Hours</label>
                                                                                                    <input id="milestone-3" v-model="n_hours"  v-on:keyup="calculate()" name="n_hours" type="number" class="form-field__input"
                                                                                                           placeholder="No. of Hours" required/>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        </span>
                                                                                        <span v-if="choice == 'fixed'" class="col-lg-6 row">
                                                                                        <div class="col-lg-12 px-2" >
                                                                                            <div class="form-field">
                                                                                                <div class="form-field__control form-field--is-active">
                                                                                                    <label for="milestone-2" class="form-field__label"> Price</label>
                                                                                                    <input id="milestone-2" v-model="f_price"  v-on:keyup="calculate()" name="f_price" type="number" class="form-field__input"
                                                                                                           placeholder="Price" required/>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        </span>
                                                                                        <span v-if="choice == 'items'" class="col-lg-6 row">
                                                                                        <div class="col-lg-6 px-2" >
                                                                                            <div class="form-field">
                                                                                                <div class="form-field__control form-field--is-active">
                                                                                                    <label for="milestone-2" class="form-field__label">Item Price</label>
                                                                                                    <input id="milestone-2" v-model="i_price"  v-on:keyup="calculate()" name="i_price" type="number" class="form-field__input"
                                                                                                           placeholder="Item Price" required/>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6 px-2" >
                                                                                            <div class="form-field">
                                                                                                <div class="form-field__control form-field--is-active">
                                                                                                    <label for="milestone-3" class="form-field__label">No. of Items</label>
                                                                                                    <input id="milestone-3" v-model="n_items"  v-on:keyup="calculate()" type="number" name="n_items" class="form-field__input"
                                                                                                           placeholder="No. of Items" required />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        </span>
                                                                                        <div class="col-lg-3 px-2">
                                                                                            <div class="form-field">

                                                                                                <div class="form-field__control form-field--is-active">
                                                                                                    <label for="milestone-4" class="form-field__label">Select Milestone Type</label>
                                                                                                    <select id="milestone-4" name="designed_milestone" @change="onChange()" class="form-field__input" v-model="designed_milestone" name="designed_milesone">
                                                                                                        <option value="cash">cash</option>
                                                                                                    @foreach($designed_milestones as $milestone)
                                                                                                            <option value="{{$milestone->id}}">{{$milestone->name}}</option>
                                                                                                        @endforeach
                                                                                                    </select>
                                                                                                    <div class="form-dropdown-icon">
                                                                                                        <img src="./assets/images/form-drop-down.svg" />
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                                                                                                                <div class="col-lg-3 px-2">
                                                                                            <div class="form-field">

                                                                                                <div class="form-field__control form-field--is-active">

                                                                                         <select id="contact-7" name="account_id" class="form-field__input" required>
                                                            <option  value="" >Select Account Name</option>

                                                                                            @foreach($accounts as $account)

                                                                                                 <option value="{{$account->id}}" >{{$account->first_name}} {{$account->last_name}}</option>

                                                                                             @endforeach



                                                                                        </select>
                                                                                                       <div class="form-dropdown-icon">
                                                                                                        <img src="./assets/images/form-drop-down.svg" />
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row m-0" >
                                                                                <div class="col px-2">
                                                                                    <!-- Table Section Start -->
                                                                                    <div class="admin-table add-milestone-table">
                                                                                        <div class="row admin-table-body">
                                                                                            <div class="col">
                                                                                                <div class="table-responsive table-checkbox">
                                                                                                                                                                                <span v-show="designed_milestone != 'cash'">

                                                                                                    <table class="table table-sm">
                                                                                                        <thead>
                                                                                                        <tr>
                                                                                                            <th scope="col">

                                                                                                            </th>
                                                                                                            <th scope="col">Payment %</th>
                                                                                                            <th scope="col">Payment Amount</th>
                                                                                                            <th scope="col">Payment Due Date</th>
                                                                                                        </tr>
                                                                                                        </thead>
                                                                                                        <tbody class="height-300">
                                                                                                        <tr v-for="(index,milestone) in selected_data.milestones ">
                                                                                                            <td>
                                                                                                                <div class="select pt-2">
                                                                                                                    <input type="checkbox">
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div class="form-field pt-2 pb-2 pr-3 m-0">
                                                                                                                    <div class="form-field__control form-field--is-active">
                                                                                                                        <label for="payment-@{{milestone.id }}" class="form-field__label">Payment</label>
                                                                                                                        <input id="paymenet-@{{milestone.id }}" value="@{{ milestone.percent }} %"  type="text" class="form-field__input"
                                                                                                                               placeholder="Payment" disabled />
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div class="form-field pt-2 pb-2 pr-3 m-0">
                                                                                                                    <div class="form-field__control form-field--is-active">
                                                                                                                        <label for="amount-@{{milestone.id }}" class="form-field__label">Payment Amount</label>
                                                                                                                        <input id="amount-@{{milestone.id }}" value="@{{ milestone.percent/100 *total }} " name="amount@{{ index }}" type="text" class="form-field__input"
                                                                                                                               placeholder="Payment Amount" readonly />
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </td>


                                                                                                            <td>
                                                                                                                <div class="form-field pt-2 pb-2 m-0">
                                                                                                                    <div class="form-field__control form-field--is-active">
                                                                                                                        <label for="date@{{milestone.id }}" class="form-field__label">Payment Due Date</label>
                                                                                                                        <input id="date@{{milestone.id }}"  name="date@{{ index }}" type="date" class="form-field__input"
                                                                                                                                required/>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </td>
                                                                                                        </tr>


                                                                                                        </tbody>
                                                                                                         </span>

                                                                                                        <tfoot>
                                                                                                        <tr>
                                                                                                            <td>

                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div class="d-flex d-flex justify-content-start align-items-center">
                                                                                                                    <div class="form-field pt-2 pb-2 pr-3 m-0 w-50">
                                                                                                                        <div class="form-field__control form-field--is-active">
                                                                                                                            <label for="milestone-table-Total " class="form-field__label">Total %</label>
                                                                                                                            <input id="milestone-table-Total " type="text" name="total" value="@{{ total }}" class="form-field__input"
                                                                                                                                   placeholder="Payment" />
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    Total %
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>

                                                                                                            </td>
                                                                                                            <td>

                                                                                                            </td>
                                                                                                            <td>

                                                                                                            </td>
                                                                                                            <td>

                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        </tfoot>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Table Section End -->
                                                                            </div>
                                                                            <div class="row mx-0">
                                                                            <div class="col-lg d-flex justify-content-end align-items-end px-2">
                                                                                <button type="submit" class="btn-admin-primary ml-3"><img src="./assets/images/table-add.svg" class="mr-2" /> Add Payment</button>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                    </form>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Modal End -->
    <!-- Table Section End -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="/assets/js/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap js -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>
    <!-- Custom js For form -->
    <script src="/assets/js/form.js"></script>

    <script>


        tab = ()=>{

            $("#example").dataTable().fnDestroy()
            setTimeout(()=>{
                $('#myInputTextField').on('keyup change',()=>{
                    console.log($('#myInputTextField').val())
                    table.search(''+$('#myInputTextField').val()).draw() ;
                })


                var table = $('#example').DataTable( {
                    orderCellsTop: true,
                    fixedHeader: false,
                    searching:true
                } );
                $('#example thead tr').clone(true).appendTo( '#example thead' );
                $('#example thead tr:eq(1) th').each( function (i) {
                    if(i != 0){
                        var title = $(this).text();
                        $(this).html( '<input type="text"  class="form-control filter" placeholder="Search '+title+'" />' );

                        $( 'input', this ).on( 'keyup change', function () {
                            if ( table.column(i).search() !== this.value ) {
                                table
                                    .column(i)
                                    .search( this.value )
                                    .draw();
                            }
                        } );
                    }
                    else{
                        $(this).html( '');
                    }
                } );
                $("#example tr").eq(1).hide();

            },1000);

        }



    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js"></script>


    <script>
        const app = new Vue({
            el: '#app',

            data() {
                return {
                    designed_milestones:{!!json_encode($designed_milestones)!!},
                    choice:'fixed' ,
                    designed_milestone:'cash',
                    selected_data:{},
                    f_price:0,
                    i_price:0,
                    n_items:0,
                    h_price:0,
                    n_hours:0,
                    total:0
                }
            },

            created() {
                // console.log(JSON.stringify(this.leads[0]))
                // window.alert = function() {};

                $(document).ready(function () {

                    $('.points').on('focus', function () {
                        // Store the current value on focus and on change
                        previous = $('option:selected', this).attr('points');
                    }).change(function () {
                        // app.points =app.points+ 1;
                        app.points -= parseInt(previous);

                        var points = $('option:selected', this).attr('points');
                        previous = points;

                        $(this).attr('previous', points);
                        app.points += parseInt(points);

                    })
                })

            },

            methods: {
                onChange(){
                    this.selected_data = this.designed_milestones.find(obj=>obj.id == this.designed_milestone)
                    console.log(this.selected_data)
                },
                calculate(){
                    if(this.choice == 'fixed'){
                        this.total = this.f_price;
                    }
                    else if(this.choice == 'items'){
                        this.total = this.i_price * this.n_items;
                    }
                    else if(this.choice == 'hourly'){
                        this.total = this.h_price * this.n_hours;
                    }
                },

                addMessage() {
                    this.points++;
                },

                sendMessage() {
                    this.addMessage(this.newMessage);
                    this.newMessage = '';
                }
            }
        });
    </script>

    <!-- Table Section Start -->

                                        <!-- Table Section End -->

                                    <div class="tab-pane fade" id="client-portal" role="tabpanel"
                                        aria-labelledby="finance-tab">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Table Section End -->
</main>

@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script type="application/javascript">

$(document).ready(function() {



// Setup - add a text input to each footer cell
var table = $('#example').DataTable( {
    orderCellsTop: true,
    fixedHeader: false,
    searching:true
} );
$('#example thead tr').clone(true).appendTo( '#example thead' );
$('#example thead tr:eq(1) th').each( function (i) {
    if(i != 0){
    var title = $(this).text();
    if(title == 'Action'){
      $(this).html( '');
    }else {
      $(this).html( '<input type="text"  class="form-control filter" placeholder="Search '+title+'" />' );
    }
    $( 'input', this ).on( 'keyup change', function () {
        if ( table.column(i).search() !== this.value ) {
            table
                .column(i)
                .search( this.value )
                .draw();
        }
    } );
  }
  else{
    $(this).html( '');
  }
} );
$('#myInputTextField').on('keyup change',()=>{
  console.log($('#myInputTextField').val())
      table.search(''+$('#myInputTextField').val()).draw() ;
})
$("#example tr").eq(1).hide(); // hidden search input

$("#filter").click(()=>{
$("#example tr").eq(1).toggle(
  function () {
    $("#example tr").eq(1).css({display: "none !important"});
}, function () {

    $("#example tr").eq(1).css({display: "block !important"});
});
})



// Setup - add a text input to each footer cell
var table2 = $('#example2').DataTable( {
    orderCellsTop: true,
    fixedHeader: false,
    searching:true
} );
$('#example2 thead tr').clone(true).appendTo( '#example2 thead' );
$('#example2 thead tr:eq(1) th').each( function (i) {
    if(i != 0){
    var title = $(this).text();
    if(title == 'Action'){
      $(this).html('');
    }else {
      $(this).html( '<input type="text"  class="form-control filter" placeholder="Search '+title+'" />' );
    }
    $( 'input', this ).on( 'keyup change', function () {
        if ( table2.column(i).search() !== this.value ) {
            table2
                .column(i)
                .search( this.value )
                .draw();
        }
    } );
  }
  else{
    $(this).html( '');
  }
} );
$('#myInputTextField').on('keyup change',()=>{
  console.log($('#myInputTextField').val())
      table2.search(''+$('#myInputTextField').val()).draw() ;
})
$("#example2 tr").eq(1).hide(); // hidden search input

$("#filter").click(()=>{
$("#example2 tr").eq(1).toggle(
  function () {
    $("#example2 tr").eq(1).css({display: "none !important"});
}, function () {

    $("#example2 tr").eq(1).css({display: "block !important"});
});
})

// Setup - add a text input to each footer cell
var table3 = $('#example3').DataTable( {
    orderCellsTop: true,
    fixedHeader: false,
    searching:true
} );
$('#example3 thead tr').clone(true).appendTo( '#example3 thead' );
$('#example3 thead tr:eq(1) th').each( function (i) {
    if(i != 0){
    var title = $(this).text();
    if(title == 'Action'){
      $(this).html( '');
    }else {
      $(this).html( '<input type="text"  class="form-control filter" placeholder="Search '+title+'" />' );
    }
    $( 'input', this ).on( 'keyup change', function () {
        if ( table3.column(i).search() !== this.value ) {
            table3
                .column(i)
                .search( this.value )
                .draw();
        }
    } );
  }
  else{
    $(this).html( '');
  }
} );
$('#myInputTextField').on('keyup change',()=>{
  console.log($('#myInputTextField').val())
      table3.search(''+$('#myInputTextField').val()).draw() ;
})
$("#example3 tr").eq(1).hide(); // hidden search input

$("#filter").click(()=>{
$("#example3 tr").eq(1).toggle(
  function () {
    $("#example3 tr").eq(1).css({display: "none !important"});
}, function () {

    $("#example3 tr").eq(1).css({display: "block !important"});
});
})

// Setup - add a text input to each footer cell
var table4 = $('#example4').DataTable( {
    orderCellsTop: true,
    fixedHeader: false,
    searching:true
} );
$('#example4 thead tr').clone(true).appendTo( '#example4 thead' );
$('#example4 thead tr:eq(1) th').each( function (i) {
    if(i != 0){
    var title = $(this).text();
    if(title == 'Action'){
      $(this).html( '');
    }else {
      $(this).html( '<input type="text"  class="form-control filter" placeholder="Search '+title+'" />' );
    }

    $( 'input', this ).on( 'keyup change', function () {
        if ( table3.column(i).search() !== this.value ) {
            table4
                .column(i)
                .search( this.value )
                .draw();
        }
    } );
  }
  else{
    $(this).html( '');
  }
} );
$('#myInputTextField').on('keyup change',()=>{
  console.log($('#myInputTextField').val())
      table4.search(''+$('#myInputTextField').val()).draw() ;
})
$("#example4 tr").eq(1).hide(); // hidden search input

$("#filter").click(()=>{
$("#example4 tr").eq(1).toggle(
  function () {
    $("#example4 tr").eq(1).css({display: "none !important"});
}, function () {

    $("#example4 tr").eq(1).css({display: "block !important"});
});
})

} );







</script>

@endpush
