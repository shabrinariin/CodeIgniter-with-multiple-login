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
                            <a href="<?php echo base_url();?>index.php/ad_skp"><i class="fa fa-table fa-fw"></i> SKP<span class="fa arrow"></span></a>
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
                            Nilai Karyawan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form method="post" action="<?php echo base_url();?>index.php/Penilai/nilai">
								<div class="col-md-1 col-sm-9 col-xs-12">
								Bulan :
								</div>
                                <div class="col-md-2 col-sm-9 col-xs-12">
								<select id="bln" required="required" name="bln" class="form-control col-md-5 col-xs-12" >
									<?php foreach($bl as $data):?>
									<option value="<?=$data->id_bulan ?>" select=""><?=$data->nama_bulan ?></option>
									<?php endforeach; ?>
								</select>
								</div>
								<div class="col-md-1 col-sm-9 col-xs-12">
								Tahun :
								</div>
                                <div class="col-md-2 col-sm-9 col-xs-12">
								<select id="thn" required="required" name="thn" class="form-control col-md-5 col-xs-12" >
									<?php foreach($th as $data):?>
									<option value="<?=$data->id_tahun ?>" select=""><?=$data->tahun ?></option>
									<?php endforeach; ?>
								</select>
								</div>
								<div class="col-md-2 col-sm-9 col-xs-12">
                                <button type="submit" class="primary">Save</button>
								</div>
								
							</form>
						<br><br><br>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Sasaran Kerja</a>
                                </li>
                                <li><a href="#profile" data-toggle="tab">Sikap</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <h4>Sasaran Kerja</h4>
                                    <p><table id="datatable-buttons" class="table table-striped table-bordered">
										  <thead>
											<tr>
											  <th width="15%">Bulan</th>
											  <th width="15%">NIP</th>
											  <th width="15%">Nama</th>
											  <th width="10%">Nilai</th>
											</tr>
										  </thead>


										  <tbody>
											<?php foreach ($nilai as $data):?> 
											<tr>
												 <td><?= $data->bulan ?> - <?= $data->tahun ?></td>
												 <td><?=$data->nip ?></td>
												 <td><?=$data->nama?></td>
												 <td><?=$data->skp?></td>
											</tr>
											<?php endforeach;?>
										  </tbody>
										</table>
									</p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>Sikap</h4>
										<p><table id="datatable-buttons" class="table table-striped table-bordered">
										  <thead>
											<tr>
											  <th width="15%">NIP</th>
											  <th width="15%">Nama</th>
											  <th width="8%">Pelayanan</th>
											  <th width="8%">Integritas</th>
											  <th width="8%">Komitmen</th>
											  <th width="8%">Disiplin</th>
											  <th width="8%">Kerjasama</th>
											  <th width="8%">Kepemimpinan</th>
											  <th width="8%">Jumlah</th>
											  <th width="8%">Rata</th>
											   <th width="8%">Action</th>
											</tr>
										  </thead>


										  <tbody>
											<?php foreach ($nilai as $data):?> 
											<tr>
												 <td><?=$data->nip ?></td>
												 <td><?=$data->nama?></td>
												 <td><?=$data->pelayanan?></td>
												 <td><?=$data->integritas?></td>
												 <td><?=$data->komitmen ?></td>
												 <td><?=$data->disiplin?></td>
												 <td><?=$data->kerjasama?></td>
												 <td><?=$data->kepemimpinan?></td>
												 <td><?=$data->jumlah?></td>
												 <td><?=$data->rata?></td>
												 <td><a href="<?php echo base_url().'index.php/Penilai/nilai/prints/'.$data->id_nilai;?>" title="print"><i class="fa fa-print"></i></a></td>
											</tr>
											<?php endforeach;?>
										  </tbody>
										</table>
									</p>
                                </div>
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
