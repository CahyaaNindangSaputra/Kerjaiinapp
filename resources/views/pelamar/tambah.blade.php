@extends('pelamar.layout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="d-flex card" style="width: 70rem;">
            <div class="card-header">

                    <div class="col-15 text-center"><br><br>
                        <h3>Tambah Data Pelamar</h3>
                    </div>
            </div>
            <div class="card-body">
                <form action="{{route('pelamarr.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="namabarang">ID </label>
                        <input type="text" class="form-control" readonly="" value="{{ 'NBM-'  .$kd }}" name="id_pelamar">
                    </div>
                    <div class="form-group">
                        <label for="namabarang">Nama Depan</label>
                        <input type="text" class="form-control" name="nama_depan">
                    </div>
                    <div class="form-group">
                        <label for="namabarang">Nama Belakang</label>
                        <input type="text" class="form-control" name="nama_belakang">
                    </div>
                    <div class="form-group">
                        <label for="namabarang">No Hp</label>
                        <input type="text" class="form-control" name="no_hp" >
                    </div>
                    <div class="form-group">
                        <label for="namabarang">Alamat</label>
                        <input type="text" class="form-control" name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="namabarang">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="namabarang">Gender</label>
                        <input type="text" class="form-control" name="gender">
                    </div>
                    <div class="form-group">
                        <label for="namabarang">Berat Badan</label>
                        <input type="text" class="form-control" name="berat_badan">
                    </div>
                    <div class="form-group">
                        <label for="namabarang">Tinggi Badan</label>
                        <input type="text" class="form-control" name="tinggi_badan">
                    </div>


                    <br>
                    <button type="submit" class="btn btn-success">Save</button>
                  <a href="{{route('pelamarr.index')}}" class="btn btn-primary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
