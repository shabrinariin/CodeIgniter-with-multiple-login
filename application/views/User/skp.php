<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HomePage Karyawan</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>asset/tes/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>asset/tes/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url();?>asset/tes/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url();?>asset/tes/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>asset/tes/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>asset/tes/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Home Page</a>
            </div>
            <!-- /.navbar-header -->
 <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user fa-fw"></i>
                        <span>Hello <?php echo $this->session->userdata('nama');?>,</span>
						<i class="fa fa-caret-down"></i>
                    </a>
                     <ul class="dropdown-menu dropdown-user">
                     	  <li><a href="<?php echo base_url();?>index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
					 </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse"><br>
				<center><img src="<?=base_url();?>asset/upload/<?=$this->session->userdata('photo')?>" width="75" height="75" class="img-circle profile_img"></center>
					<br><br>
                    <ul class="nav" id="side-menu">
                       <li>
                            <a href="<?php echo base_url();?>index.php/Kar/home"><i class="fa fa-dashboard fa-fw" class="active"></i> Dashboard</a>
                        </li>
						<li>
                            <a href="<?php echo base_url();?>index.php/Kar/lihatkaryawan"><i class="fa fa-sitemap fa-fw"></i> Daftar Karyawan</a>
						</li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Rekap Absensi<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/Kar/absen">2016</a>
                                </li>
								<li>
                                    <a href="<?php echo base_url();?>index.php/Kar/absen/yr17">2017</a>
                                </li>
                            </ul>
						</li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/ad_skp"><i class="fa fa-table fa-fw"></i> SKP<span class="fa arrow"></a>
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/Kar/skp">Usulan</a>
                                </li>
								<li>
                                    <a href="<?php echo base_url();?>index.php/Kar/skp/diterima">Diterima</a>
                                </li>
								<li>
								     <a href="<?php echo base_url();?>index.php/Kar/skp/ditolak">Ditolak</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/Kar/nilai"><i class="fa fa-edit fa-fw"></i> Nilai</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Karyawan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						
                            <div class="dataTable_wrapper">
							<div class="col-lg-2">Pilih Tahun :</div>
							<form method="post" action="<?php echo base_url();?>index.php/Kar/skp/diterima">
							<div class="col-lg-3">
							<select name="thn" id="tahun" class="form-control">
								 <option value="2015">2015</option>
								 <option value="2016">2016</option>
								 <option value="2017">2017</option>
						 </select>
						 </div><div class="col-lg-1">
						 <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
						<form>  
						 </div>
						 <br>
						 <br>
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                        <tr>
						  <th>Tanggal</th>
                          <th>Judul</th>
						  <th>Penilai</th>
						  <th>Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
						<?php foreach ($tgl as $data):?> 
						<tr> <td><?= $data->bulan ?> - <?= $data->tahun ?></td>
							 <td><?=$data->judul?></td>
							 <td><?=$data->penilai?></td>
							 <td><a href="<?php echo base_url();?>index.php/Kar/skp/detail/<?=$data->bulan ?>/<?=$data->tahun ?>"><i class="fa fa-weibo" title="Lihat Detail"></i><a></td>
						</tr>
						<?php endforeach;?>
                      </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="well">
                               <center>Dinas Komunikasi dan Informatika Prov.Jawa Timur</center>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>asset/tes/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>asset/tes/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>asset/tes/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>asset/tes/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>asset/tes/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>asset/tes/bower_components/datatables-responsive/js/dataTables.responsive.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>asset/tes/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
