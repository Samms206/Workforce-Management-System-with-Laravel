@extends('layouts.navbar')

@section('title', 'Departements')
    
@section('content')
    <a href="/departements-add" class="btn btn-primary">Add new</a>
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
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
        @foreach ($listDepartements as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td> 
                    <a href="/departements/{{ $item->id }}" class="btn btn-primary">Detail</a>    
                    <a href="/departements-edit/{{ $item->id }}" class="btn btn-success">Edit</a>    
                    <form action="/departements-delete/{{ $item->id }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure delete this data?')">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>    
                    </form>   
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection