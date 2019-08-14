@extends('layouts.app')
@section('content')

<div class = "container">
    <h4>Data Motor</h4>
   <table class ="table table-hover table-dark">
		<div class="body">
			<form action="" method="post" class="form-horizontal">
   
						<div class="form-group">
							<label class="control-label col-lg-4">No</label>
							<div class="col-lg-4">
								<input type="text" name="Nomor" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
						<label class="control-label col-lg-4">Kode Motor</label>
						<div class="col-lg-4">
                            <input type="text" name="kode_motor" autofocus required class="form-control" />
						</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Merk Motor</label>
							<div class="col-lg-4">
								<input type="text" required name="merk_motor" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Type Motor</label>
							<div class="col-lg-4">
								<input type="text" required name="type_motor" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Warna</label>
							<div class="col-lg-4">
								<input type="text" required name="warna" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Harga</label>
							<div class="col-lg-4">
								<input type="text" required name="harga" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Gambar</label>
							<div class="col-lg-4">
								<input type="file" required name="gambar" class="form-control" />
							</div>
						</div>
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="motor" value="Simpan" class="btn btn-primary" />
							&nbsp <input type="delete" value="Delete" class="btn btn-warning" onclick=self.history.back()>
                        </div>
                    </form>
	</div>
</div>
</html>
@endsection