@extends('layouts.frontend')
@section('content')
<main>
  <div class="container form">
    <div class="row h-100 justify-content-center">
      <div class="col-9 mt-5">
          <h2 class="centered">New Project</h2>
          <form role="form" class="new_project" id="new_project" action="{{ url('insert-project') }}" accept-charset="UTF-8" method="POST"><input type="hidden" name="authenticity_token" value="zVFW8zJpHI9k9/bP9yPoieU1/9NjRgw4M09qpT6RnZhoQlDqrxWFEtouiuLe96vq3LE98p9yPbwcQ4R+3W7KKQ==">
    @csrf
          <div class="form-group"><label class="text-muted required" for="project_name">Name</label><input class="form-control" type="text" name="name" id="project_name"></div>
    <div class="form-group"><label class="text-muted" for="project_description">Description</label><textarea class="form-control" name="description" id="project_description"></textarea></div>
    <div class="centered mt-5">
      <input type="submit" name="commit" value="Create Project" class="btn btn-secondary" data-disable-with="Create Project">
    </div>
</form>
      </div>
    </div>
  </div>
</main>
@endsection
