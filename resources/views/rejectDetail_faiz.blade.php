@extends('layout')

@section('title')
    HRD Rejected
@endsection

@section('content')
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Dashboard HRD</h2>
                            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris
                                facilisis faucibus at enim quis massa lobortis rutrum.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Rejected</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- ============================================================== -->
                    <!-- sales  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-4 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">Jumlah Reject</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">120</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                    <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i
                                            class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end sales  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- new customer  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-4 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">Tahun Ini</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">98</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                    <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i
                                            class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card border-3 border-top border-top-primary">
                            <div class="card-body">
                                <h5 class="text-muted">Bulan Ini</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">12</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                    <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i
                                            class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1"></span>
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
                    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">History Rejected</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light" align="center">
                                            <tr class="border-0">
                                                <th class="border-0">No</th>
                                                <th class="border-0">Nama Pegawai</th>
                                                <th class="border-0">Alasan</th>
                                                <th class="border-0">Tanggal Pengajuan</th>
                                                <th class="border-0">Jumlah Hari</th>
                                                <th class="border-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody align="center">
                                            <tr>
                                                <td>1</td>
                                                <td>Adzmi </td>
                                                <td>Sakit</td>
                                                <td>20 Oktober 2023</td>
                                                <td>3 Minggu</td>
                                                <td>
                                                    <a href="{{ '/rejectDetail' }}"
                                                        class="btn btn-danger active">Rejected</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Adit</td>
                                                <td>Bengkel</td>
                                                <td>12 September 2023</td>
                                                <td>3 Hari</td>
                                                <td>
                                                    <a href="{{ '/rejectDetail' }}"
                                                        class="btn btn-danger active">Rejected</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Faiz</td>
                                                <td>Panitia</td>
                                                <td>15 Agustus 2023</td>
                                                <td>3 Hari</td>
                                                <td>
                                                    <a href="{{ '/rejectDetail' }}"
                                                        class="btn btn-danger active">Rejected</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Robiah</td>
                                                <td>Pusing</td>
                                                <td>28 Juli 2023</td>
                                                <td>5 Hari</td>
                                                <td>
                                                    <a href="{{ '/rejectDetail' }}"
                                                        class="btn btn-danger active">Rejected</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Yogi </td>
                                                <td>Healing</td>
                                                <td>20 Juni 2023</td>
                                                <td>3 Hari</td>
                                                <td>
                                                    <a href="{{ '/rejectDetail' }}"
                                                        class="btn btn-danger active">Rejected</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Fandi</td>
                                                <td>Gatau</td>
                                                <td>8 Mei 2023</td>
                                                <td>1 Bulan</td>
                                                <td>
                                                    <a href="{{ '/rejectDetail' }}"
                                                        class="btn btn-danger active">Rejected</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Gilang</td>
                                                <td>Rehat</td>
                                                <td>13 April 2023</td>
                                                <td>2 Minggu</td>
                                                <td>
                                                    <a href="{{ '/rejectDetail' }}"
                                                        class="btn btn-danger active">Rejected</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Handaru</td>
                                                <td>Party</td>
                                                <td>12 Maret 2023</td>
                                                <td>3 Hari</td>
                                                <td>
                                                    <a href="{{ '/rejectDetail' }}"
                                                        class="btn btn-danger active">Rejected</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Sanchez</td>
                                                <td>Meeting Luar</td>
                                                <td>2 Februari 2023</td>
                                                <td>2 Hari</td>
                                                <td>
                                                    <a href="{{ '/rejectDetail' }}"
                                                        class="btn btn-danger active">Rejected</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Robert</td>
                                                <td>Keperluan Pribadi</td>
                                                <td>25 Januari 2023</td>
                                                <td>1 Hari</td>
                                                <td>
                                                    <a href="{{ '/rejectDetail' }}"
                                                        class="btn btn-danger active">Rejected</a>
                                                </td>
                                            </tr>
                                            <!-- <tr>
                                                                                        <td colspan="9"><a href="#" class="btn btn-outline-light float-right">Detail</a></td>
                                                                                    </tr> -->
                                        </tbody>
                                    </table>
                                    <!-- <div class="card-body border-top">
                                                                            <li><a href="formcuti.html" class="btn btn-primary btn-block">Pending Cuti</a></li>
                                                                            </div> -->
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
    @endsection
