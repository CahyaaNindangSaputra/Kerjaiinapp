@extends('pengalaman.layout')
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
                    <h3>Data Pengalaman</h3>
                </div>
            </div>
        </div>

       {{-- <a class="btn btn-success" href="{{ route('pendidikann.create')}}">Tambah</a> --}}
        <br><br>

        <table id="datakartu" class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pengalaman</th>
                    <th>Jenis Pekerjaan</th>
                    <th>Nama Perusahaan</th>
                    <th>Lokasi Pengalaman</th>
                    <th>ttg Mulai Pengalaman</th>
                    <th>ttg Akhir Pengalaman</th>
                    <th>Penghargaan</th>
                    <th>ACTION</th>

                </tr>
            </thead>
            @foreach ($pengalamann as $key=>$item)
            <tr>
                <td class="table-info">{{$item->id_pelamar}}</td>
                <td>{{$item->pengalaman}}</td>
                <td>{{$item->jenis_pekerjaan}}</td>
                <td>{{$item->nama_perusahaan}}</td>
                <td>{{$item->lokasi_pengalaman}}</td>
                <td>{{$item->ttg_mulai_pengalaman}}</td>
                <td>{{$item->ttg_akhir_pengalaman}}</td>
                <td>{{$item->penghargaan}}</td>


              <td class="">

                <form action="{{ route('pengalamann.destroy', $item->id_pelamar)}}" method="POST">

                        {{-- <a class="btn btn-primary" href="{{ route('pengalamann.s how',$item->id_pelamar)}}">Detail</a> --}}
                        <a class="btn btn-success bi bi-pencil-square" href="{{ route('pengalamann.edit',$item->id_pelamar)}}"></a>




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
