<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Http\Middleware;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('checkRole');
    }

    public function index()
    {
        $students = DB::table('users')
            ->leftJoin('departments', 'users.department', '=', 'departments.id')
            ->select("users.*", "departments.name as departmentname")
            ->where("users.role", "=","Student")
            ->get();

//        $students = App\User::where('role', 'Student')->get();

        return view("students.index", ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = App\Department::all();

        return view("shared.create", ['departments' => $departments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = App\User::where("id", $id)->get();
        $classes = App\Grade::where("student", $id)->get();

        return view("students.profile", ['student' => $student], ["classes" => $classes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        App\User::destroy($id);

        return redirect("/students");
    }
}
