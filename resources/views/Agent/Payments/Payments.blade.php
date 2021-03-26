@extends('Agent.Layout.App')
@section('title', 'Payments')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@livewireStyles

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
                <div class="col" wire:click="add_payment">
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


    <livewire:payments-table  />

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
<script>

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






const app = new Vue({
    el: '#app',

    data() {
      return {
        leads:{} ,
        editing:0,
        current_lead:{},

      }
    },

    created() {
      // console.log(JSON.stringify(this.leads[0]))
      $('#schedule-a-call').on('hidden.bs.modal', function (e) {
        app.editing = 0;
        app.current_lead = {};
      })
      $('#schedule-a-call').on('show.bs.modal', function (e) {
        $('.form-field__input').each(function() {
          if ($(this).val() != ""  ) {
            $(this).parent().parent().addClass('form-field--is-active');
          }
          else {
            $(this).parent().parent().removeClass('form-field--is-active');
          }
        });
      })
      $('#callForm').ajaxForm((response)=> {
        if(app.editing == 1){
          app.editLead(response);
          app.editing = 0;
          console.log(response)
          $('#schedule-a-call').modal('hide');
        }
        else {
          app.addLead(response);
          $('#schedule-a-call').modal('hide');
        }
                 // alert(JSON.stringify(response))
             });
    },

    methods: {
        setLead(lead) {
          this.current_lead = lead;
          this.editing = 1;
           },
           addLead(lead){
             this.leads.push(lead);
           },
           editLead(data) {

             let obj = app.leads.find(f=>f.id==data.id);
              if(obj){
                obj.agenda = data.agenda;
                obj.call_type = data.call_type;
                obj.callable = data.callable;
                obj.callable_id = data.callable_id;
                obj.callable_type = data.callable_type;
                obj.created_at = data.created_at;
                obj.id = data.id;
                obj.purpose = data.purpose;
                obj.related_to = data.related_to;
                obj.reminder = data.reminder;
                obj.sales_stage_id = data.sales_stage_id;
                obj.start = data.start;
                obj.status = data.status;
                obj.subject = data.subject;


              }
              },


        addMessage(message) {
            axios.post('/messages', {
                message
            }).then(response => {
                this.messages.push({
                    message: response.data.message.message,
                    user: response.data.user
                });
            });
        },

        sendMessage() {
            this.addMessage(this.newMessage);
            this.newMessage = '';
        }
    }
});
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
