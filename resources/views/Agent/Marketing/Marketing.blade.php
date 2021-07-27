
@extends('Agent.Layout.App3')
@section('title', 'Calls')

@section('content')
<div class="vb__layout__content">
  <div class="vb__breadcrumbs">
<div class="vb__breadcrumbs__path">
<a href="javascript: void(0);">Home</a>
<span>
<span class="vb__breadcrumbs__arrow"></span>
<span>Markenting</span>
</span>
<span>
<span class="vb__breadcrumbs__arrow"></span>
<strong class="vb__breadcrumbs__current">{{$type}}</strong>
</span>
</div>
</div>
  <div class="vb__utils__content">
    <div class="card">
      <div class="card-header card-header-flex">
        <div class="d-flex flex-column justify-content-center mr-auto">
          <h5 class="mb-0">Marketing</h5>
        </div>
        <div class="d-flex flex-column justify-content-center">
          <a class="btn btn-primary" href="{{route('newMarketing')}}">New Document</a>
        </div>

      </div>
<div class="card-body">
<div class="vb__gallery">

<div class="vb__gallery__items d-flex flex-wrap">

  @if($leads->count() == 0)
  <p>No Data</p>
  @else
  @foreach($leads as $lead)
  <div class="vb__gallery__item">
    <div class="vb__gallery__itemContent">
      <div class="vb__gallery__itemControl">
        <div class="btn-group vb__gallery__itemControlContainer">
          <a href="{{$lead->getFirstMediaUrl()}}" type="button" class="btn">
            <i class="fe fe-download"></i>
          </a>
          <a type="button" href="/marketing/delete/{{$lead->id}}" class="btn">
            <i class="fe fe-trash"></i>
          </a>
        </div>
      </div>
      <img src="{{$lead->getFirstMediaUrl()}}"/>
    </div>
    <div class="text-gray-6">
      <div>{{$lead->name}}</div>
      <div>{{$lead->caregory}} / {{$lead->sub_category}} -> {{($lead->status == 1) ? 'approved' : 'declined'}}</div>

    </div>
  </div>
  @endforeach
  @endif

</div>
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
