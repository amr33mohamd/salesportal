@extends('Agent.Layout.App3')
@section('title', 'Case')

@section('content')
<div class="vb__layout__content">
  <div class="vb__breadcrumbs">
<div class="vb__breadcrumbs__path">
<a href="javascript: void(0);">Home</a>
<span>
<span class="vb__breadcrumbs__arrow"></span>
<span>App</span>
</span>
<span>
<span class="vb__breadcrumbs__arrow"></span>
<strong class="vb__breadcrumbs__current">Invoice</strong>
</span>
</div>
</div>
  <div class="vb__utils__content">
    <div class="vb__utils__heading">
<h5>
<span class="mr-3">Invoice</span>
</h5>
</div>
<div class="card">
<div class="card-body">
<div class="d-flex flex-wrap">
<div class="flex-grow-1 d-flex flex-column flex-sm-row mb-4">
<div class="font-size-18 text-uppercase mb-4">
<div>From:</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" version="1.1" height="24px" width="24px">
  <g>
    <path fill="#4b7cf3" strokeWidth="1" stroke="#4b7cf3"
      d="M12,10.9c-0.1,0-0.2,0-0.2-0.1L3.5,6.1C3.4,6,3.3,5.8,3.3,5.6c0-0.2,0.1-0.3,0.2-0.4l8.2-4.7c0.2-0.1,0.3-0.1,0.5,0      l8.2,4.7c0.2,0.1,0.2,0.3,0.2,0.4S20.6,6,20.5,6.1l-8.2,4.7C12.2,10.8,12.1,10.9,12,10.9z M4.8,5.6L12,9.8l7.2-4.2L12,1.5      L4.8,5.6z" />
    <path fill="#4b7cf3" strokeWidth="1" stroke="#4b7cf3"
      d="M13.6,23.6c-0.1,0-0.2,0-0.2-0.1c-0.2-0.1-0.2-0.3-0.2-0.4v-9.5c0-0.2,0.1-0.3,0.2-0.4l8.2-4.7c0.2-0.1,0.3-0.1,0.5,0      c0.2,0.1,0.2,0.3,0.2,0.4v9.5c0,0.2-0.1,0.3-0.3,0.4l-8.2,4.7C13.8,23.6,13.7,23.6,13.6,23.6z M14.1,13.9v8.3l7.2-4.2V9.8      L14.1,13.9z" />
    <path fill="#4b7cf3" strokeWidth="1" stroke="#4b7cf3"
      d="M10.4,23.6c-0.1,0-0.2,0-0.2-0.1l-8.2-4.7c-0.2-0.1-0.3-0.3-0.3-0.4V8.9c0-0.2,0.1-0.3,0.2-0.4c0.2-0.1,0.3-0.1,0.5,0      l8.2,4.7c0.2,0.1,0.2,0.3,0.2,0.4v9.5c0,0.2-0.1,0.3-0.2,0.4C10.5,23.6,10.5,23.6,10.4,23.6z M2.7,18.1l7.2,4.2v-8.3L2.7,9.8      V18.1z" />
  </g>
</svg>
<div class="vb__menuTop__logo__name">FBP</div>
</div>

</div>
<div class="flex-grow-1 d-flex flex-column flex-sm-row mb-4">
<div class="font-size-18 text-uppercase pb-4">
<div>To:</div>
<div class="text-dark font-weight-bold mb-3">Invoice info</div>
<div class="text-dark">
  {{$lead->id}}
</div>
<div class="text-dark">
  {{$lead->account->getFieldByName('surname')->value}}
</div>
</div>

</div>
</div>
<div class="table-responsive mb-4">
<table class="table table-borderless table-vertical-middle">
<tr>
<th class="border-bottom-0 font-weight-normal text-gray-6 text-uppercase">Product</th>
<th class="border-bottom-0 font-weight-normal text-gray-6 text-uppercase text-right">
  Quantity
</th>
<th class="border-bottom-0 font-weight-normal text-gray-6 text-uppercase text-right">
  Unit cost
</th>
</tr>
@if($lead->type == 'hourly')
<tr>

<td>
  <div>Hourly</div>
</td>


<td class="font-weight-bold text-right text-dark">
  1
</td>

<td class="font-weight-bold text-right text-dark">
  {{$lead->amount}}
</td>
</tr>
@elseif($lead->type == 'fixed')
<tr>

<td>
  <div>Fixed</div>
</td>


<td class="font-weight-bold text-right text-dark">
  1
</td>

<td class="font-weight-bold text-right text-dark">
  {{$lead->amount}}
</td>
</tr>

@elseif($lead->type == 'items')
@foreach($lead->items as $item)
<tr>

<td>
  <div>{{$item->item->getFieldByName('name')->value}}</div>
</td>


<td class="font-weight-bold text-right text-dark">
  1
</td>

<td class="font-weight-bold text-right text-dark">
  {{$item->item->price}}
</td>
</tr>
@endforeach
@endif

</table>
</div>
<div class="text-right font-size-18 text-dark p-4 rounded bg-light">
<div>Sub - Total amount: <span class="font-weight-bold">{{$lead->amount}} AED</span></div>
<a href="javascript: void(0);" onclick="window.print()" class="btn btn-outline-success mt-3 mr-3">Print</a>
<!-- <a href="javascript: void(0);" class="btn btn-success mt-3 px-5">Proceed Payment</a> -->
</div>
</div>
</div>
  </div>
</div>
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
