<!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>includes/bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>includes/bootstrap/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url();?>includes/bootstrap/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url();?>includes/bootstrap/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>includes/bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>includes/bootstrap/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo site_url('admin/index')?>">Admin | <?php echo $username; ?></a>
            </div>
        
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="<?php echo site_url('admin/logout')?>" style="color:black;"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo site_url('admin/index')?>"><i class="fa fa-plane fa-fw"></i> Penerbangan</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/pengguna')?>"><i class="fa fa-user fa-fw"></i> Akun Pengguna</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/notifikasi')?>"><i class="fa fa-envelope fa-fw"></i> Notifikasi</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>