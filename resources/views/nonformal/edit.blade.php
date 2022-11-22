



@extends('nonformal.layout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 60rem">
            <div class="card-header" style="background-color: white;">
                <div class="row">

                    <div class="col-12 text-center"><br><br>
                        <h3>Tambah NonFormal</h3>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('nonformall.update',   $nonformall ->id_pelamar)}}" method="post" id="myform">
                    @csrf
                    @method('PUT')
                <div class="form-group">
                    <label for="id_pelamar">ID</label>
                    <input type="text" name="id_pelamar" id="" class="form-control" value="{{  $nonformall ->id_pelamar}}">
                </div>

                <div class="form-group">
                    <label for="nama_kursus">Nama Kursus</label>
                    <input type="text" name="nama_kursus" id="" class="form-control" value="{{  $nonformall ->nama_kursus}}">
                </div>
                <div class="form-group">
                    <label for="mulai_nonformal">Mulai</label>
                    <input type="text" name="mulai_nonformal" id="" class="form-control" value="{{  $nonformall ->mulai_nonformal}}">
                </div>
                <div class="form-group">
                    <label for="lulus_nonformal">Lulus</label>
                    <input type="text" name="lulus_nonformal" id="" class="form-control" value="{{  $nonformall ->lulus_nonformal}}">
                </div>
                <div class="form-group">
                    <label for="tempat_nonformal">Tempat</label>
                    <input type="text" name="tempat_nonformal" id="" class="form-control" value="{{  $nonformall ->tempat_nonformal}}">
                </div>
                <div class="form-group">
                    <label for="sertifikat_nonformal">Sertifikat</label>
                    <input type="text" name="sertifikat_nonformal" id="" class="form-control" value="{{  $nonformall ->sertifikat_nonformal}}">
                </div>








                <button class="btn btn-success" type="submit">Simpan</button>
                &nbsp;
                <a class="btn btn-info" href="{{ route('nonformall.index')}}">Kembali</a>
            </form>
            </div>




        </div>

    </div>

</div>

@endsection
