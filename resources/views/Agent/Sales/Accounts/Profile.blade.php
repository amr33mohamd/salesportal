@extends('Agent.Layout.App')
@section('title', 'Accounts')

@section('content')

<main class="pb-3" id="app">
    <!-- Page Title and Breadcrumb Start -->
    <div class="page-title-breadcrumb my-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-title">
                        Profile
                    </div>
                </div>
                <div class="col-auto">
                    <div class="breadcrumb-box">
                        <ul>
                            <li>Dashboard</li>
                            <li>Leads</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title and Breadcrumb End -->

    <div class="profile-box" style="margin-bottom:50px">
        <div class="container-fluid">
            <div class="card-box p-3">
                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="row m-0">
                            <div class="col-auto p-0">
                                <div class="profile-image">
                                    <img src="{{($account->getFirstMediaUrl()) ? $account->getFirstMediaUrl() :'/assets/images/avatar-5.jpg'}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="user-name">{{$account->first_name}} {{$account->last_name}}
                                    <div class="user-social-link">
                                        <ul>
                                            <li class="mr-2"><a href="#"><img
                                                        src="/assets/images/whatsapp-icon.svg"></a></li>
                                            <li class="mr-2"><a href="#"><img
                                                        src="/assets/images/phone-icon.svg"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="user-info">
                                    <ul>
                                        <li class="w-100 mr-2"><span>Applied for:</span>{{$account->application_type}}
                                        </li>
                                        <li class="mr-2"><span>Case No:</span>{{$account->id}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="member-account-box">
                            <div class="member-account-title">Member Account</div>
                            <div class="member-account-user">
                              @foreach($account->contacts as $contact )
                                {{$contact->first_name}}
                                <!-- <div class="member-account-image mr-2 mt-2">
                                    <img src="/assets/images/avatar-1.jpg">
                                </div> -->
                                @endforeach
                                <!-- <div class="member-account-image mr-2 mt-2">
                                    <img src="/assets/images/avatar-2.jpg">
                                </div>
                                <div class="member-account-image mr-2 mt-2">
                                    <img src="/assets/images/avatar-3.jpg">
                                </div>
                                <div class="member-account-image mr-2 mt-2">
                                    <img src="/assets/images/avatar-4.jpg">
                                </div>
                                <div class="member-account-image mr-2 mt-2">
                                    <img src="/assets/images/avatar-5.jpg">
                                </div>
                                <div class="member-account-image mr-2 mt-2">
                                    <img src="/assets/images/avatar-6.jpg">
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-12">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="row m-0">
                                    <div class="col col-md  pl-1 pr-1">
                                        <div class="user-notification">
                                            <div class="user-notification-title">Meetings</div>
                                            <div class="user-notification-icon-number">
                                                <div class="user-notification-icon">
                                                    <img src="/assets/images/meetings-icon.svg">
                                                </div>
                                                <div class="user-notification-number">
                                                    {{$account->meetings->count()}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-md pl-1 pr-1">
                                        <div class="user-notification">
                                            <div class="user-notification-title">Tasks</div>
                                            <div class="user-notification-icon-number">
                                                <div class="user-notification-icon">
                                                    <img src="/assets/images/tasks-icon.svg">
                                                </div>
                                                <div class="user-notification-number">
                                                    {{$account->tasks->count()}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-auto col-lg col-md-auto pl-1 pr-1">
                                        <div class="user-notification">
                                            <div class="user-notification-title">Scheduled Calls</div>
                                            <div class="user-notification-icon-number">
                                                <div class="user-notification-icon">
                                                    <img src="/assets/images/scheduled-calls-icon.svg">
                                                </div>
                                                <div class="user-notification-number">
                                                    {{$account->calls->count()}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="profile-box-btn">
                                    <button class="btn ml-2"><img src="/assets/images/add-icon.svg"
                                            class="mr-1">Add
                                        Notes</button>

                                </div>
                                <div class="profile-price-box">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <section class="profile-strength my-3">
        <div class="container-fluid">
            <div class="card-box p-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="step-box">
                            <div class="row">
                                <div class="col-lg-9 col-md-12">
                                    <ul class="step-anchor">
                                        <li class="done"><a href="#step-1"><img
                                                    src="/assets/images/tick-icon.svg"></a></li>
                                        <li class="done"><a href="#step-2"><img
                                                    src="/assets/images/tick-icon.svg"></a></li>
                                        <li class="done"><a href="#step-3"><img
                                                    src="/assets/images/tick-icon.svg"></a></li>
                                        <li class="done"><a href="#step-4"><img
                                                    src="/assets/images/tick-icon.svg"></a></li>
                                        <li class="done"><a href="#step-1"><img
                                                    src="/assets/images/tick-icon.svg"></a></li>
                                        <li class="active"><a href="#step-2">Negotiations</a></li>
                                        <li><a href="#step-3">close</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-12 pl-0">
                                    <a href="#" class="mark-stage"><img src="/assets/images/tick-icon.svg"
                                            class="mr-3">Mark Stage as Completed</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="profile-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 mb-3">
                    <div class="card-box p-3">
                        <div class="tab-h-box">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile"
                                        role="tab" aria-controls="profile" aria-selected="true">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="assessments-tab" data-toggle="tab" href="#assessments"
                                        role="tab" aria-controls="assessments" aria-selected="false">Assessments</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="attachments-tab" data-toggle="tab" href="#attachments"
                                        role="tab" aria-controls="attachments" aria-selected="false">Attachments</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="attachments-assign-tab" data-toggle="tab" href="#attachments-assign"
                                        role="tab" aria-controls="attachments-assign" aria-selected="false">Attachments Assigned</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " id="finance-tab" data-toggle="tab" href="#finance"
                                        role="tab" aria-controls="finance" aria-selected="false">Finance</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="portal-tab" data-toggle="tab" href="#portal" role="tab"
                                        aria-controls="portal" aria-selected="false">Client Portal</a>
                                </li>
                            </ul>
                            <div class="tab-content " id="myTabContent">
                                <div class="tab-pane active " id="profile" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    <div class="question-answer p-0 overflow-hidden">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="assessments-box">
                                                    <div class="assessments-user-name">
                                                        <img src="/assets/images/profile-icon.svg" class="mr-2">FBP
                                                        International
                                                    </div>
                                                    <div class="profile-detail mt-2">
                                                        <div class="row mt-1">
                                                            <div class="col-lg">
                                                                <h3>Lead Owner</h3>
                                                                <h2>FBP International</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Created By</h3>
                                                                <h2>FBP DWC <span class="ml-1">Sat, 5 Dec 2020 10:05
                                                                        AM</span></h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Modified By</h3>
                                                                <h2>FBP DWC <span class="ml-1">Sat, 5 Dec 2020 10:05
                                                                        AM</span></h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Lead Assignment Date</h3>
                                                                <h2>{{$account->created_at}}</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Layout</h3>
                                                                <h2>Standard</h2>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-1">
                                                            <div class="col-lg">
                                                                <h3>Sales Consultant</h3>
                                                                <h2>N/A</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Telecaller</h3>
                                                                <h2>Vineeta</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Lead Status</h3>
                                                                <h2>{{($account->status) ? $account->status->name :'N/A'}}</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Follow up Date</h3>
                                                                <h2>{{$account->follow_up}}</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Booking Date</h3>
                                                                <h2>{{$account->booking_date}}</h2>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-1">
                                                            <div class="col-lg">
                                                                <h3>Service</h3>
                                                                <h2>Migration</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Traffic URL</h3>
                                                                <a href="{{$account->traffic_url}}">{{$account->traffic_url}}</a>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Traffic Source</h3>
                                                                <h2>{{$account->traffic_source}}</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Traffic Campaign</h3>
                                                                <h2>{{$account->traffic_campaign}}</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Messages</h3>
                                                                <h2>{{($account->description) ? $account->description :'N/A'}}</h2>

                                                            </div>
                                                        </div>
                                                        <div class="row mt-1">
                                                            <div class="col-lg">
                                                                <h3>Traffic Medium</h3>
                                                                <h2>{{($account->traffic_medium) ? $account->traffic_medium :'N/A'}}</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Entity</h3>
                                                                <h2>{{($account->Entity) ? $account->Entity :'N/A'}}</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3></h3>
                                                                <h2></h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3></h3>
                                                                <h2></h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3></h3>
                                                                <h2></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="assessments-box">
                                                    <div class="assessments-user-name">
                                                        <img src="/assets/images/profile-icon.svg"
                                                            class="mr-2">Applicant Information
                                                    </div>
                                                    <div class="profile-detail mt-2">
                                                        <div class="row mt-1">
                                                            <div class="col-lg">
                                                                <h3>Lead Name</h3>
                                                                <h2>{{($account->first_name) ? $account->first_name :'N/A'}}</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Your Current Location</h3>
                                                                <h2>{{($account->current_location) ? $account->current_location :'N/A'}}</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Country Code</h3>
                                                                <h2>{{$account->country_code}}</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Contact Number</h3>
                                                                <h2>{{$account->mobile}}</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Email</h3>
                                                                <h2>{{($account->email) ? $account->email :'N/A'}}</h2>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-1">
                                                            <div class="col-lg">
                                                                <h3>Nationality</h3>
                                                                <h2>{{($account->nationality) ? $account->nationality->name :'N/A'}}</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>State</h3>
                                                                <h2>{{($account->state) ? $account->state :'N/A'}}</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>City</h3>
                                                                <h2>{{($account->city) ? $account->city :'N/A'}}</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Date of Birth</h3>
                                                                <h2>{{($account->birthday) ? $account->birthday :'N/A'}}</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Age</h3>
                                                                <h2>{{($account->age) ? $account->age :'N/A'}}</h2>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-1">
                                                            <div class="col-lg">
                                                                <h3>Educational Qualification(s)</h3>
                                                                <h2>{{($account->education_qualification) ? $account->education_qualification->name :'N/A'}}</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>English Language Ability (IELTS)</h3>
                                                                <h2>N/A</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Occupation</h3>
                                                                <h2>{{($account->occupation) ? $account->occupation :'N/A'}}</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Years of Work Experience</h3>
                                                                <h2>{{($account->experience) ? $account->experience :'N/A'}}</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>Gender</h3>
                                                                <h2>{{($account->gender) ? $account->gender :'N/A'}}</h2>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-1">
                                                            <div class="col-lg">
                                                                <h3>Marital Status</h3>
                                                                <h2>{{($account->maritial_status) ? $account->maritial_status :'N/A'}}</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3>No of Applicants</h3>
                                                                <h2>{{($account->no_of_applicants) ? $account->no_of_applicants :'N/A'}}</h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3></h3>
                                                                <h2></h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3></h3>
                                                                <h2></h2>
                                                            </div>
                                                            <div class="col-lg">
                                                                <h3></h3>
                                                                <h2></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="assessments-box">
                                                    <div class="assessments-user-name">
                                                        <img src="/assets/images/profile-icon.svg"
                                                            class="mr-2">Quoted / Signed
                                                    </div>
                                                    <div class="profile-detail mt-2">
                                                        <div class="row mt-1">
                                                            <div class="col-lg">
                                                                <h3>Client Code</h3>
                                                                <h2>{{($account->id) ? $account->id :'N/A'}}</h2>
                                                            </div>

                                                            <div class="col-lg">
                                                                <h3>Currency</h3>
                                                                <h2>{{($account->currency) ? $account->currency->name :'N/A'}}</h2>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="assessments" role="tabpanel"
                                    aria-labelledby="assessments-tab">
                                    <div class="question-answer p-0">
                                      <form method="post" action="/accounts/edit/action/{{$account->id}}"  enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg d-flex justify-content-end">
                                                <a href="#" class="btn-admin-default">Cancel</a>
                                                <button type="submit" class="btn-admin-primary ml-3">Save</a>
                                            </div>
                                        </div>
                                        <input type="hidden" name="points" value="@{{points}}"/>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="assessments-box">
                                                    <div class="assessments-user-name">
                                                        <img src="/assets/images/profile-icon.svg"
                                                            class="mr-2">Educational
                                                    </div>
                                                    <div class="assessments-user-question">Educational qualifications</div>
                                                    <select  id="lead-82" previous="0" name="points_education_qualifications" class="form-field__input points">
                                                      <option value="" points="0"  >N/A</option>

                                                        <option @if(old('points_education_qualifications',$account->points_education_qualifications) == 1 ) selected @endif value="1" points="20">A Doctorate from the country educational institution or a Doctorate from another educational institution, that is of a recognised standard.</option>
                                                        <option @if(old('points_education_qualifications',$account->points_education_qualifications) == 2 ) selected @endif value="2" points="15">At least a Bachelor degree from the country educational institution or at least a Bachelor qualification, from another educational institution, that is of a recognised standard.</option>
                                                        <option @if(old('points_education_qualifications',$account->points_education_qualifications) == 3 ) selected @endif value="3" points="10">A diploma or trade qualification from the country educational institution.</option>
                                                        <option @if(old('points_education_qualifications',$account->points_education_qualifications) == 4 ) selected @endif value="4" points="10">Attained a qualification or award recognised by the relevant assessing authority for your nominated skilled occupation as being suitable for that occupation.</option>


                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="assessments-box">
                                                    <div class="assessments-user-name">
                                                        <img src="/assets/images/profile-icon.svg" class="mr-2">Specialist
                                                    </div>
                                                    <div class="assessments-user-question">Specialist education qualification</div>
                                                    <select  id="lead-53" previous="0" name="points_specialist_education_qualifications" class="form-field__input points">
                                                      <option value="" points="0"  >N/A</option>

                                                        <option @if(old('points_specialist_education_qualifications',$account->points_specialist_education_qualifications) == 1 ) selected @endif value="1" points="10">A Masters degree by research or a Doctorate degree from the country educational institution that included at least 2 academic years study  in a relevant field.</option>


                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="assessments-box">
                                                    <div class="assessments-user-name">
                                                        <img src="/assets/images/profile-icon.svg" class="mr-2">English language
                                                    </div>
                                                    <div class="assessments-user-question">English language skills</div>
                                                    <select  id="lead-90"  previous="0"name="points_english" class="form-field__input points">
                                                      <option value="" points="0"  >N/A</option>

                                                        <option @if(old('points_english',$account->points_english) == 1 ) selected @endif value="1" points="0">Competent English</option>
                                                        <option @if(old('points_english',$account->points_english) == 2 ) selected @endif value="2" points="10">Proficient English</option>
                                                        <option @if(old('points_english',$account->points_english) == 3 ) selected @endif value="3" points="20">Superior English</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="assessments-box">
                                                    <div class="assessments-user-name">
                                                        <img src="/assets/images/profile-icon.svg" class="mr-2">Overseas skilled
                                                    </div>
                                                    <div class="assessments-user-question">Overseas skilled employment</div>
                                                    <select  id="lead-51" previous="0" name="points_overseases" class="form-field__input points">
                                                      <option value="" points="0"  >N/A</option>

                                                        <option @if(old('points_overseases',$account->points_overseases) == 1 ) selected @endif value="1" points="0">Less than 3 years</option>
                                                        <option @if(old('points_overseases',$account->points_overseases) == 2 ) selected @endif value="2" points="5">At least 3 but less than 5 years</option>
                                                        <option @if(old('points_overseases',$account->points_overseases) == 3 ) selected @endif value="3" points="10">At least 5 but less than 8 years</option>
                                                        <option @if(old('points_overseases',$account->points_overseases) == 4 ) selected @endif value="4" points="15">At least 8 years</option>


                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="assessments-box">
                                                    <div class="assessments-user-name">
                                                        <img src="/assets/images/profile-icon.svg" class="mr-2">In Country skilled
                                                    </div>
                                                    <div class="assessments-user-question">In Country skilled employmen</div>
                                                    <select  id="lead-52" previous="0" name="points_incountry" class="form-field__input points">
                                                      <option value="" points="0"  >N/A</option>

                                                        <option @if(old('points_incountry',$account->points_incountry) == 1 ) selected @endif value="1" points="0">Less than 1 year</option>
                                                        <option @if(old('points_incountry',$account->points_incountry) == 2 ) selected @endif value="2" points="5">At least 1 but less than 3 years</option>
                                                        <option @if(old('points_incountry',$account->points_incountry) == 3 ) selected @endif value="3" points="10">At least 3 but less than 5 years</option>
                                                        <option @if(old('points_incountry',$account->points_incountry) == 4 ) selected @endif value="4" points="15">At least 5 but less than 8 years</option>
                                                        <option @if(old('points_incountry',$account->points_incountry) == 5 ) selected @endif value="5" points="20">At least 8 years</option>


                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="assessments-box">
                                                    <div class="assessments-user-name">
                                                        <img src="/assets/images/profile-icon.svg" class="mr-2">Specialist
                                                    </div>
                                                    <div class="assessments-user-question">Specialist education qualification</div>
                                                    <select  id="lead-53" previous="0" name="points_specialist_education_qualifications" class="form-field__input points">
                                                      <option value="" points="0"  >N/A</option>

                                                        <option @if(old('points_specialist_education_qualifications',$account->points_specialist_education_qualifications) == 1 ) selected @endif value="1" points="10">A Masters degree by research or a Doctorate degree from the country educational institution that included at least 2 academic years study  in a relevant field.</option>


                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="assessments-box">
                                                    <div class="assessments-user-name">
                                                        <img src="/assets/images/profile-icon.svg"
                                                            class="mr-2">study requirement
                                                    </div>
                                                    <div class="assessments-user-question">study requirement</div>
                                                    <select  id="lead-54" previous="0" name="points_study_requiments" class="form-field__input points">
                                                    <option value="" points="0"  >N/A</option>

                                                      <option @if(old('points_study_requiments',$account->points_study_requiments) == 1 ) selected @endif value="1" points="5">Meet the study requirement</option>


                                                  </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="assessments-box">
                                                    <div class="assessments-user-name">
                                                        <img src="/assets/images/profile-icon.svg"
                                                            class="mr-2">Professional Year
                                                    </div>
                                                    <div class="assessments-user-question">Professional Year in country</div>
                                                    <select  id="lead-55" previous="0" name="points_professional_year" class="form-field__input points">
                                                      <option value=""  points="0"  >N/A</option>

                                                        <option @if(old('points_professional_year',$account->points_professional_year) == 1 ) selected @endif value="1" points="5">Completion of a Professional Year in the country</option>


                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="assessments-box">
                                                    <div class="assessments-user-name">
                                                        <img src="/assets/images/profile-icon.svg"
                                                            class="mr-2">Credentialled community
                                                    </div>
                                                    <div class="assessments-user-question">Credentialled community language</div>
                                                    <select  id="lead-56" previous="0" name="points_credentialled_community_language" class="form-field__input points">
                                                      <option value="" points="0"  >N/A</option>

                                                        <option @if(old('points_credentialled_community_language',$account->points_credentialled_community_language) == 1 ) selected @endif value="1" points="5">Hold a recognised qualification in a credentialled community language</option>


                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="assessments-box">
                                                    <div class="assessments-user-name">
                                                        <img src="/assets/images/profile-icon.svg"
                                                            class="mr-2">Study
                                                    </div>
                                                    <div class="assessments-user-question">Study in regional</div>
                                                    <select  id="lead-57" previous="0" name="points_study_in_regional" class="form-field__input points">
                                                      <option value="" points="0"  >N/A</option>

                                                        <option @if(old('points_study_in_regional',$account->points_study_in_regional) == 1 ) selected @endif value="1" points="5">You must have at least 1 degree</option>


                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="assessments-box">
                                                    <div class="assessments-user-name">
                                                        <img src="/assets/images/profile-icon.svg"
                                                            class="mr-2">Partner skills
                                                    </div>
                                                    <div class="assessments-user-question">Partner skills</div>
                                                    <select   id="lead-58" previous="0" name="points_partner_skills" class="form-field__input points">
                                                      <option value="" points="0"  >N/A</option>

                                                        <option @if(old('points_partner_skills',$account->points_partner_skills) == 1 ) selected @endif value="1" points="10">Your spouse or de facto partner must also be an applicant for this visa and meet age, English and skill criteria</option>
                                                        <option @if(old('points_partner_skills',$account->points_partner_skills) == 2 ) selected @endif value="2" points="5">Your spouse or de facto partner must also be an applicant for this visa and has competent English</option>
                                                        <option @if(old('points_partner_skills',$account->points_partner_skills) == 3 ) selected @endif value="3" points="10">You are single or your partner is  the country citizen or permanent resident</option>


                                                    </select>
                                                </div>
                                            </div>
                                        </div>

</form>


                                    </div>
                                    <div class="your-score">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-auto">
                                                <div class=" d-flex align-items-center">Your
                                                    Score<span class="ml-3">@{{points}}</span></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane fade attachment-btn show " id="attachments-assign" role="tabpanel"
                                    aria-labelledby="attachments-assign-tab">
                                    <div class="top-btn">
                                        <div class="admin-table">
                                            <div class="row admin-table-header">
                                                <div class="col admin-table-filter-box">
                                                    <div
                                                        class="admin-table-filter d-flex justify-content-end align-items-center">
                                                        <button
                                                            class="admin-table-btn admin-table-btn-add mr-3" data-toggle="modal" data-target="#add-attachment2"><img
                                                                class="mr-2"
                                                                src="/assets/images/table-add.svg">Assign Document</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Modal Start -->
                                    <div class="modal fade" id="add-attachment2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="setting-box">
                                                        <div class="card-box px-2 py-3">
                                                            <div class="row setting-title-box px-2 mb-3">
                                                                <div class="col">
                                                                    <p class="p-0">Assign Attachment</p>
                                                                </div>
                                                            </div>
                                                            <div class="setting-form-box">
                                                                <div class="row px-2">
                                                                    <div class="col px-2">
                                                                        <div class="row mx-0">
                                                                            <div class="col-lg px-2">
                                                                                <div class="form-field">
                                                                                  <form action="/account/add/attachment/{{$account->id}}" method="post">
                                                                                    @csrf
                                                                                    <div class="form-field__control">
                                                                                        <label for="attachment-2" class="form-field__label">File Name</label>
                                                                                        <select id="attachment-2" name="document_id" class="form-field__input">
                                                                                          @foreach($documents as $document)
                                                                                            <option value="{{$document->id}}">{{$document->name}} {{$document->category}} / {{$document->category}}</option>
                                                                                            @endforeach
                                                                                        </select>

                                                                                        <div class="form-dropdown-icon">
                                                                                            <img src="/assets/images/form-drop-down.svg" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                        <div class="row mx-0">


                                                                            <div class="col-lg d-flex justify-content-end align-items-end px-2">
                                                                                <button type="submit" class="btn-admin-primary ml-3"><img src="/assets/images/table-add.svg" class="mr-2"/>Assign Attachment</a>
                                                                            </div>
                                                                          </form>
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
                                    <!-- Modal End -->
                                    <div class="row my-3 attachment-row">
                                      @if($account->assiegned_attachments->count() == 0)
                                      <p>No Attachments Uploaded</p>
                                      @else
                                      @foreach($account->assiegned_attachments as $attachment)
                                      <div class="col-lg-2 mb-3" >
                                          <div class="card-box social-box">
                                              <div class="social-box-img"><img  style="height:250px !important" src="{{$attachment->attachment->getFirstMediaUrl()}}"/></div>
                                              <div class="social-box-detail p-3">
                                                  <div class="row">
                                                      <div class="col">

                                                          <p><a href="/account/edit/assign-attachment/{{$attachment->id}}"  >Delete</a></p>
                                                      </div>
                                                      <div class="col-auto d-flex align-items-center">
                                                        <a href="{{$attachment->attachment->getFirstMediaUrl()}}"><img src="/assets/images/direct-download-red.svg"/></a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                        @endforeach
                                        @endif
                                    </div>
                                </div>


                                <div class="tab-pane fade attachment-btn show " id="attachments" role="tabpanel"
                                    aria-labelledby="attachments-tab">
                                    <div class="top-btn">
                                        <div class="admin-table">
                                            <div class="row admin-table-header">
                                                <div class="col admin-table-filter-box">
                                                    <div
                                                        class="admin-table-filter d-flex justify-content-end align-items-center">
                                                        <button
                                                            class="admin-table-btn admin-table-btn-add mr-3" data-toggle="modal" data-target="#add-attachment"><img
                                                                class="mr-2"
                                                                src="/assets/images/table-add.svg">Assign Document</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal Start -->
                                        <div class="modal fade" id="add-attachment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="setting-box">
                                                            <div class="card-box px-2 py-3">
                                                                <div class="row setting-title-box px-2 mb-3">
                                                                    <div class="col">
                                                                        <p class="p-0">Assign Attachment</p>
                                                                    </div>
                                                                </div>
                                                                <div class="setting-form-box">
                                                                    <div class="row px-2">
                                                                        <div class="col px-2">
                                                                            <div class="row mx-0">
                                                                                <div class="col-lg px-2">
                                                                                    <div class="form-field">
                                                                                      <form action="/account/add/attachment/{{$account->id}}" method="post">
                                                                                        @csrf
                                                                                        <div class="form-field__control">
                                                                                            <label for="attachment-2" class="form-field__label">File Name</label>
                                                                                            <select id="attachment-2" name="document_id" class="form-field__input">
                                                                                              @foreach($documents as $document)
                                                                                                <option value="{{$document->id}}">{{$document->name}} {{$document->category}} / {{$document->category}}</option>
                                                                                                @endforeach
                                                                                            </select>

                                                                                            <div class="form-dropdown-icon">
                                                                                                <img src="/assets/images/form-drop-down.svg" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                            <div class="row mx-0">


                                                                                <div class="col-lg d-flex justify-content-end align-items-end px-2">
                                                                                    <button type="submit" class="btn-admin-primary ml-3"><img src="/assets/images/table-add.svg" class="mr-2"/>Assign Attachment</a>
                                                                                </div>
                                                                              </form>
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
                                        <!-- Modal End -->
                                    </div>
                                    <div class="row my-3 attachment-row">
                                      @if($account->attachments->count() == 0)
                                      <p>No Attachments Uploaded</p>
                                      @else
                                      @foreach($account->attachments as $attachment)
                                      <div class="col-lg-2 mb-3" >
                                          <div class="card-box social-box">
                                              <div class="social-box-img"><img  style="height:250px !important" src="{{$attachment->getFirstMediaUrl()}}"/></div>
                                              <div class="social-box-detail p-3">
                                                  <div class="row">
                                                      <div class="col">

                                                          <h4>{{($attachment->status == '1') ? 'waiting' : (($attachment->status == '2') ? 'accepted' : 'rejected')}}</h4>
                                                        <p>  <a href="/account/edit/attachment/{{$attachment->id}}/2"  >Accept</a> <p>
                                                          <p><a href="/account/edit/attachment/{{$attachment->id}}/3"  >Reject</a></p>
                                                      </div>
                                                      <div class="col-auto d-flex align-items-center">
                                                        <a href="{{$attachment->getFirstMediaUrl()}}"><img src="/assets/images/direct-download-red.svg"/></a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="finance" role="tabpanel"
                                    aria-labelledby="finance-tab">
                                    <div class="row my-3  mx-0">
                                        <div class="col-auto pl-0 px-2">
                                            <div class="activities-btn active">
                                                <a href="#"><span class="px-3">Payment Schedule</span></a>
                                                <div class="activities-btn-icon px-2" data-toggle="modal" data-target="#add-payment">
                                                    <img src="/assets/images/add-icon.svg" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal Start -->
                                        <div class="modal fade" id="add-payment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="setting-box">
                                                            <div class="card-box px-2 py-3">
                                                                <div class="row setting-title-box px-2 mb-3">
                                                                    <div class="col">
                                                                        <p class="p-0">Add Payment</p>
                                                                    </div>
                                                                </div>
                                                                <div class="setting-form-box">
                                                                    <div class="row px-2">
                                                                        <div class="col px-2">
                                                                            <div class="row mx-0">
                                                                                <div class="col-lg px-2">
                                                                                    <div class="form-field">
                                                                                        <div class="form-field__control">
                                                                                            <label for="payment-1" class="form-field__label">Milestone</label>
                                                                                            <input id="payment-1" type="text" class="form-field__input"
                                                                                                placeholder="Milestone" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg px-2">
                                                                                    <div class="form-field">
                                                                                        <div class="form-field__control">
                                                                                            <label for="payment-2" class="form-field__label">Due Date</label>
                                                                                            <input id="payment-2" type="text" class="form-field__input"
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
                                                                                            <label for="task-4" class="form-field__label">Amount</label>
                                                                                            <input id="task-4" type="text" class="form-field__input"
                                                                                                placeholder="Amount" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mx-0">
                                                                                <div class="col-lg d-flex justify-content-end align-items-end px-2">
                                                                                    <a href="#" class="btn-admin-primary ml-3"><img src="/assets/images/table-add.svg" class="mr-2"/> Add Payment</a>
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
                                        <!-- Modal End -->
                                        <div class="col-auto px-2">
                                            <a class="activities-btn" href="/finance-invoices.html">
                                                <span class="px-3">Invoices</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Table Section Start -->
                                    <div class="admin-table finance-table">
                                        <div class="row admin-table-body mt-3">
                                            <div class="col">
                                                <div class="table-responsive">
                                                    <table class="table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Payment ID</th>
                                                                <th scope="col">status</th>
                                                                <th scope="col">Due Date</th>
                                                                <th scope="col">Amount</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                          @foreach($account->payments as $payments)
                                                            @foreach($payments->milestones as $milestone)
                                                            <tr>
                                                                <td>{{$milestone->id}}</td>
                                                                <td>{{$milestone->status}}</td>

                                                                <td>{{$milestone->due_date}}</td>
                                                                <td>{{$milestone->amount}}</td>
                                                                <td>
                                                                    <div class="table-action-btn">

                                                                        <a href="#" class="ml-3">
                                                                            <img src="/assets/images/table-edit-btn.svg"/>
                                                                        </a>
                                                                        <a href="#" class="ml-3">
                                                                            <img src="/assets/images/table-delete-btn.svg"/>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                              @endforeach
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Table Section End -->
                                </div>
                                <div class="tab-pane fade" id="portal" role="tabpanel" aria-labelledby="portal-tab">
                                    <div class="row question-answer p-0">
                                        <div class="col-12">
                                            <div class="assessments-box">
                                                <div class="assessments-user-name d-flex align-items-center">
                                                    Client Portal Manager
                                                    <div class="help ml-3">
                                                        Help
                                                        <img src="/assets/images/question-circle.svg" class="ml-2"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg">
                                            <div class="form-field other-field">
                                                <div class="form-field__control">
                                                    <label class="form-field__label">Login</label>
                                                    <label class="switch" for="checkbox">
                                                        <input type="checkbox" id="checkbox" />
                                                        <div class="slider round"></div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg">
                                            <div class="form-field other-field">
                                                <div class="form-field__control">
                                                    <label class="form-field__label">Assessment</label>
                                                    <label class="switch" for="checkbox-2">
                                                        <input type="checkbox" id="checkbox-2" />
                                                        <div class="slider round"></div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg">
                                            <div class="form-field other-field">
                                                <div class="form-field__control">
                                                    <label class="form-field__label">Documents</label>
                                                    <label class="switch" for="checkbox-3">
                                                        <input type="checkbox" id="checkbox-3" />
                                                        <div class="slider round"></div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg"></div>
                                        <div class="col-lg"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg"><button class="btn-admin-primary"><img class="mr-2" src="/assets/images/material-update.svg"/> Rest Password</button></div>
                                        <div class="col-lg"></div>
                                        <div class="col-lg"></div>
                                        <div class="col-lg"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box p-3">
                        <div class="tab-h-box-2">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="activities-tab" data-toggle="tab"
                                        href="#activities" role="tab" aria-controls="activities"
                                        aria-selected="true">Activities</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="notes-tab" data-toggle="tab" href="#notes" role="tab"
                                        aria-controls="notes" aria-selected="true">Notes <img
                                            src="/assets/images/add-icon.svg" class="pl-1" /></a>
                                </li>
                            </ul>
                            <ul class="row my-3  mx-0 nav nav-tabs border-0">
                                <li class="col-auto nav-item pl-0 px-2 ">
                                    <a class="activities-btn nav-link active" id="call-tab" data-toggle="tab"
                                    href="#call" role="tab" aria-controls="call"
                                    aria-selected="true">
                                        <span class="px-3" style="display:inline;padding:5px">Call</span>
                                        <div style="display:inline;" class="activities-btn-icon px-2" data-toggle="modal" data-target="#schedule-a-call">
                                            <img src="/assets/images/add-icon.svg" />
                                        </div>
                                    </a>
                                </li>
                                <li class="col-auto nav-item px-2">
                                    <a class="activities-btn nav-link row" id="meetings-tab" data-toggle="tab"
                                    href="#meetings" role="tab" aria-controls="meetings"
                                    aria-selected="true">
                                        <span class="px-3" style="display:inline;padding:5px">Meetings</span>
                                        <div style="display:inline;" class="activities-btn-icon px-2" data-toggle="modal" data-target="#schedule-a-meeting">
                                            <img src="/assets/images/add-icon.svg" />
                                        </div>
                                    </a>
                                </li>
                                <li class="col-auto nav-item px-2">
                                    <a class="activities-btn nav-link row " id="tasks-tab" data-toggle="tab"
                                    href="#tasks" role="tab" aria-controls="tasks"
                                    aria-selected="true">
                                        <span style="display:inline;padding:5px" class="px-3 col">Tasks</span>
                                        <div style="display:inline;"  class="activities-btn-icon px-2 col" data-toggle="modal" data-target="#schedule-a-task">
                                            <img src="/assets/images/add-icon.svg" />
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="call" role="tabpanel"
                                    aria-labelledby="call-tab">
                                    <div class="activities px-3">
                                        <div class="row">
                                            <div class="activities-title mb-2"> Calls</div>
                                        </div>
                                        <div class="row">
                                          @if($account->calls->count() != 0 )
                                          @foreach($account->calls as $call)
                                            <div class="activities-list">
                                                <div class="activities-box">
                                                    <div class="activities-box-heading">
                                                        <h2><span class="mr-3">{{$call->start}}</h2>
                                                    </div>
                                                    <div class="activities-box-detail">
                                                      {{$call->purpose}}
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @else
                                            <p>No call</p>
                                            @endif
                                        </div>

                                    </div>

                                </div>
                                <div class="tab-pane fade" id="meetings" role="tabpanel"
                                    aria-labelledby="meetings-tab">
                                    <div class="activities px-3">

                                        <div class="row">
                                          @if($account->meetings->count() != 0 )
                                          @foreach($account->meetings as $call)
                                            <div class="activities-list">
                                                <div class="activities-box">
                                                    <div class="activities-box-heading">
                                                        <h2><span class="mr-3">from : {{$call->from}}</h2>
                                                          <h2><span class="mr-3">to : {{$call->to}}</h2>

                                                    </div>
                                                    <div class="activities-box-detail">
                                                      {{$call->name}}
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @else
                                            <p>No Meetings</p>
                                            @endif

                                    </div>


                                  </div>
                                </div>
                                <div class="tab-pane fade" id="tasks" role="tabpanel"
                                    aria-labelledby="tasks-tab">
                                    <div class="activities px-3">

                                        <div class="row">
                                          @if($account->tasks->count() != 0 )
                                          @foreach($account->tasks as $call)
                                            <div class="activities-list">
                                                <div class="activities-box">
                                                    <div class="activities-box-heading">
                                                        <h2><span class="mr-3">{{$call->due_date}}</h2>
                                                    </div>
                                                    <div class="activities-box-detail">
                                                      {{$call->description}}
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @else
                                            <p>No Tasks</p>
                                            @endif

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Start -->

                    <div class="modal fade" id="schedule-a-call" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="setting-box">
                                        <div class="card-box px-2 py-3">
                                            <div class="row setting-title-box px-2 mb-3">
                                                <div class="col">
                                                    <p class="p-0">Schedule a call</p>
                                                </div>
                                            </div>
                                            <form id="callForm" method="post" action="/calls/new/action" >
                                              @csrf
                                            <div class="setting-form-box">
                                                <div class="row px-2">
                                                    <div class="col px-2">
                                                        <div class="row mx-0">
                                                          <input type="hidden" name="form_back" value="1"/>


                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="call-24" class="form-field__label">Related To</label>
                                                                        <input id="call-24" :value="(editing == 1 ) ? current_lead.related_to :null" name="related_to" type="text" class="form-field__input"
                                                                            placeholder="Related To" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="call-23" class="form-field__label">Call Type</label>
                                                                        <input id="call-23" :value="(editing == 1 ) ? current_lead.call_type :null" name="call_type" type="text" class="form-field__input"
                                                                            placeholder="Call Type" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="call-22" class="form-field__label">Outgoing Call Status</label>
                                                                        <input id="call-22" :value="(editing == 1 ) ? current_lead.status :null"  name="status" type="text" class="form-field__input"
                                                                            placeholder="Outgoing Call Status" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mx-0">
                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="call-21" class="form-field__label">Call Start</label>
                                                                        <input id="call-21" :value="(editing == 1 ) ? new Date(current_lead.start).toISOString().substring(0,new Date().toISOString().length-1) :null" name="start" type="datetime-local" class="form-field__input"
                                                                            placeholder="16:30" />

                                                                    </div>
                                                                </div>
                                                            </div>

                                                                          <input type="hidden"  name="callable" value="account,{{$account->id}}" class="form-field__input js-example-basic-single">


                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="call-20" class="form-field__label">Subject</label>
                                                                        <input id="call-20" :value="(editing == 1 ) ? current_lead.subject :null" name="subject" type="text" class="form-field__input"
                                                                            placeholder="Subject" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="call-19" class="form-field__label">Reminder</label>
                                                                        <select id="call-19" name="reminder" class="form-field__input">
                                                                            <option value="">N/A</option>
                                                                            <option value="1" :selected="(editing == 1 && current_lead.reminder == 1) ? true :false">Yes</option>
                                                                            <option value="2" :selected="(editing == 1 && current_lead.reminder == 2) ? true :false">no</option>
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
                                                                <div class="form-field mb-0">
                                                                    <div class="form-field__control">
                                                                        <label for="call-18" class="form-field__label">Call Purpose</label>
                                                                        <input id="call-18" :value="(editing == 1 ) ? current_lead.purpose :null" name="purpose" type="text" class="form-field__input"
                                                                            placeholder="purpose" required />

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg px-2">
                                                                <div class="form-field mb-0">
                                                                    <div class="form-field__control">
                                                                        <label for="call-17" class="form-field__label">Call Agenda</label>
                                                                        <input id="call-17" :value="(editing == 1 ) ? current_lead.agenda :null" name="agenda" type="text" class="form-field__input"
                                                                            placeholder="Call Agenda" />
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-lg d-flex justify-content-end align-items-end col-lg px-2 ">
                                                                <a href="#" class="btn-admin-default ml-3" data-dismiss="modal" v-on:click="editing = 0"><img src="/assets/images/default-close.svg" class="mr-2"/> Cancel</a>
                                                                <button type="submit"  class="btn-admin-primary ml-3"><img src="/assets/images/feather-save.svg" class="mr-2"/> Save</button>
                                                            </div>

                                                          </div>

                                                          </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Modal End -->
                    <div class="modal fade" id="schedule-a-meeting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="setting-box">
                                        <div class="card-box px-2 py-3">
                                            <div class="row setting-title-box px-2 mb-3">
                                                <div class="col">
                                                    <p class="p-0">Schedule a Meeting</p>
                                                </div>
                                            </div>
                                            <form id="callForm" method="post" action="/meetings/new/action" >
                                              @csrf
                                              <input type="hidden" name="form_back" value="1"/>
                                            <div class="setting-form-box">
                                                <div class="row px-2">
                                                    <div class="col px-2">
                                                        <div class="row mx-0">
                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                  <div class="form-field__control">
                                                                      <label for="call-9" class="form-field__label">Meeting Name</label>
                                                                      <input id="call-9" :value="(editing == 1 ) ? current_lead.name :null" name="name" type="text" class="form-field__input"
                                                                          placeholder="Call Type" />
                                                                  </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="call-10" class="form-field__label">location</label>
                                                                        <input id="call-10" :value="(editing == 1 ) ? current_lead.location :null" name="location" type="text" class="form-field__input"
                                                                            placeholder="Related To" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg px-2">
                                                              <div class="form-field">
                                                                  <div class="form-field__control">
                                                                      <label for="call-11" class="form-field__label">confirmed</label>
                                                                      <select id="call-11" name="confirmed" class="form-field__input">
                                                                          <option value="">N/A</option>
                                                                          <option value="1" :selected="(editing == 1 && current_lead.confirmed == 1) ? true :false">Yes</option>
                                                                          <option value="2" :selected="(editing == 1 && current_lead.confirmed == 2) ? true :false">no</option>
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
                                                                        <label for="call-12" class="form-field__label"> Meeting Status</label>
                                                                        <input id="call-12" :value="(editing == 1 ) ? current_lead.status :null"  name="status" type="text" class="form-field__input"
                                                                            placeholder="Outgoing Call Status" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mx-0">
                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="call-13" class="form-field__label">all day</label>
                                                                        <select id="call-13" name="all_day" class="form-field__input">
                                                                            <option value="">N/A</option>
                                                                            <option value="1" :selected="(editing == 1 && current_lead.all_day == 1) ? true :false">Yes</option>
                                                                            <option value="2" :selected="(editing == 1 && current_lead.all_day == 2) ? true :false">no</option>
                                                                        </select>
                                                                        <div class="form-dropdown-icon">
                                                                            <img src="/assets/images/form-drop-down.svg" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden"  name="callable" value="account,{{$account->id}}" class="form-field__input js-example-basic-single">

                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="call-14" class="form-field__label">Source</label>
                                                                        <input id="call-14" :value="(editing == 1 ) ? current_lead.source :null" name="source" type="text" class="form-field__input"
                                                                            placeholder="Subject" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg px-2">

                                                            </div>
                                                        </div>
                                                        <div class="row mx-0">
                                                            <div class="col-lg px-2">
                                                                <div class="form-field mb-0">
                                                                    <div class="form-field__control">
                                                                        <label for="call-15" class="form-field__label">from</label>
                                                                        <input id="call-15" :value="(editing == 1 ) ? new Date(current_lead.from).toISOString().substring(0,new Date(current_lead.from).toISOString().length-1) :null" name="from"  type="datetime-local" class="form-field__input"
                                                                            placeholder="from" />

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg px-2">
                                                                <div class="form-field mb-0">
                                                                    <div class="form-field__control">
                                                                        <label for="call-16" class="form-field__label">to</label>
                                                                        <input id="call-16" :value="(editing == 1 ) ? new Date(current_lead.to).toISOString().substring(0,new Date(current_lead.to).toISOString().length-1) :null" name="to"  type="datetime-local" class="form-field__input"
                                                                            placeholder="to" />
                                                                                              </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg d-flex justify-content-end align-items-end col-lg px-2 ">
                                                                <a href="#" class="btn-admin-default ml-3" data-dismiss="modal" v-on:click="editing = 0"><img src="/assets/images/default-close.svg" class="mr-2"/> Cancel</a>
                                                                <button type="submit"  class="btn-admin-primary ml-3"><img src="/assets/images/feather-save.svg" class="mr-2"/> Save</button>
                                                            </div>

                                                          </div>

                                                          </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Modal End -->
                    <!-- Modal Start -->

                        <div class="modal fade" id="schedule-a-task" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="setting-box">
                                            <div class="card-box px-2 py-3">
                                                <div class="row setting-title-box px-2 mb-3">
                                                    <div class="col">
                                                        <p class="p-0">Schedule a Task</p>
                                                    </div>
                                                </div>
                                                <form id="callForm" method="post" action="/tasks/new/action" >
                                                  @csrf
                                                  <input type="hidden" name="form_back" value="1"/>
                                                <div class="setting-form-box">
                                                    <div class="row px-2">
                                                        <div class="col px-2">
                                                            <div class="row mx-0">
                                                                <div class="col-lg px-2">
                                                                    <div class="form-field">
                                                                      <div class="form-field__control">
                                                                          <label for="call-1" class="form-field__label">Owner</label>
                                                                          <input id="call-1" :value="(editing == 1 ) ? current_lead.owner :null" name="owner" type="text" class="form-field__input"
                                                                              placeholder="Owner" />
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg px-2">
                                                                    <div class="form-field">
                                                                        <div class="form-field__control">
                                                                            <label for="call-2" class="form-field__label">subject</label>
                                                                            <input id="call-2" :value="(editing == 1 ) ? current_lead.subject :null" name="subject" type="text" class="form-field__input"
                                                                                placeholder="subject" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg px-2">
                                                                  <div class="form-field">
                                                                      <div class="form-field__control">
                                                                          <label for="call-3" class="form-field__label">reminder</label>
                                                                          <select id="call-3" name="reminder" class="form-field__input">
                                                                              <option value="">N/A</option>
                                                                              <option value="1" :selected="(editing == 1 && current_lead.reminder == 1) ? true :false">Yes</option>
                                                                              <option value="2" :selected="(editing == 1 && current_lead.reminder == 2) ? true :false">no</option>
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
                                                                            <label for="call-4" class="form-field__label"> Task Status</label>
                                                                            <input id="call-4" :value="(editing == 1 ) ? current_lead.status :null"  name="status" type="text" class="form-field__input"
                                                                                placeholder="Outgoing Call Status" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mx-0">
                                                                <div class="col-lg px-2">
                                                                    <div class="form-field">
                                                                        <div class="form-field__control">
                                                                            <label for="call-5" class="form-field__label">task google id</label>
                                                                            <input id="call-5" :value="(editing == 1 ) ? current_lead.task_google_id :null"  name="task_google_id" type="text" class="form-field__input"
                                                                                placeholder="task google id<" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" name="callable" value="account,{{$account->id}}"/>
                                                                <div class="col-lg px-2">
                                                                    <div class="form-field">
                                                                        <div class="form-field__control">
                                                                            <label for="call-6" class="form-field__label">Source</label>
                                                                            <input id="call-6" :value="(editing == 1 ) ? current_lead.task_source :null" name="task_source" type="text" class="form-field__input"
                                                                                placeholder="Source" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg px-2">
                                                                  <div class="form-field__control">
                                                                      <label for="call-7" class="form-field__label">due date</label>
                                                                      <input required id="call-7" :value="(editing == 1 ) ? current_lead.due_date :null" name="due_date"  type="date" class="form-field__input"
                                                                          placeholder="due date" />
                                                                                            </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mx-0">
                                                                <div class="col-lg px-2">
                                                                  <div class="form-field mb-0">
                                                                    <div class="form-field__control">
                                                                        <label for="call-8" class="form-field__label">Description</label>
                                                                        <input required id="call-8" :value="(editing == 1 ) ? current_lead.description :null" name="description"  type="string" class="form-field__input"
                                                                            placeholder="to" />
                                                                                              </div>
                                                                  </div>
                                                                </div>
                                                                <div class="col-lg px-2">

                                                                </div>

                                                                <div class="col-lg d-flex justify-content-end align-items-end col-lg px-2 ">
                                                                    <a href="#" class="btn-admin-default ml-3" data-dismiss="modal" v-on:click="editing = 0"><img src="/assets/images/default-close.svg" class="mr-2"/> Cancel</a>
                                                                    <button type="submit"  class="btn-admin-primary ml-3"><img src="/assets/images/feather-save.svg" class="mr-2"/> Save</button>
                                                                </div>

                                                              </div>

                                                              </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <!-- Modal End -->
                </div>
                    <!-- Modal End -->
                </div>
            </div>
        </div>
    </section>

</main>
<!-- Page Body End -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js"></script>

@push('scripts')
<script>
const app = new Vue({
    el: '#app',

    data() {
      return {
        points:{{($account->points) ? $account->points:0}}  ,

      }
    },

    created() {
      // console.log(JSON.stringify(this.leads[0]))
      // window.alert = function() {};

      $(document).ready(function(){
        $('#callForm').ajaxForm((response)=> {

            app.addLead(response);
            $('#schedule-a-call').modal('hide');

                   // alert(JSON.stringify(response))
               });
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
