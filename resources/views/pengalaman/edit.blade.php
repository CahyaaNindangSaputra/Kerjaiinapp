



@extends('pengalaman.layout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 60rem">
            <div class="card-header" style="background-color: white;">
                <div class="row">

                    <div class="col-12 text-center"><br><br>
                        <h3>Tambah Pengalaman</h3>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('pengalamann.update',   $nonformall ->id_pelamar)}}" method="post" id="myform">
                    @csrf
                    @method('PUT')
                <div class="form-group">
                    <label for="id_pelamar">ID</label>
                    <input type="text" name="id_pelamar" id="" class="form-control" value="{{  $nonformall ->id_pelamar}}">
                </div>

                <div class="form-group">
                    <label for="pengalaman">Pengalaman</label>
                    <input type="text" name="pengalaman" id="" class="form-control" value="{{  $nonformall ->pengalaman}}">
                </div>
                <div class="form-group">
                    <label for="jenis_pekerjaan">Jenis Pekerjaan</label>
                    <input type="text" name="jenis_pekerjaan" id="" class="form-control" value="{{  $nonformall ->jenis_pekerjaan}}">
                </div>
                <div class="form-group">
                    <label for="nama_perusahaan">Nama Perusahaan</label>
                    <input type="text" name="nama_perusahaan" id="" class="form-control" value="{{  $nonformall ->nama_perusahaan}}">
                </div>
                <div class="form-group">
                    <label for="lokasi_pengalaman">Lokasi</label>
                    <input type="text" name="lokasi_pengalaman" id="" class="form-control" value="{{  $nonformall ->lokasi_pengalaman}}">
                </div>
                <div class="form-group">
                    <label for="ttg_mulai_pengalaman">Mulai Pengalaman</label>
                    <input type="text" name="ttg_mulai_pengalaman" id="" class="form-control" value="{{  $nonformall ->ttg_mulai_pengalaman}}">
                </div>
                <div class="form-group">
                    <label for="ttg_mulai_pengalaman">Akhir Pengalaman</label>
                    <input type="text" name="ttg_mulai_pengalaman" id="" class="form-control" value="{{  $nonformall ->ttg_mulai_pengalaman}}">
                </div>
                <div class="form-group">
                    <label for="penghargaan">Penghargaan</label>
                    <input type="text" name="penghargaan" id="" class="form-control" value="{{  $nonformall ->penghargaan}}">
                </div>








                <button class="btn btn-success" type="submit">Simpan</button>
                &nbsp;
                <a class="btn btn-info" href="{{ route('pengalamann.index')}}">Kembali</a>
            </form>
            </div>




        </div>

    </div>

</div>

@endsection
