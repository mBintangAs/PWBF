@extends('admin.admain')
@section('content')
@include('admin.partial.sidebarad')

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

  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Riwayat Rekam Medis</h4>
      <h6 class="card-title">Kondisi Umum</h6>
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
      <table class="table table-striped">
        <thead>
          <tr>
            <th>
              NAMA PASIEN
            </th>
            <th>
              PEMERIKSAAN FISIK
            </th>
            <th>
              ANAMNESE
            </th>
            <th>
              TB-BB
            </th>
            <th>
              NADI
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
            Herman Beck 
            </td>
            <td>
              Herman Beck
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $ 77.99
            </td>
            <td>
              May 15, 2015
            </td>
          </tr>
          <tr>
            <td>
              Messy Adam
            </td>
            <td>
              Messsy Adam
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $245.30
            </td>
            <td>
              July 1, 2015
            </td>
          </tr>
          <tr>
            <td>
             John Richards
            </td>
            <td>
              John Richards
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $138.00
            </td>
            <td>
              Apr 12, 2015
            </td>
          </tr>
          <tr>
            <td>
             Peter Pan
            </td>
            <td>
              Peter Meggik
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $ 77.99
            </td>
            <td>
              May 15, 2015
            </td>
          </tr>
          <tr>
            <td>
              Edward
            </td>
            <td>
              Edward
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $ 160.25
            </td>
            <td>
              May 03, 2015
            </td>
          </tr>
          <tr>
            <td>
             John Doe
            </td>
            <td>
              John Doe
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $ 123.21
            </td>
            <td>
              April 05, 2015
            </td>
          </tr>
          <tr>
            <td>
             Henry Lau
            </td>
            <td>
              Henry Tom
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $ 150.00
            </td>
            <td>
              June 16, 2015
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h6 class="card-title">Diagnosis</h6>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>
              NO
            </th>
            <th>
              KODE DG
            </th>
            <th>
              DIAGNOSA
            </th>
            <th>
              TIPE
            </th>
            <th>
              KET
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              1
            </td>
            <td>
              Herman Beck
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $ 77.99
            </td>
            <td>
              May 15, 2015
            </td>
          </tr>
          <tr>
            <td>
              2
            </td>
            <td>
              Messsy Adam
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $245.30
            </td>
            <td>
              July 1, 2015
            </td>
          </tr>
          <tr>
            <td>
              3
            </td>
            <td>
              John Richards
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $138.00
            </td>
            <td>
              Apr 12, 2015
            </td>
          </tr>
          <tr>
            <td>
              4
            </td>
            <td>
              Peter Meggik
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $ 77.99
            </td>
            <td>
              May 15, 2015
            </td>
          </tr>
          <tr>
            <td>
              5
            </td>
            <td>
              Edward
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $ 160.25
            </td>
            <td>
              May 03, 2015
            </td>
          </tr>
          <tr>
            <td>
              6
            </td>
            <td>
              John Doe
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $ 123.21
            </td>
            <td>
              April 05, 2015
            </td>
          </tr>
          <tr>
            <td>
              7
            </td>
            <td>
              Henry Tom
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $ 150.00
            </td>
            <td>
              June 16, 2015
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h6 class="card-title">Tindakan</h6>
      <table class="table table-dark">
        <thead>
          <tr>
            <th>
              NO
            </th>
            <th>
              TINDAKAN
            </th>
            <th>
              URAIAN
            </th>
            <th>
              KETERANGAN
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              1
            </td>
            <td>
              Herman Beck
            </td>
            <td>
              $ 77.99
            </td>
            <td>
              May 15, 2015
            </td>
          </tr>
          <tr>
            <td>
              2
            </td>
            <td>
              Messsy Adam
            </td>
            <td>
              $245.30
            </td>
            <td>
              July 1, 2015
            </td>
          </tr>
          <tr>
            <td>
              3
            </td>
            <td>
              John Richards
            </td>
            <td>
              $138.00
            </td>
            <td>
              Apr 12, 2015
            </td>
          </tr>
          <tr>
            <td>
              4
            </td>
            <td>
              Peter Meggik
            </td>
            <td>
              $ 77.99
            </td>
            <td>
              May 15, 2015
            </td>
          </tr>
          <tr>
            <td>
              5
            </td>
            <td>
              Edward
            </td>
            <td>
              $ 160.25
            </td>
            <td>
              May 03, 2015
            </td>
          </tr>
          <tr>
            <td>
              6
            </td>
            <td>
              John Doe
            </td>
            <td>
              $ 123.21
            </td>
            <td>
              April 05, 2015
            </td>
          </tr>
          <tr>
            <td>
              7
            </td>
            <td>
              Henry Tom
            </td>
            <td>
              $ 150.00
            </td>
            <td>
              June 16, 2015
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Pengobatan</h6>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>
                OBAT
              </th>
              <th>
                JUMLAH
              </th>
              <th>
                JADWAL KONSUM
              </th>
              <th>
                RESEP DOKTER
              </th>
              <th>
                KETERANGAN
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-info">
              <td>
                1
              </td>
              <td>
                Herman Beck
              </td>
              <td>
                Photoshop
              </td>
              <td>
                $ 77.99
              </td>
              <td>
                May 15, 2015
              </td>
            </tr>
            <tr class="table-warning">
              <td>
                2
              </td>
              <td>
                Messsy Adam
              </td>
              <td>
                Flash
              </td>
              <td>
                $245.30
              </td>
              <td>
                July 1, 2015
              </td>
            </tr>
            <tr class="table-danger">
              <td>
                3
              </td>
              <td>
                John Richards
              </td>
              <td>
                Premeire
              </td>
              <td>
                $138.00
              </td>
              <td>
                Apr 12, 2015
              </td>
            </tr>
            <tr class="table-success">
              <td>
                4
              </td>
              <td>
                Peter Meggik
              </td>
              <td>
                After effects
              </td>
              <td>
                $ 77.99
              </td>
              <td>
                May 15, 2015
              </td>
            </tr>
            <tr class="table-primary">
              <td>
                5
              </td>
              <td>
                Edward
              </td>
              <td>
                Illustrator
              </td>
              <td>
                $ 160.25
              </td>
              <td>
                May 03, 2015
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection