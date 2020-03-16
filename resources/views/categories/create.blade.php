@extends('categories.layout')
@section('content')
<div>
    <div>
        <div>
            <h2>Create New Category</h2>
        </div>
        <div>
            <a href="{{ route('categories.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div>
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div>
            <div>
                <div>
                    <strong>Name:</strong>
                    <input type="text" name="name" placeholder="name">
                </div>
            <div>
              <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </div>
   
</form>
@endsection