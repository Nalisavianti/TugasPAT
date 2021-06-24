<?php 
include "config/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Faktur</title>
</head>
<body>
    <div class="container-fluid" id= "content" >
        <div class="card">
	        <div class="card-header">
		        Form Cetak Faktur Penjualan
	        </div>
	        <div class="card-body">
                <form method="post">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">No Faktur</label>
                    <select class="form-select" id="basicSelect" name="id_penjualan">
                        <option value="" selected disabled>Pilih No Faktur</option>
                            <?php
                            $no = 0;
                            $sql = "SELECT * FROM tbl_penjualan GROUP BY id_penjualan";
                            $jalan = mysqli_query($con, $sql);
                            while($r = mysqli_fetch_assoc($jalan)){
                                $no++
                            ?>
                        <option value="<?php echo $r['id_penjualan'] ?>"><?php echo $r['id_penjualan']?></option>
                            <?php } ?>
                    </select>
                    <input class="btn btn-primary mt-3" type="submit" name="lihat" value="lihat">
             </form>
	    </div>
        <div style="padding: 20px;">
            <div class="table-responsive mt-3">
                <table align="center" border="1" class="mt-4 table table-stripped table-hover bg-white" id="tableAll">
                    <thead>
                        <tr>
                            <th>Judul Buku</th>
                            <th>Jumlah Beli</th>
                            <th>Harga Satuan</th>
                            <th>PPN</th>
                            <th>Diskon</th>
                            <th>Total Harga</th>
                            <th>Bayar</th>
                            <th>Kembalian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                if(isset($_POST['lihat'])){
                                @$id_penjualan = $_POST['id_penjualan'];
                                $isi = mysqli_query($con, "SELECT * FROM tbl_penjualan INNER JOIN tbl_buku ON tbl_penjualan.id_buku = tbl_buku.id_buku WHERE id_penjualan = '$id_penjualan'");
                                while($b = mysqli_fetch_array($isi)){
                        ?>
                        <tr>
                                <td><?php echo $b['judul']?></td>
                                <td><?php echo $b['jumlah_beli']?></td>
                                <td><?php echo $b['harga_jual']?></td>
                                <td><?php echo $b['ppn']?></td>
                                <td><?php echo $b['diskon']?></td>
                                <td><?php echo $b['total_harga'] ?></td>
                                <td><?php echo $b['bayar'] ?></td>
                                <td><?php echo $b['kembalian'] ?></td>
                            </tr>
                        <?php } } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>