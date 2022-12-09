@extends('admin.admain')
@section('content')
@include('admin.partial.sidebarad')
<div class="container-fluid">

<div class="row">


<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body pt-3">
      <!-- Bordered Tabs -->
      <ul class="nav nav-tabs nav-tabs-bordered">
  
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Cari</button>
        </li>
  
      </ul>
      <div class="tab-content pt-2">
        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
        
          <!-- Pencarian berdasarkan nama form -->
        <form action="" method="post">
          @csrf
            <div class="row mb-3">
                <label for="fullName" class="col-md-4 col-lg-3 ">Nama Lengkap</label>
                <div class="col-md-8">
                  <select class="form-control" name="nama">
                    <option value="0">Pilih Nama</option>
                    @foreach ($pasien as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
  
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Cari</button>
            </div>
         </form>

            <!-- End Pencarian berdasarkan nama form  -->
  
        </div>
  
      </div><!-- End Bordered Tabs -->
  
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Data Pasien</h4>
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
     
      <form class="forms-sample">
        <div class="form-group">
          <div class="mt-3 form-group">
          <label for="exampleInputName1">ID Pasien</label>
          <input type="text" class="form-control" id="exampleInputName1">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail3">Nama Pasien</label>
          <input type="email" class="form-control" id="exampleInputEmail3">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">Umur</label>
          <input type="password" class="form-control" id="exampleInputPassword4">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">Jenis Kelamin</label>
          <input type="password" class="form-control" id="exampleInputPassword4">
        </div>
        <div class="form-group">
          <label for="exampleInputCity1">No Telepon</label>
          <input type="text" class="form-control" id="exampleInputCity1">
        </div>
        <div class="form-group">
          <label for="exampleInputCity1">Alamat</label>
          <input type="text" class="form-control" id="exampleInputCity1">
        </div>
        <button type="submit" class="btn btn-success mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div>

<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body pt-3">
      <!-- Bordered Tabs -->
      <ul class="nav nav-tabs nav-tabs-bordered">
  
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit2">Cari</button>
        </li>
  
      </ul>
      <div class="tab-content pt-2">
        <div class="tab-pane fade profile-edit pt-3" id="profile-edit2">
        
          <!-- Pencarian berdasarkan nama form -->
        <form action="" method="post">
          @csrf
            <div class="row mb-3">
                <label for="fullName" class="col-md-4 col-lg-3 ">Nama Lengkap</label>
                <div class="col-md-8">
                  <select class="form-control" name="nama">
                    <option value="0">Pilih Nama</option>
                    @foreach ($pasien as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
  
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Cari</button>
            </div>
         </form>

            <!-- End Pencarian berdasarkan nama form  -->
  
        </div>
  
      </div><!-- End Bordered Tabs -->
  
    </div>
  </div>
  <div class="card card-body">
  <h4 class="card-title">Edit Data Dokter</h4>
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
 
  <form class="forms-sample">
    <div class="mt-3 form-group">
      <label for="exampleInputName1">ID Dokter</label>
      <input type="text" class="form-control" id="exampleInputName1">
    </div>
    <div class="mt-3 form-group">
      <label for="exampleInputEmail3">Nama Dokter</label>
      <input type="email" class="form-control" id="exampleInputEmail3">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword4">Alamat</label>
      <input type="password" class="form-control" id="exampleInputPassword4">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword4">Email</label>
      <input type="password" class="form-control" id="exampleInputPassword4">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword4">No Telepon</label>
      <input type="password" class="form-control" id="exampleInputPassword4">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword4">Spesialis</label>
      <input type="password" class="form-control" id="exampleInputPassword4">
    </div>
    <button type="submit" class="btn btn-success mr-2">Submit</button>
    <button class="btn btn-light">Cancel</button>
  </form>
</div>

</div>
</div>
@endsection