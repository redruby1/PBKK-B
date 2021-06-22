<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <title>List Mahasiswa</title>
    </head>

<body>
<div class="container">
<div class="container-fluid">
    <h3>Data Mahasiswa</h3>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <div class="text-right">
                        <a href="add-mhs" class="btn btn-primary formaddedit" type="button" datatype="add"> Tambah Data Mahasiswa </a>
                    </div>
                    <br>

                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">NRP</th>
                                    <th style="text-align: center;">Nama</th>
                                    <th style="text-align: center;">Jurusan</th>
                                    <th style="text-align: center;">Alamat</th>
                                    <th style="text-align: center;">No Telepon</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($mhs as $dt): ?>
                                    <tr>
                                        <td><?php echo $dt['nrp'] ?></td>
                                        <td><?php echo $dt['nama'] ?></td>
                                        <td><?php echo $dt['jurusan'] ?></td>
                                        <td><?php echo $dt['alamat'] ?></td>
                                        <td><?php echo $dt['no_telepon'] ?></td>
                                        <td style="text-align: center;">
                                            <a class="btn btn-primary formaddedit" type="button" style="padding: 0px 5px; color: white;" datatype="update" href="edit-data/<?= $dt['id'] ?>">Edit</a>
                                            <form action="delete/<?php echo $dt['id'] ?>" method="POST" style="display: inline-block;" onsubmit="return confirm('Anda yakin ingin menghapus data?');">
                                                <button class="btn btn-danger" type="submit" style="padding: 0px 5px;">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</body>
</html>