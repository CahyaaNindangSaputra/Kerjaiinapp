@extends('prestasi.layout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 60rem">
            <div class="card-header" style="background-color: white;">
                <div class="row">

                    <div class="col-12 text-center"><br><br>
                        <h3>Tambah Prestasi</h3>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('prestasii.update',   $prestasii ->id_pelamar)}}" method="post" id="myform">
                    @csrf
                    @method('PUT')
                <div class="form-group">
                    <label for="id_pelamar">ID</label>
                    <input type="text" name="id_pelamar" id="" class="form-control" value="{{  $prestasii ->id_pelamar}}">
                </div>

                <div class="form-group">
                    <label for="nama_prestasi">Nama Prestasi</label>
                    <input type="text" name="nama_prestasi" id="" class="form-control" value="{{  $prestasii ->nama_prestasi}}">
                </div>
                <div class="form-group">
                    <label for="tingkat">Tingkat</label>
                    <input type="text" name="tingkat" id="" class="form-control" value="{{  $prestasii ->tingkat}}">
                </div>
                <div class="form-group">
                    <label for="skor_tes">Skor Tes</label>
                    <input type="text" name="skor_tes" id="" class="form-control" value="{{  $prestasii ->skor_tes}}">
                </div>
                <div class="form-group">
                    <label for="organisasi">Organisasi</label>
                    <input type="text" name="organisasi" id="" class="form-control" value="{{  $prestasii ->organisasi}}">
                </div>









                <button class="btn btn-success" type="submit">Simpan</button>
                &nbsp;
                <a class="btn btn-info" href="{{ route('prestasii.index')}}">Kembali</a>
            </form>
            </div>




        </div>

    </div>

</div>

@endsection
