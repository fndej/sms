<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Genders;
use App\Models\Departments;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students =\DB::table('students')
        ->join('genders', 'genders.id', '=', 'students.gender')
            ->join('departments','departments.id','=','students.department')
                ->select('*','departments.id as depid','students.id as sid')
            ->get();
        return view('student_list',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genders =Genders::all();
        $departs =Departments::all();
        return view('create_student',
            [
                'genders'=>$genders,
                'departments'=>$departs,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $studen= new Students();
        $studen->first_name=$request->first_name;
        $studen->last_name=$request->last_name;
        $studen->middle_name=$request->middle_name;
        $studen->email=$request->email;
        $studen->gender=$request->gender;
        $studen->department=$request->department;
        $studen->save();
        return redirect('/')->with('success','Successfully Add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Students::find($id);
        $genders =Genders::all();
        $departs =Departments::all();
        return view('edit_student',
            [
                'genders'=>$genders,
                'departments'=>$departs,
                'student'=>$student
            ]);
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
        $studen= Students::find($id);
        $studen->first_name=$request->first_name;
        $studen->last_name=$request->last_name;
        $studen->middle_name=$request->middle_name;
        $studen->email=$request->email;
        $studen->gender=$request->gender;
        $studen->department=$request->department;
        $studen->save();
        return redirect('/')->with('success','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Students::find($id);
        $student->delete();
        return back()->with('success','Successfully Deleted');
    }
}
