@extends('layouts.navbar')

@section('title', 'Salary')
    
@section('content')
<h2>Leave Permition Data</h2>
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
                <th>Description</th>
                <th>Date Start</th>
                <th>Date End</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($listData as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->employee->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->date_start }}</td>
                <td>{{ $item->date_end }}</td>
                <td> 
                    <a href="/leavepermits/{{ $item->id }}" class="btn btn-primary">Detail</a>  
                    <form action="/leavepermits/{{ $item->id }}" class="d-inline" method="POST">
                        @csrf
                        @method('PUT')
                        {{--  --}}
                        <input type="hidden" name="status" value="2">
                        @if($item->status == "1")
                        <button type="submit" class="btn btn-success" onclick="return confirm('are you sure?');">Confirm</button>
                        @else
                        <button class="btn btn-primary" disabled>Accept</button>
                        @endif
                    </form>     
                    <form action="/leavepermits/{{ $item->id }}" method="post" class="d-inline">
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