



@extends('cp.layout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 60rem">
            <div class="card-header" style="background-color: white;">
                <div class="row">

                    <div class="col-12 text-center"><br><br>
                        <h3>Tambah Perusahan</h3>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('cpperusahaann.update', $cpp->id_perusahaan)}}" method="post" id="myform">
                    @csrf
                    @method('PUT')
                <div class="form-group">
                    <label for="id_perusahaan">ID</label>
                    <input type="text" name="id_perusahaan" id="" class="form-control" value="{{$cpp->id_perusahaan}}">
                </div>

                <div class="form-group">
                    <label for="nama_cp">nama cp</label>
                    <input type="text" name="nama_cp" id="" class="form-control" value="{{$cpp->nama_cp}}">
                </div>
                <div class="form-group">
                    <label for="no_telp_cp">No Telepon</label>
                    <input type="text" name="no_telp_cp" id="" class="form-control" value="{{$cpp->no_telp_cp}}">
                </div>
                <div class="form-group">
                    <label for="email_cp">Email</label>
                    <input type="text" name="email_cp" id="" class="form-control" value="{{$cpp->email_cp}}">
                </div>
                <div class="form-group">
                    <label for="alamat_cp">Alamat</label>
                    <input type="text" name="alamat_cp" id="" class="form-control" value="{{$cpp->alamat_cp}}">
                </div>
                <div class="form-group">
                    <label for="jabatan_cp">Jabatan</label>
                    <input type="text" name="jabatan_cp" id="" class="form-control" value="{{$cpp->jabatan_cp}}">
                </div>





                <button class="btn btn-success" type="submit">Simpan</button>
                &nbsp;
                <a class="btn btn-info" href="{{ route('cpperusahaann.index')}}">Kembali</a>
            </form>
            </div>




        </div>

    </div>

</div>

@endsection
