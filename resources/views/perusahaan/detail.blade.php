@extends('perusahaan.layout')


@section('content')

<br><br>

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 50rem;">
            <div class="card-header" style="background-color: white;">
            <div class="col-12 text-center"><br><br>
                <h3>Detail Perusahaan</h3>
            </div>
            <div class="card-body">
                @foreach ($perusahaann as $item)
                <table class="table">
                    <tr>
                        <td>Id Perusahaan</td>
                        <td>:</td>
                        <td>{{$item->id_perusahaan}}</td>
                    </tr>
                    <tr>
                        <td>Nama Perusahaan</td>
                        <td>:</td>
                        <td>{{$item->nama_perusahaan}}</td>
                    </tr>
                    <tr>
                        <td>Jenis Usaha</td>
                        <td>:</td>
                        <td>{{$item->jenis_usaha}}</td>
                    </tr>
                    <tr>
                        <td>NO HP</td>
                        <td>:</td>
                        <td>{{$item->no_telp_perusahaan}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{$item->email}}</td>
                    </tr>
                    <tr>
                        <td>Website</td>
                        <td>:</td>
                        <td>{{$item->website}}</td>
                    </tr>
                    <tr>
                        <td>Deskripsi Perusahaan</td>
                        <td>:</td>
                        <td>{{$item->deskripsi_perusahaan}}</td>
                    </tr>

                </table>
                @endforeach
                <br>
                <div class="d-flex justify-content-center">
                <a href="{{route('perusahaann.index')}}" class="btn btn-success">kembali</a>

            </div>
        </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center">
{{ $perusahaann->links()}}
<br>
</div>
<br><br>



@endsection

