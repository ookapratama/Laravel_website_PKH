@extends('layouts.app', ['title' => 'Layout Default'])

@section('content')
    @push('styles')
    @endpush

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Selamat Datang</h1>

            </div>

            <section class="section">

                <div class="section-body">
                    <h3>Data statistik</h3>
                    <h2 class="section-title">Statistik penduduk</h2>

                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-primary">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Kepala keluarga</h4>
                                    </div>
                                    <div class="card-body">
                                        {{ $getKrt }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-danger">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Penduduk</h4>
                                    </div>
                                    <div class="card-body">
                                        {{ $penduduk }}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <h2 class="section-title">Statistik </h2>
                    <div class="row">
                        <div class="col-md-3">
                            <h6 class="section-lead">Jenis Kelamin</h6>
                            <canvas id="genderChart"></canvas>

                        </div>
                        <div class="col-md-4">
                            <h6 class="section-lead">Status pendidikan</h6>

                            <canvas  id="sekolahChart"></canvas>
                        </div>
                        <div class="col-md-4">
                            <h6 class="section-lead">Pekerjaan</h6>

                            <canvas  id="pekerjaanChart"></canvas>
                        </div>
                        <div class="col-md-4">
                            <h6 class="section-lead">Riwayat penyakit</h6>
    
                            <canvas  id="penyakitChart"></canvas>
                            
                        </div>
                        <div class="col-md-5">
                            <h6 class="section-lead">Jenis Cacat</h6>
    
                            <canvas  id="jenisCacatChart"></canvas>

                        </div>
                    </div>

                    <h2 class="section-title">Statistik status PKH</h2>

                    <div class="card">
                        <div class="card-body">
                            <canvas id="pkhBarChart"></canvas>
                        </div>
                    </div>
                </div>
            </section>

            {{-- <div class="section-body">
                <h2 class="section-title">This is Example Page</h2>
                <p class="section-lead">This page is just an example for you to create your own page.</p>
                <div class="card">
                    <div class="card-header">
                        <h4>Example Card</h4>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="card-footer bg-whitesmoke">
                        This is card footer
                    </div>
                </div>
            </div> --}}
        </section>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            const pkhData = {
                labels: @json($chartData['labels']),
                datasets: [{
                    label: 'Jumlah Penerima PKH',
                    data: @json($chartData['data']),
                    backgroundColor: ['#4CAF50', '#FF5733'],
                }]
            };

            const config = {
                type: 'bar',
                data: pkhData,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };

            const pkhBarChart = new Chart(
                document.getElementById('pkhBarChart'),
                config
            );

            var pekerjaanCtx = document.getElementById('pekerjaanChart').getContext('2d');
            var pekerjaanChart = new Chart(pekerjaanCtx, {
                type: 'pie',
                data: {
                    labels: {!! json_encode(array_keys($pekerjaanCounts)) !!},
                    datasets: [{
                        data: {!! json_encode(array_values($pekerjaanCounts)) !!},
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#66BB6A', '#FFA726', '#42A5F5',
                            '#AB47BC', '#26A69A'
                        ]
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            position: 'bottom', // Positions the labels below the chart
                            labels: {
                                boxWidth: 30, // Size of the color box next to the label
                            }
                        }
                    },

                }
            });

            var sekolahCtx = document.getElementById('sekolahChart').getContext('2d');
            var sekolahChart = new Chart(sekolahCtx, {
                type: 'pie',
                data: {
                    labels: ['Tidak/belum pernah sekolah' ,'Masih sekolah', 'Tidak bersekolah lagi'],
                    datasets: [{
                        data: {!! json_encode(array_values($sekolahCounts['data'])) !!},
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#66BB6A', '#FFA726', '#42A5F5',
                            '#AB47BC', '#26A69A'
                        ]
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            position: 'bottom', // Positions the labels below the chart
                            labels: {
                                boxWidth: 30, // Size of the color box next to the label
                            }
                        }
                    },

                }
            });

            var penyakitCtx = document.getElementById('penyakitChart').getContext('2d');
            var penyakitChart = new Chart(penyakitCtx, {
                type: 'pie',
                data: {
                    labels: {!! json_encode(array_keys($penyakitCounts)) !!},
                    datasets: [{
                        data: {!! json_encode(array_values($penyakitCounts)) !!},
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#66BB6A', '#FFA726', '#42A5F5',
                            '#AB47BC', '#26A69A'
                        ]
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            position: 'bottom', // Positions the labels below the chart
                            labels: {
                                boxWidth: 30, // Size of the color box next to the label
                            }
                        }
                    },

                }
            });

            var jenisCacatCtx = document.getElementById('jenisCacatChart').getContext('2d');
            var jenisCacatChart = new Chart(jenisCacatCtx, {
                type: 'pie',
                data: {
                    labels: {!! json_encode(array_keys($jenisCacatCounts)) !!},
                    datasets: [{
                        data: {!! json_encode(array_values($jenisCacatCounts)) !!},
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#66BB6A', '#FFA726', '#42A5F5',
                            '#AB47BC', '#26A69A'
                        ]
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            position: 'bottom', // Positions the labels below the chart
                            labels: {
                                boxWidth: 30, // Size of the color box next to the label
                            }
                        }
                    },

                }
            });

            var genderCtx = document.getElementById('genderChart').getContext('2d');
            var genderChart = new Chart(genderCtx, {
                type: 'pie',
                data: {
                    labels: ['Laki-laki', 'Perempuan'],
                    datasets: [{
                        data: {!! json_encode(array_values($genderData['data'])) !!},
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#66BB6A', '#FFA726', '#42A5F5',
                            '#AB47BC', '#26A69A'
                        ]
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            position: 'bottom', // Positions the labels below the chart
                            labels: {
                                boxWidth: 30, // Size of the color box next to the label
                            }
                        }
                    },

                }
            });
        </script>
    @endpush
@endsection
