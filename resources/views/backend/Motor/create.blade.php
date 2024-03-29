@extends('layouts.app')
@section('content')

<div class="container">
		<div class="row">
		  <div class="col col-lg-11">
			  <form action="{{ route('motor.store') }}" method="post" enctype="multipart/form-data">
			  @csrf
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
						 <button type="submit" name="Simpan"class="btn btn-md btn-info">
							 Simpan Data
						 </button>
					 </div>
					 <div class="form-group">
						 <a href="{{ url('backend/Motor') }}" class="btn btn-outline-info">Kembali</a>
						</div>
                    </form>
	           </div>
            </div>
       
@endsection