<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	
	<title>Input Data Event</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</head>
<body>
	<div class="conteiner" style="margin-left: 300px; margin-right: 300px;">
		<h2 class="alert alert-warning text-center mt-5">DATA EVENT</h2>

		<form action="prosesinputevent.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
			<div class="form-group">
				<label>ID</label>
				<input type="text" class="form-control" name="id_event">
			</div>
			
			<div class="form-group">
				<label>Nama Event</label>
				<input type="text" class="form-control" name="nm_event">
			</div>
			
			<div class="form-group">
				<label>Deskripsi</label>
				<input type="text" class="form-control" name="deskripsi">
			</div>
            <div class="form-group">
                <label>Foto</label>
                <input class="form-control" type="file" id="foto" name="foto">
            </div>

			<button type="submit" class="btn btn-success" name="simpan" value="Submit" style="margin-top: 20px; margin-left: 300px;">SIMPAN</button>
            <button type="reset" class="btn btn-danger" value="Reset" style="margin-top: 20px;">RESET</button>

		</form>
	</div>

</body>
</html>