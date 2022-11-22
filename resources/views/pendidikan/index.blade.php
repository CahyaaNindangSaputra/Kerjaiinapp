@extends('pendidikan.layout')
@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<body>


    <div class="container">
        <div class="card-body d-flex justify-content-center">
            <div class="card shadow" style="width: 24rem;">
                <div class="card-header text-center">
                    <h3>Data pendidikan</h3>
                </div>
            </div>
        </div>

       {{-- <a class="btn btn-success" href="{{ route('pendidikann.create')}}">Tambah</a> --}}
        <br><br>

        <table id="datakartu" class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tingkat Pendidikan</th>
                    <th>Nama Sekolah </th>
                    <th>Lokasi</th>
                    <th>Alamat</th>
                    <th>gelar</th>
                    <th>Bidang Studi</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Lulus</th>
                    <th>IPK</th>
                    <th>No Ijazah</th>
                    <th>Tanggal Ijazah</th>
                    <th>Nama Penjabat TTD</th>
                    <th>Ijazah</th>
                    <th>Penjabat Pengasah</th>
                    <th>Sertifikat</th>
                    <th>ACTION</th>

                </tr>
            </thead>
            @foreach ($pendidikann as $key=>$item)
            <tr>
                <td class="table-info">{{$item->id_pelamar}}</td>
                <td>{{$item->tingkat_pendidikan}}</td>
                <td>{{$item->nama_sekolah}}</td>
                <td>{{$item->lokasi_pendidikan}}</td>
                <td>{{$item->alamat_pendidikan}}</td>
                <td>{{$item->gelar}}</td>
                <td>{{$item->bidang_studi}}</td>
                <td>{{$item->tanggal_mulai}}</td>
                <td>{{$item->tanggal_lulus}}</td>
                <td>{{$item->ipk}}</td>
                <td>{{$item->no_ijazah}}</td>
                <td>{{$item->tanggal_ijazah}}</td>
                <td>{{$item->nama_pejabat_ttd}}</td>
                <td>{{$item->ijazah}}</td>
                <td>{{$item->penjabat_pengasah}}</td>
                <td>{{$item->sertifikat}}</td>

              <td class="">

                <form action="{{ route('pendidikann.destroy', $item->id_pelamar)}}" method="POST">

                        {{-- <a class="btn btn-primary" href="{{ route('pendidikann.show',$item->id_pelamar)}}">Detail</a> --}}
                        <a class="btn btn-success bi bi-pencil-square" href="{{ route('pendidikann.edit',$item->id_pelamar)}}"></a>




                         @csrf
                         @method('DELETE')

                         {{-- <button class="btn btn-danger bi bi-trash" type="submit"></button> --}}





                     </form>
                 </td>
            </tr>
            @endforeach
        </table>


    </div>
</body>
<script>
    $(document).ready(function () {
    $('#datakartu').DataTable();
});
</script>
</html>
<br><br>
@endsection
