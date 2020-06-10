<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="text-center">
    <h1>Daily Task</h1> 
            <div class="row">
                        <div class="col-md-12">
                        @foreach($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                {{$error}}
                                </div>
                            @endforeach

                                <form method="post" action="/saveTask">
                                {{csrf_field()}}
                                        <input type="text" class="form-control" name="task" placeholder="Enter Your Tasks Here"></br>
                                        <input type="submit" class="btn btn-primary" value="SAVE" &nbsp; &nbsp;>
                                        <input type="button" class="btn btn-warning" value="CLEAR"></br>
                                </form>
                        <table class="table table-dark"></br>
                        <th>ID</th>
                        <th>TASK</th>
                        <th>COMPLETED</th>
                        <th>ACTION</th>
                        @foreach($tasks as $task)
                        <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->task}}</td>
                        <td>
                                @if($task->iscompleted)
                                <button class="btn btn-success">COMPLETED</button>
                                @else
                                <button class="btn btn-warning">Not-COMPLETED</button>
                                        @endif
                                        </td>
                                        <td>
                                        @if(!$task->iscompleted)
                                        <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">MARK AS COMPLETED</a>
                                        @else
                                        <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-info">MARK AS NOT-COMPLETED</a>
                                        @endif
                                        <a href="/deletetask/{{$task->id}}" class="btn btn-danger">DELETE</a>

                                        <a href="/updatetask/{{$task->id}}" class="btn btn-success">UPDATE</a>
                                        </td>
                         </tr>
                         @endforeach
                        </table>
                        </div>
            </div>
    </div>
    </div>
</body>
</html>