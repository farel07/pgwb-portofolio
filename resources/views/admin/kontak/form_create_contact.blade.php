<form action="/admin/master_kontak/siswa" method="post">
    @csrf
    <div class="form-group m">
        <label>Siswa {{ $siswa->nama }}</label>
        @error('siswa_id')
        <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <input type="hidden" name="siswa_id" value="{{ $siswa->id }}">
      <input type="hidden" name="contact_id" value="{{ $contact_id }}">
      <div class="form-group mb-3">
        <label for="project_name">Deskripsi</label>
        <input type="text" class="form-control" autocomplete="off" name="description" id="description" placeholder="Deskripsi">
        @error('project_name')
        <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Add</button>
      {{-- <a href="/admin/master_project" class="btn btn-danger">Back</a> --}}
</form>