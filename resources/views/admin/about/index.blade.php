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
                                            <td><img class="my-3" src="{{ asset('img/upload/about/' . $item->gambar1) }}"
                                                    width="200px" height="200px" style="border-radius: 10px"></td>

                                            <td><img class="my-3" src="{{ asset('img/upload/about/' . $item->gambar2) }}"
                                                    width="200px" style="border-radius: 10px"></td>

                                            <td><img class="my-3" src="{{ asset('img/upload/about/' . $item->gambar3) }}"
                                                    width="200px" style="border-radius: 10px"></td>

                                            <td>{{ $item->deskripsi }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('admin.about.edit', $item->id) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
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
@endsection
