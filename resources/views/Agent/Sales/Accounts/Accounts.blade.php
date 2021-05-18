@extends('Agent.Layout.App2')
@section('title', 'Accounts')

@section('content')

<div class="cui-layout-content">



<div class="cui-utils-content">
<!-- START: tables/datatables -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Accounts</strong>
      <a href="{{route('NewAccount')}}" target="_blank" class="btn btn-sm btn-primary ml-2"
        >Add Account <i class="icmn-plus ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-12">

        <div class="mb-5">
          <table class="table table-hover nowrap" id="example1">
            <thead>
              <tr>
                <th scope="col">More</th>
                <th scope="col">Actions</th>
                @foreach($fields as $field)
                    <th scope="col">{{$field->label}}</th>

                @endforeach
              </tr>
            </thead>
            <tbody>
              @foreach($leads as $lead)
              <tr>




<td>
</td>
                <td>
                  <div class="row">

                  <a href="/accounts/edit/{{$lead->id}}" style="display:inline-block;width:50%">  <button class="btn btn-sm btn-primary ml-2"><img src="./assets/images/table-edit.svg"/></button></a>


                  <a  href="/accounts/delete/{{$lead->id}}"  style="display:inline-block;width:50%;text-align: right;color: red;">X</a>
                </td>
              @foreach($fields as $field)
                <td>{{($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null}}</td>
                @endforeach
            </tr>
            @endforeach


            </tbody>
            <tfoot>
              <tr>
                <th scope="col">More</th>

                <th scope="col">Actions</th>
                @foreach($fields as $field)
                    <th scope="col">{{$field->label}}</th>

                @endforeach
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>


</section>
<!-- END: tables/datatables -->


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

       ],

} );

} );
</script>
@endpush
