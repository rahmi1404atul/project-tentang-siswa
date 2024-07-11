@extends('home.template')

@section('title')
    Edit Data
@endsection

@section('content')

<form action="{{route('updatem',$siswa->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="flex flex-col gap-2">
        <label for="">Nama siswa</label>
        <input type="text" name="namasiswa" value="{{$siswa->namasiswa}}" class="p-2 border rounded-md">
        <span>{{$errors->first('namasiswa')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">alamat</label>
        <input type="text" name="alamat" value="{{$siswa->alamat}}" class="p-2 border rounded-md">
        <span>{{$errors->first('alamat')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Kelas</label>
        <input type="text" name="kelas" value="{{$siswa->kelas}}" class="p-2 border rounded-md">
        <span>{{$errors->first('kelas')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Jadwal</label>
        <input type="text" name="jadwal" value="{{$siswa->jadwal}}" class="p-2 border rounded-md">
        <span>{{$errors->first('jadwal')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Gambar Buku</label>
        <input type="file" name="gambarbuku" class="p-2 border rounded-md">
        <span>{{$errors->first('gambarbuku')}}</span>
    </div>
    <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 w-1/2 p-2 rounded-md text-white">Simpan</button>
    </div>
</form>

@endsection