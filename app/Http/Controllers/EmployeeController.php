<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::all();
        return view ('employee.index',compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fname = $request ->input('fname');
        $lname = $request ->input('lname');
        $address = $request ->input('address');
        $gender = $request ->input('gender');
        $email = $request ->input('email');
        $mobile = $request ->input('mobile');
        $dob = $request ->input('dob');
        $salary = $request ->input('salary');

        $employee = new Employee();
        $employee ->first_name = $fname;
        $employee ->last_name = $lname;
        $employee ->address = $address;
        $employee ->gender = $gender;
        $employee ->email = $email;
        $employee ->mobile = $mobile;
        $employee ->dob = $dob;
        $employee ->salary = $salary;

        $employee -> save();
        return redirect('employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee1 = Employee::find($id);
        return view ('employee.show',compact('employee1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee2 = Employee::find($id);
        return view ('employee.edit',compact('employee2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fname = $request ->input('fname');
        $lname = $request ->input('lname');
        $address = $request ->input('address');
        $gender = $request ->input('gender');
        $email = $request ->input('email');
        $mobile = $request ->input('mobile');
        $dob = $request ->input('dob');
        $salary = $request ->input('salary');

        $employee =Employee::find($id);
        $employee ->first_name = $fname;
        $employee ->last_name = $lname;
        $employee ->address = $address;
        $employee ->gender = $gender;
        $employee ->email = $email;
        $employee ->mobile = $mobile;
        $employee ->dob = $dob;
        $employee ->salary = $salary;

        $employee -> save();
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee3=Employee::find($id);
        $employee3->delete();

        return redirect()->route('employees.index');
    }
}
