<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

        </head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <body class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3>Student List</h3>
                            <a href="/create" class="btn btn-sm btn-primary float-end"><i class="fa fa-square-plus"></i> Add New </a>
                        </div>
                        <div id="app">
                            @if(Session::has('success'))

                                <div class="alert alert-success alert-close">

                                    {{Session::get('success')}}

                                </div>

                            @endif
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Full Name</th>
                                        <th>Gender</th>
                                        <th>Department</th>
                                        <th>Action</th>
                                        </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $key=>$student)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$student->first_name . ' ' . $student->middle_name}}</td>
                                        <td>{{$student->gender_name}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>
                                            <a href="/edit/{{$student->sid}}" class="btn btn-sm btn-success">Edit</a>
                                            <a href="/delete/{{$student->sid}}" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach()

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
</div>
</body>
</html>
