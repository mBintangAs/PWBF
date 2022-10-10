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

    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card shadow">
          <div class="card-body">
            <h4 class="card-title">Dashboard Admin</h4>
            <table class="table">
              <thead>
                <tr>
                  <th>DOKTER</th>
                  <th>POLI</th>
                  <th>HARI/TANGGAL</th>
                  <th>STATUS</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Jacob</td>
                  <td>Umum</td>
                  <td>12 May 2017</td>
                  <td><label class="badge badge-danger">Pending</label></td>
                </tr>
                <tr>
                  <td>Messsy</td>
                  <td>Mata</td>
                  <td>15 May 2017</td>
                  <td><label class="badge badge-warning">In progress</label></td>
                </tr>
                <tr>
                  <td>John</td>
                  <td>Gigi</td>
                  <td>14 May 2017</td>
                  <td><label class="badge badge-info">Fixed</label></td>
                </tr>
                <tr>
                  <td>Peter</td>
                  <td>Kandungan</td>
                  <td>16 May 2017</td>
                  <td><label class="badge badge-success">Completed</label></td>
                </tr>
                <tr>
                  <td>Dave</td>
                  <td>Penyakit Dalam</td>
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
            <h4 class="card-title">Dashboard Admin</h4>
            <table class="table">
              <thead>
                <tr>
                  <th>DOKTER</th>
                  <th>POLI</th>
                  <th>HARI/TANGGAL</th>
                  <th>STATUS</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Jacob</td>
                  <td>Umum</td>
                  <td>12 May 2017</td>
                  <td><label class="badge badge-danger">Pending</label></td>
                </tr>
                <tr>
                  <td>Messsy</td>
                  <td>Mata</td>
                  <td>15 May 2017</td>
                  <td><label class="badge badge-warning">In progress</label></td>
                </tr>
                <tr>
                  <td>John</td>
                  <td>Gigi</td>
                  <td>14 May 2017</td>
                  <td><label class="badge badge-info">Fixed</label></td>
                </tr>
                <tr>
                  <td>Peter</td>
                  <td>Kandungan</td>
                  <td>16 May 2017</td>
                  <td><label class="badge badge-success">Completed</label></td>
                </tr>
                <tr>
                  <td>Dave</td>
                  <td>Penyakit Dalam</td>
                  <td>20 May 2017</td>
                  <td><label class="badge badge-warning">In progress</label></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    
</body>
@endsection