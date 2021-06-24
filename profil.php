<?php
  include "config/koneksi.php";
  include "library/controller.php";

  $go = new controller();

  $tabel = "tbl_setting_lap";
  $redirect = "?menu=profil";
  $where = "id_setting = '1'";
  @$foto= $_POST['foto'];

  if(isset($_POST['perbarui'])){
    $foto = $_FILES['foto'];
    @$name =$_POST['nama'];
    @$alamat =$_POST['alamat'];
    @$no_telepon = $_POST['telpon'];
    @$web = $_POST['web'];
    @$no_telpon = $_POST['telpon'];
    @$email = $_POST['email'];
    @$tmp_file = $foto['tmp_name'];
    @$logo=$foto['name'];
    $tempat= "img";
    move_uploaded_file($tmp_file, "$tempat/$logo");

    if (empty($_FILES['foto']['name'])){
    @$set = mysqli_query($con,"UPDATE tbl_setting_lap SET nama_perusahaan='$name', alamat='$alamat', no_telpn ='$no_telepon', web ='$web', no_hp='$no_telpon', email='$email' WHERE id_setting=1 ");
    }
    else{
    @$set = mysqli_query($con,"UPDATE tbl_setting_lap SET nama_perusahaan='$name', alamat='$alamat', no_telpn ='$no_telepon', web ='$web', no_hp='$no_telpon', logo = '$logo' , email='$email' WHERE id_setting=1 ");
    }
    if($set){
    echo "<script>alert('Berhasil diubah');document.location.href='$redirect'</script>";
    }else{
    echo "<script>alert('Gagal diubah');document.location.href='$redirect'</script>";
    }
  }

  @$sql="SELECT * FROM tbl_setting_lap";
  $edit=mysqli_fetch_assoc(mysqli_query($con,$sql));

?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Profil</title>
  </head>
  <body>
    <div class="container">
      <div class="card" style="width: 900px;">
        <div class="card-header">
          Form Setting Laporan
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                  <label class="form-label fw-bold">Nama Perusahaan :</label>
                  <input type="text" class="form-control" name="nama" value="<?php echo @$edit['nama_perusahaan'] ?>" required>
                </div>
                <div class="mb-3">
                  <label class="form-label fw-bold">Alamat :</label>
                  <input type="text" class="form-control" name="alamat" value="<?php echo @$edit['alamat'] ?>" required>
                </div>
                <div class="mb-3">
                  <label class="form-label fw-bold">Web Perusahaan :</label>
                  <input type="text" class="form-control" name="web" value="<?php echo @$edit['web'] ?>" required>
                </div>
                <div class="mb-3">
                  <label class="form-label fw-bold">Email :</label>
                  <input type="text" class="form-control" name="email" value="<?php echo @$edit['email'] ?>" required>
                </div>
                <div class="mb-3">
                  <label class="form-label fw-bold">No telpon :</label>
                  <input type="number" class="form-control" name="telpon" value="<?php echo @$edit['no_telpn'] ?>" required>
                </div>
                <div class="mb-3">
                  <label class="form-label fw-bold">Logo :</label>
                  <input class="form-control" id="formFile" type="file" name="foto" >
                  <img style="width:20%;" src="logo/<?php echo @$edit['logo'] ?>" alt="">
                </div>
                <div data-aos="fade-up" data-aos-delay="500">
                    <input class="btn btn-outline-primary" type="submit" name="perbarui" value="Perbarui Data">
                </div>
              </form>
          </div>
      </div>
    </div>
  </body>
</html>