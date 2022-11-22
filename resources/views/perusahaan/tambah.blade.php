@extends('perusahaan.layout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="d-flex card" style="width: 70rem;">
            <div class="card-header">

                    <div class="col-15 text-center"><br><br>
                        <h3>Tambah Data Perusahaan</h3>
                    </div>
            </div>
            <div class="card-body">
                <form action="{{route('perusahaann.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="namabarang">ID </label>
                        <input type="number" class="form-control" name="id_perusahaan">
                    </div>
                    <div class="form-group">
                        <label for="namabarang">Nama Perusahan</label>
                        <input type="text" class="form-control" name="nama_perusahaan">
                    </div>
                    <div class="form-group">
                        <label for="namabarang">Jenis Perusahaan</label>
                        <input type="text" class="form-control" name="jenis_usaha">
                    </div>
                    <div class="form-group">
                        <label for="namabarang">No Hp</label>
                        <input type="text" class="form-control" name="no_telp_perusahaan" >
                    </div>
                    <div class="form-group">
                        <label for="namabarang">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="namabarang">Website</label>
                        <input type="text" class="form-control" name="website">
                    </div>
                    <div class="form-group">
                        <label for="namabarang">Deskripsi Perusahaan</label>
                        <input type="text" class="form-control" name="deskripsi_perusahaan">
                    </div>

                    <br>
                    <button type="submit" class="btn btn-success">Save</button>
                  <a href="{{route('perusahaann.index')}}" class="btn btn-primary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
