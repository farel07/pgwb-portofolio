@extends('admin.layouts.main')
@section('title', 'Edit Contact')
@section('content-title', 'Edit Contact')
@section('content')
    

<div class="col-lg-6 mt-3">

    <form action="../{{ $contact->id }}" method="post">
        @csrf
        @method('put')
          
        <div class="form-group m">
          <div class="form-group mb-3">
            <label for="project_name">Contact type</label>
            <input type="text" value="{{ $contact->type }}" class="form-control" name="type" id="type" placeholder="Tipe kontak">
            @error('type')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
    
          <button type="submit" class="btn btn-primary">Edit</button>
    
    </form>
    
    </div>
</div>

@endsection
