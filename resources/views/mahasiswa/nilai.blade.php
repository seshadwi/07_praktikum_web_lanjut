@extends('mahasiswa.layout')

@section('content')
    <div class="container">
        <div>
            <h1 class="text-center">JURUSAN TEKNOLOGI INFORMASI</h1>
            <h1 class="text-center">POLITEKNIK NEGERI MALANG</h1>
            <br>
            <h3 class="text-center">Kartu Hasil Studi (KHS)</h1>
        </div>
        <div class="row">
            <div class="m-1">
                <a class="btn btn-success" href="{{route('mahasiswa.nilai.print', $mahasiswa->nim)}}">Cetak Nilai</a>
            </div>
        </div>
        <div class="my-4">
            <h5><strong>Nama</strong> : {{$mahasiswa->nama}}</h5>
            <h5><strong>NIM</strong> : {{$mahasiswa->nim}}</h5>
            <h5><strong>Kelas</strong> : {{$mahasiswa->kelas->nama_kelas}}</h5>
        </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">SKS</th>
                <th scope="col">Semester</th>
                <th scope="col">Nilai</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($nilai as $item)
                <tr>
                    <th>{{$item->matakuliah->nama_matkul}}</th>
                    <th>{{$item->matakuliah->sks}}</th>
                    <th>{{$item->matakuliah->semester}}</th>
                    <td>{{$item->nilai}}</td>
                </tr>      
                @endforeach
            </tbody>
          </table>
    </div>
@endsection