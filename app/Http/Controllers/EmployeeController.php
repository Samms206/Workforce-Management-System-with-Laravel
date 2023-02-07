<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Departement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        $data = Employee::with('departement')->get();
        return view('Employee\employee',['listEmployees' => $data]);
    }

    public function create()
    {
        $data = Departement::all();
        return view('Employee\add_employee', ['listDepartement' => $data]);
    }

    public function store(Request $request)
    {
        // membuat password random
        $hash = Hash::make($request->password);
        $request['password'] = $hash;
        //
        Employee::create($request->all());
        return redirect('/employees');
    }

    public function edit($id)
    {
        $data = Employee::with('departement')->findOrFail($id);
        $departement = Departement::where('id', '!=', $data->departement_id)->get(['id','name']);

        return view('Employee\update_employee', ['employee'=>$data, 'listDepartement'=>$departement]);
    }

    public function update(Request $request, $id)
    {
        $data = Employee::findOrFail($id);
        $data->update($request->all());
        return redirect('/employees');
    }

    public function delete($id)
    {
        $data = Employee::findOrFail($id);
        $data->delete();
        return redirect('/employees');

    }
}
