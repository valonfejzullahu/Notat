<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Auth;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('checkRole')->except("mine");
    }


    public function index()
    {
        $classes = App\Subject::all();

        return view("classes.index", ['classes' => $classes]);
    }

    public function mine()
    {
        $user = Auth::user();
        $id = $user->id;
        $classes = App\Subject::where("professor", $id)->get();

        return view("classes.mine", ['classes' => $classes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $departments = App\Department::all();

        $professors = App\User::where("role", "Professor")->get();

        return view("classes.create", ['departments' => $departments], ['professors'=>$professors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subject = new Subject();

        $subject->name = request('name');
        $subject->department = request("department");
        $subject->professor = request("professor");

        $subject->save();

        return redirect("/classes");
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
        App\Subject::destroy($id);

        return redirect("/classes");
    }
}
