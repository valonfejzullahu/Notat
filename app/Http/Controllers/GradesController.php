<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;

class GradesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    public function classgrades($id)
    {
//        $grades = App\Grade::where('class', $id)->get();

        $grades = DB::table('grades')
            ->leftJoin('classes', 'grades.class', '=', 'classes.id')
            ->leftJoin('users', 'grades.student', '=', 'users.id')
            ->select("grades.*", "classes.name as classname", "users.name as studentname")
            ->where("grades.class","=",$id)
            ->get();

        $user = Auth::user();
        $role = $user->role;
        if ($role == "Admin"){
            return view("grades.viewable", ['grades' => $grades]);
        }
        return view("grades.editable", ['grades' => $grades]);
    }

    public function usergrades()
    {
        $user = Auth::user();
        $id = $user->id;
//        $grades = App\Grade::where('student', $id)->get();

        $grades = DB::table('grades')
            ->leftJoin('classes', 'grades.class', '=', 'classes.id')
            ->leftJoin('users', 'grades.professors', '=', 'users.id')
            ->select("grades.*", "classes.name as classname", "users.name as username")
            ->where("grades.student","=",$id)
            ->get();

        return view("grades.index", ['grades' => $grades]);
    }

    public function change(Request $request)
    {
//        $user = Auth::user();
//        $id = $user->id;
        $grade = App\Grade::find($request->get('id'));
        $grade->value = $request->get('grade');
        $grade->update();


        return redirect("/grades/class/".$request->get('class'));

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
        App\Grade::destroy($id);

        return redirect("/grades");
    }
}
