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
                <h1>Portfolio Siswa</h1>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-hotel"></i> Portfolio Siswa</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.portfolio.index') }}" method="GET">
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
                                        <th scope="col">NAMA SISWA</th>
                                        <th scope="col">FOTO SISWA</th>
                                        <th scope="col">JUDUL KARYA</th>
                                        <th scope="col">FOTO KARYA</th>
                                        <th scope="col" style="width: 15%;text-align: center">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($portfolio as $no => $item)
                                        <tr class="text-center">
                                            <th scope="row" style="text-align: center">
                                                {{ ++$no }}</th>
                                            <td>{{ $item->nama }}</td>
                                            <td><img src="{{ asset('img/upload/pas_foto/' . $item->foto) }}"
                                                    width="100px"style="border-radius: 10px"></td>
                                            <td>{{ $item->judul }}</td>
                                            <td><img src="{{ asset('img/upload/portfolio/' . $item->portfolio) }}"
                                                    width="120px" style="border-radius:10px; margin:5px 0"></td>
                                            <td class="text-center">
                                                <a href="{{ route('admin.portfolio.edit', $item->id) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>

                                                <button onClick="Delete(this.id)"
                                                    class="btn btn-sm btn-danger"id="{{ $item->id }}">
                                                    <form id="delete-form-{{ $item->id }}" method="POST"
                                                        action="{{ route('admin.portfolio.destroy', $item->id) }}">
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
                            {{-- <div style="text-align: center">
                                {{ $kelas->links('vendor.pagination.bootstrap-4') }}
                            </div> --}}
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
