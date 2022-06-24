@extends('layout.main')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="py-3 text-center">Data Pelamar</h1>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="card col-md-12 p-3">
                <form class="row" method="POST" id="form-pelamar" action="{{ route('konsultasi.store') }}">
                    @csrf
                    <div class="mb-3 col-md-6">
                        <label for="nama" class="form-label fw-bold ">Nama Lengkap</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="email" class="form-label fw-bold">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="nohp" class="form-label fw-bold">No HP</label>
                        <input type="text" class="form-control" name="phone" id="phone" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="department" class="form-label fw-bold">Departemen yang dilamar</label>
                        <select name="department" id="department" class="form-select" required>
                            <option selected>Silahkan pilih</option>
                            <option value="Engineer">Engineer</option>
                            <option value="HR">HR</option>
                            <option value="Finance">Finance</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Commercial">Commercial</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="experience" class="form-label fw-bold">Pengalaman Bekerja di Bidang yang sama</label>
                        <select name="work_experience" id="work_experience" class="form-select" required>
                            <option selected>Silahkan pilih</option>
                            <option value="1">≤ 1 Tahun</option>
                            <option value="2">2 Tahun</option>
                            <option value="3">3 Tahun</option>
                            <option value="4">4 Tahun</option>
                            <option value="5">≥ 5 Tahun</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="education" class="form-label fw-bold">Jenjang Pendidikan</label>
                        <select name="education" id="education" class="form-select" required>
                            <option selected>Silahkan pilih</option>
                            <option value="1">SMA/SMK</option>
                            <option value="2">D3</option>
                            <option value="3">S1</option>
                            <option value="4">S2</option>
                            <option value="5">S3</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="psikologi" class="form-label fw-bold">Hasil Tes Psikologi</label>
                        <select name="psikologi_test" id="psikologi_test" class="form-select" required>
                            <option selected>Silahkan pilih</option>
                            <option value="1">≤5</option>
                            <option value="2">6</option>
                            <option value="3">7</option>
                            <option value="4">8</option>
                            <option value="5">≥9</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="technical" class="form-label fw-bold">Hasil Tes Keahlian</label>
                        <select name="technical_test" id="technical_test" class="form-select" required>
                            <option selected>Silahkan pilih</option>
                            <option value="1">≤5</option>
                            <option value="2">6</option>
                            <option value="3">7</option>
                            <option value="4">8</option>
                            <option value="5">≥9</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="age" class="form-label fw-bold">Umur</label>
                        <select name="age" id="age" class="form-select" required>
                            <option selected>Silahkan pilih</option>
                            <option value="1">>=28</option>
                            <option value="2">23 - 27</option>
                            <option value="3">18 - 22</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="toefl" class="form-label fw-bold">TOEFL</label>
                        <select name="toefl" id="toefl" class="form-select" required>
                            <option selected>Silahkan pilih</option>
                            <option value="1"><=400</option>
                            <option value="2">400 - 500</option>
                            <option value="3">500 - 600</option>
                            <option value="4">>=600</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="gpa" class="form-label fw-bold">IPK</label>
                        <select name="gpa" id="gpa" class="form-select" required>
                            <option selected>Silahkan pilih</option>
                            <option value="1"><=2,75</option>
                            <option value="2">3</option>
                            <option value="3">3,25</option>
                            <option value="4">>=3,5</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-5"></div>
                    <div class="mb-3 col-md-1 p-4">
                        <input type="hidden" id="rekomendasi" name="rekomendasi" class="form-label">
                        <a class="btn btn-primary" onclick="generateRecommendation()">Submit</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // simpan data ke variabel
        function generateRecommendation() {
            const fullname = $('#fullname').val();
            const email = $('#email').val();
            const phone = $('#phone').val();
            const department = $('#department').val();
            const workExperience = $('#work_experience').val();
            const education = $('#education').val();
            const psikologiTest = $('#psikologi_test').val();
            const technicalTest = $('#technical_test').val();
            const age = $('#age').val();
            const toefl = $('#toefl').val();
            const gpa = $('#gpa').val();
            // bobot tiap kriteria
            const weight = {
                "k1": 5,
                "k2": 2,
                "k3": 5,
                "k4": 3,
                "k5": 2,
                "k6": 2,
                "k7": 2,
            };
            // perhitungan total bobot
            var totalWeight = weight.k1 * workExperience + weight.k2 * education + weight.k3 * psikologiTest + weight.k4 *
                technicalTest + weight.k5 * age + weight.k6 * toefl + weight.k7 * gpa;
            // mengirim ke modal
            $.ajax({
                url: `https://septianwahyu.pythonanywhere.com/run?k1=${workExperience}&k2=${education}&k3=${psikologiTest}&k4=${technicalTest}&k5=${age}&k6=${toefl}&k7=${gpa}&totalWeight=${totalWeight}`,
                success: function(resp) {
                    $('#rekomendasi').val(resp);
                    // menampilkan log
                    console.log(resp);

                    const accepted = resp == "Diterima";
                    Swal.fire({
                        title: accepted ? "Karyawan ini layak diterima" :
                            "Karyawan ini belum layak diterima",
                        text: 'Apakah anda ingin menyimpan data ?',
                        icon: resp == "Diterima" ? 'success' : 'error',
                        confirmButtonText: 'Simpan Data'
                    }).then(function() {
                        $('#form-pelamar').submit();
                    })
                }
            })
        }
    </script>
@endsection
