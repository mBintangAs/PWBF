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
           
        
                <table class="table">
                  <thead>
                    <tr>
                      <th>HARI</th>
                      <th>PUKUL</th>
                      <th>TANGGAL</th>
                      {{-- <th>STATUS</th> --}}
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($jadwaldokter as $item)
                    <tr>
                      <td>{{ $item->hari }}</td>
                      <td>{{ date('H:i',strtotime($item->jam_masuk) ) }} - {{ date('H:i',strtotime($item->jam_pulang)) }}</td>
                      <td>{{ $item->tanggal }}</td>
                      {{-- <td><label class="badge badge-danger">Pending</label></td> --}}
                    </tr>
                    @endforeach
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


        
      
    
</body>
@endsection