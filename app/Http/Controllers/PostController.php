<?php


namespace App\Http\Controllers;
use App\Http\Requests\SavePostRequest;
use App\Models\Employee;
use App\Models\Movie;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('home');
    }

    public function employees_fun(){
        $employees = Employee::all();
        return view('employee_list')->with('employees',$employees);
    }

    public function edit($id){
        $employee=Employee::findOrFail($id);
        return view('edit')->with('employee',$employee);
    }

    public function update(Request $request, Employee $employee){
        $employee->update($request->all());
        return redirect()->back();
    }
}
