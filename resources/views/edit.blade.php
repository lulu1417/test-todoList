<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    ​
    <title>Edit Todo</title>
    ​
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    ​
    <style>
        .fa-btn {
            margin-right: 6px;
        }
        ​
        table button {
            margin-left: 20px
        }
    </style>
</head>
<body id="app-layout">
<div class="panel-body">
    <!-- New Task Form -->
    <form action="{{route('edit')}}" method="POST" class="form-horizontal" >
        <!-- Task Name -->
        <div class="form-group">
            <label for="task-name" class="col-sm-3 control-label">Task</label>
            ​
            <div class="col-sm-6">
                <input type="hidden" name="id" id="task-name" class="form-control" value="{{$todo['id']}}">
                <input type="text" name="todo" id="task-name" class="form-control" value="{{$todo['todo']}}">
            </div>
        </div>
        ​
        <!-- Save Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-btn fa-plus"></i>Save
                </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
