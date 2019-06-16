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
        @foreach($professors as $professor)
            <tr>
                <th scope="row">1</th>
                <td>{{$professor->name}}</td>
                <td></td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    @endsection