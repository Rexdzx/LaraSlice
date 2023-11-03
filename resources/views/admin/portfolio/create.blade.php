@extends('layouts.admin.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('vendor/dropify/dist/css/dropify.min.css') }}">

    <style>
        #fotosiswa .dropify-wrapper {
            width: 304px;
            border-radius: 10px;
        }

        .dropify-wrapper {
            border-radius: 10px
        }
    </style>
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Portfolio</h1>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-unlock"></i> Tambah Portfolio</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.portfolio.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>NAMA SISWA</label>
                                <input type="text" name="nama" value="{{ old('nama') }}"
                                    placeholder="Masukkan Nama Siswa"
                                    class="form-control @error('nama') is-invalid @enderror" required>

                                @error('nama')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group" id="fotosiswa">
                                <label>FOTO SISWA</label>
                                <input type="file" name="foto" value="{{ old('foto') }}"
                                    class="dropify form-control @error('foto') is-invalid @enderror" data-height="290"
                                    data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>

                                @error('foto')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>KARYA SISWA</label>
                                <input type="file" name="portfolio" value="{{ old('portfolio') }}"
                                    class="dropify form-control @error('email') is-invalid @enderror" data-height="290"
                                    data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>

                                @error('portfolio')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>JUDUL KARYA</label>
                                <input type="tel" name="judul" value="{{ old('judul') }}"
                                    placeholder="Masukkan Judul Karya"
                                    class="form-control @error('judul') is-invalid @enderror" required>

                                @error('judul')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                                SIMPAN</button>
                            <button class="btn btn-danger btn-reset" type="reset"><i class="fa fa-redo"></i>
                                RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- @endsection --}}
    @push('js')
        <script type="text/javascript" src="{{ asset('vendor/dropify/dist/js/dropify.min.js') }}"></script>
        <script type="text/javascript">
            $('.dropify').dropify({
                messages: {
                    default: '<p style="font-size:20px;color:#777">Drag atau Drop untuk memilih gambar</p>',
                    replace: 'Ganti',
                    remove: 'Hapus',
                    error: 'error'
                }
            });

            $('.title').keyup(function() {
                var title = $(this).val().toLowerCase().replace(/[&\/\\#^, +()$~%.'":*?<>{}]/g, '-');
                $('.slug').val(title);
            });
        </script>
    @endpush

@stop
