



@extends('perusahaan.layout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 60rem">
            <div class="card-header" style="background-color: white;">
                <div class="row">

                    <div class="col-12 text-center"><br><br>
                        <h3>Edit Perusahan</h3>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('perusahaann.update', $perusahaann->id_perusahaan)}}" method="post" id="myform">
                    @csrf
                    @method('PUT')
                <div class="form-group">
                    <label for="id_perusahaan">ID</label>
                    <input type="text" name="id_perusahaan" id="" class="form-control" value="{{$perusahaann->id_perusahaan}}">
                </div>
                <div class="form-group">
                    <label for="nama_perusahaan">Nama Perusahaan</label>
                    <input type="text" name="nama_perusahaan" id="" class="form-control" value="{{$perusahaann->nama_perusahaan}}">
                </div>
                <div class="form-group">
                    <label for="jenis_usaha">Jenis Usaha</label>
                    <input type="text" name="jenis_usaha" id="" class="form-control" value="{{$perusahaann->jenis_usaha}}">
                </div>

                <div class="form-group">
                    <label for="no_telp_perusahaan">No Telp</label>
                    <input type="text" name="no_telp_perusahaan" id="" class="form-control" value="{{$perusahaann->no_telp_perusahaan}}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="" class="form-control" value="{{$perusahaann->email}}">
                </div>
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="text" name="website" id="" class="form-control" value="{{$perusahaann->website}}">
                </div>
                <div class="form-group">
                    <label for="deskripsi_perusahaan">Deskripsi Perusahaan</label>
                    <input type="text" name="deskripsi_perusahaan" id="" class="form-control" value="{{$perusahaann->deskripsi_perusahaan}}">
                </div>




                <button class="btn btn-success" type="submit">Simpan</button>
                &nbsp;
                <a class="btn btn-info" href="{{ route('perusahaann.index')}}">Kembali</a>
            </form>
            </div>



        </div>

    </div>

</div>

@endsection
