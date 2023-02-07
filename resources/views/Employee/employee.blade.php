@extends('layouts.navbar')

@section('title', 'Employee')
    
@section('content')
    <a href="/employees-add" class="btn btn-primary">Add new</a>
    {{-- form Search --}}
    <div class="my-3 col-12 col-sm-8 col-md-5">
        <form action="" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="keyword" placeholder="keyword">
                <button class="input-group-text btn btn-primary">Search</button>
            </div>
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Date In</th>
                <th>Departement</th>
                <th>Position</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
        @foreach ($listEmployees as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->date_in }}</td>
                <td>{{ $item->departement->name }}</td>
                <td>{{ $item->position }}</td>
                <td> 
                    <a href="/employees-edit/{{ $item->id }}" class="btn btn-success">Edit</a>  
                    <form action="/employees-delete/{{ $item->id }}" method="post" class="d-inline" onsubmit="return confirm('delete this data?')">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>    
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection