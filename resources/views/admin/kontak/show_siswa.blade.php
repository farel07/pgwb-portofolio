@extends('admin.layouts.main')
@section('title', 'Show Contact')
@section('content-title', 'Add Siswa Contact : ' . $contact->type)
@section('content')
<div class="row">
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
                    <td><button class="btn btn-primary" onclick="show_form_contact_siswa({{ $s->id }}, {{ $contact->id }})"
                        id="show-detail-project" type="button""><i class="fas fa-plus"></i></button></td>
                    {{-- <td>{{  }}</td> --}}
                  </tr>

                  @endforeach

                </tbody>
              </table>
              
        </div>
    </div>
</div>

<div class="col-sm-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body show-form">
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
    function show_form_contact_siswa(id, contact_id){
        $.get('/admin/master_kontak/' + contact_id + '/create/' + id, function(data){
    $('.show-form').html(data);
  })
    }
</script>
@endsection