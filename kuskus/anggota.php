
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-8 mt-3">
                    <div class="card">
                        <div class="card-header">
                            Pencarian Data
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input type="text" name="cari" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-primary">Cari Data</button>
                                            <button type="button" class="btn btn-success">Tambah</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <i class="bi-table"></i> Data Buku
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Pinjam</th>
                                        <th>TgL Pinjam</th>
                                        <th>Siswa</th>
                                        <th>Buku</th>
                                        <th>Tgl Kembali</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    </body>

</html>