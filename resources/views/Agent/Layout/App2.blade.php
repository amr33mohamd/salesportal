<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

  <link href="/clearui/components/dummy-assets/common/img/favicon.png" rel="shortcut icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/datatime/DateTimePicker.css" />
<style>
input{
  height: 45px !important;
}

</style>
  <!-- VENDORS -->
  <!-- v2.0.2 -->
  <link rel="stylesheet" type="text/css" href="/clearui/vendors/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/clearui/vendors/perfect-scrollbar/css/perfect-scrollbar.css">
  <link rel="stylesheet" type="text/css" href="/clearui/vendors/ladda/dist/ladda-themeless.min.css">
  <link rel="stylesheet" type="text/css" href="/clearui/vendors/bootstrap-select/dist/css/bootstrap-select.min.css">
  <link rel="stylesheet" type="text/css" href="/clearui/vendors/select2/dist/css/select2.min.css">
  <link rel="stylesheet" type="text/css" href="/clearui/vendors/tempus-dominus-bs4/build/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" type="text/css" href="/clearui/vendors/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" type="text/css" href="/clearui/vendors/bootstrap-sweetalert/dist/sweetalert.css">
  <link rel="stylesheet" type="text/css" href="/clearui/vendors/summernote/dist/summernote.css">
  <link rel="stylesheet" type="text/css" href="/clearui/vendors/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="/clearui/vendors/ionrangeslider/css/ion.rangeSlider.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/fc-3.2.5/r-2.2.2/datatables.min.css" />
  <link rel="stylesheet" type="text/css" href="/clearui/vendors/c3/c3.min.css">
  <link rel="stylesheet" type="text/css" href="/clearui/vendors/chartist/dist/chartist.min.css">
  <link rel="stylesheet" type="text/css" href="/clearui/vendors/nprogress/nprogress.css">
  <link rel="stylesheet" type="text/css" href="/clearui/vendors/jquery-steps/demo/css/jquery.steps.css">
  <link rel="stylesheet" type="text/css" href="/clearui/vendors/dropify/dist/css/dropify.min.css">
  <link rel="stylesheet" type="text/css" href="/clearui/vendors/font-linearicons/style.css">
  <link rel="stylesheet" type="text/css" href="/clearui/vendors/font-icomoon/style.css">
  <link rel="stylesheet" type="text/css" href="/clearui/vendors/font-awesome/css/font-awesome.min.css">
  <script src="/clearui/vendors/jquery/dist/jquery.min.js"></script>
  <script src="/clearui/vendors/popper.js/dist/umd/popper.js"></script>
  <script src="/clearui/vendors/jquery-ui/jquery-ui.min.js"></script>
  <script src="/clearui/vendors/bootstrap/dist/js/bootstrap.js"></script>
  <script src="/clearui/vendors/jquery-mousewheel/jquery.mousewheel.min.js"></script>
  <script src="/clearui/vendors/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
  <script src="/clearui/vendors/spin.js/spin.js"></script>
  <script src="/clearui/vendors/ladda/dist/ladda.min.js"></script>
  <script src="/clearui/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
  <script src="/clearui/vendors/select2/dist/js/select2.full.min.js"></script>
  <script src="/clearui/vendors/html5-form-validation/dist/jquery.validation.min.js"></script>
  <script src="/clearui/vendors/jquery-typeahead/dist/jquery.typeahead.min.js"></script>
  <script src="/clearui/vendors/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
  <script src="/clearui/vendors/autosize/dist/autosize.min.js"></script>
  <script src="/clearui/vendors/bootstrap-show-password/bootstrap-show-password.min.js"></script>
  <script src="/clearui/vendors/moment/min/moment.min.js"></script>
  <script src="/clearui/vendors/tempus-dominus-bs4/build/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src="/clearui/vendors/fullcalendar/dist/fullcalendar.min.js"></script>
  <script src="/clearui/vendors/bootstrap-sweetalert/dist/sweetalert.min.js"></script>
  <script src="/clearui/vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
  <script src="/clearui/vendors/summernote/dist/summernote.min.js"></script>
  <script src="/clearui/vendors/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="/clearui/vendors/ionrangeslider/js/ion.rangeSlider.min.js"></script>
  <script src="/clearui/vendors/nestable/jquery.nestable.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/fc-3.2.5/r-2.2.2/datatables.min.js"></script>
  <script src="/clearui/vendors/editable-table/mindmup-editabletable.js"></script>
  <script src="/clearui/vendors/d3/d3.min.js"></script>
  <script src="/clearui/vendors/c3/c3.min.js"></script>
  <script src="/clearui/vendors/chartist/dist/chartist.min.js"></script>
  <script src="/clearui/vendors/peity/jquery.peity.min.js"></script>
  <script src="/clearui/vendors/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js"></script>
  <script src="/clearui/vendors/jquery-countTo/jquery.countTo.js"></script>
  <script src="/clearui/vendors/nprogress/nprogress.js"></script>
  <script src="/clearui/vendors/jquery-steps/build/jquery.steps.min.js"></script>
  <script src="/clearui/vendors/chart.js/dist/Chart.bundle.min.js"></script>
  <script src="/clearui/vendors/dropify/dist/js/dropify.min.js"></script>
  <script src="/clearui/vendors/d3-dsv/dist/d3-dsv.js"></script>
  <script src="/clearui/vendors/d3-time-format/dist/d3-time-format.js"></script>
  <script src="/clearui/vendors/techan/dist/techan.min.js"></script>

  <!-- CLEAN UI HTML ADMIN TEMPLATE MODULES-->
  <!-- v2.0.2 -->
  <link rel="stylesheet" type="text/css" href="/clearui/components/core/common/core.cleanui.css">
  <link rel="stylesheet" type="text/css" href="/clearui/components/core/widgets/widgets.cleanui.css">
  <link rel="stylesheet" type="text/css" href="/clearui/components/vendors/common/vendors.cleanui.css">
  <link rel="stylesheet" type="text/css" href="/clearui/components/settings/common/settings.cleanui.css">
  <link rel="stylesheet" type="text/css" href="/clearui/components/settings/themes/themes.cleanui.css">
  <link rel="stylesheet" type="text/css" href="/clearui/components/menu-left/common/menu-left.cleanui.css">
  <link rel="stylesheet" type="text/css" href="/clearui/components/menu-top/common/menu-top.cleanui.css">
  <link rel="stylesheet" type="text/css" href="/clearui/components/menu-right/common/menu-right.cleanui.css">
  <link rel="stylesheet" type="text/css" href="/clearui/components/top-bar/common/top-bar.cleanui.css">
  <link rel="stylesheet" type="text/css" href="/clearui/components/breadcrumbs/common/breadcrumbs.cleanui.css">
  <link rel="stylesheet" type="text/css" href="/clearui/components/footer/common/footer.cleanui.css">
  <link rel="stylesheet" type="text/css" href="/clearui/components/pages/common/pages.cleanui.css">
  <link rel="stylesheet" type="text/css" href="/clearui/components/ecommerce/common/ecommerce.cleanui.css">
  <link rel="stylesheet" type="text/css" href="/clearui/components/apps/common/apps.cleanui.css">
  <link rel="stylesheet" type="text/css" href="/clearui/components/blog/common/blog.cleanui.css">
  <link rel="stylesheet" type="text/css" href="/clearui/components/youtube/common/youtube.cleanui.css">
  <link rel="stylesheet" type="text/css" href="/clearui/components/github/common/github.cleanui.css">
  <link rel="stylesheet" type="text/css" href="/clearui/components/docs/common/docs.cleanui.css">
  <script src="/clearui/components/menu-left/common/menu-left.cleanui.js"></script>
  <script src="/clearui/components/menu-top/common/menu-top.cleanui.js"></script>
  <script src="/clearui/components/menu-right/common/menu-right.cleanui.js"></script>
  <script src="/clearui/components/blog/common/blog.cleanui.js"></script>
  <script src="/clearui/components/github/common/github.cleanui.js"></script>


  <!-- PRELOADER STYLES-->
  <style>
    .cui-initial-loading {
      position: fixed;
      z-index: 99999;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-position: center center;
      background-repeat: no-repeat;
      background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDFweCIgIGhlaWdodD0iNDFweCIgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89InhNaWRZTWlkIiBjbGFzcz0ibGRzLXJvbGxpbmciPiAgICA8Y2lyY2xlIGN4PSI1MCIgY3k9IjUwIiBmaWxsPSJub25lIiBuZy1hdHRyLXN0cm9rZT0ie3tjb25maWcuY29sb3J9fSIgbmctYXR0ci1zdHJva2Utd2lkdGg9Int7Y29uZmlnLndpZHRofX0iIG5nLWF0dHItcj0ie3tjb25maWcucmFkaXVzfX0iIG5nLWF0dHItc3Ryb2tlLWRhc2hhcnJheT0ie3tjb25maWcuZGFzaGFycmF5fX0iIHN0cm9rZT0iIzAxOTBmZSIgc3Ryb2tlLXdpZHRoPSIxMCIgcj0iMzUiIHN0cm9rZS1kYXNoYXJyYXk9IjE2NC45MzM2MTQzMTM0NjQxNSA1Ni45Nzc4NzE0Mzc4MjEzOCIgdHJhbnNmb3JtPSJyb3RhdGUoODQgNTAgNTApIj4gICAgICA8YW5pbWF0ZVRyYW5zZm9ybSBhdHRyaWJ1dGVOYW1lPSJ0cmFuc2Zvcm0iIHR5cGU9InJvdGF0ZSIgY2FsY01vZGU9ImxpbmVhciIgdmFsdWVzPSIwIDUwIDUwOzM2MCA1MCA1MCIga2V5VGltZXM9IjA7MSIgZHVyPSIxcyIgYmVnaW49IjBzIiByZXBlYXRDb3VudD0iaW5kZWZpbml0ZSI+PC9hbmltYXRlVHJhbnNmb3JtPiAgICA8L2NpcmNsZT4gIDwvc3ZnPg==);
      background-color: #f2f4f8;
    }
  </style>
  <script>
    $(document).ready(function () {
      $('.cui-initial-loading').delay(200).fadeOut(400)
    })
  </script>
