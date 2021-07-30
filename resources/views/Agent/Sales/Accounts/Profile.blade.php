@extends('Agent.Layout.App3')
@section('title', 'Accounts')

@section('content')



<div class="vb__layout__content">
  <div class="vb__breadcrumbs">
<div class="vb__breadcrumbs__path">
<a href="javascript: void(0);">Home</a>
<span>
<span class="vb__breadcrumbs__arrow"></span>
<span>Accounts</span>
</span>
<span>
<span class="vb__breadcrumbs__arrow"></span>
<strong class="vb__breadcrumbs__current">Profile</strong>
</span>
</div>
</div>
  <div class="vb__utils__content">
    <div class="row">
<div class="col-xl-2 col-lg-12">
<div class="card">
<div class="card-body">
  <div class="d-flex flex-wrap flex-column align-items-center">
    <div class="vb__utils__avatar vb__utils__avatar--size64 mb-3">
      <img src="/clearui/components/css/img/avatars/avatar-2.png" alt="Mary Stanform" />
    </div>
    <div class="text-center">
      <div class="text-dark font-weight-bold font-size-18">{{$account->getFieldByName('surname')->value}}</div>
      <div class="text-uppercase font-size-12 mb-3">Account</div>
      <!-- <button class="btn btn-primary btn-with-addon">
        <span class="btn-addon">
          <i class="btn-addon-icon fe fe-plus-circle"></i>
        </span>
        Request Access
      </button> -->
    </div>
  </div>
</div>
</div>
<!-- <div class="card text-white bg-primary">
<div class="card-body">
  <div class="d-flex mb-1">
    <div class="text-uppercase font-weight-bold mr-auto">
      Revenue
    </div>
    <div>
      +20% Goal Reached
    </div>
  </div>
  <div class="d-flex mb-2">
    <div class="font-size-24 font-weight-bold mr-auto">+3,125</div>
    <div class="font-size-24">5,000</div>
  </div>
  <div class="progress">
    <div class="progress-bar bg-success" style="width: 60%" role="progressbar" aria-valuenow="60"
      aria-valuemin="0" aria-valuemax="100"></div>
  </div>
</div>
</div> -->
<!-- <div class="card">
<div class="card-body">
  <p class="text-dark font-size-48 font-weight-bold mb-2">
    $29,931
  </p>
  <p class="text-uppercase text-muted mb-3">
    Revenue today
  </p>
  <p class="mb-4">
    Lorem ipsum dolor sit amit,consectetur eiusmdd tempory incididunt ut labore et dolore
    magna elit
  </p>
  <a href="javascript: void(0);" class="btn btn-outline-primary mb-1">View history</a>
</div>
</div> -->
<!-- <div class="card">
<div class="card-body">
  <ul class="list-unstyled">
    <li class="vb__l19__item">
      <div class="vb__l19__itemTime mr-3">16:00</div>
      <div class="vb__l19__itemSeparator">
        <div class="vb__utils__donut vb__utils__donut--danger mr-3"></div>
      </div>
      <div>
        Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore
        magna elit enim at minim veniam quis nostrud
      </div>
    </li>
    <li class="vb__l19__item">
      <div class="vb__l19__itemTime mr-3">15:28</div>
      <div class="vb__l19__itemSeparator">
        <div class="vb__utils__donut vb__utils__donut--danger mr-3"></div>
      </div>
      <div>
        David Beckham was registered as administrator
      </div>
    </li>
    <li class="vb__l19__item">
      <div class="vb__l19__itemTime mr-3">14:26</div>
      <div class="vb__l19__itemSeparator">
        <div class="vb__utils__donut vb__utils__donut--danger mr-3"></div>
      </div>
      <div>
        Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore
      </div>
    </li>
    <li class="vb__l19__item">
      <div class="vb__l19__itemTime mr-3">13:22</div>
      <div class="vb__l19__itemSeparator">
        <div class="vb__utils__donut vb__utils__donut--danger mr-3"></div>
      </div>
      <div>
        Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore
        magna elit enim at minim veniam quis nostrud
      </div>
    </li>
  </ul>
