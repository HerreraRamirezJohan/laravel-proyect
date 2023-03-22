<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;



class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['employe'] = Employe::all();
        return view('employe.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('employe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$dataEmploye = $request->all();
        $dataEmploye = $request->except('_token');
        
        if($request->hasFile('photo')){
            $dataEmploye['photo'] = $request->file('photo')->store('upload', 'public');
        }

        Employe::insert($dataEmploye);

        return redirect('employe')->with('msg', 'Empleado agregado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employe $employe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employe = Employe::findOrFail($id);
        return view('employe.edit', compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $dataEmploye = $request->except(['_token', '_method']);
        
        if($request->hasFile('photo')){
            $employe = Employe::findOrFail($id);
            Storage::delete('public/'.$employe->photo);

            $dataEmploye['photo'] = $request->file('photo')->store('upload', 'public');
        }


        Employe::where('id', '=', $id)->update($dataEmploye);

        $employe = Employe::findOrFail($id);
        return view('employe.edit', compact('employe'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employe = Employe::findOrFail($id);
        if(Storage::delete('public/'.$employe->photo)){
            Employe::destroy($id);
        }
        
        return redirect('employe')->with('msg', 'El empleado '.$employe->name.'ha sido eliminado.');
    }
}
