@extends('layout')

@section('content')


<div class="row">
    <div class="col-lg-12 ">
        <form action="/todo/save/" method="POST">
            {{ csrf_field() }}
            <input type="text" class="form-control" name="todo" value= "{{$todo->$todo}} " placeholder="Create a new Todo">
        </form>
    </div>
</div>
<hr>
@stop