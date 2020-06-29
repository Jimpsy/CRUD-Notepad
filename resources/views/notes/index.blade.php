@extends('base')

@section('main')

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3 text-center">Your Notes</h1>  
  <div>
    <a style="margin: 19px;" href="{{ route('notes.create')}}" class="btn btn-primary">Add Note</a>
  </div>    

  <div class="container">
    <div class="card-deck">
    @foreach($notes as $note)
        <div class="col-sm-4">
            <div class="card-columns-fluid">
                <div class="card bg-light" style ="height: 400px; width: 22rem; margin: 10px;">
                  <div class="card-header">
                    <h5 class="card-title">{{$note->title}}</h5>
                  </div>
                    <div class="card-body" style="overflow: auto;">
                        <p class="card-text">{{$note->body}}</p>
                    </div>
                    <div class="card-footer">
                      <a href="{{ route('notes.edit',$note->id)}}" class="btn btn-primary card-link">Edit</a>

                      <form action="{{ route('notes.destroy', $note->id)}}" method="post" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                      <button class="btn btn-danger card-link" type="submit">Delete</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>


<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

@endsection