@extends('layouts.navbar')

@section('title', 'Attendences')
    
@section('content')

    <form action="/attendences" method="post">
        @csrf
        <h2>Welcome Employee</h2>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {{--  --}}
        @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
        @endif
        <div class="form-group">
            <input type="hidden" class="form-control" id="employee_id" name="employee_id" value="{{ Auth::user()->id }}">
        </div>
        <div class="form-group">
            <input type="hidden" id="date" name="date"  class="form-control" >
        </div>
        <script>
            function updateDate() {
                var now = new Date();
                var day = now.getDate();
                var month = now.getMonth() + 1;
                var year = now.getFullYear();
                if (day < 10) {
                    day = '0' + day;
                }
                if (month < 10) {
                    month = '0' + month;
                }
                document.getElementById('date').value = year + '-' + month + '-' + day;
            }
            updateDate();
        </script>
        <div class="form-group">
            <input type="hidden" class="form-control" id="clock_in" name="clock_in" readonly>
        </div>
        <script>
            function updateTime() {
                var now = new Date();
                var hours = now.getHours();
                var minutes = now.getMinutes();
                var seconds = now.getSeconds();
                if (hours < 10) {
                    hours = '0' + hours;
                }
                if (minutes < 10) {
                    minutes = '0' + minutes;
                }
                // if (seconds < 10) {
                //     seconds = '0' + seconds;
                // }
                document.getElementById('clock_in').value = hours + ':' + minutes;
            }
            setInterval(updateTime, 1000);
        </script>
        <div class="form-group">
            <label for="description">Description</label>
            <select name="description" id="description" class="form-control">
                <option value="Login">Login</option>
                <option value="Permit">Permit</option>
                <option value="Sick">Sick</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="clock_out">Clock Out</label>
            <input type="time" class="form-control" id="clock_out" name="clock_out">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection