@extends('Agent.Layout.App3')
@section('title', 'Case')

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
<strong class="vb__breadcrumbs__current">Call</strong>
</span>
</div>
</div>
  <div class="vb__utils__content">
    <div class="air__utils__heading">
</div>









<!-- START: forms/basic-forms-elements -->


          <!-- Vertical Form -->
          <form id="marketingForm" method="post" enctype="multipart/form-data" action="{{route('AddMarketing')}}">
            @csrf

            <div class="card">
            <div class="card-body">
            <h4 class="mb-4">
            <strong>Add Marketing</strong>
            </h4>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="file" class="form-field__label">File</label>

              <input type="file" name="file" class="form-control"/>
            </div>
              <div class="form-group col-md-4">
                <label for="name" class="form-field__label">File Name</label>

              <input type="text" name="name" id="name" class="form-control" placeholder="File Name">

            </div>
            <div class="form-group col-md-4">
              <label for="category" class="form-field__label">category</label>

            <input type="text" name="category" class="form-control" placeholder="category"/>
          </div>
          <div class="form-group col-md-4">
            <label for="sub_category" class="form-field__label">sub category</label>

          <input type="text" name="sub_category" class="form-control" placeholder="sub category"/>
        </div>
        <div class="form-group col-md-4">
          <label for="status" class="form-field__label">status</label>

        <select  name="status" class="form-control" >
          <option value="">Aprroval Stauts</option>
          <option value="1">Approved</option>
        <option value="2">declined</option>
             </select>
      </div>
      <div class="form-group col-md-4">
        <label for="status" class="form-field__label">Type</label>

      <select  name="type" class="form-control" >
        <option value="">Choose</option>

                            <option value="Template">Template</option>
                    <option value="Social">Social</option>
                  <option value="Image">Image</option>
           </select>
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
        points:  ,

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
