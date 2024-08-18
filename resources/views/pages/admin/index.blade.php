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
                    <h2 class="section-title">Statistik</h2>
                    <p class="section-lead">
                        Statistik Pengajuan PKH
                    </p>

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
        </script>
    @endpush
@endsection
