@extends('layouts.app')
@section('content')

    <div class = "container">
        <h4>Data Pembeli</h4>
        <center>
        <a href="{{ route ('pembeli.create') }}" class="btn btn-outline-primary">Tambah Data</a>
        </center>
        <p></p>
       <table class ="table table-hover table-dark">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">No Ktp</th>
                <th scope="col">Nama Pembeli</th>
                <th scope="col">Alamat Pembeli</th>
                <th scope="col">Telpon Pembeli</th></th>
                <th scope="col">Pembeli Hp</th>
                <th colspan="2" class="text-center">Aksi</th>
                </tr>
            </thead>
            @php $no = 1; @endphp
            @foreach($pembeli as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->judul }}</td>
                <td><img  src="{{ asset('assets/img/pembeli/'.$data->foto)}}" width="100%"></td>
                <td>{!! $data->konten !!}</td>
                <td>{{ $data->user->name}}</td>
                <td>{{ $data->pembeli->nama}}</td>
                <td>{{ $data->slug }}</td>
                <td>
        </tr>
        <td>
          <a href="{{ route('pembeli.edit',$data->id) }}"
          class="btn btn-outline-info">Edit Data</a>
        </td>
        <td>
          <form action="{{ route('pembeli.destroy',$data->id) }}" method="post">
          {{csrf_field()}}
              <input type="hidden" name="_method" value="DELETE">
              <button class="btn btn-outline-info" type="submit">
            Hapus Data
              </button>
          </form>
      </td>
  </tr>
@endforeach
        </tbody>
    </table>
</div>
@endsection