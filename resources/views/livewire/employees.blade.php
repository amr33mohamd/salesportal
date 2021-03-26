<div>
  <!-- Modal Start -->
  <div class="modal fade" id="add-employee"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-body">
                  <div class="setting-box">
                      <div class="card-box px-2 py-3">
                          <div class="row setting-title-box px-2 mb-3">
                              <div class="col">
                                  <p class="p-0">Add Employee</p>
                              </div>
                          </div>
                          <div class="setting-form-box">
                              <div class="row px-2">
                                <form id="form" wire:submit.prevent="add(Object.fromEntries(new FormData($event.target)))"  >
                                  @csrf
                                  <div class="col px-2">
                                      <div class="row mx-0">
                                          <div class="col-lg px-2">
                                              <div class="form-field">
                                                  <div class="form-field__control">
                                                      <label for="call-1" class="form-field__label"> Name</label>
                                                      <input id="call-1" name="username" type="text" class="form-field__input"
                                                          placeholder=" Name" required/>

                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg px-2">
                                              <div class="form-field">
                                                  <div class="form-field__control">
                                                      <label for="call-2" class="form-field__label">email</label>
                                                      <input id="call-2" type="email" name="email" class="form-field__input"
                                                          placeholder="email" required/>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg px-2">
                                              <div class="form-field">
                                                  <div class="form-field__control">
                                                      <label for="call-3" class="form-field__label">Job Title</label>
                                                      <input id="call-3" type="text" name="department" class="form-field__input"
                                                          placeholder="Job Title" />
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg px-2">
                                              <div class="form-field">
                                                  <div class="form-field__control">
                                                      <label for="call-4" class="form-field__label">phone</label>
                                                      <input id="call-4" name="mobile" type="number" class="form-field__input"
                                                          placeholder="phone" />
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row mx-0">
                                          <div class="col-lg px-2">
                                              <div class="form-field">
                                                  <div class="form-field__control">
                                                      <label for="call-5" class="form-field__label">password</label>
                                                      <input id="call-5" type="password" name="password" class="form-field__input"
                                                          placeholder="*******" required/>

                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg px-2">
                                              <div class="form-field">
                                                  <div class="form-field__control">
                                                      <label for="call-6" class="form-field__label">description</label>
                                                      <input id="call-6" type="text" name="description" class="form-field__input"
                                                          placeholder="Description" />
                                                  </div>
                                              </div>
                                          </div>


                                      </div>
                                      <div class="row mx-0">
                                          <div class="col-lg px-2">

                                          </div>

                                          <div class="col-lg-6 d-flex justify-content-end align-items-end px-2">
                                              <a id="add-employee-close" href="#" class="btn-admin-default ml-3" data-dismiss="modal"><img src="assets/images/default-close.svg" class="mr-2"/> Cancel</a>
                                              <button onclick="tap()" type="submit" class="btn-admin-primary ml-3"><img src="./assets/images/feather-save.svg" class="mr-2"/> Save</button>
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
<div class="admin-table">
    <div class="container-fluid">
        <div class="row admin-table-header">
            <div class="col-auto admin-table-header-box">
                <div class="row m-0">
                    <div class="top-heading mb-1">
                        <img src="./assets/images/user-outline.svg" class="mr-2">
                        <h2>My Cases</h2>
                        <img src="assets/images/question-circle.svg" class="ml-2">
                    </div>
                </div>
                <div class="row m-0">
                    <ul class="admin-table-info">
                        <li class="mr-1">Viewing ({{$employees->count()}})</li>
                        <li wire:click="add" >Record (s)</li>
                    </ul>
                </div>
            </div>
            <div class="col admin-table-filter-box">
                <div class="admin-table-filter d-flex justify-content-end align-items-center">
                    <button data-toggle="modal" data-target="#add-employee" class="admin-table-btn admin-table-btn-add mr-3"><img class="mr-2"
                            src="./assets/images/table-add.svg">Add</button>
                    <button class="admin-table-btn mr-3" id="filter"><img class="mr-2"
                            src="./assets/images/table-filter.svg">Filter</button>
                    <button class="admin-table-btn mr-3"><img class="mr-2"
                            src="./assets/images/table-export.svg">Export</button>

                    <div class="table-search">
                        <img src="./assets/images/table-search.svg">
                        <input type="text" placeholder="Search …">
                    </div>
                </div>
            </div>
        </div>
        <div class="row admin-table-body mt-3">
            <div class="col">
                <div class="card-box p-2">
                    <div class="table-responsive table-checkbox">
                        <table class="table table-sm" id="example">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <div class="select-all">
                                            <input type="checkbox">
                                            <img src="./assets/images/table-arrow-down.svg">
                                        </div>
                                    </th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Job Title</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="height-300">
                              @foreach($employees as $employee)
                                <tr>
                                    <td>
                                        <div class="select">
                                            <input type="checkbox">
                                        </div>
                                    </td>
                                    <td>{{$employee->username}}</td>
                                    <td>{{$employee->department}}</td>
                                    <td>{{$employee->job_title}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td>{{$employee->mobile}}</td>

                                    <td>
                                      <div class="table-action-btn">

                                          <a href="#" data-toggle="modal" data-target="#edit-employee-{{$employee->id}}" class="ml-3">
                                              <img src="./assets/images/table-edit-btn.svg"/>
                                          </a>
                                          <a href="/employee/delete/{{$employee->id}}" class="ml-3">
                                              <img src="./assets/images/table-delete-btn.svg"/>
                                          </a>
                                      </div>
                                    </td>

                                    <div class="modal fade" id="edit-employee-{{$employee->id}}"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="setting-box">
                                                        <div class="card-box px-2 py-3">
                                                            <div class="row setting-title-box px-2 mb-3">
                                                                <div class="col">
                                                                    <p class="p-0">Edit Employee</p>
                                                                </div>
                                                            </div>
                                                            <div class="setting-form-box">
                                                                <div class="row px-2">
                                                                  <form id="form" wire:submit.prevent="edit(Object.fromEntries(new FormData($event.target)))"  >
                                                                    @csrf
                                                                    <div class="col px-2">
                                                                        <div class="row mx-0">
                                                                            <div class="col-lg px-2">
                                                                                <div class="form-field">
                                                                                    <div class="form-field__control">
                                                                                        <label for="call-1" class="form-field__label"> Name</label>
                                                                                        <input id="call-1" name="username" type="text" class="form-field__input"
                                                                                            placeholder=" Name" value="{{$employee->username}}" required/>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <input type="hidden" name="id" value="{{$employee->id}}"/>
                                                                            <div class="col-lg px-2">
                                                                                <div class="form-field">
                                                                                    <div class="form-field__control">
                                                                                        <label for="call-2" class="form-field__label">email</label>
                                                                                        <input id="call-2" type="email" name="email" class="form-field__input"
                                                                                            placeholder="email" value="{{$employee->email}}" required/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg px-2">
                                                                                <div class="form-field">
                                                                                    <div class="form-field__control">
                                                                                        <label for="call-3" class="form-field__label">Job Title</label>
                                                                                        <input id="call-3" type="text" name="job_title" class="form-field__input"
                                                                                            placeholder="Job Title" value="{{$employee->job_title}}" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg px-2">
                                                                                <div class="form-field">
                                                                                    <div class="form-field__control">
                                                                                        <label for="call-4" class="form-field__label">phone</label>
                                                                                        <input id="call-4" name="mobile" type="number" class="form-field__input"
                                                                                            placeholder="phone" value="{{$employee->mobile}}" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mx-0">
                                                                            <div class="col-lg px-2">
                                                                                <div class="form-field">
                                                                                    <div class="form-field__control">
                                                                                        <label for="call-5" class="form-field__label">password</label>
                                                                                        <input id="call-5" type="password" name="password" class="form-field__input"
                                                                                            placeholder="*******"  />

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg px-2">
                                                                                <div class="form-field">
                                                                                    <div class="form-field__control">
                                                                                        <label for="call-6" class="form-field__label">description</label>
                                                                                        <input id="call-6" type="text" name="description" class="form-field__input"
                                                                                            placeholder="Description" value="{{$employee->description}}" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                        <div class="row mx-0">
                                                                            <div class="col-lg px-2">

                                                                            </div>

                                                                            <div class="col-lg-6 d-flex justify-content-end align-items-end px-2">
                                                                                <a id="add-employee-close" href="#" class="btn-admin-default ml-3" data-dismiss="modal"><img src="assets/images/default-close.svg" class="mr-2"/> Cancel</a>
                                                                                <button onclick="tap()" type="submit" class="btn-admin-primary ml-3"><img src="./assets/images/feather-save.svg" class="mr-2"/> Save</button>
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
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table Section End -->


</div>

<!-- Modal End -->


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
function tap(){
  // $('#add-employee').modal('toggle');
  $("#example").dataTable().fnDestroy()
  $('#add-employee-close').click();
$('.modal-backdrop').remove();
  setTimeout(()=>{
    $('#add-employee-close').click();
    $('.modal-backdrop').remove();

    $('#myInputTextField').on('keyup change',()=>{
      console.log($('#myInputTextField').val())
          table.search(''+$('#myInputTextField').val()).draw() ;
    })

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
    // $("#example tr").eq(1).hide();
    var table = $('#example').DataTable( {
        orderCellsTop: true,
        fixedHeader: false,
        searching:true
    } );

    $(".filter").hide(); // hidden search input

    $('.form-field__input').each(function() {
      if ($(this).val() != ""  ) {
        $(this).parent().parent().addClass('form-field--is-active');
      }
      else {
        $(this).parent().parent().removeClass('form-field--is-active');
      }
    });
  },1000);
}


</script>
