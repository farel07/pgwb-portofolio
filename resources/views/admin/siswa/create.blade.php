@extends('admin.layouts.main')
@section('title', 'Create Siswa')
@section('content-title', 'Create Data Siswa')
@section('content')
    <hr>
<div class="col-md-8">
<form method="POST" action="/admin/master_siswa" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="name">Nama</label>
      <input type="text" class="form-control" id="name" name="nama" placeholder="Nama siswa">
      @error('nama')
       <p class="text-danger">{{ $message }}</p>   
      @enderror
    </div>
    <div class="form-group">
      <label for="nisn">Nisn</label>
      <input type="number" class="form-control" name="nisn" id="nisn" placeholder="Nisn">
      @error('nisn')
          <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class="form-group">
      <label>Jenis kelamin</label>
      <select class="custom-select" name="jk" id="inputGroupSelect04" aria-label="Example select with button addon">
        <option selected value="">Jenis kelamin</option>
        <option value="laki-laki">laki-laki</option>
        <option value="perempuan">perempuan</option>
      </select>
      @error('jk')
      <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class="form-group mb-3">
      <label for="alamat">Alamat</label>
      <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
      @error('alamat')
      <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    @error('photo')
      <p class="text-danger">{{ $message }}</p>
      @enderror
    <div class="form-group mb-3">
      <label for="">Picture</label>
      <img class="image-preview img-fluid mb-3 col-md-5">
      <div class="custom-file">
        <input type="file" class="custom-file-input" onchange="image_preview()" name="photo" id="image" aria-describedby="inputGroupFileAddon01">
        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
      @error('email')
      <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class="form-group">
        <label for="about">About</label>
        <textarea class="form-control" name="about" id="about" rows="3"></textarea>
      @error('about')
      <p class="text-danger">{{ $message }}</p>
      @enderror
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/admin/master_siswa" class="btn btn-danger">Back</a>
  </form>
</div>

@endsection

<script>
      // function untuk image preview
  function image_preview(){

const image = document.querySelector('#image');
const image_preview = document.querySelector('.image-preview');
// ubah style image menjadi block
image_preview.style.display = 'block';

const ofReader = new FileReader();
ofReader.readAsDataURL(image.files[0]);

ofReader.onload = function(oFREvent){
  image_preview.src = oFREvent.target.result;
}
}
</script>
