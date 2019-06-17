@extends("shared.user_layout")

@section("content")

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Class</th>
            <th scope="col">Department</th>
            <th scope="col">Grades</th>
{{--            <th scope="col">Delete</th>--}}
        </tr>
        </thead>
        <tbody>
        @foreach($classes as $class)
            <tr>
                <th scope="row">{{$class->id}}</th>
                <td>{{$class->name}}</td>
                <td>{{$class->department}}</td>
                <td><a href="/grades/class/{{$class->id}}"><button type="button" class="btn btn-info">Grades</button></a></td>
{{--                <td><a href="classes/delete/{{$class->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>



@endsection