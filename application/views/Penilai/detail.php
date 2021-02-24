<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HomePage Penilai</title>

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
                            <a href="<?php echo base_url();?>index.php/Penilai/home"><i class="fa fa-dashboard fa-fw" class="active"></i> Dashboard</a>
                        </li>
						<li>
                            <a href="<?php echo base_url();?>index.php/Penilai/kary"><i class="fa fa-sitemap fa-fw"></i> Daftar Karyawan</a>
						</li>
                        <li>
                            <a href=""><i class="fa fa-table fa-fw"></i> SKP<span class="fa arrow"></span></</a>
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/Penilai/skp">Usulan</a>
                                </li>
								<li>
                                    <a href="<?php echo base_url();?>index.php/Penilai/skp/diterima">Diterima</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/Penilai/nilai"><i class="fa fa-edit fa-fw"></i> Nilai</a>
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
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                      <?php foreach ($lihat as $data):?> 
						
							<img class="img-responsive avatar-view" src="<?=base_url();?>asset/upload/<?=$data->photo?>" alt="Avatar" title="Change the avatar" width="200" height="375">
							<h3><?php echo $data->nama ?></h3>
							<h5>NIP. <?php echo $data->nip ?><h5>
                          </div>
                        </div>
                      </div>
					  <div class="col-md-5 col-sm-5 col-xs-12 profile_right">
						<h4><table><td width="10%" height="25"><i class="fa fa-map-marker user-profile-icon"></i></td><td width="30%" height="25"> Alamat : </td><td height="2" width="50%"><?php echo $data->alamat ?></td><tr>
									<td width="10%" height="25"><i class="fa fa-birthday-cake"></i></td><td width="30%" height="25"> Tanggal Lahir : </td><td width="50%"><?php echo $data->tgl_lhr ?></td><tr>
									<td width="10%" height="25"><i class="fa fa-shield"></i></td><td width="30%" height="25"> Tempat Lahir : </td><td width="50%"><?php echo $data->tempat_lhr ?></td><tr>
									<td width="10%" height="25"><i class="fa fa-user"></i></td><td width="30%" height="25"> Jenis Kelamin : </td><td width="50%"><?php echo $data->jenis_kelamin ?></td><tr>
									<td width="10%" height="25"><i class="fa fa-envelope-o"></i></td><td width="30%" height="25"> Email : </td><td width="50%"><?php echo $data->email ?></td><tr>
									<td width="10%" height="25"><i class="fa fa-phone"></i></td><td width="30%" height="25"> Telepon : </td><td width="50%"><?php echo $data->telp ?></td><tr>
									<td width="10%" height="25"><i class="fa fa-briefcase user-profile-icon"></i></td><td width="30%" height="25">Jabatan :</td><td width="50%"> <?php echo $data->jabatan ?></td><tr>
									<td width="10%" height="25"><i class="fa fa-square"></i></td><td width="30%" height="25">Bagian :</td><td width="50%"> <?php echo $data->bagian ?></td><tr>
							</table>
						</h4>
                    </div>
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
