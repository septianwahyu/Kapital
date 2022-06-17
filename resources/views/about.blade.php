@extends('layout.main')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="py-3 text-center">Pengembang Aplikasi</h1>
        <div class="container py-5">
            <div class="wrapper-card">
                <div class="card p-3">
                    <div class="d-flex justify-content-around">
                        <div class="profile-section">
                            <h4>Dosen Pengampu</h4>
                            <div class="img-wrapper">
                                <img src="{{asset('image/dosen.png')}}" alt="Yumarlin MZ, S.KOM., M.PD., M.KOM." class="img-fluid">
                            </div>
                            <h5>Yumarlin MZ{{-- , S.Kom., M.Pd., M.Kom.--}}</h5>
                            <h5>S.Kom., M.Pd., M.Kom.</h5>
                            {{-- <h6>NIP Dosen</h6> --}}
                        </div>
                        <div class="profile-section">
                            <h4>Mahasiswa</h4>
                            <div class="img-wrapper">
                                <img src="{{asset('image/ridwan.jpg')}}" alt="Ridwan Maulana Yusuf" class="img-fluid">
                            </div>
                            <h5>Ridwan Maulana Yusuf</h5>
                            <h6>19330002</h6>
                        </div>
                        <div class="profile-section">
                            <h4>Mahasiswa</h4>
                            <div class="img-wrapper">
                                <img src="{{asset('image/septian.jpg')}}" alt="Septian Wahyu Pamungkas" class="img-fluid">
                            </div>
                            <h5>Septian Wahyu Pamungkas</h5>
                            <h6>19330019</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <style media="screen">
        .img-wrapper{
            max-width: 250px;
            max-height: 250px;
        }
        .profile-section{
            /* display: flex; */
            /* justify-content: center; */
            text-align: center;
        }
    </style>
@endsection