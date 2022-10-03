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
                      <th scope="col">Jam</th>
                      <th scope="col">Start Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Senin</td>
                      <td>Designer</td>
                      <td>2016-05-25</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Selasa</td>
                      <td>Developer</td>
                      <td>2014-12-05</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Rabu</td>
                      <td>Finance</td>
                      <td>2011-08-12</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Kamis</td>
                      <td>HR</td>
                      <td>2012-06-11</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Jumat</td>
                      <td>Dynamic Division Officer</td>
                      <td>2011-04-19</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Sabtu</td>
                      <td>Dynamic Division Officer</td>
                      <td>2011-04-19</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Minggu</td>
                      <td>Dynamic Division Officer</td>
                      <td>2011-04-19</td>
                    </tr>
                  </tbody>
                </table>
              <!-- End Table with stripped rows --><!-- End Reports -->
         

        </div>
      </div><!-- End Left side columns -->

    </div>

  </section>

</main><!-- End #main --> 
@endsection
