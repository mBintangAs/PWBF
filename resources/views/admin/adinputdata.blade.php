@extends('admin.admain')
@section('content')
@include('admin.partial.sidebarad')
<div class="container-fluid">

<div class="row">


<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Data Pasien</h4>
      <label for="exampleInputPassword4">POLI</label>
      <select class="form-control" style="border-radius: 30px">
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
          <label for="exampleInputName1">ID Pasien</label>
          <input type="text" class="form-control" id="exampleInputName1">
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
          <label for="exampleInputPassword4">Jenis Kelamis</label>
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

<div class="card shadow col-md-6 grid-margin stretch-card">
  <div class="card-body">
  <h4 class="card-title">Edit Data Dokter</h4>
  <label for="exampleInputPassword4">POLI</label>
      <select class="form-control" style="border-radius: 30px">
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
      <label for="exampleInputPassword4">Asal Puskesmas</label>
      <input type="password" class="form-control" id="exampleInputPassword4">
    </div>
    <button type="submit" class="btn btn-success mr-2">Submit</button>
    <button class="btn btn-light">Cancel</button>
  </form>
</div>

</div>
</div>
@endsection