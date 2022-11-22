@extends('pelamar.layout')


@section('content')

<br><br>

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 50rem;">
            <div class="card-header" style="background-color: white;">
            <div class="col-12 text-center"><br><br>
                <h3>Detail Pelamar</h3>
            </div>
            <div class="card-body">
                @foreach ($pelamarr as $item)
                <table class="table">
                    <tr>
                        <td>Id</td>
                        <td>:</td>
                        <td>{{$item->id_pelamar}}</td>
                    </tr>
                    <tr>
                        <td>Nama Depan</td>
                        <td>:</td>
                        <td>{{$item->nama_depan}}</td>
                    </tr>
                    <tr>
                        <td>Nama Belakang</td>
                        <td>:</td>
                        <td>{{$item->nama_belakang}}</td>
                    </tr>
                    <tr>
                        <td>NO HP</td>
                        <td>:</td>
                        <td>{{$item->no_hp}}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{$item->alamat}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{$item->email}}</td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>:</td>
                        <td>{{$item->gender}}</td>
                    </tr>
                    <tr>
                        <td>Berat Badan</td>
                        <td>:</td>
                        <td>{{$item->berat_badan}}</td>
                    </tr>
                    <tr>
                        <td>Tinggi Badan</td>
                        <td>:</td>
                        <td>{{$item->tinggi_badan}}</td>
                    </tr>

                </table>
                @endforeach
                <br>
                <div class="d-flex justify-content-center">
                <a href="{{route('pelamarr.index')}}" class="btn btn-success">kembali</a>

            </div>
        </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center">
{{ $pelamarr->links()}}
<br>
</div>
<br><br>



@endsection

