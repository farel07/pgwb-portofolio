@extends('admin.layouts.main')
@section('title', 'Edit Siswa')
@section('content-title', 'Edit Siswa')
@section('content')

<div class="col-md-8">
<form method="POST" action="/admin/master_siswa/{{ $siswa->id }}" enctype="multipart/form-data">
  @csrf
  @method('put')
    <div class="form-group">
      <label for="name">Nama</label>
      <input type="text" class="form-control" id="name" name="nama" placeholder="Nama siswa" value="{{ $siswa->nama }}">
      @error('nama')
       <p class="text-danger">{{ $message }}</p>   
      @enderror
    </div>
    <div class="form-group">
      <label for="nisn">Nisn</label>
      <input type="number" value="{{ $siswa->nisn }}" class="form-control" name="nisn" id="nisn" placeholder="Nisn">
      @error('nisn')
          <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class="form-group">
      <label>Jenis kelamin</label>
      <select class="custom-select" name="jk" id="inputGroupSelect04" aria-label="Example select with button addon">
        <option value="perempuan" @if ($siswa->jk == 'perempuan') selected @endif>perempuan</option>
        <option value="laki-laki" @if ($siswa->jk == 'laki-laki') selected @endif>laki-laki</option>
      </select> 
      @error('jk')
      <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class="form-group mb-3">
      <label for="alamat">Alamat</label>
      <input type="text" class="form-control" value="{{ $siswa->alamat }}" name="alamat" id="alamat" placeholder="Alamat">
      @error('alamat')
      <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class="form-group mb-3">
      <label for="">Picture</label>
      @if ($siswa->photo)
      <input type="hidden" value="{{ $siswa->photo }}" name="oldImage">
      <img src="/storage/{{ $siswa->photo }}" width="100px" class="d-block" alt="">
      @endif
      @error('photo')
      <p class="text-danger">{{ $message }}</p>
      @enderror
      <div class="custom-file">
        <input type="file" class="custom-file-input" name="photo" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" value="{{ $siswa->email }}" name="email" id="exampleInputEmail1" placeholder="Email">
      @error('email')
      <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class="form-group">
        <label for="about">About</label>
        <textarea class="form-control" name="about" id="about" rows="3">{{ $siswa->about }}</textarea>
      @error('about')
      <p class="text-danger">{{ $message }}</p>
      @enderror
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/admin/master_siswa" class="btn btn-danger">Back</a>
  </form>
</div>


@endsection
