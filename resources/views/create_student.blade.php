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
<body class="py-5">
<div class="container">
    <div class="col-md-8 mx-auto">
    <div class="card">
        <div class="card-header">
            <h3>Create Students</h3>
        </div>
        <div class="card-body">
            <form action="/save"method="post">
                @csrf
                @method('post')
            <div class="row">

                <div class="col col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" placeholder="First Name">
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Middle Name</label>
                        <input type="text" name="middle_name" class="form-control" placeholder="Middle Name">
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gender</label>
                        <select name="gender" class="form-control">
                            <option value="">----Select -----</option>
                            @foreach($genders as $gender):
                                <option value="{{$gender->id}}">{{$gender->gender_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Department</label>
                        <select name="department" class="form-control">
                            <option value="">----Select -----</option>
                            @foreach($departments as $dep):
                                <option value="{{$dep->id}}">{{$dep->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="mb-3">
{{--                        <label for="exampleFormControlTextarea1" class="form-label">Email</label>--}}
                        <button type="submit" class="btn btn-lg btn-info ">Save</button>
                    </div>
                </div>
                </form>

            </div>



        </div>
    </div>

</div>
</body>
</html>
