@extends('layouts.navbar')

@section('title', 'Departements')
    
@section('content')
    <h2>Departement Of {{ $departement->name }}</h2>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>#</th>
                <th>Employee Name</th>
                <th>Email</th>
                <th>Date In</th>
                <th>Position</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departement->employees as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    {{ $item->name }}
                </td>
                <td>
                    {{ $item->email }}
                </td>
                <td>
                    {{ $item->date_in }}
                </td>
                <td>
                    {{ $item->position }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection