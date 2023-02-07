<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function index()
    {
        $data = Salary::with('employee')->get();
        // dd($data);
        return view('Employee\Salary\salary', ['listSalarys' => $data]);
    }
    public function create()
    {
        $data = Employee::all();
        return view('Employee.Salary.add-salary', ['listEmployee' => $data]);
    }
    public function store(Request $request)
    {
        Salary::create($request->all());
        return redirect('/salarys');
    }
    public function show($id)
    {
        $data = Salary::with('employee')->findOrFail($id);
        return view('Employee.Salary.detail_salary', ['data' => $data]);
    }
    public function edit($id)
    {
        $data = Salary::with('employee')->findOrFail($id);
        return view('Employee.Salary.edit-salary', ['data' => $data]);
    }
    public function update(Request $request, $id)
    {
        $data = Salary::findOrFail($id);
        $data->update($request->all());
        return redirect('/salarys');
    }
    public function delete($id)
    {
        $data = Salary::findOrFail($id);
        $data->delete();
        return redirect('/salarys');
    }
}
