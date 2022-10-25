@extends('admin.layouts.main')
@section('title', 'Edit Projek')
@section('content-title', 'Edit Projek')
@section('content')
  
<div class="col-sm-8">

    <form action="/admin/master_project/{{ $project->id }}" method="post">
        @csrf
        @method('put')
        <div class="form-group m">
            <label>Siswa</label>
            <select class="custom-select" name="siswa_id" id="inputGroupSelect04" aria-label="Example select with button addon">
              <option selected value="">Nama siswa</option>
              @foreach ($siswa as $s)

              @if ($project->siswa_id == $s->id)
              <option value="{{ $s->id }}" selected>{{ $s->nama }}</option>
              @else
              <option value="{{ $s->id }}">{{ $s->nama }}</option>
              @endif

              @endforeach
            </select>
            @error('siswa_id')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>

          <div class="form-group mb-3">
            <label for="project_name">Nama Projek</label>
            <input type="text" class="form-control" name="project_name" id="project_name" placeholder="Nama projek" value="{{ $project->project_name }}">
            @error('project_name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>

          <div class="form-group mb-3">
            <label for="description">Deskripsi</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{ $project->description }}</textarea>
            @error('description')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="/admin/master_project" class="btn btn-danger">Back</a>
    </form>

</div>
    
@endsection
