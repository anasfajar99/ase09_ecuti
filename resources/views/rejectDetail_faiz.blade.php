@extends('main')
@section('content')
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Dashboard HRD</h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Rejected</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Jumlah Pengajuan</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{ $detail['pending'] }} Data</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span>/Tahun Ini</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Approved Cuti</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{ $detail['diterima'] }} Data</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span>/Tahun Ini</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Unapproved Cuti</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{ $detail['ditolak'] }} Data</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span>/Tahun Ini</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Data Reject Cuti</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-light" align="center">
                                        <tr class="border-0">
                                            <th class="border-0">#</th>
                                            <th class="border-0">Nama Karyawan</th>
                                            <th class="border-0">Alasan</th>
                                            <th class="border-0">Tanggal Cuti</th>
                                            <th class="border-0">Jumlah Hari</th>
                                            <th class="border-0">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody align="center">
                                        @foreach($data as $d)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $d->id_karyawan }}</td>
                                            <td>{{ $d->alasan }}</td>
                                            <td>{{ $d->created_at }}</td>
                                            <td>{{ $d->lama }}</td>
                                            <td><span class="badge-dot badge-danger mr-1"></span>Ditolak</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
                    <div class="ecommerce-widget">
                </div>

                </div>
            </div>

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
@endsection                