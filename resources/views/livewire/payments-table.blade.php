<div>
  <div class="admin-table">
      <div class="container-fluid">
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
                          <li wire:click="add_payment" onclick="tab()">Record (s)</li>
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
                                                                  <th scope="col">Action</th>
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
                                                                  <td>{{($milestone->percent / 100)*($milestone->payment->amount)}}</td>
                                                                  <td>
                                                                      <div class="table-action-btn">

                                                                          <a href="#" class="ml-3">
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
                                                                  <td>{{($milestone->percent / 100)*($milestone->payment->amount)}}</td>

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
                                                                      {{$milestone->status}}
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
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="setting-box">
                                                        <div class="card-box px-2 py-3">
                                                            <div class="row setting-title-box px-2 mb-3">
                                                                <div class="col">
                                                                    <p class="p-0">Add Payment</p>
                                                                </div>
                                                            </div>
                                                            <div class="setting-form-box">
                                                                <div class="row px-2">
                                                                    <div class="col px-2">
                                                                        <div class="row mx-0">
                                                                            <div class="col-lg px-2">
                                                                                <div class="form-field">
                                                                                    <div class="form-field__control">
                                                                                        <label for="payment-1" class="form-field__label">Client</label>
                                                                                        <input id="payment-1" type="text" class="form-field__input"
                                                                                            placeholder="Milestone" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg px-2">
                                                                                <div class="form-field">
                                                                                    <div class="form-field__control">
                                                                                        <label for="payment-2" class="form-field__label">Due Date</label>
                                                                                        <input id="payment-2" type="text" class="form-field__input"
                                                                                            placeholder="DD/MM/YYYY" />
                                                                                        <div class="form-dropdown-icon">
                                                                                            <img src="./assets/images/form-calendar.svg" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg px-2">
                                                                                <div class="form-field">
                                                                                    <div class="form-field__control">
                                                                                        <label for="task-4" class="form-field__label">Amount</label>
                                                                                        <input id="task-4" type="text" class="form-field__input"
                                                                                            placeholder="Amount" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mx-0">
                                                                            <div class="col-lg d-flex justify-content-end align-items-end px-2">
                                                                                <a href="#" class="btn-admin-primary ml-3"><img src="./assets/images/table-add.svg" class="mr-2"/> Add Payment</a>
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
