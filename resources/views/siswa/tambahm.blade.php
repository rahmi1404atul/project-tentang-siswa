@extends('home.template')

@section('title')
    Tambah Data
@endsection

@section('content')

<form action="{{route('savem')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="flex flex-col gap-2">
        <label for="">Namasiswa</label>
        <input type="text" name="namasiswa" value="{{old('namasiswa')}}" class="p-2 border rounded-md">
        <span>{{$errors->first('namasiswa')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">alamat</label>
        <input type="text" name="alamat" value="{{old('guru')}}" class="p-2 border rounded-md">
        <span>{{$errors->first('alamat')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Kelas</label>
        <input type="text" name="kelas" value="{{old('kelas')}}" class="p-2 border rounded-md">
        <span>{{$errors->first('kelas')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Jadwal</label>
        <input type="text" name="jadwal" value="{{old('jadwal')}}" class="p-2 border rounded-md">
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