@extends('layouts.app')
@section('content')

    <div class = "container">
        <h4>Data Motor</h4>
        <a href="{{ route ('motor.create') }}" class="btn btn-outline-info">Tambah Data</a>
        <p></p>
       <table class ="table table-hover table-dark">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Kode</th>
                <th scope="col">Merk</th>
                <th scope="col">Type</th>
                <th scope="col">Warna</th></th>
                <th scope="col">Harga</th>
                <th scope="col">Gambar</th>
                <th colspan="2" class="text-center">Aksi</th>
            </tr>
            </thead>
            @php $no = 1; @endphp
            @foreach($motor as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nama_tag }}</td>
                <td>{{ $data->slug }}</td>

                <td>
                    <a href="{{ route('motor.edit',$data->id) }}"
                   class="btn btn-outline-info">Edit Data</a>
                </td>
                <td>
                    <form action="{{ route('motor.destroy',$data->id) }}" method="post">
                    {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-outline-info" type="submit">
            Hapus Data
        </button>
        </form>
    </td>
</tr>
@endforeach
@endsection