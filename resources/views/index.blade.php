@extends('layout.main')

@section('css')
    <style>
        .card-lead {
            height: 80px;
            width: 80px;
            margin: 8px;
            border-radius: 3px;
            text-align: center;
            line-height: 80px;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4 py-3 text-center">Dashboard</h1>
        <div class="row">
            <div class="col-xl-3 col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card-lead bg-primary ">
                                    <i class="fa-solid fa-users text-center text-white"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="px-2 py-3">
                                    <h4 class="title">{{ $data['total_pelamar'] }}</h4>
                                    <span class="fw-bold">
                                        Total Pelamar
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card-lead bg-warning ">
                                    <i class="fa-solid fa-building text-center text-white"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="px-2 py-3">
                                    <h4 class="title">{{ $data['total_department'] }}</h4>
                                    <span class="fw-bold">
                                        Total Departemen
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card-lead bg-success ">
                                    <i class="fa-solid fa-user-check text-center text-white"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="px-2 py-3">
                                    <h4 class="title">{{ $data['total_pelamar_accepted'] }}</h4>
                                    <span class="fw-bold">
                                        Pelamar Diterima
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card-lead bg-danger ">
                                    <i class="fa-solid fa-user-times text-center text-white"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="px-2 py-3">
                                    <h4 class="title">{{ $data['total_pelamar_rejected'] }}</h4>
                                    <span class="fw-bold">
                                        Pelamar Tidak Diterima
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Data Pelamar berdasarkan Departemen
                    </div>
                    <div class="card-body"><canvas id="month-chart" width="100%" height="50"></canvas></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Data Pelamar berdasarkan Departemen
                    </div>
                    <div class="card-body"><canvas id="department-chart" width="100%" height="50"></canvas></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // Bar Chart Example
        var ctx = document.getElementById("department-chart");
        var ctxmonth = document.getElementById("month-chart");

        $(document).ready(function() {
            // Get chart data departemen
            $.ajax({
                url: `{{ route('api.chart.department') }}`,
                success: function(res) {

                    // Mapping label data
                    label = [];
                    dataAccepted = [];
                    dataRejected = [];

                    for (const key in res) {
                        if (res.hasOwnProperty.call(res, key)) {
                            const element = res[key];

                            // adding label
                            label.push(key);

                            // set default value to zero if empty
                            if (res[key]['Diterima'] == undefined) {
                                res[key]['Diterima'] = 0;
                            }

                            // set default value to zero if empty
                            if (res[key]['Tidak Diterima'] == undefined) {
                                res[key]['Tidak Diterima'] = 0;
                            }

                            // adding accepted and rejected data
                            dataAccepted.push(res[key]['Diterima'])
                            dataRejected.push(res[key]['Tidak Diterima'])

                        }
                    }

                    var departmentLinechart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: label,
                            datasets: [{
                                    label: "Diterima",
                                    backgroundColor: "green",
                                    data: dataAccepted,
                                },
                                {
                                    label: "Tidak Diterima",
                                    backgroundColor: "red",
                                    data: dataRejected,
                                }
                            ],
                        },
                        options: {
                            scales: {
                                xAxes: [{
                                    time: {
                                        unit: 'month'
                                    },
                                    gridLines: {
                                        display: false
                                    },
                                    ticks: {
                                        maxTicksLimit: 6
                                    }
                                }],
                                yAxes: [{
                                    ticks: {
                                        min: 0,
                                        max: 100,
                                        maxTicksLimit: 5
                                    },
                                    gridLines: {
                                        display: true
                                    }
                                }],
                            },
                            legend: {
                                display: true
                            }
                        }
                    });
                }
            })
            $.ajax({
                url: `{{ route('api.chart.month') }}`,
                success: function(res) {
                    // Mapping label data
                    currentYear = new Date().getFullYear();
                    label = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'July', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                    dataAccepted = [];
                    dataRejected = [];

                    for (const key in res) {
                        if (res.hasOwnProperty.call(res, key)) {
                            let element = res[key];

                            if (key == currentYear) {
                                for (let index = 0; index <= 11; index++) {
                                    let obj = {
                                        [index + 1]: {
                                            "Tidak Diterima": element[index + 1] && element[index + 1]["Tidak Diterima"] ? element[index + 1]["Tidak Diterima"] : 0,
                                            "Diterima": element[index + 1] && element[index + 1]["Diterima"] ? element[index + 1]["Diterima"] : 0
                                        } 
                                    } 

                                    element = Object.assign({}, element, obj)

                                    // adding accepted and rejected data
                                    dataAccepted.push(element[index + 1]['Diterima'])
                                    dataRejected.push(element[index + 1]['Tidak Diterima'])
                                }
                            }
                        }
                    }

                    console.log(dataAccepted);

                    var departmentLinechart = new Chart(ctxmonth, {
                        type: 'line',
                        data: {
                            labels: label,
                            datasets: [{
                                    label: "Diterima",
                                    backgroundColor: "rgba(10,5,100,0.5)",
                                    data: dataAccepted,
                                },
                                {
                                    label: "Tidak Diterima",
                                    backgroundColor: "rgba(100,50,200,0.5)",
                                    data: dataRejected,
                                }
                            ],
                        },
                        options: {
                            scales: {
                                xAxes: [{
                                    time: {
                                        unit: 'month'
                                    },
                                    gridLines: {
                                        display: false
                                    },
                                    ticks: {
                                        maxTicksLimit: 6
                                    }
                                }],
                                yAxes: [{
                                    ticks: {
                                        min: 0,
                                        max: 200,
                                        maxTicksLimit: 5
                                    },
                                    gridLines: {
                                        display: true
                                    }
                                }],
                            },
                            legend: {
                                display: true
                            }
                        }
                    });
                }
            })
        })
    </script>
@endsection
