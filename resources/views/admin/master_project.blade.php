@extends('admin.layouts.main')
@section('title', 'Master Projek')
@section('content-title', 'Master Projek')
@section('content')

@if (session()->has('success'))
<div class="col-8">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
         {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
</div>
@endif
<a href="master_project/create" class="btn btn-primary mb-3">add new project</a><br>

<div class="row">
<!-- Earnings (Monthly) Card Example -->
<div class="col-sm-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col" class="anj">Project Name</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($project as $p)
                    <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $p->project_name }}</td>
                    {{-- <td>{{  }}</td> --}}
                    <td>
                        {{-- <form action="master_project/{{ $p->id }}" method="POST"> --}}
                          <button class="btn btn-primary" onclick="show_detail_project({{ $p->id }})"
                            id="show-detail-project" type="button""><i class="fas fa-eye"></i></button>
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
          <small>detail project akan tampil disini</small>
      </div>
  </div>
</div>

</div>

<script>

function show_detail_project(id){
  $.get('/admin/master_project/' + id, function(data){
    $('.detail-project').html(data);
  })
}

</script>
    
@endsection
