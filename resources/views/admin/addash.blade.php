@extends('admin.admain')
@section('content')
@include('admin.partial.sidebarad')
<body>
    <div class="container">
        <div class="row">
<div class="col">
</div>

        </div>
    </div>

    <div class="card-body" style="overflow-x:auto;">

      <form action="" method="post" enctype="multipart/form-data">
          <div class="col-md-1"></div>
          <div class="col-md-10">
                                  <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="text-input" class="form-control-label">Nama Lengkap</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <input type="text" id="text-input" name="nama_lengkap" value="Shabrina Ailyndra" class="form-control" disabled="">
                  </div>
              </div>
              <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="text-input" class="form-control-label">Nama Panggilan</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <input type="text" id="text-input" name="nama_lengkap" value="Shabss" class="form-control" disabled="">
                  </div>
              </div>
              <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="text-input" class="form-control-label">Nomor SIP</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <input type="text" id="text-input" name="nama_lengkap" value="" class="form-control" disabled="">
                  </div>
              </div>
              <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="text-input" class="form-control-label">Tempat Tanggal Lahir</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <input type="text" id="text-input" name="nama_lengkap" value="Sidoarjo, 26-06-2003" class="form-control" disabled="">
                  </div>
              </div>
              <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="text-input" class="form-control-label">Tanggal Masuk</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <input type="text" id="text-input" name="nama_lengkap" value="2018-04-01" class="form-control" disabled="">
                  </div>
              </div>
              <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="text-input" class="form-control-label">Alamat</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <input type="text" id="text-input" name="nama_lengkap" value="Sidoarjo, Masangan Wetan" class="form-control" disabled="">
                  </div>
              </div>
              <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="text-input" class="form-control-label">Bidang</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <input type="text" id="text-input" name="nama_lengkap" value="ADMINISTRASI" class="form-control" disabled="">
                  </div>
              </div>
              <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="text-input" class="form-control-label">Jabatan</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <input type="text" id="text-input" name="nama_lengkap" value="KEPALA ADMINISTRASI" class="form-control" disabled="">
                  </div>
              </div>
              <hr style="border-top: 1px solid;">
              <center>
                  <a class="btn btn-outline-primary" href="index.php?contain=datadiri_ubah" role="button"><i class="fa fa-exclamation-circle"></i>&nbsp; Pengajuan Perubahan</a>
              </center>
                              </div>
          <div class="col-md-1"></div>
      </form>

  </div>
    
      
    
</body>
@endsection