<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Update result</h1>
                <form action="{{ route('update.result', $data->id)}}" class="forrm-inline" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Name</label>
                            <input type="text" value="{{ $data->name}}"  class="form-control" name="name" >
                        </div>
                        <div class="col">
                            <label class="form-label">Father's Name</label>
                            <input type="text" value="{{ $data->father_name}}"  class="form-control" name="father_name" >
                        </div>
                        <div class="col">
                            <label class="form-label">Mother's Name</label>
                            <input type="text" value="{{ $data->mother_name}}"  class="form-control" name="mother_name" >
                        </div>
                    </div>
                    <br><br><br>
                    <div class="row">

                        <div class="col">
                            <label class="form-label">Maths</label>
                            <input type="number" value="{{ $data->Maths}}"  class="form-control" name="Maths" >
                        </div>
                        <div class="col">
                            <label class="form-label">Physics</label>
                            <input type="number" value="{{ $data->Physics}}" class="form-control" name="Physics" >
                        </div>
                        <div class="col">
                            <label class="form-label">Chemistry</label>
                            <input type="number" value="{{ $data->Chemistry}}" class="form-control" name="Chemistry" >
                        </div>
                        <div class="col">
                            <label class="form-label">English</label>
                            <input type="number" value="{{ $data->English}}" class="form-control" name="English" >
                        </div>
                        <div class="col">
                            <label class="form-label">Hindi</label>
                            <input type="number" value="{{ $data->Hindi}}" class="form-control" name="Hindi" >
                        </div>
                        <div class="col">
                            <label class="form-label">Result</label>
                            <input type="text" value="{{ $data->result}}" class="form-control" name="Result" >
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn float-center btn-primary">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>