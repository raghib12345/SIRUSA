<!DOCTYPE html>
<html lang="en">
<head>
    <title>SIRUSA Web Program</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/styles/jquery-ui-1.10.4.custom.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/styles/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/styles/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/styles/animate.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/styles/all.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/styles/main.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/styles/style-responsive.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/styles/zabuto_calendar.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/styles/pace.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/styles/jquery.news-ticker.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/table/dataTables/dataTables.bootstrap.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/_all-skins.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap3-wysihtml5.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/adminLTE.min.css') }}">
    <script type="text/javascript" src="{{ asset('assets/script/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/script/jquery.js') }}"></script>
</head>
<body>
    <div>
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="{{ route('beranda.index') }}" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text" style="font-size: 18px">SIRUSA</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="images/avatar/48.jpg" alt="" class="img-responsive img-circle"/><span class="fa fa-user"></span><span class="hidden-xs">{{ Auth::user()->name }}</span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-unlock"> {{ __('Logout') }}</i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                     <div class="clearfix"></div>
                    <li><a href="{{ route('beranda.index') }}"><i class="fa fa-home">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Beranda</span></a></li>
                </ul>
            </div>
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                     <div class="clearfix"></div>
                    <li><a href="{{ route('poli.index') }}"><i class="fa fa-medkit">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Daftar Poli</span></a></li>
                </ul>
            </div>
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                     <div class="clearfix"></div>
                    <li><a href="{{ route('dokter.index') }}"><i class="fa fa-user-md">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Daftar Dokter</span></a></li>
                </ul>
            </div>
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                     <div class="clearfix"></div>
                    <li><a href="{{ route('pasien.index') }}"><i class="fa fa-user">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Daftar Pasien</span></a></li>
                </ul>
            </div>
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                     <div class="clearfix"></div>
                    <li><a href="{{ route('obat.index') }}"><i class="fa fa-plus-square">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Daftar Obat</span></a></li>
                </ul>
            </div>
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                     <div class="clearfix"></div>
                    <li><a href="{{ route('jadwal.index') }}"><i class="fa fa-hospital-o">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Jadwal Periksa</span></a></li>
                </ul>
            </div>
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                     <div class="clearfix"></div>
                    <li><a href="{{ route('periksa.index') }}"><i class="fa fa-stethoscope">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Pemeriksaan</span></a></li>
                </ul>
            </div>
        </nav>
            
                @yield('content')
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright" style="margin-left: 250px">
                        2019 © <a href="{{ route('beranda.index') }}">SIRUSA</a> (Sistem Informasi Rumah Sakit)</div>
                </div>
                <!--END FOOTER-->
        </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src="{{ asset('assets/script/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('assets/script/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/script/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/script/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/script/bootstrap-hover-dropdown.js') }}"></script>
    <script src="{{ asset('assets/script/html5shiv.js') }}"></script>
    <script src="{{ asset('assets/script/respond.min.js') }}"></script>
    <script src="{{ asset('assets/script/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('assets/script/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/script/jquery.cookie.js') }}"></script>
    <script src="{{ asset('assets/script/icheck.min.js') }}"></script>
    <script src="{{ asset('assets/script/custom.min.js') }}"></script>
    <script src="{{ asset('assets/script/jquery.news-ticker.js') }}"></script>
    <script src="{{ asset('assets/script/jquery.menu.js') }}"></script>
    <script src="{{ asset('assets/script/pace.min.js') }}"></script>
    <script src="{{ asset('assets/script/holder.js') }}"></script>
    <script src="{{ asset('assets/script/responsive-tabs.js') }}"></script>
    <script src="{{ asset('assets/script/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/script/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('assets/script/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/script/jquery.flot.tooltip.js') }}"></script>
    <script src="{{ asset('assets/script/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/script/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('assets/script/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/script/jquery.flot.spline.js') }}"></script>
    <script src="{{ asset('assets/script/zabuto_calendar.min.js') }}"></script>
    <script src="{{ asset('assets/script/index.js') }}"></script>
    <script src="{{ asset('js/jquery-1.10.1.js')}}"></script>
    <script src="{{ asset('assets/table/dataTables/jquery.dataTables.js')}} "></script>
    <script src="{{ asset('assets/table/dataTables/dataTables.bootstrap.js')}} "></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable( {
                "lengthMenu" : [5, 10, 15, 20]
            });
        });
    </script>
    <!--CORE JAVASCRIPT-->
    <script src="{{ asset('assets/script/main.js') }}"></script>
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>
</body>
</html>
