@extends("shared.admin_layout")

@section("content")

    <div class="text-center">
        <div class="col-md-7">
            <h2 class="featurette-heading">Welcome {{$student->first()->name}}</h2>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="200" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
        </div>
    </div>

    </br></br>
    <h3 class="text-center">Your classes</h3>
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
        @foreach($classes as $class)
            <a href="students/{{$class->id}}">
                <tr>
                    <th scope="row">1</th>
                    <td>{{$class->class}}</td>
                    <td>{{$class->professors}}</td>
                    <td>{{$class->value == "" ? "Unnasigned" : $class->value}}</td>
                </tr>
            </a>
        @endforeach
        </tbody>
    </table>

@endsection