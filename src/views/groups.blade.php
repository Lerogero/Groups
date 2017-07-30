<!DOCTYPE html>
<html>
<head>
    <title>Groups</title>
</head>
<body>
@foreach($groups as $group)
    <h3>{{$group->name}}</h3>
    <p>{{$group->description}}</p>
@endforeach
</body>
</html>