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
                            Cases
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumb-box">
                            <ul>
                                <li>Sales</li>
                                <li>Cases</li>
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
                                <h2>My Cases</h2>
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
                            <a href="{{route('NewOpportunity')}}" class="admin-table-btn admin-table-btn-add mr-3"><img class="mr-2"
                                    src="./assets/images/table-add.svg">Add</a>
                            <button id="filter" class="admin-table-btn mr-3"><img class="mr-2"
                                    src="./assets/images/table-filter.svg">Filter</button>
                            <button class="admin-table-btn mr-3"><img class="mr-2"
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
                                            <th scope="col">Account Name</th>
                                            <th scope="col">Sales Stage</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">close</th>


                                            <th scope="col">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody class="height-300">
                                          @foreach($leads as $lead)
                                          <tr>

                                            <td>
                                                <div class="select">
                                                    <input type="checkbox">
                                                </div>
                                            </td>
                                            <td><a href="/opportunities/profile/{{$lead->id}}">{{$lead->name}} </a></td>


                                            <td>{{$lead->account->first_name}} {{$lead->account->last_name}}</td>
                                            <td>{{($lead->sales_stage) ? $lead->sales_stage->name :null}}</td>

                                            <td>{{$lead->amount}}</td>
                                            <td>{{$lead->close_date}}</td>

                                            <td>
                                              <div class="row">
                                              <a href="/opportunities/edit/{{$lead->id}}" style="display:inline-block;width:15%">  <button class="ml-1"><img src="./assets/images/table-edit.svg"/></button></a>
                                              <a  href="/opportunities/delete/{{$lead->id}}" style="display:inline-block;width:15%">X</a>
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
        </div>
        <!-- Table Section End -->
    </main>
    <!-- Page Body End -->



@endsection
@push('scripts')
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
    searching:true
} );

} );
</script>
@endpush
