@extends("shared.user_layout")

@section("content")

        <a href="/classes/mine"><button class="btn btn-primary" id="menu-toggle">Back</button></a>
    <br>
    <h3 class="text-center">Grades</h3>
    <br>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID#</th>
            <th scope="col">Student</th>
            <th scope="col">Professor</th>
{{--            <th scope="col">Grade</th>--}}
            <th scope="col">Grade</th>
        </tr>
        </thead>
        <tbody>
        @foreach($grades as $grade)
            <tr>
                <th scope="row">{{$grade->id}}</th>
                <td>{{$grade->student}}</td>
                <td>{{$grade->professors}}</td>
{{--                <td>{{$grade->value == "" ? "Unassigned" : $grade->value}}</td>--}}
                <td><form method="post" action="/grades/save">
                        @csrf
                        <div class="form-group col-md-6">
                            <input type="hidden" name="id" value="{{$grade->id}}">
                            <input type="hidden" name="class" value="{{$grade->class}}">
                            <input onchange="this.form.submit()" type="text" class="form-control" name="grade" value="{{$grade->value == "" ? "Unassigned" : $grade->value}}" >
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection