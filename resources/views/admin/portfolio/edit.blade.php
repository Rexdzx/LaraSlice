@extends('layouts.admin.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Portfolio</h1>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-unlock"></i> Edit Portfolio</h4>
                    </div>


                    <div class="card-body">
                        <form action="{{ route('admin.portfolio.update', $portfolio->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>NISN</label>
                                <input type="text" name="nisn" value="{{ old('nisn', $siswa->nisn) }}"
                                    placeholder="Masukkan NISN Siswa"
                                    class="form-control @error('nisn') is-invalid @enderror" maxlength="16">

                                @error('nisn')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>NAMA SISWA</label>
                                <input type="text" name="name" value="{{ old('name', $siswa->name) }}"
                                    placeholder="Masukkan Nama SISWA"
                                    class="form-control @error('name') is-invalid @enderror">

                                @error('name')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>EMAIL</label>
                                <input type="email" name="email" value="{{ old('email', $siswa->email) }}"
                                    placeholder="Masukkan Email" class="form-control @error('email') is-invalid @enderror">

                                @error('email')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>PHONE</label>
                                <input type="tel" name="phone" value="{{ old('phone', $siswa->phone) }}"
                                    placeholder="Masukkan Phone" class="form-control @error('phone') is-invalid @enderror">

                                @error('phone')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>KELAS</label>
                                <select name="kelas_id" class="form-control" id="">
                                    <option value="">Pilih Kelas</option>
                                    @foreach ($kelas as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $siswa->kelas_id ? 'selected' : '' }}>{{ $item->nama }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('kelas_id')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>PASSWORD</label>
                                        <input type="password" name="password" value="{{ old('password') }}"
                                            placeholder="Masukkan Password"
                                            class="form-control @error('password') is-invalid @enderror">

                                        @error('password')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>PASSWORD</label>
                                        <input type="password" name="password_confirmation"
                                            value="{{ old('password_confirmation') }}"
                                            placeholder="Masukkan Konfirmasi Password" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">STATUS</label>
                                <select name="status" class="form-control  @error('status') is-invalid @enderror"
                                    id="">
                                    <option value="">Pilih Status</option>
                                    <option value="aktif" {{ $siswa->status == 'aktif' ? 'selected' : '' }}>AKTIF</option>
                                    <option value="non-aktif" {{ $siswa->status == 'non-aktif' ? 'selected' : '' }}>
                                        NON-AKTIF</option>
                                </select>

                                @error('status')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">JENIS KELAMIN</label>
                                <select name="jenis_kelamin"
                                    class="form-control @error('jenis_kelamin') is-invalid @enderror" id="">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="laki-laki" {{ $siswa->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>
                                        LAKI-LAKI</option>
                                    <option value="perempuan" {{ $siswa->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>
                                        PEREMPUAN</option>
                                </select>
                                @error('jenis_kelamin')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">ALAMAT</label>
                                <textarea name="alamat" id="" class="form-control @error('alamat') is-invalid @enderror" cols="30"
                                    placeholder="Masukan Alamat" rows="10">{{ old('alamat', $siswa->alamat) }}
                                </textarea>
                                @error('alamat')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i
                                    class="fa fa-paper-plane"></i>
                                SIMPAN</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i>
                                RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
