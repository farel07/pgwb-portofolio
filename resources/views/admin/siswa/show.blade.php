@extends('admin.layouts.main')
@section('title', 'Master Siswa')
@section('content-title', 'Detail Siswa')
@section('content')
    
<div class="row mt-3">
    {{-- {{ $siswa }} --}}
    <div class="col-lg-3">
        <div class="card border-dark" style="width: 16rem;">
            <img src="/{{ $siswa->photo }}" class="card-img-top" alt="...">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama : {{ $siswa->nama }}</li>
                    <li class="list-group-item">NISN : {{ $siswa->nisn }}</li>
                    <li class="list-group-item">Jenis Kelamin : {{ $siswa->jk }}</li>
                    <li class="list-group-item">Email : {{ $siswa->email }}</li>
                    <li class="list-group-item">Alamat : {{ $siswa->alamat }}</li>
                  </ul>
            </div>
          </div>
    </div>
    <div class="col-lg-9">
        <div class="card border-dark">
            <div class="card-body">
                <div class="card-header border-dark"><h5>About me</h5></div>
                <p class="card-text mt-3">{{ $siswa->about }}</p>
              </div>
        </div>
        <div class="card border-dark mt-3">
            <div class="card-body">
                <div class="card-header border-dark"><h5>Project</h5></div>
                <ul class="list-group list-group-flush">
                    @foreach ($siswa->project as $sp)
                    <li class="list-group-item"><p class="card-text mt-2">{{ $sp->project_name }} || {{ $sp->date }} ||  <a href="/admin/master_project/{{ $sp->id }}" class="btn btn-sm"><i class="fas fa-eye"></i></a> <a href=""></a></p></li>
                    @endforeach
                </ul>
              </div>
        </div>
    </div>
</div>

<div class="card border-dark mt-3">
    <div class="card-body">
        <div class="card-header border-dark"><h5>Contact</h5></div>
        <ul>
            @foreach ($siswa->contact as $sc)
            <li><p class="mt-3">{{ $sc->type }} : {{ $sc->pivot->description }}</p></li>
            @endforeach
        </ul> 
    </div>
</div>

@endsection
