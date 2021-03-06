<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="/assets/backend/backend/img/favicon.png">

  <title>Admin</title>

  <!-- Bootstrap CSS -->
  <link href="/assets/backend/backend/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="/assets/backend/backend/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="/assets/backend/backend/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="/assets/backend/backend/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="/assets/backend/backend/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="/assets/backend/backend/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="/assets/backend/backend/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="/assets/backend/backend/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="/assets/backend/backend/css/fullcalendar.css">
  <link href="/assets/backend/backend/css/widgets.css" rel="stylesheet">
  <link href="/assets/backend/backend/css/style.css" rel="stylesheet">
  <link href="/assets/backend/backend/css/style-responsive.css" rel="stylesheet" />
  <link href="/assets/backend/backend/css/xcharts.min.css" rel=" stylesheet">
  <link href="/assets/backend/backend/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <script src="/assets/backend/ckeditor/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('texteditor');
    </script>
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Nice <span class="lite">Admin</span></a>
      <!--logo end-->



      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <li id="task_notificatoin_bar" class="dropdown">

            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 6 pending letter</p>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Design PSD </div>
                    <div class="percent">90%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      <span class="sr-only">90% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">
                      Project 1
                    </div>
                    <div class="percent">30%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                      <span class="sr-only">30% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Digital Marketing</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Logo Designing</div>
                    <div class="percent">78%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                      <span class="sr-only">78% Complete (danger)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Mobile App</div>
                    <div class="percent">50%</div>
                  </div>
                  <div class="progress progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                      <span class="sr-only">50% Complete</span>
                    </div>
                  </div>

                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">

            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 new messages</p>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">

          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            {{-- <span class="profile-ava">
                                <img alt="" src="/assets/backend/backend/img/avatar1_small.jpg">
                            </span> --}}
                            <span class="username"></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li>
                <a href="{{ route('logout')}}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
                style="margin-left: 20px;"><i class="dropdown-item-icon icon-power text-primary"></i><span class="d-none d-sm-inline">{{__('Logout')}}</span></a>
              </div>
              <form action="{{route('logout')}}" id="logout-form" method="POST" style="display: none;">
            @csrf
            </form>
              </li>

            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">





          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Lihat Tabel</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="/admin/kategori">Kategori</a></li>
              <li><a class="" href="/admin/penulis">Penulis</a></li>
              <li><a class="" href="/admin/cerpen">Cerpen Detail</a></li>
            </ul>
          </li>



        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->


     @yield('content')

  <!-- javascripts -->
  <script src="/assets/backend/backend/js/jquery.js"></script>
  <script src="/assets/backend/backend/js/jquery-ui-1.10.4.min.js"></script>
  <script src="/assets/backend/backend/js/jquery-1.8.3.min.js"></script>
  <script type="/assets/text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="/assets/backend/backend/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="/assets/backend/ets/backend/backend/js/jquery.scrollTo.min.js"></script>
  <script src="/assets/backend/backend/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="/assets/backend/backend/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="/assets/backend/backend/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="/assets/backend/backend/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="/assets/backend/backend/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="/assets/backend/backend/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="/assets/backend/backend/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="/assets/backend/backend/js/calendar-custom.js"></script>
    <script src="/assets/backend/backend/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="/assets/backend/backend/js/jquery.customSelect.min.js"></script>
    <script src="/assets/backend/backend/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="/assets/backend/backend/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="/assets/backend/backend/js/sparkline-chart.js"></script>
    <script src="/assets/backend/backend/js/easy-pie-chart.js"></script>
    <script src="/assets/backend/backend/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/assets/backend/backend/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/assets/backend/backend/js/xcharts.min.js"></script>
    <script src="/assets/backend/backend/js/jquery.autosize.min.js"></script>
    <script src="/assets/backend/backend/js/jquery.placeholder.min.js"></script>
    <script src="/assets/backend/backend/js/gdp-data.js"></script>
    <script src="/assets/backend/backend/js/morris.min.js"></script>
    <script src="/assets/backend/backend/js/sparklines.js"></script>
    <script src="/assets/backend/backend/js/charts.js"></script>
    <script src="/assets/backend/backend/js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });


      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
