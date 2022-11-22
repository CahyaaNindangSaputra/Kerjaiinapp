@extends('lokasi.layout')
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
                    <h3>Data Lokasi</h3>
                </div>
            </div>
        </div>

        <br><br>

        <table id="datakartu" class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th> Alamat Perusahaan</th>
                    <th>Provinsi</th>
                    <th>Kecamatan</th>
                    <th>Kode Pos</th>
                    <th>Nama Alamat</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            @foreach ($lokasii as $key=>$item)
            <tr>
                <td class="table-info">{{$item->id_perusahaan}}</td>
                <td>{{$item->alamat_perusahaan}}</td>
                <td>{{$item->provinsi}}</td>
                <td>{{$item->kecamatan}}</td>
                <td>{{$item->kode_pos}}</td>
                <td>{{$item->nama_alamat}}</td>


              <td class="">

                <form action="{{ route('perusahaann.destroy', $item->id_perusahaan)}}" method="POST">

                        {{-- <a class="btn btn-primary" href="{{ route('lokasiperusahaann.show',$item->id_perusahaan)}}">Detail</a> --}}
                        <a class="btn btn-success bi bi-pencil-square" href="{{ route('lokasiperusahaann.edit',$item->id_perusahaan)}}"></a>




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
