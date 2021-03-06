<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dosen</title>
</head>
<body>
    <div class="col-md-12">
    <h3>Detail Dosen</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggil Lahir</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dsn->id?></td>
                <td><?php echo $dsn->nidn?> </td>
                <td><?php echo $dsn->nama?></td>
                <td><?php echo $dsn->gender?></td>
                <td><?php echo $dsn->tmp_lahir?></td>
                <td><?php echo $dsn->tgl_lahir?></td>
                <td><?php echo $dsn->pendidikan?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md-5 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?=base_url()?>uploades/photos/<?=$dsn->id?>.png" width="300"/>
                    <div class="mt4">
                        <h4><?=$dsn->nama?></h4>
                        <p>foto Dosen</p>
                        <?php echo $error;?>
                        <?php echo form_open_multipart('dosen/upload');?>
                        <input type="file" name='foto' size='300'/>
                        <input type="hidden" name='iddsn' value='<?=$dsn->id?>'/>
                        <input type="submit" value="upload foto" class="btn btn-primary"/>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>