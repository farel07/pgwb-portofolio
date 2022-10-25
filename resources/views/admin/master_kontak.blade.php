@extends('admin.layouts.main')
@section('title', 'Master Kontak')
@section('content-title', 'Master Kontak')
@section('content')
 
<a href="master_kontak/create" class="btn btn-primary mt-3 mb-3">Tambah Kontak</a> <br>

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
                    @foreach ($contact as $c)
                    <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $c->type }}</td>
                    {{-- <td>{{  }}</td> --}}
                    <td>
                        <form action="master_kontak/{{ $c->id }}" method="POST">
                          <a href="master_kontak/{{ $c->id }}" class="btn btn-primary"
                            id="show-detail-project" type="button""><i class="fas fa-eye"></i></a>
                          <a href="master_kontak/{{ $c->id }}/edit" class="btn btn-primary"
                            id="show-detail-project" type="button""><i class="fas fa-edit"></i></a>
                            @method('delete')
                            @csrf
                              <button class="btn btn-danger" onclick="return confirm('affkh yakin >/<')"><i class="fas fa-trash"></i></button>
                    </form>
                    </td>
                  </tr>

                  @endforeach

                </tbody>
              </table>
        </div>
    </div>
</div>

{{-- @foreach ($contact as $c)

{{ $c->siswa->nama }} <a href="master_kontak/{{ $c->id }}">></a><br><a href="master_kontak/{{ $c->id }}/edit">edit</a>
<br>

@endforeach --}}
    
@endsection
