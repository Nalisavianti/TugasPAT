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
		   FORM UBAH PASSWORD AKUN ADMIN
	    </div>
	    <div class="card-body">
                <form method="post">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Username</label>
                <input type="text" name="username" class="form-control" id="exampleFormControlInput1" readonly value="" required>
                <label for="exampleFormControlInput1" class="form-label fw-bold">Masukan Password Lama</label>
                <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="Masukan password lama" required>
                <label for="exampleFormControlInput1" class="form-label fw-bold">Masukan Password Baru</label>
                <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="Masukan password baru" required>
                <button class="btn btn-primary " style="height:40px; width:100px; text-align:center; margin-top:10px;" type="submit">Ubah</button>
            </form>
        </div>
	</div>
</div>
</body>
</html>