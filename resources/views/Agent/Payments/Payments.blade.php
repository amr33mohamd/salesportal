

@extends('Agent.Layout.App3')
  @section('title', 'Payments')

@section('content')



      <div class="vb__layout__content">
        <div class="vb__breadcrumbs">
  <div class="vb__breadcrumbs__path">
    <a href="javascript: void(0);">Home</a>
    <span>
      <span class="vb__breadcrumbs__arrow"></span>
      <span>{{$type}}</span>
    </span>
    <span>
      <span class="vb__breadcrumbs__arrow">

      </span>
    </span>
  </div>
</div>

        <div class="vb__utils__content">
          <div class="row">
            <div class="col-xl-4">
              <div class="card">
                <div class="card-body position-relative overflow-hidden">
        <div class="font-size-36 font-weight-bold text-dark mb-n2">{{$leads->count()}}</div>
        <div class="text-uppercase">{{$type}}</div>
        <div class="vb__c11__chartContainer">
          <div class="vb__c11__chart ct-hidden-points"></div>
        </div>
      </div>
      <script>
        /////////////////////////////////////////////////////////////////////////////////////////
        // "Chart Widget 11" module scripts

        ; (function ($) {
          'use strict'
          $(function () {
            new Chartist.Line(
              '.vb__c11__chart',
              {
                series: [
                  {
                    className: 'ct-series-a',
                    data: [2, 11, 8, 14, 18, 20, 26],
                  },
                ],
              },
              {
                width: '120px',
                height: '107px',

                showPoint: true,
                showLine: true,
                showArea: true,
                fullWidth: true,
                showLabel: false,
                axisX: {
                  showGrid: false,
                  showLabel: false,
                  offset: 0,
                },
                axisY: {
                  showGrid: false,
                  showLabel: false,
                  offset: 0,
                },
                chartPadding: 0,
                low: 0,
                plugins: [Chartist.plugins.tooltip()],
              },
            )
          })
        })(jQuery)
      </script>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="card">
                <div class="card-body position-relative overflow-hidden">
        <div class="font-size-36 font-weight-bold text-dark mb-n2">{{$leads
                  ->where('created_at', '>=', \Carbon\Carbon::today())->count()}}</div>
        <div class="text-uppercase">Today {{$type}}</div>
        <div class="vb__c11-1__chartContainer">
          <div class="vb__c11-1__chart ct-hidden-points"></div>
        </div>
      </div>
      <script>
        /////////////////////////////////////////////////////////////////////////////////////////
        // "Chart Widget 11-1" module scripts

        ; (function ($) {
          'use strict'
          $(function () {
            new Chartist.Line(
              '.vb__c11-1__chart',
              {
                series: [
                  {
                    className: 'ct-series-a',
                    data: [20, 80, 67, 120, 132, 66, 97],
                  },
                ],
              },
              {
                width: '120px',
                height: '107px',

                showPoint: true,
                showLine: true,
                showArea: true,
                fullWidth: true,
                showLabel: false,
                axisX: {
                  showGrid: false,
                  showLabel: false,
                  offset: 0,
                },
                axisY: {
                  showGrid: false,
                  showLabel: false,
                  offset: 0,
                },
                chartPadding: 0,
                low: 0,
                plugins: [Chartist.plugins.tooltip()],
              },
            )
          })
        })(jQuery)
      </script>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="card">
                <div class="card-body position-relative overflow-hidden">
        <div class="font-size-36 font-weight-bold text-dark mb-n2">{{$leads
                  ->where('created_at', '>=', \Carbon\Carbon::yesterday())->count()}}</div>
        <div class="text-uppercase">Yesterday {{$type}}</div>
        <div class="vb__c11-2__chartContainer">
          <div class="vb__c11-2__chart ct-hidden-points"></div>
        </div>
      </div>
      <script>
        /////////////////////////////////////////////////////////////////////////////////////////
        // "Chart Widget 11-2" module scripts

        ; (function ($) {
          'use strict'
          $(function () {
            new Chartist.Line(
              '.vb__c11-2__chart',
              {
                series: [
                  {
                    className: 'ct-series-a',
                    data: [42, 40, 80, 67, 84, 20, 97],
                  },
                ],
              },
              {
                width: '120px',
                height: '107px',

                showPoint: true,
                showLine: true,
                showArea: true,
                fullWidth: true,
                showLabel: false,
                axisX: {
                  showGrid: false,
                  showLabel: false,
                  offset: 0,
                },
                axisY: {
                  showGrid: false,
                  showLabel: false,
                  offset: 0,
                },
                chartPadding: 0,
                low: 0,
                plugins: [Chartist.plugins.tooltip()],
              },
            )
          })
        })(jQuery)
      </script>
              </div>
            </div>
          </div>
                  <div class="card">
  <div class="card-header card-header-flex">
    <div class="d-flex flex-column justify-content-center mr-auto">
      <h5 class="mb-0">{{$type}}</h5>
    </div>
    <div class="d-flex flex-column justify-content-center">
      <a class="btn btn-primary" href="{{route('AddPayment')}}">New Payment</a>
    </div>

  </div>
  <div class="card-body">
    <table class="table table-hover nowrap stripe row-border order-column" id="example1">
      <thead class="thead-default">
        <tr>
          @if($type == 'milestones')
          <th scope="col">Payment ID</th>
          <th scope="col">Client email</th>
          <th scope="col">Status</th>
          <th scope="col">Due Date</th>
          <th scope="col">Amount</th>
          @endif

          @if($type == 'wallet')
          <th scope="col">Payment ID</th>
          <th scope="col">Client email</th>
          <th scope="col">Status</th>
          <th scope="col">Due Date</th>
          <th scope="col">Amount</th>
          @endif

          @if($type == 'invoices')
          <th scope="col">Payment ID</th>
          <th scope="col">Client name</th>
          <th scope="col">Status</th>
          <th scope="col">Due Date</th>
          <th scope="col">Amount</th>
          <th scope="col">Action</th>
          @endif


          @if($type == 'commissions')
          <th scope="col">Payment ID</th>
          <th scope="col">Client ID</th>
          <th scope="col">Client name</th>
          <th scope="col">Milestone</th>
          <th scope="col">Amount</th>
          @endif

        </tr>
      </thead>
      <tbody>





            @foreach($leads as $lead)
                <tr>
                  @if($type == 'milestones')
                  <td>{{$lead->id}}</td>
                  <td>{{$lead->payment->account->email}}</td>
                  <td class="red-color">
                      {{$lead->status}}
                  </td>
                  <td>{{\Carbon\Carbon::parse( $lead->due_date)->toRfc7231String()}} </td>
                  <td>{{($lead->amount)}}</td>

                  @endif


                  @if($type == 'wallet')
                  <td>{{$lead->id}}</td>
                  <td>{{$lead->payment->account->email}}</td>
                  <td class="red-color">
                      {{$lead->status}}
                  </td>
                  <td>{{\Carbon\Carbon::parse( $lead->due_date)->toRfc7231String()}} </td>
                  <td>{{$lead->amount}}</td>
                  @endif


                  @if($type == 'invoices')
                  <td>{{$lead->id}}</td>
                  <td>{{$lead->account->email}}</td>
                  <td class="red-color">
                      {{$lead->status}}
                  </td>
                  <td>{{\Carbon\Carbon::parse( $lead->due_date)->toRfc7231String()}} </td>
                  <td>{{$lead->amount}}</td>
                  <td style="Background-color:#f2f4f8">
                    <a href="/invoice/{{$lead->id}}" class="btn btn-sm btn-light mr-2"
                      ><i class="fe fe-edit mr-2"></i> View
                      </a>
                    <a href="#" class="btn btn-sm btn-light">
                      <small
                        ><i class="fe fe-trash mr-2"><!-- --></i></small
                      >
                      Remove</a
                    >
                  </td>

                  @endif


                  @if($type == 'commissions')
                  <td>{{$lead->id}}</td>
                  <td>{{$lead->milestone->payment->account->id}}</td>
                  <td>{{$lead->milestone->payment->account->email}}</td>

                  <td>{{$lead->amount}}</td>
                  @endif

                </tr>
            @endforeach

      </tr>






      </tbody>

    </table>
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
