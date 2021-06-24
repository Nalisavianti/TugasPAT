<?php
include "config/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Pasok Buku</title>
</head>
<body>
<div class="container-fluid" id= "content" >
    <div class="card">
	    <div class="card-header">
		   Filter Pasok Berdasarkan DIstributor
	    </div>
        <div class="card-body">
            <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Distributor</label>
            <form action="" method="POST" enctype="multipart/form-data">
                <fieldset class="form-group">
                    <select class="form-select" id="basicSelect" name="nama_distributor">
                        <option value="" selected disabled>Pilih Nama Distibutor</option>
                            <?php
                            $no = 0;
                            $sql = "SELECT * FROM tbl_distributor GROUP BY nama_distributor";
                            $jalan = mysqli_query($con, $sql);
                            while($r = mysqli_fetch_assoc($jalan)){
                                $no++
                            ?>
                        <option value="<?php echo $r['nama_distributor'] ?>"><?php echo $r['nama_distributor']?></option>
                            <?php } ?>
                            <?php if ($no == ""){
                                echo "<tr><td colspan='7'>No Record</td></tr>";
                            }?>
                    </select>
                </fieldset>
                <input class="btn btn-primary mt-3" type="submit" name="lihat">
            </form>

            <div class="table-responsive mt-3">
                <table align="center" border="1" class="mt-4 table table-stripped table-hover bg-white" id="tableAll">
                    <thead>
                        <tr>
                            <th>Judul Buku</th>
                            <th>NO ISBN</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                            <th>Jumlah Pasok</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(isset($_POST['lihat'])){
                            @$nama_distributor = $_POST['nama_distributor'];
                            $jalan = mysqli_query($con,"SELECT * FROM tbl_pasok INNER JOIN tbl_distributor ON tbl_pasok.id_distributor = tbl_distributor.id_distributor INNER JOIN tbl_buku ON tbl_pasok.id_buku = tbl_buku.id_buku  WHERE nama_distributor = '$nama_distributor' ");
                            while($r = mysqli_fetch_array($jalan)){
                        ?>
                        <tr>
                            <td><?php echo $r['judul']?></td>
                            <td><?php echo $r['noisbn']?></td>
                            <td><?php echo $r['penulis']?></td>
                            <td><?php echo $r['penerbit']?></td>
                            <td><?php echo $r['harga_jual'] ?></td>
                            <td><?php echo $r['stok']?></td>
                            <td><?php echo $r['jumlah']?></td>
                            <td><?php echo $r['tanggal']?></td>
                        </tr>
                        <?php } } ?>
                    </tbody>
                </table>
            </div>
	    </div>
	</div>
</div>
</body>
</html>