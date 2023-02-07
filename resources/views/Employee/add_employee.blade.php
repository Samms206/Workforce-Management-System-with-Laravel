@extends('layouts.navbar')

@section('title','Employee Add')

@section('content')
    
    <div class="mt-5  col-6 m-auto">        
        <form action="/employees" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required >
            </div>

            <div class="mb-2">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" required>
            </div>

            <label for="datepicker">Date In</label>
            <div class="row form-group">
                <div class="col-sm-12">
                    <div class="input-group date" id="datepicker">
                        <input type="text" class="form-control" name="date_in" id="date_in">
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
            
            <div class="mb-2">
                <label for="departemen">Departement</label>
                <select name="departement_id" id="departemen" class="form-control" required>
                    <option value="">Pilih salah satu</option>
                    @foreach ($listDepartement as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-2">
                <label for="password">Password</label>
                <input type="text" name="password" id="password" class="form-control" required>
                <input type="hidden" name="role" value="2">
            </div>

            <div class="mb-2">
                <label for="position">Position</label>
                <input type="text" name="position" id="position" class="form-control" required>
            </div>

            <div class="mb-2">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>

@endsection