@extends('Agent.Layout.App')
@section('title', 'New Account')

@section('content')
<!-- Page Body Start -->
<main class="pb-3">
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
                                <h2>BMS Office</h2>
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
                                <div class="col px-2">
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-1" class="form-field__label">Lead Owner</label>
                                                    <select id="lead-1" name="lead_owner" class="form-field__input">
                                                      <option value=""  >N/A</option>
                                                        <option value="Administrator" @if(old('lead_owner',$lead->lead_owner) == 'Administrator' ) selected @endif >Administrator</option>
                                                        <option value="FBP DWC"@if(old('lead_owner',$lead->lead_owner) == 'FBP DWC' ) selected @endif >FBP DWC</option>
                                                        <option value="FBP Sales" @if(old('lead_owner',$lead->lead_owner) == 'FBP Sales' ) selected @endif>FBP Sales</option>
                                                        <option value="FBP Universal" @if(old('lead_owner',$lead->lead_owner) == 'FBP Universal' ) selected @endif>FBP Universal</option>
                                                        <option value="FBP Malaysia" @if(old('lead_owner',$lead->lead_owner) == 'FBP Malaysia' ) selected @endif>FBP Malaysia</option>

                                                        <option value="FBP user">FBP user</option>
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
                                                    <label for="lead-2" class="form-field__label">Lead Assignment Date</label>
                                                    <input name="assignment_date" value="{{old('assignment_date',$lead->assignment_date)}}" id="lead-2" type="date" class="form-field__input"
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
                                                    <label for="lead-3" class="form-field__label">Follow up Date</label>
                                                    <input id="lead-3" value="{{old('follow_up',$lead->follow_up)}}" name="follow_up" type="date" type="text" class="form-field__input"
                                                        placeholder="Follow up Date" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-4" class="form-field__label">Lead Status</label>
                                                    <select id="lead-4" name="status_id" class="form-field__input">
                                                      <option value=""  >N/A</option>

                                                      @foreach($statuses as $status)
                                                        <option value="{{$status->id}}" @if(old('status_id',$lead->status_id) == $status->id ) selected @endif >{{$status->name}}</option>
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
                                                    <label for="lead-5" class="form-field__label">How did you hear about us</label>
                                                    <select id="lead-5" name="hear_about_us_id" class="form-field__input">
                                                      <option value=""  >N/A</option>

                                                      @foreach($hear_about_uses as $hear)
                                                        <option value="{{$hear->id}}" @if(old('hear_about_us_id',$lead->hear_about_us_id) == $hear->id ) selected @endif>{{$hear->name}}</option>
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
                                                    <label for="lead-6" class="form-field__label">Booking Date</label>
                                                    <input id="lead-3" value="{{old('booking_date',$lead->booking_date)}}" name="booking_date" type="date" type="text" class="form-field__input"
                                                        placeholder="Follow up Date" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0">
                                        <div class="col-lg-6 px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-7" class="form-field__label">Message</label>
                                                    <input id="lead-7" value="{{old('message',$lead->message)}}" name="message" type="text" class="form-field__input"
                                                        placeholder="Message" value="333" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-8" class="form-field__label">Preferred Office Location</label>
                                                    <input id="lead-7" value="{{old('prefered_office_location',$lead->prefered_office_location)}}" name="prefered_office_location" type="text" class="form-field__input"
                                                        placeholder="Preferred Office Location" />

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">

                                        </div>
                                        <div class="col-lg px-2">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-box my-3 px-2 py-3">
                        <div class="row setting-title-box px-2 mb-3">
                            <div class="col">
                                <h2>Applicant Information</h2>
                            </div>
                        </div>
                        <div class="setting-form-box">
                            <div class="row px-2">
                                <div class="col px-2">
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-20" class="form-field__label">Applicant Title</label>
                                                    <input id="lead-7" value="{{old('title',$lead->title)}}" name="title" type="text" class="form-field__input"
                                                        placeholder="Applicant Title" />


                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-21" class="form-field__label">First Name</label>
                                                    <input name="first_name" value="{{old('first_name',$lead->first_name)}}" id="lead-21" type="text" class="form-field__input"
                                                        placeholder="First Name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-22" class="form-field__label">Last Name</label>
                                                    <input name="last_name" value="{{old('last_name',$lead->last_name)}}" id="lead-22" type="text" class="form-field__input"
                                                        placeholder="Last Name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-23" class="form-field__label">Enquiry</label>
                                                    <input name="enquiry" value="{{old('enquiry',$lead->enquiry)}}" id="lead-23" type="text" class="form-field__input"
                                                        placeholder="Enquiry" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-24" class="form-field__label">Your Current Location</label>
                                                    <input name="current_location" value="{{old('current_location',$lead->current_location)}}" id="lead-23" type="text" class="form-field__input"
                                                        placeholder="Current Location" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-25" class="form-field__label">Email</label>
                                                    <input name="email" value="{{old('email',$lead->email)}}" id="lead-25" type="text" class="form-field__input"
                                                        placeholder="Email" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-26" class="form-field__label">Country Code</label>
                                                    <input name="country_code" value="{{old('country_code',$lead->country_code)}}" id="lead-25" type="text" class="form-field__input"
                                                        placeholder="Country Code" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-27" class="form-field__label">Contact Number</label>
                                                    <input id="lead-27" value="{{old('contact_number',$lead->contact_number)}}" name="contact_number" type="text" class="form-field__input"
                                                        placeholder="Contact Number" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-28" class="form-field__label">Postal / Zip Code</label>
                                                    <input id="lead-28" value="{{old('postal_code',$lead->postal_code)}}" name="postal_code" type="text" class="form-field__input"
                                                        placeholder="Postal / Zip Code" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-29" class="form-field__label">State</label>
                                                    <input name="state" value="{{old('state',$lead->state)}}" id="lead-29" type="text" class="form-field__input"
                                                        placeholder="State" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-30" class="form-field__label">City</label>
                                                    <input name="city" value="{{old('city',$lead->city)}}" id="lead-30" type="text" class="form-field__input"
                                                        placeholder="City" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-31" class="form-field__label">Address</label>
                                                    <input name="address" value="{{old('address',$lead->address)}}" id="lead-31" type="text" class="form-field__input"
                                                        placeholder="Address" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-32" class="form-field__label">Nationality</label>
                                                    <select name="nationality_id" id="lead-32" name="country" class="form-field__input">
                                                      <option value=""  >N/A</option>

                                                      @foreach($nationalities as $nationality)
                                                        <option value="{{$nationality->id}}" @if(old('nationality_id',$lead->nationality_id) == $nationality->id ) selected @endif>{{$nationality->name}}</option>
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
                                                    <label for="lead-33" class="form-field__label">Date of Birth</label>
                                                    <input id="lead-33" value="{{old('birthday',$lead->birthday)}}" type="text" name="birthday" class="form-field__input"
                                                        placeholder="DD/MM/YYYY" />
                                                    <div class="form-dropdown-icon">
                                                        <img src="/assets/images/form-calendar.svg">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-34" class="form-field__label">Age</label>
                                                    <input id="lead-34" value="{{old('age',$lead->age)}}" name="age" type="text" class="form-field__input"
                                                        placeholder="Age" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-37" class="form-field__label">Number of Applicants</label>
                                                    <input name="no_of_applicants" value="{{old('no_of_applicants',$lead->no_of_applicants)}}" id="lead-37" type="text" class="form-field__input"
                                                        placeholder="Number of Applicants" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-36" class="form-field__label">Marital Status</label>
                                                    <select name="maritial_status" id="lead-36" name="country" class="form-field__input">
                                                      <option value=""  >N/A</option>
                                                        <option value="2" @if(old('maritial_status',$lead->maritial_status) == '2' ) selected @endif >single</option>
                                                        <option value="1" @if(old('maritial_status',$lead->maritial_status) == '1' ) selected @endif >maried</option>
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
                                                    <label for="lead-37" class="form-field__label">Enquiry Age</label>
                                                    <input name="enquiry_age" value="{{old('enquiry_age',$lead->enquiry_age)}}" id="lead-37" type="text" class="form-field__input"
                                                        placeholder="Enquiry Age" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-38" class="form-field__label">Gender</label>
                                                    <select name="gender" id="lead-38" name="country" class="form-field__input">
                                                      <option value=""  >N/A</option>

                                                        <option @if(old('gender',$lead->gender) == 'Male' ) selected @endif value="Male">Male</option>
                                                        <option @if(old('gender',$lead->gender) == 'Female' ) selected @endif value="Female">Female</option>
                                                        <option @if(old('Other',$lead->gender) == 'Other' ) selected @endif value="Other">Other</option>
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
                                                    <label for="lead-39" class="form-field__label">Educational Qualification(s)</label>
                                                    <select name="education_qualification_id" id="lead-39" name="country" class="form-field__input">
                                                      <option value=""  >N/A</option>

                                                      @foreach($education_qualifications as $education_qualification)
                                                        <option value="{{$education_qualification->id}}" @if(old('education_qualification_id',$lead->education_qualification_id) == $education_qualification->id ) selected @endif>{{$education_qualification->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="form-dropdown-icon">
                                                        <img src="/assets/images/form-drop-down.svg" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">

                                        </div>
                                        <div class="col-lg px-2">

                                        </div>
                                        <div class="col-lg px-2">

                                        </div>
                                        <div class="col-lg px-2">

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
                    <div class="card-box my-3 px-2 py-3">
                        <div class="row setting-title-box px-2 mb-3">
                            <div class="col">
                                <h2>Tracking</h2>
                            </div>
                        </div>
                        <div class="setting-form-box">
                            <div class="row px-2">
                                <div class="col px-2">
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-41" class="form-field__label">Traffic Source</label>
                                                    <select name="traffic_source_id" id="lead-41" name="country" class="form-field__input">
                                                      <option value=""  >N/A</option>

                                                      @foreach($sources as $source)
                                                        <option @if(old('traffic_source_id',$lead->traffic_source_id) == $source->id ) selected @endif value="{{$source->id}}">{{$source->name}}</option>
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
                                                    <label for="lead-42" class="form-field__label">Traffic Medium</label>
                                                    <select name="traffic_medium_id" id="lead-42" name="country" class="form-field__input">
                                                      <option value=""  >N/A</option>

                                                      @foreach($mediums as $medium)
                                                        <option @if(old('traffic_medium_id',$lead->traffic_medium_id) == $medium->id ) selected @endif value="{{$medium->id}}">{{$medium->name}}</option>
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
                                                    <label for="lead-43" class="form-field__label">Traffic Campaign</label>
                                                    <input value="{{old('traffic_campaign',$lead->traffic_campaign)}}" name="traffic_campaign" id="lead-43" type="text" class="form-field__input"
                                                        placeholder="Traffic Campaign" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-44" class="form-field__label">Traffic Content</label>
                                                    <input value="{{old('traffic_content',$lead->traffic_content)}}" name="traffic_content" id="lead-44" type="text" class="form-field__input"
                                                        placeholder="Traffic Content" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-45" class="form-field__label">Traffic IP</label>
                                                    <input value="{{old('traffic_ip',$lead->traffic_ip)}}" name="traffic_ip" id="lead-45" type="text" class="form-field__input"
                                                        placeholder="Traffic IP" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-46" class="form-field__label">Traffic URL</label>
                                                    <input value="{{old('traffic_url',$lead->traffic_url)}}" name="traffic_url" id="lead-46" type="text" class="form-field__input"
                                                        placeholder="Traffic URL" />
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
                    <div class="card-box my-3 px-2 mt-4 py-3">
                        <div class="row setting-title-box px-2 mb-3">
                            <div class="col">
                                <h2>Migrated Fields</h2>
                            </div>
                        </div>
                        <div class="setting-form-box">
                            <div class="row px-2">
                                <div class="col px-2">
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-47" class="form-field__label">Company</label>
                                                    <input value="{{old('company',$lead->company)}}" name="company" id="lead-46" type="text" class="form-field__input"
                                                        placeholder="Company" />

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-58" class="form-field__label">Appointment Date Time</label>
                                                    <input value="{{old('appointment_date',$lead->appointment_date)}}" id="lead-58"  name="appointment_date" type="date" class="form-field__input"
                                                        placeholder="Appointment Date Time" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-48" class="form-field__label">Secondary Email</label>
                                                    <input value="{{old('secondary_email',$lead->secondary_email)}}" name="secondary_email" id="lead-48" type="text" class="form-field__input"
                                                        placeholder="Secondary Email" />
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-51" class="form-field__label">Country</label>
                                                    <input value="{{old('country',$lead->country)}}" name="country" id="lead-48" type="text" class="form-field__input"
                                                        placeholder="Country" />

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-52" class="form-field__label">Resume Received</label>
                                                    <select id="lead-53" name="resume_recieved" class="form-field__input">
                                                      <option value=""  >N/A</option>
                                                        <option @if(old('resume_recieved',$lead->resume_recieved) == '1' ) selected @endif value="1">yes</option>
                                                        <option @if(old('resume_recieved',$lead->resume_recieved) == '2' ) selected @endif value="2">no</option>
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
                                                  <label for="lead-56" class="form-field__label">Resume ID</label>
                                                  <input value="{{old('resume_id',$lead->resume_id)}}" id="lead-56" name="resume_id" type="text" class="form-field__input"
                                                      placeholder="Resume ID" />
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-53" class="form-field__label">Industry</label>
                                                    <select name="industry_id" id="lead-53"  class="form-field__input">
                                                      <option value=""  >N/A</option>

                                                      @foreach($industries as $industry)
                                                        <option value="{{$industry->id}}" @if(old('industry_id',$lead->industry_id) == $industry->id ) selected @endif>{{$industry->name}}</option>
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
                                                    <label for="lead-54" class="form-field__label">Currency</label>
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
                                                  <label for="lead-48" class="form-field__label">Fax</label>
                                                  <input value="{{old('fax',$lead->fax)}}" name="fax" id="lead-48" type="text" class="form-field__input"
                                                      placeholder="Fax" />
                                              </div>
                                          </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">

                                            </div>
                                        </div>
                                        <div class="col-lg px-2">

                                        </div>

                                        <div class="col-lg px-2">

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
