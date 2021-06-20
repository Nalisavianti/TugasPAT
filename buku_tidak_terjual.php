<?php
    include "config/koneksi.php";
    include "library/controller.php";

    $go = new controller();
    $tabel = "tbl_jarang_jual";
    @$field = array('kode'=>$_POST['kode'],
                'judul'=>$_POST['judul'],
                'noisbn'=>$_POST['noisbn'], 
                'penulis'=>$_POST['penulis'],
                'penerbit'=>$_POST['penerbit'],
                'harga'=>$_POST['harga'],
                'total'=>$_POST['total'],
                'transaksi'=>$_POST['transaksi']);
    $redirect = "?menu=buku_tidak_terjual";
    @$where = "id= $_GET[id]";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Yang Tidak Pernah Terjual</title>
</head>
<body>
<div class="container-fluid" id= "content" >
    <div class="card">
	    <div class="card-header">
		    DATA BUKU TIDAK TERJUAL
	    </div>
	    <div class="card-body">
            <div style="padding:10px;">
                <form class="d-flex">
                    <button class="btn btn-outline-success" type="submit">Export Excel</button>
                </form>
                <div class="table-responsive">
                    <table align="center" border="1" class="mt-4 table table-stripped table-hover bg-white" id="data">
                        <tr>
                            <th>No</th>
                            <th>Kode Buku</th>
                            <th>Judul Buku</th>
                            <th>NO ISBN</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Harga Jual</th>
                            <th>Total Jumlah Beli</th>
                            <th>Total Transaksi</th>
                        </tr>
                        <?php
                            $no = 1;
                            $sql = "SELECT * FROM tbl_jarang_jual";
                            $jalan = mysqli_query($con, $sql);
                            while($r = mysqli_fetch_array($jalan)){
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $r['kode']?></td>
                            <td><?php echo $r['judul']?></td>
                            <td><?php echo $r['noisbn']?></td>
                            <td><?php echo $r['penulis']?></td>
                            <td><?php echo $r['penerbit']?></td>
                            <td><?php echo $r['harga']?></td>
                            <td><?php echo $r['total']?></td>
                            <td><?php echo $r['transaksi']?></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
	    </div>
    </div>
</body>
</html>