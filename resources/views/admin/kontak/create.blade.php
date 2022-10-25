@extends('admin.layouts.main')
@section('title', 'Create Contact')
@section('content-title', 'Create Contact')
@section('content')
 
<div class="col-lg-6 mt-3">

<form action="../master_kontak" method="post">
    @csrf
    {{-- <div class="form-group m">
        <label>Siswa</label>
        <select class="custom-select siswa" name="siswa_id" id="inputGroupSelect04" aria-label="Example select with button addon">
          <option selected value="">Nama siswa</option>
          @foreach ($siswa as $s)
          <option value="{{ $s->id }}">{{ $s->nama }}</option>
          @endforeach
        </select>
        @error('siswa_id')
        <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      
    <div class="form-group m">
        <label>Kontak</label>
        <select class="custom-select" name="contact_id" id="inputGroupSelect04" aria-label="Example select with button addon">
          <option selected value="">Jenis Kontak</option>
          @foreach ($contact as $c)
          <option value="{{ $c->id }}">{{ $c->type }}</option>
          @endforeach
        </select>
        @error('contact_id')
        <p class="text-danger">{{ $message }}</p>
        @enderror
      </div> --}}

      <div class="form-group mb-3">
        <label for="project_name">Contact type</label>
        <input type="text" class="form-control" name="type" id="description" placeholder="jenis kontak" autocomplete="off">
        @error('type')
        <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary">Add</button>

</form>

</div>

<script>

</script>

@endsection
