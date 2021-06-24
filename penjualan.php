<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Penjualan</title>
    </head>
    <body>
        <div class="card">
                <div class="card-header">
                    Form Buku "Maaf pak saya mentok pisan disini tnya tmn jg sm gabisa bner mulu erorrnya ngeselin :D"
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">No Faktur</label>
                            <input type="text" name="no_faktur" class="form-control" id="exampleFormControlInput1" readonly value="FK000001" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Judul Buku</label>
                            <input type="text" name="Judul_buku" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                        <button class="btn btn-primary me-2 mb-2" type="submit">Lihat</button> 
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Jumlah Beli</label>
                            <input type="text" name="jml_beli" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Total Harga</label>
                            <input type="text" name="tot_harga" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                        <button class="btn btn-primary me-2" type="submit">Tambah Buku</button>
                    </form>
                </div>
        </div>
    </body>
</html>