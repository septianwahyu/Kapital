@extends('layout.main')

@section('content')
<div class="container-fluid px-4">
    <h1 class="py-3 text-center">Database</h1>
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
                        <th>Departemen</th>
                        <th>Pengalaman</th>
                        <th>Pendidikan</th>
                        <th>Psikologi</th>
                        <th>Keahlian</th>
                        <th>Umur</th>
                        <th>TOEFL</th>
                        <th>IPK</th>
                        <th>Rekomendasi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Departemen</th>
                        <th>Pengalaman</th>
                        <th>Pendidikan</th>
                        <th>Psikologi</th>
                        <th>Keahlian</th>
                        <th>Umur</th>
                        <th>TOEFL</th>
                        <th>IPK</th>
                        <th>Rekomendasi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->departemen}}</td>
                            <td>{{$item->k1_pengalaman}}</td>
                            <td>{{$item->k2_pendidikan}}</td>
                            <td>{{$item->k3_psikologi}}</td>
                            <td>{{$item->k4_keahlian}}</td>
                            <td>{{$item->k5_umur}}</td>
                            <td>{{$item->k6_toefl}}</td>
                            <td>{{$item->k7_ipk}}</td>
                            <td>{{$item->rekomendasi}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection