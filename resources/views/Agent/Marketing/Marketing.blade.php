@extends('Agent.Layout.App')
@section('title', 'Marketing')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
.select2-container--default .select2-selection--single{
  height: 45px !important;
  border: 1px solid #70707030;
}


</style>
<main class="pb-3" id="app">
    <!-- Page Title and Breadcrumb Start -->
    <div class="page-title-breadcrumb my-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-title">
                        Marketing
                    </div>
                </div>
                <div class="col-auto">
                    <div class="breadcrumb-box">
                        <ul>
                            <li>Marketing</li>
                            <li>Social</li>
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
                <div class="col admin-table-filter-box">
                    <div class="admin-table-filter d-flex justify-content-end align-items-center">
                        <a href="#"  class="admin-table-btn admin-table-btn-add mr-3" data-toggle="modal" data-target="#add-attachment"><img class="mr-2"
                                src="./assets/images/table-add.svg" >Add</a>
                        <button class="admin-table-btn mr-3"><img class="mr-2"
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
                        <div class="card-box pt-3 pl-3 pr-3">
                            <div class="tab-h-box">
                                <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="social-tab" data-toggle="tab" href="#social"
                                            role="tab" aria-controls="social" aria-selected="true">Social</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="templates-tab" data-toggle="tab" href="#templates"
                                            role="tab" aria-controls="templates" aria-selected="false">Templates</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " id="image-library-tab" data-toggle="tab" href="#image-library"
                                            role="tab" aria-controls="image-library" aria-selected="false">Image Library</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="social" role="tabpanel"
                                        aria-labelledby="social-tab">
                                        <div class="row">
                                          @if($Social->count() == 0)
                                          <p>No Data</p>
                                          @else
                                          @foreach($Social as $lead)
                                            <div class="col-lg-2 mb-3" >
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img  style="height:250px !important" src="{{$lead->getFirstMediaUrl()}}"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">

                                                                <h4>{{$lead->name}}</h4>
                                                                <p>{{($lead->status == 1) ? 'approved' : 'declined'}}</p>
                                                                <p>{{$lead->caregory}} / {{$lead->sub_category}}</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                              <a href="{{$lead->getFirstMediaUrl()}}"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif


                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="templates" role="tabpanel"
                                        aria-labelledby="templates-tab">
                                        <div class="row">
                                          @if($Template->count() == 0)
                                          <p>No Data</p>
                                          @else
                                          @foreach($Template as $lead)
                                            <div class="col-lg-2 mb-3" >
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img  style="height:250px !important"  src="{{$lead->getFirstMediaUrl()}}"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">

                                                                <h4>{{$lead->name}}</h4>
                                                                <p>{{($lead->status == 1) ? 'approved' : 'declined'}}</p>
                                                                <p>{{$lead->caregory}} / {{$lead->sub_category}}</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                              <a href="{{$lead->getFirstMediaUrl()}}"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                          @endif
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="image-library" role="tabpanel"
                                        aria-labelledby="image-library-tab">
                                        <div class="row">
                                          @if($Image->count() == 0)
                                          <p>No Data</p>
                                          @else
                                          @foreach($Image as $lead)
                                            <div class="col-lg-2 mb-3" >
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img style="height:250px !important" src="{{$lead->getFirstMediaUrl()}}"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">

                                                                <h4>{{$lead->name}}</h4>
                                                                <p>{{($lead->status == 1) ? 'approved' : 'declined'}}</p>
                                                                <p>{{$lead->caregory}} / {{$lead->sub_category}}</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                              <a href="{{$lead->getFirstMediaUrl()}}"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
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
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Table Section End -->
</main>


<!-- Modal Start -->
<div class="modal fade" id="add-attachment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="setting-box">
                    <div class="card-box px-2 py-3">
                        <div class="row setting-title-box px-2 mb-3">
                            <div class="col">
                                <p class="p-0">Add Attachment</p>
                            </div>
                        </div>
                        <div class="setting-form-box">
                        <form id="marketingForm" method="post" enctype="multipart/form-data" action="{{route('AddMarketing')}}">
                          @csrf
                            <div class="row px-2">
                                <div class="col px-2">
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field other-field float-left">
                                                <div class="form-field__control">
                                                    <label class="form-field__label">File</label>
                                                    <label for="attachment-1" class="btn-admin-primary mb-0">
                                                        <img class="mr-2" src="./assets/images/computing-cloud.svg">Choose File
                                                    </label>
                                                    <input id="attachment-1" name="file" type="file" class="other-field d-none" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="attachment-2" class="form-field__label">File Name</label>
                                                    <input id="attachment-2" type="text" name="name" class="form-field__input"
                                                        placeholder="name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="attachment-3" class="form-field__label">Caregory</label>
                                                    <input id="attachment-3" name="category" type="text" class="form-field__input"
                                                        placeholder="Category" />

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="attachment-4" class="form-field__label">sub category</label>
                                                    <input id="attachment-4" name="sub_category" type="text" class="form-field__input"
                                                        placeholder="Sub Category" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field mb-0">
                                                <div class="form-field__control">
                                                    <label for="attachment-5" class="form-field__label">Aprroval Stauts</label>
                                                    <select id="attachment-5" name="status" class="form-field__input">
                                                        <option value="">Aprroval Stauts</option>
                                                        <option value="1">Approved</option>
                                                        <option value="2">declined</option>
                                                    </select>
                                                    <div class="form-dropdown-icon">
                                                        <img src="./assets/images/form-drop-down.svg" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field mb-0">
                                                <div class="form-field__control">
                                                    <label for="attachment-6" class="form-field__label">Type</label>
                                                    <select id="attachment-6" name="type" class="form-field__input" required>
                                                      <option value="">Choose</option>

                                                        <option value="Template">Template</option>
                                                        <option value="Social">Social</option>
                                                        <option value="Image">Image</option>
                                                    </select>
                                                    <div class="form-dropdown-icon">
                                                        <img src="./assets/images/form-drop-down.svg" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg d-flex justify-content-end align-items-end px-2">
                                            <button type="submit"  class="btn-admin-primary ml-3"><img src="./assets/images/table-add.svg" class="mr-2"/>Add Attachment</a>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js"></script>

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

const app = new Vue({
    el: '#app',

    data() {
      return {
        leads: {!! json_encode($leads) !!},
        editing:0,
        current_lead:{},

      }
    },

    created() {
      console.log(JSON.stringify(this.leads[0]))
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
      // $('#marketingForm').ajaxForm((response)=> {
      //   if(app.editing == 1){
      //     app.editLead(response);
      //     app.editing = 0;
      //     console.log(response)
      //       $('#add-attachment').modal('hide');
      //   }
      //   else {
      //     app.addLead(response);
      //     $('#add-attachment').modal('hide');
      //   }
      //            // alert(JSON.stringify(response))
      //        });
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
// Javascript to enable link to tab
var hash = location.hash.replace(/^#/, '');  // ^ means starting, meaning only match the first hash
if (hash) {
    $('.nav-tabs a[href="#' + hash + '"]').tab('show');
}

// Change hash for page-reload
$('.nav-tabs a').on('shown.bs.tab', function (e) {
    window.location.hash = e.target.hash;
})

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
@endpush
