@extends('Agent.Layout.App')
@section('title', 'Accounts')

@section('content')

<main class="pb-3">
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

    <div class="profile-box">
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
                                    <button class="btn ml-2"><img src="/assets/images/view-invoices-icon.svg"
                                            class="mr-1">View
                                        Invoices</button>
                                </div>
                                <div class="profile-price-box">
                                    <ul>
                                        <li class="ml-3 mt-2"><span class="mr-1">Due</span>$2345</li>
                                        <li class="ml-3 mt-2"><span class="mr-1">Paid</span>$45.54</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="profile-strength my-3">
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
    </section>
    <section class="profile-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mb-3">
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
                                                                <h2>{{($account->nationality) ? $account->nationality :'N/A'}}</h2>
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
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="assessments-box">
                                                    <div class="assessments-user-name">
                                                        <img src="/assets/images/profile-icon.svg"
                                                            class="mr-2">Visa Subclass
                                                    </div>
                                                    <div class="assessments-user-question">Which of the following
                                                        subclasses are you applying for?</div>
                                                    <div id="accordion" class="answer-accordion">
                                                        <div id="test1">
                                                            <button data-toggle="collapse" data-target="#question1"
                                                                aria-expanded="true" aria-controls="question1">
                                                                Skilled Independent Subclass 189
                                                                <span></span>
                                                            </button>
                                                        </div>
                                                        <div id="question1" class="collapse answer-text"
                                                            aria-labelledby="test1" data-parent="#accordion">
                                                            Skilled Independent Subclass 189
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="assessments-box">
                                                    <div class="assessments-user-name">
                                                        <img src="/assets/images/profile-icon.svg" class="mr-2">Age
                                                    </div>
                                                    <div class="assessments-user-question">Which age band do you fit
                                                        into?</div>
                                                    <div id="accordion" class="answer-accordion">
                                                        <div id="test2">
                                                            <button data-toggle="collapse" data-target="#question2"
                                                                aria-expanded="true" aria-controls="question2">
                                                                18 to 24
                                                                <span></span>
                                                            </button>
                                                        </div>
                                                        <div id="question2" class="collapse answer-text"
                                                            aria-labelledby="test2" data-parent="#accordion">
                                                            18 to 24
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="assessments-box">
                                                    <div class="assessments-user-name">
                                                        <img src="/assets/images/profile-icon.svg"
                                                            class="mr-2">English Language Ability
                                                    </div>
                                                    <div class="assessments-user-question">How would you rate your
                                                        English language ability?</div>
                                                    <div id="accordion" class="answer-accordion">
                                                        <div id="test3">
                                                            <button data-toggle="collapse" data-target="#question3"
                                                                aria-expanded="true" aria-controls="question3">
                                                                Proficient English
                                                                <span></span>
                                                            </button>
                                                        </div>
                                                        <div id="question3" class="collapse answer-text"
                                                            aria-labelledby="test3" data-parent="#accordion">
                                                            Proficient English
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="assessments-box">
                                                    <div class="assessments-user-name">
                                                        <img src="/assets/images/profile-icon.svg"
                                                            class="mr-2">Australian Educational Qualification
                                                    </div>
                                                    <div class="assessments-user-question">Have you met the
                                                        requirements for the award of degree, diploma, advanced
                                                        diploma or trade qualification(s) which took at least 2
                                                        years (92 weeks) of full-time study in Australia at an
                                                        Australian institution?</div>
                                                    <div id="accordion" class="answer-accordion">
                                                        <div id="test4">
                                                            <button data-toggle="collapse" data-target="#question4"
                                                                aria-expanded="true" aria-controls="question4">
                                                                Yes: Degree, diploma advanced diploma or trade
                                                                qualification(s) taking at least 2 years of
                                                                full-time study in Australia.
                                                                <span></span>
                                                            </button>
                                                        </div>
                                                        <div id="question4" class="collapse answer-text"
                                                            aria-labelledby="test4" data-parent="#accordion">
                                                            Yes: Degree, diploma advanced diploma or trade
                                                            qualification(s) taking at least 2 years of full-time
                                                            study in Australia.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="assessments-box">
                                                    <div class="assessments-user-name">
                                                        <img src="/assets/images/profile-icon.svg"
                                                            class="mr-2">Visa Subclass
                                                    </div>
                                                    <div class="assessments-user-question">Which of the following
                                                        subclasses are you applying for?</div>
                                                    <div id="accordion" class="answer-accordion">
                                                        <div id="test5">
                                                            <button data-toggle="collapse" data-target="#question5"
                                                                aria-expanded="true" aria-controls="question5">
                                                                Skilled Independent Subclass 189
                                                                <span></span>
                                                            </button>
                                                        </div>
                                                        <div id="question5" class="collapse answer-text"
                                                            aria-labelledby="test5" data-parent="#accordion">
                                                            Skilled Independent Subclass 189
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="assessments-box">
                                                    <div class="assessments-user-name">
                                                        <img src="/assets/images/profile-icon.svg" class="mr-2">Age
                                                    </div>
                                                    <div class="assessments-user-question">Which age band do you fit
                                                        into?</div>
                                                    <div id="accordion" class="answer-accordion">
                                                        <div id="test6">
                                                            <button data-toggle="collapse" data-target="#question6"
                                                                aria-expanded="true" aria-controls="question6">
                                                                18 to 24
                                                                <span></span>
                                                            </button>
                                                        </div>
                                                        <div id="question6" class="collapse answer-text"
                                                            aria-labelledby="test6" data-parent="#accordion">
                                                            18 to 24
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="your-score">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-auto">
                                                <div class="score-title-box d-flex align-items-center">Your
                                                    Score<span class="ml-3">35</span></div>
                                            </div>
                                            <div class="col pl-0">
                                                <div class="score-text">
                                                    As the pass mark for Skilled - Independent Subclass 189 is 65,
                                                    you would not appear to meet the criteria for this type of visa.
                                                </div>
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
                                      @if($account->attachments->count() == 0)
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
                <!-- <div class="col-md-4">
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
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="activities" role="tabpanel"
                                    aria-labelledby="activities-tab">
                                    <div class="row my-3  mx-0">
                                        <div class="col-auto pl-0 px-2">
                                            <a class="activities-btn active">
                                                <span class="px-3">Call</span>
                                                <div class="activities-btn-icon px-2" data-toggle="modal" data-target="#Call">
                                                    <img src="/assets/images/add-icon.svg" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-auto px-2">
                                            <a class="activities-btn">
                                                <span class="px-3">Meetings</span>
                                                <div class="activities-btn-icon px-2" data-toggle="modal" data-target="#meeting-information">
                                                    <img src="/assets/images/add-icon.svg" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-auto px-2">
                                            <a class="activities-btn">
                                                <span class="px-3">Tasks</span>
                                                <div class="activities-btn-icon px-2" data-toggle="modal" data-target="#add-a-task">
                                                    <img src="/assets/images/add-icon.svg" />
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="activities px-3">
                                        <div class="row">
                                            <div class="activities-title mb-2">Previous Calls</div>
                                        </div>
                                        <div class="row">
                                            <div class="activities-list">
                                                <div class="activities-box">
                                                    <div class="activities-box-heading">
                                                        <h2><span class="mr-3">Today</span>2:00 P.M</h2>
                                                        <h2>Ashwin Jayaraman</h2>
                                                    </div>
                                                    <div class="activities-box-detail">Lorem Ipsum is simply dummy
                                                        text
                                                        of the printing and typesetting industry. Lorem Ipsum ha
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="activities-list">
                                                <div class="activities-box">
                                                    <div class="activities-box-heading">
                                                        <h2><span class="mr-3">Today</span>2:00 P.M</h2>
                                                        <h2>Ashwin Jayaraman</h2>
                                                    </div>
                                                    <div class="activities-box-detail">Lorem Ipsum is simply dummy
                                                        text
                                                        of the printing and typesetting industry. Lorem Ipsum ha
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="activities-list">
                                                <div class="activities-box">
                                                    <div class="activities-box-heading">
                                                        <h2><span class="mr-3">Today</span>2:00 P.M</h2>
                                                        <h2>Ashwin Jayaraman</h2>
                                                    </div>
                                                    <div class="activities-box-detail">Lorem Ipsum is simply dummy
                                                        text
                                                        of the printing and typesetting industry. Lorem Ipsum ha
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="activities activities-2 px-3 mt-3">
                                        <div class="row">
                                            <div class="activities-title mb-2">Scheduled Calls</div>
                                        </div>
                                        <div class="row">
                                            <div class="activities-list w-100">
                                                <div class="activities-box">
                                                    <div class="activities-box-heading">
                                                        <h2><span class="mr-3">Today</span>2:00 P.M</h2>
                                                        <h2>Ashwin Jayaraman</h2>
                                                    </div>
                                                    <div
                                                        class="activities-box-detail d-flex align-items-center justify-content-center">
                                                        <div class="w-100">12/12/2020</div>
                                                        <div class="w-100">2 hours remaining</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="activities-list w-100">
                                                <div class="activities-box">
                                                    <div class="activities-box-heading">
                                                        <h2><span class="mr-3">Today</span>2:00 P.M</h2>
                                                        <h2>Ashwin Jayaraman</h2>
                                                    </div>
                                                    <div
                                                        class="activities-box-detail d-flex align-items-center justify-content-center">
                                                        <div class="w-100">12/12/2020</div>
                                                        <div class="w-100">2 hours remaining</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="activities-list w-100">
                                                <div class="activities-box">
                                                    <div class="activities-box-heading">
                                                        <h2><span class="mr-3">Today</span>2:00 P.M</h2>
                                                        <h2>Ashwin Jayaraman</h2>
                                                    </div>
                                                    <div
                                                        class="activities-box-detail d-flex align-items-center justify-content-center">
                                                        <div class="w-100">12/12/2020</div>
                                                        <div class="w-100">2 hours remaining</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="activities-list w-100">
                                                <div class="activities-box">
                                                    <div class="activities-box-heading">
                                                        <h2><span class="mr-3">Today</span>2:00 P.M</h2>
                                                        <h2>Ashwin Jayaraman</h2>
                                                    </div>
                                                    <div
                                                        class="activities-box-detail d-flex align-items-center justify-content-center">
                                                        <div class="w-100">12/12/2020</div>
                                                        <div class="w-100">2 hours remaining</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                 <div class="tab-pane fade" id="notes" role="tabpanel" aria-labelledby="notes-tab">notes</div>
                            </div>
                        </div>
                    </div>
                  -->
                    <!-- Modal Start -->
                    <div class="modal fade" id="Call" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="setting-box">
                                        <div class="card-box d-flex align-items-center justify-content-center p-2">
                                            <a href="#" class="btn-admin-primary w-100">Schedule a Call</a>
                                            <a href="#" class="btn-admin-danger w-100 ml-2">Log a Call</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal End -->
                    <!-- Modal Start -->
                    <div class="modal fade" id="meeting-information" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="setting-box">
                                        <div class="card-box px-2 py-3">
                                            <div class="row setting-title-box px-2 mb-3">
                                                <div class="col">
                                                    <p class="p-0">Meeting Information</p>
                                                </div>
                                            </div>
                                            <div class="setting-form-box">
                                                <div class="row px-2">
                                                    <div class="col px-2">
                                                        <div class="row mx-0">
                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="meeting-1" class="form-field__label">Client Name</label>
                                                                        <input id="meeting-1" type="text" class="form-field__input"
                                                                            placeholder="Client Name" />
                                                                        <div class="form-dropdown-icon">
                                                                            <img src="/assets/images/search-icon.svg" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="meeting-2" class="form-field__label">Meeting Name</label>
                                                                        <input id="meeting-2" type="text" class="form-field__input"
                                                                            placeholder="Meeting Name" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="meeting-3" class="form-field__label">Location</label>
                                                                        <input id="meeting-3" type="text" class="form-field__input"
                                                                            placeholder="Location" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="meeting-4" class="form-field__label">All Day</label>
                                                                        <select id="meeting-4" name="country" class="form-field__input">
                                                                            <option value="">All Day</option>
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
                                                        </div>
                                                        <div class="row mx-0">
                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="meeting-5" class="form-field__label">Start Date</label>
                                                                        <input id="meeting-5" type="text" class="form-field__input"
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
                                                                        <label for="meeting-6" class="form-field__label">Start Time</label>
                                                                        <input id="meeting-6" type="text" class="form-field__input"
                                                                            placeholder="16:30" />
                                                                        <div class="form-dropdown-icon">
                                                                            <img src="/assets/images/form-time.svg" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="meeting-7" class="form-field__label">End Date</label>
                                                                        <input id="meeting-7" type="text" class="form-field__input"
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
                                                                        <label for="meeting-8" class="form-field__label">End Time</label>
                                                                        <input id="meeting-8" type="text" class="form-field__input"
                                                                            placeholder="16:30" />
                                                                        <div class="form-dropdown-icon">
                                                                            <img src="/assets/images/form-time.svg" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mx-0">
                                                            <div class="col-lg px-2">
                                                                <div class="form-field mb-0">
                                                                    <div class="form-field__control">
                                                                        <label for="meeting-9" class="form-field__label">Event Status</label>
                                                                        <select id="meeting-9" name="country" class="form-field__input">
                                                                            <option value="">Event Status</option>
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
                                                                <div class="form-field mb-0">
                                                                    <div class="form-field__control">
                                                                        <label for="meeting-10" class="form-field__label">Event Source</label>
                                                                        <input id="meeting-10" type="text" class="form-field__input"
                                                                            placeholder="Event Source" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg px-2">
                                                                <div class="form-field mb-0">
                                                                    <div class="form-field__control">
                                                                        <label for="meeting-11" class="form-field__label">Confirmed Booking</label>
                                                                        <select id="meeting-11" name="country" class="form-field__input">
                                                                            <option value="">Confirmed Booking</option>
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
                                                            <div class="col-lg d-flex justify-content-end align-items-end px-2">
                                                                <a href="#" class="btn-admin-default" data-dismiss="modal"><img src="assets/images/default-close.svg" class="mr-2"/> Cancel</a>
                                                                <a href="#" class="btn-admin-primary ml-3"><img src="/assets/images/feather-save.svg" class="mr-2"/> Save</a>
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
                    <!-- Modal Start -->
                    <div class="modal fade" id="add-a-task" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="setting-box">
                                        <div class="card-box px-2 py-3">
                                            <div class="row setting-title-box px-2 mb-3">
                                                <div class="col">
                                                    <p class="p-0">Add a Task</p>
                                                </div>
                                            </div>
                                            <div class="setting-form-box">
                                                <div class="row px-2">
                                                    <div class="col px-2">
                                                        <div class="row mx-0">
                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="task-1" class="form-field__label">Task Owner</label>
                                                                        <input id="task-1" type="text" class="form-field__input"
                                                                            placeholder="Task Owner" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="task-2" class="form-field__label">Due Date</label>
                                                                        <input id="task-2" type="text" class="form-field__input"
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
                                                                        <label for="task-3" class="form-field__label">All Day</label>
                                                                        <select id="task-3" name="country" class="form-field__input">
                                                                            <option value="">All Day</option>
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
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="task-4" class="form-field__label">Client Name</label>
                                                                        <input id="task-4" type="text" class="form-field__input"
                                                                            placeholder="Client Name" />
                                                                        <div class="form-dropdown-icon">
                                                                            <img src="/assets/images/search-icon.svg" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mx-0">
                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="task-5" class="form-field__label">Monster Leads</label>
                                                                        <input id="task-5" type="text" class="form-field__input"
                                                                            placeholder="task" />
                                                                        <div class="form-dropdown-icon">
                                                                            <img src="/assets/images/search-icon.svg" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="task-6" class="form-field__label">Status</label>
                                                                        <select id="task-6" name="country" class="form-field__input">
                                                                            <option value="">Status</option>
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
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="task-7" class="form-field__label">Priority</label>
                                                                        <select id="task-7" name="country" class="form-field__input">
                                                                            <option value="">Priority</option>
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
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="task-8" class="form-field__label">Reminder</label>
                                                                        <select id="task-8" name="country" class="form-field__input">
                                                                            <option value="">Reminder</option>
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
                                                        </div>
                                                        <div class="row mx-0">
                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="task-9" class="form-field__label">Repeat</label>
                                                                        <select id="task-9" name="country" class="form-field__input">
                                                                            <option value="">Repeat</option>
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
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="task-10" class="form-field__label">Currency</label>
                                                                        <select id="task-10" name="country" class="form-field__input">
                                                                            <option value="">Currency</option>
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
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="task-11" class="form-field__label">Exchange Rate</label>
                                                                        <input id="task-11" type="text" class="form-field__input"
                                                                            placeholder="Exchange Rate" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="task-12" class="form-field__label">Task Source</label>
                                                                        <input id="task-12" type="text" class="form-field__input"
                                                                            placeholder="Task Source" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mx-0">
                                                            <div class="col-lg px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="task-13" class="form-field__label">Tasks_GoogleId</label>
                                                                        <input id="task-13" type="text" class="form-field__input"
                                                                            placeholder="Tasks_GoogleId" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-9 px-2">
                                                                <div class="form-field">
                                                                    <div class="form-field__control">
                                                                        <label for="task-14" class="form-field__label">Description</label>
                                                                        <input id="task-14" type="text" class="form-field__input"
                                                                            placeholder="Description" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mx-0">
                                                            <div class="col-lg d-flex justify-content-end align-items-end px-2">
                                                                <a href="#" class="btn-admin-default" data-dismiss="modal"><img src="assets/images/default-close.svg" class="mr-2"/> Cancel</a>
                                                                <a href="#" class="btn-admin-primary ml-3"><img src="/assets/images/feather-save.svg" class="mr-2"/> Save</a>
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
                </div>
            </div>
        </div>
    </section>

</main>
<!-- Page Body End -->

@endsection
