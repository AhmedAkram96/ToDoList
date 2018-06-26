@extends('layouts.app')

@section('content')
<a href="/todolist/public" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">GOBACK</a>

<div class="card">
    <div class="card-body">
        <h1>  {{$todo->text}} </h1>
        <p class="card-text">{{$todo->body}}</p>
        <a style="color:red" class="label label-primary">{{$todo->due}}</a>
    </div>
</div>
<a class='btn btn-primary' href='{{$todo->id}}/edit'> Edit <a>

{!! Form::open(['action' => ['TodosController@destroy' , $todo->id], 'method' => 'POST']) !!}
{{  Form::hidden('_method', 'DELETE') }}
{{  Form::bsSubmit('delete' , ['class' => 'btn btn-danger']) }}
{!! Form::close() !!}
@endsection