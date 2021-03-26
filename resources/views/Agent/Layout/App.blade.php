<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
<style>
.paginate_button{
   background-color: #F3F2F2 !important;
   border: 1px solid #fff;
   padding: 5px
}
.paginate_button:hover{
 cursor: pointer;
}

div.dataTables_wrapper div.dataTables_filter{
 display: none !important;
}
.dataTables_length{
 display: none !important;

}
.table-responsive{
  overflow: hidden !important;
}
</style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- style css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<boyd>
    <!-- Header Start -->
    <header>
        <nav class="navbar navbar-dark flex-wrap navbar-expand-lg p-0">
            <div class="container-fluid top-header w-100">
                <div class="d-flex align-items-center top-left-header pt-3 pb-3">
                    <a href="#" class="navbar-brand logo-link mr-3">Immigration Sales Portal</a>
                    <form class="d-flex header-search">
                        <img src="/assets/images/search-icon.svg">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
                <div class="d-flex align-items-center top-right-header">
                    <div class="country-flag mr-4">
                        <img src="/assets/images/united-states.svg" />
                        <div class="country-flag-menu">
                            <div class="card-box">
                                <ul>
                                    <li><a href="#"><img src="/assets/images/united-states.svg" /></a></li>
                                    <li><a href="#"><img src="/assets/images/united-states.svg" /></a></li>
                                    <li><a href="#"><img src="/assets/images/united-states.svg" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="header-notification mr-4">
                        <div class="notification-icon-box">
                            <img src="/assets/images/notification.svg">
                            <span>2</span>
                        </div>
                        <div class="notificatin-list-box">
                            <div class="card-box w-100 p-3">
                                <div class="notification-list">
                                    <a href="/notification.html" class="notification-item">
                                        <div class="notification-title">A new Client Has turned into a lead!</div>
                                        <div class="notification-contan">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the
                                        </div>
                                    </a>
                                    <a href="/notification.html" class="notification-item">
                                        <div class="notification-title">A new Client Has turned into a lead!</div>
                                        <div class="notification-contan">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the
                                        </div>
                                    </a>
                                    <a href="/notification.html" class="notification-item">
                                        <div class="notification-title">A new Client Has turned into a lead!</div>
                                        <div class="notification-contan">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the
                                        </div>
                                    </a>
                                    <a href="/notification.html" class="notification-item">
                                        <div class="notification-title">A new Client Has turned into a lead!</div>
                                        <div class="notification-contan">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the
                                        </div>
                                    </a>
                                    <a href="/notification.html" class="notification-item">
                                        <div class="notification-title">A new Client Has turned into a lead!</div>
                                        <div class="notification-contan">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the
                                        </div>
                                    </a>
                                    <a href="/notification.html" class="notification-item">
                                        <div class="notification-title">A new Client Has turned into a lead!</div>
                                        <div class="notification-contan">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-profile-setting">
                        <div class="header-profile-dropdown">
                            <div class="header-profile">
                                <div class="profile-image mr-2">
                                    <img src="/assets/images/avatar-1.jpg">
                                </div>
                                Johnson
                                <img src="/assets/images/header-arrow-down.svg" class="ml-2">
                            </div>
                            <div class="header-setting ml-4">
                                <img src="/assets/images/setting-icon.svg">
                            </div>
                        </div>
                        <div class="header-profile-menu">
                            <div class="card-box">
                                <ul>
                                    <li><a href="/settings">Profile</a></li>
                                    <li><a href="/employees">Employees</a></li>
                                    <li><a href="/logout">Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid bottom-header w-100">
                <div class="card-box">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto nav-menu-admin">
                            <li class="nav-item ">
                            <li class="nav-item @if(app()->view->getSections()['title'] == 'Dashboard') active @endif">
                                <a class="nav-link" href="#">
                                    <img src="/assets/images/dashboard-icon.svg" class="normal-svg" />
                                    <img src="/assets/images/dashboard-active-icon.svg" class="active-svg" />
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown @if(app()->view->getSections()['title'] == 'Leads' || app()->view->getSections()['title'] == 'Accounts' || app()->view->getSections()['title'] == 'Members') active @endif">
                                <a class="nav-link dropdown-toggle" href="/leads" id="navbarDropdown" role="button">
                                    <img src="/assets/images/sales-icon.svg" class="normal-svg" />
                                    <img src="/assets/images/sales-active-icon.svg" class="active-svg" />
                                    <span>Sales</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="sub-menu">
                                        <a href="/leads">Leads</a>
                                        <a href="/accounts">Accounts</a>
                                        <a href="/members">Member Accounts</a>
                                        <a href="/opportunities">Cases</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown @if(app()->view->getSections()['title'] == 'Calls' || app()->view->getSections()['title'] == 'Tasks' || app()->view->getSections()['title'] == 'Meetings') active @endif">
                                <a class="nav-link dropdown-toggle" href="/calls" id="navbarDropdown" role="button">
                                    <img src="/assets/images/activities-icon.svg" class="normal-svg" />
                                    <img src="/assets/images/activities-active-icon.svg" class="active-svg" />
                                    <span>Actitivies</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="sub-menu">
                                        <a href="/calls">Calls</a>
                                        <a href="/meetings">Meetings</a>
                                        <a href="/tasks">Tasks</a>
                                        <!-- <a href="/calendar">Calendar</a> -->
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown @if(app()->view->getSections()['title'] == 'Payments') active @endif">
                                <a class="nav-link dropdown-toggle" href="/payments" id="navbarDropdown" role="button">
                                    <img src="/assets/images/finance-icon.svg" class="normal-svg" />
                                    <img src="/assets/images/finance-active-icon.svg" class="active-svg" />
                                    <span>Finance</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="sub-menu">
                                        <a href="/payments">Commissions</a>
                                        <a href="/payments">Invoices</a>
                                        <a href="/payments">Wallet</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown @if(app()->view->getSections()['title'] == 'Marketing') active @endif">
                                <a class="nav-link dropdown-toggle" href="/marketing" id="navbarDropdown" role="button"
                                     >
                                    <img src="/assets/images/marketing-icon.svg" class="normal-svg" />
                                    <img src="/assets/images/marketing-active-icon.svg" class="active-svg" />
                                    <span>Marketing</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="sub-menu">
                                        <a href="/marketing">Social</a>
                                        <a href="/marketing">Templates</a>
                                        <a href="/marketing">Image Library</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown @if(app()->view->getSections()['title'] == 'Referals') active @endif">
                                <a class="nav-link dropdown-toggle" href="/affiliate" id="navbarDropdown" role="button"
                                     >
                                    <img src="/assets/images/referals-icon.svg" class="normal-svg" />
                                    <img src="/assets/images/referals-active-icon.svg" class="active-svg" />
                                    <span>Refeerals</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="sub-menu">
                                        <a href="/affiliate">My Referals</a>
                                        <!-- <a href="/referals.html">My Subliners</a> -->
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
<body>
  @yield('content')

</body>

<!-- Jquery js -->
<script src="/assets/js/jquery-3.5.1.min.js"></script>

<!-- Bootstrap js -->
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>
<!-- Custom js For form -->
<script src="/assets/js/form.js"></script>
@stack('scripts')

</html>
