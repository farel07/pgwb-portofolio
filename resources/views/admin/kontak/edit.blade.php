@extends('admin.layouts.main')
@section('title', 'Edit Contact')
@section('content-title', 'Edit Contact')
@section('content')
    

<div class="col-lg-6 mt-3">

    <form action="../contact_siswa/{{ $contact_siswa->id }}" method="post">
        @csrf
        @method('put')
        <div class="form-group m">
            <label>Siswa</label>
            <select class="custom-select" name="siswa_id" id="inputGroupSelect04" aria-label="Example select with button addon">
              <option selected value="{{ $contact_siswa->siswa->id }}">{{ $contact_siswa->siswa->nama }}</option>
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
              @if ($c->id == $contact_siswa->contact_id)
              <option selected value="{{ $c->id }}">{{ $c->type }}</option>
              @else
              <option value="{{ $c->id }}">{{ $c->type }}</option>
              @endif
              @endforeach
            </select>
            @error('contact_id')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
    
          <div class="form-group mb-3">
            <label for="project_name">Deskripsi</label>
            <input type="text" value="{{ $contact_siswa->description }}" class="form-control" name="description" id="description" placeholder="Deskripsi">
            @error('description')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
    
          <button type="submit" class="btn btn-primary">Edit</button>
    
    </form>
    
    </div>

@endsection
