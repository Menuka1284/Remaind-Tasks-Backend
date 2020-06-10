<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE TASK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
 <div class="container">
 <br>
 <br>
 <form action="/updatetasks" method="post">
 {{ csrf_field() }}
 <br>&nbsp;&nbsp;
<br> <input type="text" class="form-control" name="task" value="{{$taskdata->task}}"/><br>
<input type="hidden" name="id" value="{{$taskdata->id}}"/>
<input type="submit"  class="btn btn-success" value="Update"/>
&nbsp;&nbsp;<input type="button" class="btn btn-danger" value="Cancel"/>
 </form>
 
 </div>
</body>
</html>