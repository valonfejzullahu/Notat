@extends("shared.admin_layout")

@section("content")

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Class</th>
            <th scope="col">Department</th>
            <th scope="col">Professor</th>
        </tr>
        </thead>
        <tbody>
        @foreach($classes as $class)
            <tr>
                <th scope="row">1</th>
                <td>{{$class->name}}</td>
                <td>{{$class->department}}</td>
                <td>{{$class->professor}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection