<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
</head>
<body>
    <div class="content mb-1">
        <h1>Shopping List</h1>
        <form action="{{route('saveToshop')}}" method="post">
            @csrf
            <input type="text" name="toshop">
            <button type="submit" class="btn btn-success">ADD</button>
        </form>
    </div>
    <div>
    <table class="table table-striped mt-3">
        <tr>
            <td>Id</td>
            <td>Title</td>
            <td>Created_Date</td>
            <td>Updated_Date</td>
            <td>Action</td>
        </tr>
        @foreach($List as $values)
        <tr>
            <td>{{$values->id}}</td>
            <td>{{$values->title}}</td>
            <td>{{$values->created_at}}</td>
            <td>{{$values->updated_at}}</td>
            <!-- <td>
                <form action="{{route('delete',$values->id)}}" method='POST' >
                    @csrf
                    <button type='submit' class="btn btn-danger">Delete</button>

                </form>
            </td> -->
            <td><a href="{{url('/delete/'. $values->id)}}"><button class="btn btn-danger">Delete</button></a></td>
            <td><a href="{{url('/edit/'. $values->id)}}"><button class="btn btn-success">edit</button</a></td>


        </tr>
        @endforeach
    </table>
    </div>
</body>
</html>