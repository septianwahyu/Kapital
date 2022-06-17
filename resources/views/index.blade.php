@extends('layout.main')

@section('content')
<div class="container-fluid px-4">
    <h1 class="py-3 text-center">Data Pelamar</h1>
    <div class="row">
        <div class="col-md-12">
            <form class="row">
                <div class="mb-3 col-md-6">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" required>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="email" class="form-label">Email Address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nohp" class="form-label">No HP</label>
                    <input type="text" class="form-control" id="nohp" required>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nohp" class="form-label">Departemen yang dilamar</label>
                    <select name="" id="" class="form-select" required>
                        <option>Silahkan pilih</option>
                        <option value="">Engineer</option>
                        <option value="">HR</option>
                        <option value="">Finance</option>
                        <option value="">Marketing</option>
                        <option value="">Commercial</option>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nohp" class="form-label">Pengalaman Bekerja di Bidang yang sama</label>
                    <select name="" id="" class="form-select" required>
                        <option>Silahkan pilih</option>
                        <option value="">≤ 1 Tahun</option>
                        <option value="">2 Tahun</option>
                        <option value="">3 Tahun</option>
                        <option value="">4 Tahun</option>
                        <option value="">≥ 5 Tahun</option>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nohp" class="form-label">Jenjang Pendidikan</label>
                    <select name="" id="" class="form-select" required>
                        <option>Silahkan pilih</option>
                        <option value="">SMA/SMK</option>
                        <option value="">D3</option>
                        <option value="">S1</option>
                        <option value="">S2</option>
                        <option value="">S3</option>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nohp" class="form-label">Hasil Tes Psikologi</label>
                    <select name="" id="" class="form-select" required>
                        <option>Silahkan pilih</option>
                        <option value="">≤5</option>
                        <option value="">6</option>
                        <option value="">7</option>
                        <option value="">8</option>
                        <option value="">≥9</option>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nohp" class="form-label">Hasil Tes Keahlian</label>
                    <select name="" id="" class="form-select" required>
                        <option>Silahkan pilih</option>
                        <option value="">≤5</option>
                        <option value="">6</option>
                        <option value="">7</option>
                        <option value="">8</option>
                        <option value="">≥9</option>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nohp" class="form-label">Umur</label>
                    <select name="" id="" class="form-select" required>
                        <option>Silahkan pilih</option>
                        <option value="">>=28</option>
                        <option value="">23 - 27</option>
                        <option value="">18 - 22</option>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nohp" class="form-label">TOEFL</label>
                    <select name="" id="" class="form-select" required>
                        <option>Silahkan pilih</option>
                        <option value=""><=400</option>
                        <option value="">400 - 500</option>
                        <option value="">500 - 600</option>
                        <option value="">>=600</option>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nohp" class="form-label">IPK</label>
                    <select name="" id="" class="form-select" required>
                        <option>Silahkan pilih</option>
                        <option value=""><=2,75</option>
                        <option value="">3</option>
                        <option value="">3,25</option>
                        <option value="">>=3,5</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection