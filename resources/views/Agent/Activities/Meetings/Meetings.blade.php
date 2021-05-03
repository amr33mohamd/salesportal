@extends('Agent.Layout.App')
@section('title', 'Meetings')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
.select2-container--default .select2-selection--single{
  height: 45px !important;
  border: 1px solid #70707030;
}


</style>
    <!-- Header End -->

    <!-- Page Body Start -->
    <main class="pb-3" id="app">

        <!-- Page Title and Breadcrumb Start -->
        <div class="page-title-breadcrumb my-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="page-title">
                            Meetings
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumb-box">
                            <ul>
                                <li>Activities</li>
                                <li>Meetings</li>
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
                                <h2>My Meetings</h2>
                                <img src="assets/images/question-circle.svg" class="ml-2">
                            </div>
                        </div>
                        <div class="row m-0">
                            <ul class="admin-table-info">
                                <li class="mr-1">Viewing ({{$leads->count()}})</li>
                                <li>Record (s)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col admin-table-filter-box">
                        <div class="admin-table-filter d-flex justify-content-end align-items-center">
                            <a href="#" data-toggle="modal" data-target="#schedule-a-call" class="admin-table-btn admin-table-btn-add mr-3"><img class="mr-2"
                                    src="./assets/images/table-add.svg">Add</a>
                            <button id="filter" class="admin-table-btn mr-3"><img class="mr-2"
                                    src="./assets/images/table-filter.svg">Filter</button>
                            <button class="admin-table-btn mr-3" id="export"><img class="mr-2"
                                    src="./assets/images/table-export.svg">Export</button>

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
                                            <th scope="col">name</th>
                                            <th scope="col">location</th>
                                            <th scope="col">Client</th>
                                            <th scope="col">status</th>
                                            <th scope="col">all day</th>


                                            <th scope="col">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody class="height-300" v-for="lead in leads">

                                          <tr>

                                            <td>
                                                <div class="select">
                                                    <input type="checkbox">

                                                </div>
                                            </td>
                                            <td >
                                                @{{lead.name}}

                                            </td>
                                            <td>@{{lead.location}}</td>
                                            <td>@{{lead.meetingable.first_name}} @{{lead.meetingable.last_name}}</td>

                                            <td>@{{lead.status}}</td>
                                            <td>@{{(lead.all_day == 1)? 'yes' :'no'}}</td>

                                            <td>
                                              <div class="row">
                                              <a data-toggle="modal" data-target="#schedule-a-call" v-on:click="setLead(lead)" style="display:inline-block;width:15%">  <button class="ml-1"><img src="./assets/images/table-edit.svg"/></button></a>
                                              <a  href="/meetings/delete/@{{lead.id}}" style="display:inline-block;width:15%">X</a>
                                            </div>
                                            </td>
                                        </tr>

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

    <!-- Page Body End -->



    <div class="modal fade" id="schedule-a-call" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="setting-box">
                        <div class="card-box px-2 py-3">
                            <div class="row setting-title-box px-2 mb-3">
                                <div class="col">
                                    <p class="p-0">Schedule a Meeting</p>
                                </div>
                            </div>
                            <form id="callForm" method="post" action="@{{(editing == 0) ? '/meetings/new/action':'/meetings/edit/action/'+current_lead.id}}" >
                              @csrf
                            <div class="setting-form-box">
                                <div class="row px-2">
                                    <div class="col px-2">
                                        <div class="row mx-0">
                                            <div class="col-lg px-2">
                                                <div class="form-field">
                                                  <div class="form-field__control">
                                                      <label for="call-3" class="form-field__label">Meeting Name</label>
                                                      <input id="call-3" :value="(editing == 1 ) ? current_lead.name :null" name="name" type="text" class="form-field__input"
                                                          placeholder="Call Type" />
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="col-lg px-2">
                                                <div class="form-field">
                                                    <div class="form-field__control">
                                                        <label for="call-2" class="form-field__label">location</label>
                                                        <input id="call-2" :value="(editing == 1 ) ? current_lead.location :null" name="location" type="text" class="form-field__input"
                                                            placeholder="Related To" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg px-2">
                                              <div class="form-field">
                                                  <div class="form-field__control">
                                                      <label for="call-8" class="form-field__label">confirmed</label>
                                                      <select id="call-8" name="confirmed" class="form-field__input">
                                                          <option value="">N/A</option>
                                                          <option value="1" :selected="(editing == 1 && current_lead.confirmed == 1) ? true :false">Yes</option>
                                                          <option value="2" :selected="(editing == 1 && current_lead.confirmed == 2) ? true :false">no</option>
                                                      </select>
                                                      <div class="form-dropdown-icon">
                                                          <img src="./assets/images/form-drop-down.svg" />
                                                      </div>
                                                  </div>
                                              </div>
                                            </div>
                                            <div class="col-lg px-2">
                                                <div class="form-field">
                                                    <div class="form-field__control">
                                                        <label for="call-4" class="form-field__label"> Meeting Status</label>
                                                        <input id="call-4" :value="(editing == 1 ) ? current_lead.status :null"  name="status" type="text" class="form-field__input"
                                                            placeholder="Outgoing Call Status" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mx-0">
                                            <div class="col-lg px-2">
                                                <div class="form-field">
                                                    <div class="form-field__control">
                                                        <label for="call-5" class="form-field__label">all day</label>
                                                        <select id="call-5" name="all_day" class="form-field__input">
                                                            <option value="">N/A</option>
                                                            <option value="1" :selected="(editing == 1 && current_lead.all_day == 1) ? true :false">Yes</option>
                                                            <option value="2" :selected="(editing == 1 && current_lead.all_day == 2) ? true :false">no</option>
                                                        </select>
                                                        <div class="form-dropdown-icon">
                                                            <img src="./assets/images/form-drop-down.svg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg px-2">
                                                <div class="form-field">
                                                      <div class="form-field__control">
                                                          <select id="contact-7" name="callable" class="form-field__input js-example-basic-single">
                                                            <option  value="" >Select Account Name</option>

                                                            @foreach($accounts as $account)

                                                              <option value="account,{{$account->id}}" :selected="(editing == 1 &&  {{$account->id}} == current_lead.meetingable_id) ? true :false">{{$account->getFieldByName('surname')['value'] }}</option>

                                                              @endforeach

                                                              @foreach($userLeads as $accountt)

                                                                <option  value="lead,{{$accountt->id}}" :selected="(editing == 1  && {{$accountt->id}} == current_lead.meetingable_id) ? true :false">{{$accountt->getFieldByName('surname')['value'] }}</option>

                                                                @endforeach

                                                          </select>
                                                      </div>
                                                </div>
                                            </div>
                                            <div class="col-lg px-2">
                                                <div class="form-field">
                                                    <div class="form-field__control">
                                                        <label for="call-7" class="form-field__label">Source</label>
                                                        <input id="call-7" :value="(editing == 1 ) ? current_lead.source :null" name="source" type="text" class="form-field__input"
                                                            placeholder="Subject" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg px-2">

                                            </div>
                                        </div>
                                        <div class="row mx-0">
                                            <div class="col-lg px-2">
                                                <div class="form-field mb-0">
                                                    <div class="form-field__control">
                                                        <label for="call-9" class="form-field__label">from</label>
                                                        <input id="call-9" :value="(editing == 1 ) ? new Date(current_lead.from).toISOString().substring(0,new Date(current_lead.from).toISOString().length-1) :null" name="from"  type="datetime-local" class="form-field__input"
                                                            placeholder="from" />

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg px-2">
                                                <div class="form-field mb-0">
                                                    <div class="form-field__control">
                                                        <label for="call-11" class="form-field__label">to</label>
                                                        <input id="call-11" :value="(editing == 1 ) ? new Date(current_lead.to).toISOString().substring(0,new Date(current_lead.to).toISOString().length-1) :null" name="to"  type="datetime-local" class="form-field__input"
                                                            placeholder="to" />
                                                                              </div>
                                                </div>
                                            </div>

                                            <div class="col-lg d-flex justify-content-end align-items-end col-lg px-2 ">
                                                <a href="#" class="btn-admin-default ml-3" data-dismiss="modal" v-on:click="editing = 0"><img src="assets/images/default-close.svg" class="mr-2"/> Cancel</a>
                                                <button type="submit"  class="btn-admin-primary ml-3"><img src="./assets/images/feather-save.svg" class="mr-2"/> Save</button>
                                            </div>

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




  </main>
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
    searching:true,
    dom: 'Bfrtip',
       buttons: [
           'copy',
           'csv',
           'excel',
           'pdf',

       ],

} );
})
const app = new Vue({
    el: '#app',

    data() {
      return {
        leads: {!! json_encode($leads) !!},
        editing:0,
        current_lead:{},
        stages: {!! json_encode($stages) !!},

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
                obj.name = data.name;
                obj.location = data.location;
                obj.source = data.source;
                obj.meetingable_type = data.meetingable_type;
                obj.status = data.status;
                obj.meetingable_id = data.meetingable_id;
                obj.id = data.id;
                obj.updated_at = data.updated_at;
                obj.meetingable = data.meetingable;
                obj.confirmed = data.confirmed;
                obj.created_at = data.created_at;
                obj.all_day = data.all_day;

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
@endpush
