@extends('layouts.app')
@section('title')
    title

@endsection
@section('content')
<div class="container">
    <div class="card card-default">
        <div class="card card-header">
            Todo
        </div>
        <div class="card card-body">
                <li>{{$todo->title}}</li>
                <p> {{$todo->description}}</p>
        </div>
    </div>
</div>
@endsection
