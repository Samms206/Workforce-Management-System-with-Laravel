@extends('layouts.navbar')

@section('title', 'Salary')
    
@section('content')
    <a href="/salary-add" class="btn btn-primary">Add new</a>
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
                <th>Employee_ID</th>
                <th>Salary</th>
                <th>Date Start</th>
                <th>Date End</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($listSalarys as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->employee->name }}</td>
                <td>{{ $item->salary }}</td>
                <td>{{ $item->date_start }}</td>
                <td>{{ $item->date_end }}</td>
                <td> 
                    <a href="/salarys/{{ $item->id }}" class="btn btn-primary">Detail</a>    
                    <a href="/salary-edit/{{ $item->id }}" class="btn btn-success">Edit</a>    
                    <form action="/salarys/{{ $item->id }}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure?')">Delete</button>
                    </form>  
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection