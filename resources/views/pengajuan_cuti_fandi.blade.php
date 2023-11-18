<!-- <html>
<head>
    <title>Pengajuan Cuti</title>
</head>
    <body>
    <h2>Form Pengajuan Cuti</h2>
    <form name="form1" method="GET" action="{{'/home'}}">
        Tanggal :
        <input type="date" date="date"><br>
        Jumlah Hari  :
        <input type="text" name="text"><br>
        <select name="select">  

        </select>
        Alasan
        <input type="text" name="text"><br>
        <input name="submit" type="submit" value="cancel">
        <input name="submit" type="submit" value="submit">
    </form>
    </body>
</html> -->

@extends('main')
@section('content')

<div class='row'>
<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Pengajuan Cuti</h5>
            <div class="card-body">
                <form id="form" data-parsley-validate="" novalidate="" action="{{ '/inputCuti' }}" method="POST">
                @csrf
                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-3 col-form-label text-right">Alasan Cuti</label>
                        <div class="col-9 col-lg-9">

                        <select name="alasan_cuti" id='alsan_cuti' class="form-control" required>
                            <option value="">== PIlih Cuti ==</option>
                            <option value="Cuti Tahunan">Cuti Tahunan</option>
                            <option value="Cuti Besar">Cuti Besar</option>
                            <option value="Cuti Sakit">Cuti Sakit</option>
                            <option value="Cuti Melahirkan">Cuti Melahirkan</option>
                            <option value="Cuti Keguguran">Cuti Keguguran</option>
                            <option value="Cuti Haid">Cuti Haid</option>
                            <option value="Cuti Ayah">Cuti Ayah</option>
                            <option value="Cuti Haji">Cuti Haji/Umroh</option>
                        </select>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword2" class="col-3 col-lg-3 col-form-label text-right">Tanggal Mulai</label>
                        <div class="col-9 col-lg-9">
                            <input name="tanggal_mulai_cuti" id="tanggal_mulai_cuti" type="date" required="" placeholder="tanggal_mulai_cuti" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputWebSite" class="col-3 col-lg-3 col-form-label text-right">Lama Cuti</label>
                        <div class="col-9 col-lg-9">
                            <input name="lama_cuti" id="lama_cuti" type="number" required="" data-parsley-type="url" placeholder="Lama Cuti" class="form-control" required>
                        </div>
                    </div>
                    <div class="row pt-2 pt-sm-5 mt-1">
                        <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                            <!-- <label class="be-checkbox custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Remember me</span>
                            </label> -->
                        </div>
                        <div class="col-sm-6 pl-0">
                            <p class="text-right">
                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                <button class="btn btn-space btn-secondary">Cancel</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection