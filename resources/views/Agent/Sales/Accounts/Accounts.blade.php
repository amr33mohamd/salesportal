@extends('Agent.Layout.App')
@section('title', 'Accounts')

@section('content')

    <!-- Header End -->

    <!-- Page Body Start -->
    <main class="pb-3">
        <!-- Page Title and Breadcrumb Start -->
        <div class="page-title-breadcrumb my-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="page-title">
                            Accounts
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumb-box">
                            <ul>
                                <li>Sales</li>
                                <li>Accounts</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Title and Breadcrumb End -->

        <!-- Table Section Start -->
        <div class="admin-table">
            <div class="container-fluid">
                <div class="row admin-table-header">
                    <div class="col-auto admin-table-header-box">
                        <div class="row m-0">
                            <div class="top-heading mb-1">
                                <img src="./assets/images/user-outline.svg" class="mr-2">
                                <h2>My Accounts</h2>
                                <img src="assets/images/question-circle.svg" class="ml-2">
                            </div>
                        </div>
                        <div class="row m-0">
                            <ul class="admin-table-info">
                            </ul>
                        </div>
                    </div>
                    <div class="col admin-table-filter-box">
                        <div class="admin-table-filter d-flex justify-content-end align-items-center">
                            <a href="{{route('NewAccount')}}" class="admin-table-btn admin-table-btn-add mr-3"><img class="mr-2"
                                    src="./assets/images/table-add.svg">Add</a>
                            <button id="filter" class="admin-table-btn mr-3"><img class="mr-2"
                                    src="./assets/images/table-filter.svg">Filter</button>
                            <button class="admin-table-btn mr-3" id="export"><img class="mr-2"
                                    src="./assets/images/table-export.svg">Export</button>
                            <a href="./step-1.html" class="admin-table-btn mr-3"><img class="mr-2"
                                    src="./assets/images/table-import.svg">Import</a>
                            <div class="table-search">
                                <img src="./assets/images/table-search.svg">
                                <input id="myInputTextField" value="" type="text" placeholder="Search …">
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
                                            <th scope="col">Status</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Home Phone</th>
                                            <th scope="col">Fax</th>
                                            <th scope="col">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody class="height-300">
                                          @foreach($leads as $lead)
                                          <tr>

                                            <td>
                                                <div class="select">
                                                    <input type="checkbox" id="select">
                                                </div>
                                            </td>
                                            <td><a href="/accounts/profile/{{$lead->id}}">{{$lead->first_name}} {{$lead->last_name}}</a></td>
                                            <td >
                                                <div style="background: #0D3745;
    padding: 5px 10px;
    line-height: 15px;
    border-radius: 3px;
    color: #ffffff;
    display: block;
    margin-top: 2px;
    float: left;">{{($lead->status) ? $lead->status->name :null}}</div>

                                            </td>
                                            <td>{{$lead->email}}</td>

                                            <td>{{$lead->contact_number}}</td>
                                            <td>{{$lead->fax}}</td>
                                            <td>
                                              <div class="row">
                                                <div class="col-8">
                                                    <a href="/accounts/edit/{{$lead->id}}" style="display:inline-block;width:15%" >  <button class="ml-1"><img src="./assets/images/table-edit.svg"/></button></a>
                                                </div>
                                                <div class="col-4">
                                                  <a  href="/accounts/delete/{{$lead->id}}" style="display:inline-block;width:15%;text-align: right;color: red;">X</a>
                                                </div>
                                              <!-- <div class="col-4">
                                                <a href="/accounts/profile/{{$lead->id}}" >  <button class="ml-1"><img src="./assets/images/user-outline.svg"/></button></a>
                                              </div> -->
                                            </div>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                    @if($leads->count() == 0)
                                    <p>There is no data yet</p>
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table Section End -->
    </main>
    <!-- Page Body End -->



@endsection
@push('scripts')
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>

<script>
$(document).ready(function() {

// Setup - add a text input to each footer cell
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
$('#myInputTextField').on('keyup change',()=>{
  console.log($('#myInputTextField').val())
      table.search(''+$('#myInputTextField').val()).draw() ;
})
$(".filter").hide(); // hidden search input

$("#filter").click(()=>{
$('.filter').toggle(
  function () {
    $(".filter").css({display: "none !important"});
}, function () {

    $(".filter").css({display: "block !important"});
});
})
var table = $('#example').DataTable( {
    orderCellsTop: true,
    fixedHeader: false,
    searching:true,
    dom: 'Bfrtip',
       buttons: [
           'copy',
           'csv',
           'excel',
           'pdf',
           {
               extend: 'print',
               exportOptions: {
                               orthogonal: 'sort'
                           }
           }
       ],
       columnDefs: [{
       targets:[0,5],
       render: function(data, type, row, meta){
          if(type === 'sort'){
             var $input = $(data).find('input[type="checkbox"]').addBack();
             data = ($input.prop('checked')) ? "1" : "0";
          }

          return data;
       }
    }]
} );

} );
</script>
@endpush