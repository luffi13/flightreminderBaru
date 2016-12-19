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
                    <h1 class="page-header">Broadcast</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form id="form_1" action="<?php echo site_url('admin\broadcastPesan')?>" method="GET">
             

                                <div class="form-group">
                                  <label >Kode penerbangan:</label>
                                  <input type="text" class="form-control" style="text-transform:uppercase"   placeholder="Kode Penerbangan" name="kodepesawat" required>
                                </div>

                                <div class="form-group">
                                  <label>Pesan:</label>
                                  <textarea class="form-control" rows="5" name="pesan" placeholder="MASUKKAN PESAN" required></textarea>
                                </div>


                                  <div class="modal-footer">
                                 
                                    <button type="submit" class="btn btn-primary">kirim</button>
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