</div>
</div> -->
</div>
<div class="col-xl-10 col-lg-12">
<div class="card">
<div class="card-header card-header-flex flex-column">
  <div class="d-flex flex-wrap vb__profile__info pt-3 pb-4 border-bottom mb-3">
    <div class="mr-5">
      <div class="text-dark font-size-21 font-weight-bold">{{$account->getFieldByName('surname')->value}}</div>
      <div class="text-gray-6">{{$account->id}}</div>
    </div>
    <div class="mr-5 text-center">
      <div class="text-dark font-size-21 font-weight-bold">{{$account->calls->count()}}</div>
      <div class="text-gray-6">Calls</div>
    </div>
    <div class="mr-5 text-center">
      <div class="text-dark font-size-21 font-weight-bold">{{$account->meetings->count()}}</div>
      <div class="text-gray-6">Meetings</div>
    </div>
    <div class="mr-5 text-center">
      <div class="text-dark font-size-21 font-weight-bold">{{$account->tasks->count()}}</div>
      <div class="text-gray-6">Tasks</div>
    </div>
    <div class="mr-5 text-center">
      <div class="text-dark font-size-21 font-weight-bold">{{$account->assiegned_attachments->count()}}</div>
      <div class="text-gray-6">Attachments</div>
    </div>
  </div>
  <div class="d-flex align-items-stretch mt-auto">
    <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-bold nav-tabs-noborder nav-tabs-stretched">

      <li class="nav-item">
        <a class="nav-link @if($group_id == null) active @endif"  href="#tab-activities-content" data-toggle="tab" aria-selected="true"
          id="tab-activities">Activities</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " onclick="correct_table()" href="#tab-wall-content" data-toggle="tab" aria-selected="true"
          id="tab-wall">Calls</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#tab-messages-content" onclick="correct_table()" data-toggle="tab" aria-selected="false"
          id="tab-messages">Meetings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#tab-settings-content" onclick="correct_table()" data-toggle="tab" id="tab-settings">Tasks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#tab-info-content" onclick="correct_table()" data-toggle="tab" id="tab-info">Info</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#tab-cases-content" onclick="correct_table()" data-toggle="tab" id="tab-cases">Cases</a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if($group_id != null) active @endif" href="#tab-attachments-content" onclick="correct_table()" data-toggle="tab" id="tab-attachments">Attachments</a>
      </li>
    </ul>
  </div>
</div>
<div class="card-body">
  <div class="tab-content">
    <div class="tab-pane fade show @if($group_id == null) active @endif" id="tab-activities-content" role="tabpanel"
      aria-labelledby="tab-activities-content">

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="vb__jira__agile__board card height-500 bg-light py-3 px-2">
            <h3 class="font-weight-bold text-dark font-size-18 mb-3">Calls</h3>
            <div class="vb__customScroll">
              <ul class="vb__jira__agile__boardCards">

                @foreach($account->calls as $kcalls)

                <li class="vb__jira__agile__card">
                  <a href="/calls/edit/{{$kcalls->id}}">
                  <div class="vb__jira__agile__cardContent">
                    <div class="vb__jira__agile__cardFlag bg-primary"></div>
                    <div class="d-flex flex-wrap-reverse align-items-center">
                      <h5 class="text-dark font-size-18 mt-2 mr-auto">    {{($kcalls->getFieldById(180)) ? $kcalls->getFieldById(180)->value :null}}</h5>
                      <i class="fe fe-phone  font-size-30 flex-shrink-0"></i>
                    </div>
                    <!-- @foreach($callsf as $field)

                    {{$field->id}} : {{$field->name}}//
                    <div class="text-gray-5">

                  </div>
                    @endforeach -->
                    <div class="text-gray-5 mb-2"> Start :  {{($kcalls->getFieldById(183)) ? $kcalls->getFieldById(183)->value :null}}</div>
                    <div class="d-flex align-items-center flex-wrap pb-2">

                      <div class="text-gray-5">
                      Status:  {{($kcalls->getFieldById(182)) ? $kcalls->getFieldById(182)->value :null}}
                      </div>
                    </div>
                  </div>
                </a>
                </li>
                @endforeach

              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="vb__jira__agile__board card height-500 bg-light py-3 px-2">
            <h3 class="font-weight-bold text-dark font-size-18 mb-3">Meetings</h3>
            <div class="vb__customScroll">
              <ul class="vb__jira__agile__boardCards vb__customScroll">

                @foreach($account->meetings as $kmeetings)

                <li class="vb__jira__agile__card">
                  <a href="/meetings/edit/{{$kmeetings->id}}">
                  <div class="vb__jira__agile__cardContent">
                    <div class="vb__jira__agile__cardFlag bg-success"></div>
                    <div class="d-flex flex-wrap-reverse align-items-center">
                      <h5 class="text-dark font-size-18 mt-2 mr-auto">{{($kmeetings->getFieldById(188)) ? $kmeetings->getFieldById(188)->value :null}}</h5>
                      <i class="fe fe-calendar text-success font-size-30 flex-shrink-0"></i>
                    </div>
                    <div class="text-gray-5 mb-2">from : {{($kmeetings->getFieldById(194)) ? $kmeetings->getFieldById(194)->value :null}}</div>
                    <div class="d-flex align-items-center flex-wrap pb-2">
                      <!-- <div class="vb__utils__avatar vb__utils__avatar--rounded vb__utils__avatar--size27 flex-shrink-0 mr-2">
                        <img src="../../components/css/img/avatars/2.jpg" alt="Mary Stanform" />
                      </div> -->
                      <!-- @foreach($meetingsf as $field)

                      {{$field->id}} : {{$field->name}}//
                      <div class="text-gray-5">

                    </div>
                      @endforeach -->
                      <div class="text-gray-5">
                        status : {{($kmeetings->getFieldById(191)) ? $kmeetings->getFieldById(191)->value :null}}
                      </div>
                    </div>
                  </div>
                </a>
                </li>
                @endforeach


              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="vb__jira__agile__board card height-500 bg-light py-3 px-2">
            <h3 class="font-weight-bold text-dark font-size-18 mb-3">Tasks</h3>
            <div class="vb__customScroll">
              <ul class="vb__jira__agile__boardCards">


                @foreach($account->tasks as $ktasks)

                <li class="vb__jira__agile__card">
                  <a href="/tasks/edit/{{$ktasks->id}}">
                  <div class="vb__jira__agile__cardContent">
                    <div class="vb__jira__agile__cardFlag bg-danger"></div>
                    <div class="d-flex flex-wrap-reverse align-items-center">
                      <h5 class="text-dark font-size-18 mt-2 mr-auto">{{($ktasks->getFieldById(200)) ? $ktasks->getFieldById(200)->value :null}}</h5>
                      <i class="fa fa-tasks text-danger font-size-30 flex-shrink-0"></i>
                    </div>
                    <div class="text-gray-5 mb-2">due date : {{($ktasks->getFieldById(201)) ? $ktasks->getFieldById(201)->value :null}}</div>
                    <div class="d-flex align-items-center flex-wrap pb-2">
                      <!-- @foreach($tasksf as $field)

                      {{$field->id}} : {{$field->name}}//
                      <div class="text-gray-5">

                    </div>
                      @endforeach -->

                      <!-- <div class="vb__utils__avatar vb__utils__avatar--rounded vb__utils__avatar--size27 flex-shrink-0 mr-2">
                        <img src="../../components/css/img/avatars/2.jpg" alt="Mary Stanform" />
                      </div> -->
                      <div class="text-gray-5">
                        status : {{($ktasks->getFieldById(198)) ? $ktasks->getFieldById(198)->value :null}}
                      </div>
                    </div>
                  </div>
                </a>
                </li>
                @endforeach

              </ul>
            </div>
          </div>
        </div>

      </div>




    </div>


    <div class="tab-pane fade show " id="tab-wall-content" role="tabpanel"
      aria-labelledby="tab-wall-content">
      <!-- calls -->
      <div class="card">
<div class="card-header card-header-flex">
<div class="d-flex flex-column justify-content-center mr-auto">
<h5 class="mb-0">Callls</h5>
</div>
<div class="d-flex flex-column justify-content-center">
<a class="btn btn-primary" href="{{route('NewCall')}}">New Call</a>
</div>

</div>
<div class="card-body">
<table class="table table-hover nowrap stripe row-border order-column" id="calls">
<thead class="thead-default">
<tr>
<th>ID</th>
@foreach($callsf as $field)
  <th scope="col">{{$field->label}}</th>

@endforeach
<th scope="col">User</th>


<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($account->calls as $lead)
<tr>




