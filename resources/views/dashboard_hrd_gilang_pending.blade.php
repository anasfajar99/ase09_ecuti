<!-- main wrapper -->
<!-- ============================================================== -->
@extends('layout') <!-- Menggunakan template utama (layout.blasde.php) -->

@section('title')
    HRD Pending
@endsection

@section('content')
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">HRD Pending Dashboard </h2>
                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus
                    vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">HRD Dashboard
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader  -->
    <!-- ============================================================== -->
    <div class="ecommerce-widget">

        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">Jumlah Pengajuan</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">12 Data</h1>
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
                            <h1 class="mb-1">8 Data</h1>
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
                            <h1 class="mb-1">8 Data</h1>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                            <span>/Tahun Ini</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- ============================================================== -->

            <!-- ============================================================== -->

            <!-- recent orders  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Histori Cuti</h5>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-light" align="center">
                                    <tr class="border-0">
                                        <th class="border-0">#</th>
                                        <th class="border-0">Nama Karyawan</th>
                                        <th class="border-0">Alasan</th>
                                        <th class="border-0">Tanggal Cuti</th>
                                        <th class="border-0">Jumlah Hari</th>
                                        <th class="border-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <tr>
                                        <td>1</td>
                                        <td>Gilang Bangun Ardiansyah</td>
                                        <td>Cuti Nikah</td>
                                        <td>2 Juli 2023</td>
                                        <td>10</td>
                                        <td><a href="{{ '/dashboard_approved' }}" class="btn btn-success active">Terima</a>
                                            <a href="{{ '/dashboard_reject' }}" class="btn btn-danger active">Tolak</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Faiz Restu Cahyadi</td>
                                        <td>Cuti Liburan</td>
                                        <td>30 Februari 2024</td>
                                        <td>12</td>
                                        <td><a href="{{ '/dashboard_approved' }}" class="btn btn-success active">Terima</a>
                                            <a href="{{ '/dashboard_reject' }}" class="btn btn-danger active">Tolak</a>
                                        </td>
                                    <tr>
                                        <td>3</td>
                                        <td>Adzmi Rifal Setyawan</td>
                                        <td>Cuti Sakit</td>
                                        <td>16 Oktober 2024</td>
                                        <td>5</td>
                                        <td><a href="{{ '/dashboard_approved' }}" class="btn btn-success active">Terima</a>
                                            <a href="{{ '/dashboard_reject' }}" class="btn btn-danger active">Tolak</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Siti Robiah</td>
                                        <td>Cuti Hamil</td>
                                        <td>10 November 2021</td>
                                        <td>34</td>
                                        <td><a href="{{ '/dashboard_approved' }}" class="btn btn-success active">Terima</a>
                                            <a href="{{ '/dashboard_reject' }}" class="btn btn-danger active">Tolak</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View
                                                Details</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end recent orders  -->

        </div>
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
                    Copyright © 2018 Concept. All rights reserved. Dashboard by <a
                        href="https://colorlib.com/wp/">Colorlib</a>.
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
