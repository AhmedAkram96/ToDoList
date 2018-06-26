@extends('layouts.app')

@section('content')

<h1> TODOS </h1>
@if(count($todos) > 0 )
 @foreach($todos as $todo)
   

    <div class="card">
      <div class="card-body">
        <b> <h3 class="card-title"><a href="todo/{{$todo->id}}"> {{$todo->text}}</a></h3> </b>
        <a style="color:red" class="label label-primary">{{$todo->due}}</a>
      </div>
  

 @endforeach
@endif
@endsection