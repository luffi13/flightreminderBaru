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
                    <h1 class="page-header">Akun Pengguna</h1>
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
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        foreach($akun as $row) 
                                        { ?>
                                            <tr>
                                                <td><?php echo $row->username; ?></td>
                                                <td><?php echo $row->nama; ?></td>
                                                <td><?php echo $row->email; ?></td>   
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
