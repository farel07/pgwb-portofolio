<form action="/admin/master_project" method="post">
        @csrf
        <div class="form-group m">
            <label>Siswa {{ $siswa->nama }}</label>
            @error('siswa_id')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <input type="hidden" name="siswa_id" value="{{ $siswa->id }}">
          <div class="form-group mb-3">
            <label for="project_name">Nama Projek</label>
            <input type="text" class="form-control" autocomplete="off" name="project_name" id="project_name" placeholder="Nama projek">
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
    </form>