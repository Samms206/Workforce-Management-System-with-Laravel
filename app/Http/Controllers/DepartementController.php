<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    public function index()
    {
        $data = Departement::all();
        return view('Departement\departement',['listDepartements' => $data]);
    }

    public function show($id)
    {
        $data = Departement::with('employees')->findOrFail($id);
        return view('Departement\detail_departement',["departement" => $data]);
    }

    public function create()
    {
        return view("Departement\add_departement");
    }

    public function store(Request $request)
    {
        Departement::create($request->all());
        return redirect('/departements');
    }

    public function edit($id)
    {
        $data = Departement::findOrFail($id);
        return view('Departement\edit_departement', ["departement" => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = Departement::findOrFail($id);
        $data->update($request->all());
        return redirect('/departements');
    }
    public function delete($id)
    {
        $data = Departement::findOrFail($id);
        $data->delete();
        return redirect('/departements');
    }
}
