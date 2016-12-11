<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flight Reminder | Admin</title>
    <link rel="stylesheet" href="<?php echo base_url();?>includes/css/bikin.css" type="text/css" media="all">

</head>

<body>

    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Penerbangan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <a href="<?php echo site_url('mengelolapenerbangan')?>" style="text-decoration: none; color:white;"><button id="button" class="btn btn-primary pull-right" type="button">Tambah Penerbangan</button></a>
            </div>
            <br><br><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Kode Pesawat</th>
                                            <th>Nama Maskapai</th>
                                            <th>Asal</th>
                                            <th>Tujuan</th>
                                            <th>Jam Keberangkatan</th>
                                            <th>Ubah</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        foreach($penerbangan as $row) 
                                        { ?>
                                            <tr>
                                                <td><?php echo $row->KodePesawat; ?></td>
                                                <td><?php echo $row->NamaMaskapai; ?></td>
                                                <td><?php echo $row->Asal; ?></td>
                                                <td><?php echo $row->Tujuan; ?></td>
                                                <td><?php echo $row->JamKeberangkatan; ?></td>
                                                <td>
                                                    <form action="<?php echo site_url('mengelolapenerbangan/ubah')?>" method="POST">
                                                        <input type="hidden" name="kodepesawat" value="<?php echo $row->KodePesawat; ?>">
                                                        <button type="submit" class="btn btn-primary">Ubah</button>
                                                    </form>
                                                </td>   
                                                <td>
                                                    <form action="<?php echo site_url('mengelolapenerbangan/hapus')?>" method="POST">
                                                        <input type="hidden" name="kodepesawat" value="<?php echo $row->KodePesawat; ?>">
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </td>   
                                            </tr>
                                        <?php } ?>    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    

</body>

</html>
