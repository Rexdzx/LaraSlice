@extends('layouts.admin.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('vendor/dropify/dist/css/dropify.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

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

        .summernote-main {
            background: #fff;
            padding: 20px;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: start;

        }

        .summernote-main {
            display: flex;
            width: 100%;
            align-items: flex-start
        }

        @media only screen and (min-width: 1360px) {
            .summernote-main {
                max-width: 1280px;
                /* margin-left: auto; */
                margin-right: auto;
                padding: 24px;
            }
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
                                <label class="mt-5 ml-4">DESKRIPSI</label>
                                {{-- <input type="text" name="deskripsi" value="{{ old('deskripsi', $about->deskripsi) }}"
                                    placeholder="Masukkan Deskripsi"
                                    class="form-control @error('deskripsi') is-invalid @enderror"> --}}

                                <div class="summernote-main">
                                    <textarea id="summernote" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"></textarea>
                                </div>

                                @error('deskripsi')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                                SIMPAN</button>
                            <button class="btn btn-danger btn-reset" type="reset" id="resetSummernote"><i
                                    class="fa fa-redo"></i>
                                RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @push('js')
        <script type="text/javascript" src="{{ asset('vendor/dropify/dist/js/dropify.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
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

            let deskripsi = "{!! $about->deskripsi ?? 'Masukkan Deskripsi' !!}";
            $('#summernote').summernote({
                height: 400,
                width: 1000,
                disableResizeEditor: true,
                spellCheck: false,
                toolbar: [
                    ["style", ["style"]],
                    ["font", ["bold", "underline", "clear"]],
                    ["fontname", ["fontname"]],
                    ["color", ["color"]],
                    ["para", ["ul", "ol", "paragraph"]],
                    ["view", ["codeview"]]
                ]
            });

            $('#summernote').summernote('code', deskripsi);

            function resetSummernote() {
                $('#summernote').summernote('code', '');
                // Simpan status reset ke penyimpanan lokal
                localStorage.setItem('summernoteReset', 'true');
            }

            $('#resetSummernote').on('click', resetSummernote);

            // Cek apakah status reset ada di penyimpanan lokal saat halaman dimuat
            let isReset = localStorage.getItem('summernoteReset');
            if (isReset === 'true') {
                // Hapus status reset dari penyimpanan lokal
                localStorage.removeItem('summernoteReset');
            }
        </script>
    @endpush
@endsection
