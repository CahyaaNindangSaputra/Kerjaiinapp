



@extends('pelamar.layout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 60rem">
            <div class="card-header" style="background-color: white;">
                <div class="row">

                    <div class="col-12 text-center"><br><br>
                        <h3>Edit Pelamar</h3>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('pelamarr.update', $pelamarr->id_pelamar)}}" method="post" id="myform">
                    @csrf
                    @method('PUT')
                <div class="form-group">
                    <label for="id_pelamar">ID</label>
                    <input type="text" name="id_pelamar" id="" class="form-control" value="{{$pelamarr->id_pelamar}}">
                </div>
                <div class="form-group">
                    <label for="nama_depan">Nama Depan</label>
                    <input type="text" name="nama_depan" id="" class="form-control" value="{{$pelamarr->nama_depan}}">
                </div>
                <div class="form-group">
                    <label for="nama_belakang">Nama Belakang</label>
                    <input type="text" name="nama_belakang" id="" class="form-control" value="{{$pelamarr->nama_belakang}}">
                </div>

                <div class="form-group">
                    <label for="no_hp">No Telp</label>
                    <input type="text" name="no_hp" id="" class="form-control" value="{{$pelamarr->no_hp}}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="" class="form-control" value="{{$pelamarr->alamat}}">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <input type="text" name="gender" id="" class="form-control" value="{{$pelamarr->gender}}">
                </div>
                <div class="form-group">
                    <label for="berat_badan">Berat Badan</label>
                    <input type="text" name="berat_badan" id="" class="form-control" value="{{$pelamarr->berat_badan}}">
                </div>
                <div class="form-group">
                    <label for="tinggi_badan">Tinggi Badan</label>
                    <input type="text" name="tinggi_badan" id="" class="form-control" value="{{$pelamarr->tinggi_badan}}">
                </div>




                <button class="btn btn-success" type="submit">Simpan</button>
                &nbsp;
                <a class="btn btn-info" href="{{ route('pelamarr.index')}}">Kembali</a>
            </form>
            </div>



        </div>

    </div>

</div>

@endsection
