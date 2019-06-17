@extends('shared.admin_layout')

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
{{--                <td>{{$grade->professors}}</td>--}}
                <td>{{$grade->classname}}</td>
                <td>{{$grade->value == "" ? "Unassigned" : $grade->value}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection