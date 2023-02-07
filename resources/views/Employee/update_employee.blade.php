@extends('layouts.navbar')

@section('title','Employee Add')

@section('content')
    
    <div class="mt-5  col-6 m-auto">        
        <form action="/employees/{{ $employee->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $employee->name }}" required>
            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" value="{{ $employee->email }}" required>
            </div>

            <label for="datepicker">Date In</label>
            <div class="row form-group">
                <div class="col-sm-12">
                    <div class="input-group date" id="datepicker">
                        <input type="text" class="form-control" name="date_in" id="date_in" value="{{ $employee->date_in }}" required>
                        <span class="input-group-append">
                            <span class="input-group-text bg-white">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(function() {
                    $('#datepicker').datepicker();
                });
            </script>
            
            <div class="mb-3">
                <label for="departemen">Departement</label>
                <select name="departement_id" id="departemen" class="form-control">
                    <option value="{{ $employee->departement->id }}">{{ $employee->departement->name }}</option>
                    @foreach ($listDepartement as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="position">Position</label>
                <input type="text" name="position" id="position" class="form-control" value="{{ $employee->position }}" required>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
    </div>

@endsection