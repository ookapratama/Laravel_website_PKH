@extends('layouts.user.app', ['title' => 'Website PKH Kabupaten Barru'])

@section('content')
    @push('styles')
    @endpush

    <div class="main-content ">
        <section class="section">
            <div class="section-header">
                <h1>Sistem Pengajuan PKH Kabupaten Barru</h1>

            </div>


            <div class="section-body">
                <h2 class="section-title">Informasi</h2>
                <p class="section-lead">
                    Informasi PKH
                </p>

                <div class="card-body">
                    <img src="{{ asset('img/Group_31.png') }}" class="img-fluid" alt="">
                </div>
                
              

                <h2 class="section-title">Informasi</h2>
                <p class="section-lead">
                    Informasi PKH
                </p>

                <div class="card-body">
                    <img src="{{ asset('img/Group_32.png') }}" class="img-fluid" alt="">
                </div>

                <h2 class="section-title">Informasi</h2>
                <p class="section-lead">
                    Informasi PKH
                </p>

                <div class="card-body text-center">
                    <img src="{{ asset('img/Group_19.png') }}" width="600" class="img-fluid" alt="">
                </div>
                
            </div>
        </section>
    </div>

    @push('scripts')
    @endpush
@endsection
