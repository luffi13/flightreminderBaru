<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flight Reminder | Admin</title>
    
</head>

<body>

    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Notifikasi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nomor Notifikasi</th>
                                            <th>Username</th>
                                            <th>Kode Pesawat</th>
                                            <th>Tanggal</th>
                                            <th>Jam Berangkat</th>
                                            <th>Jam Check-In</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        foreach($notifikasi as $row) 
                                        { ?>
                                            <tr>
                                                <td><?php echo $row->NomorNotifikasi; ?></td>
                                                <td><?php echo $row->KodePesawat; ?></td>
                                                <td><?php echo $row->Username; ?></td>
                                                <td><?php echo $row->Tanggal; ?></td>
                                                <td><?php echo $row->JamBerangkat; ?></td>
                                                <td><?php echo $row->JamCheckIn; ?></td>                                               
                                                <td>
                                                    <form action="<?php echo site_url('mengelolanotifikasi/hapus')?>" method="POST">
                                                        <input type="hidden" name="nomornotifikasi" value="<?php echo $row->NomorNotifikasi; ?>">
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
