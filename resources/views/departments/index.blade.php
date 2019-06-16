@extends("shared.admin_layout")

@section("content")

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Department</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($departments as $department)
            <tr>
                <th scope="row">{{$department->id}}</th>
                <td>{{$department->name}}</td>
                <td><a href="departments/delete/{{$department->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection