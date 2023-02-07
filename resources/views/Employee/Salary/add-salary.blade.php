@extends('layouts.navbar')

@section('title','Salary Add')

@section('content')
    
    <div class="mt-5  col-6 m-auto">        
        <form action="/salarys" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <label for="employee_id">Employee</label>
                <select name="employee_id" id="" class="form-control">pilih
                    @foreach($listEmployee as $data)
                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-2">
                <label for="salary">Salary</label>
                <input type="text" name="salary" id="email" class="form-control" required>
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
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>

@endsection