@extends('admin.admain')
@section('content')
@include('admin.partial.sidebarad')
<body>
    <div class="container">
        <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Jadwal Praktek Dokter</h4>
                <label for="exampleInputPassword4">POLI</label>
              <select class="form-control">
                <option>Umum</option>
                <option>Gigi</option>
                <option>KIA</option>
                <option>Lansia</option>
                <option>Psikologi</option>
                <option>Gizi</option>
                <option>Batra</option>
                <option>Anak</option>
            </select>
        
                <table class="table">
                  <thead>
                    <tr>
                      <th>DOKTER</th>
                      <th>PUKUL</th>
                      <th>HARI/TANGGAL</th>
                      <th>STATUS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Jacob</td>
                      <td>10.00</td>
                      <td>12 May 2017</td>
                      <td><label class="badge badge-danger">Pending</label></td>
                    </tr>
                    <tr>
                      <td>Messsy</td>
                      <td>11.00</td>
                      <td>15 May 2017</td>
                      <td><label class="badge badge-warning">In progress</label></td>
                    </tr>
                    <tr>
                      <td>John</td>
                      <td>12.00</td>
                      <td>14 May 2017</td>
                      <td><label class="badge badge-info">Fixed</label></td>
                    </tr>
                    <tr>
                      <td>Peter</td>
                      <td>13.00</td>
                      <td>16 May 2017</td>
                      <td><label class="badge badge-success">Completed</label></td>
                    </tr>
                    <tr>
                      <td>Dave</td>
                      <td>14.00</td>
                      <td>20 May 2017</td>
                      <td><label class="badge badge-warning">In progress</label></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        
        
        
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Jadwal Kontrol Pasien</h4>
               <label for="exampleInputPassword4">POLI</label>
              <select class="form-control">
                <option>Umum</option>
                <option>Gigi</option>
                <option>KIA</option>
                <option>Lansia</option>
                <option>Psikologi</option>
                <option>Gizi</option>
                <option>Batra</option>
                <option>Anak</option>
            </select>
        
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>PASIEN</th>
                      <th>JAM</th>
                      <th>HARI/TANGGAL</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Jacob</td>
                      <td>10.00</td>
                      <td class="text-danger"> 16 May 2019 <i class="mdi mdi-arrow-down"></i></td>
                      <td><label class="badge badge-danger">Pending</label></td>
                    </tr>
                    <tr>
                      <td>Messsy</td>
                      <td>11.00</td>
                      <td class="text-danger"> 17 May 2019<i class="mdi mdi-arrow-down"></i></td>
                      <td><label class="badge badge-warning">In progress</label></td>
                    </tr>
                    <tr>
                      <td>John</td>
                      <td>12.00</td>
                      <td class="text-danger"> 18 May 2019 <i class="mdi mdi-arrow-down"></i></td>
                      <td><label class="badge badge-info">Fixed</label></td>
                    </tr>
                    <tr>
                      <td>Peter</td>
                      <td>13.00</td>
                      <td class="text-success">19 May 2019 <i class="mdi mdi-arrow-up"></i></td>
                      <td><label class="badge badge-success">Completed</label></td>
                    </tr>
                    <tr>
                      <td>Dave</td>
                      <td>14.00 </td>
                      <td class="text-success"> 20 May 2019 <i class="mdi mdi-arrow-up"></i></td>
                      <td><label class="badge badge-warning">In progress</label></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
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