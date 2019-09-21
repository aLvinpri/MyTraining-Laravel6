 @extends('layouts.main')

@section('title', 'Form Add Student')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1 class="mt-3">Form Add Student!</h1>
        <form @method(post) action="">
          <div class="form-group">
            <label for="formGroupExampleInput">Example label</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Another label</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection