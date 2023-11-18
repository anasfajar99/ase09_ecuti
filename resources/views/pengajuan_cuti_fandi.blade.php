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
            <h5 class="card-header">Horizontal Form</h5>
            <div class="card-body">
                <form id="form" data-parsley-validate="" novalidate="">
                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Email</label>
                        <div class="col-9 col-lg-10">
                            <input id="inputEmail2" type="email" required="" data-parsley-type="email" placeholder="Email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Password</label>
                        <div class="col-9 col-lg-10">
                            <input id="inputPassword2" type="password" required="" placeholder="Password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Web Site</label>
                        <div class="col-9 col-lg-10">
                            <input id="inputWebSite" type="url" required="" data-parsley-type="url" placeholder="URL" class="form-control">
                        </div>
                    </div>
                    <div class="row pt-2 pt-sm-5 mt-1">
                        <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                            <label class="be-checkbox custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Remember me</span>
                            </label>
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