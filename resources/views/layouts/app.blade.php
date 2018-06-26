<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> ToDolist </title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
 

</head>

<body>
@include('inc.navbar')
<div class="container">
@include('inc.messages')
@yield('content')

</div>

<footer id="footer" class="text-center">
<p> CopyRights &copy; 2017 Todolist </p>
</footer>

</body>


</html>