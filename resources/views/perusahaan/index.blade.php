@extends('perusahaan.layout')
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
                    <h3>Data Perusahaan</h3>
                </div>
            </div>
        </div>

       <a class="btn btn-success" href="{{ route('perusahaann.create')}}">Tambah</a>
        <br><br>

        <table id="datakartu" class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Perusahaan</th>
                    <th>Jenis Usaha</th>
                    <th>NO HP</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Deskripsi Perusahaan</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            @foreach ($perusahaann as $key=>$item)
            <tr>
                <td class="table-info">{{$item->id_perusahaan}}</td>
                <td>{{$item->nama_perusahaan}}</td>
                <td>{{$item->jenis_usaha}}</td>
                <td>{{$item->no_telp_perusahaan}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->website}}</td>
                <td>{{$item->deskripsi_perusahaan}}</td>

              <td class="">

                <form action="{{ route('perusahaann.destroy', $item->id)}}" method="POST">

                        <a class="btn btn-primary" href="{{ route('perusahaann.show',$item->id)}}">Detail</a>
                        <a class="btn btn-success bi bi-pencil-square" href="{{ route('perusahaann.edit',$item->id)}}">Editph</a>




                         @csrf
                         @method('DELETE')

                         <button class="btn btn-danger bi bi-trash" type="submit">Delete</button>





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
