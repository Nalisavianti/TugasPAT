<?php 
    include "config/koneksi.php";
    include "library/controller.php";
    $go = new controller();
    $tabel = "tbl_user";
    @$field = array('nama'=>$_POST['nama'],
                    'alamat'=>$_POST['alamat'],
                    'telpon'=>$_POST['telpon'],
                    'status'=>$_POST['status'],
                    'username'=>$_POST['username'],
                    'password'=>$_POST['password'],
                    'akses'=>$_POST['akses']);
    @$where = "id_user = $_GET[id]";
    @$redirect = "?menu=tambah_akun";

    if (isset($_POST['simpan'])) {
        $go->simpan($con, $tabel, $field, $redirect);
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Akun</title>
    </head>
    <body>
        <div class="container-fluid" id= "content" >
            <div class="card">
                <div class="card-header">
                    FORM TAMBAH AKUN
                </div>
                <div class="card-body">
                    <form method="post">
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>

                        <label for="exampleFormControlInput1" class="form-label fw-bold">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" required>
                        
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Telpon</label>
                        <input type="number" name="telpon" class="form-control" placeholder="Masukan telpon" required>

                        <label for="exampleFormControlInput1" class="form-label fw-bold">Status</label>
                        <input type="text" name="status" class="form-control" placeholder="Masukan status " required>

                        <label for="exampleFormControlInput1" class="form-label fw-bold">Masukan Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukan username" required>

                        <label for="exampleFormControlInput1" class="form-label fw-bold">Masukan Password</label>
                        <input type="text" name="password" class="form-control" placeholder="Masukan password baru" required>

                        <label for="exampleFormControlInput1" class="form-label fw-bold"> Hak Akses</label>
                        <input type="text" name="akses" class="form-control" placeholder="Masukan hak ases" required>

                        <input class="btn btn-primary mt-3" name="simpan" value="Tambah Akun" type="submit">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>