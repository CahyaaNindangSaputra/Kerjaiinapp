



@extends('lokasi.layout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 60rem">
            <div class="card-header" style="background-color: white;">
                <div class="row">

                    <div class="col-12 text-center"><br><br>
                        <h3>Tambah Legalitas</h3>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('legalitass.update',   $legalitass ->id_perusahaan)}}" method="post" id="myform">
                    @csrf
                    @method('PUT')
                <div class="form-group">
                    <label for="id_perusahaan">ID</label>
                    <input type="text" name="id_perusahaan" id="" class="form-control" value="{{  $legalitass ->id_perusahaan}}">
                </div>

                <div class="form-group">
                    <label for="akta_pendiri_perusahaan">Akta Pendiri Perusahaan</label>
                    <input type="text" name="akta_pendiri_perusahaan" id="" class="form-control" value="{{  $legalitass ->akta_pendiri_perusahaan}}">
                </div>
                <div class="form-group">
                    <label for="tanggal_penegasan">Tanggal Penegasan</label>
                    <input type="text" name="tanggal_penegasan" id="" class="form-control" value="{{  $legalitass ->tanggal_penegasan}}">
                </div>
                <div class="form-group">
                    <label for="nama_notaris">Nama Notaris</label>
                    <input type="text" name="nama_notaris" id="" class="form-control" value="{{  $legalitass ->nama_notaris}}">
                </div>
                <div class="form-group">
                    <label for="siup">SIUP</label>
                    <input type="text" name="siup" id="" class="form-control" value="{{  $legalitass ->siup}}">
                </div>
                <div class="form-group">
                    <label for="npwp">NPWP</label>
                    <input type="text" name="npwp" id="" class="form-control" value="{{  $legalitass ->npwp}}">
                </div>
                <div class="form-group">
                    <label for="bentuk_penanaman_modal">Bentuk Penanaman modal</label>
                    <input type="text" name="bentuk_penanaman_modal" id="" class="form-control" value="{{  $legalitass ->bentuk_penanaman_modal}}">
                </div>
                <div class="form-group">
                    <label for="tdp">TDP</label>
                    <input type="text" name="tdp" id="" class="form-control" value="{{  $legalitass ->tdp}}">
                </div>
                <div class="form-group">
                    <label for="nib">NIB</label>
                    <input type="text" name="nib" id="" class="form-control" value="{{  $legalitass ->nib}}">
                </div>






                <button class="btn btn-success" type="submit">Simpan</button>
                &nbsp;
                <a class="btn btn-info" href="{{ route('legalitass.index')}}">Kembali</a>
            </form>
            </div>




        </div>

    </div>

</div>

@endsection
