<?php
include "config/koneksi.php";
include "library/controller.php";

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
    @$where = "penulis= $_GET[penulis]";
    $redirect = "?menu=HasilFilter_Penulis";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Penulis</title>
</head>
<body class="container-fluid" id= "content">
    <div class="card">
        <div class="card-header">
            <h3>Laporan Buku Berdasarkan Penulis</h3>
            <h3>Nama Penulis : "<?php echo $r['penulis'] ?><?php echo $r['penulis']?>"</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                    <table align="center" border="1" class="mt-4 table table-stripped table-hover bg-white" id="data">
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
                </table>
            </div>
        </div>
    </div>
</body>
</html>