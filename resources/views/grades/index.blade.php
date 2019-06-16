@extends("shared.user_layout")

@section("content")

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID#</th>
            <th scope="col">Student</th>
            <th scope="col">Professor</th>
            <th scope="col">Grade</th>
{{--            <th scope="col">Date assigned</th>--}}
        </tr>
        </thead>
        <tbody>
        @foreach($grades as $grade)
            <tr>
                <th scope="row">{{$grade->id}}</th>
                <td>{{$grade->student}}</td>
                <td>{{$grade->professors}}</td>
                <td>{{$grade->value == "" ? "Unassigned" : $grade->value}}</td>
{{--                <td>{{$grade->assignedAt}}</td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>

    @endsection