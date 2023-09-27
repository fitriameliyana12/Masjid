<?php include("config.php"); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Masjid Sabilillah Malang</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">CRUD</li><!-- /.menu-title -->
                    <li>
                    <a href="artikeladmin.php" > <i class="menu-icon fa fa-cogs"></i>Artikel</a>
                    </li>
                    <li>
                    <a href="galeryadmin.php"> <i class="menu-icon fa fa-table"></i>Kontak</a>
                    </li>
                    <li>
                    <a href="jadwalkegiatanadmin.php"> <i class="menu-icon fa fa-th"></i>Jadwal Kegiatan</a> 
                    </li>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand">
                        <img src="images/logoAdmin.png"></a>
                    <a id="menuToggle" class="menutoggle">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/profile.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="http://localhost/BismillahProyek/index.html"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div> 
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content"> 
            <center><h1>CRUD Artikel</h1></center>
            <div class="animated fadeIn">
            <center><h1>Page</h1></center>
                <br><br><br>

                <?php
    //TAMBAH
    if(!$_GET['aksi']){
        if($_POST['tambah-blog']){
        	$id_artikel = abs((int)$_GET['id_artikel']);
        	$judul  = $_POST['judul'];
            $tanggal   = $_POST['tanggal'];
            $penulis   = $_POST['penulis'];            
            $isi = $_POST['isi'];
            
            if($judul && $isi){
                $in = mysqli_query($koneksi, "INSERT INTO artikel VALUES(NULL, '$judul', '$isi', '$tanggal', '$penulis')");
                if($in){
                    echo '<script language="javascript">alert("Artikel berhasil ditambahkan."); document.location="artikeladmin.php";</script>';
                }else{
                    echo '<div class="error">ERROR: Gagal menambahkan artikel.</div>';
                }
            }else{
                echo '<div class="error">ERROR: Masukkan judul dan konten artikel.</div>';
            }
        }
                // <!-- FORM -->
                echo'<div class="row">';
                echo'<div class="col-lg-6">';
                        echo'<div class="card">';
                            echo'<div class="card-header">';
                                echo'<strong>Form Tambah Artikel</strong>';
                            echo'</div>';
                            echo'<div class="card-body card-block">';
                                echo'<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">';
                                    echo'<div class="row form-group">';
                                        echo'<div class="col col-md-3"><label for="judul" class=" form-control-label">Judul Artikel</label></div>';
                                        echo'<div class="col-12 col-md-9"><input type="text" id="judul" name="judul" placeholder="Text" class="form-control"><small class="form-text text-muted">Masukkan Judul</small></div>';
                                    echo'</div>';
                                    echo'<div class="row form-group">';
                                        echo'<div class="col col-md-3"><label for="penulis" class=" form-control-label">Penulis</label></div>';
                                        echo'<div class="col-12 col-md-9"><input type="text" id="penulis" name="penulis" placeholder="Penulis" class="form-control"><small class="help-block form-text">Masukkan Penulis</small></div>';
                                    echo'</div>';
                                    echo'<div class="row form-group">';
                                         echo'<div class="col col-md-3"><label for="tanggal" class=" form-control-label">Tanggal Tulis</label></div>';
                                         echo'<div class="col-12 col-md-9"><input type="text" id="tanggal" name="tanggal" placeholder="YYYY-MM-DD" class="form-control"><small class="help-block form-text">Masukkan Tanggal Sesuai</small></div>';
                                    echo'</div>';
                                    echo'<div class="row form-group">';
                                        echo'<div class="col col-md-3"><label for="isi" class=" form-control-label">Konten Artikel</label></div>';
                                        echo'<div class="col-12 col-md-9"><textarea name="isi" id="isi" rows="9" cols="50" placeholder="isi..." class="form-control"></textarea></div>';
                                    echo'</div>';
                                    echo'<div class="form-actions form-group"><button name="tambah-blog" type="submit" value="tambah" class="btn btn-success btn-sm">Tambah</button></div>';
                                echo'</form>';
                            echo'</div>';
                        echo'</div>';
                    echo'</div>';
                echo'</div>';
        }

        //EDIT
        if($_GET['aksi'] == "edit"){
            $id_artikel = abs((int)$_GET['id_artikel']);
            $get = mysqli_query($koneksi, "SELECT * FROM artikel WHERE id_artikel='$id_artikel'");
            $dataGet = mysqli_fetch_assoc($get);
            
            if($_POST['simpan-blog']){
                $judul  = $_POST['judul'];
                $penulis = $_POST['penulis'];
                $isi = $_POST['isi'];
                $tanggal = $_POST['tanggal'];
                
                if($judul && $isi){
                    $up = mysqli_query($koneksi, "UPDATE artikel SET judul='$judul', isi='$isi', tanggal='$tanggal', penulis='$penulis'  WHERE id_artikel='$id_artikel'");
                    if($up){
                        echo '<script language="javascript">alert("Artikel berhasil disimpan."); document.location="artikeladmin.php";</script>';
                    }else{
                        echo '<div class="error">ERROR: Gagal menyimpan artikel.</div>';
                    }
                }else{
                    echo '<div class="error">ERROR: Masukkan judul dan konten artikel.</div>';
                }
            }
                // <!-- FORM -->
                echo'<div class="row">';
                echo'<div class="col-lg-6">';
                        echo'<div class="card">';
                            echo'<div class="card-header">';
                                echo'<strong>Form Edit Artikel</strong>';
                            echo'</div>';
                            echo'<div class="card-body card-block">';
                                echo'<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">';
                                    echo'<div class="row form-group">';
                                        echo'<div class="col col-md-3"><label for="judul" class="form-control-label">Judul Artikel</label></div>';
                                        echo'<div class="col-12 col-md-9"><input type="text" id="judul" name="judul" value="'.$dataGet['judul'].'" class="form-control"></div>';
                                    echo'</div>';
                                    echo'<div class="row form-group">';
                                        echo'<div class="col col-md-3"><label for="penulis" class=" form-control-label">Penulis</label></div>';
                                        echo'<div class="col-12 col-md-9"><input type="text" id="penulis" name="penulis" value="'.$dataGet['penulis'].'" class="form-control"></div>';
                                    echo'</div>';
                                    echo'<div class="row form-group">';
                                         echo'<div class="col col-md-3"><label for="tanggal" class=" form-control-label">Tanggal Tulis</label></div>';
                                         echo'<div class="col-12 col-md-9"><input type="text" id="tanggal" name="tanggal" value="'.$dataGet['tanggal'].'" class="form-control"></div>';
                                    echo'</div>';
                                    echo'<div class="row form-group">';
                                        echo'<div class="col col-md-3"><label for="isi" class=" form-control-label">Konten Artikel</label></div>';
                                        echo'<div class="col-12 col-md-9"><textarea name="isi" id="isi" rows="9" cols="50" class="form-control">'.$dataGet['isi'].'</textarea></div>';
                                    echo'</div>';
                                    echo'<div class="form-actions form-group"><button type="submit" name="simpan-blog" value="simpan" class="btn btn-success btn-sm">Simpan</button></div>';
                                echo'</form>';
                            echo'</div>';
                        echo'</div>';
                    echo'</div>';
                echo'</div>';
        }

        //DELETE
        if($_GET['aksi'] == "delete"){
        $id_artikel = $_GET['id_artikel'];
        $cek = mysqli_query($koneksi, "SELECT * FROM artikel WHERE id_artikel='$id_artikel'");
        if(mysqli_num_rows($cek) != 0){
            $del = mysqli_query($koneksi, "DELETE FROM artikel WHERE id_artikel='$id_artikel'");
            if($del){
                echo '<script language="javascript">alert("Data berhasil dihapus."); document.location="artikeladmin.php";</script>';
            }else{
                echo '<script language="javascript">alert("Gagal menghapus data."); document.location="artikeladmin.php";</script>';
            }
        }else{
            echo '<script language="javascript">alert("Data tidak ditemukan."); document.location="artikeladmin.php";</script>';
        }
        }
    ?>

                <!-- TABEL -->
            <div class="row">
                 <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Tabel Artikel</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul</th>
                                            <th>Penulis</th>
                                            <th>Tgl tulis</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <?php
                                    $connect = mysqli_connect("localhost","root","", "masjid") or die ("Gagal Mengkoneksikan Ke Database");
                                    $sql = mysqli_query($koneksi, "SELECT * FROM artikel ORDER BY id_artikel DESC");
                                if(mysqli_num_rows($sql) != 0){
                                        $id_artikel = 101;

                                    while($data = mysqli_fetch_assoc($sql)){
                                    echo'<tbody>';
                                        echo'<tr>';
                                            echo'<td align="center">'.$id_artikel.'</td>';
                                            echo'<td>'.$data['judul'].'</td>';
                                            echo'<td>'.$data['penulis'].'</td>';
                                            echo'<td>'.$data['tanggal'].'</td>';
                                            echo'<td align="center">';
                                                echo '<a href="artikeladmin.php?aksi=edit&id_artikel='.$data['id_artikel'].'">Edit</a> / ';
                                                echo '<a href="artikeladmin.php?aksi=delete&id_artikel='.$data['id_artikel'].'" onclick="return confirm(\'Anda yakin?\');">Delete</a>';
                                            echo '</td>';
                                        echo'</tr>';
                                        $id_artikel++;
                                    }
                                }else{
                                            echo '<tr><td colspan="30">Tidak ada data.</td></tr>';
                                    }
                                    echo'</tbody>';
                                    ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        <div class="clearfix"></div>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

    <!--Local Stuff-->
    <script>
        jQuery(document).ready(function($) {
            "use strict";

            // Pie chart flotPie1
            var piedata = [
                { label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},
                { label: "Tab visits", data: [[1,33]], color: '#ef5350'},
                { label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2/3,
                            threshold: 1
                        },
                        stroke: {
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
            // Pie chart flotPie1  End
            // cellPaiChart
            var cellPaiChart = [
                { label: "Direct Sell", data: [[1,65]], color: '#5b83de'},
                { label: "Channel Sell", data: [[1,35]], color: '#00bfa5'}
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: {
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                },grid: {
                    hoverable: true,
                    clickable: true
                }

            });
            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

            var plot = $.plot($('#flotLine5'),[{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }],
            {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
            // Line Chart  #flotLine5 End
            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                  series: [
                  [0, 18000, 35000,  25000,  22000,  0],
                  [0, 33000, 15000,  20000,  15000,  300],
                  [0, 15000, 28000,  15000,  30000,  5000]
                  ]
              }, {
                  low: 0,
                  showArea: true,
                  showLine: false,
                  showPoint: false,
                  fullWidth: true,
                  axisX: {
                    showGrid: true
                }
            });

                chart.on('draw', function(data) {
                    if(data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End
            //Traffic chart chart-js
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById( "TrafficChart" );
                ctx.height = 150;
                var myChart = new Chart( ctx, {
                    type: 'line',
                    data: {
                        labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul" ],
                        datasets: [
                        {
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [ 0, 2900, 5000, 3300, 6000, 3250, 0 ]
                        },
                        {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [ 0, 4200, 4500, 1600, 4200, 1500, 4000 ]
                        },
                        {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [1000, 5200, 3600, 2600, 4200, 5300, 0 ]
                        }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                } );
            }
            //Traffic chart chart-js  End
            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End
        });
    </script>
</body>
</html>