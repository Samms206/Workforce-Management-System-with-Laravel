@extends('layouts.navbar')

@section('title', 'Employee')
    
@section('content')
    <a href="/#" class="btn btn-primary">Print Report</a>
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
                <th>Employee Name</th>
                <th>Date</th>
                <th>Clock In</th>
                <th>Clock Out</th>
                <th>Description</th>
                {{-- <th>Action</th> --}}
            </tr>
        </thead>
        <tbody>
        @foreach ($listAttendences as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->employee->name }}</td>
                <td>{{ $item->date }}</td>
                <td>{{ $item->clock_in }}</td>
                <td>{{ $item->clock_out }}</td>
                <td>{{ $item->description }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection