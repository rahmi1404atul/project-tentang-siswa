<?php

namespace App\Http\Controllers\siswa;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateSiswaRequest;
use App\Http\Requests\siswaRequest;
use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\file;


class SiswaController extends Controller
{
    public function index(){
        $data['siswa']= siswa::get();
        return view('siswa/siswa',$data);
    }
    public function tambahm(){
        return view('siswa/tambahm');
    }
    public function savem(siswaRequest $r){
        if($r->validated()){
            $gambarbuku = $r->gambarbuku->getClientOriginalName();
            $r->gambarbuku->move('gambarbuku/',$gambarbuku);

            siswa::create([
                'namasiswa' => $r->namasiswa,
                'alamat' => $r->alamat,
                'kelas' => $r->kelas,
                'jadwal' => $r->jadwal,
                'gambarbuku' => $gambarbuku
            ]);
       return redirect('siswa')->with('pesan','input data berhasil');
        }
       
    }
    
    public function editm($id){
        $data['siswa']= siswa::where('id',$id)->first();

        return view('siswa/editm',$data);
    }
    

    public function updatem(UpdateSiswaRequest $r, $id){
        if($r->validated()){
            if($r->gambarbuku){
                $cek = siswa::where('id',$id)->first();
                if(file::exists(public_path('gambarbuku/'.$cek->gambarbuku))){
                    file::delete(public_path('gambarbuku/'.$cek->gambarbuku));
                }
                $gambarbuku = $r->gambarbuku->getClientOriginalName();
                $r->gambarbuku->move('gambarbuku/',$gambarbuku);

                $data['gambarbuku'] = $gambarbuku;
            }
            $data['namasiswa'] = $r->namasiswa;
            $data['alamat'] = $r->alamat;
            $data['kelas'] = $r->kelas;
            $data['jadwal'] = $r->jadwal;

            siswa::where('id',$id)->update($data);

            return redirect('siswa');
        }
}

public function hapusm($id){
    siswa::where('id',$id)->delete();

    return back();
}

public function dash(){
    return view('home.dashboard');
}
}