</head>
<body class="cui-config-borderless cui-menu-colorful  cui-menu-left-shadow">
<div class="cui-initial-loading"></div>
<div class="cui-layout cui-layout-has-sider">

<nav class="cui-menu-left">
  <div class="cui-menu-left-trigger cui-menu-left-trigger-action"></div>
  <div class="cui-menu-left-handler">
    <div class="cui-menu-left-handler-icon"></div>
  </div>
  <div class="cui-menu-left-inner">
    <div class="cui-menu-left-logo">
      <a href="dashboards-alpha.html">
        <img
          class="cui-menu-left-logo-default"
          src="/clearui/components/dummy-assets/common/img/logo-inverse.png"
          alt=""
        />
        <img
          class="cui-menu-left-logo-toggled"
          src="/clearui/components/dummy-assets/common/img/logo-mobile.png"
          alt=""
        />
      </a>
    </div>
    <div class="cui-menu-left-scroll">
      <ul class="cui-menu-left-list cui-menu-left-list-root">



        <li class="cui-menu-left-item cui-menu-left-submenu cui-menu-left-submenu-toggled">
          <a href="javascript: void(0);">
            <span class="cui-menu-left-icon icmn-users"></span>
            <span class="cui-menu-left-title">Sales</span>
          </a>
          <ul class="cui-menu-left-list" style="display: block;">
            <li class="cui-menu-left-item  @if(app()->view->getSections()['title'] == 'Leads') cui-menu-left-item-active @endif">
              <a href="/leads">
                <span class="cui-menu-left-title ">Leads</span>
              </a>
            </li>
            <li class="cui-menu-left-item @if(app()->view->getSections()['title'] == 'Accounts') cui-menu-left-item-active @endif ">
              <a href="/accounts">
                <span class="cui-menu-left-title">Accounts</span>
              </a>
            </li>
            <li class="cui-menu-left-item">
              <a href="pages-register.html">
                <span class="cui-menu-left-title">Cases</span>
              </a>
            </li>
            <li class="cui-menu-left-item">
              <a href="pages-lockscreen.html">
                <span class="cui-menu-left-title">Members</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="cui-menu-left-item cui-menu-left-submenu ">
          <a href="javascript: void(0);">
            <span class="cui-menu-left-icon icmn-phone"></span>
            <span class="cui-menu-left-title">Activities</span>
          </a>
          <ul class="cui-menu-left-list">
            <li class="cui-menu-left-item ">
              <a href="pages-login-alpha.html">
                <span class="cui-menu-left-title">Calls</span>
              </a>
            </li>
            <li class="cui-menu-left-item ">
              <a href="pages-login-beta.html">
                <span class="cui-menu-left-title">Meetings</span>
              </a>
            </li>
            <li class="cui-menu-left-item">
              <a href="pages-register.html">
                <span class="cui-menu-left-title">Tasks</span>
              </a>
            </li>

          </ul>
        </li>
        <li class="cui-menu-left-item cui-menu-left-submenu ">
          <a href="javascript: void(0);">
            <span class="cui-menu-left-icon icmn-coin-dollar"></span>
            <span class="cui-menu-left-title">Finance</span>
          </a>
          <ul class="cui-menu-left-list">
            <li class="cui-menu-left-item ">
              <a href="pages-login-alpha.html">
                <span class="cui-menu-left-title">Commissions</span>
              </a>
            </li>
            <li class="cui-menu-left-item ">
              <a href="pages-login-beta.html">
                <span class="cui-menu-left-title">Invoices</span>
              </a>
            </li>
            <li class="cui-menu-left-item">
              <a href="pages-register.html">
                <span class="cui-menu-left-title">Wallet</span>
              </a>
            </li>

          </ul>
        </li>
        <li class="cui-menu-left-item cui-menu-left-submenu ">
          <a href="javascript: void(0);">
            <span class="cui-menu-left-icon icmn-file-text"></span>
            <span class="cui-menu-left-title">Marketing</span>
          </a>
          <ul class="cui-menu-left-list">
            <li class="cui-menu-left-item ">
              <a href="pages-login-alpha.html">
                <span class="cui-menu-left-title">Social</span>
              </a>
            </li>
            <li class="cui-menu-left-item ">
              <a href="pages-login-beta.html">
                <span class="cui-menu-left-title">Templates</span>
              </a>
            </li>
            <li class="cui-menu-left-item">
              <a href="pages-register.html">
                <span class="cui-menu-left-title">Images Library</span>
              </a>
            </li>

          </ul>
        </li>
        <li class="cui-menu-left-item">
          <a href="layout-typography.html">
            <span class="cui-menu-left-icon icmn-man-woman"></span>
            <span class="cui-menu-left-title">Refeerals</span>
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>
<div class="cui-layout">
<div class="cui-layout-header">
<div class="cui-topbar">
  <!-- left aligned items -->
  <div class="cui-topbar-left">



  </div>
  <!-- right aligned items -->
  <div class="cui-topbar-right">



    <div class="cui-topbar-item">
      <div class="dropdown cui-topbar-avatar-dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          <span class="cui-topbar-avatar">
            <img src="/clearui/components/dummy-assets/common/img/avatars/1.jpg" alt="" />
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" role="menu">
          <a class="dropdown-item" href="javascript:void(0)"
            ><i class="dropdown-icon icmn-user"></i> Profile</a
          >
          <div class="dropdown-divider"></div>
          <div class="dropdown-header">Home</div>
          <a class="dropdown-item" href="javascript:void(0)"
            ><i class="dropdown-icon icmn-circle-right"></i> System Dashboard</a
          >
          <a class="dropdown-item" href="javascript:void(0)"
            ><i class="dropdown-icon icmn-circle-right"></i> User Boards</a
          >
          <a class="dropdown-item" href="javascript:void(0)"
            ><i class="dropdown-icon icmn-circle-right"></i> Issue Navigator
            <span class="badge badge-success font-size-11 ml-2">25 New</span></a
          >
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void(0)"
            ><i class="dropdown-icon icmn-exit"></i> Logout</a
          >
        </div>
      </div>
    </div>
    <div class="cui-topbar-item">
      <div class="cui-topbar-menu-button cui-menu-right-action-toggle">
        <i class="fa fa-bars"> <!-- --></i>
      </div>
    </div>
  </div>
