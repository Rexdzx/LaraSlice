@extends('layouts.admin.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('vendor/dropify/dist/css/dropify.min.css') }}">

    <style>
        #image .dropify-wrapper {
            width: 304px;
            border-radius: 10px;
            /* margin: auto */
            justify-content: center
        }

        .dropify-wrapper {
            border-radius: 10px
        }

        .dropify-filename .dropify-filename-inner {
            display: none;
        }

        .dropify-infos-inner .dropify-infos-message {
            font-size: 25px !important;
            margin: auto !important;
            padding-top: 0 !important;
        }

        .dropify-infos-inner,
        .dropify-infos-message::before {
            content: none !important
        }
    </style>
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit About Session</h1>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-unlock"></i> Edit About Session</h4>
                    </div>


                    <div class="card-body">
                        <form action="{{ route('admin.about.update', $about->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row" id="image">
                                <div class="col-lg-4 d-flex justify-content-center">
                                    <div class="form-group">
                                        <label>GAMBAR 1</label>
                                        <input type="file" name="gambar1" value="{{ old('gambar1') }}"
                                            class="dropify form-control @error('gambar1') is-invalid @enderror"
                                            data-height="290" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif"
                                            data-default-file="{{ asset('img/upload/about/' . $about->gambar1) }}">

                                        @error('gambar1')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4 d-flex justify-content-center">
                                    <div class="form-group">
                                        <label>GAMBAR 2</label>
                                        <input type="file" name="gambar2" value="{{ old('gambar2') }}"
                                            class="dropify form-control @error('gambar2') is-invalid @enderror"
                                            data-height="290" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif"
                                            data-default-file="{{ asset('img/upload/about/' . $about->gambar2) }}">

                                        @error('gambar2')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4 d-flex justify-content-center">
                                    <div class="form-group">
                                        <label>GAMBAR 3</label>
                                        <input type="file" name="gambar3" value="{{ old('gambar3') }}"
                                            class="dropify form-control @error('gambar3') is-invalid @enderror"
                                            data-height="290" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif"
                                            data-default-file="{{ asset('img/upload/about/' . $about->gambar3) }}">

                                        @error('gambar3')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>DESKRIPSI</label>
                                <input type="text" name="deskripsi" value="{{ old('deskripsi', $about->deskripsi) }}"
                                    placeholder="Masukkan Deskripsi"
                                    class="form-control @error('deskripsi') is-invalid @enderror">

                                @error('deskripsi')
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

            $('.dropify').hover(
                function() {
                    $(this).find('.dropify-filename-inner').css('display', 'block');
                },
                function() {
                    $(this).find('.dropify-filename-inner').css('display', 'none');
                }
            );
        </script>
    @endpush
@endsection
