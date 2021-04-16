<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Kartu Hasil Studi (KHS)</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    </head>
    <Body>    
        <div class="container">
            <div>
                <h3 class="text-center">JURUSAN TEKNOLOGI INFORMASI</h1>
                <h3 class="text-center">POLITEKNIK NEGERI MALANG</h1>
                <br>
                <h5 class="text-center">Kartu Hasil Studi (KHS)</h1>
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
    </Body>
</html>