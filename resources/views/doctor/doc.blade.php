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
                    {{-- @php $no = 1 @endphp
                    @foreach($jadwal as $item)
                    <tr>
                      <th scope="row">{{ $no++ }}</th>
                      <td>{{ $item->hari }}</td>
                      <td>{{ date('H : i',strtotime($item->jam_masuk)) }}</td>
                      <td>{{ date('H : i',strtotime($item->jam_pulang)) }}</td>
                      <td>{{ date('d F Y', strtotime($item->tanggal))}}</td>
                    </tr>
                    @endforeach --}} 
                    <tr>
                      <td>hallo</td>
                      <td>hallo</td>
                      <td>hallo</td>
                      <td>hallo</td>
                      <td>hallo</td>
                    </tr>
                    <tr>
                      <th>hello</th>
                      <th>hello</th>
                      <th>hello</th>
                      <th>hello</th>
                      <th>hello</th>
                    </tr>
                  </tbody>
                </table>
              <!-- End Table with stripped rows --><!-- End Reports -->
         

        </div>
        <div class="card-footer">
          {{-- {{ $jadwal->links() }} --}}
        </div>
      </div><!-- End Left side columns -->

    </div>

  </section>

</main><!-- End #main --> 
@endsection