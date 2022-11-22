



@extends('lokasi.layout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 60rem">
            <div class="card-header" style="background-color: white;">
                <div class="row">

                    <div class="col-12 text-center"><br><br>
                        <h3>Tambah Lokasi</h3>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('lokasiperusahaann.update',   $lokasii ->id_perusahaan)}}" method="post" id="myform">
                    @csrf
                    @method('PUT')
                <div class="form-group">
                    <label for="id_perusahaan">ID</label>
                    <input type="text" name="id_perusahaan" id="" class="form-control" value="{{  $lokasii ->id_perusahaan}}">
                </div>

                <div class="form-group">
                    <label for="provinsi">Provinsi</label>
                    <input type="text" name="provinsi" id="" class="form-control" value="{{  $lokasii ->provinsi}}">
                </div>
                <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" name="kecamatan" id="" class="form-control" value="{{  $lokasii ->kecamatan}}">
                </div>
                <div class="form-group">
                    <label for="kode_pos">Kode Pos</label>
                    <input type="text" name="kode_pos" id="" class="form-control" value="{{  $lokasii ->kode_pos}}">
                </div>
                <div class="form-group">
                    <label for="nama_alamat">Nama Alamat</label>
                    <input type="text" name="nama_alamat" id="" class="form-control" value="{{  $lokasii ->nama_alamat}}">
                </div>






                <button class="btn btn-success" type="submit">Simpan</button>
                &nbsp;
                <a class="btn btn-info" href="{{ route('lokasiperusahaann.index')}}">Kembali</a>
            </form>
            </div>




        </div>

    </div>

</div>

@endsection
