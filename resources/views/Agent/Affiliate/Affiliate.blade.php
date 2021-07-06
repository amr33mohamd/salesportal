@extends('Agent.Layout.App3')
@section('title', 'Case')

@section('content')
<style>
.media{
  border: solid .5px;
    margin: 5px;
    padding: 5px;
    border-color: #e4e9f0;
    border-radius: calc(7px - 1px);
}
</style>
<div class="vb__layout__content">
  <div class="vb__breadcrumbs">
<div class="vb__breadcrumbs__path">
<a href="javascript: void(0);">Home</a>
<span>
<span class="vb__breadcrumbs__arrow"></span>
<span>Refeerals</span>
</span>
<span>
<span class="vb__breadcrumbs__arrow"></span>
<strong class="vb__breadcrumbs__current">My Refeerals</strong>
</span>
</div>
</div>
  <div class="vb__utils__content">
    <div class="air__utils__heading">
</div>
<div class="card">
  <div class="card-header card-header-flex">
    <div class="d-flex flex-column justify-content-center mr-auto">
      <h5 class="mb-0">My Refeerals</h5>
    </div>
    <div class="d-flex flex-column justify-content-center">
    </div>

  </div>
<div class="card-body justify-content-center d-flex">
<div class="col-lg-9 align-center">
  <div class="mb-5">
    <div class="dd" id="nestable1">
      <ol class="dd-list">

        @foreach($leads->followers as $follow1)
        <li class="dd-item" data-id="1">
            <div class="media">
                <div class="media-left">
                  <img width="60" height="60" src="https://karateinthewoodlands.com/wp-content/uploads/2017/09/default-user-image.png" alt="Generic placeholder image" class="mr-4 media-object">
                </div>

              <div class="media-body">
                  <h4 class="media-heading">{{$follow1->username}}</h4>
                  <span>email : {{$follow1->email}}</span>
              </div>
            </div>
          <ol>
            @foreach($follow1->followers as $follow2)

            <li class="dd-item" data-id="11">
              <div class="media ">
                  <div class="media-left">
                    <img width="60" height="60" src="https://karateinthewoodlands.com/wp-content/uploads/2017/09/default-user-image.png" alt="Generic placeholder image" class="mr-4 media-object">
                  </div>

                <div class="media-body">
                    <h4 class="media-heading">{{$follow2->username}}</h4>
                    <span>email : {{$follow2->email}}</span>
                </div>
              </div>
              <ol>
                @foreach($follow2->followers as $follow3)

                <li class="dd-item" data-id="11">
                  <div class="media ">
                      <div class="media-left">
                        <img width="60" height="60" src="https://karateinthewoodlands.com/wp-content/uploads/2017/09/default-user-image.png" alt="Generic placeholder image" class="mr-4 media-object">
                      </div>

                    <div class="media-body">
                        <h4 class="media-heading">{{$follow3->username}}</h4>
                        <span>email : {{$follow3->email}}</span>
                    </div>
                  </div>
                </li>
                @endforeach
              </ol>
            </li>
            @endforeach
          </ol>

        </li>
        @endforeach




      </ol>
    </div>
  </div>
</div>
</div>
</section>
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
