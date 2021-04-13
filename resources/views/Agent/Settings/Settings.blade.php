@extends('Agent.Layout.App')
@section('title', 'Settings')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
.select2-container--default .select2-selection--single{
  height: 45px !important;
  border: 1px solid #70707030;
}


</style>
<!-- Page Body Start -->
<main class="pb-3">
    <!-- Page Title and Breadcrumb Start -->
    <div class="page-title-breadcrumb my-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-title">
                        Administrator - Edit
                    </div>
                </div>
                <div class="col-auto">
                    <div class="breadcrumb-box">
                        <ul>
                            <li>Settings</li>
                            <li>Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title and Breadcrumb End -->

    <!-- Setting Tab Section Start -->
    <div class="tab-v-box-2 setting-box">
      <form action="{{route('settingsAction')}}" method="post">
        @csrf
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg d-flex justify-content-end" style="padding:10px">
                  <a href="#" class="btn-admin-default">Cancel</a>
                  <button type="submit" class="btn-admin-primary ml-3">Save</a>
              </div>
          </div>
            <div class="row">
                <div class="col-xl-2 col-lg-3 tab-btn-box pr-2">
                    <div class="nav flex-column nav-pills card-box p-2" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-user-profile-tab" data-toggle="pill"
                            href="#v-pills-user-profile" role="tab" aria-controls="v-pills-user-profile"
                            aria-selected="true">
                            <img src="./assets/images/browser.svg" />User Profile
                        </a>
                        <a class="nav-link" id="v-pills-password-tab" data-toggle="pill" href="#v-pills-password"
                            role="tab" aria-controls="v-pills-password" aria-selected="false">
                            <img src="./assets/images/password-envelope.svg" />Password
                        </a>
                        <a class="nav-link" id="v-pills-advanced-tab" data-toggle="pill" href="#v-pills-advanced"
                            role="tab" aria-controls="v-pills-advanced" aria-selected="false">
                            <img src="./assets/images/advanced.svg" />Advanced
                        </a>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-9 tab-content-box pl-2">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-user-profile" role="tabpanel"
                            aria-labelledby="v-pills-user-profile-tab">
                            <div class="card-box px-2 py-3">
                                <div class="row setting-title-box px-2 mb-3">
                                    <div class="col">
                                        <h2>User Profile</h2>
                                    </div>
                                </div>
                                <div class="setting-form-box">
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="1" class="form-field__label">Username</label>
                                                    <input id="1" type="text" name="username" value="{{$user->username}}" class="form-field__input"
                                                        placeholder="Admin" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="2" class="form-field__label">First Name</label>
                                                    <input id="2" type="text" name="first_name" value="{{$user->first_name}}" class="form-field__input"
                                                        placeholder="First Name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="3" class="form-field__label">Last Name</label>
                                                    <input id="3" type="text" name="last_name" value="{{$user->last_name}}" class="form-field__input"
                                                        placeholder="Last Name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="4" class="form-field__label">address street</label>
                                                    <input id="4" type="text" name="address_street" value="{{$user->address_street}}" class="form-field__input"
                                                        placeholder="address street" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                          <div class="form-field">
                                              <div class="form-field__control">
                                                  <label for="5" class="form-field__label">address city</label>
                                                  <input id="5" type="text" name="address_city" value="{{$user->address_city}}" class="form-field__input"
                                                      placeholder="address city" />
                                              </div>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0">
                                      <div class="col-lg px-2">
                                        <div class="form-field">
                                            <div class="form-field__control">
                                                <label for="20" class="form-field__label">address state</label>
                                                <input id="20" type="text" name="address_state" value="{{$user->address_state}}" class="form-field__input"
                                                    placeholder="address state" />
                                            </div>
                                        </div>
                                      </div>
                                      <div class="col-lg px-2">
                                        <div class="form-field">
                                            <div class="form-field__control">
                                                <label for="10" class="form-field__label">postal code</label>
                                                <input id="10" type="text" name="address_code" value="{{$user->address_code}}" class="form-field__input"
                                                    placeholder="postal code" />
                                            </div>
                                        </div>
                                      </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field other-field">
                                                <div class="form-field__control">
                                                    <label for="6" class="form-field__label">Photo</label>
                                                    <input id="6" type="file" name="image" class="other-field" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field other-field">
                                                <div class="form-field__control">
                                                    <label for="7" class="form-field__label">Two Factor
                                                        Authentication:</label>
                                                    <input type="checkbox" name="two_factor_auth" class=" m-0 mt-1" id="7">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="8" class="form-field__label">Referals Link</label>
                                                    <input id="8" type="text" class="form-field__input"
                                                        value="{{ url('/')}}/register?id={{$user->id}}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-box mt-4 px-2 py-3">
                                <div class="row setting-title-box px-2 mb-3">
                                    <div class="col">
                                        <h2>Employee Status</h2>
                                    </div>
                                </div>
                                <div class="setting-form-box">
                                    <div class="row mx-0">

                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="11" class="form-field__label">Job Title</label>
                                                    <input id="11" type="text" name="job_title" value="{{$user->job_title}}" class="form-field__input"
                                                        placeholder="Job Title" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="12" class="form-field__label">Description</label>
                                                    <input id="12" type="text" name="description" value="{{$user->description}}" class="form-field__input"
                                                        placeholder="Work Phone" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="13" class="form-field__label">Mobile</label>
                                                    <input id="13" type="number" name="mobile" value="{{$user->mobile}}" class="form-field__input"
                                                        placeholder="Mobile" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="14" class="form-field__label">Other Phone</label>
                                                    <input id="14" type="number" name="other_phone" value="{{$user->other_phone}}" class="form-field__input"
                                                        placeholder="Other Phone" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="15" class="form-field__label">Department</label>
                                                    <input id="15" type="text" name="department" value="{{$user->department}}" class="form-field__input"
                                                        placeholder="Department" />
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="17" class="form-field__label">Fax</label>
                                                    <input id="17" type="number" name="fax" value="{{$user->fax}}" class="form-field__input"
                                                        placeholder="Fax" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="18" class="form-field__label">Home Phone</label>
                                                    <input id="18" type="number" name="home_phone" value="{{$user->home_phone}}" class="form-field__input"
                                                        placeholder="Home Phone" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="19" class="form-field__label">IM Type</label>
                                                    <input id="19" type="text" name="im_type" value="{{$user->im_type}}" class="form-field__input"
                                                        placeholder="Home Phone" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="50" class="form-field__label">IM Name</label>
                                                    <input id="50" name="im_name" value="{{$user->im_name}}" type="text" class="form-field__input"
                                                        placeholder="IM Name" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-password" role="tabpanel"
                            aria-labelledby="v-pills-password-tab">
                            <div class="card-box px-2 py-3">
                                <div class="row setting-title-box px-2 mb-3">
                                    <div class="col">
                                        <h2>Password</h2>
                                    </div>
                                </div>
                                <div class="setting-form-box">
                                    <div class="row mx-0">
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="27" class="form-field__label">Current
                                                        Password</label>
                                                    <input id="27" type="password" class="form-field__input"
                                                        placeholder="*****************" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="28" class="form-field__label">New Password</label>
                                                    <input id="28" type="password" class="form-field__input"
                                                        placeholder="*****************" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2">
                                            <div class="form-field">
                                                <div class="form-field__control">
                                                    <label for="29" class="form-field__label">Confirm
                                                        Password</label>
                                                    <input id="29" type="password" class="form-field__input"
                                                        placeholder="*****************" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg px-2"></div>
                                        <div class="col-lg px-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-advanced" role="tabpanel"
                            aria-labelledby="v-pills-advanced-tab">
                            <div class="card-box px-2 py-3">
                                <div class="row setting-title-box px-2 mb-3">
                                    <div class="col">
                                        <h2>Email Settings</h2>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg px-2">
                                        <div class="form-field">
                                            <div class="form-field__control">
                                                <label for="30" class="form-field__label">Email Address</label>
                                                <input id="30" type="text" class="form-field__input"
                                                    placeholder="Email Address" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg px-2">
                                        <div class="d-flex justify-content-Start">
                                            <button class="btn-add-field mt-2 mr-3"><img src="./assets/images/form-field-add.svg"></button>
                                            <div class="form-field other-field mt-2 mr-3">
                                                <div class="form-field__control d-flex align-items-center">
                                                    <input id="31" type="radio" class="m-0 mr-2">
                                                    <label for="31" class="form-field__label m-0">Primary</label>
                                                </div>
                                            </div>
                                            <div class="form-field other-field mt-2">
                                                <div class="form-field__control d-flex align-items-center">
                                                    <input id="32" type="checkbox" class="m-0 mr-2">
                                                    <label for="32" class="form-field__label m-0">Opted Out</label>
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
                                <div class="row mx-0">
                                    <div class="col-lg px-2">
                                        <div class="form-field">
                                            <div class="form-field__control">
                                                <label for="34" class="form-field__label">Email Client</label>
                                                <select id="34" name="country" class="form-field__input">
                                                    <option value="">Option</option>
                                                    <option value="">lorem ipsum</option>
                                                    <option value="">lorem ipsum</option>
                                                    <option value="">lorem ipsum</option>
                                                </select>
                                                <div class="form-dropdown-icon">
                                                    <img src="./assets/images/form-drop-down.svg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg px-2">
                                        <div class="form-field">
                                            <div class="form-field__control">
                                                <label for="35" class="form-field__label">Editor</label>
                                                <select id="35" name="country" class="form-field__input">
                                                    <option value="">Option</option>
                                                    <option value="">lorem ipsum</option>
                                                    <option value="">lorem ipsum</option>
                                                    <option value="">lorem ipsum</option>
                                                </select>
                                                <div class="form-dropdown-icon">
                                                    <img src="./assets/images/form-drop-down.svg" />
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
                            <div class="card-box px-2 mt-4 py-3">
                                <div class="row setting-title-box px-2 mb-3">
                                    <div class="col">
                                        <h2>User Settings</h2>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg px-2">
                                        <div class="form-field">
                                            <div class="form-field__control">
                                                <label for="36" class="form-field__label">Export Delimiter</label>
                                                <input id="36" type="text" class="form-field__input"
                                                placeholder="Export Delimiter" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg px-2">
                                        <div class="form-field other-field">
                                            <div class="form-field__control">
                                                <label for="37" class="form-field__label">Notify on Assignment</label>
                                                <input id="37" type="checkbox" class=" m-0 mt-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg px-2">
                                        <div class="form-field">
                                            <div class="form-field__control">
                                                <label for="38" class="form-field__label">Import/Export Character Set</label>
                                                <select id="38" name="country" class="form-field__input">
                                                    <option value="">Option</option>
                                                    <option value="">lorem ipsum</option>
                                                    <option value="">lorem ipsum</option>
                                                    <option value="">lorem ipsum</option>
                                                </select>
                                                <div class="form-dropdown-icon">
                                                    <img src="./assets/images/form-drop-down.svg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg px-2">
                                    </div>
                                    <div class="col-lg px-2">
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg px-2">
                                        <div class="form-field other-field">
                                            <div class="form-field__control">
                                                <label class="form-field__label">Reminders</label>
                                                <div class="d-flex align-items-center mb-3">
                                                    <input id="39" type="checkbox" class="m-0 mr-2">
                                                    <label for="39" class="m-0">Popup</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg px-2">
                                        <div class="form-field other-field">
                                            <div class="form-field__control">
                                                <label class="form-field__label">Actions</label>
                                                <div class="d-flex align-items-center mb-3">
                                                    <input id="40" type="checkbox" class="m-0 mr-2">
                                                    <label for="40" class="m-0">Email invitees</label>
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
                                <div class="row mx-0">
                                    <div class="col-lg px-2">
                                        <div class="form-field">
                                            <div class="form-field__control">
                                                <label for="41" class="form-field__label">Popup</label>
                                                <select id="41" name="country" class="form-field__input">
                                                    <option value="">Option</option>
                                                    <option value="">lorem ipsum</option>
                                                    <option value="">lorem ipsum</option>
                                                    <option value="">lorem ipsum</option>
                                                </select>
                                                <div class="form-dropdown-icon">
                                                    <img src="./assets/images/form-drop-down.svg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg px-2">
                                        <div class="form-field">
                                            <div class="form-field__control">
                                                <label for="42" class="form-field__label">Popup</label>
                                                <select id="42" name="country" class="form-field__input">
                                                    <option value="">Option</option>
                                                    <option value="">lorem ipsum</option>
                                                    <option value="">lorem ipsum</option>
                                                    <option value="">lorem ipsum</option>
                                                </select>
                                                <div class="form-dropdown-icon">
                                                    <img src="./assets/images/form-drop-down.svg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg px-2">
                                        <button class="btn-primary btn-admin-primary mt-2">Enable Desktop Notifications</button>
                                    </div>
                                    <div class="col-lg px-2">
                                    </div>
                                    <div class="col-lg px-2">
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg px-2">
                                        <div class="form-field other-field">
                                            <div class="form-field__control">
                                                <label for="43" class="form-field__label">Show Full Names</label>
                                                <input id="43" type="checkbox" class="m-0 mr-2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg px-2">
                                        <div class="form-field other-field">
                                            <div class="form-field__control">
                                                <label for="44" class="form-field__label">Mail Merge</label>
                                                <input id="44" type="checkbox" class="m-0 mr-2">
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
                            <div class="card-box px-2 mt-4 py-3">
                                <div class="row setting-title-box px-2 mb-3">
                                    <div class="col">
                                        <h2>Locale Settings</h2>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg px-2">
                                        <div class="form-field">
                                            <div class="form-field__control">
                                                <label for="3-1" class="form-field__label">Date Format</label>
                                                <input id="3-1" type="text" class="form-field__input"
                                                    placeholder="DD/MM/YYYY" />
                                                <div class="form-dropdown-icon">
                                                    <img src="./assets/images/form-calendar.svg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg px-2">
                                        <div class="form-field">
                                            <div class="form-field__control">
                                                <label for="3-2" class="form-field__label">Currency</label>
                                                <select id="3-2" name="country" class="form-field__input">
                                                    <option value="">Option</option>
                                                    <option value="">lorem ipsum</option>
                                                    <option value="">lorem ipsum</option>
                                                    <option value="">lorem ipsum</option>
                                                </select>
                                                <div class="form-dropdown-icon">
                                                    <img src="./assets/images/form-drop-down.svg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg px-2">
                                        <div class="form-field">
                                            <div class="form-field__control">
                                                <label for="3-3" class="form-field__label">Time Format</label>
                                                <select id="3-3" name="country" class="form-field__input">
                                                    <option value="">Option</option>
                                                    <option value="">lorem ipsum</option>
                                                    <option value="">lorem ipsum</option>
                                                    <option value="">lorem ipsum</option>
                                                </select>
                                                <div class="form-dropdown-icon">
                                                    <img src="./assets/images/form-drop-down.svg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg px-2">
                                        <div class="form-field">
                                            <div class="form-field__control">
                                                <label for="3-4" class="form-field__label">Currency Significant
                                                    Digits</label>
                                                <select id="3-4" name="country" class="form-field__input">
                                                    <option value="">Option</option>
                                                    <option value="">lorem ipsum</option>
                                                    <option value="">lorem ipsum</option>
                                                    <option value="">lorem ipsum</option>
                                                </select>
                                                <div class="form-dropdown-icon">
                                                    <img src="./assets/images/form-drop-down.svg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg px-2">
                                        <div class="form-field">
                                            <div class="form-field__control">
                                                <label for="3-5" class="form-field__label">Time Zone</label>
                                                <select id="3-5" name="country" class="form-field__input">
                                                    <option value="">Option</option>
                                                    <option value="">lorem ipsum</option>
                                                    <option value="">lorem ipsum</option>
                                                    <option value="">lorem ipsum</option>
                                                </select>
                                                <div class="form-dropdown-icon">
                                                    <img src="./assets/images/form-drop-down.svg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg px-2">
                                        <div class="form-field">
                                            <div class="form-field__control">
                                                <label for="3-6" class="form-field__label">Example</label>
                                                <input id="3-6" type="text" class="form-field__input"
                                                    placeholder="$123,456,789.00" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg px-2">
                                        <div class="form-field other-field">
                                            <div class="form-field__control">
                                                <label for="3-7" class="form-field__label">User Wizard
                                                    Prompt</label>
                                                <input id="3-7" type="checkbox" class=" m-0 mt-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg px-2">
                                        <div class="form-field">
                                            <div class="form-field__control">
                                                <label for="3-8" class="form-field__label">1000s separator</label>
                                                <input id="3-8" type="text" class="form-field__input"
                                                    placeholder="1" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg px-2">
                                        <div class="form-field">
                                            <div class="form-field__control">
                                                <label for="3-9" class="form-field__label">Name Display
                                                    Format</label>
                                                <select id="3-9" name="country" class="form-field__input">
                                                    <option value="">Option</option>
                                                    <option value="">lorem ipsum</option>
                                                    <option value="">lorem ipsum</option>
                                                    <option value="">lorem ipsum</option>
                                                </select>
                                                <div class="form-dropdown-icon">
                                                    <img src="./assets/images/form-drop-down.svg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg px-2">
                                    </div>
                                </div>
                            </div>
                            <div class="card-box px-2 mt-4 py-3">
                                <div class="row setting-title-box px-2 mb-3">
                                    <div class="col">
                                        <h2>Calendar Options</h2>
                                    </div>
                                </div>
                                <div class="question-answer">
                                    <div class="row m-0">
                                        <div class="cal-auto">
                                            <div class="assessments-box">
                                                <div class="assessments-user-question">Publish Key</div>
                                                <div  class="answer-accordion">
                                                    <button>
                                                        19d582d-8a00-2044-10ea-5fe202266fd1
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-0">
                                        <div class="cal-auto">
                                            <div class="assessments-box">
                                                <div class="assessments-user-question">Publish at my location</div>
                                                <div class="assessments-user-answer">
                                                    http://suitecrm.thehrdeck.com/vcal_server.php/type=vfb&source=outlook&key=19d582d-8a00-2044-10ea-5fe202266fd1&user_name=admin
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-0">
                                        <div class="cal-auto">
                                            <div class="assessments-box">
                                                <div class="assessments-user-question">Search location</div>
                                                <div class="assessments-user-answer">
                                                    http://suitecrm.thehrdeck.com/vcal_server.php/type=vfb&key=19d582d-8a00-2044-10ea-5fe202266fd1&email=%NAME%@%SERVER%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-0">
                                        <div class="cal-auto">
                                            <div class="assessments-box">
                                                <div class="assessments-user-question">iCal integration URL</div>
                                                <div class="assessments-user-answer">
                                                    http://suitecrm.thehrdeck.com/ical_server.php?type=ics&key=19d582d-8a00-2044-10ea-5fe202266fd1&user_name=admin
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-0">
                                        <div class="cal-auto">
                                            <div class="assessments-box">
                                                <div class="assessments-user-question">First Day of Week</div>
                                                <div id="accordion" class="answer-accordion">
                                                    <div id="test2">
                                                        <button data-toggle="collapse" data-target="#question2" aria-expanded="true" aria-controls="question2">
                                                            Sunday
                                                            <span></span>
                                                        </button>
                                                    </div>
                                                    <div id="question2" class="collapse answer-text" aria-labelledby="test2" data-parent="#accordion">

                                                    </div>
                                                </div>
                                            </div>
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
    </div>
    <!-- Setting Tab Section End -->
</main>
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script>








$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
$('.form-field__input').each(function() {
  if ($(this).val() != ""  ) {
    $(this).parent().parent().addClass('form-field--is-active');
  }
  else {
    $(this).parent().parent().removeClass('form-field--is-active');
  }
});
</script>
@endpush
