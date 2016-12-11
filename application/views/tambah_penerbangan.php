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
                    <h1 class="page-header">Tambah Penerbangan</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <form role="form" action="<?php echo site_url('mengelolapenerbangan/tambah')?>" method="POST">
                        <div class="form-group">
                            <label>Kode Pesawat:</label>
                            <input type="text" class="form-control" name="kodepesawat" placeholder="Kode Pesawat">
                        </div>
                        <div class="form-group">
                            <label>Nama Maskapai:</label>
                            <input type="text" class="form-control" name="namamaskapai" placeholder="Nama Maskapai">
                        </div>
                        <div class="form-group">
                            <label>Asal:</label>
                            <input type="text" class="form-control" name="asal" style="text-transform:uppercase" placeholder="Asal">
                        </div>
                        <div class="form-group">
                            <label>Tujuan:</label>
                            <input type="text" class="form-control" name="tujuan" style="text-transform:uppercase" placeholder="Tujuan">
                        </div>
                        <div class="form-group">
                            <label>Jam Keberangkatan:</label>
                            <input type="text" class="form-control" name="jamkeberangkatan" placeholder="HH:MM:SS">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>                
                </div>
            </div>
        </div>
    </div>

    

</body>

</html>
