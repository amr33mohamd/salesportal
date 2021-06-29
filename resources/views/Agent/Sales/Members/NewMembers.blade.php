@extends('Agent.Layout.App3')
@section('title', 'Accounts')

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
<strong class="vb__breadcrumbs__current">Member</strong>
</span>
</div>
</div>
  <div class="vb__utils__content">
    <div class="air__utils__heading">
<h5>Member</h5>
</div>









<!-- START: forms/basic-forms-elements -->


          <!-- Vertical Form -->
          <form method="post" action="@if($type == 'add') /member/new/action/{{$account_id}} @else /members/edit/action/{{$lead->id}} @endif"  enctype="multipart/form-data">
            @csrf
            @foreach($fields as $index => $field)
            @if($index != 0)
            <!-- if not first item  -->
            <!-- if the same group -->
            @if($fields[$index-1]['extra']['group'] == $field['extra']['group'])
            <div class="form-group col-md-4">
                      <label for="lead-{{$index+900}}" class="form-field__label">{{$field->label}}</label>
                      @if($field->type == 'text' || $field->type == 'number' || $field->type == 'email' )
                      <input  name="{{$field->name}}" id="lead-{{$index+900}}" type="{{$field->type}}"                     class="form-control"

                             placeholder="{{$field['label']}}" value="{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}" @foreach($field->rules as $rule) @if($rule->rule == "required") required @endif @endforeach>
                          @elseif($field->type == 'date' || $field->type == 'time' || $field->type == 'datetime'  )
                          <input value="{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}" name="{{$field->name}}" id="lead-{{$index+900}}"
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
                                  <option value="{{$option}}" @if(old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null) == $option ) selected @endif>{{$option}}</option>
                              @endforeach
                              @endif
                          </select>

                      @endif
            </div>
              <!-- if end of row -->

              <!-- end if end of row -->
              @if($fields->count() == $index+1)
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

                                         placeholder="{{$field['label']}}" value="{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}" @foreach($field->rules as $rule) @if($rule->rule == "required") required @endif @endforeach>
                                      @elseif($field->type == 'date' || $field->type == 'time' || $field->type == 'datetime'  )
                                      <input value="{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}" name="{{$field->name}}" id="lead-{{$index+900}}"
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
                                              <option value="{{$option}}" @if(old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null) == $option ) selected @endif>{{$option}}</option>
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

                               placeholder="{{$field['label']}}" value="{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}" @foreach($field->rules as $rule) @if($rule->rule == "required") required @endif @endforeach>
                            @elseif($field->type == 'date' || $field->type == 'time' || $field->type == 'datetime'  )
                            <input value="{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}" name="{{$field->name}}" id="lead-{{$index+900}}"
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
                                    <option value="{{$option}}" @if(old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null) == $option ) selected @endif>{{$option}}</option>
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
              <button type="button" class="btn btn-default px-5">Cancel</button>
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
  ; (function ($) {
    'use strict'
    $(function () {
      $('.select2').select2()
      $('.select2-tags').select2({
        tags: true,
        tokenSeparators: [',', ' '],
      })
    })
  })(jQuery)
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
