<?php
include "config/koneksi.php";
include "library/controller.php";

$go = new controller();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Nama Penulis</title>
</head>
<body>
    <div class="container-fluid" id= "content" >
    <div class="card">
        <div class="card-header">
            Form Filter Buku Berdasarkan Nama Penulis
	    </div>
	    <div class="card-body">
            <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Penulis</label>
            <form action="" method="POST" enctype="multipart/form-data">
                <fieldset class="form-group">
                    <select class="form-select" id="basicSelect" name="">
                    <option value="" selected disabled>Pilih Nama Penulis</option>
                        <?php
                        $no = 0;
                        $sql = "SELECT * FROM tbl_buku";
                        $jalan = mysqli_query($con, $sql);
                        while($r = mysqli_fetch_assoc($jalan)){
                            $no++
                    ?>
                        <option value="<?php echo $r['id_buku'] ?>"><?php echo $r['penulis']?></option>
                    <?php } ?>
                    <?php if ($no == ""){
                        echo "<tr><td colspan='7'>No Record</td></tr>";
                    }?>
                    </select>
                </fieldset>
                <a href="?menu=HasilFilter_Penulis" class="btn btn-primary mt-3" type="submit" name="lihat" value="lihat">Lihat</a>
            </form>
	    </div>
    </div>
</body>
</html>