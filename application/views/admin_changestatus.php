<?php
foreach ($order as $o) {
  $id = $o['id_pesanan'];
  if($this->input->post('is_submitted')){
        $id = set_value('id_pesanan');
        $nama = set_value('nama_pemesan');
        $notelp = set_value('notelp');
        $alamat = set_value('alamat');
        $menu = set_value('menu');
        $jumlah = set_value('jumlah');
        $harga = set_value('harga');
        $status = set_value('status');
  } else{
        $id = $o['id_pesanan'];
        $nama = $o['nama_pemesan'];
        $notelp = $o['no_telp'];
        $alamat = $o['alamat'];
        $menu = $o['menu'];
        $jumlah = $o['jumlah'];
        $harga = $o['total_harga'];
        $status = $o['Status_Order'];
    }
}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Yummy Admin | Edit Menu</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url().'assets/sb/css/bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/sb/font-awesome/css/font-awesome.css'?>" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo base_url().'assets/sb/css/sb-admin.css'?>" rel="stylesheet">

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
                    <a href="<?php echo base_url().'Ctrl_admin/change_password'?>" title="Ganti Password"><i class="fa fa-edit fa-fw"></i></a>
                </li>
                <li>
                    <a href="<?php echo base_url().'Ctrl_admin/logout'?>" title="Keluar"><i class="fa fa-power-off fa-fw"></i></a>
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
                <div class="col-lg-6">
                    <h1 class="page-header">Edit Menu</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <!-- <form action="<?php echo base_url().'Ctrl_admin/form_add'?>" method="post" role="form"> -->
                                    <?php echo form_open('Ctrl_admin/change_status_order/'.$id);?>
                                        <div class="form-group">
                                            <label>ID Pesanan</label>
                                            <input type="text" name="id_pesanan" class="form-control" value="<?php echo $id; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pemesan</label>
                                            <input type="text" name="nama_pemesan" class="form-control" value="<?php echo $nama; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>No Telpon</label>
                                            <input type="text" name="notelp" class="form-control" value="<?php echo $notelp; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" name="alamat" rows="3" readonly><?php echo $alamat; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Menu</label>
                                            <input type="text" name="menu" class="form-control" value="<?php echo $menu; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input type="text" name="jumlah" class="form-control" value="<?php echo $jumlah; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="text" name="harga" class="form-control" value="<?php echo $harga; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-check-label">
                                              <select class="form-check-input" name="status" value="<?php echo $status; ?>" selected="<?=$status ?>">
                                              <option value="Belum Dikonfirmasi">Belum Dikonfirmasi</option>
                                              <option value="Dalam Pembuatan">Dalam Pembuatan</option>
                                              <option value="Dalam Pengiriman">Dalam Pengiriman</option>
                                              <option value="Pesanan Selesai">Pesanan Selesai</option>
                                              </select>
                                            </label>
                                        </div>
                                        <input type="hidden" name="is_submitted" value="1"/>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
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

</body>

</html>
