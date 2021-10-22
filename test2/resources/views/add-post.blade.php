<!DOCTYPE>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="le=edge">
    <title>Add Post</title>
</head>

<body>
@if
<span>{{session::get('post_add')}}</span>
@endif
<form method ="post" action="{{'save.post'}}">
        @csrf
        Post:<br><input type="text" name="name" value=""><br>
        Description:<br><textarea name="description"></textarea>
        <input type="submit" value="Submit">
</form>
</body>

</html>