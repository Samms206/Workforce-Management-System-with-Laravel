@extends('layouts.navbar')

@section('title','Salary Add')

@section('content')
    
    <div class="mt-5  col-6 m-auto">        
        <form action="/salarys/{{ $data->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <label for="employee_id">Employee ID</label>
                <input type="hidden" name="employee_id" value="{{ $data->employee_id }}" class="form-control">
                <input type="text" value="{{ $data->employee->name }}" class="form-control" readonly>
            </div>

            <div class="mb-2">
                <label for="salary">Salary</label>
                <input type="text" name="salary" value="{{ $data->salary }}" class="form-control" required>
            </div>
            <div class="mb-2">
                <label for="date_start">Start Date</label>
                <input type="date" name="date_start" id="date_start" value="{{ $data->date_start }}" class="form-control" required>
            </div>

            <div class="mb-2">
                <label for="date_end">End Date</label>
                <input type="date" name="date_end" id="date_end" value="{{ $data->date_end }}" class="form-control" required>
            </div>

            <div class="mb-2">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
    </div>

@endsection