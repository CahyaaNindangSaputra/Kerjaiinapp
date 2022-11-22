



@extends('pendidikan.layout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 60rem">
            <div class="card-header" style="background-color: white;">
                <div class="row">

                    <div class="col-12 text-center"><br><br>
                        <h3>Tambah Pendidikan</h3>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('pendidikann.update',   $pendidikann ->id_pelamar)}}" method="post" id="myform">
                    @csrf
                    @method('PUT')
                <div class="form-group">
                    <label for="id_pelamar">ID</label>
                    <input type="text" name="id_pelamar" id="" class="form-control" value="{{  $pendidikann ->id_pelamar}}">
                </div>

                <div class="form-group">
                    <label for="tingkat_pendidikan">Tingkat Pendidikan</label>
                    <input type="text" name="tingkat_pendidikan" id="" class="form-control" value="{{  $pendidikann ->tingkat_pendidikan}}">
                </div>
                <div class="form-group">
                    <label for="lokasi_pendidikan">Lokasi</label>
                    <input type="text" name="lokasi_pendidikan" id="" class="form-control" value="{{  $pendidikann ->lokasi_pendidikan}}">
                </div>
                <div class="form-group">
                    <label for="alamat_pendidikan">Alamat Pendidikan</label>
                    <input type="text" name="alamat_pendidikan" id="" class="form-control" value="{{  $pendidikann ->alamat_pendidikan}}">
                </div>
                <div class="form-group">
                    <label for="gelar">Gelar</label>
                    <input type="text" name="gelar" id="" class="form-control" value="{{  $pendidikann ->gelar}}">
                </div>
                <div class="form-group">
                    <label for="bidang_studi">Bidang Studi</label>
                    <input type="text" name="bidang_studi" id="" class="form-control" value="{{  $pendidikann ->bidang_studi}}">
                </div>
                <div class="form-group">
                    <label for="tanggal_mulai">Tanggal Mulai</label>
                    <input type="text" name="tanggal_mulai" id="" class="form-control" value="{{  $pendidikann ->tanggal_mulai}}">
                </div>
                <div class="form-group">
                    <label for="tanggal_lulus">Tanggal lulus</label>
                    <input type="text" name="tanggal_lulus" id="" class="form-control" value="{{  $pendidikann ->tanggal_lulus}}">
                </div>
                <div class="form-group">
                    <label for="ipk">IPK</label>
                    <input type="text" name="ipk" id="" class="form-control" value="{{  $pendidikann ->ipk}}">
                </div>
                <div class="form-group">
                    <label for="no_ijazah">NO Ijazah</label>
                    <input type="text" name="no_ijazah" id="" class="form-control" value="{{  $pendidikann ->no_ijazah}}">
                </div>
                <div class="form-group">
                    <label for="tanggal_ijazah">Tanggal Ijazah</label>
                    <input type="text" name="tanggal_ijazah" id="" class="form-control" value="{{  $pendidikann ->tanggal_ijazah}}">
                </div>
                <div class="form-group">
                    <label for="nama_pejabat_ttd">Nama Pejabat TTD</label>
                    <input type="text" name="nama_pejabat_ttd" id="" class="form-control" value="{{  $pendidikann ->nama_pejabat_ttd}}">
                </div>
                <div class="form-group">
                    <label for="ijazah">ijazah</label>
                    <input type="text" name="ijazah" id="" class="form-control" value="{{  $pendidikann ->ijazah}}">
                </div>

                <div class="form-group">
                    <label for="penjabat_pengasah">Penjabat Pengasah</label>
                    <input type="text" name="penjabat_pengasah" id="" class="form-control" value="{{  $pendidikann ->penjabat_pengasah}}">
                </div>
                <div class="form-group">
                    <label for="sertifikat">Sertifikat</label>
                    <input type="text" name="sertifikat" id="" class="form-control" value="{{  $pendidikann ->sertifikat}}">
                </div>








                <button class="btn btn-success" type="submit">Simpan</button>
                &nbsp;
                <a class="btn btn-info" href="{{ route('pendidikann.index')}}">Kembali</a>
            </form>
            </div>




        </div>

    </div>

</div>

@endsection
