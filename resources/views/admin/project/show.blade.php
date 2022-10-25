@if (!$project)
    project hilang
@else
<div class="card-body detail-project">
      <h4>{{ $project->project_name }}</h4>
      <p>{{ $project->description }}</p>
      <small>by. {{ $project->siswa->nama }} last updated {{ $project->date }}</small>    
       <form action="master_project/{{ $project->id }}" method="POST" class="mt-4">
        <a href="master_project/{{ $project->id }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
          @method('delete')
          @csrf
            <button class="btn btn-danger" type="submit" onclick="return confirm('affkh yakin >/<')"><i class="fas fa-trash"></i></button>
  </form>
</div>
@endif