</div>

<script>
  ;(function($) {
    'use strict'
    $(function() {
      ///////////////////////////////////////////////////////////
      // livesearch scripts

      var livesearch = $('.cui-topbar-livesearch')
      var close = $('.cui-topbar-livesearch-close')
      var visibleClass = 'cui-topbar-livesearch-visible'
      var input = $('#livesearch-input')
      var inputInner = $('#livesearch-input-inner')

      function setHidden() {
        livesearch.removeClass(visibleClass)
      }
      function handleKeyDown(e) {
        const key = event.keyCode.toString()
        if (key === '27') {
          setHidden()
        }
      }
      input.on('focus', function() {
        livesearch.addClass(visibleClass)
        setTimeout(function() {
          inputInner.focus()
        }, 200)
      })
      close.on('click', setHidden)
      document.addEventListener('keydown', handleKeyDown, false)
    })
  })(jQuery)
</script>
</div>

  @yield('content')
  <div id="dtBox"></div>


  <!-- START: page scripts -->
  <script>
    ;(function($) {
      'use strict'
      $(function() {
        $('#example1').DataTable({
          responsive: true,
        })

        $('#example2').DataTable({
          autoWidth: true,
          scrollX: true,
          fixedColumns: true,
        })

        $('#example3').DataTable({
          autoWidth: true,
          scrollX: true,
          fixedColumns: true,
        })
      })
    })(jQuery)
  </script>
  <!-- END: page scripts -->

  </div>
  </div>
  <div class="cui-layout-footer">
  <div class="cui-footer">
    <div class="cui-footer-inner">

      <div class="cui-footer-bottom">
        <div class="row">

          <div class="col-md-8">
            <div class="cui-footer-company">
              <img
                class="cui-footer-company-logo"
                src="/clearui/components/dummy-assets/common/img/mediatec.png"
                title="Mediatec Software"
              />
              <span>
                © 2020 <a href="#" target="_blank">ICIGAI</a>
                <br />
                All rights reserved
              </span>
            </div>
          </div>
        </div>
      </div>
      <a
        href="javascript: void(0);"
        class="cui-utils-scroll-top"
        onclick="$('body, html').animate({'scrollTop': 0}, 500)"
        ><i class="icmn-arrow-up"></i
      ></a>
    </div>
  </div>
  </div>
  </div>
  </div>
  </body>
  </html>
<script src="/assets/js/form.js"></script>
<script>
$(document).ready(function(){
  $("#export").click(function(){
    $(".buttons-csv").click();
  })
})
$(document).ready(function()
 {

     $("#dtBox").DateTimePicker({
       options:{
           dateSeparator:'/'
       }
     });

 });
</script>
<script type="text/javascript" src="/datatime/DateTimePicker.js"></script>


@stack('scripts')

</html>
