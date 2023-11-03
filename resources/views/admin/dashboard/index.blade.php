@extends('layouts.admin.app')

@section('content')
    <div class="main-content" style="min-height:790px">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fa fa-users text-white fa-2x"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Portfolio Siswa</h4>
                            </div>
                            <div class="card-body">

                                {{ App\Models\Portfolio::count() ?? '0' }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
