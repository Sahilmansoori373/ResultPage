<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>All Students Result</h1>
                <a href="/addnew" class="btn btn-success btn-sm mb-3"> Add New</a>
                <table class="table table-bordered table-stripped">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Father's Name</th>
                        <th>Mother's Name</th>
                        <th>Result</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    @foreach ( $data as $id =>$user )
                    <tr>
                        <td>{{ $user->id}}</td>
                        <td>{{ $user->name}}</td>
                        <td>{{ $user->father_name}}</td>
                        <td>{{ $user->mother_name}}</td>
                        <td>
                            @if($user->Maths<33 || $user->Physics<33 || $user->Chemistry<33 || $user->English<33 || $user->Hindi<33)
                                Fail
                             @else
                                Pass
                            @endif
                        </td>
                            <td><a href="{{ route('view.student', $user->id)}}" class="btn btn-primary btn-sm" > View</a></td>
                            <td><a href="{{ route('delete.result', $user->id)}}" class="btn btn-danger btn-sm" > Delete</a></td>
                            <td><a href="{{ route('update.Id', $user->id)}}" class="btn btn-warning btn-sm" > Update</a></td>
                        </tr>
                    @endforeach   
                </table>
                <div class="mt-5">
                    {{ $data->links()}}
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
