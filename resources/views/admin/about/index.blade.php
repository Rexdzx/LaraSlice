@extends('layouts.admin.app')

@push('css')
    <style>
        .swal2-popup .swal2-styled:focus {
            box-shadow: none !important;
        }
    </style>
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>About Page</h1>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-users"></i> About Page</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.about.index') }}" method="GET">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary"
                                            style="padding-top: 10px;"><i class="fa fa-plus-circle"></i> TAMBAH</a>
                                    </div>
                                    <input type="text" class="form-control" name="q"
                                        placeholder="cari berdasarkan nama siswa">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> CARI
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                        <th scope="col">GAMBAR 1</th>
                                        <th scope="col">GAMBAR 2</th>
                                        <th scope="col">GAMBAR 3</th>
                                        <th scope="col">DESKRIPSI</th>
                                        <th scope="col" style="width: 15%;text-align: center">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($about as $no => $item)
                                        <tr class="text-center">
                                            <th scope="row" style="text-align: center">
                                                {{ ++$no }}</th>
                                            <td><img class="my-3" src="{{ asset('img/upload/about/about1.jpg') }}"
                                                    width="200px"style="border-radius: 10px"></td>

                                            <td><img class="my-3" src="{{ asset('img/upload/about/about2.jpg') }}"
                                                    width="200px"style="border-radius: 10px"></td>

                                            <td><img class="my-3" src="{{ asset('img/upload/about/about3.jpg') }}"
                                                    width="200px"style="border-radius: 10px"></td>

                                            <td>{{ $item->deskripsi }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('admin.about.edit', $item->id) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>

                                                <button onClick="Delete(this.id)"
                                                    class="btn btn-sm btn-danger"id="{{ $item->id }}">
                                                    <form id="delete-form-{{ $item->id }}" method="POST"
                                                        action="{{ route('admin.about.destroy', $item->id) }}">
                                                        @csrf
                                                        @method('DELETE')</form>
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr class="text-center">
                                            <td colspan="5">Tidak ada data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

    <script>
        function Delete(id) {
            var formId = "#delete-form-" + id;
            var form = $(formId);

            Swal.fire({
                title: 'Konfirmasi Hapus Data',
                text: 'Anda yakin ingin menghapus data ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#F2B807',
                cancelButtonColor: '#fc544b',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                    Swal.fire({
                        title: 'Berhasil!',
                        text: 'Data Berhasil Dihapus!',
                        icon: 'success',
                        timer: 1000,
                        showConfirmButton: false,
                        showCancelButton: false,
                        buttons: false,

                    });
                }
            });

            event.preventDefault();
        }
    </script>
@endsection
