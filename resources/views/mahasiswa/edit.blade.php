@extends('mahasiswa.layout')

@section('content')
<div class="container mt-5">
    
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Mahasiswa
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" enctype="multipart/form-data" action="{{ route('mahasiswa.update', $Mahasiswa->nim) }}" id="myForm">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="Nim">Nim</label> 
                        <input type="text" name="Nim" class="form-control" id="Nim" value="{{ $Mahasiswa->nim }}" aria-describedby="Nim" > 
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label> 
                        <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $Mahasiswa->nama }}" aria-describedby="Nama" > 
                    </div>
                    <div class="form-group">
                        <label for="Kelas">Kelas</label> 
                        <select class="form-control" name="Kelas" id="Kelas">
                            @foreach ($kelas as $item)
                                <option value="{{$item->id}}" {{ $Mahasiswa->kelas_id === $item->id ? 'selected' : '' }}>{{$item->nama_kelas}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Jurusan">Jurusan</label> 
                        <input type="text" name="Jurusan" class="form-control" id="Jurusan" value="{{ $Mahasiswa->jurusan }}" aria-describedby="Jurusan" > 
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label> 
                        <input type="text" name="Email" class="form-control" id="Email" value="{{ $Mahasiswa->email }}" aria-describedby="Email" > 
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label> 
                        <input type="text" name="Alamat" class="form-control" id="Alamat" value="{{ $Mahasiswa->alamat }}" aria-describedby="Alamat" > 
                    </div>
                    <div class="form-group">
                        <label for="TTL">Tanggal Lahir</label> 
                        <input type="date" name="TTL" class="form-control" value="{{ $Mahasiswa->ttl }}" id="TTL" aria-describedby="TTL" > 
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar</label> 
                        <input type="file" name="image" class="form-control" id="image" aria-describedby="image" > 
                        <img src="{{asset('storage/'.$Mahasiswa->foto)}}" class="w-25">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection