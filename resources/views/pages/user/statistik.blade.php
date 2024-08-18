@extends('layouts.user.app', ['title' => 'Website PKH Kelurahan Mangkoso'])

@section('content')
    @push('styles')
    @endpush

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Sistem Pengajuan PKH Kelurahan Mangkoso</h1>
            </div>

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
