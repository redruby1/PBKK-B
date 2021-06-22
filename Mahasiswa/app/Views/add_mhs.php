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
        <h3>Tambah Data Mahasiswa</h3>
        <hr>

        <form action="" method="post" id="text-editor">
            <div class="form-group">
                <label for="nrp">NRP</label>
                <input type="text" name="nrp" class="form-control" placeholder="NRP" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" required>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
            </div>
            <div class="form-group">
                <label for="no_telepon">No Telepon</label>
                <input type="text" name="no_telepon" class="form-control" placeholder="No Telepon" required>
            </div>
            <br>
            <div class="form-group pt-2">
                <button type="submit" name="status" value="add" class="btn btn-primary">Save</button>
                <a class="btn btn-danger" type="button" style="color: white;" href="list-mhs">Cancel</a>  
            </div>
        </form>
                               
    </div>
</div>

</body>
</html>