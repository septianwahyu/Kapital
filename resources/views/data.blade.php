@extends('layout.main')

@section('content')
<div class="container-fluid px-4">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Pelamar
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Pengalaman</th>
                        <th>Pendidikan</th>
                        <th>Psikologi</th>
                        <th>Keahlian</th>
                        <th>Umur</th>
                        <th>TOEFL</th>
                        <th>IPK</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Pengalaman</th>
                        <th>Pendidikan</th>
                        <th>Psikologi</th>
                        <th>Keahlian</th>
                        <th>Umur</th>
                        <th>TOEFL</th>
                        <th>IPK</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->k1_pengalaman}}</td>
                            <td>{{$item->k2_pendidikan}}</td>
                            <td>{{$item->k3_psikologi}}</td>
                            <td>{{$item->k4_keahlian}}</td>
                            <td>{{$item->k5_umur}}</td>
                            <td>{{$item->k6_toefl}}</td>
                            <td>{{$item->k7_ipk}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        </div>
    </div>
</div>
@endsection