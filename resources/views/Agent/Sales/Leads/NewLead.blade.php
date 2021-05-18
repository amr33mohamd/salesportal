@extends('Agent.Layout.App2')
@section('title', 'Leads')

@section('content')

<!-- START: forms/basic-forms-elements -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong> Lead</strong>

    </span>
  </div>
  <div class="card-body">

    <div class="row">
      <div class="col-lg-12">
        <div class="mb-5">

          <!-- Vertical Form -->
          <form method="post" action="@if($type == 'add') {{route('NewLeadAction')}} @else /leads/edit/action/{{$lead->id}} @endif"  enctype="multipart/form-data">
            @csrf
            @foreach($fields as $index => $field)
            @if($index != 0)
            <!-- if not first item  -->
            <!-- if the same group -->
            @if($fields[$index-1]['extra']['group'] == $field['extra']['group'])
            <div class="col-lg-3 px-2">
              <div class="form-field">
                  <div class="form-field__control form-field--is-active">
                      <label for="lead-{{$index+900}}" class="form-field__label">{{$field->label}}</label>
                      @if($field->type == 'text' )
                      <input  name="{{$field->name}}" id="lead-{{$index+900}}" type="{{$field->type}}"                     class="form-control"

                             placeholder="{{$field['label']}}" value="{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}">
                          @elseif($field->type == 'date' || $field->type == 'time' || $field->type == 'datetime'|| $field->type == 'email'  || $field->type == 'number')
                          <input value="{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}" name="{{$field->name}}" id="lead-{{$index+900}}" type="{{$field->type}}"                     class="form-control"

                                    placeholder="{{$field['label']}}"  >
                      @elseif($field->type = 'select')
                          <select name="{{$field->name}}" id="lead-{{$index+900}}"                      class="form-control">
                              <option value=""  >N/A</option>
                              @if(isset($field['extra']['options']))
                              @foreach($field['extra']['options'] as $option)
                                  <option value="{{$option}}" @if(old($field->name,$lead->industry_id) == $option ) selected @endif>{{$option}}</option>
                              @endforeach
                              @endif
                          </select>

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
                      <h5 class="text-black"><strong>{{$field['extra']['group']}}</strong></h5>
                    </div>
                </div>
                <div class="setting-form-box">
                  <div class="row px-2">
                    <div class="col px-2">
                      <div class="row mx-0">

                        <!-- add field -->
                        <div class="col-lg-3 px-2">
                          <div class="form-field">
                              <div class="form-field__control form-field--is-active">
                                  <label for="lead-{{$index+900}}" class="form-field__label">{{$field->label}}</label>
                                  @if($field->type == 'text' || $field->type == 'email' || $field->type == 'date' || $field->type == 'time' || $field->type == 'datetime' || $field->type == 'number')
                                  <input  name="{{$field->name}}" id="lead-{{$index+900}}" type="{{$field->type}}"                     class="form-control"

                                         placeholder="{{$field['label']}}" value="{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}">
                                  @elseif($field->type = 'select')
                                  <select name="{{$field->name}}" id="lead-{{$index+900}}"                      class="form-control"
>
                                    <option value=""  >N/A</option>
                                      @if(isset($field['extra']['options']))
                                      @foreach($field['extra']['options'] as $option)
                                      <option value="{{$option}}" @if(old($field->name,$lead->industry_id) == $option ) selected @endif>{{$option}}</option>
                                        @endforeach
                                      @endif

                                  </select>

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
                      <h5 class="text-black"><strong>{{$field['extra']['group']}}</strong></h5>
                    </div>
                </div>
                <div class="setting-form-box">
                    <div class="row px-2">
                      <div class="col px-2">
                        <div class="row mx-0">
                          <div class="col-lg-3 px-2">
                            <div class="form-field">
                                <div class="form-field__control form-field--is-active">
                                    <label for="lead-{{$index+900}}" class="form-field__label">{{$field->label}}</label>
                                    @if($field->type == 'text' || $field->type == 'email' || $field->type == 'date' || $field->type == 'time' || $field->type == 'datetime' || $field->type == 'number')
                                        <input  name="{{$field->name}}" id="lead-{{$index+900}}" type="{{$field->type}}"                     class="form-control"

                                               placeholder="{{$field['label']}}" value="{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}">
                                    @elseif($field->type = 'select')
                                        <select name="{{$field->name}}" id="lead-{{$index+900}}"                      class="form-control"
>
                                            <option value=""  >N/A</option>

                                            @if(isset($field['extra']['options']))
                                                @foreach($field['extra']['options'] as $option)
                                                    <option value="{{$option}}" @if(old($field->name,$lead->industry_id) == $option ) selected @endif>{{$option}}</option>
                                                @endforeach
                                            @endif
                                        </select>

                                    @endif                                      </div>
                            </div>
                          </div>
            @endif
            <!-- end first item -->
              @endforeach








            <div class="form-actions">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-default">Cancel</button>
            </div>
          </form>
          <!-- End Vertical Form -->
        </div>
      </div>
    </div>




  </div>
</section>
<!-- END: forms/basic-forms-elements -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js"></script>

@push('scripts')
<script>
const app = new Vue({
    el: '#app',

    data() {
      return {
        points:{{($lead->points) ? $lead->points:0}}  ,

      }
    },

    created() {
      // console.log(JSON.stringify(this.leads[0]))
      // window.alert = function() {};

      $(document).ready(function(){
        $('.points').on('focus',  function() {
        // Store the current value on focus and on change
        previous = $('option:selected', this).attr('points');
    }).change(function(){
      // app.points =app.points+ 1;
      app.points -= parseInt(previous);

          var points = $('option:selected', this).attr('points');
          previous = points;

          $(this).attr('previous',points);
             app.points += parseInt(points);

        })
      })

    },

    methods: {



        addMessage() {
          this.points ++;
        },

        sendMessage() {
            this.addMessage(this.newMessage);
            this.newMessage = '';
        }
    }
});

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
