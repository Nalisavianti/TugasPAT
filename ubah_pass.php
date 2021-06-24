<?php
    @session_start();
    include "config/koneksi.php";
    include "library/controller.php";
    
    $go = new controller();
    $tabel = "tbl_user";
    @$username = $_SESSION['username'];
    @$password = $_POST['password'];
    $data = $go->tampil($con, $tabel);
    $sql = "SELECT * FROM  tbl_user WHERE username = '$username'";
    $tampil = mysqli_fetch_assoc(mysqli_query($con, $sql));
    $redirect = "?menu=ubah_pass";

    if(isset($_POST['ubah'])){
        $sql = "UPDATE tbl_user SET password = '$password' WHERE username = '$username'";
        $query = mysqli_query($con, $sql);
        if(isset($query)){
            echo "<script>alert('Password berhasil diubah');document.location.href='$redirect'</script>";
        }else{
            echo "<script>alert('Password gagal diubah');document.location.href='$redirect'</script>";
        }
    }	
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ubah Password</title>
    </head>
    <body>
        <div class="container-fluid" id= "content" >
            <div class="card">
                <div class="card-header">
                    FORM UBAH PASSWORD AKUN
                </div>
                <div class="card-body">
                    <form method="post">
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo @$tampil['username']?>" readonly>

                        <label for="exampleFormControlInput1" class="form-label fw-bold">Masukan Password Lama</label>
                        <input type="text" name="passlama" class="form-control" value="<?php echo @$tampil['password']?>" readonly>
                        
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Masukan Password Baru</label>
                        <input type="text" name="password" class="form-control" placeholder="Masukan password baru" required>
                        <input class="btn btn-primary mt-3" name="ubah" value="Ubah" type="submit">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>