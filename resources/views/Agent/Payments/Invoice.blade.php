@extends('Agent.Layout.App')
@section('title', 'Payments')

@section('content')

<!-- Page Body Start -->
<main class="pb-3">
    <!-- Page Title and Breadcrumb Start -->
    <div class="page-title-breadcrumb my-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-title">
                        Invoice
                    </div>
                </div>
                <div class="col-auto">
                    <div class="breadcrumb-box">
                        <ul>
                            <li>Dashboard</li>
                            <li>Leads</li>
                            <li>Finance</li>
                            <li>Invoice</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title and Breadcrumb End -->

    <!-- Invoice Section Start -->
    <div class="container-fluid">
        <div class="card-box invoice-box">
            <div class="invoice-header-box p-2">
                <div class="row align-items-center">
                    <div class="col d-flex align-items-center">
                        <h4 class="mr-5">Invoice</h4><h5>IN-9177283-2016</h5>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="btn-admin-default"><img src="/assets/images/invoice-edit.svg" class="mr-2"/>Edit</a>
                        <a href="#" class="btn-admin-danger ml-3"><img src="/assets/images/invoice-save.svg" class="mr-2"/>Save</a>
                    </div>
                </div>
            </div>
            <div class="invoice-body-box px-2 py-3">
                <div class="invoice-body-header">
                    <div class="row">
                        <div class="col text-left">
                            <h2>IN-9177283-2016</h2>
                            <p>Homer, Inc.<br>
                                30 Mortensen Avenue<br>
                                Salinas, CA 93905<br>
                                P: (831) 758-7200</p>
                        </div>
                        <div class="col text-right">
                            <p>To:<br>
                                Corporate, Inc.<br>
                                60 Mortensen Avenue<br>
                                Salinas, CA 123343<br>
                                P: (831) 752-7000</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-right">
                            <p>Invoice Date: May 16, 2016</p>
                            <p>Due Date: May 24, 2016</p>
                        </div>
                    </div>
                </div>
                <div class="invoice-body-table mt-3">
                    <div class="container-fluid">
                        <div class="row title">
                            <div class="col-lg-8 d-flex align-items-end">Item List</div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col d-flex align-items-end">Quantity</div>
                                    <div class="col d-flex align-items-end">Unit Price</div>
                                    <div class="col d-flex align-items-end">Tax</div>
                                    <div class="col d-flex align-items-end">Total Price</div>
                                </div>
                            </div>
                        </div>
                        <div class="row body">
                            <div class="col-lg-8 left">
                                <h4>Lorem Ipsum is that it has a more-or-less normal</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            </div>
                            <div class="col-lg-4 right">
                                <div class="row">
                                    <div class="col">1</div>
                                    <div class="col">$26.00</div>
                                    <div class="col">$5.98</div>
                                    <div class="col">$31,98</div>
                                </div>
                            </div>
                        </div>
                        <div class="row body">
                            <div class="col-lg-8 left">
                                <h4>Lorem Ipsum is that it has</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="col-lg-4 right">
                                <div class="row">
                                    <div class="col">2</div>
                                    <div class="col">$26.00</div>
                                    <div class="col">$5.98</div>
                                    <div class="col">$31,98</div>
                                </div>
                            </div>
                        </div>




                        <div class="row title">
                            <div class="col-lg-8 d-flex align-items-end">Milestones List</div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col d-flex align-items-end">Tax</div>
                                    <div class="col d-flex align-items-end">Total Price</div>
                                </div>
                            </div>
                        </div>
                        <div class="row body">
                            <div class="col-lg-8 left">
                                <h4>Lorem Ipsum is that it has a more-or-less normal</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            </div>
                            <div class="col-lg-4 right">
                                <div class="row">
                                    <div class="col">$5.98</div>
                                    <div class="col">$31,98</div>
                                </div>
                            </div>
                        </div>
                        <div class="row body">
                            <div class="col-lg-8 left">
                                <h4>Lorem Ipsum is that it has</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="col-lg-4 right">
                                <div class="row">
                                    <div class="col">$5.98</div>
                                    <div class="col">$31,98</div>
                                </div>
                            </div>
                        </div>



                        <div class="row footer">
                            <div class="col-lg-8 left d-flex align-items-end">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                            <div class="col-lg-4 right">
                                <div class="row total">
                                    <div class="col text-left text">Sub Total :</div>
                                    <div class="col text-right amount">$1026.00</div>
                                </div>
                                <div class="row total">
                                    <div class="col text-left text">TAX :</div>
                                    <div class="col text-right amount">$235.98</div>
                                </div>
                                <div class="row total">
                                    <div class="col text-left text">TOTAL :</div>
                                    <div class="col text-right amount">$1261.98</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Invoice Section End -->
</main>
<!-- Page Body End -->


@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
@endpush
