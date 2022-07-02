<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	
	<title>Input Data Wisata</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</head>
<body>
	<div class="conteiner" style="margin-left: 300px; margin-right: 300px;">
		<h2 class="alert alert-warning text-center mt-5">DATA WISATA</h2>

		<form action="prosesInput.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
			<div class="form-group">
				<label>ID</label>
				<input type="text" class="form-control" name="id" id="id" required>
			</div>

			<div class="form-group">
				<label>Nama Tempat Wisata</label>
				<input type="text" class="form-control" name="nm_wisata" required>
			</div>

			<div class="form-group">
				<label>Deskripsi</label>
				<textarea class="form-control" name="deskripsi" required></textarea>
			</div>
			
			<div class="form-group">
				<label>Kategory</label>
				<select class="form-select" name="kategori" required>
					<option value="">Pilih Kategory</option>
					<option value="Air Terjun">Air Terjun</option>
					<option value="Candi">Candi</option>
					<option value="Gunung">Gunung</option>
					<option value="Taman">Taman</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Lokasi</label>
				<input type="text" class="form-control" name="lokasi" required>
			</div>

			<div class="form-group">
				<label>Gmaps</label>
				<input type="text" class="form-control" id="map" name="map" required>
			</div>
			
			<div class="form-group">
                <label>Foto</label>
                <input class="form-control" type="file" id="foto" name="foto"  required>
            </div>

			<button type="submit" class="btn btn-success" name="simpan" value="Submit" style="margin-top: 20px;">SIMPAN</button>
            <button type="reset" class="btn btn-danger" value="Reset" style="margin-top: 20px;">RESET</button>

		</form>
	</div>

</body>
</html>