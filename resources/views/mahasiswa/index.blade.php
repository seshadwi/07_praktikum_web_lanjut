@extends('mahasiswa.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mt-2">
                    <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
                </div>
                <div class="float-right my-2">
                    <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <form class="card-body" action="mahasiswa/search" method="GET" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." name="q">
                    <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit">Go!</button>
              </span>
                </div>
            </form>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>TTL</th>
                <th width="280px">Action</th>
            </tr>
    
            @foreach ($mahasiswa as $mhs)
            <tr>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->kelas->nama_kelas }}</td>
                <td>{{ $mhs->jurusan }}</td>
                <td>{{ $mhs->email }}</td>
                <td>{{ $mhs->alamat }}</td>
                <td>{{ $mhs->ttl }}</td>
                <td>
                    <form action="{{ route('mahasiswa.destroy',['mahasiswa'=>$mhs->nim]) }}" method="POST">
                        <a class="btn btn-success" href="{{ route('mahasiswa.show',$mhs->nim) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mhs->nim) }}">Edit</a>
                        <a class="btn btn-secondary" href="{{ route('mahasiswa.nilai',$mhs->nim) }}">Nilai</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {{ $mahasiswa->links() }}
    </div>
@endsection