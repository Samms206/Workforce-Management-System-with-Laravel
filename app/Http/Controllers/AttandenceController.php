<?php

namespace App\Http\Controllers;


// use Barryvdh\DomPDF\PDF;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF as pdf;
use App\Http\Controllers\Controller;
use App\Http\Requests\AttendanceRequest;
use Illuminate\Support\Facades\Session;

class AttandenceController extends Controller
{
    public function index()
    {
        $data = Attendance::with('employee')->get();
        return view("Attendences\attendences-report",["listAttendences" => $data]);
    }

    public function create()
    {
        return view("Attendences\attendences");
    }

    public function store(AttendanceRequest $request)
    {
        Attendance::create($request->all());
        Session::flash('status','success');
        Session::flash('message','Anda Berhasil Absen Hari ini!');
        return redirect("/attendences");
    }
    public function print()
    {
        
    }
}
