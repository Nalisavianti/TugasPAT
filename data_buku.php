<?php
include 'config/koneksi.php';
include 'library/controller.php';

    $go = new controller();
    $tabel = "tbl_buku";
    @$field = array('id_buku'=>$_POST['id_buku'],
                'judul'=>$_POST['judul'],
                'noisbn'=>$_POST['noisbn'], 
                'penulis'=>$_POST['penulis'],
                'penerbit'=>$_POST['penerbit'],
                'tahun'=>$_POST['tahun'],
                'stok'=>$_POST['stok'],
                'harga_pokok'=>$_POST['harga_pokok'],
                'harga_jual'=>$_POST['harga_jual'],
                'ppn'=>$_POST['ppn'],
                'diskon'=>$_POST['diskon']);
    $redirect = "?menu=semua_data_buku";
    @$where = "id_buku= $_GET[id]";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>
<body>
<div class="container-fluid" id= "content" >
    <div class="card">
	    <div class="card-header">
		    LAPORAN SEMUA BUKU
	    </div>
	    <div class="card-body">
            <div style="padding:10px;">
                <form class="d-flex">
                    <button class="btn btn-primary me-2" type="submit">Cetak</button>
                    <button class="btn btn-outline-success" type="submit">Export Excel</button>
                </form>
                <div class="table-responsive mt-3">
                    <table align="center" border="1" class="mt-4 table table-striped table-hover bg-white" id="tableAll">
                        <thead>
                            <tr>
                                <th>Kode Buku</th>
                                <th>Judul Buku</th>
                                <th>NO ISBN</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Stok</th>
                                <th>Harga Pokok</th>
                                <th>Harga Jual</th>
                                <th>PPN</th>
                                <th>Diskon</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM tbl_buku ";
                                $jalan = mysqli_query($con, $sql);
                                while($r = mysqli_fetch_array($jalan)){
                            ?>
                            <tr>
                                <td><?php echo $r['id_buku']?></td>
                                <td><?php echo $r['judul']?></td>
                                <td><?php echo $r['noisbn']?></td>
                                <td><?php echo $r['penulis']?></td>
                                <td><?php echo $r['penerbit']?></td>
                                <td><?php echo $r['stok'] ?></td>
                                <td><?php echo $r['harga_pokok']?></td>
                                <td><?php echo $r['harga_jual']?></td>
                                <td><?php echo $r['ppn']?></td>
                                <td><?php echo $r['diskon']?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
	    </div>
    </div>
</body>
</html>