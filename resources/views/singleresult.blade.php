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
            <div class="col-8">
                @foreach ( $data as $id =>$user )       
                <h3>Result of {{ $user->name}}</h3>
                <h5>Roll No. = {{ $user->id}}</h5>
                <h4>Father's Name : {{ $user->father_name}}</h4>
                <h4>Mother's Name : {{ $user->mother_name}}</h4>
                <table class="table table-bordered table-stripped">
                    <tr>
                        <th>
                            <h5>
                                Maths
                            </h5>
                            <h6>marks out of 100</h6>
                        </th> 
                        <th>
                            <h5>
                                Physics
                            </h5>
                            <h6>marks out of 100</h6>
                        </th>
                        <th>
                            <h5>
                                Chemistry
                            </h5>
                            <h6>marks out of 100</h6>
                        </th>
                        <th>
                            <h5>
                                English
                            </h5>
                            <h6>marks out of 100</h6>
                        </th>
                        <th>
                            <h5>
                                Hindi
                            </h5>
                            <h6>marks out of 100</h6>
                        </th>
                        <th><h5>Percentage</h5></th>
                        <th><h5>Result </h5></th>
                    </tr>
                    <tr>
                        <td>{{ $user->Maths}}</td>
                        <td>{{ $user->Physics}}</td>
                        <td>{{ $user->Chemistry}}</td>
                        <td>{{ $user->English}}</td>
                        <td>{{ $user->Hindi}}</td>
                        <td>{{ ($user->Hindi+$user->English+$user->Chemistry+$user->Physics+$user->Maths)/5}}</td>
                        <td>
                            @if($user->Maths<33 || $user->Physics<33 || $user->Chemistry<33 || $user->English<33 || $user->Hindi<33)
                                Fail
                             @else
                                Pass
                            @endif
                        </td>
                    </tr>
                    @endforeach   
                </table>
            </div>
        </div>
    </div>
</body>
</html>
