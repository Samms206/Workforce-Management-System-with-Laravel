@extends('layouts.navbar')

@section('title','Departement Add')

@section('content')
    
    <div class="mt-5  col-6 m-auto">        
        <form action="/departements" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required >
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>

@endsection