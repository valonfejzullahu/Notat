<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Notat</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">

</head>

<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"><a href="/"><strong>Home</strong></a></div>
        <div class="list-group list-group-flush">
            <a href="/professors" class="list-group-item list-group-item-action bg-light">Professors</a>
            <a href="/students" class="list-group-item list-group-item-action bg-light">Students</a>
            <a href="/departments" class="list-group-item list-group-item-action bg-light">Departments</a>
            <a href="/classes" class="list-group-item list-group-item-action bg-light">Classes</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            @if(Request::segment(2) != "create" and Request::segment(1) != "admin")
                <a href="{{ Request::segment(1) }}/create"><button class="btn btn-primary" id="menu-toggle">Add New</button></a>
            @endif

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        @yield("content")

    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>

