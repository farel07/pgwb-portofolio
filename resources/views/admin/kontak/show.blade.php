@extends('admin.layouts.main')
@section('title', 'Show Contact')
@section('content-title', 'Show Contact : ' . $contact->type)
@section('content')

<a href="{{ $contact->id }}/create_contact_siswa" class="btn btn-primary mb-3">Tambah kontak siswa : {{ $contact->type }}</a>
{{-- {{ $contact->siswa }} --}}
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

{{-- {{ $contact->siswa }} --}}
<div class="col-sm-6 mb-4 mt-3">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col" class="anj">Siswa</th>
                    <th scope="col" class="anj">Deskripsi</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($contact->siswa as $cs)
                    <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $cs->nama }}</td>
                    <td>{{ $cs->pivot->description }}</td>
                    {{-- <td>{{  }}</td> --}}
                    <td>
                        {{-- <form action="master_project/{{ $p->id }}" method="POST"> --}}
                          <a href="contact_siswa/{{ $cs->pivot->id }}/edit" class="btn btn-primary"
                            id="show-detail-project" type="button""><i class="fas fa-edit"></i></a>
                            <form action="/admin/master_kontak/contact_siswa/{{ $cs->pivot->id }}" class="d-inline" method="POST">
                                  @method('delete')
                                  <input type="hidden" name="contact" value="{{ $contact->id }}">
                                  @csrf
                                    <button class="btn btn-danger" onclick="return confirm('affkh yakin >/<')"><i class="fas fa-trash"></i></button>
                          </form>
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

@endsection
