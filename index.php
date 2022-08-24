<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Data Mahasiswa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
            <div class="card mt-5">
        <div class="card-header bg-primary text-white">
            Data Mahasiswa
        </div>
        <div class="card-body">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
                Tambah Data
                </button>
        <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>No.</th>
                        <th>Nim</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>
                            <a href="#" class="btn btn-warning">Ubah</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                </table>

                

                <!-- Modal -->
                <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTambahLabel">Form data mahasiswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="aksi_crud.php">
                            <div class="mb-3">
                                <label class="form-label">NIM</label>
                                <input type="text" class="form-control" name="tnim" placeholder="Masukkan NIM">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama lengkap</label>
                                <input type="text" class="form-control" name="tnama" placeholder="Masukkan Nama Lengkap">
                            </div>


                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <textarea class="form-control" name="talamat" rows="3"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                    </div>
                </div>
                </div>
                        </div>
                        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>