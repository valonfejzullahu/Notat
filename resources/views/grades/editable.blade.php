@extends('shared.user_layout')

@section("content")

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID#</th>
            <th scope="col">Student</th>
{{--            <th scope="col">Professor</th>--}}
            <th scope="col">Class</th>
            <th scope="col">Grade</th>
        </tr>
        </thead>
        <tbody>
        @foreach($grades as $grade)
            <tr>
                <th scope="row">{{$grade->id}}</th>
                <td>{{$grade->studentname}}</td>
{{--                <td>{{$grade->professorname}}</td>--}}
                <td>{{$grade->classname}}</td>
{{--                <td>{{$grade->value == "" ? "Unassigned" : $grade->value}}</td>--}}
                <td><form method="post" action="/grades/save">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="id" value="{{$grade->id}}">
                            <input type="hidden" name="class" value="{{$grade->class}}">
                            <input onchange="this.form.submit()" type="text" class="form-control col-sm-4" name="grade" value="{{$grade->value == "" ? "Unassigned" : $grade->value}}" >
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection