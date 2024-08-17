@extends('layouts.app', ['title' => 'Data Permintaan PKH'])
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
        <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
        <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    @endpush

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Permintaan PKH</h1>
            </div>

            <div class="section-body">

                <div class="row">

                    <div class="col-md-12 col-lg-12">
                        <form action="{{ route('penerima.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            @include('pages.admin.penerimaPKH.modal.form_edit')


                        </form>
                    </div>

                </div>



            </div>
    </div>
    </section>
    </div>

    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

        <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
        <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

        <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('.currency').inputmask({
                    alias: 'numeric',
                    groupSeparator: ',',
                    autoGroup: true,
                    digits: 0,
                    digitsOptional: false,
                    prefix: 'Rp ',
                    placeholder: '0',
                    rightAlign: false,
                    removeMaskOnSubmit: true
                });
            })
        </script>
    @endpush
@endsection
