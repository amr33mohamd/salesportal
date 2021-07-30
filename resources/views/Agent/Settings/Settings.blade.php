@extends('Agent.Layout.App3')
@section('title', 'Case')

@section('content')

<div class="vb__layout__content" id="app">
  <div class="vb__breadcrumbs">
<div class="vb__breadcrumbs__path">
<a href="javascript: void(0);">Home</a>
<span>
<span class="vb__breadcrumbs__arrow"></span>
<span>App</span>
</span>
<span>
<span class="vb__breadcrumbs__arrow"></span>
<strong class="vb__breadcrumbs__current">Profile</strong>
</span>
</div>
</div>
  <div class="vb__utils__content">
    <div class="air__utils__heading">
</div>









<!-- START: forms/basic-forms-elements -->


          <!-- Vertical Form -->
          <form id="marketingForm"  enctype="multipart/form-data" action="{{route('settingsAction')}}" method="post" >
            @csrf

            <div class="card">
            <div class="card-body">
            <h4 class="mb-4">
            <strong>Edit Profile</strong>
            </h4>
            <div class="form-row">

              <div class="form-group col-md-4">
                <label for="name" class="form-field__label"> Name</label>

              <input type="text" name="username" value="{{old('username',($lead->username) ? $lead->username :null)}}" id="name" class="form-control" placeholder=" Name" required>
<!-- <input type="hidden" value="{{$user->id}}" name="follow_id"/> -->
            </div>

            <div class="form-group col-md-4">
              <label for="category" class="form-field__label">Invite Code</label>

            <input type="text" readonly name="code" value="{{$user->code}}" class="form-control" placeholder="Email" required/>
          </div>
          <div class="form-group col-md-4">
            <label for="category" class="form-field__label"> ID</label>

          <input type="text" readonly name="id" value="{{$user->id}}" class="form-control" placeholder="Email" required/>
        </div>

        <div class="form-group col-md-4">
          <label for="category" class="form-field__label"> Mobile Number</label>

        <input type="number"  name="mobile" value="{{$user->mobile}}" class="form-control" placeholder="Mobile Number" />
      </div>
      <div class="form-group col-md-4">
        <label for="category" class="form-field__label"> address country</label>

      <input type="number"  name="address_country" value="{{$user->address_country}}" class="form-control" placeholder="address country" />
    </div>
    <div class="form-group col-md-4">
      <label for="category" class="form-field__label"> address </label>

    <input type="number"  name="address_street" value="{{$user->address_street}}" class="form-control" placeholder="address" />
  </div>


            <div class="form-group col-md-4">
              <label for="category" class="form-field__label">Email</label>

            <input type="email" name="email" value="{{old('email',($lead->email) ? $lead->email :null)}}" class="form-control" placeholder="Email" required/>
          </div>
          <div class="form-group col-md-4">
            <label for="sub_category" class="form-field__label">Job title</label>

          <input type="text" name="job_title" class="form-control" value="{{old('job_title',($lead->job_title) ? $lead->job_title :null)}}" placeholder="Job title"/>
        </div>
        <div class="form-group col-md-4">
          <label for="referral" class="form-field__label">Refferal Link</label>

        <input type="text"  class="form-control" value="{{ url('/')}}/register?id={{$lead->code}}" placeholder="referral"/>
      </div>
        <div class="form-group col-md-4">
          <label for="sub_category" class="form-field__label">Password</label>

        <input type="password" name="password" class="form-control"  placeholder="Password" required/>
      </div>
      <div class="form-group col-md-4">
        <label for="sub_category" class="form-field__label">Description</label>

      <input type="text" name="description" class="form-control" value="{{old('description',($lead->description) ? $lead->description :null)}}" placeholder="Description"/>
    </div>
    <div class="form-group col-md-4">
      <label for="sub_category" class="form-field__label">Photo</label>

    <input type="file" name="image" class="form-control" />
  </div>



          </div>
        </div>
      </div>










            <div class="form-actions">
              <button type="submit" class="btn btn-success px-5">Submit</button>
              <a type="button" href="{{url()->previous()}}" class="btn btn-default px-5">Cancel</a>
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
        programs:{{$user->CommissionPrograms->count()}}  ,

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


        add_program(){
          this.programs += 1;
            $("#new_programs").append('<div class="form-row"><div class="form-group col-md-4"><label for="name" class="form-field__label"> Name</label><input type="text" name="name,'. this.programs .'" value="" id="name" class="form-control" placeholder=" Name" required></div><div class="form-group col-md-4"><label for="name" class="form-field__label"> Percent</label><input type="text" name="percent,'. this.programs .'" value="" id="name" class="form-control" placeholder=" Percent" required></div><div class="form-group col-md-4"><label for="name" class="form-field__label"> Level</label><input type="text" name="level,'. this.programs .'" value="" id="name" class="form-control" placeholder=" Name" required></div></div>');
          alert(this.programs);
        },

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
