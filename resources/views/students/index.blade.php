@extends("shared.admin_layout")

@section("content")

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Department</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <a href="students/{{$student->id}}">
                <tr>
                    <th scope="row">{{$student->id}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->department}}</td>
                    <td><a href="students/delete/{{$student->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                </tr>
            </a>
        @endforeach
        </tbody>
    </table>



@endsection