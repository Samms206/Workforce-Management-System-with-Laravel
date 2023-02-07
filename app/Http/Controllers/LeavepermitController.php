<?php

namespace App\Http\Controllers;

use App\Models\Leavepermit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeavepermitController extends Controller
{
    public function index()
    {
        $data = Leavepermit::with('employee')->get();
        return view('Employee.LeavePermit.leavepermit', ['listData' => $data]);
    }
    public function create()
    {
        return view('Employee.Leavepermit.leavepermit-add');
    }
    public function store(Request $request)
    {
       $request['employee_id'] = Auth::user()->id;
       Leavepermit::create($request->all());
       return redirect('/');
    }
    public function update(Request $request, $id)
    {
       $data = Leavepermit::findOrFail($id);
       $data->update($request->all());
       return redirect('/leavepermits');
    }
    public function notif()
    {
       $data = Leavepermit::with('employee')->where('employee_id', Auth::user()->id)->get();
       return view('Employee.Notifycation.notifycation', ['listData' => $data]);
    }
}
