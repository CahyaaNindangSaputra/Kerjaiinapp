@extends('pelamar.layout')
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
                    <h3>Data pelamar</h3>
                </div>
            </div>
        </div>

       <a class="btn btn-success" href="{{ route('pelamarr.create')}}">Tambah</a>
        <br><br>

        <table id="datakartu" class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Depan</th>
                    <th>Nama Belakang</th>
                    <th>NO HP</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Berat Badan</th>
                    <th>Tinggi Badan</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            @foreach ($pelamarr as $key=>$item)
            <tr>
                <td class="table-info">{{$item->id_pelamar}}</td>
                <td>{{$item->nama_depan}}</td>
                <td>{{$item->nama_belakang}}</td>
                <td>{{$item->no_hp}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->gender}}</td>
                <td>{{$item->berat_badan}}</td>
                <td>{{$item->tinggi_badan}}</td>

              <td class="">

                <form action="{{ route('pelamarr.destroy', $item->id_pelamar)}}" method="POST">

                        <a class="btn btn-primary" href="{{ route('pelamarr.show',$item->id_pelamar)}}">Detail</a>
                        <a class="btn btn-success bi bi-pencil-square" href="{{ route('pelamarr.edit',$item->id_pelamar)}}"></a>




                         @csrf
                         @method('DELETE')

                         <button class="btn btn-danger bi bi-trash" type="submit"></button>





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
