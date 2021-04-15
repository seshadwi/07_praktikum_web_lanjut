@extends('mahasiswa.layout')
 
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                Detail Mahasiswa
                </div>
                <div class="card-body">
                    
                    @if ($Mahasiswa)
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><img class="w-50" src="{{asset('storage/'.$Mahasiswa->foto)}}"></li>
                            <li class="list-group-item"><b>Nim: </b>{{$Mahasiswa->nim}}</li>
                            <li class="list-group-item"><b>Nama: </b>{{$Mahasiswa->nama}}</li>
                            <li class="list-group-item"><b>Kelas: </b>{{$Mahasiswa->kelas->nama_kelas}}</li>
                            <li class="list-group-item"><b>Jurusan: </b>{{$Mahasiswa->jurusan}}</li>
                            <li class="list-group-item"><b>Email: </b>{{$Mahasiswa->email}}</li>
                            <li class="list-group-item"><b>Alamat: </b>{{$Mahasiswa->alamat}}</li>
                            <li class="list-group-item"><b>Tanggal Lahir: </b>{{$Mahasiswa->ttl}}</li>
                        </ul>
                    @else
                        <p>Nama Mahasiswa Kosong</p>
                    @endif
                    
                </div>
                <a class="btn btn-success mt-3" href="{{ route('mahasiswa.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection