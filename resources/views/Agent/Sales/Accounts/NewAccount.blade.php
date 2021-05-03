@extends('Agent.Layout.App')
@section('title', 'New Account')

@section('content')

<!-- Page Body Start -->
<main class="pb-3" id="app">
    <!-- Page Title and Breadcrumb Start -->
    <div class="page-title-breadcrumb mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-title">
                        {{$type}} Account
                    </div>
                </div>
                <div class="col-auto">
                    <div class="breadcrumb-box">
                        <ul>
                            <li>Sales</li>
                            <li>Accounts</li>
                            <li><a href="/new-leads.html"> {{$type}} Account</a></li>
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
          <form method="post" action="@if($type == 'add') {{route('NewAccountAction')}} @else /accounts/edit/action/{{$lead->id}} @endif"  enctype="multipart/form-data">
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
                                      <h2>Profile  Picture</h2>
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
                                            placeholder="{{$field['label']}}" >{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}</textarea>
                                  @elseif($field->type == 'date' || $field->type == 'time' || $field->type == 'datetime'|| $field->type == 'email'  || $field->type == 'number')
                                  <input value="{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}" name="{{$field->name}}" id="lead-{{$index+900}}" type="{{$field->type}}" class="form-field__input"
                                            placeholder="{{$field['label']}}" style="height: 65px" >
                              @elseif($field->type = 'select')
                                  <select name="{{$field->name}}" id="lead-{{$index+900}}"  class="form-field__input ">
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
                                          @if($field->type == 'text' || $field->type == 'email' || $field->type == 'date' || $field->type == 'time' || $field->type == 'datetime' || $field->type == 'number')
                                          <textarea value="{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}" name="{{$field->name}}" id="lead-{{$index+900}}" type="{{$field->type}}" class="form-field__input"
                                              placeholder="{{$field['label']}}" >{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}</textarea>
                                          @elseif($field->type = 'select')
                                          <select name="{{$field->name}}" id="lead-{{$index+900}}"  class="form-field__input ">
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
                                            @if($field->type == 'text' || $field->type == 'email' || $field->type == 'date' || $field->type == 'time' || $field->type == 'datetime' || $field->type == 'number')
                                                <textarea  name="{{$field->name}}" id="lead-{{$index+900}}" type="{{$field->type}}" class="form-field__input"
                                                       placeholder="{{$field['label']}}" >{{old($field->name,($lead->getFieldById($field->id)) ? $lead->getFieldById($field->id)->value :null)}}</textarea>
                                            @elseif($field->type = 'select')
                                                <select name="{{$field->name}}" id="lead-{{$index+900}}"  class="form-field__input ">
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
                                    <div class="card-box my-3 px-2 py-3">
                                        <div class="row setting-title-box px-2 mb-3">
                                            <div class="col">
                                                <h2>Points : @{{points}}</h2>
                                            </div>
                                        </div>
                                        <input type="hidden" value="@{{points}}" name="points"/>
                                        <div class="setting-form-box">
                                            <div class="row px-2">
                                                <div class="col px-2">
                                                    <div class="row mx-0">


                                                        <div class="col-lg px-2">
                                                            <div class="form-field">
                                                                <div class="form-field__control">
                                                                    <label for="lead-50" class="form-field__label">Age</label>
                                                                    <select  id="lead-50" previous="0" name="points_age" class="form-field__input points">
                                                                        <option value="" points="0"  >N/A</option>

                                                                        <option @if(old('points_age',$lead->points_age) == 1 ) selected @endif value="1" points="25">at least 18 but less than 25 years</option>
                                                                        <option @if(old('points_age',$lead->points_age) == 2 ) selected @endif value="2" points="30">at least  25 but less than 33 years</option>
                                                                        <option @if(old('points_age',$lead->points_age) == 3 ) selected @endif value="3" points="25">at least  33 but less than 40 years</option>
                                                                        <option @if(old('points_age',$lead->points_age) == 4 ) selected @endif value="4" points="15">at least  40 but less than 45 years</option>

                                                                    </select>
                                                                    <div class="form-dropdown-icon">
                                                                        <img src="/assets/images/form-drop-down.svg" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-lg px-2">
                                                            <div class="form-field">
                                                                <div class="form-field__control">
                                                                    <label for="lead-90" class="form-field__label">English language skills</label>
                                                                    <select  id="lead-90"  previous="0"name="points_english" class="form-field__input points">
                                                                        <option value="" points="0"  >N/A</option>

                                                                        <option @if(old('points_english',$lead->points_english) == 1 ) selected @endif value="1" points="0">Competent English</option>
                                                                        <option @if(old('points_english',$lead->points_english) == 2 ) selected @endif value="2" points="10">Proficient English</option>
                                                                        <option @if(old('points_english',$lead->points_english) == 3 ) selected @endif value="3" points="20">Superior English</option>

                                                                    </select>
                                                                    <div class="form-dropdown-icon">
                                                                        <img src="/assets/images/form-drop-down.svg" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-lg px-2">
                                                            <div class="form-field">
                                                                <div class="form-field__control">
                                                                    <label for="lead-51" class="form-field__label">Overseas skilled employment</label>
                                                                    <select  id="lead-51" previous="0" name="points_overseases" class="form-field__input points">
                                                                        <option value="" points="0"  >N/A</option>

                                                                        <option @if(old('points_overseases',$lead->points_overseases) == 1 ) selected @endif value="1" points="0">Less than 3 years</option>
                                                                        <option @if(old('points_overseases',$lead->points_overseases) == 2 ) selected @endif value="2" points="5">At least 3 but less than 5 years</option>
                                                                        <option @if(old('points_overseases',$lead->points_overseases) == 3 ) selected @endif value="3" points="10">At least 5 but less than 8 years</option>
                                                                        <option @if(old('points_overseases',$lead->points_overseases) == 4 ) selected @endif value="4" points="15">At least 8 years</option>


                                                                    </select>
                                                                    <div class="form-dropdown-icon">
                                                                        <img src="/assets/images/form-drop-down.svg" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg px-2">
                                                            <div class="form-field">
                                                                <div class="form-field__control">
                                                                    <label for="lead-52" class="form-field__label">In Country skilled employment</label>
                                                                    <select  id="lead-52" previous="0" name="points_incountry" class="form-field__input points">
                                                                        <option value="" points="0"  >N/A</option>

                                                                        <option @if(old('points_incountry',$lead->points_incountry) == 1 ) selected @endif value="1" points="0">Less than 1 year</option>
                                                                        <option @if(old('points_incountry',$lead->points_incountry) == 2 ) selected @endif value="2" points="5">At least 1 but less than 3 years</option>
                                                                        <option @if(old('points_incountry',$lead->points_incountry) == 3 ) selected @endif value="3" points="10">At least 3 but less than 5 years</option>
                                                                        <option @if(old('points_incountry',$lead->points_incountry) == 4 ) selected @endif value="4" points="15">At least 5 but less than 8 years</option>
                                                                        <option @if(old('points_incountry',$lead->points_incountry) == 5 ) selected @endif value="5" points="20">At least 8 years</option>


                                                                    </select>
                                                                    <div class="form-dropdown-icon">
                                                                        <img src="/assets/images/form-drop-down.svg" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="row mx-0">

                                                        <div class="col-lg px-2">
                                                            <div class="form-field">
                                                                <div class="form-field__control">
                                                                    <label for="lead-82" class="form-field__label">Educational qualifications</label>
                                                                    <select  id="lead-82" previous="0" name="points_education_qualifications" class="form-field__input points">
                                                                        <option value="" points="0"  >N/A</option>

                                                                        <option @if(old('points_education_qualifications',$lead->points_education_qualifications) == 1 ) selected @endif value="1" points="20">A Doctorate from the country educational institution or a Doctorate from another educational institution, that is of a recognised standard.</option>
                                                                        <option @if(old('points_education_qualifications',$lead->points_education_qualifications) == 2 ) selected @endif value="2" points="15">At least a Bachelor degree from the country educational institution or at least a Bachelor qualification, from another educational institution, that is of a recognised standard.</option>
                                                                        <option @if(old('points_education_qualifications',$lead->points_education_qualifications) == 3 ) selected @endif value="3" points="10">A diploma or trade qualification from the country educational institution.</option>
                                                                        <option @if(old('points_education_qualifications',$lead->points_education_qualifications) == 4 ) selected @endif value="4" points="10">Attained a qualification or award recognised by the relevant assessing authority for your nominated skilled occupation as being suitable for that occupation.</option>


                                                                    </select>
                                                                    <div class="form-dropdown-icon">
                                                                        <img src="/assets/images/form-drop-down.svg" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg px-2">
                                                            <div class="form-field">
                                                                <div class="form-field__control">
                                                                    <label for="lead-53" class="form-field__label">Specialist education qualification</label>
                                                                    <select  id="lead-53" previous="0" name="points_specialist_education_qualifications" class="form-field__input points">
                                                                        <option value="" points="0"  >N/A</option>

                                                                        <option @if(old('points_specialist_education_qualifications',$lead->points_specialist_education_qualifications) == 1 ) selected @endif value="1" points="10">A Masters degree by research or a Doctorate degree from the country educational institution that included at least 2 academic years study  in a relevant field.</option>


                                                                    </select>
                                                                    <div class="form-dropdown-icon">
                                                                        <img src="/assets/images/form-drop-down.svg" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg px-2">
                                                            <div class="form-field">
                                                                <div class="form-field__control">
                                                                    <label for="lead-54" class="form-field__label">study requirement</label>
                                                                    <select  id="lead-54" previous="0" name="points_study_requiments" class="form-field__input points">
                                                                        <option value="" points="0"  >N/A</option>

                                                                        <option @if(old('points_study_requiments',$lead->points_study_requiments) == 1 ) selected @endif value="1" points="5">Meet the study requirement</option>


                                                                    </select>
                                                                    <div class="form-dropdown-icon">
                                                                        <img src="/assets/images/form-drop-down.svg" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg px-2">
                                                            <div class="form-field">
                                                                <div class="form-field__control">
                                                                    <label for="lead-55" class="form-field__label">Professional Year in country</label>
                                                                    <select  id="lead-55" previous="0" name="points_professional_year" class="form-field__input points">
                                                                        <option value=""  points="0"  >N/A</option>

                                                                        <option @if(old('points_professional_year',$lead->points_professional_year) == 1 ) selected @endif value="1" points="5">Completion of a Professional Year in the country</option>


                                                                    </select>
                                                                    <div class="form-dropdown-icon">
                                                                        <img src="/assets/images/form-drop-down.svg" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row mx-0">

                                                        <div class="col-lg px-2">
                                                            <div class="form-field">
                                                                <div class="form-field__control">
                                                                    <label for="lead-56" class="form-field__label">Credentialled community language</label>
                                                                    <select  id="lead-56" previous="0" name="points_credentialled_community_language" class="form-field__input points">
                                                                        <option value="" points="0"  >N/A</option>

                                                                        <option @if(old('points_credentialled_community_language',$lead->points_credentialled_community_language) == 1 ) selected @endif value="1" points="5">Hold a recognised qualification in a credentialled community language</option>


                                                                    </select>
                                                                    <div class="form-dropdown-icon">
                                                                        <img src="/assets/images/form-drop-down.svg" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-lg px-2">
                                                            <div class="form-field">
                                                                <div class="form-field__control">
                                                                    <label for="lead-57" class="form-field__label">Study in regional</label>
                                                                    <select  id="lead-57" previous="0" name="points_study_in_regional" class="form-field__input points">
                                                                        <option value="" points="0"  >N/A</option>

                                                                        <option @if(old('points_study_in_regional',$lead->points_study_in_regional) == 1 ) selected @endif value="1" points="5">You must have at least 1 degree</option>


                                                                    </select>
                                                                    <div class="form-dropdown-icon">
                                                                        <img src="/assets/images/form-drop-down.svg" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-lg px-2">
                                                            <div class="form-field">
                                                                <div class="form-field__control">
                                                                    <label for="lead-58" class="form-field__label">Partner skills</label>
                                                                    <select   id="lead-58" previous="0" name="points_partner_skills" class="form-field__input points">
                                                                        <option value="" points="0"  >N/A</option>

                                                                        <option @if(old('points_partner_skills',$lead->points_partner_skills) == 1 ) selected @endif value="1" points="10">Your spouse or de facto partner must also be an applicant for this visa and meet age, English and skill criteria</option>
                                                                        <option @if(old('points_partner_skills',$lead->points_partner_skills) == 2 ) selected @endif value="2" points="5">Your spouse or de facto partner must also be an applicant for this visa and has competent English</option>
                                                                        <option @if(old('points_partner_skills',$lead->points_partner_skills) == 3 ) selected @endif value="3" points="10">You are single or your partner is  the country citizen or permanent resident</option>


                                                                    </select>
                                                                    <div class="form-dropdown-icon">
                                                                        <img src="/assets/images/form-drop-down.svg" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                    </div>

                                                </div>
                                                <div class="col-lg-auto col-sm-12  px-2">
                                                    <div class="profile-box empty-box">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                </div>
            </div>

        </div>
    </div>
  </form>
    <!-- Form box End -->
</main>
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
