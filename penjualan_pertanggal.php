<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan Pertanggal</title>
</head>
<body>
<div class="container-fluid" id= "content" >
    <div class="card">
	    <div class="card-header">
		    FILTER PENJUALAN PERTANGGAL
	    </div>
    </div>
    <div style="padding:10px;">
        <form class="d-flex">
            <label class="me-3">Periode</label>
            <input class="form-control me-3" type="date" name="tglawal" aria-label="Search">
            <label class="me-3">Sd</label>
            <input class="form-control me-3" type="date" name="tglakhir" aria-label="Search">
            <button class="btn btn-primary me-2" type="submit">Tampilkan</button>
            <button class="btn btn-primary me-2" type="submit">Refresh</button>
            <button class="btn btn-outline-success" type="submit">cetak</button>
        </form>
        <div class="table-responsive">
            <table align="center" border="1" class="mt-4 table table-stripped table-hover bg-white" id="data">
                <tr>
                    <th>No</th>
                    <th>No Faktur</th>
                    <th>Judul Buku</th>
                    <th>NO ISBN</th>
                    <th>Jumlah Beli</th>
                    <th>Harga Satuan</th>
                    <th>PPN</th>
                    <th>Diskon</th>
                    <th>Total Harga</th>
                    <th>Tanggal Transaksi</th>
                </tr>
                <!-- <?php
                    $data = $go->tampil($con,$tabel);
                    $no = 0;
                    if($data ==""){
                        echo "<tr><td colspan='5'>No Record</td></tr>";
                    }else{
                        foreach($data as $r){
                        $no++
                ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $r['username']?></td>
                    <td><?php echo $r['password']?></td>
                    <td><a href="?menu=user&hapus&id=<?php echo $r['id']?>" onclick="return confirm('Hapus Data?')">Hapus</a></td>
                    <td><a href="?menu=user&edit&id=<?php echo $r['id']?>">Edit</a></td>
                </tr>
                <?php } } ?> -->
            </table>
        </div>
    </div>
</div>
</body>
</html>