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
                        {{$type}} Member
                    </div>
                </div>
                <div class="col-auto">
                    <div class="breadcrumb-box">
                        <ul>
                            <li>Sales</li>
                            <li>Accounts</li>
                            <li><a href="/new-leads.html"> {{$type}} Member</a></li>
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
          <form method="post" action="@if($type == 'add') /member/new/action/{{$account_id}} @else /members/edit/action/{{$lead->id}} @endif" >
            @csrf
            <div class="row">
                <div class="col-lg d-flex justify-content-end">
                    <a href="/members" class="btn-admin-default">Cancel</a>
                    <button type="submit" class="btn-admin-primary ml-3">Save</a>
                </div>
            </div>
            <div class="row">

                <div class="col-xl-12 col-lg-12">
                    <div class="card-box my-3 px-2 py-3">
                        <div class="row setting-title-box px-2 mb-3">
                            <div class="col">
                                <h2>Overview</h2>
                            </div>
                        </div>
                        <div class="setting-form-box">
                            <div class="row px-2">
                                <div class="col px-2">
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="contact-1" class="form-field__label">First Name</label>
                                                    <input id="contact-1" name="first_name" value="{{old('first_name',$lead->first_name)}}"  type="text"  class="form-field__input"
                                                        placeholder="First Name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="contact-2" class="form-field__label">Last Name</label>
                                                    <input id="contact-2" name="last_name" value="{{old('last_name',$lead->last_name)}}" type="text" class="form-field__input"
                                                        placeholder="Last Name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="contact-3" class="form-field__label">Office Phone</label>
                                                    <input id="contact-3" name="office_phone" value="{{old('office_phone',$lead->office_phone)}}" type="text" class="form-field__input"
                                                        placeholder="Office Phone" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="contact-4" class="form-field__label">Mobile</label>
                                                    <input id="contact-4" name="mobile" value="{{old('mobile',$lead->mobile)}}" type="text" class="form-field__input"
                                                        placeholder="Mobile" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="contact-5" class="form-field__label">Job Title</label>
                                                    <input id="contact-5" name="job_title" value="{{old('job_title',$lead->job_title)}}" type="text" class="form-field__input"
                                                        placeholder="Job Title" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                          <div class="form-field">
                                              <div class="form-field__control">
                                                  <label for="contact-9" class="form-field__label">Email Address</label>
                                                  <input name="email" value="{{old('email',$lead->email)}}" id="contact-9" type="text" class="form-field__input"
                                                      placeholder="Email Address" />
                                              </div>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0">


                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                              <div class="form-field__control">
                                                  <label for="contact-9" class="form-field__label">Fax</label>
                                                  <input name="fax" value="{{old('fax',$lead->fax)}}" id="contact-9" type="text" class="form-field__input"
                                                      placeholder="Fax" />
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">

                                        </div>

                                    </div>
                                </div>
                                <div class="col-auto px-2">
                                    <div class="profile-box empty-box">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box my-3 px-2 py-3">
                        <div class="row setting-title-box px-2 mb-3">
                            <div class="col">
                                <h2>Billing Address</h2>
                            </div>
                        </div>
                        <div class="setting-form-box">
                            <div class="row px-2">
                                <div class="col px-2">
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="contact-13" class="form-field__label">Street</label>
                                                    <input name="billing_street" value="{{old('billing_street',$lead->billing_street)}}" id="contact-13" type="text" class="form-field__input"
                                                        placeholder="Street" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="contact-14" class="form-field__label">City</label>
                                                    <input name="billing_city" value="{{old('billing_city',$lead->billing_city)}}" id="contact-14" type="text" class="form-field__input"
                                                        placeholder="City" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="contact-15" class="form-field__label">State/Region</label>
                                                    <input name="billing_state" value="{{old('billing_state',$lead->billing_state)}}" id="contact-15" type="text" class="form-field__input"
                                                        placeholder="State/Region" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="contact-16" class="form-field__label">Postal Code</label>
                                                    <input name="billing_postal_code" value="{{old('billing_postal_code',$lead->billing_postal_code)}}" id="contact-16" type="text" class="form-field__input"
                                                        placeholder="Postal Code" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="contact-17" class="form-field__label">Country</label>
                                                    <input  name="billing_country" value="{{old('billing_country',$lead->billing_country)}}" id="contact-17" type="text" class="form-field__input"
                                                        placeholder="Country" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2"></div>
                                    </div>
                                </div>
                                <div class="col-lg-auto col-sm-12  px-2">
                                    <div class="profile-box empty-box">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box my-3 px-2 py-3">
                        <div class="row setting-title-box px-2 mb-3">
                            <div class="col">
                                <div class="d-flex justify-content-Start align-items-center">
                                    <h2>Shipping Address</h2>
                                    <div class="form-field other-field ml-3 mb-0">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="setting-form-box">
                            <div class="row px-2">
                                <div class="col px-2">
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="contact-18" class="form-field__label">Street</label>
                                                    <input name="shipping_street" value="{{old('shipping_street',$lead->shipping_street)}}" id="contact-18" type="text" class="form-field__input"
                                                        placeholder="Street" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="contact-19" class="form-field__label">City</label>
                                                    <input name="shipping_city" value="{{old('shipping_city',$lead->shipping_city)}}" id="contact-19" type="text" class="form-field__input"
                                                        placeholder="City" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="contact-20" class="form-field__label">State/Region</label>
                                                    <input name="shipping_state" value="{{old('shipping_state',$lead->shipping_state)}}" id="contact-20" type="text" class="form-field__input"
                                                        placeholder="State/Region" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="contact-21" class="form-field__label">Postal Code</label>
                                                    <input name="shipping_postal_code" value="{{old('shipping_postal_code',$lead->shipping_postal_code)}}" id="contact-21" type="text" class="form-field__input"
                                                        placeholder="Postal Code" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="contact-22" class="form-field__label">Country</label>
                                                    <input name="shipping_country" value="{{old('shipping_country',$lead->shipping_country)}}" id="contact-22" type="text" class="form-field__input"
                                                        placeholder="Country" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2"></div>
                                    </div>
                                </div>
                                <div class="col-lg-auto col-sm-12  px-2">
                                    <div class="profile-box empty-box">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="card-box my-3 px-2 mt-4 py-3">
                        <div class="row setting-title-box px-2 mb-3">
                            <div class="col">
                                <h2>More Information</h2>
                            </div>
                        </div>
                        <div class="setting-form-box">
                            <div class="row px-2">
                                <div class="col px-2">
                                    <div class="row mx-0">
                                        <div class="col-lg-6 px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="contact-23" class="form-field__label">Description</label>
                                                    <input name="last_name" value="{{old('last_name',$lead->last_name)}}" id="contact-23" type="text" class="form-field__input"
                                                        placeholder="Description" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="contact-24" class="form-field__label">Assigned to</label>
                                                    <select id="contact-24" name="country" class="form-field__input">
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
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="contact-25" class="form-field__label">Lead Source</label>
                                                    <select id="contact-25" name="country" class="form-field__input">
                                                        <option value="">Lead Source</option>
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
                                        <div class="col-lg px-2">
                                        </div>
                                    </div>
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="contact-26" class="form-field__label">Reports To</label>
                                                    <select id="contact-26" name="country" class="form-field__input">
                                                        <option value="">Reports To</option>
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
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="contact-27" class="form-field__label">Campaign</label>
                                                    <select id="contact-27" name="country" class="form-field__input">
                                                        <option value="">Campaign</option>
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
                                        <div class="col-lg-6 px-2">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-auto col-sm-12  px-2">
                                    <div class="profile-box empty-box">
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
