@section('title', 'Employees')

@section('content')
@livewireStyles
<div>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
.select2-container--default .select2-selection--single{
  height: 45px !important;
  border: 1px solid #70707030;
}


</style>
<main class="pb-3">
    <!-- Page Title and Breadcrumb Start -->
    <div class="page-title-breadcrumb my-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-title">
                        Employees
                    </div>
                </div>
                <div class="col-auto">
                    <div class="breadcrumb-box">
                        <ul>
                            <li>Settings</li>
                            <li>Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title and Breadcrumb End -->
<livewire:employees/>

</main>

</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script>

$(document).ready(function() {
$('#element').toast('show')
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



$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
$('.form-field__input').each(function() {
  if ($(this).val() != ""  ) {
    $(this).parent().parent().addClass('form-field--is-active');
  }
  else {
    $(this).parent().parent().removeClass('form-field--is-active');
  }
});
</script>
@livewireScripts

@endpush
