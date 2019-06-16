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
        @foreach($professors as $professor)
            <tr>
                <th scope="row">{{$professor->id}}</th>
                <td>{{$professor->name}}</td>
                <td>{{$professor->email}}</td>
                <td>{{$professor->department}}</td>
                <td><a href="professors/delete/{{$professor->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    @endsection