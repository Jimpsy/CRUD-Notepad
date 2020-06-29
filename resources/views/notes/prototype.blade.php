@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3 text-center">Add a Note</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('notes.store') }}">
          @csrf
          <div class="form-group">    
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title" maxlength="35" placeholder="My title..."/>
          </div>

          <div class="form-group">
              <label for="body">Body:</label>
              <textarea type="text" class="form-control" name="body" id="summernote" placeholder="Today im going to..." maxlength="1000"></textarea>
          </div>                    
          <button type="submit" class="btn btn-primary">Add Note</button>
          <a href="{{ route('notes.store') }}" class="btn btn-primary-outline">View Your Stored Notes</a>
      </form>
  </div>
</div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#summernote').summernote();
  });
</script>

@endsection