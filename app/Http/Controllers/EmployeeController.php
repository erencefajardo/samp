<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
   
    public function index()
    {
        $emp = Employee::all()->sortByDesc('id');
        return view('emp-record', compact('emp'));
    }

  
    public function create()
    {
        return view('add-form');
    }

   
    public function store(Request $request)
    {
        $emp = new Employee;
        $emp->name = $request->input('name');
        $emp->position = $request->input('position');
        $emp->gender = $request->input('gender');

        $emp->save();
        return redirect()->route('list');
    }

  
    public function show($id)
    {
        $emp = Employee::find($id);
        return view('view-record', compact('emp'));   
    }

   
    public function edit($id)
    {
        $emp = Employee::find($id);
        return view('edit-record', compact('emp'));   
    }

    public function update(Request $request, $id)
    {
        $emp = Employee::find($id);
        $emp->name = $request->input('name');
        $emp->position = $request->input('position');
        $emp->gender = $request->input('gender');

        $emp->update();
        return redirect()->route('list');
    }


    public function destroy($id)
    {
        $emp = Employee::find($id)->delete();
        return redirect()->route('list');
    }
}
