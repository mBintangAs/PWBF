@extends('doctor/layouts/docmain')
@section('contain')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/doc">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="container">
        <div class="row">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Jadwal Dokter</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Jam Masuk</th>
                    <th scope="col">Jam Pulang</th>
                    <th scope="col">Tanggal</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Senin</td>
                    <td>09.00</td>
                    <td>13.00</td>
                    <td>2022-10-10</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Selasa</td>
                    <td>12.00</td>
                    <td>15.00</td>
                    <td>2022-10-11</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Rabu</td>
                    <td>08.00</td>
                    <td>12.00</td>
                    <td>2022-10-12</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Kamis</td>
                    <td>10.00</td>
                    <td>14.00</td>
                    <td>2022-10-13</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Jumat</td>
                    <td>09.00</td>
                    <td>14.00</td>
                    <td>2022-10-14</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Sabtu</td>
                    <td>08.00</td>
                    <td>13.00</td>
                    <td>2022-10-15</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>Minggu</td>
                    <td>09.00</td>
                    <td>12.00</td>
                    <td>2022-10-16</td>
                  </tr>
                </tbody>
              </table>
         

        </div>
        <div class="card-footer">
          {{-- {{ $jadwal->links() }} --}}
        </div>
      </div><!-- End Left side columns -->

    </div>

  </section>

</main><!-- End #main --> 
@endsection