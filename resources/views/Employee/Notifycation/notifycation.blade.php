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
                <th>Desc</th>
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
                    @if($item->status == "1")
                        <a href="#" style="color: darkorange">Pending</a>
                    @else
                        <a href="#" style="color: rgb(0, 161, 0)">Accept</a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection