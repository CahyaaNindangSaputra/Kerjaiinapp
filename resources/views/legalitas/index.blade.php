@extends('legalitas.layout')
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
                    <h3>Data Legalitas</h3>
                </div>
            </div>
        </div>

        <br><br>

        <table id="datakartu" class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Akta Pendiri Perusahaan</th>
                    <th>Tanggal Penegasan</th>
                    <th>Nama Notaris</th>
                    <th>SIUP</th>
                    <th>NPWP</th>
                    <th>Bentuk Penanaman Modal</th>
                    <th>TDP</th>
                    <th>NIB</th>

                    <th>ACTION</th>
                </tr>
            </thead>
            @foreach ($legalitass as $key=>$item)
            <tr>
                <td class="table-info">{{$item->id_perusahaan}}</td>
                <td><img src="{{ url('storage/fotos'.$item->akta_pendiri_perusahaan) }}" alt=""></td>
                <td>{{$item->tanggal_penegasan}}</td>
                <td>{{$item->nama_notaris}}</td>
                <td>{{$item->siup}}</td>
                <td>{{$item->npwp}}</td>
                <td>{{$item->bentuk_penanaman_modal}}</td>
                <td>{{$item->tdp}}</td>
                <td>{{$item->nib}}</td>


              <td class="">

                <form action="{{ route('perusahaann.destroy', $item->id)}}" method="POST">

                        {{-- <a class="btn btn-primary" href="{{ route('legalitass.show',$item->id)}}">Detail</a> --}}
                        <a class="btn btn-success bi bi-pencil-square" href="{{ route('legalitass.edit',$item->id)}}"></a>




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
