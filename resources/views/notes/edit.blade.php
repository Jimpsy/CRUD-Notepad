@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Note</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('notes.update', $note->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" maxlength="35" value={{ $note->title }} />
            </div>

            <div class="form-group">
                <label for="body">Body:</label>
                <textarea type="text" class="form-control" name="body" maxlength="1000">{{ $note->body }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Note</button>
        </form>
    </div>
</div>
@endsection