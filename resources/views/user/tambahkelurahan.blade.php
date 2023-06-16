@extends('template')

@section('content')
    <div class="container">
        <div class="row">
          <div class="col-md-6">
            <form action="" method="post">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Kelurahan</label>
                <input type="text" name="nama_kelurahan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama Kecamatan</label>
                <input type="text" name="nama_kecamatan" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama Kota</label>
                <input type="text" name= "nama_kota" class="form-control" id="exampleInputPassword1">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
      </div>
    </div>
@endsection