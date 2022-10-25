@extends('admin.layouts.main')
@section('title', 'Master Siswa')
@section('content-title', 'Master Siswa')
@section('content')

<a href="{{route('master_siswa.create')}}" class="btn btn-success mt-3 mb-3">Create siswa</a>
@if (session()->has('success'))
    <p class="text-primary">{{ session('success') }}</p>
@endif
       <!-- Earnings (Monthly) Card Example -->
       <div class="col-sm-12 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($siswa as $s)
                      
                        <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $s->nama }}</td>
                        <td>{{ $s->nisn }}</td>
                        <td>{{ $s->jk }}</td>
                        <td>{{ $s->email }}</td>
                        <td>
                            <form action="master_siswa/{{ $s->id }}" method="POST">
                              <a href="master_siswa/{{ $s->id }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                              <a href="master_siswa/{{ $s->id }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
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



@endsection
