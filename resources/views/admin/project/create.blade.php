@extends('admin.layouts.main')
@section('title', 'Create Projek')
@section('content-title', 'Create Project')
@section('content')

  <div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-sm-6 mb-4 mt-3">

        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col" class="anj">Siswa</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $s)
                        <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $s->nama }}</td>
                        {{-- <td>{{  }}</td> --}}
                        <td>
                            {{-- <form action="master_project/{{ $p->id }}" method="POST"> --}}
                              <button class="btn btn-primary" onclick="show_form_project({{ $s->id }})"
                                id="show-detail-project" type="button""><i class="fas fa-plus"></i></button>
                              {{-- <a href="master_project/{{ $p->id }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                @method('delete')
                                @csrf
                                  <button class="btn btn-danger" onclick="return confirm('affkh yakin >/<')"><i class="fas fa-trash"></i></button>
                        </form> --}}
                        </td>
                      </tr>
    
                      @endforeach
    
                    </tbody>
                  </table>
            </div>
        </div>
    </div>


    <div class="col-sm-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body detail-project">
          <small>form create project akan tampil disini</small>
            @if ($errors->any())
            @foreach ($errors->all() as $error)
                
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $error }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            
            @endforeach
        @endif
          </div>
      </div>
    </div>
    
  </div>

  <script>

    function show_form_project(id){
      $.get('/admin/master_project/' + id + '/create', function(data){
    $('.detail-project').html(data);
  })
    }

  </script>

    {{-- <form action="/admin/master_project" method="post">
        @csrf
        <div class="form-group m">
            <label>Siswa</label>
            <select class="custom-select" name="siswa_id" id="inputGroupSelect04" aria-label="Example select with button addon">
              <option selected value="">Nama siswa</option>
              @foreach ($siswa as $s)
              <option value="{{ $s->id }}">{{ $s->nama }}</option>
              @endforeach
            </select>
            @error('siswa_id')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>

          <div class="form-group mb-3">
            <label for="project_name">Nama Projek</label>
            <input type="text" class="form-control" name="project_name" id="project_name" placeholder="Nama projek">
            @error('project_name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>

          <div class="form-group mb-3">
            <label for="description">Deskripsi</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            @error('description')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
          <a href="/admin/master_project" class="btn btn-danger">Back</a>
    </form> --}}
  
    
@endsection
