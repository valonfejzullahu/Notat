@extends("shared.admin_layout")

@section("content")

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        @foreach($departments as $department)
            <tr>
                <th scope="row">1</th>
                <td>{{$department->name}}</td>
                <td></td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection