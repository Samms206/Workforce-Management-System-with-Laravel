@extends('layouts.navbar')

@section('title','Leavepermit Add')

@section('content')
    
    <div class="mt-5  col-6 m-auto">        
        <form action="/leavepermits" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" required>
            </div>
            <div class="mb-2">
                <label for="date_start">Start Date</label>
                <input type="date" name="date_start" id="date_start" class="form-control" required>
            </div>

            <div class="mb-2">
                <label for="date_end">End Date</label>
                <input type="date" name="date_end" id="date_end" class="form-control" required>
            </div>

            <div class="mb-2">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>

@endsection