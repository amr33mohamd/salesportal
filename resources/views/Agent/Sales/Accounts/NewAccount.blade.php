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
                                      <h2>Basic Info</h2>
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
                                                          <label for="lead-2" class="form-field__label">Lead Assignment Date</label>
                                                          <input name="assignment_date" value="{{old('assignment_date',$lead->assignment_date)}}" id="lead-2" type="date" class="form-field__input"
                                                              placeholder="DD/MM/YYYY" />

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
                                                          <select id="lead-4" name="status_id" class="form-field__input" required>
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
                                                          <input id="lead-6" value="{{old('booking_date',$lead->booking_date)}}" name="booking_date" type="date" type="text" class="form-field__input"
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
                                                          <textarea id="lead-7" value="{{old('message',$lead->message)}}" name="message" type="text" class="form-field__input"
                                                              placeholder="Message" style="height: 47px" ></textarea>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg px-2">
                                                  <div class="form-field">
                                                      <div class="form-field__control">
                                                          <label for="lead-8" class="form-field__label">Preferred Office Location</label>
                                                          <input id="lead-8" value="{{old('prefered_office_location',$lead->prefered_office_location)}}" name="prefered_office_location" type="text" class="form-field__input"
                                                              placeholder="Preferred Office Location" />

                                                      </div>
                                                  </div>
                                              </div>


                                              <div class="col-lg px-2">
                                                  <div class="form-field">
                                                      <div class="form-field__control">
                                                          <label for="lead-31" class="form-field__label">Given names</label>
                                                          <input id="lead-31" value="{{old('given_names',$lead->given_names)}}" name="given_names" type="text" class="form-field__input"
                                                              placeholder="Given names" />

                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row mx-0">
                                              <div class="col-lg px-2">
                                                  <div class="form-field">
                                                      <div class="form-field__control">
                                                          <label for="lead-37" class="form-field__label">Surname</label>
                                                          <input id="lead-37" value="{{old('surname',$lead->surname)}}" name="surname" type="text" class="form-field__input"
                                                              placeholder="surname"  >
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg px-2">
                                                  <div class="form-field">
                                                      <div class="form-field__control">
                                                          <label for="lead-36" class="form-field__label">Prefered Email</label>
                                                          <input id="lead-36" value="{{old('prefered_email',$lead->prefered_email)}}" name="prefered_email" type="email" class="form-field__input"
                                                              placeholder="prefered email"  >
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg px-2">
                                                  <div class="form-field">
                                                      <div class="form-field__control">
                                                          <label for="lead-33" class="form-field__label">Preferred Name</label>
                                                          <input id="lead-33" value="{{old('preferred_name',$lead->preferred_name)}}" name="preferred_name" type="text" class="form-field__input"
                                                              placeholder="Preferred Name" />

                                                      </div>
                                                  </div>
                                              </div>


                                              <div class="col-lg px-2">
                                                  <div class="form-field">
                                                      <div class="form-field__control">
                                                          <label for="lead-34" class="form-field__label">Home Telephone</label>
                                                          <input id="lead-34" value="{{old('home_telephone',$lead->home_telephone)}}" name="home_telephone" type="text" class="form-field__input"
                                                              placeholder="Home Telephone" />

                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="col-lg px-2">
                                                  <div class="form-field">
                                                      <div class="form-field__control">
                                                          <label for="lead-38" class="form-field__label">Work Telephone</label>
                                                          <input id="lead-38" value="{{old('work_telephone',$lead->work_telephone)}}" name="work_telephone" type="text" class="form-field__input"
                                                              placeholder="Home Telephone" />

                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg px-2">
                                                  <div class="form-field">
                                                      <div class="form-field__control">
                                                          <label for="lead-35" class="form-field__label">Alternative Email</label>
                                                          <input id="lead-35" value="{{old('alternative_email',$lead->alternative_email)}}" name="alternative_email" type="email" class="form-field__input"
                                                              placeholder="Alternative Email" />

                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row mx-0">
                                              <div class="col-lg px-2">
                                                  <div class="form-field">
                                                      <div class="form-field__control">
                                                          <label for="lead-39" class="form-field__label">last contact</label>
                                                          <input id="lead-39" value="{{old('last_contact',$lead->last_contact)}}" name="last_contact" type="date" class="form-field__input"
                                                              placeholder="last contact"  >
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg px-2">
                                                  <div class="form-field">
                                                      <div class="form-field__control">
                                                          <label for="lead-40" class="form-field__label">category</label>
                                                          <input id="lead-40" value="{{old('category',$lead->category)}}" name="category" type="text" class="form-field__input"
                                                              placeholder="category"  >
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg px-2">
                                                  <div class="form-field">
                                                      <div class="form-field__control">
                                                          <label for="lead-41" class="form-field__label">Matter type</label>
                                                          <input id="lead-41" value="{{old('matter_type',$lead->matter_type)}}" name="matter_type" type="text" class="form-field__input"
                                                              placeholder="Matter type" />

                                                      </div>
                                                  </div>
                                              </div>


                                              <div class="col-lg px-2">
                                                  <div class="form-field">
                                                      <div class="form-field__control">
                                                          <label for="lead-42" class="form-field__label">description</label>
                                                          <input id="lead-42" value="{{old('description',$lead->description)}}" name="description" type="text" class="form-field__input"
                                                              placeholder="description" />

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
                                                    <label for="lead-9" class="form-field__label">Applicant Title</label>
                                                    <input id="lead-9" value="{{old('title',$lead->title)}}" name="title" type="text" class="form-field__input"
                                                        placeholder="Applicant Title" />


                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-10" class="form-field__label" required>First Name</label>
                                                    <input name="first_name" value="{{old('first_name',$lead->first_name)}}" id="lead-10" type="text" class="form-field__input"
                                                        placeholder="First Name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-11" class="form-field__label" required>Last Name</label>
                                                    <input name="last_name" value="{{old('last_name',$lead->last_name)}}" id="lead-11" type="text" class="form-field__input"
                                                        placeholder="Last Name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-12" class="form-field__label">Enquiry</label>
                                                    <input name="enquiry" value="{{old('enquiry',$lead->enquiry)}}" id="lead-12" type="text" class="form-field__input"
                                                        placeholder="Enquiry" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-13" class="form-field__label">Your Current Location</label>
                                                    <input name="current_location" value="{{old('current_location',$lead->current_location)}}" id="lead-13" type="text" class="form-field__input"
                                                        placeholder="Current Location" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-14" class="form-field__label" required>Email</label>
                                                    <input name="email" value="{{old('email',$lead->email)}}" id="lead-14" type="text" class="form-field__input"
                                                        placeholder="Email" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-15" class="form-field__label">Country Code</label>
                                                    <input name="country_code" value="{{old('country_code',$lead->country_code)}}" id="lead-15" type="text" class="form-field__input"
                                                        placeholder="Country Code" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-16" class="form-field__label" required>Contact Number</label>
                                                    <input id="lead-16" value="{{old('contact_number',$lead->contact_number)}}" name="contact_number" type="text" class="form-field__input"
                                                        placeholder="Contact Number" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-17" class="form-field__label">Postal / Zip Code</label>
                                                    <input id="lead-17" value="{{old('postal_code',$lead->postal_code)}}" name="postal_code" type="text" class="form-field__input"
                                                        placeholder="Postal / Zip Code" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-18" class="form-field__label">State</label>
                                                    <input name="state" value="{{old('state',$lead->state)}}" id="lead-18" type="text" class="form-field__input"
                                                        placeholder="State" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-19" class="form-field__label">City</label>
                                                    <input name="city" value="{{old('city',$lead->city)}}" id="lead-19" type="text" class="form-field__input"
                                                        placeholder="City" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-20" class="form-field__label">Address</label>
                                                    <input name="address" value="{{old('address',$lead->address)}}" id="lead-20" type="text" class="form-field__input"
                                                        placeholder="Address" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-21" class="form-field__label">Nationality</label>
                                                    <select name="nationality_id" id="lead-21" name="country" class="form-field__input">
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
                                                    <label for="lead-22" class="form-field__label">Date of Birth</label>
                                                    <input id="lead-22" value="{{old('birthday',$lead->birthday)}}" type="date" name="birthday" class="form-field__input"
                                                        placeholder="DD/MM/YYYY" />

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-23" class="form-field__label">Age</label>
                                                    <input id="lead-23" value="{{old('age',$lead->age)}}" name="age" type="text" class="form-field__input"
                                                        placeholder="Age" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-24" class="form-field__label">Number of Applicants</label>
                                                    <input name="no_of_applicants" value="{{old('no_of_applicants',$lead->no_of_applicants)}}" id="lead-24" type="text" class="form-field__input"
                                                        placeholder="Number of Applicants" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-25" class="form-field__label">Marital Status</label>
                                                    <select name="maritial_status" id="lead-25" name="country" class="form-field__input">
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
                                                    <label for="lead-26" class="form-field__label">Enquiry Age</label>
                                                    <input name="enquiry_age" value="{{old('enquiry_age',$lead->enquiry_age)}}" id="lead-26" type="text" class="form-field__input"
                                                        placeholder="Enquiry Age" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-27" class="form-field__label" required>Gender</label>
                                                    <select name="gender" id="lead-27" name="country" class="form-field__input">
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
                                        <div class="col-lg-4 px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-28" class="form-field__label">Educational Qualification(s)</label>
                                                    <select name="education_qualification_id" id="lead-28" name="country" class="form-field__input">
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
                                                    <label for="lead-29" class="form-field__label">Traffic Source</label>
                                                    <select name="traffic_source_id" id="lead-29" name="country" class="form-field__input">
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
                                                    <label for="lead-30" class="form-field__label">Traffic Medium</label>
                                                    <select name="traffic_medium_id" id="lead-30" name="country" class="form-field__input">
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
                                                    <label for="lead-31" class="form-field__label">Traffic Campaign</label>
                                                    <input value="{{old('traffic_campaign',$lead->traffic_campaign)}}" name="traffic_campaign" id="lead-31" type="text" class="form-field__input"
                                                        placeholder="Traffic Campaign" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-32" class="form-field__label">Traffic Content</label>
                                                    <input value="{{old('traffic_content',$lead->traffic_content)}}" name="traffic_content" id="lead-32" type="text" class="form-field__input"
                                                        placeholder="Traffic Content" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-33" class="form-field__label">Traffic IP</label>
                                                    <input value="{{old('traffic_ip',$lead->traffic_ip)}}" name="traffic_ip" id="lead-33" type="text" class="form-field__input"
                                                        placeholder="Traffic IP" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-34" class="form-field__label">Traffic URL</label>
                                                    <input value="{{old('traffic_url',$lead->traffic_url)}}" name="traffic_url" id="lead-34" type="text" class="form-field__input"
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
                                                    <label for="lead-90" class="form-field__label">Company</label>
                                                    <input value="{{old('company',$lead->company)}}" name="company" id="lead-90" type="text" class="form-field__input"
                                                        placeholder="Company" />

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-91" class="form-field__label">Appointment Date Time</label>
                                                    <input value="{{old('appointment_date',$lead->appointment_date)}}" id="lead-91"  name="appointment_date" type="date" class="form-field__input"
                                                        placeholder="Appointment Date Time" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-92" class="form-field__label">Secondary Email</label>
                                                    <input value="{{old('secondary_email',$lead->secondary_email)}}" name="secondary_email" id="lead-92" type="text" class="form-field__input"
                                                        placeholder="Secondary Email" />
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-93" class="form-field__label">Country</label>
                                                    <input value="{{old('country',$lead->country)}}" name="country" id="lead-93" type="text" class="form-field__input"
                                                        placeholder="Country" />

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-94" class="form-field__label">Resume Received</label>
                                                    <select id="lead-94" name="resume_recieved" class="form-field__input">
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
                                                  <label for="lead-95" class="form-field__label">Resume ID</label>
                                                  <input value="{{old('resume_id',$lead->resume_id)}}" id="lead-95" name="resume_id" type="text" class="form-field__input"
                                                      placeholder="Resume ID" />
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="lead-96" class="form-field__label">Industry</label>
                                                    <select name="industry_id" id="lead-96"  class="form-field__input">
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
                                                    <label for="lead-97" class="form-field__label">Currency</label>
                                                    <select id="lead-97" name="currency_id" class="form-field__input">
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
                                                  <label for="lead-98" class="form-field__label">Fax</label>
                                                  <input value="{{old('fax',$lead->fax)}}" name="fax" id="lead-98" type="text" class="form-field__input"
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

                    @foreach($fields as $index => $field)
                    @if($index != 0)
                    <!-- if not first item  -->
                    <!-- if the same group -->
                    @if($fields[$index-1]['extra']['group'] == $field['extra']['group'])
                    <div class="col-lg-2 px-2">
                      <div class="form-field">
                          <div class="form-field__control form-field--is-active">
                              <label for="lead-{{$index+900}}" class="form-field__label">{{$field->label}}</label>
                              @if($field->type == 'text')
                              <input value="{{old($field->name,$lead->fax)}}" name="fax" id="lead-{{$index+900}}" type="text" class="form-field__input"
                                  placeholder="{{$field['label']}}" />
                              @elseif($field->type = 'select')
                              <select name="{{$field->name}}" id="lead-{{$index+900}}"  class="form-field__input ">
                                <option value=""  >N/A</option>

                                @foreach($field['extra']['options'] as $option)
                                  <option value="{{$option['value']}}" @if(old($field->name,$lead->industry_id) == $option['value'] ) selected @endif>{{$option['label']}}</option>
                                @endforeach
                              </select>
                              <div class="form-dropdown-icon" onclick='document.getElementById("lead-{{$index+900}}").click() '>
                                  <img src="/assets/images/form-drop-down.svg" />
                              </div>
                              @endif
                          </div>
                      </div>
                    </div>
                      <!-- if end of row -->
                      @if(($index+1) % 6 == 0)
                      </div>
                      <div class="row mx-0">
                      @endif
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
                                          @if($field->type == 'text')
                                          <input value="{{old($field->name,$lead->fax)}}" name="fax" id="lead-{{$index+900}}" type="text" class="form-field__input"
                                              placeholder="{{$field['label']}}" />
                                          @elseif($field->type = 'select')
                                          <select name="{{$field->name}}" id="lead-{{$index+900}}"  class="form-field__input ">
                                            <option value=""  >N/A</option>

                                            @foreach($field['extra']['options'] as $option)
                                              <option value="{{$option['value']}}" @if(old($field->name,$lead->industry_id) == $option['value'] ) selected @endif>{{$option['label']}}</option>
                                            @endforeach
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
                                        <div class="form-field__control">
                                            <label for="lead-{{$index+900}}" class="form-field__label">{{$field->label}}</label>
                                            <input value="{{old('fax',$lead->fax)}}" name="{{$field['name']}}" id="lead-{{$index+900}}" type="text" class="form-field__input"
                                                placeholder="{{$field->label}}" />
                                        </div>
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
