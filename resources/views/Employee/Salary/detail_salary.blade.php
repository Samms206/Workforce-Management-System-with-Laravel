@extends('layouts.navbar')

@section('title', 'Departements')
    
@section('content')
    <h2>Salary Of {{ $data->employee->name }}</h2>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Email</th>
                <th>Date In</th>
                <th>Position</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($departement->employees as $item) --}}
            <tr>
                <td>
                    {{ $data->employee->email }}
                </td>
                <td>
                    {{ $data->employee->date_in }}
                </td>
                <td>
                    {{ $data->employee->position }}
                </td>
                <td>
                    {{ $data->salary }}
                </td>
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
@endsection