<td style="Background-color:#f2f4f8"><a href="javascript: void(0);" style="width:100%" class="btn btn-sm btn-light">{{$lead->id}}</a></td>

@foreach($callsf as $field)
<td>{{($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null}}</td>
@endforeach
<td>{{$lead->callable->getFieldByName('surname')['value']}}</td>
<td style="Background-color:#f2f4f8">
<a href="/calls/edit/{{$lead->id}}" class="btn btn-sm btn-light mr-2"
><i class="fe fe-edit mr-2"></i> View
</a>
<a href="/calls/delete/{{$lead->id}}" class="btn btn-sm btn-light">
<small
  ><i class="fe fe-trash mr-2"><!-- --></i></small
>
Remove</a
>
</td>
</tr>

@endforeach




</tbody>

</table>
</div>
</div>
    </div>


    <div class="tab-pane fade" id="tab-messages-content" role="tabpanel" aria-labelledby="tab-messages-content">

      <!-- meetings -->
      <div class="card">
<div class="card-header card-header-flex">
<div class="d-flex flex-column justify-content-center mr-auto">
<h5 class="mb-0">Meeting</h5>
</div>
<div class="d-flex flex-column justify-content-center">
<a class="btn btn-primary" href="{{route('NewMeeting')}}">New Meeting</a>
</div>

</div>
<div class="card-body">
<table class="table table-hover nowrap stripe row-border order-column" id="meetings" >
<thead class="thead-default">
<tr>
<th>ID</th>
@foreach($meetingsf as $field)
  <th scope="col">{{$field->label}}</th>

@endforeach
<th scope="col">User</th>


<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($account->meetings as $lead)
<tr>




<td style="Background-color:#f2f4f8"><a href="javascript: void(0);" style="width:100%" class="btn btn-sm btn-light">{{$lead->id}}</a></td>

@foreach($meetingsf as $field)
<td>{{($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null}}</td>
@endforeach
<td>{{$lead->meetingable->getFieldByName('surname')['value']}}</td>
<td style="Background-color:#f2f4f8">
<a href="/meetings/edit/{{$lead->id}}" class="btn btn-sm btn-light mr-2"
><i class="fe fe-edit mr-2"></i> View
</a>
<a href="/meetings/delete/{{$lead->id}}" class="btn btn-sm btn-light">
<small
  ><i class="fe fe-trash mr-2"><!-- --></i></small
>
Remove</a
>
</td>
</tr>

@endforeach




</tbody>

</table>
</div>
</div>


    </div>




    <div class="tab-pane fade" id="tab-settings-content" role="tabpanel" aria-labelledby="tab-settings-content">

      <div class="card">
  <div class="card-header card-header-flex">
  <div class="d-flex flex-column justify-content-center mr-auto">
  <h5 class="mb-0">Task</h5>
  </div>
  <div class="d-flex flex-column justify-content-center">
  <a class="btn btn-primary" href="{{route('NewTask')}}">New Tasks</a>
  </div>

  </div>
  <div class="card-body">
  <table class="table table-hover nowrap stripe row-border order-column" id="example1">
  <thead class="thead-default">
  <tr>
  <th>ID</th>
  @foreach($tasksf as $field)
  <th scope="col">{{$field->label}}</th>

  @endforeach
  <th scope="col">User</th>


  <th>Action</th>
  </tr>
  </thead>
  <tbody>
  @foreach($account->tasks as $lead)
  <tr>




  <td style="Background-color:#f2f4f8"><a href="javascript: void(0);" style="width:100%" class="btn btn-sm btn-light">{{$lead->id}}</a></td>

  @foreach($tasksf as $field)
  <td>{{($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null}}</td>
  @endforeach
  <td>{{$lead->taskable->getFieldByName('surname')['value']}}</td>
  <td style="Background-color:#f2f4f8">
  <a href="/tasks/edit/{{$lead->id}}" class="btn btn-sm btn-light mr-2"
  ><i class="fe fe-edit mr-2"></i> View
  </a>
  <a href="/tasks/delete/{{$lead->id}}" class="btn btn-sm btn-light">
  <small
  ><i class="fe fe-trash mr-2"><!-- --></i></small
  >
  Remove</a
  >
  </td>
  </tr>

  @endforeach




  </tbody>

  </table>
  </div>
  </div>

    </div>




    <div class="tab-pane fade" id="tab-info-content" role="tabpanel" aria-labelledby="tab-info-content">

    <form method="post" action="@if($type == 'add') {{route('NewAccountAction')}} @else /accounts/edit/action/{{$account->id}} @endif"  enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="back_url" value="{{Request::url()}}"/>

      @foreach($accountsf as $index => $field)
      @if($index != 0)
      <!-- if not first item  -->
      <!-- if the same group -->
      @if($accountsf[$index-1]['extra']['group'] == $field['extra']['group'])
      <div class="form-group col-md-4">
                <label for="lead-{{$index+900}}" class="form-field__label">{{$field->label}}</label>
                @if($field->type == 'text' || $field->type == 'number' || $field->type == 'email' )
                <input  name="{{$field->name}}" id="lead-{{$index+900}}" type="{{$field->type}}"                     class="form-control"

                       placeholder="{{$field['label']}}" value="{{old($field->name,($account->getFieldById($field->id)) ? $account->getFieldById($field->id)->value :null)}}" @foreach($field->rules as $rule) @if($rule->rule == "required") required @endif @endforeach>
                    @elseif($field->type == 'date' || $field->type == 'time' || $field->type == 'datetime'  )
                    <input value="{{old($field->name,($account->getFieldById($field->id)) ? $account->getFieldById($field->id)->value :null)}}" name="{{$field->name}}" id="lead-{{$index+900}}"
                      data-toggle="datetimepicker" data-target="#lead-{{$index+900}}"
                      @foreach($field->rules as $rule) @if($rule->rule == "required") required @endif @endforeach                 class="form-control"

                              placeholder="{{$field['label']}}"  >
                              <script>
                              $('#lead-{{$index+900}}').datetimepicker({
                                icons: {
                                  time: 'fa fa-clock-o',
                                  date: 'fa fa-calendar',
                                  up: 'fa fa-arrow-up',
                                  down: 'fa fa-arrow-down',
                                  previous: 'fa fa-arrow-left',
                                  next: 'fa fa-arrow-right',
                                },
                              })
                              </script>
                @elseif($field->type = 'select')
                    <select name="{{$field->name}}" id="lead-{{$index+900}}"
                      @foreach($field->rules as $rule) @if($rule->rule == "required") required @endif @endforeach             class="form-control">
                        <option value=""  >N/A</option>
                        @if(isset($field['extra']['options']))
                        @foreach($field['extra']['options'] as $option)
                            <option value="{{$option}}" @if(old($field->name,($account->getFieldById($field->id)) ? $account->getFieldById($field->id)->value :null) == $option ) selected @endif>{{$option}}</option>
                        @endforeach
                        @endif
                    </select>

                @endif
      </div>
        <!-- if end of row -->

        <!-- end if end of row -->
        @if($accountsf->count() == $index+1)
        <!-- closing previous group -->
      </div>




  </div>
  </div>
          <!-- end closing previous group -->
          @endif
        <!-- end if the same group -->
        <!-- if new group -->
      @else
      <!-- end previous group -->
    </div>




  </div>
  </div>
    <!-- end end prevours group -->
    <!-- start new group -->
    <div class="card">
    <div class="card-body">
    <h4 class="mb-4">
    <strong>{{$field['extra']['group']}}</strong>
    </h4>
    <div class="form-row">



                  <!-- add field -->
                  <div class="form-group col-md-4">
                            <label for="lead-{{$index+900}}" class="form-field__label">{{$field->label}}</label>
                            @if($field->type == 'text' || $field->type == 'number' || $field->type == 'email' )
                            <input  name="{{$field->name}}" id="lead-{{$index+900}}" type="{{$field->type}}"                     class="form-control"

                                   placeholder="{{$field['label']}}" value="{{old($field->name,($account->getFieldById($field->id)) ? $account->getFieldById($field->id)->value :null)}}" @foreach($field->rules as $rule) @if($rule->rule == "required") required @endif @endforeach>
                                @elseif($field->type == 'date' || $field->type == 'time' || $field->type == 'datetime'  )
                                <input value="{{old($field->name,($account->getFieldById($field->id)) ? $account->getFieldById($field->id)->value :null)}}" name="{{$field->name}}" id="lead-{{$index+900}}"
                                  data-toggle="datetimepicker" data-target="#lead-{{$index+900}}"
                                  @foreach($field->rules as $rule) @if($rule->rule == "required") required @endif @endforeach                 class="form-control"

                                          placeholder="{{$field['label']}}"  >
                                          <script>
                                          $('#lead-{{$index+900}}').datetimepicker({
                                            icons: {
                                              time: 'fa fa-clock-o',
                                              date: 'fa fa-calendar',
                                              up: 'fa fa-arrow-up',
                                              down: 'fa fa-arrow-down',
                                              previous: 'fa fa-arrow-left',
                                              next: 'fa fa-arrow-right',
                                            },
                                          })
                                          </script>
                            @elseif($field->type = 'select')
                                <select name="{{$field->name}}" id="lead-{{$index+900}}"
                                  @foreach($field->rules as $rule) @if($rule->rule == "required") required @endif @endforeach             class="form-control">
                                    <option value=""  >N/A</option>
                                    @if(isset($field['extra']['options']))
                                    @foreach($field['extra']['options'] as $option)
                                        <option value="{{$option}}" @if(old($field->name,($account->getFieldById($field->id)) ? $account->getFieldById($field->id)->value :null) == $option ) selected @endif>{{$option}}</option>
                                    @endforeach
                                    @endif
                                </select>

                            @endif
                  </div>
            <!-- end start new group -->
      @endif
      <!-- end if not first item -->
      <!-- start first item -->
      @else
      <div class="card">
      <div class="card-body">
      <h4 class="mb-4">
      <strong>{{$field['extra']['group']}}</strong>
      </h4>
      <div class="form-row">


        <div class="form-group col-md-4">
                  <label for="lead-{{$index+900}}" class="form-field__label">{{$field->label}}</label>
                  @if($field->type == 'text' || $field->type == 'number' || $field->type == 'email' )
                  <input  name="{{$field->name}}" id="lead-{{$index+900}}" type="{{$field->type}}"                     class="form-control"

                         placeholder="{{$field['label']}}" value="{{old($field->name,($account->getFieldById($field->id)) ? $account->getFieldById($field->id)->value :null)}}" @foreach($field->rules as $rule) @if($rule->rule == "required") required @endif @endforeach>
                      @elseif($field->type == 'date' || $field->type == 'time' || $field->type == 'datetime'  )
                      <input value="{{old($field->name,($account->getFieldById($field->id)) ? $account->getFieldById($field->id)->value :null)}}" name="{{$field->name}}" id="lead-{{$index+900}}"
                        data-toggle="datetimepicker" data-target="#lead-{{$index+900}}"
                        @foreach($field->rules as $rule) @if($rule->rule == "required") required @endif @endforeach                 class="form-control"

                                placeholder="{{$field['label']}}"  >
                                <script>
                                $('#lead-{{$index+900}}').datetimepicker({
                                  icons: {
                                    time: 'fa fa-clock-o',
                                    date: 'fa fa-calendar',
                                    up: 'fa fa-arrow-up',
                                    down: 'fa fa-arrow-down',
                                    previous: 'fa fa-arrow-left',
                                    next: 'fa fa-arrow-right',
                                  },
                                })
                                </script>
                  @elseif($field->type = 'select')
                      <select name="{{$field->name}}" id="lead-{{$index+900}}"
                        @foreach($field->rules as $rule) @if($rule->rule == "required") required @endif @endforeach             class="form-control">
                          <option value=""  >N/A</option>
                          @if(isset($field['extra']['options']))
                          @foreach($field['extra']['options'] as $option)
                              <option value="{{$option}}" @if(old($field->name,($account->getFieldById($field->id)) ? $account->getFieldById($field->id)->value :null) == $option ) selected @endif>{{$option}}</option>
                          @endforeach
                          @endif
                      </select>

                  @endif
        </div>
      @endif
      <!-- end first item -->
        @endforeach








      <div class="form-actions">
        <button type="submit" class="btn btn-success px-5">Submit</button>
        <a type="button" href="{{url()->previous()}}" class="btn btn-default px-5">Cancel</a>
      </div>
    </form>
  </div>


  <div class="tab-pane fade" id="tab-assigned-attachments-content" role="tabpanel" aria-labelledby="tab-assigned-attachments-content">

    <div class="card">
    <div class="card-header card-header-flex">
    <div class="d-flex flex-column justify-content-center mr-auto">
    <h5 class="mb-0">Assigned Attachments</h5>
    </div>
    <div class="d-flex flex-column justify-content-center">
    <a class="btn btn-primary" href="/account/assign/attachment/{{$account->id}}">New Assign</a>
    </div>

    </div>
    <div class="card-body">
    <table class="table table-hover nowrap stripe row-border order-column" id="example1">
    <thead class="thead-default">
    <tr>
    <th scope="col">Name</th>
    <th scope="col">group</th>
    <th scope="col">file</th>
    <th scope="col">status</th>
    <th scope="col">Action</th>





    </tr>
    </thead>
    <tbody>





    @foreach($account->assiegned_attachments as $lead)
    <tr>
    <td>{{$lead->attachment->name}}</td>
    <td>{{$lead->attachment->group->name}}</td>
    <td><img src="{{$lead->attachment->getFirstMediaUrl()}}" height="50" width="50" /></td>
    <td>{{$lead->attachment->status}}</td>


    <td style="Background-color:#f2f4f8">

    <a href="/account/edit/assign-attachment/{{$lead->id}}" class="btn btn-sm btn-light">
    <small
    ><i class="fe fe-trash mr-2"><!-- --></i></small
    >
    Remove</a
    >
    </td>
    </tr>

    @endforeach







    </tbody>

    </table>
    </div>
    </div>

  </div>

  <div class="tab-pane fade" id="tab-uploaded-attachments-content" role="tabpanel" aria-labelledby="tab-uploaded-attachments-content">


</div>


<div class="tab-pane fade" id="tab-cases-content" role="tabpanel" aria-labelledby="tab-cases-content">


  <div class="card">
  <div class="card-header card-header-flex">
  <div class="d-flex flex-column justify-content-center mr-auto">
  <h5 class="mb-0">Cases</h5>
  </div>
  <div class="d-flex flex-column justify-content-center">
  <a class="btn btn-primary" href="{{route('NewOpportunity')}}">New Case</a>
  </div>

  </div>
  <div class="card-body">
  <table class="table table-hover nowrap stripe row-border order-column" id="example1">
  <thead class="thead-default">
  <tr>
  <th>ID</th>
  @foreach($casesf as $field)
  <th scope="col">{{$field->label}}</th>

  @endforeach


  <th>Action</th>
  </tr>
  </thead>
  <tbody>
  @foreach($account->cases as $lead)
  <tr>




  <td style="Background-color:#f2f4f8"><a href="javascript: void(0);" style="width:100%" class="btn btn-sm btn-light">{{$lead->id}}</a></td>

  @foreach($casesf as $field)
  <td>{{($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null}}</td>
  @endforeach
  <td style="Background-color:#f2f4f8">
  <a href="/opportunities/edit/{{$lead->id}}" class="btn btn-sm btn-light mr-2"
  ><i class="fe fe-edit mr-2"></i> View
  </a>
  <a href="/opportunities/delete/{{$lead->id}}" class="btn btn-sm btn-light">
  <small
  ><i class="fe fe-trash mr-2"><!-- --></i></small
  >
  Remove</a
  >
  </td>
  </tr>

  @endforeach




  </tbody>

  </table>
  </div>
  </div>

</div>
@if($group_id == null)
<div class="tab-pane fade show @if($group_id != null) active @endif " id="tab-attachments-content" role="tabpanel"
  aria-labelledby="tab-attachments-content">

  <div class="card">
  <div class="card-header card-header-flex">
  <div class="d-flex flex-column justify-content-center mr-auto">
  <h5 class="mb-0">Groups</h5>
  </div>
  <div class="d-flex flex-column justify-content-center mr-2">
  <a class="btn btn-primary" href="/groups/add?account_id={{$account->id}}">New Group</a>
  </div>
  <div class="d-flex flex-column justify-content-center">
  <a class="btn btn-primary" href="/account/assign/attachment/{{$account->id}}">Assign Groups</a>
  </div>

  </div>

  <div class="card-body">
  <div class="vb__gallery">

  <div class="vb__gallery__items d-flex flex-wrap">

    @if($account->assiegned_groups->count() == 0)
    <p>No Data</p>
    @else
    @foreach($account->assiegned_groups as $lead)
    <div class="vb__gallery__item">
      <div class="vb__gallery__itemContent">
        <div class="vb__gallery__itemControl">
          <div class="btn-group vb__gallery__itemControlContainer">
            <a href="?group_id={{$lead->id}}" type="button" class="btn">
              <i class="fe fe-download"></i>
            </a>
            <a type="button" href="/marketing/delete/{{$lead->id}}" class="btn">
              <i class="fe fe-trash"></i>
            </a>
          </div>
        </div>
        <img src="https://www.tenforums.com/geek/gars/images/2/types/thumb_14486407500Folder.png"/>
      </div>
      <div class="text-gray-6">
        <p class="text-center">{{$lead->group->name}}</p>

      </div>
    </div>
    @endforeach
    @endif

  </div>
  </div>
  </div>


</div>








  </div>

  @else

  <div class="tab-pane fade show @if($group_id != null) active @endif " id="tab-attachments-content" role="tabpanel"
    aria-labelledby="tab-attachments-content">

      <div class="card">
      <div class="card-header card-header-flex">
      <div class="d-flex flex-column justify-content-center mr-auto">
      <h5 class="mb-0">Group Attachments</h5>
      </div>
      <div class="d-flex flex-column justify-content-center">
      <a class="btn btn-primary" href="/attachments/add/{{$group_id}}?account_id={{$account->id}}">New Attachment</a>
      </div>

      </div>
      <div class="card-body">
      <table class="table table-hover nowrap stripe row-border order-column" id="example1">
      <thead class="thead-default">
      <tr>
      <th scope="col">Name</th>
      <th scope="col">group</th>
      <th scope="col">uploaded file</th>

      <th scope="col">status</th>
      <th scope="col">Action</th>





      </tr>
      </thead>
      <tbody>





      @foreach($group->attachments as $lead)
      <tr>
      <td>{{$lead->name}}</td>
      <td>{{$group->name}}</td>
      <td>@if($account->uploaded_attachments->where('attachment_id',$lead->id)->count() == 0) not uploaded yet @else <a href="{{$account->uploaded_attachments->where('attachment_id',$lead->id)->first()->getFirstMediaUrl()}}">download</a> @endif </td>
      <td>@if($account->uploaded_attachments->where('attachment_id',$lead->id)->count() == 0) not uploaded yet @else <p>{{$account->uploaded_attachments->where('attachment_id',$lead->id)->first()->status}}<p>@endif </td>


      <td style="Background-color:#f2f4f8">

      <a href="/attachments/delete/{{$lead->id}}" class="btn btn-sm btn-light">
      <small
      ><i class="fe fe-trash mr-2"><!-- --></i></small
      >
      </a
      >
      <a href="/attachments/edit/{{$lead->id}}/{{$account->id}}" class="btn btn-sm btn-light">
      <small
      ><i class="fe fe-edit mr-2"><!-- --></i></small
      >
      </a
      >
      @if($account->uploaded_attachments->where('attachment_id',$lead->id)->count() != 0)
      <a href="/uploadedAttachment/editStatus/{{$account->uploaded_attachments->where('attachment_id',$lead->id)->first()->id}}/approved" class="btn btn-sm btn-light">
      <small
      ><i class="fe fe-check mr-2"><!-- --></i></small
      >
      </a
      >
      <a href="/uploadedAttachment/editStatus/{{$account->uploaded_attachments->where('attachment_id',$lead->id)->first()->id}}/declined" class="btn btn-sm btn-light">
      <small
      ><i class="fa fa-times mr-2"><!-- --></i></small
      >
      </a
      >
      <a href="/uploadedAttachment/editStatus/{{$account->uploaded_attachments->where('attachment_id',$lead->id)->first()->id}}/reupload" class="btn btn-sm btn-light">
      <small
      ><i class="fa fa-refresh mr-2"><!-- --></i></small
      >
      </a
      >
      @endif
      </td>
      </tr>

      @endforeach







      </tbody>

      </table>
      </div>
      </div>

    </div>

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

function correct_table(){
  setTimeout(()=>$.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust().draw(),200)
  setTimeout(()=>$.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust().draw(),300)
  setTimeout(()=>$.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust().draw(),500)

}

$(document).ready(function() {
  setTimeout(()=>$.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust().draw(),200)

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
