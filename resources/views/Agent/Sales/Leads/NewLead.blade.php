@extends('Agent.Layout.App')
@section('title', 'Leads')

@section('content')
<!-- Page Body Start -->
<main class="pb-3">
    <!-- Page Title and Breadcrumb Start -->
    <div class="page-title-breadcrumb mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-title">
                        {{$type}} Lead
                    </div>
                </div>
                <div class="col-auto">
                    <div class="breadcrumb-box">
                        <ul>
                            <li>Sales</li>
                            <li>Leads</li>
                            <li><a href="/new-leads.html">{{$type}} Lead</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title and Breadcrumb End -->

    <!-- Form box Start -->
    <div class="setting-box">
        <div class="container-fluid">
          <form enctype="multipart/form-data" method="post" action="@if($type == 'add') {{route('NewLeadAction')}} @else /leads/edit/action/{{$lead->id}} @endif" >
            @csrf
            <div class="row">
                <div class="col-lg d-flex justify-content-end">
                    <a href="#" class="btn-admin-default">Cancel</a>
                    <button type="submit" class="btn-admin-primary ml-3">Save</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card-box my-3 px-2 py-3">
                        <div class="row setting-title-box px-2 mb-3">
                            <div class="col">
                                <h2>Profile Picture</h2>
                            </div>
                        </div>
                        <div class="setting-form-box">
                            <div class="row px-2">
                                <div class="col-lg-auto col-sm-12 px-2">
                                    <div class="profile-box pl-2">
                                      <div class="profile-img m-auto" ><img style="" id="image" src="{{($lead->getFirstMediaUrl()) ? $lead->getFirstMediaUrl() : '/assets/images/user-outline.svg' }}"/></div>
                                        <input type="file" style="display:none" onchange="readURL(this);" name="file" id="image_input" />
                                        <div class="profile-user-name">Lead Image</div>
                                    </div>
                                </div>

                                </div>
                            </div>
                        </div>
                    </div>





                @foreach($fields as $index => $field)
                    @if($index != 0)
                        <!-- if not first item  -->
                            <!-- if the same group -->
                            @if($fields[$index-1]['extra']['group'] == $field['extra']['group'])
                                <div class="col-lg-2 px-2">
                                    <div class="form-field">
                                        <div class="form-field__control form-field--is-active">
                                            <label for="lead-{{$index+900}}" class="form-field__label">{{$field->label}}</label>
                                            @if($field->type == 'text' )
                                                <textarea value="{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}" name="{{$field->name}}" id="lead-{{$index+900}}" type="{{$field->type}}" class="form-field__input"
                                                          placeholder="{{$field['label']}}" @foreach($field->rules as $rule) @if($rule->rule == "required") required @endif @endforeach >{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}</textarea>
                                            @elseif($field->type == 'date' || $field->type == 'time' || $field->type == 'datetime'|| $field->type == 'email'  || $field->type == 'number')
                                                <input value="{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}" name="{{$field->name}}" id="lead-{{$index+900}}" type="{{$field->type}}" class="form-field__input"
                                                       placeholder="{{$field['label']}}" style="height: 65px" @foreach($field->rules as $rule) @if($rule->rule == "required") required @endif @endforeach>
                                            @elseif($field->type = 'select')
                                                <select name="{{$field->name}}" id="lead-{{$index+900}}"  class="form-field__input " @foreach($field->rules as $rule) @if($rule->rule == "required") required @endif @endforeach>
                                                    <option value=""  >N/A</option>
                                                    @if(isset($field['extra']['options']))
                                                        @foreach($field['extra']['options'] as $option)
                                                            <option value="{{$option}}" @if(old($field->name,$lead->industry_id) == $option ) selected @endif>{{$option}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <div class="form-dropdown-icon" onclick='$("#lead-{{$index+900}}").click() '>
                                                    <img src="/assets/images/form-drop-down.svg" />
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- if end of row -->

                                <!-- end if end of row -->
                            @if($fields->count() == $index+1)
                                <!-- closing previous group -->
                </div>
            </div>
              <div class="col-lg-auto col-sm-12  px-2">
                  <div class="profile-box empty-box">
                  </div>
              </div>
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
        <div class="col-lg-auto col-sm-12  px-2">
            <div class="profile-box empty-box">
            </div>
        </div>
        </div>
        </div>
        </div>
        <!-- end end prevours group -->
        <!-- start new group -->
        <div class="card-box my-3 px-2 mt-4 py-3">
            <div class="row setting-title-box px-2 mb-3">
                <div class="col">
                    <h2>{{$field['extra']['group']}}</h2>
                </div>
            </div>
            <div class="setting-form-box">
                <div class="row px-2">
                    <div class="col px-2">
                        <div class="row mx-0">

                            <!-- add field -->
                            <div class="col-lg-2 px-2">
                                <div class="form-field">
                                    <div class="form-field__control form-field--is-active">
                                        <label for="lead-{{$index+900}}" class="form-field__label">{{$field->label}}</label>
                                        @if($field->type == 'text' )
                                            <textarea value="{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}" name="{{$field->name}}" id="lead-{{$index+900}}" type="{{$field->type}}" class="form-field__input"
                                                      placeholder="{{$field['label']}}" @foreach($field->rules as $rule) @if($rule->rule == "required") required @endif @endforeach >{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}</textarea>
                                        @elseif($field->type == 'date' || $field->type == 'time' || $field->type == 'datetime'|| $field->type == 'email'  || $field->type == 'number')
                                            <input value="{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}" name="{{$field->name}}" id="lead-{{$index+900}}" type="{{$field->type}}" class="form-field__input"
                                                   placeholder="{{$field['label']}}" style="height: 65px" @foreach($field->rules as $rule) @if($rule->rule == "required") required @endif @endforeach>
                                        @elseif($field->type = 'select')
                                            <select name="{{$field->name}}" id="lead-{{$index+900}}"  class="form-field__input " @foreach($field->rules as $rule) @if($rule->rule == "required") required @endif @endforeach>
                                                <option value=""  >N/A</option>
                                                @if(isset($field['extra']['options']))
                                                    @foreach($field['extra']['options'] as $option)
                                                        <option value="{{$option}}" @if(old($field->name,$lead->industry_id) == $option ) selected @endif>{{$option}}</option>
                                                    @endforeach
                                                @endif

                                            </select>
                                            <div class="form-dropdown-icon" onclick='$("#lead-{{$index+900}}").click() '>
                                                <img src="/assets/images/form-drop-down.svg" />
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- end start new group -->
                        @endif
                        <!-- end if not first item -->
                            <!-- start first item -->
                            @else
                                <div class="card-box my-3 px-2 mt-4 py-3">
                                    <div class="row setting-title-box px-2 mb-3">
                                        <div class="col">
                                            <h2>{{$field['extra']['group']}}</h2>
                                        </div>
                                    </div>
                                    <div class="setting-form-box">
                                        <div class="row px-2">
                                            <div class="col px-2">
                                                <div class="row mx-0">
                                                    <div class="col-lg-2 px-2">
                                                        <div class="form-field">
                                                            <div class="form-field__control form-field--is-active">
                                                                <label for="lead-{{$index+900}}" class="form-field__label">{{$field->label}}</label>
                                                                @if($field->type == 'text' )
                                                                    <textarea value="{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}" name="{{$field->name}}" id="lead-{{$index+900}}" type="{{$field->type}}" class="form-field__input"
                                                                              placeholder="{{$field['label']}}" @foreach($field->rules as $rule) @if($rule->rule == "required") required @endif @endforeach >{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}</textarea>
                                                                @elseif($field->type == 'date' || $field->type == 'time' || $field->type == 'datetime'|| $field->type == 'email'  || $field->type == 'number')
                                                                    <input value="{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}" name="{{$field->name}}" id="lead-{{$index+900}}" type="{{$field->type}}" class="form-field__input"
                                                                           placeholder="{{$field['label']}}" style="height: 65px" @foreach($field->rules as $rule) @if($rule->rule == "required") required @endif @endforeach>
                                                                @elseif($field->type = 'select')
                                                                    <select name="{{$field->name}}" id="lead-{{$index+900}}"  class="form-field__input " @foreach($field->rules as $rule) @if($rule->rule == "required") required @endif @endforeach>
                                                                        <option value=""  >N/A</option>
                                                                        @if(isset($field['extra']['options']))
                                                                            @foreach($field['extra']['options'] as $option)
                                                                                <option value="{{$option}}" @if(old($field->name,$lead->industry_id) == $option ) selected @endif>{{$option}}</option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>
                                                                    <div class="form-dropdown-icon" onclick='$("#lead-{{$index+900}}").click() '>
                                                                        <img src="/assets/images/form-drop-down.svg" />
                                                                    </div>
                                                                @endif                                      </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                <!-- end first item -->
                                                    @endforeach
                </div>
            </div>

        </div>
    </div>
  </form>
    <!-- Form box End -->
</main>
@push('scripts')
<script>

$(document).ready(()=>{
  $("#image").click(()=>{
    $("#image_input").click();
  })
})
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image')
                    .attr('src', e.target.result)
                    .width('100%')
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function(){
        if($('.form-field__input').val() !='' ) {
              $('.form-field__input').addClass('form-field--is-active');
        }
      })
      function checkForInput(element) {
  // element is passed to the function ^



}

// The lines below are executed on page load
$('.form-field__input').each(function() {
  checkForInput(this);
console.log($(this).val())
  if ($(this).val() != ""  ) {
    $(this).parent().parent().addClass('form-field--is-active');
  }
});
</script>


@endpush




@endsection
