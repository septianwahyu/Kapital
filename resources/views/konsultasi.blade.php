@extends('layout.main')

@section('content')
<div class="container-fluid px-4">
    <h1 class="py-3 text-center">Data Pelamar</h1>
    <div class="row">
        <div class="col-md-12">
            <form class="row" method="POST">
                @csrf
                <div class="mb-3 col-md-6">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="fullname" name="fullname" required>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="email" class="form-label">Email Address</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nohp" class="form-label">No HP</label>
                    <input type="text" class="form-control" name="phone" id="phone" required>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nohp" class="form-label">Departemen yang dilamar</label>
                    <select name="department" id="department" class="form-select" required>
                        <option>Silahkan pilih</option>
                        <option value="Engineer">Engineer</option>
                        <option value="HR">HR</option>
                        <option value="Finance">Finance</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Commercial">Commercial</option>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nohp" class="form-label">Pengalaman Bekerja di Bidang yang sama</label>
                    <select name="work-experience" id="work-experience" class="form-select" required>
                        <option>Silahkan pilih</option>
                        <option value="1">≤ 1 Tahun</option>
                        <option value="2">2 Tahun</option>
                        <option value="3">3 Tahun</option>
                        <option value="4">4 Tahun</option>
                        <option value="5">≥ 5 Tahun</option>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nohp" class="form-label">Jenjang Pendidikan</label>
                    <select name="education" id="education" class="form-select" required>
                        <option>Silahkan pilih</option>
                        <option value="1">SMA/SMK</option>
                        <option value="2">D3</option>
                        <option value="3">S1</option>
                        <option value="4">S2</option>
                        <option value="5">S3</option>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nohp" class="form-label">Hasil Tes Psikologi</label>
                    <select name="psikologi-test" id="psikologi-test" class="form-select" required>
                        <option>Silahkan pilih</option>
                        <option value="1">≤5</option>
                        <option value="2">6</option>
                        <option value="3">7</option>
                        <option value="4">8</option>
                        <option value="5">≥9</option>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nohp" class="form-label">Hasil Tes Keahlian</label>
                    <select name="technical-test" id="technical-test" class="form-select" required>
                        <option>Silahkan pilih</option>
                        <option value="1">≤5</option>
                        <option value="2">6</option>
                        <option value="3">7</option>
                        <option value="4">8</option>
                        <option value="5">≥9</option>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nohp" class="form-label">Umur</label>
                    <select name="age" id="age" class="form-select" required>
                        <option>Silahkan pilih</option>
                        <option value="1">>=28</option>
                        <option value="2">23 - 27</option>
                        <option value="3">18 - 22</option>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nohp" class="form-label">TOEFL</label>
                    <select name="toefl" id="toefl" class="form-select" required>
                        <option>Silahkan pilih</option>
                        <option value="1"><=400</option>
                        <option value="2">400 - 500</option>
                        <option value="3">500 - 600</option>
                        <option value="4">>=600</option>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nohp" class="form-label">IPK</label>
                    <select name="gpa" id="gpa" class="form-select" required>
                        <option>Silahkan pilih</option>
                        <option value="1"><=2,75</option>
                        <option value="2">3</option>
                        <option value="3">3,25</option>
                        <option value="4">>=3,5</option>
                    </select>
                </div>
                {{-- <button type="submit" class="btn btn-primary" onclick="generateRecommendation()">Submit</button> --}}
                <a class="btn btn-primary" onclick="generateRecommendation()">Submit</a>
                {{-- Kirim ke model --}}
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    function generateRecommendation() {
       const fullname = $('#fullname').val();
       const email = $('#email').val();
       const phone = $('#phone').val();
       const department = $('#department').val();
       const workExperience = $('#work-experience').val();
       const education = $('#education').val();
       const psikologiTest = $('#psikologi-test').val();
       const technicalTest = $('#technical-test').val();
       const age = $('#age').val();
       const toefl = $('#toefl').val();
       const gpa = $('#gpa').val();

       $.ajax({
        url: "https://rifkyariy.pythonanywhere.com/run?k1=1&k2=1&k3=1&k4=1&k5=1&k6=1&k7=1&totalWeight=10",
        done: function(resp) {
            console.log(resp);
        }
       })
    }
</script>
@endsection