@extends('Agent.Layout.App')
@section('title', 'New Account')

@section('content')
<!-- Page Body Start -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
.select2-container--default .select2-selection--single{
  height: 45px !important;
}


</style>
<main class="pb-3">
    <!-- Page Title and Breadcrumb Start -->
    <div class="page-title-breadcrumb mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-title">
                        {{$type}} Opportunity
                    </div>
                </div>
                <div class="col-auto">
                    <div class="breadcrumb-box">
                        <ul>
                            <li>Sales</li>
                            <li>Opportunity</li>
                            <li><a href="/opportunitie/new"> {{$type}} Opportunity</a></li>
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
          <form method="post" action="@if($type == 'add') {{route('NewOpportunityAction')}} @else /opportunities/edit/action/{{$lead->id}} @endif" >
            @csrf
            <div class="row">
                <div class="col-lg d-flex justify-content-end">
                    <a href="/opportunities" class="btn-admin-default">Cancel</a>
                    <button type="submit" class="btn-admin-primary ml-3">Save</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card-box my-3 px-2 py-3">
                        <div class="row setting-title-box px-2 mb-3">
                            <div class="col">
                                <h2>Basic</h2>
                            </div>
                        </div>
                        <div class="setting-form-box">
                            <div class="row px-2">
                                <div class="col px-2">
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="opportunity-1" class="form-field__label">Opportunity Name</label>
                                                    <input id="contact-1" name="name" value="{{old('name',$lead->name)}}"  type="text"  class="form-field__input"
                                                        placeholder="First Name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                              <div class="form-field__control">
                                                  <label for="opportunity-12" class="form-field__label">Description</label>
                                                  <input id="opportunity-12" name="description" value="{{old('description',$lead->description)}}" type="text" class="form-field__input"
                                                      placeholder="Description" />
                                              </div>
                                            </div>
                                        </div>

                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="opportunity-3" class="form-field__label">Currency</label>
                                                    <select id="lead-54" name="currency_id" class="form-field__input">
                                                      <option value=""  >N/A</option>

                                                      @foreach($currancies as $curancy)
                                                        <option @if(old('currency_id',$lead->currency_id) == $curancy->id ) selected @endif value="{{$curancy->id}}">{{$curancy->name}}</option>
                                                      @endforeach
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
                                                    <label for="opportunity-4" class="form-field__label">Expected Close Date</label>
                                                    <input id="opportunity-4" type="date" name="close_date" value="{{old('close_date',$lead->close_date)}}" class="form-field__input"
                                                        placeholder="DD/MM/YYYY" />
                                                    <div class="form-dropdown-icon">
                                                        <img src="/assets/images/form-calendar.svg" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="opportunity-5" class="form-field__label">Opportunity Amount</label>
                                                    <input name="amount" value="{{old('amount',$lead->amount)}}" id="opportunity-5" type="text" class="form-field__input"
                                                        placeholder="Opportunity Amount" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                              <div class="form-field__control">
                                                  <label for="opportunity-11"  class="form-field__label">Next Step</label>
                                                  <input id="opportunity-11" name="next_step" value="{{old('next_step',$lead->next_step)}}" type="text" class="form-field__input"
                                                      placeholder="Next Step" />
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="opportunity-7" class="form-field__label">Sales Stage</label>
                                                    <select id="opportunity-7" name="sales_stage_id" class="form-field__input">
                                                      <option value=""  >N/A</option>

                                                      @foreach($stages as $stage)
                                                        <option @if(old('currency_id',$lead->sales_stage_id) == $stage->id ) selected @endif value="{{$stage->id}}">{{$stage->name}}</option>
                                                      @endforeach
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
                                                    <select id="contact-7" name="account_id" required class="form-field__input js-example-basic-single">
                                                      <option value=""  >Select Account Name</option>

                                                      @foreach($accounts as $account)
                                                        <option value="{{$account->id}}" @if(old('account_id',$lead->account_id) == $account->id ) selected @endif>{{$account->first_name}} {{$account->last_name}}</option>
                                                        @endforeach

                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="opportunity-9" class="form-field__label">Probability (%)</label>
                                                    <input name="probability" value="{{old('probability',$lead->probability)}}" id="opportunity-9" type="text" class="form-field__input"
                                                        placeholder="Probability (%)" />

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="opportunity-10" class="form-field__label">Campaign</label>
                                                    <input name="campaign" value="{{old('campaign',$lead->campaign)}}" id="opportunity-5" type="text" class="form-field__input"
                                                        placeholder="Campaign" />

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg px-2">
                                            <div class="form-field">

                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                        </div>
                                    </div>
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">

                                            </div>
                                        </div>
                                        <div class="col-lg px-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="card-box my-3 px-2 mt-4 py-3">
                        <div class="row setting-title-box px-2 mb-3">
                            <div class="col">
                                <h2>Other</h2>
                            </div>
                        </div>
                        <div class="setting-form-box">
                            <div class="row px-2">
                                <div class="col px-2">
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="contact-26" class="form-field__label">Assigned to</label>
                                                    <select id="contact-26" name="country" class="form-field__input">
                                                        <option value="">Assigned to</option>
                                                        <option value="">lorem ipsum</option>
                                                        <option value="">lorem ipsum</option>
                                                        <option value="">lorem ipsum</option>
                                                    </select>
                                                    <div class="form-dropdown-icon">
                                                        <img src="/assets/images/form-drop-down.svg" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto px-2">
                                            <button class="btn-primary-admin mr-2"><img src="/assets/images/form-search-white.svg"></button>
                                            <button class="btn-danger-admin"><img src="/assets/images/close-white.svg"></button>
                                        </div>
                                        <div class="col-lg px-2">
                                        </div>
                                        <div class="col-lg-6 px-2">
                                        </div>
                                        <div class="col-lg px-2">
                                        </div>
                                        <div class="col-lg-6 px-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>

        </div>
    </div>
    <!-- Form box End -->
</main>
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
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
