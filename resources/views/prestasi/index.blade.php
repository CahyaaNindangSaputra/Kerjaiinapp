@extends('prestasi.layout')
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
                    <h3>Data Prestasi</h3>
                </div>
            </div>
        </div>

       {{-- <a class="btn btn-success" href="{{ route('pendidikann.create')}}">Tambah</a> --}}
        <br><br>

        <table id="datakartu" class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Prestasi</th>
                    <th>Tingkat </th>
                    <th>Skor Tes</th>
                    <th>Organisasi</th>
                    <th>ACTION</th>

                </tr>
            </thead>
            @foreach ($prestasii as $key=>$item)
            <tr>
                <td class="table-info">{{$item->id_pelamar}}</td>
                <td>{{$item->nama_prestasi}}</td>
                <td>{{$item->tingkat}}</td>
                <td>{{$item->skor_tes}}</td>
                <td>{{$item->organisasi}}</td>


              <td class="">

                <form action="{{ route('prestasii.destroy', $item->id_pelamar)}}" method="POST">

                        {{-- <a class="btn btn-primary" href="{{ route('prestasii.s how',$item->id_pelamar)}}">Detail</a> --}}
                        <a class="btn btn-success bi bi-pencil-square" href="{{ route('prestasii.edit',$item->id_pelamar)}}"></a>




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
