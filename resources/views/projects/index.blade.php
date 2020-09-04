<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($projects as $project)
        <a href="/projects/{{$project->id}}">
            <h2>{{$project->title}} </h2> </a>
        <div>
            <p>{{$project->description}}</p>
            <p>Author: {{$project->user->name}}</p>
            <p>E-mail: {{$project->user->email}}</p>
        </div>
    @endforeach
</body>
</html>
