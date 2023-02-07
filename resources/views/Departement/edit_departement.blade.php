@extends('layouts.navbar')

@section('title','Departement Add')

@section('content')
    
    <div class="mt-5  col-6 m-auto">        
        <form action="/departements/{{ $departement->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $departement->name }}" required >
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
    </div>

@endsection