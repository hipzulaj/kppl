<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Yummy Admin | Pesanan</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url().'assets/sb/css/bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/sb/font-awesome/css/font-awesome.css'?>" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="<?php echo base_url().'assets/sb/css/plugins/dataTables/dataTables.bootstrap.css'?>" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo base_url().'assets/sb/css/sb-admin.css'?>" rel="stylesheet">

    <!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script> -->

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url().'Ctrl_admin/index'?>">YUMMY</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
                  <span>Welcome, <?php echo $this->session->userdata('username'); ?>!</span>
                </li>
                <li>
                    <a href="<?php echo site_url('MyController/index')?>" title="HOME">HOME</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'Ctrl_admin/change_password'?>" title="Ganti Password"><i class="fa fa-edit fa-fw"></i></a>
                </li>
                <li>
                    <a href="<?php echo base_url().'login_user/logout'?>" title="Keluar"><i class="fa fa-power-off fa-fw"></i></a>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url().'Ctrl_admin/index'?>"><i class="fa fa-book fa-fw"></i> Daftar Pesanan</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Menu<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url().'Ctrl_admin/menu'?>">Daftar Menu</a>
                                </li>
                            </ul>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url().'Ctrl_admin/add_menu'?>">Tambah Menu</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo base_url().'Ctrl_admin/feedback'?>"><i class="fa fa-dashboard fa-fw"></i> Feedback Pengunjung</a>
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Daftar Pesanan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" ><!--id="dataTables-example"-->
                                    <thead>
                                        <tr>
                                            <th style="width:100px">ID Pesanan</th>
                                            <th>Nama Pemesan</th>
                                            <th style="width:120px">No. Telepon</th>
                                            <th>Alamat</th>
                                            <th style="width:150px">Menu</th>
                                            <th style="width:50px">Jumlah</th>
                                            <th style="width:100px">Total Harga</th>
                                            <th style="width:50px">Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach ($data as $p) { ?>
                                        <tr>
                                          <td><?php echo $p['id_pesanan'] ?></td>
                                          <td><?php echo $p['nama_pemesan'] ?></td>
                                          <td><?php echo $p['no_telp'] ?></td>
                                          <td><?php echo $p['alamat'] ?></td>
                                          <td><?php echo $p['menu'] ?></td>
                                          <td><?php echo $p['jumlah'] ?></td>
                                          <td><?php echo "Rp ".number_format($p['total_harga'], 0, "," , ".") ?></td>
                                          <td><?php echo $p['Status_Order'] ?></td>
                                          <?php if($p['Status_Order'] != "Pesanan Selesai"){ ?>
                                          <td align='center'>
                                            <a href="<?php echo base_url().'Ctrl_admin/change_status_order/'.$p['id_pesanan']; ?>">
                                              <button type="button" class="btn btn-outline btn-primary btn-sm">Ubah Status</button>
                                            </a>
                                          </td>
                                          <?php } else{ ?>
                                          <td align='center'><font color='green'>Pesanan Telah Selesai</font></td>
                                          <?php } ?>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url().'assets/sb/js/jquery-1.10.2.js'?>"></script>
    <script src="<?php echo base_url().'assets/sb/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/sb/js/plugins/metisMenu/jquery.metisMenu.js'?>"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="<?php echo base_url().'assets/sb/js/plugins/dataTables/jquery.dataTables.js'?>"></script>
    <script src="<?php echo base_url().'assets/sb/js/plugins/dataTables/dataTables.bootstrap.js'?>"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo base_url().'assets/sb/js/sb-admin.js'?>"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>
