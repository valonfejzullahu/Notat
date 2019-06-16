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
        @foreach($students as $student)
            <a href="students/{{$student->id}}">
                <tr>
                    <th scope="row">1</th>
                    <td>{{$student->name}}</td>
                    <td></td>
                    <td></td>
                </tr>
            </a>
        @endforeach
        </tbody>
    </table>

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Semester</th>
            <th scope="col">Class</th>
            <th scope="col">Professor</th>
            <th scope="col">Grade</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <a href="students/{{$student->id}}">
                <tr>
                    <th scope="row">1</th>
                    <td>{{$student->name}}</td>
                    <td></td>
                    <td></td>
                </tr>
            </a>
        @endforeach
        </tbody>
    </table>

@endsection