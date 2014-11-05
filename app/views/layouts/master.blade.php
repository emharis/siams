<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="{{ URL::to('/') }}">
        <meta charset="utf-8">
        <title>SIAM BAAK STKW Surabaya</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/pages/dashboard.css" rel="stylesheet">
        <!-- FAVICON -->
        <link rel="shortcut icon" href="/logo.ico" type="image/x-icon" >
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->

    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container"> 
                    <img src="login/images/logo-min.png" style="margin:0;padding:0;float:left;margin-right:25px;" width="50px"/>
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span ="icon-bar"></span><span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </a>
                    <a class="brand" href="index.html">SIAM BAAK STKW Surabaya</a>
                    <div class="nav-collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                        class="icon-user"></i> Administrator <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:;">Profile</a></li>
                                    <li><a href="{{URL::to('home')}}">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse --> 
                </div>
                <!-- /container --> 
            </div>
            <!-- /navbar-inner --> 
        </div>
        <!-- /navbar -->
        <div class="subnavbar">
            <div class="subnavbar-inner">
                <div class="container">
                    <ul class="mainnav">
                        <li class="active"><a href="{{URL::to('dashboard')}}"><i class="icon-home"></i><span>Home</span> </a> </li>
                        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-list-alt"></i><span>Master</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li style="text-align: center;"><a><b>AKADEMIK</b></a></a></li>
                                <li><a href="{{URL::to('master/takad')}}">Tahun Akademik</a></li>
                                <li><a href="{{URL::to('master/semester')}}">Semester</a></li>
                                <li><a href="{{URL::to('master/ruang')}}">Ruang</a></li>
                                <li><a href="{{URL::to('master/jenjang')}}">Jenjang</a></li>
                                <!--<li><a href="{{URL::to('master/fakultas')}}">Fakultas</a></li>-->
                                <li><a href="{{URL::to('master/prodi')}}">Program Studi</a></li>
                                <li><a href="{{URL::to('master/matkul')}}">Mata Kuliah</a></li>
                                <li><a href="{{URL::to('master/mahasiswa')}}">Mahasiswa</a></li>
                                <li style="text-align: center;"><a><b>KEPEGAWAIAN</b></a></a></li>
                                <li><a href="{{URL::to('master/departemen')}}">Departemen</a></li>
                                <li><a href="{{URL::to('master/jabatan')}}">Jabatan</a></li>
                                <li><a href="{{URL::to('master/gapok')}}">Gaji Pokok</a></li>
                                <li><a href="{{URL::to('master/tunjangan')}}">Tunjangan</a></li>
                                <li><a href="{{URL::to('master/pegawai')}}">Pegawai</a></li>
                                <li style="text-align: center;"><a><b>ADMINISTRASI</b></a></a></li>
                                <li><a href="{{URL::to('master/biaya')}}">Biaya</a></li>
                                <li><a href="{{URL::to('master/biaya/atur')}}">Pengaturan Biaya</a></li>
                                <li style="text-align: center;"><a><b>SYSTEM</b></a></a></li>
                                <li><a href="{{URL::to('master/group')}}">Group</a></li>
                                <li><a href="{{URL::to('master/user')}}">User</a></li>

                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-download-alt"></i><span>PMB</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <!--<li><a href="{{URL::to('pmb/setting')}}">Setting PMB</a></li>-->
                                <li><a href="{{URL::to('pmb/regis')}}">Registrasi</a></li>
                                <li><a href="{{URL::to('pmb/calon')}}">Calon Mahasiswa</a></li>
                                <li><a href="{{URL::to('pmb/penilaian')}}">Penilaian</a></li>
                                <li><a href="{{URL::to('pmb/selek')}}">Seleksi</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-group"></i><span>Kepegawaian</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{URL::to('pegawai/absensi')}}">Absensi</a></li>
                                <li><a href="{{URL::to('pegawai/cuti')}}">Cuti</a></li>
                                <li><a href="{{URL::to('pegawai/absensi/absen')}}">Aplikasi Absensi</a></li>
                                <li><a href="{{URL::to('pegawai/gaji')}}">Gaji</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-book"></i><span>Akademik</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{URL::to('master/takad')}}">Jadwal Kuliah</a></li>
                                <li><a href="{{URL::to('akademik/absensi')}}">Absensi</a></li>
                                <li><a href="{{URL::to('akademik/penilaian')}}">Penilaian</a></li>
                                <li><a href="{{URL::to('akademik/krs')}}">KRS</a></li>
                                <li><a href="{{URL::to('akademik/khs')}}">KHS</a></li>
                                <li><a href="{{URL::to('akademik/ips')}}">Index Prestasi Mahasiswa</a></li>
                                <li><a href="{{URL::to('akademik/pkp')}}">Kerja Praktek</a></li>
                                <li><a href="{{URL::to('akademik/pta')}}">Tugas Akhir</a></li>
                                <li><a href="{{URL::to('akademik/wisuda')}}">Wisuda</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-envelope"></i><span>Administrasi</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{URL::to('administrasi/pembayaran')}}">Pembayaran Mahasiswa</a></li>
                                <li><a href="{{URL::to('administrasi/pembayaran/rekap')}}">Rekapitulasi Pembayaran</a></li>
                            </ul>
                        </li>                        
                        <li></li>
                    </ul>

                    <div class="pull-right" style="margin-top: 5px;text-align: right;"   >
                        <h3 id="jam" ></h3>
                        <i id="tgl"></i>
                    </div>
                </div>
                <!-- /container --> 
            </div>
            <!-- /subnavbar-inner --> 
        </div>
        <!-- /subnavbar -->
        <div class="main">
            <div class="main-inner">
                <div class="container">
                    <div class="row">
                        @yield('main-content')
                    </div>
                    <!-- /row --> 
                </div>
                <!-- /container --> 
            </div>
            <!-- /main-inner --> 
        </div>
        <!-- /main -->

    </body>
    <!-- Le javascript
    ================================================== --> 
    <!-- Placed at the end of the document so the pages load faster --> 
    <script src="js/jquery-1.7.2.min.js"></script> 
    <script src="js/excanvas.min.js"></script> 
    <script src="js/chart.min.js" type="text/javascript"></script> 
    <script src="js/bootstrap.js"></script>
    <script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
    <script src="js/moment-with-locales.js"></script> 
    <script src="js/global.js"></script> 
    <script src="js/base.js"></script> 
    <script type="text/javascript">
jQuery(document).ready(function() {
    (function update_time() {
        
        // Use moment.js to output the current time as a string
        // hh is for the hours in 12-hour format,
        // mm - minutes, ss-seconds (all with leading zeroes),
        // d is for day of week and A is for AM/PM
        //set locale
        moment.locale('id');
        var now = moment().format("HH:mm:ss");
        var tgl =moment().format('dddd, LL');

        jQuery('#jam').text(now);
        jQuery('#tgl').text(tgl);

        // Schedule this function to be run again in 1 sec
        setTimeout(update_time, 1000);

    })();
});
    </script>
    <script>
		function lineChart(){
			var lineChartData = {
            labels: ["01001", "01002", "01101", "01102", "01201", "01202", "01301","01302"],
            datasets: [
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [2.5, 2.8, 2.9, 3.1, 3.3, 3.3, 3.5,3.4]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [3, 3.4, 3.0, 3.1, 3.3, 3.3, 3.5,3.4]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [2.5, 2.8, 2.9, 3.1, 3.3, 3.3, 3.5,3.4]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [2.5, 2.8, 2.9, 3.1, 3.3, 3.3, 3.5,3.4]
				}
			]

        }

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);
			
		};

        lineChart();
</script>
</html>
